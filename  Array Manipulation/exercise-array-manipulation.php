<?php


function showTitle($title)
{

    echo "<br/><b>&#9830; $title</b><br/>";
    echo '<hr/>';
}

$colors = array(
    'red',
    'blue',
    'black',
    'green',
    'grey',
);

showTitle('Exercise 1 - Sort Alphabetically');
 sort($colors);
 foreach ($colors as $color){
     echo $color."<br/>";
 }

showTitle('Exercise 2: Make them UPPERCASE');
foreach ($colors as $color){

    echo strtoupper($color)."<br/>";
}

showTitle('Exercise 3: Merge 2 Arrays');

$otherColors = array(
    'green',
    'blue',
    'black'
);

$mergedArray=array_merge($colors,$otherColors);

foreach ($mergedArray as $mergedColor){
    echo $mergedColor." ";
}
