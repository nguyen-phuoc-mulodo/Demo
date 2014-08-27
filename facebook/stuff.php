<?php

$datetime = new DateTime(); 
$datetime->setTimezone(new DateTimeZone('Asia/Bangkok'));
$datetime->setDate(2014, 8, 27);
$datetime->setTime(20, 00, 00);
echo $datetime->getTimestamp();
//echo strtotime();

$datetime = new DateTime('2014/08/27 20:00', new DateTimeZone('Asia/Bangkok'));
echo "<br>";
echo $datetime->getTimestamp();


exit;
//echo strtotime("now"), "\n";
//echo strtotime("10 September 2000"), "\n";
//echo strtotime("+1 day"), "\n";
//echo strtotime("+1 week"), "\n";
//echo strtotime("+1 week 2 days 4 hours 2 seconds"), "\n";
//echo strtotime("next Thursday"), "\n";
//echo strtotime("last Monday"), "\n";


