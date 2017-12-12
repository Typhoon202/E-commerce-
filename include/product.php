<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "demo");
?>
<DOCTYPE! html>
<!DOCTYPE html>
<html>
<head>
	<title>ADD Product</title>
</head>
<body>

</body>
</html>
<center>
	<form action="product.php" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<th colspan="2">ADD PRODUCT</th>
			</tr>
			<tr>
				<td>Name: </td>
				<td><input type="text" name="name" /></td>
			</tr>
			<tr>
				<td>Image: </td>
				<td><input type="file" name="image" /></td>
			</tr>

			<tr>
				<td>Price: </td>
				<td><input type="text" name="price" /></td>
			</tr>

			<tr>
				<td colspan="2" align="center"><input type="submit" name="submit" value="submit" /></td>
			</tr>
		</table>
	</form>
</center>

<?php 

if (isset($_POST['submit'])) 
{
	$p_name = $_POST['name'];
	$price = $_POST['price'];
	$image = $_FILES['image']['name'];
	

	move_uploaded_file($image, "image/$image");

	$sql = "insert into products (p_name, image, price) values ('$p_name','$image','$price')";

	if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Perform queries 
mysqli_query($con,"SELECT * FROM products");
mysqli_query($con,"INSERT INTO products (p_name, image, price) values ('$p_name','$image','$price')");
echo '<script>alert("Product Successfully Inserted")</script>';
mysqli_close($con);

}

?>