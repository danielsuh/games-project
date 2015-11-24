<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dashboard Orders</title>
	<style type="text/css">
		table {
			border:1px solid black;
			margin-top:10px;
		}

		thead {
			background-color: silver;
		}

		#search {
			border-radius:4px;
			margin-top: 10px;
		}

	</style>
</head>
<body>
	<?= $this->load->view('partials/nav_bar')?>
	<form method="post" action="">
		<input id="search" type="text" value="search" name="search">
		<select name="status">
			<option>Show All</option>
			<option>Order in Process</option>
			<option>Shipped</option>
			<option>Cancelled</option>
		</select>
	</form>
	<table>
		<thead>
			<tr>
				<td>Order ID</td>
				<td>Name</td>
				<td>Date</td>
				<td>Billing Address</td>
				<td>Total</td>
				<td>Status</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><a href="/orders/show/<?=$id?>"><?= $id?></a></td>
				<td>Name</td>
				<td>Date</td>
				<td>Billing Address</td>
				<td>Total</td>
				<td>
				<form method="post" action="">
				<select name="status">
					<option>Shipped</option>
					<option>Order in Process</option>
					<option>Cancelled</option>
				</select>
				</form>
				</td>
			</tr>

		</tbody>

	</table>
</body>
</html>