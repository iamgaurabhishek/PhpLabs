<?php
    if(isset($_POST['update'])){
            
        //Connection string
        include('connect.php');
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $marks = $_POST['marks'];
        $imageURL = $_POST['imageURL'];
        $id = $_POST['id'];

        $query = "UPDATE students SET `fname`='$fname', `lname`='$lname', `marks`='$marks', `imageURL`='$imageURL' WHERE `id`='$id'";

        $student = mysqli_query($connect, $query);

        if($student){
            header("Location: ../index.php");
        }
        else{
            echo "Failed : " .mysqli_error($connect);
        }
    }else{
        echo "You should not be here!";
    }
    ?>