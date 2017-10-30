<?php

$callList = fopen("callList.csv", "r");

if(!is_resource($callList))
{
    echo "Could not open the file!";
    exit();
}

$companies = array();

while($line = fgets($callList))
{
    $companies[] = explode(",", $line);
}

fclose($callList);



if(!isset($_GET["company"]))
{
    echo "<ul>";
    
    foreach($companies as $companyIndex => $companyInformation)
    {
        echo "<li><a href='telemarket.php?company=$companyIndex'>{$companyInformation[1]}</a></li>";
    }
    
    echo "</ul>";
}
else
{
    $companyId = $_GET['company'];
    
    echo "<ul>";
    
    foreach($companies[$companyId] as $companyInfo)
    {
        echo "<li>$companyInfo</li>";
    }
    
    echo "</ul>";
}