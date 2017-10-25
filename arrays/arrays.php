<?php
/*
$grades = array(88, 92, 75, 97);
*
 *
 */

/*

$grades[] = 88;
$grades[] = 92;
$grades[] = 75;
$grades[] = 97;
$grades[] = 100;

var_dump($grades);

*/

/*
$grades[] = 88;
$grades[] = 92;
$grades[] = 75;
$grades[] = 97;
$grades[] = 100;

var_dump($grades);

unset($grades[4]);

var_dump($grades);
*/

/*
$grades[] = 88;
$grades[] = 92;
$grades[] = 75;
$grades[] = 97;
$grades[] = 100;


var_dump($grades);

unset($grades[2]);

var_dump($grades);

for($ct = 0 ; $ct < count($grades) ; $ct++)
{
    echo $grades[$ct] . " ";
}
*/

/*
$grades = array("test1" => 88, "hw1" => 92, "hw2" => 75, "midterm" => 97);

var_dump($grades);

//echo $grades["test1"];

echo $grades;
 * 
 */

/*
$grades = array("test1" => 88, "hw1" => 92, "hw2" => 75, "midterm" => 97);
//DONT DO THIS!
foreach($grades as $grade)
{
    $grade = $grade + 5;
}

foreach($grades as $grade)
{
    echo $grade . " ";
}
*/

/*

$grades = array("test1" => 88, "hw1" => 92, "hw2" => 75, "midterm" => 97);

foreach($grades as $item => $grade)
{
    $grades[$item] += 5;
}

foreach($grades as $item => $grade)
{
    echo "$item : $grade ";
}



*/

$grades = array("Andrew" => array("test1" => 88, "hw1" => 92, "hw2" => 75, "midterm" => 97));

var_dump($grades);

echo $grades["Andrew"]["test1"];













