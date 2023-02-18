<style>
    <?php include 'css/adminstyle.css';?>
</style>
<style>
    <?php include 'header.php';?>
</style>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap');
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
		.details 
		{
			height: 700px;
			width: 80%;
			/*border: 1px solid black;*/
			float: right;
			margin-top: 8%;
			justify-content: center;
			align-items: center;
			text-align: center;
		}
        .details .hd 
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
            margin-left: 20%;
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
            /*border: 1px solid black;*/
            margin-top: 30px;
            width: 80%;
            height: 600px;
            margin-right: auto;
            margin-left: auto;
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
            border-bottom: 1px solid #A3E4D7;
            border-radius: 3px;
        }
       
</style>
</head>
	
	
<body>
		<div class="details">
			
            <div class="hd">
                <h1>Product Details</h1>
                <ul>
                    <a href="product_form.php">Insert</a>
                </ul>
                
            </div>
			
			<div class="down">
                <table>
                    <tr>
                        <th>S.N.</th> 
                        <th>Title</th>
                        <th>Total Products</th>
                    </tr>
					<?php 
                        $conn=mysqli_connect('localhost','root','');
                        $db=mysqli_select_db($conn,'ims_project');

                        // $select_query = "select * from sofa_table";
                        $select_result = mysqli_query($conn,"select * from product_tbl where id=1");
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
                                            <?php echo $sn++; ?>.
                                        </td>
                                        <td>
                                            <?php echo $row['Product'];?>
                                        </td>
                                        <td>
                                            <?php
                
                                                $query = "SELECT id FROM bed_tbl ORDER BY id";  
                                                $query_run = mysqli_query($conn, $query);
                                                $row = mysqli_num_rows($query_run);
                                                echo '<h4>'.$row.'</h4>';
                                            ?>
                                        </td>
        
                                    </tr>




                <?php }}
                            
                             ?>


                <?php 
                        $conn=mysqli_connect('localhost','root','');
                        $db=mysqli_select_db($conn,'ims_project');

                        // $select_query = "select * from sofa_table";
                        $select_result = mysqli_query($conn,"select * from product_tbl where id=2");
                        $total_rows = mysqli_num_rows($select_result);
                        if($total_rows>0)
                        {
                            $sn = 2;
                    ?>

                            <?php 
                                while($row=mysqli_fetch_assoc($select_result))
                                {
                                    ?>
                                    <tr>
                                        <td>
                                            <?php echo $sn++; ?>.
                                        </td>
                                        <td>
                                            <?php echo $row['Product'];?>
                                        </td>
                                        <td>
                                            <?php
                
                                                $query = "SELECT id FROM sofa_tbl ORDER BY id";  
                                                $query_run = mysqli_query($conn, $query);
                                                $row = mysqli_num_rows($query_run);
                                                echo '<h4>'.$row.'</h4>';
                                            ?>
                                        </td>
        
                                    </tr>
                                    



                <?php }}
                            
                             ?>

                <?php 
                        $conn=mysqli_connect('localhost','root','');
                        $db=mysqli_select_db($conn,'ims_project');

                        // $select_query = "select * from sofa_table";
                        $select_result = mysqli_query($conn,"select * from product_tbl where id=4");
                        $total_rows = mysqli_num_rows($select_result);
                        if($total_rows>0)
                        {
                            $sn = 3;
                    ?>

                            <?php 
                                while($row=mysqli_fetch_assoc($select_result))
                                {
                                    ?>
                                    <tr>
                                        <td>
                                            <?php echo $sn++; ?>.
                                        </td>
                                        <td>
                                            <?php echo $row['Product'];?>
                                        </td>
                                        <td>
                                            <?php
                
                                                $query = "SELECT id FROM mattress_tbl ORDER BY id";  
                                                $query_run = mysqli_query($conn, $query);
                                                $row = mysqli_num_rows($query_run);
                                                echo '<h4>'.$row.'</h4>';
                                            ?>
                                        </td>
        
                                    </tr>
                                    



                <?php }}
                            
                             ?>  

                <?php 
                        $conn=mysqli_connect('localhost','root','');
                        $db=mysqli_select_db($conn,'ims_project');

                        // $select_query = "select * from sofa_table";
                        $select_result = mysqli_query($conn,"select * from product_tbl where id=5");
                        $total_rows = mysqli_num_rows($select_result);
                        if($total_rows>0)
                        {
                            $sn = 4;
                    ?>

                            <?php 
                                while($row=mysqli_fetch_assoc($select_result))
                                {
                                    ?>
                                    <tr>
                                        <td>
                                            <?php echo $sn++; ?>.
                                        </td>
                                        <td>
                                            <?php echo $row['Product'];?>
                                        </td>
                                        <td>
                                            <?php
                
                                                $query = "SELECT id FROM cupboard_tbl ORDER BY id";  
                                                $query_run = mysqli_query($conn, $query);
                                                $row = mysqli_num_rows($query_run);
                                                echo '<h4>'.$row.'</h4>';
                                            ?>
                                        </td>
        
                                    </tr>
                                    



                <?php }}
                            
                             ?>  
                             
				</table>
			</div>
			
		</div>
	
</body>
</html>