<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>View Order</title>
	<style type="text/css">
		div {
			border:1px solid black;
			display: inline-block;
			padding: 10px;		
		}

		table {
			border:1px solid black;
			margin-top:10px;
			border-collapse:collapse;
		}

		thead {
			background-color: silver;
		}
	</style>

</head>
<body>
	<?= $this->load->view('partials/nav_bar')?>

	<div id="info">
		<p>Order ID: 1</p>
		<h4>Customer Shipping info:</h4>
		Name: <br>
		Address: <br>
		City: <br>
		State: <br>
		Zipcode: <br>

		<h4>Customer Billing info: </h4>
		Name:  <br>
		Address: <br>
		City: <br>
		State: <br>
		Zipcode: <br>
	</div>

		<table>
		<thead>
			<tr>
				<td>ID</td>
				<td>Item</td>
				<td>Price</td>
				<td>Quantity</td>
				<td>Total</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>35</td>
				<td>cup</td>
				<td>1.99</td>
				<td>1</td>
				<td>Total</td>
			</tr>
		</tbody>
	</table>

	<div id="status">
		<h4>Status:</h4>
	</div>

	<div id="total">
		<p>Sub total:</p>
		<p>Shipping:</p>
		<p>Total Price:</p>
	</div>
</body>
</html>