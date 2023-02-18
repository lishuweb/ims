<style>
<?php include 'header.php';?>
</style>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>

	<link rel="stylesheet" type="text/css" href="css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

    <style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;1,300&family=Merriweather&family=Poppins:wght@200&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Merriweather&family=Poppins:wght@200&display=swap');
    @import "./fontawesome/scss/fontawesome.scss";
    @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;1,300&family=Kdam+Thmor+Pro&family=Koulen&family=Merriweather&family=Poppins:wght@200&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;1,300&family=Josefin+Sans:wght@500&family=Kdam+Thmor+Pro&family=Koulen&family=Merriweather:ital@0;1&family=Noto+Serif:wght@700&family=Poppins:wght@200&family=Rubik:ital,wght@1,600&display=swap');
    *{
        padding: 0;
        margin: 0;
        text-decoration: none;
        list-style: none;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }
    .tbl  
    {
        /*border: 1px solid black;*/
        height: 600px;
        width: 80%;
        float: right;
        margin-top: 8%;
        /*margin-right: 10px;*/
    }
    .tbl .hd 
    {
        height: 80px;
        width: 100%;
        /*display: flex;*/
        justify-content: center;
        align-items: center;
        text-align: center;
        /*border: 1px solid black;*/
    }
    h1 
    {
        font-size: 25px;
        font-weight: bold;
        text-align: center;
        color: #138D75;
        margin-top: 30px;
        /*margin-left: 20%;*/
    }
    .hd ul 
    {
        background-color: #45B39D;
        height: 50px;
        width: 100px;
        text-align: center;
        justify-content: center;
        align-items: center;
        border-radius: 3px;
        padding: 10px 23px;
        margin-right: 20%;
        margin-left: auto;
    }
    .hd a 
    {
        text-decoration: none;
        font-size: 20px;
        font-weight: bold;
        color: #fff;    
    }
    .hd ul:hover 
    {
        background-color: #D35400;
        transition: .3s;
    }
    .down 
    {
        margin-top: 30px;
        width: 100%;
        height: 90%;
        /*border: 1px solid black;*/
    }
    table 
    {
       border-collapse: collapse;
       width: 100%;
       table-layout: auto;
       border-radius: 3px;
    }
    .down table th 
    {
        background-color: #45B39D;
        color: #fff;
        height: 55px;
        font-size: 18px;
        border-radius: 3px;
    }
    table td 
    {
        height: 100px;
        background-color: #fff;
        color: #000;
        border-bottom: 1px solid #45B39D;
        border-radius: 3px;
    }
    table td i 
    {
        color: #EB984E;
        margin-top: 8px;
        margin-right: 12px;
        font-size: 18px;
    }
    table td i:hover 
    {
        color: #45B39D;
        cursor: pointer;
        transition: .3s;
    }
    table td input[type="button"]
    {
        display: none;
    }
    table td form button:hover 
    {
        background-color: #45B39D;
        cursor: pointer;
        transition: .3s;
    }
</style>

</head>
<body>

  <div class="tbl">
    <div class="hd">
        <h1>Order Details</h1>
                <!-- <ul>
                    <a href="bed_form.php">Insert</a>
                </ul> -->
            </div>
            <div class="down">
                <table>
                    <tr>
                        <th>S.N.</th> 
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Quantity</th>
                        <th>Color</th>
                        <th>Product_Id</th>
                        <th>Type</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>

                    <?php 
                    $conn=mysqli_connect('localhost','root','');
                    $db=mysqli_select_db($conn,'ims_project');

                        // $select_query = "select * from sofa_table";
                    $select_result = mysqli_query($conn,"SELECT * from order_tbl Order By id Desc");
                    $total_rows = mysqli_num_rows($select_result);
                    if($total_rows>0)
                    {
                        $sn = 1;
                        ?>

                        <?php 
                        while($row=mysqli_fetch_assoc($select_result))
                        {
                            ?>
                            <tr>
                                <td>
                                    <?php echo $sn++; ?>
                                </td>
                                <td>
                                    <?php echo $row['Name'];?>
                                </td>
                                <td>
                                    <?php echo $row['Email'];?>
                                </td>
                                <td>
                                    <?php echo $row['Phone'];?>
                                </td>
                                <td>
                                    <?php echo $row['Quantity'];?>
                                </td>
                                <td>
                                    <?php echo $row['Color'];?>
                                </td>
                                <td>
                                    <?php echo $row['Product_id'];?>
                                </td>
                                <td>
                                    <?php echo $row['Type'];?>
                                </td>
                                <td>
                                    <?php echo $row['Date'];?>
                                </td>
                                <td>
                                    <span
                                    <?php
                                    if($row['sold'] == 0){
                                        ?>
                                        style = "background: red; color:white; padding:7px 13px; border-radius:3px;"
                                        <?php
                                    }
                                    else{
                                        ?>
                                        style = "border-radius:3px; background: green; color:white; padding:7px 13px;"
                                        <?php
                                    }
                                    ?>
                                    >
                                    <?php
                                    if($row['sold'] == 0){
                                        echo "Pending";
                                    }
                                    else{
                                        echo"Sold";
                                    }
                                    ?>
                                </span>

                            </td>
                            <td>
                                <a href="delete_order.php?id=<?php echo $row['id'];?>" value="Delete"><i class="fa-solid fa-trash"></i></a>

                                <a href="update_order_form.php?id=<?php echo $row['id'];?>"><i class="fa-solid fa-wrench"></i></a>
                                <form action="sale_table.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                                    <button name="s" style="padding: 7px 13px; background-color: #EB984E; border: none; color: #fff; border-radius: 3px; margin-top: 5px;">Submit</button>
                                </form>


                            </td>
                        </tr>

                    <?php }}
                    ?> 


                </table>
            </div>
        </div>

    </body>
    </html>