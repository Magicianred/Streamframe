<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = "streamframe";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
?>

<html>
    <head>
        <title>Streamframe</title>
        <link rel="icon" href="images/titlelogo.png" type="image/icon type">
        <link rel="stylesheet" href="main.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <!-- <script src="flatform.js"></script> -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/react@17/umd/react.development.js" crossorigin></script>
        <script src="https://unpkg.com/react-dom@17/umd/react-dom.development.js" crossorigin></script>
        <script src="https://unpkg.com/babel-standalone@6/babel.min.js"></script>
        
    </head>
    <body class="mainbody">
        <br><br>
        <div class="row">
            <div class="col-md-2">

            </div>
            <div class="col-md-3">
                <img src="images/titlelogo.png" alt="streamline logo"/>
            </div>
            <div class="col-md-6">
                <h1 class="cur bigtext">Streamframe</h1>
            </div>
        </div>

        <br><br>
        <div class="row">
            <div class="col-md-5">

            </div>
            <table>
                <td><div class="col-md-1">
                    <label for="TaskStatus" id="FilterText">Filter</label>
                    
                </div></td>
                <td><div class="col-md-5">
                    
                    <select name="TaskStatus" id="TaskStatus" style="width: 250;">
                        <option value="TaskCompleted">Completed</option>
                        <option value="TaskDone">Done</option>
                        <option value="TaskInProgess">In Progress</option>
                    </select>
                </div></td>
            </table>
            
        </div>

        <div class="row">
            <div class="col-md-2">

            </div>
            <div class="col-md-3" id="sb">

            </div>
            <div class="col-md-2" id="sb">
                <button id="confirmAddTask">Add Task</button>
            </div>
            <div class="col-md-3" id="sb">
                
            </div>
            
        </div>

        <div id="myModal" class="modal">
          <div class="modal-content">
            <div class="modal-header">
                <h2>Add Task</h2>
                <span class="close">&times;</span>
              
            </div>
            <form id="modalForm" method="POST">
                <div class="modal-body">
                    
                        <label>Parent Task(Optional)</label>
                        <br>
                        <input type="text" name="nameParentTask" id="ParentTask" maxlength="400">
                        <br>
                        <label>Task</label>
                        <br>
                        <input type="text" name="nameTaskName" id="TaskName" maxlength="400" required>
                        <br>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" id="addTaskToList" value="Add" name="submitNewTask">
                    </div>
            </form> 
            <?php
                if (isset($_POST['submitNewTask'])){
                    $parentTaskName = $_POST["nameParentTask"];
                    $taskName = $_POST["nameTaskName"];

                    $sql = "INSERT INTO tasks (taskName,parentTask,taskStatus) VALUES ('$taskName','$parentTaskName',0)";
                    mysqli_query($conn,$sql);
                }
            ?>
          </div>
        </div>
        <div class="row">
            <div class="col-md-2">

            </div>

            <div class="col-md-8" id="ff">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Task ID</th>
                            <th>Description</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>fuck</td>
                            <td><input type="checkbox" name="taskCheck" id="checkValue" /><label id="checkStatus">In Progress</label></td>
                        </tr>
                    </tbody>
                    
                </table>
            </div>

            
       
            
        </div>

    <script src="App.js">

    </script>
    </body>
</html>