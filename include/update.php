<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "demo");
if(isset($_POST["update"]))
{
	if(isset($_SESSION["cart"]))
	{
		$item_array_id = array_column($_SESSION["cart"], "product_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["cart"]);
			$item_array = array(
			'id' => $_GET["id"],
			'item_name' => $_POST["hidden_name"],
			'product_price' => $_POST["hidden_price"],
			'item_quantity' => $_POST["quantity"]
			);
			$_SESSION["cart"][$count] = $item_array;
			echo '<script>window.location="paul_menu.php"</script>';
			echo '<script>alert("Product Is Added In Your Plate Successfully")</script>';
		}
		else
		{
			echo '<script>alert("Products already added to cart")</script>';
			echo '<script>window.location="paul_menu.php"</script>';
		}
	}
	else
	{
		$item_array = array(
		'id' => $_GET["id"],
		'item_name' => $_POST["hidden_name"],
		'product_price' => $_POST["hidden_price"],
		'item_quantity' => $_POST["quantity"]
		);
		$_SESSION["cart"][0] = $item_array;
	}
}
if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["cart"] as $keys => $values)
		{
			if($values["id"] == $_GET["id"])
			{
				unset($_SESSION["cart"][$keys]);
				echo '<script>alert("Product has been removed")</script>';
				echo '<script>window.location="paul_order.php"</script>';
			}
		}
	}
}



?>