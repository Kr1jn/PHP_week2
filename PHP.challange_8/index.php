<?php 

date_default_timezone_set("Europe/Amsterdam");
echo "Amsterdam:  " . date("H:i") . "<br>";
date_default_timezone_set("America/New_York");
echo "New York: " . date("H:i") . "<br>";
date_default_timezone_set("Australia/Sydney");
echo "Sydney: " . date("H:i") . "<br>";

date_default_timezone_set("Europe/Amsterdam");
echo "<br>";

echo date("d-m-Y") . "<br>";
echo date("d/m/y") . "<br>";

echo "<br>";

echo date("l d F Y") . "<br>";
$formatter = new IntlDateFormatter('nl_NL', IntlDateFormatter::FULL, IntlDateFormatter::NONE);
echo $formatter->format(time()) . "<br>";

echo "<br>";

$birthday1 = "8 September";
$days = round(abs(strtotime($birthday1)-time()) / 86400);
echo "<br> dagen tot mijn verjaardag: " . $days;

$date1 = '2005-09-08';
$date2 = date("Y-m-d");

$ts1 = strtotime($date1);
$ts2 = strtotime($date2);

$year1 = date('Y', $ts1);
$year2 = date('Y', $ts2);

$month1 = date('m', $ts1);
$month2 = date('m', $ts2);

$diff = (($year2 - $year1) * 12) + ($month2 - $month1);

$now = date_create(date("d-m-Y"));
$birthday = date_create(date("08-09-Y"));
$daysbetween = date_diff($now, $birthday);
echo $daysbetween->format("%a" . " dagen tot mijn verjaardag");
echo "<br>" . "Maanden op deze wereld ". $diff;
echo "<br> seconds since 1989" .date_create()->getTimestamp() - date_create("1990-01-01")->getTimestamp();
?>