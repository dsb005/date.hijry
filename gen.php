<?php
$con = mysql_connect("localhost","root","root");
mysql_select_db("islamydate");
$rs = mysql_query("SELECT * from sysdates WHERE AR_DAY=1",$con) or die(mysql_error());
while($row = mysql_fetch_assoc($rs))
{
	$row['EN_DAY'] = addZero($row['EN_DAY']);
	$row['AR_DAY'] = addZero($row['AR_DAY']);
	$row['EN_MONTH'] = addZero($row['EN_MONTH']);
	$row['AR_MONTH'] = addZero($row['AR_MONTH']);
	$data[$row['EN_YEAR'].$row['AR_YEAR']][$row['EN_MONTH'].$row['AR_MONTH']][] = $row['EN_DAY'];
}

function addZero($num)
{
	if(strlen($num) == 1) return "0".$num; else return $num;
}

foreach ($data as $key => $date) {
	foreach ($data[$key] as $k => $val) {
		foreach ($val as $x => $v) {
			$ranges[] = $key.$k.$v;
		}
	}
}

$out = json_encode($ranges);
//echo $out;

function getArDate($d,$m,$y)
{
	$rs = mysql_query("SELECT * FROM sysdates WHERE EN_DAY=".$d." AND EN_MONTH=".$m." AND EN_YEAR=".$y);
	$row = mysql_fetch_assoc($rs);
	echo json_encode($row);
}

if(isset($_GET['d'])) getArDate($_GET['d'],$_GET['m'],$_GET['y']);
?>