<?php

// search detail in php.net of date and time format in php.
echo date("D-F-y");
echo "<br>";

date_default_timezone_set("Asia/Yangon");
echo date("h:i a");
echo "<br>";
echo "<hr>";



echo "<h1>Date add</h1>";


//create current date
$currentDate=date_create(date("d-m-y"));
// 5 days add from current date
date_add($currentDate,date_interval_create_from_date_string("5 days"));
$date1=date("d")+5;
$year= date("Y");
echo date_format($currentDate,$date1."-F-".$year);

echo "<br>";
echo "<hr>";


echo "<h1>Date Substract</h1>";
$currentDate1=date_create(date("d-m-y"));

// 5days subtract from current date
date_sub($currentDate1,date_interval_create_from_date_string("5 days"));
$day=date("d");
$result=$day-5;
$year1=date("Y");
echo date_format($currentDate1,$result.'-m-'.$year1);
echo"<hr>";



// how much days in current month.
//format-> days_in_month(calendar, month, year)
echo "How many days in current month ?"."<br>";

//where, calcendar=GREGORIAN calendar,month= current month,year=current year.
$dayresult=cal_days_in_month(CAL_GREGORIAN, date('m'), date('Y'));
echo "The result days in this month are"."&nbsp;".$dayresult."&nbsp;"."days ."; 


?>