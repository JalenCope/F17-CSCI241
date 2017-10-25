<?php

$grades = array(
    "Andrew" => array("test1"=> 100, "test2" => 90, "test3" => 75),
    "Bob" => array("test1"=> 92, "test2" => 71, "test3" => 21),
    "Trudy" => array("test1"=> 75, "test2" => 100, "test3" => 100)
);


if(isset($_GET["student"]))
{

     echo "<h1> {$_GET['student']} </h1>";
     echo "<ul>"; 
     foreach($grades[$_GET["student"]] as $item => $score)
     {
         echo "<li>$item : $score</li>";
     }
     echo "</ul>";
     
     echo "<a href='grades.php'>Overview</a>";

}
 else {
    echo "<ul>";
    foreach($grades as $student => $grades)
    {
        echo "<li><a href='grades.php?student=$student'>" . $student . "</a></li>";
    }
    echo "</ul>";
    
}