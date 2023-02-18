<style>
	<?php include 'conn.php';?>
	<?php include 'header.php';?>
</style>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">


	<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
	<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>

	<style type="text/css">
	.box 
	{
		height: 350px;
		width: 55%;
		float: right;
		justify-content: center;
		/*float: right;*/
		align-items: center;
		text-align: center;
		margin-left: auto;
		margin-right: 15%;
		border: 1px solid #138D75;
		margin-top: 10%;
		border-radius: 3px;
	}
		.box form
		{
			
			height: 100%;
			margin-top: 12%;
			justify-content: center;
			align-items: center;
			text-align: center;
		}
		form .form-group
		{
			justify-content: center;
			align-items: center;
			text-align: center;
			margin-right: auto;
			margin-left: auto;
			margin-right: 70px;
		}
		.form-group button
		{
			background: none;
			border-color: #A2D9CE;
			padding: 7px 13px;
		}
		.form-group button:hover 
		{
			padding: 10px 16px;
			cursor: pointer;
			transition: .3s;
		}
		.card 
		{
			width: 80%;
			float: right;
			align-items: center;
			justify-content: center;
			text-align: center;
			/*border: 1px solid black;*/
			margin-top: 100px;
		}
		.card .card-body table
		{
			justify-content: center;
			align-items: center;
			text-align: center;
		}
	</style>
</head>
<body>
	<div class="box">
		<form name="form" method="GET" action="sale_excel.php">
			<div class="form-group">
				<label>Start Date:</label>
				<input type="date" name="from_date" class="form-control" value="<?php if (isset($_GET['from_date'])) 
				{
					echo $_GET['from_date'];
				} ?>">
			

			
				<label style="margin-left:8%;">End Date:</label>
				<input type="date" name="to_date" class="form-control" value="<?php if (isset($_GET['to_date'])) 
				{
					echo $_GET['to_date'];
				} ?>">
			

			</div>
			<?php
			$query1 = mysqli_query($conn, "SELECT * FROM `order_tbl` WHERE  sold='1'"); 
			?>
			<div class="form-group">
				<label></label><br>
				<button style="margin-top:30px;" type="submit" name="sr" class="btns">Generate</button>
			</div>

			<div class="form-group">
				<label></label><br>
				<button style="margin-top:30px;" type="submit" name="td" class="btns">Till Now</button>
			</div>
			
		</form>

		</div>
		</div>
		</div>
	</div>
		
		

		
</body>
</html>


