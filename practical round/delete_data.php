<?php

$connection = mysqli_connect('localhost','root','','curd_op');
if(!$connection)
{
    die('connection failed'.mysqli_error($connection));
}

if(isset($_POST['delete']))
{
    $id = $_POST['id'];
    
    $query = "DELETE FROM student WHERE id = '$id'";
    $delete = mysqli_query($connection,$query);

    if($delete)
    {
        echo '<script type="text/javascript"> alert("Data Deleted Sucessfully") </script>';
        header("location:display_data.php");
    }
    else
    {
        echo '<script type="text/javascript"> alert("Data Not Deleted Sucessfully") </script>';
    }

}