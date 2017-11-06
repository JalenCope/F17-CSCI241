<?php

function readLines($filename)
{
    $fileResource = fopen($filename, 'R');
    
    if(!is_resource($fileResource))
    {
        exit("Could not open the file for reading.");
    }
    
    $contents = array();
    
    while($line = fgets($fileResource))
    {
        $contents[] = $line;
    }
    
    fclose($fileResource);
    
    return $contents;
    
}

function appendLine($filename, $line)
{
    $fileResource = fopen($filename, 'A');
    
    if(!is_resource($fileResource))
    {
        exit("Could not open the file for appending.");
    }
    
    fwrite($fileResource, $line);
    
    fclose($fileResource);
    
    return null;
}

function deleteLine($filename, $line)
{
    $contents = readLines($filename);
    
    unset($contents[$line]);
    
    $fileResource = fopen($filename, "W");
    
    if(!is_resource($fileResource))
    {
        exit("Could not open the file for writing.");
    }
    
    foreach($contents as $contentLine)
    {
        fwrite($fileResource, $contentLine);
    }
    
    fclose($fileResource);
    
    return null;    
}