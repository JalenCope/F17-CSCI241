<?php

require_once("fileops.php");

if($_SERVER["REQUEST_METHOD"] == "GET")
{
    //display current todos
    //show the form to enter a todo
require("header.php");    
    ?>

<form method="POST" action="todo.php">
    <label>Title: <input type="text" name="title"></input> </label>
    <label>Description: <textarea name="description"></textarea> </label>
    <label>Assigned To:
        <select name="assignedTo">
            <?php
               $people = readLines("people.csv");
               
               foreach($people as $person)
               {
                   $person = explode(",", $person);
                   echo "<option value='{$person[0]}'>{$person[1]}</option>";
               }
               
            ?>
        </select>
    </label>
    <button type="submit">Submit</button>
</form>

<?php

$todos = readLines("todo.psv");

echo "<ul>";

foreach($todos as $todoIndex => $todo)
{
    $todo = explode("|", $todo);
    
    echo "<li>{$todo[0]}";
    ?>
<form method="POST" action="todo.php">
    <input type="hidden" name="deleteTodo" value="<?php echo $todoIndex; ?>">
    <button type="submit">Delete Todo</button>
</form>
<?php
    echo "</li>";
    echo "<ul>";
    echo "<li>Title: {$todo[0]}</li>";
    echo "<li>Description: {$todo[1]}</li>";
    echo "<li>Assigned To: {$todo[2]}</li>";
    echo "</ul>";
    
}

echo "</ul>";
require("footer.php");    
}
 else {
    //actually do the insertion of the todo item
     if(isset($_POST['title']))
     {
         
         //did your sanity checks checking for a pipe
         
         $todo = array();
         $todo[] = $_POST["title"];
         $todo[] = $_POST["description"];
         $todo[] = $_POST["assignedTo"];
         
         appendLine("todo.psv", implode("|",$todo) . "\r\n");
         
         header("Location: todo.php");
         
     }
     
     if(isset($_POST["deleteTodo"]))
     {
         //first do my sanity checks
         //actually delete
         deleteLine("todo.psv", $_POST["deleteTodo"]);
         
         require("header.php");
         echo "Your todo item was deleted.";
         require("footer.php");
         
     }
     
}