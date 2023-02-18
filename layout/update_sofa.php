<?php
include 'conn.php';
session_start();
if(isset($_POST['submit']))
{
    $sofa_title=$_POST['sofa_title'];
    $sofa_size=$_POST['sofa_size'];
    $sofa_color=$_POST['sofa_color'];
    $sofa_weight=$_POST['sofa_weight'];
    $sofa_seat=$_POST['sofa_seat'];
    $sofa_type=$_POST['sofa_type'];
    $sofa_stock=$_POST['sofa_stock'];
    $image=$_FILES['img_']['name'];
    $destination="image/".$image;

    $id = $_POST['id'];

    if(!empty($_FILES['img_']['name']))
    {
        $update_query = "update sofa_tbl set Title = '$sofa_title',Size  = '$sofa_size',Color = '$sofa_color',Weight = '$sofa_weight',Seat = '$sofa_seat',Type = '$sofa_type',Stock = '$sofa_stock',Image='$destination' where id = $id";
    }
    else 
    {
        $update_query = "update sofa_tbl set Title = '$sofa_title',Size  = '$sofa_size',Color = '$sofa_color',Weight = '$sofa_weight',Seat = '$sofa_seat',Type = '$sofa_type',Stock = '$sofa_stock' where id = $id";
    }
    $update_result = mysqli_query($conn,$update_query);
    move_uploaded_file($_FILES['img_']['tmp_name'],$destination);

    if($update_query)
    {
        $message = 'Category updated successfully';
        $_SESSION['message'] = $message;
        header('Location:sofa_table.php');
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
