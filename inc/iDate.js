//EN_YEAR|AR_YEAR|EN_MONTH|AR_MONTH|EN_DAY
var dranges = new Array();
var year;
var month;
var day;
$.getJSON( "ranges.json", function( data ) {
  $.each( data, function( key, val ) {
    dranges.push(val);
  });
});

//YearMonthday
function getArDate()
{
	if(arguments.length == 0)
	{
		date = new Date();
		year = date.getFullYear();
		month= date.getMonth()+1;
		day = date.getDate();
	}
	else
	{
		date = arguments[0].toString();
		//console.log("Getting Date From: "+date);
		year  = parseInt(date.substr(0,4));
		month = parseInt(date.substr(4,2));
		day   = parseInt(date.substr(6,2));
	}

	// Get tag Match
	var m = new Array();
	// Months Range
	m[0] = getMonthNumber(year, (month-1));
	m[1] = getMonthNumber(year, (month));
	m[2] = getMonthNumber(year, (month+1));
	m[3] = getMonthNumber(year, (month+2));
	//console.log("Months::"); console.log(m);
	tag = year+month;
	var tm = new Array();
	var params = new Array();
	// Tag Match Params
	cyear = year;
	params[0] = m[0][0]+''+m[0][1];
	params[1] = m[1][0]+''+m[1][1];
	params[2] = m[2][0]+''+m[2][1];
	params[3] = m[3][0]+''+m[3][1];
	//console.log("Params..."); console.log(params);
	tm[0] = getTagMatch(params[0]);
	tm[1] = getTagMatch(params[1]);
	tm[2] = getTagMatch(params[2]);
	tm[3] = getTagMatch(params[3]);
	//console.log(tm);
	// get Arabic range Dates
	ranges = genArabicDates(tm);

	// Find Date
	month = addZero(month);
	day = addZero(day);
	var fdate = year+''+month+''+day;
	var adate;
	$.each(ranges, function(index, val) {
		$.each(val, function(ind, v) {
			//console.log(fdate+' == '+v[0]);
			if(fdate.toString() === v[0].toString())
			{
				adate = v[1];
				return false;
			}
		});
	});
	return adate;
}

// Generate Arabic Dates
function genArabicDates(tMatches)
{
	var arDates;
	// Gen Arabic Dates Matches
	var dates = new Array();
	i=0;
	$.each(tMatches, function(index, val) { //console.log("Generate Metch...>>");
		//console.log(val);
		dates[i] = new Array();
		dates[i]['en'] = new Array();
		dates[i]['en'][0] = val.substr(0,4);
		dates[i]['en'][1] = val.substr(8,2);
		dates[i]['en'][2] = parseInt(val.substr(12));
		dates[i]['ar'] = new Array();
		dates[i]['ar'][0] = val.substr(4,4);
		dates[i]['ar'][1] = val.substr(10,2);
		i++;
	});
	//console.log("Dates...");
	//console.log(dates);
	ranges = new Array();
	ranges[0] = genArDays(dates[0]['en'],dates[0]['ar'],dates[1]['en']);
	ranges[1] = genArDays(dates[1]['en'],dates[1]['ar'],dates[2]['en']);
	ranges[2] = genArDays(dates[2]['en'],dates[2]['ar'],dates[3]['en']);
	return ranges;
}

function genArDays(enDate,arDate,enStop)
{
	var date  = new Date(enDate[0],enDate[1]-1,enDate[2]);
	var sdate = new Date(enStop[0],enStop[1]-1,enStop[2]);
	var cdate = date;
	var dates = new Array();
	for(var i=0; i<30; i++)
	{
		di = addZero(i+1);
		if(cdate.getTime() !== sdate.getTime())
		{
			dates[i] = new Array();
			cy = cdate.getFullYear();
			cm = addZero(cdate.getMonth()+1);
			cd = addZero(cdate.getDate());
			dates[i][0] = cy+''+cm+''+cd;
			dates[i][1] = arDate[0]+arDate[1]+di;
			if(i >= 0) 
				cdate = addDays(date,di);
		}
		else
			return dates;
	}
	return dates;
}

function getMonthNumber(y,m)
{//console.log("GetMonthNumber:::"+m+" From Year"+y);
	var mxx = addZero(m);
	var mm;
	mx = addZero(mm);
	if(m == 0)
		mm =  new Array(y-1,"12");
	else if(m == 13)
		mm =  new Array(y+1,"01");
	else if(m == 14)
		mm =  new Array(y+1,"02");
	else
		mm =  new Array(y,mxx);
	//console.log(mm);
	return mm;
}

function getTagMatch(tag)
{
	sval = false;
	//console.log(dranges);
	$.each(dranges, function(index, val) {//console.log("Matching...");
		 y = val.substr(0,4);
		 m = val.substr(8,2);
		 tagMatch = y+m;
		 //console.log(tag+" == "+tagMatch);
		 if(tag == tagMatch) 
		 	sval = val;
	});
	return sval;
}

function addZero(num)
{	
	if(num > 0)
	{
		num = num.toString();
		if(num.length == 1) return "0"+num; else return num;
	}
	else
	{
		return num;
	}
}

function addDays(theDate, days)
{
    var rdate = new Date(theDate.getTime() + days*24*60*60*1000);
    return rdate;
}

function getJsonDate(d,m,y)
{
	var dbURI = "http://127.0.0.1/ws/islamydate/gen.php";
	$.getJSON( dbURI, {
    d: d,
    m: m,
    y: y
    })
    .done(function( data ) {
    	dbardate = data.AR_YEAR+addZero(data.AR_MONTH)+addZero(data.AR_DAY);
    	htmlData = $('#result').html()+" DB DATE: "+dbardate;
    	$('#result').html(htmlData);
    });
}