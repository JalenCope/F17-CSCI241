<?php
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$text = $_GET["text"];

?>
<html> 
    <head>
        <title><?php echo $text . " " . $firstName . " " . $lastName . "!"; ?></title>
    </head>
    <body> 
        <form method="POST" action="hello.php?text=My%20Hello"> 
            First Name: <input type="text" name="firstName"></input><br /> 
            Last Name: <input type="text" name="lastName"></input>
            <input type="submit" value="submit" name="submit">
        </form>
    </body>
</html>