<?php
    if(isset($_POST['grades'])){
            
        //Connection string
        include('connect.php');
        //print_r($_POST);
        // Array ( [fname] => Abhishek [lname] => Gaur [marks] => 99 [imageURL] => jsj [grades] => )
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $marks = $_POST['marks'];
        $imageURL = $_POST['imageURL'];

        $query = "INSERT INTO students (fname, lname, marks, imageURL) VALUES ('$fname', '$lname', '$marks', '$imageURL')";

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