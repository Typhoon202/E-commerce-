<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "demo");
  $query = "SELECT * FROM products ORDER BY id ASC";
  $run = mysqli_query($connect, $query);
   $image = $row['image'];
 
      
?>

<!DOCTYPE html>
<html>
<head>

	<title>Plate</title>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="paul_css.css">
</head>
<body>
<nav class="navbar nav navbar-inverse navbar-fixed-top" style="background-color: black " >
  <div class="container-fluid">
            
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
        <img  id="paulf" src="paul_logo.png">
      
      <ul class="nav navbar-nav">
        <li ><a href="paul.html" class="linksNav">Home</a></li>
        <li><a href="paul_menu.html" class="linksNav">Menu</a></li>
        <li><a href="paul_contact.html" class="linksNav">Contact</a></li>
        <li class="dropdown" style="background-color: black">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" class="linksNav">TastySearch <span class="caret"></span></a>
          <ul class="dropdown-menu" style="background-color:black; opacity:0.8;">
            <li><a href="paul.html" class="linksNav">PAUL</a></li>
            <li><a href="cinnabon.html" class="linksNav">Cinnabon</a></li>
            <li><a href="books.html" class="linksNav">Books&Bytes</a></li>
            <li><a href="divan.html" class="linksNav">Rem Service</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="http://www.paul-international.com/" class="linksNav"><span class="glyphicon glyphicon-globe"></span> PAUL International</a></li>
        <li><a href="paul_order.html" class="linksNav"><span class="glyphicon glyphicon-shopping-cart"></span> YOUR ORDER</a></li>
      </ul> 
    </div>
  </div>
</nav>

<div id="orderheader">
<div class="container">
    <div style="clear:both"></div>
    <CENTER><h3 style="font-family: 'Times New Roman'"><B>IN YOUR PLATE:</B></h3></CENTER>
    <div class="table-responsive">
    <table class="table table-bordered">
    <tr>
    <th width="20%">Product Name</th>
    <th width="20%">Product Image </th>
    <th width="10%">Quantity </th>
    <th width="20%">Price Details</th>
    <th width="15%">Order Total</th>
    <th width="5%">Action</th>
    </tr>
  
    <?php
  if(!empty($_SESSION["cart"]))
  {
    $total = 0;
    foreach($_SESSION["cart"] as $keys => $values)
    {
      ?>
            <form method="post">
            <tr>
            <td><?php echo $values["item_name"]; ?></td>
            <td><img src="image/<?php echo $image; ?>" class="img-res" alt=""></td>
            <td>
            <input type="text" name="quantity[]" class="form-control" value="<?php echo $values["item_quantity"]; ?>"/>
            <input id="orderbutton" type="submit" name="add" value="Update">
            </td>
            <td>₼ <?php echo $values["product_price"]; ?></td>
            <td>₼ <?php echo number_format($values["item_quantity"] * $values["product_price"], 2); ?></td>
            <td><a href="process.php?action=delete&id=<?php echo $values["id"]; ?>"><span class="price">X</span></a></td>
            </tr>
           
            <?php 
      $total = $total + ($values["item_quantity"] * $values["product_price"]);
    }
    ?>
        <tr>
        <td></td>
        <td colspan="4" align="right"><b>Grand Total:  </b>₼ <?php echo number_format($total, 2); ?></td>
        <td></td>
        </tr>

        <?php
   
  }
  ?>
    <tr><td colspan=8 align="CENTER" ><input id="orderbutton" type="submit" name="add" value="Update" />
          <a href="paul_menu.php"><input id="orderbutton" type="button" value="CONTINUE ORDERING"></a>
    </td>
    </tr>
    </table>
    </form>
    <?php
 
    ?>




    

<hr class="hrmargin">

<div class="container"> 
		<div class="row">
			<div class="col-sm-9"></div>
			<div class="col-sm-3"> <i> <tr>
        <td></td>
        </tr></i></div> <br><br>
			<div class="orderform">
  			<input class="orderoption" size="30" type="text" name="firstname" placeholder="ID">
  			<input class="orderoption" size="40" type="text" name="firstname" placeholder="Name">
			<input class="orderoption" type="time" min="09:00" max="18:00" size="40" type="text" name="lastname" placeholder="Select time interval">
			<input id="orderbutton" type="button" value="Send Order"> </div>


	</div><br>
</div>
			
		</div>
</div>
</div>
<script >
$(function() {
    $(".plus").click(function() {
        var quantity = $(this).prev().prev(":quantity");
        quantity.val(parseFloat(quantity.val(), 10) + 0.5);
    });

    $(".minus").click(function() {
        var quantity = $(this).prev(":quantity");
        quantity.val(parseFloat(quantity.val(), 10) - 0.5);
    });
});
    </script>	
</body>
</html>



