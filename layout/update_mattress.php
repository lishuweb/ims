<?php
include 'conn.php';
session_start();
if(isset($_POST['submit']))
{
    $m_title=$_POST['m_title'];
    $m_size=$_POST['m_size'];
    $m_weight=$_POST['m_weight'];
    $m_color=$_POST['m_color'];
    $m_stock=$_POST['m_stock'];
    $m_type=$_POST['m_type'];
    $image=$_FILES['img_']['name'];
    $destination="image/".$image;

    $id = $_POST['id'];

    if(!empty($_FILES['img_']['name']))
    {
        $update_query = "update mattress_tbl set Title = '$m_title',Size = '$m_size',Weight = '$m_weight',
        Color = '$m_color',Stock = '$m_stock',Type = '$m_type',Image='$destination' where id = $id";

    }
    else 
    {
        $update_query = "update mattress_tbl set Title = '$m_title',Size = '$m_size',Weight = '$m_weight',
        Color = '$m_color',Stock = '$m_stock',Type = '$m_type' where id = $id";

    }
    
    $update_result = mysqli_query($conn,$update_query);
    move_uploaded_file($_FILES['img_']['tmp_name'],$destination);

    if($update_query)
    {
        $message = 'Category updated successfully';
        $_SESSION['message'] = $message;
        header('Location:mattress_table.php');
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
