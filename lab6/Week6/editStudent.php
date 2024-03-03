<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grades</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!--Navigation -->
    <?php include ('reusables/nav.php') ?>
       
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="display-5 mt-4 mb-4">Edit</h1>
            </div>
        </div>

        <?php
            $id = $_GET['id'];
            $connect = mysqli_connect('localhost', 'root', 'root', 'HTTP5225');
            $query = "SELECT * FROM students WHERE `id` = '$id'";

            $student = mysqli_query($connect, $query);
            $result = $student -> fetch_assoc();
        ?>
       <div class="row">
        <div class="col">
            <form action ="includes/updateValue.php" method="POST">
                <input type="hidden" name = "id" value = "<?php echo $result['id'] ?>">
                <div class="mb-3">
                    <label for="fname" class="form-label">First name</label>
                    <input type="text" class="form-control" name= "fname" id="fname" aria-describedby="First Name" value = "<?php echo $result['fname']; ?>">
                    
                </div>
                <div class="mb-3">
                    <label for="lname" class="form-label">Last name</label>
                    <input type="text" class="form-control" name= "lname" id="lname" aria-describedby="Last Name" value = "<?php echo $result['lname']; ?>">
                    
                </div>

                <div class="mb-3">
                    <label for="marks" class="form-label">Marks</label>
                    <input type="number" class="form-control" name= "marks" id="marks" aria-describedby="Enter Marks" value = "<?php echo $result['marks']; ?>">
                    
                </div>
                <div class="mb-3">
                    <label for="imageURL" class="form-label">Image Path</label>
                    <input type="text" class="form-control" name= "imageURL" id="imageURL" aria-describedby="ImageURL" value = "<?php echo $result['imageURL']; ?>">
                    
                </div>
                
                <button type="submit" name="update" class="btn btn-primary">Update</button>
            </form>
        </div>
       </div>
</body>
</html>