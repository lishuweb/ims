<style>
<?php 
include 'conn.php';

$from_date = $_GET['from_date'];
$to_date = $_GET['to_date'];
?>
</style>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css
    ">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.bootstrap4.min.css
    ">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.colVis.min.js"></script>



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
        .sal 
        {
            /*display: flex;*/
            margin-top: 6%;
            width: 90%;
            height: 60px;
            background-color: #138D75;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
            justify-content: center;
            align-items: center;
            border-radius: 3px;
        }
        .sal a 
        {
            text-decoration: none;
            text-align: center;
            line-height: 60px;
            font-weight: bold;
            color: #fff;
            float: left;
            margin-left: 50px;
        }
        .sal h1 
        {
            text-align: center;
            line-height: 60px;
            font-size: 26px;
            font-weight: bold;
            color: #fff; 
            margin-right: 20px;
        }

        .box
        {
            width: 80%;
            /*float: right;*/
            /*border: 1px solid black;*/
            margin-top: 3%;
            justify-content: center;
            align-items: center;
            text-align: center;
            margin-right: auto;
            margin-left: auto;
        }
        .box .btns 
        {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .box .btns button 
        {
            border-color: #A9CCE3;
            padding: 13px 18px;
            color: #2471A3;
            border-radius: 3px;
            background-color: #fff;
        }
        .box .btns button:hover 
        {
            opacity: .5;
            transition: .3s;
        }
        .box .btns form
        {
            margin-left: 10%;
        } 
        .box .btns form input[type="submit"]
        {
            border-color: #A9CCE3;
            padding: 13px 18px;
            color: #2471A3;
            border-radius: 3px;
            background-color: #fff;
            /*margin-top: 10px;*/
        }
        .box .btns form input[type="submit"]:hover 
        {
            opacity: .5;
            transition: .3s;
        }
        .box table 
        {
            margin-top: 50px;
            border-color: 2px solid #fff;
            border-collapse: separate;
            table-layout: auto;
            border-radius: 3px;
            /*border-spacing: 1px 0;*/
        }
        .box table tr:nth-child(odd) 
        {
            background-color: #D0ECE7;
            border-color: 2px solid #fff;
        }
        .box table th 
        {
            text-align: center;
            background-color: #73C6B6;
            color: #fff;
            border: 1px solid #fff;
            border-radius: 3px;

        }
        .box table td 
        {
            text-align: center;
            margin-top: 20px;
            border: 1px solid #fff;
            border-radius: 3px;
        }
    </style>
</head>
<body>
    <div class="sal">
        <a href="sale_report.php">Back</a>
        <h1>Sales Report</h1>
    </div>
    

    <div class="box">
        <div class="btns">
           <button onclick="print()" style="text-align: center;">Print PDF file</button>
           <form action="excel.php" method="POST">
                <input type="hidden" name="from_date" value="<?php echo $from_date; ?>">
                <input type="hidden" name="to_date" value="<?php echo $to_date; ?>">
                <input type="submit" value="Excel" name="">
            </form>
        </div>


    <table id="example dataTables" class="table table-striped table-bordered" style="width:100%">

        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Quantity</th>
            <th>Color</th>
            <th>Product_id</th>
            <th>Type</th>
            <th>Date</th>
        </tr>
        <?php
        // if (isset($_GET['from_date']) && isset($_GET['to_date'])) 
        if(isset($_GET['sr']))
        {
            $from_date = $_GET['from_date'];
            $to_date = $_GET['to_date'];

            $query = "SELECT * from order_tbl where Date between '$from_date' AND '$to_date' AND sold='1'";
            $run = mysqli_query($conn, $query);
            if (mysqli_num_rows($run)) 
            {
                foreach ($run as $row) 
                {
                    ?>
                    <tr>
                        <td><?= $row['id']; ?></td>
                        <td><?= $row['Name']; ?></td>
                        <td><?= $row['Email']; ?></td>
                        <td><?= $row['Phone']; ?></td>
                        <td><?= $row['Quantity']; ?></td>
                        <td><?= $row['Color']; ?></td>
                        <td><?= $row['Product_id']; ?></td>
                        <td><?= $row['Type']; ?></td>
                        <td><?= $row['Date']; ?></td>
                    </tr>

                    <?php

                }

                $results = mysqli_query($conn, "SELECT count(id) from order_tbl where Date between '$from_date' AND '$to_date'AND sold='1'");
                    while ($row = mysqli_fetch_array($results)) 
                        {
                            echo '<h4>Total Sales: '.$row['count(id)'].'</h4>';
                        }
            } 
            else 
            {
                echo " No records found";
            }
        }
        else if(isset($_GET['td']))
        {
            $query = "SELECT * from order_tbl WHERE sold='1'";
            $run = mysqli_query($conn, $query);
            if (mysqli_num_rows($run)) 
            {
                foreach ($run as $row) 
                {
                    ?>
                    <tr>
                        <td><?= $row['id']; ?></td>
                        <td><?= $row['Name']; ?></td>
                        <td><?= $row['Email']; ?></td>
                        <td><?= $row['Phone']; ?></td>
                        <td><?= $row['Quantity']; ?></td>
                        <td><?= $row['Color']; ?></td>
                        <td><?= $row['Product_id']; ?></td>
                        <td><?= $row['Type']; ?></td>
                        <td><?= $row['Date']; ?></td>
                    </tr>

                    <?php

                }
                $results = mysqli_query($conn, "SELECT count(id) from order_tbl WHERE sold='1'");
                while ($row = mysqli_fetch_array($results)) 
                    {
                        echo '<h4 style="margin-top:30px;">Total Sales: '.$row['count(id)'].'</h4>'; 
                    }
                
            } 
            else 
            {
                echo " No records found";
            }   
        }
        else 
        {
            echo 'Enter Date';
        }


    ?>
    </table>
 

</div>

<script type="text/javascript">
    $(document).ready(function() {
        var table = $('#example').DataTable( {
            lengthChange: false,
            buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
        } );

        table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
    } );
</script>
    
</body>
</html>