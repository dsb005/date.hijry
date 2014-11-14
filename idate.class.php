<?php
/*
no copyrights just use it the way you want...
info@islamydate.com
*/

class iDate
{
	public static $keys = array('1400@311893200@339973200@0305070810@01020406091112','1401@342478800@370558800@010406080911@020305071012','1402@373064400@401144400@010507091012@020304060811','1403@403736400@431816400@0206081011@01030405070912','1404@434322000@462402000@010205091112@030406070810','1405@464994000@493074000@0203060911@01040507081012','1406@495579600@523659600@010305070912@020406081011','1407@526251600@554245200@020406081012@010305070911','1408@556837200@584830800@030507091012@010204060811','1409@587422800@615502800@0306081011@01020405070912','1410@618008400@646088400@010307091112@020405060810','1411@648680400@676760400@0204071012@01030506080911','1412@679266000@707432400@0103040711@02050608091012','1413@709938000@738018000@010204050811@030607091012','1414@740610000@768603600@020305060812@010407091011','1415@771195600@799189200@020406070912@010305081011','1416@801781200@829774800@030507091012@010204060811','1417@832366800@860446800@0305081012@01020406070911','1418@862952400@891118800@0103050911@02040607081012','1419@893624400@921704400@010204060912@030507081011','1420@924296400@952376400@0204050712@01030608091011','1421@954968400@982962000@020305060712@010408091011','1422@985554000@1013547600@030406070812@010205091011','1423@1016139600@1044133200@030507081012@010204060911','1424@1046725200@1074805200@0306080911@01020405071012','1425@1077310800@1105477200@0103060811@02040507091012','1426@1107982800@1136062800@010204060912@030507081011','1427@1138654800@1166734800@0203050710@01040608091112','1428@1169240400@1197320400@010304060711@020508091012','1429@1199912400@1227906000@020405070811@010306091012','1430@1230498000@1258491600@020506081012@010304070911','1431@1261083600@1289077200@020507091112@010304060810','1432@1291669200@1319749200@0206081012@01030405070911','1433@1322254800@1350421200@0103060911@02040507081012','1434@1352926800@1381006800@010204060912@030507081011','1435@1383512400@1411592400@010305070912@020406081011','1436@1414184400@1442178000@020406081012@010305070911','1437@1444770000@1472763600@030607091112@010204050810','1438@1475355600@1503435600@0307081011@01020405060912','1439@1505941200@1534021200@010307091112@020405060810','1440@1536613200@1564693200@0204081012@01030506070911','1441@1567198800@1595365200@0103050811@02040607091012','1442@1597870800@1625950800@010204060811@030507091012','1443@1628456400@1656536400@010305070911@020406081012','1444@1659128400@1687122000@020407081012@010305060911','1445@1689714000@1717707600@020608091112@010304050710','1446@1720299600@1748379600@0206091012@01030405070811','1447@1750885200@1779051600@0103070911@02040506081012','1448@1781557200@1809637200@010204071012@030506080911','1449@1812229200@1840309200@0203050710@01040608091112','1450@1842814800@1873314000@010305060810@020407091112');
	
