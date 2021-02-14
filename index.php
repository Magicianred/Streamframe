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
        <script src="//cdnjs.cloudflare.com/ajax/libs/list.pagination.js/0.1.1/list.pagination.min.js"></script>
        
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
                    <label for="TaskStatusFilter" id="FilterText">Filter</label>
                    
                </div></td>
                <td><div class="col-md-2"> 
                    <form method="POST">
                        <input type="submit" name="filterAll" value="All"/>
                    </form>
                </div></td>
                <td><div class="col-md-2"> 
                    <form method="POST">
                        <input type="submit" name="filterComplete" value="Complete"/>
                    </form>
                </div></td>
                <td><div class="col-md-2"> 
                    <form method="POST">
                        <input type="submit" name="filterDone" value="Done"/>
                    </form>
                </div></td>
                <td><div class="col-md-2"> 
                    <form method="POST">
                        <input type="submit" name="filterInProgress" value="In Progress"/>
                    </form>
                </div></td>

                <?php
                    if (isset($_POST["filterAll"])){
                        $sql2 = "SELECT * FROM tasks";
                        $sql7 = "SELECT * FROM parenttasks";
                        
                    }

                    if (isset($_POST["filterComplete"])){
                        $sql2 = "SELECT * FROM tasks";
                        $sql7 = "SELECT * FROM parenttasks WHERE parentTaskStatus = 'Complete'";
                        
                    }

                    if (isset($_POST["filterDone"])){
                        $sql2 = "SELECT * FROM tasks WHERE taskStatus = 'Done'";
                        $sql7 = "SELECT * FROM parenttasks WHERE subTaskStatus = 'Done'";
                    }

                    if (isset($_POST["filterInProgress"])){
                        $sql2 = "SELECT * FROM tasks WHERE taskStatus = 'In Progress'";
                        $sql7 = "SELECT * FROM parenttasks WHERE subTaskStatus = 'In Progress'";
                    }
                ?>

            </table>
            
        </div>

        <div class="row">
            <div class="col-md-2">

            </div>
            <div class="col-md-3" id="sb">
                <button id="confirmAddParentTask">Add Nested Task</button>
            </div>
            <div class="col-md-2" id="sb">
                
            </div>
            <div class="col-md-3" id="sb">
                <button id="confirmAddTask">Add Task</button>
            </div>
            
        </div>

        <div class="row">
            <div class="col-md-2">

            </div>
            <div class="col-md-4" id="labelstatusbar">

            </div>
            <div class="col-md-2" id="labelstatusbar">
                <label> Tasks </label>
            </div>
            <div class="col-md-2" id="labelstatusbar">

            </div>
            <div class="col-md-2">

            </div>
            
        </div>




        <div class="row">
            <div class="col-md-2">

            </div>
            <div class="col-md-1" id="pb">
                <label> All </label>
            </div>
            <div class="col-md-1" id="pb">
                <?php
                    $sqlAll = "SELECT * FROM tasks";
                    if ($result=mysqli_query($conn,$sqlAll))
                        {
                        $rowcount=mysqli_num_rows($result);
                        printf($rowcount);
                        mysqli_free_result($result);
                        }

                ?>
            </div>
            <div class="col-md-1" id="pb">
                
            </div>
            <div class="col-md-1" id="pb">
                
            </div>
            <div class="col-md-1" id="pb">
                <label> Done </label>
            </div>
            <div class="col-md-1" id="pb">
                <?php
                    $sqlDone = "SELECT * FROM tasks WHERE taskStatus='Done'";
                    if ($result=mysqli_query($conn,$sqlDone))
                        {
                        $rowcount=mysqli_num_rows($result);
                        printf($rowcount);
                        mysqli_free_result($result);
                        }

                ?>
            </div>
            <div class="col-md-1" id="pb">
                <label> In Progress </label>
            </div>
            <div class="col-md-1" id="pb">
                <?php
                    $sqlIP = "SELECT * FROM tasks WHERE taskStatus='In Progress'";
                    if ($result=mysqli_query($conn,$sqlIP))
                        {
                        $rowcount=mysqli_num_rows($result);
                        printf($rowcount);
                        mysqli_free_result($result);
                        }

                ?>
                
            </div>
            <div class="col-md-2">

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
                    
                    $taskName = $_POST["nameTaskName"];

                    $sql = "INSERT INTO tasks (taskName,taskStatus) VALUES ('$taskName','In Progress')";
                    mysqli_query($conn,$sql);
                    echo "<meta http-equiv='refresh' content='0'>";
                }
            ?>
          </div>
        </div>

        <div id="myParentModal" class="modal">
          <div class="modal-content">
            <div class="modal-header">
                <h2>Add Nested Task</h2>
                <span class="close">&times;</span>
              
            </div>
            <form id="modalParentForm" method="POST">
                <div class="modal-body">
                    <label>Parent Task</label>
                    <br>
                    <input type="text" name="nameParentTaskName" id="ParentTaskName" maxlength="400">
                    <br>
                    <label>Sub Tasks 1 </label>
                    <br>
                    <input type="text" name="nameSubTaskName1" id="subTask1" maxlength="400">
                    <br>
                    <label>Sub Tasks 2 </label>
                    <br>
                    <input type="text" name="nameSubTaskName2" id="subTask2" maxlength="400">
                    <br>
                    <label>Sub Tasks 3 </label>
                    <br>
                    <input type="text" name="nameSubTaskName3" id="subTask3" maxlength="400">
                    <br>
                </div>
                <div class="modal-footer">
                    <input type="submit" id="addParentTaskToList" value="Add" name="submitNewParentTask">
                </div>
            </form> 
            <?php
                if (isset($_POST['submitNewParentTask'])){
                    
                    $taskParentName = $_POST["nameParentTaskName"];
                    $sub1 = $_POST["nameSubTaskName1"];
                    $sub2 = $_POST["nameSubTaskName2"];
                    $sub3 = $_POST["nameSubTaskName3"];



                    $sql = "INSERT INTO parenttasks (parentTaskName,subTask,subTaskStatus,subTask2,subTask2Status,subTask3,subTask3Status,parentTaskStatus) VALUES ('$taskParentName','$sub1','In Progress','$sub2','In Progress','$sub3','In Progress','In Progress')";
                    mysqli_query($conn,$sql);
                    echo "<meta http-equiv='refresh' content='0'>";
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
                        
                        <?php

                        if (!isset($_POST["filterAll"]) && !isset($_POST["filterComplete"]) && !isset($_POST["filterDone"]) && !isset($_POST["filterInProgress"])){
                            $sql2 = "SELECT * FROM tasks ";
                            
                        }
                 
                        
                        if (isset($_POST["deleteRecord"])){
                            $id = $_POST["id"];
                            $sql3 = "DELETE FROM tasks WHERE taskId = '$id'";
                            mysqli_query($conn,$sql3);
                            echo "<meta http-equiv='refresh' content='0'>";
                        }
                
                        if (isset($_POST["checkRecord"])){
                            $checkid = $_POST["checkButtonId"];
                            $sql5 = "UPDATE tasks SET taskStatus='Done' WHERE taskId='$checkid'";
                            mysqli_query($conn,$sql5);
                            echo "<meta http-equiv='refresh' content='0'>";
                        }

                        if (isset($_POST["IPRecord"])){
                            $checkid2 = $_POST["IPButtonId"];
                            $sql6 = "UPDATE tasks SET taskStatus='In Progress' WHERE taskId='$checkid2'";
                            mysqli_query($conn,$sql6);
                            echo "<meta http-equiv='refresh' content='0'>";
                        }

                        
                        

                        $result = $conn -> query($sql2);
                        if ($result->num_rows >0){
                            while($row=$result -> fetch_assoc()){?>

                        
                        <tr>
                            
                            <td><?php echo $row['taskId']?></td>
                            <td><?php echo $row['taskName']?></td>
                            <td><label name="checkStatus"><?php echo $row['taskStatus']?></label></td>
                            <td>
                            
                                <form method="POST">
                                    <input type="hidden" name="checkButtonId" value="<?php echo $row['taskId']?>">
                                    <input type="submit" name="checkRecord" value="Done">
                                </form>
                            </td>
                            <td>
                            
                                <form method="POST">
                                    <input type="hidden" name="IPButtonId" value="<?php echo $row['taskId']?>">
                                    <input type="submit" name="IPRecord" value="In Progress">
                                </form>
                            </td>
                            <td>
                            
                                <form method="POST">
                                    <input type="hidden" name="id" value="<?php echo $row['taskId']?>">
                                    <input type="submit" name="deleteRecord" value="Delete">
                                </form>
                            </td>
                        </tr>
                        <?php
                        }}
                        ?>
                        
                    </tbody>
                    
                </table>
            </div>

            <div class="col-md-2">

            </div>

            
        
            
        </div>

        <div class="row">
            <div class="col-md-2">

            </div>
            <div class="col-md-4" id="labelstatusbar">

            </div>
            <div class="col-md-2" id="labelstatusbar">
                <label> Nested Tasks </label>
            </div>
            <div class="col-md-2" id="labelstatusbar">

            </div>
            <div class="col-md-2">

            </div>
            
        </div>

        <div class="row">
            <div class="col-md-2">

            </div>
            <div class="col-md-1" id="pb">
                <label> All </label>
            </div>
            <div class="col-md-1" id="pb">
                <?php
                    $sqlAllP = "SELECT * FROM parenttasks";
                    if ($result=mysqli_query($conn,$sqlAllP))
                        {
                        $rowcount=mysqli_num_rows($result);
                        printf($rowcount);
                        mysqli_free_result($result);
                        }

                ?>
            </div>
            <div class="col-md-1" id="pb">
                <label> Complete </label>
                
            </div>
            <div class="col-md-1" id="pb">
                <?php
                    $sqlComplete = "SELECT * FROM parenttasks WHERE parentTaskStatus='Complete'";
                    if ($result=mysqli_query($conn,$sqlComplete))
                        {
                        $rowcount=mysqli_num_rows($result);
                        printf($rowcount);
                        mysqli_free_result($result);
                        }

                ?>
                
            </div>
            <div class="col-md-1" id="pb">
                <label> Done </label>
            </div>
            <div class="col-md-1" id="pb">
                <?php

                    $sqlSubTask1Done = "SELECT * FROM parenttasks WHERE subTaskStatus='Done'";
                    if ($result=mysqli_query($conn,$sqlSubTask1Done))
                        {
                        $rowcount=mysqli_num_rows($result);
                        // printf($rowcount);
                        // mysqli_free_result($result);
                        }
                    else{
                        $rowcount =0;
                    }
                    $sqlSubTask2Done = "SELECT * FROM parenttasks WHERE subTask2Status='Done'";
                    if ($result=mysqli_query($conn,$sqlSubTask2Done))
                        {
                        $rowcount2=mysqli_num_rows($result);
                        // printf($rowcount2);
                        // mysqli_free_result($result);
                        }
                    else{
                        $rowcount2 =0;
                    }
                    $sqlSubTask3Done = "SELECT * FROM parenttasks WHERE subTask3Status='Done'";
                    if ($result=mysqli_query($conn,$sqlSubTask3Done))
                        {
                        $rowcount3=mysqli_num_rows($result);
                        // printf($rowcount3);
                        // mysqli_free_result($result);
                        }
                    else{
                        $rowcount3=0;
                    }

                    $totalRowDone = $rowcount+$rowcount2+$rowcount3;
                    printf($totalRowDone);
                    mysqli_free_result($result)

                    


                ?>
            </div>
            <div class="col-md-1" id="pb">
                <label> In Progress </label>
            </div>
            <div class="col-md-1" id="pb">
                <?php
                    $sqlSubTask1IP = "SELECT * FROM parenttasks WHERE subTaskStatus='In Progress'";
                    if ($result=mysqli_query($conn,$sqlSubTask1IP))
                        {
                        $rowcount=mysqli_num_rows($result);
                        // printf($rowcount);
                        // mysqli_free_result($result);
                        }
                    else{
                        $rowcount =0;
                    }
                    $sqlSubTask2IP = "SELECT * FROM parenttasks WHERE subTask2Status='In Progress'";
                    if ($result=mysqli_query($conn,$sqlSubTask2IP))
                        {
                        $rowcount2=mysqli_num_rows($result);
                        // printf($rowcount2);
                        // mysqli_free_result($result);
                        }
                    else{
                        $rowcount2 =0;
                    }
                    $sqlSubTask3IP = "SELECT * FROM parenttasks WHERE subTask3Status='In Progress'";
                    if ($result=mysqli_query($conn,$sqlSubTask3IP))
                        {
                        $rowcount3=mysqli_num_rows($result);
                        // printf($rowcount3);
                        // mysqli_free_result($result);
                        }
                    else{
                        $rowcount3=0;
                    }

                    $totalRowIP = $rowcount+$rowcount2+$rowcount3;
                    printf($totalRowIP);
                    mysqli_free_result($result)

                ?>
            </div>
            <div class="col-md-2">

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
                        <?php

                            // $sqlParentSelect = "SELECT * FROM parenttasks";

                            $sqlComplete = "UPDATE parenttasks SET parentTaskStatus='Complete' WHERE subTaskStatus='Done' AND subTask2Status='Done' AND subTask3Status='Done'";
                            mysqli_query($conn,$sqlComplete);

                            $sqlinComplete = "UPDATE parenttasks SET parentTaskStatus='In Progress' WHERE subTaskStatus='In Progress' OR subTask2Status='In Progress' OR subTask3Status='In Progress'";
                            mysqli_query($conn,$sqlinComplete);


                            if (!isset($_POST["filterAll"]) && !isset($_POST["filterComplete"]) && !isset($_POST["filterDone"]) && !isset($_POST["filterInProgress"])){
                                $sql7 = "SELECT * FROM parenttasks";
                            }


                            if (isset($_POST["delRecordPT"])){
                                $checkidD1 = $_POST["deleteParentTask"];
                                $sql5PD = "DELETE FROM parenttasks WHERE parentTaskID='$checkidD1'";
                                mysqli_query($conn,$sql5PD);
                                echo "<meta http-equiv='refresh' content='0'>";
                            }

                    
                            if (isset($_POST["checkRecordST1"])){
                                $checkidS1 = $_POST["checkSubTask1"];
                                $sql5P = "UPDATE parenttasks SET subTaskStatus='Done' WHERE parentTaskID='$checkidS1'";
                                mysqli_query($conn,$sql5P);
                                echo "<meta http-equiv='refresh' content='0'>";
                            }

                            if (isset($_POST["checkRecordST2"])){
                                $checkidS2 = $_POST["checkSubTask2"];
                                $sql6P = "UPDATE parenttasks SET subTask2Status='Done' WHERE parentTaskID='$checkidS2'";
                                mysqli_query($conn,$sql6P);
                                echo "<meta http-equiv='refresh' content='0'>";
                            }

                            if (isset($_POST["checkRecordST3"])){
                                $checkidS3 = $_POST["checkSubTask3"];
                                $sql7P = "UPDATE parenttasks SET subTask3Status='Done' WHERE parentTaskID='$checkidS3'";
                                mysqli_query($conn,$sql7P);
                                echo "<meta http-equiv='refresh' content='0'>";
                            }
    
                            if (isset($_POST["checkRecordST1IP"])){
                                $checkidS1 = $_POST["checkSubTask1IP"];
                                $sql8P = "UPDATE parenttasks SET subTaskStatus='In Progress' WHERE parentTaskID='$checkidS1'";
                                mysqli_query($conn,$sql8P);
                                echo "<meta http-equiv='refresh' content='0'>";
                            }

                            if (isset($_POST["checkRecordST2IP"])){
                                $checkidS2 = $_POST["checkSubTask2IP"];
                                $sql9P = "UPDATE parenttasks SET subTask2Status='In Progress' WHERE parentTaskID='$checkidS2'";
                                mysqli_query($conn,$sql9P);
                                echo "<meta http-equiv='refresh' content='0'>";
                            }

                            if (isset($_POST["checkRecordST3IP"])){
                                $checkidS3 = $_POST["checkSubTask3IP"];
                                $sql10P = "UPDATE parenttasks SET subTask3Status='In Progress' WHERE parentTaskID='$checkidS3'";
                                mysqli_query($conn,$sql10P);
                                echo "<meta http-equiv='refresh' content='0'>";
                            }
                            
                            $resultParent = $conn -> query($sql7);
                            if ($resultParent->num_rows >0){
                                while($row=$resultParent -> fetch_assoc()){?>

                            <tr>

                            <td><?php echo $row['parentTaskID']?></td>
                            <td>
                                <?php echo $row['parentTaskName']?>
                                <ol>
                                    <li><?php echo $row['subTask']?></li>
                                    <li><?php echo $row['subTask2']?></li>
                                    <li><?php echo $row['subTask3']?></li>
                                </ol>
                            </td>
                            <td>
                                <label name="checkStatus"><?php echo $row['parentTaskStatus']?></label>
                                <ol >
                                    <li class="nonu"><?php echo $row['subTaskStatus']?></li>
                                    <li class="nonu"><?php echo $row['subTask2Status']?></li>
                                    <li class="nonu"><?php echo $row['subTask3Status']?></li>
                                </ol>
                            </td>
                            <td>
                            
                                <form method="POST">
                                    <ol>
                                        <li class="nonu lispace">

                                        </li>
                                        <li class="nonu">
                                            <input type="hidden" name="checkSubTask1" value="<?php echo $row['parentTaskID']?>">
                                            <input type="submit" name="checkRecordST1" value="Done">
                                        </li>
                                        <li class="nonu">
                                            <input type="hidden" name="checkSubTask2" value="<?php echo $row['parentTaskID']?>">
                                            <input type="submit" name="checkRecordST2" value="Done">
                                        </li>
                                        <li class="nonu">
                                            <input type="hidden" name="checkSubTask3" value="<?php echo $row['parentTaskID']?>">
                                            <input type="submit" name="checkRecordST3" value="Done">
                                        </li>
                                    </ol>
                                    
                                </form>
                            </td>
                            <td>
                            
                                <form method="POST">

                                    <ol>
                                        <li class="nonu lispace2">

                                        </li>
                                        <li class="nonu">
                                            <input type="hidden" name="checkSubTask1IP" value="<?php echo $row['parentTaskID']?>">
                                            <input type="submit" name="checkRecordST1IP" value="In Progress">
                                        </li>
                                        <li class="nonu">
                                            <input type="hidden" name="checkSubTask2IP" value="<?php echo $row['parentTaskID']?>">
                                            <input type="submit" name="checkRecordST2IP" value="In Progress">
                                        </li>
                                        <li class="nonu">
                                            <input type="hidden" name="checkSubTask3IP" value="<?php echo $row['parentTaskID']?>">
                                            <input type="submit" name="checkRecordST3IP" value="In Progress">
                                        </li>
                                    </ol>
                                </form>
                            </td>
                            <td>
                                <form method="POST">
                                    <ol>
                                        <li class="nonu">
                                            <input type="hidden" name="deleteParentTask" value="<?php echo $row['parentTaskID']?>">
                                            <input type="submit" name="delRecordPT" value="Delete">
                                        </li>
                                    </ol>
                                </form>
                            </td>
                            </tr>

                            
                        
                        <?php
                        }}
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="col-md-2">

            </div>
        </div>

        

    

    <script src="App.js">

    </script>
    </body>
</html>