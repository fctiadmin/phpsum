<?php 
require 'admin_dbcon.php';


?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<table border="1" cellspacing="0">
		<tr>
			<td>Slip No</td>
			<td>Roll No</td>
			<td>Student Name</td>
			<td>Amount</td>
			<td>Date</td>
		</tr>
		<?php
		 date_default_timezone_set("Asia/Dhaka");
		 $current_date=date('Y-m-d');
		$select_data=mysqli_query($admin_dbcon,"SELECT * FROM `payment`");
		$today_amount_data_select=mysqli_query($admin_dbcon,"SELECT sum(amount) as total_amount FROM payment");
		$total_row=mysqli_fetch_assoc($today_amount_data_select);
		while($rows=mysqli_fetch_assoc($select_data)){?>
		<tr>
		<td><?=$rows['slip_number']?></td>
			<td><?=$rows['roll']?></td>
			<td><?=$rows['student_name']?></td>
			<td><?=$rows['amount']?></td>
			<td><?=$rows['payment_date']?></td>
		</tr>
		
		<?php	
		}
		
		
		?>
		<tr>
		<td style="text-align:right" colspan="3">Total</td>
		<td  colspan="2"><?=$total_row['total_amount']?></td>
		</tr>
	</table>
</body>
</html>