	$con = mysql_connect("localhost","root","root");
	mysql_select_db("sysdates");
	$debug = true;
	$keys = array('1400@311893200@339973200@0305070810@01020406091112','1401@342478800@370558800@010406080911@020305071012','1402@373064400@401144400@010507091012@020304060811','1403@403736400@431816400@0206081011@01030405070912','1404@434322000@462402000@010205091112@030406070810','1405@464994000@493074000@0203060911@01040507081012','1406@495579600@523659600@010305070912@020406081011','1407@526251600@554245200@020406081012@010305070911','1408@556837200@584830800@030507091012@010204060811','1409@587422800@615502800@0306081011@01020405070912','1410@618008400@646088400@010307091112@020405060810','1411@648680400@676760400@0204071012@01030506080911','1412@679266000@707432400@0103040711@02050608091012','1413@709938000@738018000@010204050811@030607091012','1414@740610000@768603600@020305060812@010407091011','1415@771195600@799189200@020406070912@010305081011','1416@801781200@829774800@030507091012@010204060811','1417@832366800@860446800@0305081012@01020406070911','1418@862952400@891118800@0103050911@02040607081012','1419@893624400@921704400@010204060912@030507081011','1420@924296400@952376400@0204050712@01030608091011','1421@954968400@982962000@020305060712@010408091011','1422@985554000@1013547600@030406070812@010205091011','1423@1016139600@1044133200@030507081012@010204060911','1424@1046725200@1074805200@0306080911@01020405071012','1425@1077310800@1105477200@0103060811@02040507091012','1426@1107982800@1136062800@010204060912@030507081011','1427@1138654800@1166734800@0203050710@01040608091112','1428@1169240400@1197320400@010304060711@020508091012','1429@1199912400@1227906000@020405070811@010306091012','1430@1230498000@1258491600@020506081012@010304070911','1431@1261083600@1289077200@020507091112@010304060810','1432@1291669200@1319749200@0206081012@01030405070911','1433@1322254800@1350421200@0103060911@02040507081012','1434@1352926800@1381006800@010204060912@030507081011','1435@1383512400@1411592400@010305070912@020406081011','1436@1414184400@1442178000@020406081012@010305070911','1437@1444770000@1472763600@030607091112@010204050810','1438@1475355600@1503435600@0307081011@01020405060912','1439@1505941200@1534021200@010307091112@020405060810','1440@1536613200@1564693200@0204081012@01030506070911','1441@1567198800@1595365200@0103050811@02040607091012','1442@1597870800@1625950800@010204060811@030507091012','1443@1628456400@1656536400@010305070911@020406081012','1444@1659128400@1687122000@020407081012@010305060911','1445@1689714000@1717707600@020608091112@010304050710','1446@1720299600@1748379600@0206091012@01030405070811','1447@1750885200@1779051600@0103070911@02040506081012','1448@1781557200@1809637200@010204071012@030506080911','1449@1812229200@1840309200@0203050710@01040608091112','1450@Array');

	// Get End of Month Dates
	function eomDates()
	{
		global $con;
		// Get Year and Months
		$rs = mysql_query("SELECT * from sysdates a GROUP BY AR_YEAR, AR_MONTH ORDER BY AR_YEAR,AR_MONTH",$con) or die(mysql_error());
		while($row = mysql_fetch_assoc($rs))
		{
			// Get Max day for each month
			$rsm = mysql_query("SELECT MAX(AR_DAY) as AR_LDAY FROM sysdates WHERE AR_YEAR=".$row['AR_YEAR']." AND AR_MONTH=".$row['AR_MONTH']);
			$rowm = mysql_fetch_assoc($rsm);
			$row['AR_LDAY'] = $rowm['AR_LDAY'];
			$dates[] = $row;
		}
		//tracea($dates);
		if(gettype($dates) == 'array') return $dates; else return false;
	}

	function tracea($arr)
	{
		global $debug;
		if($debug) { echo '<pre>'; print_r($arr); echo '</pre>'; }
	}

	function traces($str)
	{
		global $debug;
		if($debug) echo '<h5>'.$str.'</h5>';
	}

	function addZero($num)
	{
		if(strlen($num) == 1) return "0".$row[$z]['EN_DAY']; else return $num;
	}

