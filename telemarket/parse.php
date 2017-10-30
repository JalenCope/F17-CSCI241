<?php

function parseCSV($lineToParse)
{
    $currentElement = "";
    $lineArray = array();
    
    //1,Dictum Eu Company,1-194-286-3041
    
    for($ct=0; $ct < strlen($lineToParse); $ct++)
    {
        if($lineToParse[$ct] == ",")
        {
            $lineArray[] = $currentElement;
            $currentElement = "";
        }
        else
        {
            $currentElement .= $lineToParse[$ct];
        }
    }
    
    if(strlen($currentElement) > 0)
    {
        $lineArray[] = $currentElement;
        $currentElement = ""; //This is not neccessary
    }
    
    return $lineArray;
        
}

$callList = fopen("callList.csv", "r");

if(!is_resource($callList))
{
    echo "Could not open the file!";
    exit();
}

//Do stuff
$line = fgets($callList);

$lineArray = parseCSV($line);

var_dump($lineArray);
//echo $lineArray[1];  // |


fclose($callList);