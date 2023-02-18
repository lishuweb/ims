<?php
include 'conn.php';
session_start();
if(isset($_POST['submit']))
{
    $c_title=$_POST['c_title'];
    $c_material=$_POST['c_material'];
    $c_dimension=$_POST['c_dimension'];
    $c_weight=$_POST['c_weight'];
    $c_type=$_POST['c_type'];
    $c_color=$_POST['c_color'];
    $c_stock=$_POST['c_stock'];
    $image=$_FILES['img_']['name'];
    $destination="image/".$image;

    $id = $_POST['id'];

    if(!empty($_FILES['img_']['name']))
    {
        $update_query = "update cupboard_tbl set Title = '$c_title',Material = '$c_material',Dimensions = '$c_dimension',
        Weight='$c_weight',Type='$c_type',Color = '$c_color',Stock = '$c_stock',Image='$destination' where id = $id";
    }
    else 
    {
        $update_query = "update cupboard_tbl set Title = '$c_title',Material = '$c_material',Dimensions = '$c_dimension',
        Weight='$c_weight',Type='$c_type',Color = '$c_color',Stock = '$c_stock' where id = $id";
    }
    
    $update_result = mysqli_query($conn,$update_query);
    move_uploaded_file($_FILES['img_']['tmp_name'],$destination);

    if($update_query)
    {
        $message = 'Category updated successfully';
        $_SESSION['message'] = $message;
        header('Location:cupboard_table.php');
    }
    else
    {
        $message = 'There was an error';
        header('Location:admin.php');
    }

    }
else
    {
        header('Location:admin.php');
    }