	function findDate($y,$m,$d)
	{
		$dtime = strtotime($y.'-'.$m.'-'.$d.' 00:00:00');
		$y='NO'; // Year Index
		for($i=0; $i<count($this->keys); $i++)
		{
			$vals  = explode('@',$this->keys[$i]);
			$stimes = $vals[1];
			$stimef = $vals[2];
			if($dtime >= $stimes && $dtime <= $stimef)
			{
				$y=$i;
				break;
			}
		}
		if($y != 'NO')
		{
			// Find Year
			$months = array();
			// Collect Months
			$months[0] = getMonhts($vals[3]);
			$months[1] = getMonhts($vals[4]);
			// Collect Days
			$tday = (60*60*24);
			$oday=0;
			for($i=0; $i<12; $i++)
			{
				$m=$i+1;
				// Find Days Limit
				if(in_array($m,$months[0]))
					$dlimit=29;
				elseif(in_array($m,$months[1]))
					$dlimit=30;
				else
				{
					$tval = in_array($m,$months[1]); break;
				}
			
				// Check in Days
				for($x=0; $x<$dlimit; $x++)
				{
					$d=$x+1;
					if($oday == 0)
						$cday = ($vals[1])+(($tday*$d)*$m);
					else
						$cday = $oday+$tday;
					$fday = $cday+$tday;
					if($dfound)
					{
						$sday = array($vals[0],$m,$d);
						$sd = Date($cday);
						$td = Date($dtime);
						break 2;
					}
					elseif(($fday - $dtime) >= 0)
						$dfound = true;
					else
						$dfound = false;
					$oday = $cday;
				}
			}
			// Result
			//return sday;
			print_r($sday);
		}
		else
			return false;
	}

	// sort Numbers
	function sortfunc($a,$b)
	{
		return $a - $b;
	}
	// Collect Monhts
	function getMonhts($mstr)
	{
		$slen = strlen($mstr)/2;
		$f = $z =0;
		$months = array();
		for($x=0; $x<$slen; $x++)
		{
			$f=$z+1;
			$m = substr($mstr,$z,2);
			if(substr($m,0,1) == 0) $m = substr($mstr,$f,1);
			$months[$x] = $m;
			$z+=2;
		}
		return $months;
	}

	function findDate($y,$m,$d)
	{
		global $keys,$debug;
		$dtime = strtotime($y.'-'.$m.'-'.$d.' 00:00:00'); traces('Input Date Time Stamp:'.$dtime);
		$vals;
		$stimes;
		$stimef;
		$y='NO'; // Year Index
		for($i=0; $i<count($keys); $i++)
		{
			$vals  = explode('@',$keys[$i]);
			tracea($vals);
			$stimes = $vals[1];
			$stimef = $vals[2];
			if($dtime >= $stimes && $dtime <= $stimef)
			{
				$y=$i;
				traces('Time Range Found:'.$stimes.'--'.$stimef);
				break;
			}
		}
		if($y != 'NO')
		{traces('Date Found in Range (:)');
			// Find Year
			$months = array();
			// Collect Months
			$months[0] = getMonhts($vals[3]);
			$months[1] = getMonhts($vals[4]);
			traces('Months:'); tracea($months);
			// Collect Days
			$tday = (60*60*24);
			$oday=0;
			for($i=0; $i<12; $i++)
			{
				$m=$i+1;
				// Find Days Limit
				if(in_array($m,$months[0]))
					$dlimit=29;
				elseif(in_array($m,$months[1]))
					$dlimit=30;
				else
				{
					$tval = in_array($m,$months[1]); {traces('Month Not Found:'.$m); break;}
				}
				traces('Days:'.$dlimit);
				// Check in Days
				for($x=0; $x<$dlimit; $x++)
				{
					$d=$x+1;
					if($oday == 0)
						$cday = ($vals[1])+(($tday*$d)*$m);
					else
						$cday = $oday+$tday;
					$fday = $cday+$tday;
					if($dfound)
					{
						$sday = array($vals[0],$m,$d);
						$sd = Date($cday);
						$td = Date($dtime);
						break 2;
					}
					elseif(($fday - $dtime) >= 0)
						$dfound = true;
					else
						$dfound = false;
					$oday = $cday;
					traces('day:('.$d.'),oday:('.$oday.'),cday:('.$cday.'),fday:('.$fday.')');
					traces('dfound:'.$dfound.', Date:'); tracea($sday);
					if(!$dfound) traces('Date Not Found');
				}
			}
			// Result
			//return sday;
			return($sday);
		}
		else
			return false;
	}

