<?php
echo date("d:m:y");


echo "<br>";

date_default_timezone_set("Asia/Yangon");
echo date("h:i a");


echo "<br>";
$currentDate=date_create(date("d:m:y"));
date_add($currentDate,date_interval_create_from_date_string("1 days"));
echo date_format($currentDate,"d:m:y");

echo "<br>";


$currentDate1=date_create(date("d:m:y"));
date_sub($currentDate1,date_interval_create_from_date_string("5 days"));
echo date_format($currentDate1,"d:m:y");

echo "<br>";


$dayMonth=cal_days_in_month(CAL_GREGORIAN,date('m'), date('Y'));

echo $dayMonth;





?>