<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<table>
                    <tr>
                        <th>S.N.</th> 
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Color</th>
                        <th>Date</th>
                    </tr>

                    <?php 
                        $conn=mysqli_connect('localhost','root','');
                        $db=mysqli_select_db($conn,'factory');

                        $select_result = mysqli_query($conn,"SELECT * from material_tbl Order By id Desc");
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
                                            <?php echo $row['name'];?>
                                        </td>
                                        <td>
                                            <?php echo $row['quantity'];?>
                                        </td>
                                        <td>
                                            <?php echo $row['price'];?>
                                        </td>
                                        <td>
                                            <?php echo $row['color'];?>
                                        </td>
                                        
                                    </tr>

                <?php }}
                             ?> 
                   
                
                </table>
</body>
</html>