	// sort Numbers
	function sortfunc($a,$b)
	{
		return $a - $b;
	}
	// Collect Monhts
	function getMonhts($mstr)
	{
		$slen = strlen($mstr)/2;
		$f = $z =0;
		$months = array();
		for($x=0; $x<$slen; $x++)
		{
			$f=$z+1;
			$m = substr($mstr,$z,2);
			if(substr($m,0,1) == 0) $m = substr($mstr,$f,1);
			$months[$x] = $m;
			$z+=2;
		}
		return $months;
	}

	// function check year
	function checkYear($stime,$ftime)
	{
		global $con;
		$tday = (60*60*24);
		// GET YEAR
		$stimeYear = Date('Y',$stime);
		$rs = mysql_query("SELECT AR_YEAR FROM sysdates WHERE EN_YEAR=".$stimeYear);
		$row = mysql_fetch_assoc($rs);
		$year = $row['AR_YEAR'];
		for($i=1; $i<=12; $i++)
		{
			// Get Month Max Day
			$rs = mysql_query("SELECT MAX(AR_DAY) AR_MDAY FROM sysdates WHERE AR_YEAR=".$year." AND AR_MONTH=".$i);
			$row = mysql_fetch_assoc($rs);
			// Month Start Time & Date
			if($i==1)
				$mstime = $stime;
			else
				$mstime = $mftime+$tday;
			$msdate = Date('Y-m-d',$mstime);
			$rsd = mysql_query("SELECT * FROM sysdates WHERE EN_YEAR=".Date('Y',$mstime)." AND EN_MONTH=".Date('m',$mstime)." AND EN_DAY=".Date('d',$mstime));
			$rowd = mysql_fetch_assoc($rsd);
			$dbmsdate = $rowd;
			// Month Finish Time & Date
			$mftime = $mstime+($tday*($row['AR_MDAY']-1));
			$mfdate = Date('Y-m-d',$mftime);
			$rsd = mysql_query("SELECT * FROM sysdates WHERE EN_YEAR=".Date('Y',$mftime)." AND EN_MONTH=".Date('m',$mftime)." AND EN_DAY=".Date('d',$mftime));
			$rowd = mysql_fetch_assoc($rsd);
			$dbmfdate = $rowd;
			$x = ($i<=9)?"0".$i:$i;
			$mtimes[] = 'M('.$x.'): S('.$msdate.'),('.$dbmsdate['AR_YEAR'].'-'.$dbmsdate['AR_MONTH'].'-'.$dbmsdate['AR_DAY'].') :: F('.$mfdate.'),('.$dbmfdate['AR_YEAR'].'-'.$dbmfdate['AR_MONTH'].'-'.$dbmfdate['AR_DAY'].')';
		}
		return $mtimes;
	}

	function getTimeStamps($y1,$m1,$d1,$y2,$m2,$d2)
	{
		$tstamps[] = strtotime($y1.'-'.$m1.'-'.$d1.' 00:00:00');
		$tstamps[] = strtotime($y2.'-'.$m2.'-'.$d2.' 00:00:00');
		return $tstamps;
	}

	function findDate($y,$m,$d)
	{
		global $keys;
		$dtime = strtotime($y.'-'.$m.'-'.$d.' 00:00:00');
		$vals;
		$stimes;
		$stimef;
		$y='NO'; // Year Index
		for($i=0; $i<count($keys); $i++)
		{
			$vals  = explode('@',$keys[$i]);
			$stimes = $vals[1];
			$stimef = $vals[2];
			if($dtime >= $stimes && $dtime <= $stimef)
			{
				$y=$i;
				break;
			}
		}
		if($y != 'NO')
		{
			// Find Year
			$months = array();
			// Collect Months
			$months[0] = getMonhts($vals[3]);
			$months[1] = getMonhts($vals[4]);
			// Collect Days
			$tday = (60*60*24);
			$oday=0;
			for($i=0; $i<12; $i++)
			{
				$m=$i+1;
				// Find Days Limit
				if(in_array($m,$months[0]))
					$dlimit=29;
				elseif(in_array($m,$months[1]))
					$dlimit=30;
				else
				{
					$tval = in_array($m,$months[1]); break;
				}
				
				// Check in Days
				for($x=0; $x<$dlimit; $x++)
				{
					$d=$x+1;
					if($oday == 0)
						$cday = ($vals[1])+(($tday*$d)*$m);
					else
						$cday = $oday+$tday;
					$fday = $cday+$tday;
					if($cday == $dtime || $cday > $dtime)
					{
						$sday = array($vals[0],$m,$d,$dtime,$cday);
						$sd = Date($cday);
						$td = Date($dtime);
						break 2;
					}
					$oday = $cday;
				}
			}
			// Result
			//return sday;
			return($sday);
		}
		else
			return false;
	}

