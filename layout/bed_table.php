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
        .opt1 
        {
            /*border: 1px solid black;*/
            height: 100px;
            width: 80%;
            float: right;
            margin-top: 8%;
            justify-content: center;
            align-items: center;
            display: flex;
        }
        .opt1 a 
        {
            text-decoration: none;
            margin: 20px;
            float: right;
            border: 1px solid green;
            padding: 10px 16px;
            border-radius: 3px;
            color: #000;
            font-size: 16px;
            font-weight: bold;
        }
        .opt1 a:hover 
        {
            border-color: #C0392B;
            transition: .3s;
            /*border-width: 2px;*/
        }
        .tbl  
        {
            /*border: 1px solid black;*/
            height: 600px;
            width: 80%;
            float: right;
            margin-top: 1%;
            /*margin-right: 10px;*/
        }
        .tbl .hd 
        {
            height: 80px;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            /*border: 1px solid black;*/
        }
        h1 
        {
            font-size: 25px;
            font-weight: bold;
            text-align: center;
            color: #138D75;
            /*margin-left: 20%;*/
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
        }
        .down table th 
        {
            background-color: #45B39D;
            color: #fff;
            height: 60px;
            font-size: 20px;
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
    </style>

</head>
<body>

        <div class="opt1">
            <a href="bed_form.php">Insert</a>
            <a href="bed_table.php">Delete</a>
            <a href="bed_table.php">Update</a>
            <a href="bed_table.php">View</a>
        </div>

		<div class="tbl">
            <div class="hd">
                <h1>Bed Details</h1>  
            </div>
            <div class="down">
                <table>
                    <tr>
                        <th>S.N.</th> 
                        <th>Title</th>
                        <th>Size</th>
                        <th>Material</th>
                        <th>Color</th>
                        <th>Weight</th>
                        <th>Stock</th>
                        <th>Image</th>
                        <th>Type</th>
                        <th>Action</th>
                    </tr>

                    <?php 
                        $conn=mysqli_connect('localhost','root','');
                        $db=mysqli_select_db($conn,'ims_project');

                        // $select_query = "select * from sofa_table";
                        $select_result = mysqli_query($conn,"SELECT * from bed_tbl Order By id Desc");
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
                                            <?php echo $row['Title'];?>
                                        </td>
                                        <td>
                                            <?php echo $row['Size'];?>
                                        </td>
                                        <td>
                                            <?php echo $row['Material'];?>
                                        </td>
                                        <td>
                                            <?php echo $row['Color'];?>
                                        </td>
                                        <td>
                                            <?php echo $row['Weight'];?>kg
                                        </td>
                                        <td>
                                            <?php echo $row['Stock'];?>
                                        </td>
                                        <td>
                                            <img src="<?php echo $row['Image'];?>" width=100px height=100px>     
                                        </td>
                                        <td>
                                            <?php echo $row['Type'];?>
                                        </td>
                                        <td>
                                            <a href="delete_bed.php?a_id=<?php echo $row['id'];?>" value="Delete" title="Delete" onclick="return confirm('Are you sure you want to delete this Data?');"><input type="button" name="delete" value="Delete"><i class="fa-solid fa-trash"></i></a>

                                            <a href="update_bed_form.php?a_id=<?php echo $row['id'];?>" title="Edit" ><input type="button" name="editabout" value="Edit"><i class="fa-solid fa-wrench"></i></a>
                                        </td>
                                        
        
                                    </tr>

                <?php }}
                            // <!--    }
                             ?> 
                   
                  <!--   <tr class="r">
                        <td>Armchair</td>
                        <td>20 * 20</td>
                        <td>Red</td>
                        <td>1</td>
                        <td>5</td>
                        <td>
                            <i class="fa-solid fa-pen"></i><br>
                            <i class="fa-solid fa-wrench"></i><br>
                            <i class="fa-solid fa-trash"></i>
                        </td>
                    </tr> -->
                   <!--  <tr class="r">
                        <td>Armchair</td>
                        <td>20 * 20</td>
                        <td>Red</td>
                        <td>1</td>
                        <td>5</td>
                        <td>
                            <i class="fa-solid fa-pen"></i><br>
                            <i class="fa-solid fa-wrench"></i><br>
                            <i class="fa-solid fa-trash"></i>
                        </td>
                    </tr>
                    <tr class="r">
                        <td>Armchair</td>
                        <td>20 * 20</td>
                        <td>Red</td>
                        <td>1</td>
                        <td>5</td>
                        <td>
                            <i class="fa-solid fa-pen"></i><br>
                            <i class="fa-solid fa-wrench"></i><br>
                            <i class="fa-solid fa-trash"></i>
                        </td>
                    </tr>
                    <tr class="r">
                        <td>Armchair</td>
                        <td>20 * 20</td>
                        <td>Red</td>
                        <td>1</td>
                        <td>5</td>
                        <td>
                            <i class="fa-solid fa-pen"></i><br>
                            <i class="fa-solid fa-wrench"></i><br>
                            <i class="fa-solid fa-trash"></i>
                        </td>
                    </tr> -->
                    <!-- </tbody> -->
                </table>
            </div>
        </div>

</body>
</html>