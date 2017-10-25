<?php


function isPal($word)
{
    
    $palStack = array();
    
    for($ct=0; $ct < strlen($word); $ct++)
    {
        array_push($palStack, $word[$ct]);
    }
    
/*    var_dump($palStack);
    var_dump($word);
    exit();
*/
    
    $isPal = true;
    
    for($ct=0; $ct < strlen($word); $ct++)
    {
        $currentValue = array_pop($palStack);
        if($currentValue != $word[$ct])
        {
            $isPal = false;
            break;
        }
        
    }
    
    return $isPal;
    
    
}


$word = $_GET['word'];

if(isset($word))
{
    //check if it's a palindrome
    echo isPal($word) ? "This is a palindrome." : "This was not a palindrome, sorry try again!";
}
else
{
    echo "Please specify a word for me to check.";
}