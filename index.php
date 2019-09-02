
<?php
session_start();
?>
<html>
<head>
<title>luke Munnich to-do List</title>

<!-- linking jquery and boostrap and caa -->
<link rel="stylesheet" href="lib/Bootstrap/bootstrap.min.css" />
<link rel="stylesheet" href="lib/jQuery/jquery.ui.min.css" />
<link rel="stylesheet" href="css/todo.css" />
</head>

<?php
      
 // Getting Data For Actions In ToDo
      if(isset($_GET['to'])){
      $key = $_GET['to'];
      if($_GET['action'] == 'done'){
         $_SESSION['todo'][$key]['done']=true;
      }else if($_GET['action'] == 'cancel'){
       $_SESSION['todo'][$key]['done']=false;
      }else{
         unset( $_SESSION['todo'][$key]);
      }
    }

?>

<!--creating class and id for styling  -->

    <body class="well">
        <div id="container">

        <div id="header"> To Do app </div>

        <div class="task-list task-container" id="pending">
                <h3>Pending</h3>
              
        </div>

        <div class="task-list task-container" id="inProgress">
                <h3>In Progress</h3>
        </div>

        <div class="task-list task-container" id="completed">
                <h3>Completed</h3>
        </div>

<!-- !-- creating form --> -->
        <div class="task-list">
            <h3>Add a task</h3>
            <form method="post" action="index.php" id="todo-form">
                 <input type="text" placeholder="Title" />
                 <textarea placeholder="Description"></textarea>
                 <input type="text" id="datepicker" placeholder="Due Date (dd/mm/yyyy)" />
                 <input type="button" class="btn btn-primary" value="Add Task" onclick="todo.add();" />
            </form>

                <input type="button" class="btn btn-primary" value="Clear Data" onclick="todo.clear();" />

        <div id="delete-div">
                    Drag Here to Delete
        </div>
        </div>
        <div style="clear:both;"></div>

        <?php
                     // Session Super Global
                         if(!empty($_SESSION['todo'])){
                             // Current Date Initialization
                             $date = date('Y-m-d');
                             // ForEach For Loop Starts
                             foreach($_SESSION['todo'] as $key => $value){
                                 echo '<div class="alert alert-light border shadow-sm pb-4">';
                                 echo "<li>".$value['todo_item']." ".$date.
                                 '<a class="btn btn-danger float-right" href="index.php?to='. $key.'&action=delete">Delete</a>'."</li><br>";
                                 echo '</div>';
                                 // End Of Displaying Items
                             }
                             // End ForEach For Loop
                         }
                     // End Session Super Global
                     ?>

         <!-- linking jquery .imp!only works when placed here -->
<script type="text/javascript" src="lib/jQuery/jquery.min.js"></script>
<script type="text/javascript" src="lib/Bootstrap/bootstrap.min.js"></script>
<script type="text/javascript" src="lib/jQuery/jquery.ui.min.js"></script>
 <script type="text/javascript" src="js/todo.js"></script>
           

<!-- javascript for the date picker and the drag function -->
<script type="text/javascript">
                $( "#datepicker" ).datepicker();
                $( "#datepicker" ).datepicker("option", "dateFormat", "dd/mm/yy");

                $(".task-container").droppable();
                $(".todo-task").draggable({ revert: "valid", revertDuration:200 });
                todo.init();
</script>

</div>

</body>
</html>