	// sort Numbers
	function sortfunc($a,$b)
	{
		return $a - $b;
	}
	// Collect Monhts
	function getMonhts($mstr)
	{
		$slen = strlen($mstr)/2;
		$f = $z =0;
		$months = array();
		for($x=0; $x<$slen; $x++)
		{
			$f=$z+1;
			$m = substr($mstr,$z,2);
			if(substr($m,0,1) == 0) $m = substr($mstr,$f,1);
			$months[$x] = $m;
			$z+=2;
		}
		return $months;
	}
	//findDate(2012,05,15);
	//findDate(2012,04,01);

	// Compare Database Dates with Class Dates
	$con = mysql_connect("localhost","root","root");
	mysql_select_db("ISLAMYDATE");
	$rs = mysql_query("SELECT a.* from sysdates a GROUP BY AR_YEAR, AR_MONTH, AR_DAY HAVING AR_YEAR=1401 AND AR_DAY=(SELECT MAX(AR_DAY) FROM sysdates WHERE AR_YEAR=a.AR_YEAR AND AR_MONTH=a.AR_MONTH)",$con) or die(mysql_error());
	if($rs)
	while($row = mysql_fetch_assoc($rs))
	{
		$row2 = findDate($row['EN_YEAR'],$row['EN_MONTH'],$row['EN_DAY']); //  Get Date From Calss
		if($row['AR_MONTH'] == $row2[1] && $row['AR_DAY'] == $row2[2])	echo '<div style="font-size:10px;">'; else echo '<div style="font-size:14px; color:red; font-weight:bold">';
		// DB DATE
		echo 'DB DATE: '.$row['AR_YEAR'].'-'.$row['AR_MONTH'].'-'.$row['AR_DAY'].' | ';
		// CLASS DATE
		echo 'CLASS DATE: ('.$row2[3].')=('.$row2[4].')'.$row2[0].'-'.$row2[1].'-'.$row2[2].' | '.$row['EN_YEAR'].'-'.$row['EN_MONTH'].'-'.$row['EN_DAY'].'<br>';
		echo '</div>';
	}
}
//findDate(1985,02,15); echo '<br>';
//findDate(2012,05,15);
//findDate(2012,04,01);
?>
<html>
<head>
<title>Hijry Date Conversion Testing...</title>
</head>
<body>
<form action="" methud="get">
<table align="center">
<tr>
	<td>Day</td>
	<td>Month</td>
	<td>Year</td>
</tr>
<tr>
	<td>
	<input name="dy" type="text" size="2" maxlength="2" value="<?php echo $_GET['dy'] ?>"></td>
	<td><input name="mn" type="text" size="2" maxlength="2" value="<?php echo $_GET['mn'] ?>"></td>
	<td><input name="yr" type="text" size="4" maxlength="4" value="<?php echo $_GET['yr'] ?>"></td>
</tr>
<?php if(isset($_GET['dy'])) { $idate = findDate($_GET['yr'],$_GET['mn'],$_GET['dy']); ?>
<tr>
	<td><?php echo $idate[0]; ?></td>
	<td><?php echo $idate[1]; ?></td>
	<td><?php echo $idate[2]; ?></td>
</tr>
<?php } ?>
<tr>
	<td colspan="3" align="center"><input type="submit" value="Convert"></td>
</tr>
</table>
</form>
</body>
</html>
