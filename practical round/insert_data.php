<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title> insert_data_php_curd </title>
</head>
<body>

<div class="container">
    <div class="jumbotron">
        <h2> PHP - CURD : ADD DATA </h2>
        <div class="row">
        <a href="display_data.php" class="btn btn-success" style="margin-left:80%;">ADD DATA</a>
    </div>
    <br>

        <hr>
        <form action="" method="POST">
            <div class="form-group">
                <lable for="">Employee name: </lable>
                <input type="text" name="ename" class="form-control" placeholder="enter employee name" required>
            </div>
            <div class="form-group">
                <lable for=""> Email: </lable>
                <input type="email" name="email" class="form-control" placeholder="enter email" required>
            </div>
            <div class="form-group">
                <lable for=""> Department : </lable>
                <input type="text" name="department" class="form-control" placeholder="enter contact" required>
            </div>
            <div class="form-group">
                <lable for=""> Designation : </lable>
                <input type="text" name="designation" class="form-control" placeholder="enter contact" required>
            </div>
            <div class="form-group">
                <lable for=""> salary : </lable>
                <input type="text" name="salary" class="form-control" placeholder="enter contact" required>
            </div>

            <button type="submit" name="insert" class="btn btn-primary">SAVE DATA </button>

            <!-- <a href="display_data.php" class="btn btn-danger"> CANCLE </a> -->

            
        </form>
    </div>
</div>
    
</body>
</html>

<?php

$connection = mysqli_connect('localhost','root','','p_round');
if($connection)
{
    echo 'connect';
}
else{
    die('connection failed');
}

if(isset($_POST['insert']))
{
    $ename = $_POST['ename'];
    $email = $_POST['email'];
    $department = $_POST['department'];
    $designation = $_POST['designation'];
    $salary = $_POST['salary'];
    
    $query = "INSERT INTO e_detail (ename,email,department,designation,salary) VALUES ('$ename','$email','$department','$designation','$salary')";
    $insert = mysqli_query($connection,$query);

    if($insert)
    {
        echo '<script type="text/javascript"> alert("data insertd sucessfully") </script>';
        
    }
    else
    {
        echo '<script type="text/javascript"> alert("data not insertd sucessfully") </script>';
    }
}


?>
