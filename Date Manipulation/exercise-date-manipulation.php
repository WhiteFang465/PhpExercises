<?php

function showTitle($title)
{
    echo "<br/><b>&#9830; $title</b><br/>";
    echo '<hr/>';
}

date_default_timezone_set('EST');

showTitle('Exercise 1');
echo date(DATE_RFC2822);
//

showTitle('Exercise 2 - Show Day');
echo date("d");
//
showTitle('Exercise 3 - Show Month');
echo date("m");
echo "<br/>";
echo date("F");
//
showTitle('Exercise 4 - Show Year');
echo date("Y");
//

showTitle('Exercise 5 - Show Day, Month, Year');
echo date("jS, F, Y");
//
showTitle('Exercise 6 (Add 1 month to the constant date)');


showTitle('Exercise 7 (Number of days since 31 December 1973)');
$todayDate = time();
$givenDate = strtotime("1973-12-31");
$noOfDaysSinceGivenDate = $todayDate - $givenDate;

echo round($noOfDaysSinceGivenDate / (60 * 60 * 24));
//

showTitle('Exercise 8');
echo date("D, d M Y");