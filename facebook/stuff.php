<?php

$datetime = new DateTime(); 
$datetime->setTimezone(new DateTimeZone('Asia/Bangkok'));
$datetime->setDate(2014, 8, 25);
$datetime->setTime(16, 46, 00);
echo $datetime->getTimestamp();
//echo strtotime();


exit;
echo strtotime("now"), "\n";
echo strtotime("10 September 2000"), "\n";
echo strtotime("+1 day"), "\n";
echo strtotime("+1 week"), "\n";
echo strtotime("+1 week 2 days 4 hours 2 seconds"), "\n";
echo strtotime("next Thursday"), "\n";
echo strtotime("last Monday"), "\n";


