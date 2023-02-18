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
        .box 
        {
        	height: 700px;
        	width: 80%;
        	float: right;
        	/*border: 1px solid black;*/
        	margin-top: 8%;
        }
        .box h1 
        {
        	text-align: center;
        	font-size: 26px;
        	font-weight: bold;
        	margin-top: 10px;
        }
        h1 i 
        {
        	font-size: 18px;
        	margin-right: 15px;
        }
        .forms 
        {
        	height: 500px;
        	width: 100%;
        	margin-top: 20px;
        	/*border: 1px solid black;*/
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
        .tbl h1 
        {
            font-size: 25px;
            font-weight: bold;
            text-align: center;
            color: #138D75;
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
            /*background-color: #45B39D;*/
            color: #fff;
            height: 60px;
            font-size: 20px;
        }
        table td 
        {
            height: 100px;
            background-color: #fff;
            color: #000;
            border-bottom: 1px solid #D7BDE2;
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

		<div class="box">
			<h1><i class="fa-solid fa-users"></i>User Details</h1>

			<div class="forms">
				<table>
                    <tr>
                        <th>S.N.</th> 
                        <th>Name</th>
                        <th>Address</th>
                        <th>Contact Number</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>

                    <?php 
                        $conn=mysqli_connect('localhost','root','');
                        $db=mysqli_select_db($conn,'ims_project');

                        // $select_query = "select * from sofa_table";
                        $select_result = mysqli_query($conn,"select * from user_tbl");
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
                                            <?php echo $row['username'];?>
                                        </td>
                                        <td>
                                            <?php echo $row['address'];?>
                                        </td>
                                        <td>
                                            <?php echo $row['cnumber'];?>
                                        </td>
                                        <td>
                                            <?php echo $row['mail'];?>
                                        </td>
                                        <td>
                                            <a href="delete_user.php?id=<?php echo $row['id'];?>" value="Delete" title="Delete" onclick="return confirm('Are you sure you want to delete this Data?');"><input type="button" name="delete" value="Delete"><i class="fa-solid fa-trash"></i></a>
                                        </td>
        
                                    </tr>

                <?php }}
                            
                             ?> 
                   
                
                </table>
           
			</div>
		</div>

</body>
</html>