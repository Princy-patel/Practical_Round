<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <title>Update_data_php_curd</title>
</head>
<body>

 <?php

    $connection = mysqli_connect('localhost','root','','p_round');
    if(!$connection)
    {
        die('connection failed');
    }

    $id = $_POST['id'];

    $query = "SELECT * FROM e_detail WHERE id = '$id'";
    $select = mysqli_query($connection,$query);

if($select)
{
    while($row = mysqli_fetch_array($select))
    {
        ?>
    <div class="container">
        <div class="jumbotron">
            <h2>PHP - CURD : Update Data IN PHP</h2>
            <hr>
                <form action="" method="POST">
                <input type="hidden" name="id" value=" <?php echo $row['id']; ?> ">
                <div class="form-group">
                    <lable for="">Employee name: </lable>
                    <input type="text" name="ename" class="form-control" value="<?php echo $row['ename']; ?>" placeholder="enter employee name" required>
                </div>
                <div class="form-group">
                <lable for=""> Email: </lable>
                <input type="email" name="email" class="form-control"value="<?php echo $row['email']; ?>" placeholder="enter email" required>
            </div>
            <div class="form-group">
                <lable for=""> Department : </lable>
                <input type="text" name="department" class="form-control" value="<?php echo $row['department']; ?>" placeholder="enter contact" required>
            </div>
            <div class="form-group">
                <lable for=""> Designation : </lable>
                <input type="text" name="designation" class="form-control"  value="<?php echo $row['designation']; ?>" placeholder="enter contact" required>
            </div>
            <div class="form-group">
                <lable for=""> salary : </lable>
                <input type="text" name="salary" class="form-control" value="<?php echo $row['salary']; ?>" placeholder="enter contact" required>
            </div>

                <button type="submit" name="update" class="btn btn-primary">UPDATE DATA </button>

                <a href="display_data.php" class="btn btn-danger"> CANCLE </a>
            </form>

            <?php

                if(isset($_POST['update'])) 
                {
                    $ename = $_POST['ename'];
                    $email = $_POST['email'];
                    $department = $_POST['department'];
                    $designation = $_POST['designation'];
                    $salary = $_POST['salary'];

                    $query = "UPDATE e_detail SET ename = '$ename', email = '$email', department = '$department' , designation ='$designation', salary='$salary' WHERE id = '$id'";
                    $update = mysqli_query($connection,$query);
                    if($update)
                    {
                        echo '<script type="text/javascript"> alert("data updated sucessfully") </script>';
                        // header("location:display_data.php");
                    }
                    else
                    {
                        echo '<script type="text/javascript"> alert("data not updated sucessfully") </script>';
                    }
                }   


            ?>
        </div>
    </div>

        <?php
    }
}
else
{
    echo '<script type="text/javascript"> alert("NO Record Found") </script>';
}

?>
    
</body>
</html>