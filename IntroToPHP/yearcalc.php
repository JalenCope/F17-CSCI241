<?php

if($_SERVER["REQUEST_METHOD"] == "GET")
{
    ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Pet Year Calculator</title>
    </head>
    <body>
        <form method="POST" action="yearcalc.php">
            <label>
                Human Years <input type="text" name="humanYears">
            </label>
             <label>
                <input type="checkbox" name="calcDogYears"> Dog Years?
            </label>
             <label>
                <input type="checkbox" name="calcCatYears"> Cat Years?
            </label>
             <label>
                <input type="checkbox" name="calcHampsterYears"> Hampster Years?
            </label>
            <button type="submit">Submit</button>
        </form>
            
    </body>
</html>
<?php 
    
}
else
{
    
    $humanYears = $_POST["humanYears"];
    
    $catYears = $humanYears * 8;
    $dogYears = $humanYears * 7;
    $hampsterYears = $humanYears * 26;
    
    ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Pet Year Calculator</title>
    </head>
    <body>
        <h1>Results!</h1>            
        <table>
            <thead>
                <tr>
                    <td>Type</td>
                    <td>Years</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Human Years</td>
                    <td><?php echo $humanYears; ?></td>
                </tr>             
                
                <?php
                    //if($_POST["calcDogYears"] == "on")
                    if(isset($_POST["calcDogYears"]) == true)
                    {
                   ?>
                        <tr>
                            <td>Dog Years</td>
                            <td><?php echo $dogYears; ?></td>
                        </tr>  
                   <?php
                    }
                    
                    if($_POST["calcCatYears"] == "on")
                    {
                   ?>
                        <tr>
                            <td>Cat Years</td>
                            <td><?php echo $catYears; ?></td>
                        </tr>  
                   <?php
                    }
                    
                    if($_POST["calcHampsterYears"] == "on")
                    {
                   ?>
                        <tr>
                            <td>Hampster Years</td>
                            <td><?php echo $hampsterYears; ?></td>
                        </tr>  
                   <?php
                    }
                    
                ?>
                
            </tbody>
        </table>
        
        
    </body>
</html>

<?php
}