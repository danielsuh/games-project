<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit Product</title>
</head>
<body>
	<h2>Edit Product- ID #</h2>
	<form method="post" action="">
		<p>Name:<input type="text" name="name"></p>
		<p>Description:<input type="text" name="description"></p>
		<p>Categories:
			<select name="category">
				<option></option>
			</select>
		</p>
		<p>or add new category:<input type="text" name="category"></p>
		<p>Images <input type="submit" name="upload" value="Upload"></p>
		<a href="/dashboard/products"> Cancel </a>
		<input type="submit" value="Preview" name="preview">
		<input type="submit" value="Update" name="update">
	</form>
</body>
</html>