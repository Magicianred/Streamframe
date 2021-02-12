<?php
        // $sql4 = "UPDATE tasks SET taskStatus = '$_statusValue' WHERE taskID = '$id'";
        $data= json_decode(file_get_contents('php://input'),true);


        
        var_dump ($data);
        
        $id = $_POST["id"];
        $_statusValue = $_POST['value'];
        echo json_decode(file_get_contents('php://input'),true);
        echo $id;
        echo $_statusValue;
        $sql5 = "UPDATE tasks SET taskStatus='Done' WHERE taskId=25";
        mysqli_query($conn,$sql5);
        
        

    ?>