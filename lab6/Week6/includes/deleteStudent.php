<?php
    if(isset($_GET['delete'])){
            
        //Connection string
        include('connect.php');

        $id = $_GET['id'];
        
        $query = "DELETE FROM students WHERE `id` = '$id'";
        $student = mysqli_query($connect, $query);

        if($student){
            header("Location: ../index.php");
        }
        else{
            echo "Failed : " . mysqli_error($connect);
        }
    }else{
        echo "You should not be here!";
    }
    ?>