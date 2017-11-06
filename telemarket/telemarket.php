<?php


if(isset($_COOKIE['visited']))
{
    //read and store the cookie
    $visitedCookie = $_COOKIE['visited']; //"MSwy"
    $decodedCookie = base64_decode($visitedCookie); //"1,2"
    $visitedCompanies = explode(",",$decodedCookie); // ["1","2"]
}
else {
    $visitedCompanies = array();
}

if(isset($_GET["company"]))
{ 
    if(!in_array($_GET["company"],$visitedCompanies))
    {
        $visitedCompanies[] = $_GET["company"];
    }
}


$implodedCookie = implode(",",$visitedCompanies);
$encodedCookie = base64_encode($implodedCookie);

header("Set-Cookie: visited=" . $encodedCookie);



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
        if(!in_array($companyIndex, $visitedCompanies))
        {
            echo "<li><a href='telemarket.php?company=$companyIndex'>{$companyInformation[1]}</a></li>";
        }
        
    }
    
    echo "</ul>";
    
}
else
{
    $companyId = $_GET['company'];
    
    if(isset($companies[$companyId]))
    {
        echo "<ul>";

        foreach($companies[$companyId] as $companyInfo)
        {
            echo "<li>$companyInfo</li>";
        }

        echo "</ul>";
        echo "<a href='telemarket.php'>Return to summary.</a>";
    }
    else
    {
        header("Location: telemarket.php");
    }
}