<?php
include 'conn.php';
session_start();
if(isset($_POST['submit']))
{
    $bed_title=$_POST['bed_title'];
    $bed_size = $_POST['bed_size'];
    $bed_material=$_POST['bed_material'];
    $bed_color=$_POST['bed_color'];
    $bed_weight=$_POST['bed_weight'];
    $bed_stock=$_POST['bed_stock'];
    $bed_type=$_POST['bed_type'];
    $image=$_FILES['img_']['name'];
    $destination="image/".$image;

    $id = $_POST['id'];
    
    if(!empty($_FILES['img_']['name']))
    {
        $update_query = "update bed_tbl set Title = '$bed_title',Size = '$bed_size',Material='$bed_material',
        Color = '$bed_color',Weight = '$bed_weight',Stock = '$bed_stock',Type = '$bed_type',Image='$destination' where id = $id";
    }
    else
    {
        $update_query = "update bed_tbl set Title = '$bed_title',Size = '$bed_size',Material='$bed_material',
        Color = '$bed_color',Weight = '$bed_weight',Stock = '$bed_stock',Type = '$bed_type' where id = $id";
    }
    
    $update_result = mysqli_query($conn,$update_query);
    move_uploaded_file($_FILES['img_']['tmp_name'],$destination);

    if($update_query)
    {
        $message = 'Category updated successfully';
        $_SESSION['message'] = $message;
        header('Location:bed_table.php');
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
