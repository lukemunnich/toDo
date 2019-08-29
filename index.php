
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel = "stylesheet"
    type = "text/css"
    href = "css/Style.css" />

   <script src="js/functions.js"></script> 

    <title>to do app</title>


<div class="container">
<h2>Simple To Do List</h2>
    <p><em>Click and drag to reorder, double click to delete an item.</em></p>     
<form role="form" action="index.php" method="post">
    <input type="text" name="todoEntry">
    <button type="submit">add</button><br>
    <br/>
		<ol></ol>
    <?php
if(isset($_POST["todoEntry"])){
    // $item = $_SESSION["listItems"];
    if(!(isset($_SESSION["listItems"]))){
        $_SESSION["listItems"] = $item;
        $_SESSION['listItems'] [] = $_POST['todoEntry'];
        displayist();
        // var_dump($_SESSION['listItems']);
    }else{
        $_SESSION["listItems"] [] = $_POST['todoEntry'];
        // var_dump($_SESSION['listItems']);
       displaylist();
    }
}
    // echo "<br>"."\n<ul>\n<li>".$_POST['todoEntry']."</li>\n</ul>";
function displaylist(){
    echo "<ul>";
        foreach($_SESSION['listItems'] as $item){
            echo "<li>" . $item . "</li>";
        }
    echo "<ol>";
}
?>
</div>  
</div>


</body>
</html>