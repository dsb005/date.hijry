<html>
<head>
<title>Hijry Date Conversion Testing...From  To 2029</title>
<script type="text/javascript" src="inc/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="inc/iDate.js"></script>
<script type="text/javascript">
tDates = new Array();
tDates[0] = new Array();
tDates[1] = new Array();
tDates[2] = new Array();
function submitDate()
{
	var y = $('#year').val();
	var m = $('#month').val();
	var d = $('#day').val();

	// Get Result from DB
	param = y+m+d;
	ardate = getArDate(param);
	getJsonDate(d,m,y);
	$('#result').html("Arabic Date: "+ardate+"<br>");
}
$(document).ready(function() {
	<?php
	$con = mysql_connect("localhost","root","root");
	mysql_select_db("islamydate");
	$rs = mysql_query("SELECT * FROM sysdates WHERE EN_YEAR > 1990 limit 500");
	$i=0;
	while($row = mysql_fetch_assoc($rs))
	{
		echo "\n\ttDates[0][".$i."] = ".$row['EN_YEAR'].addZero($row['EN_MONTH']).addZero($row['EN_DAY']).";";
		echo "\n\ttDates[1][".$i++."] = ".$row['AR_YEAR'].addZero($row['AR_MONTH']).addZero($row['AR_DAY']).";";
	}

	function addZero($num)
	{
		if(strlen($num) == 1) return "0".$num; else return $num;
	}
	?>
});

function runCompare()
{
	//console.log("Dates::: "+tDates);
	$.each(tDates, function(index, val) {
		$.each(tDates[0], function(ix, vx) {
			//console.log("Converting : "+vx);
			tDates[2][ix] = getArDate(vx);
			//console.log(tDates[1][ix]+" == "+tDates[2][ix]);
			if(tDates[1][ix].toString() === tDates[2][ix].toString())
				console.log('YES::');
			else
				console.log('NO::'+vx+" ::: "+tDates[1][ix]+" == "+tDates[2][ix]);
		});
	});
}
</script>
</head>
<body>
<form action="" methud="post">
<div>
Year:  <input type="text" name="year" id="year" value="2014" />
Month: <input type="text" name="month" id="month" value="11" />
Day:   <input type="text" name="day" id="day" value="24" />
<input type="button" value="submit" onclick="javascript:submitDate();" />
<input type="button" value="RunCompare" onclick="javascript:runCompare()" />
<p>
<div><h5 id="result"></h5></div>
</div>
</form>
</html>