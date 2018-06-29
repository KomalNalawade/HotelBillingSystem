<!DOCTYPE html>
<html>
<head>
	<title>Bill</title>
	<link rel="stylesheet" type="text/css" href="Cssfile.css">
	<style type="text/css">
		div{
			background-color: #a3bace; 
			
			padding-left: 50px;
		}
	.div1 label
		{

			position: absolute;			

		}
	</style>
</head>
	<body>
		<?php require('header.php') ?>
	<center>
	<div class="div1" style="width:40%;">
		<h1>Hotel Name</h1>

		<br>
		<br>
		<br>
		<label>Customer Name:</label><input type="text" name="custname" style="margin-left: 8em;">
		<br>
		<br>
		<label>Table Name:</label><input type="text" name="tabname" style="margin-left: 8em;">

		<br>
		<br>
		<br>
		<label>Bill</label>
		<br>
		<br>
		<table border="1px solid black" cellpadding="12px" >
			<tr>
				<td>Items</td>
				<td>Quantity</td>
				<td>Price</td>
			</tr>

			<tr>
			<td></td>	
			<td></td>	
			<td></td>	
			</tr>

			<tr>
				<td></td>
				<td></td>	
				<td></td>	
			</tr>

			<tr>
				<td></td>	
				<td></td>	
				<td></td>	
			</tr>
			
			<tr >
				<td colspan=3>Total</td>
			</tr>
		</table>
		<br>
		<br>
	</div>
	</center>
	<?php require('footer.php') ?>
	</body>
</html>