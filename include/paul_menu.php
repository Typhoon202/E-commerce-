<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "demo");
$query = "SELECT * FROM products ORDER BY id ASC";
$run = mysqli_query($connect, $query);
$count = count($_SESSION["cart"]);

?>

<!DOCTYPE html>
<html id = "background">
<head>
	<title>PAUL MENU</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="paul_css.css">
</head>
<body >
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
        <li><a href="paul_order.php" class="linksNav"><span class="glyphicon glyphicon-shopping-cart"></span> YOUR ORDER <?php echo $count ?></a></li>
      </ul> 
    </div>
  </div>
</nav>
<br><br><br><br><br>


<div class="tab">
  <button  class="tablinks" style="background-color: rgb(64,64,64);" onclick="openMenu(event, 'soup')">SOUPS</button>
  <button class="tablinks" onclick="openMenu(event, 'tartin')">TARTINS</button>
  <button class="tablinks" onclick="openMenu(event, 'hdrink')">HOT BEVERAGES</button>
  <button class="tablinks" onclick="openMenu(event, 'drink')">DRINKS</button>
</div>	





           <?php
	$query = "SELECT * FROM products ORDER BY id ASC";
	$run = mysqli_query($connect, $query);
	if(mysqli_num_rows($run) > 0)
	{
		while($row = mysqli_fetch_array($run))
		{

      $id = $row['id'];
      $name = $row['p_name'];
      $image = $row['image'];
      $price = $row['price'];
      $qua = $row['qua'];
			?>

<div id="soup" style="display: block;  " class="tabcontent">
 <p><section class="product">                     
         <div class="containermycss">
  <img src="image/<?php echo $image; ?>" class="img-res" alt="">
  <div class="overlay">
    <div class="text" style="font-size: 12pt;" ><b><i>Ingredients:</i></b> <br>French cheese,<br> cheddar cheese, broccoli, <br> cream, garlic</div>
  </div>
</div>
		 <div class="description">
		 <form method="post" action="process.php?action=add&id=<?php echo $id; ?>">
         <h5 class="mealname"><?php echo $row["p_name"]; ?></h5>                  
          <p><strong class="price">₼ <?php echo $row["price"]; ?></strong></p>
           <div class="buttons clearfix">
              <i>(0.5 porsion.)</i>  
            <input type="text" name="quantity" class="form-control" value="1">
            <input type="hidden" name="hidden_name" value="<?php echo $row["p_name"]; ?>">
            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
            <input type="hidden" name="hidden_image" value="image/<?php echo $row["image"]; ?>">            
            <input type="submit" name="add" style="width:240px;" class="add_basket" data-outstok="true" value="ADD TO PLATE">
			 </div>
			 </form>
          </div>
           </section>
         
<?php
		}
	
	?>
   <!---
            <div class="col-md-3">
            <form method="post" action="shop.php?action=add&id=<?php echo $row["id"]; ?>">
            <img src="<?php echo $row["image"]; ?>" class="img-responsive">
            <h5 class="text-info"><?php echo $row["p_name"]; ?></h5>
            <p><h5 class="text-danger">₼ <?php echo $row["price"]; ?></h5></p>
            <input type="text" name="quantity" class="form-control" value="1">
            <input type="hidden" name="hidden_name" value="<?php echo $row["p_name"]; ?>">
            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
            <input type="submit" name="add" style="margin-top:5px;" class="btn btn-default" value="Add to Bag">
            </div>
            </form>
            </div>
            <?php
		}
	
	?> -->
 


<div id="tartin" class="tabcontent">
 <p><section class="product">                     
         <div class="containermycss">
  <img src="sandwichclub.jpg" class="img-res" alt="">
  <div class="overlay">
    <div class="text" style="font-size: 12pt;" ><b><i>Ingredients:</i></b> <br>Chicken, mayonnaise<br> lettuce, tomato,<br> toast bread, <br> egg, veal ham</div>
  </div>
</div>
     <div class="description">
         <h3 class="mealname">SANDWICH CLUB</h3>
                                
          <p><strong class="price">13.00 AZN</strong></p>
           <div class="buttons clearfix">
              <i>(0.5 porsion.)</i>               
             <div><a href="#" class="add_basket" data-outstok="true" >ADD TO ORDER</a></div>
       </div>
          </div>
           </section>
      <section class="product">                     
         <div class="containermycss">
  <img src="tartinepoulet.jpg" class="img-res" alt="">
  <div class="overlay">
    <div class="text" style="font-size: 12pt;" ><b><i>Ingredients:</i></b> <br>Chicken, onion<br> mushroom, pepper, <br> fused cheese</div>
  </div>
</div>
     <div class="description">
         <h3 class="mealname">TARTİNE DE POULET</h3>
                                
          <p><strong class="price">13.00 AZN</strong></p>
           <div class="buttons clearfix">
              <i>(0.5 porsion.)</i>               
             <div><a href="#" class="add_basket" data-outstok="true" >ADD TO ORDER</a></div>
       </div>
          </div>
           </section>
  
</p>
</div>

<div id="hdrink" class="tabcontent">
   <p><section class="product">                     
         <div class="containermycss">
  <img src="espresso.jpg" class="img-res" alt="">
  <div class="overlay">
    <div class="text" style="font-size: 12pt;" ><b><i>Ingredients:</i></b> <br>Coffee beans</div>
  </div>
</div>
     <div class="description">
         <h3 class="mealname">ESPRESSO</h3>
                                
          <p><strong class="price">3.00 AZN</strong></p>
           <div class="buttons clearfix">
              <i>(0.5 porsion.)</i>               
             <div><a href="#" class="add_basket" data-outstok="true" >ADD TO ORDER</a></div>
       </div>
          </div>
           </section>
      <section class="product">                     
         <div class="containermycss">
  <img src="hotchocolate.jpg" class="img-res" alt="">
  <div class="overlay">
    <div class="text" style="font-size: 12pt;" ><b><i>Ingredients:</i></b> <br>Cocoa powder,<br> milk, white sugar</div>
  </div>
</div>
     <div class="description">
         <h3 class="mealname">PAUL HOT CHOCOLATE</h3>
                                
          <p><strong class="price">5.00 AZN</strong></p>
           <div class="buttons clearfix">
              <i>(0.5 porsion.)</i>               
             <div><a href="#" class="add_basket" data-outstok="true" >ADD TO ORDER</a></div>
       </div>
          </div>
           </section>
  
</p>
</div>
<div id="drink" class="tabcontent">
   <p><section class="product">                     
         <div class="containermycss">
  <img src="bonaqua.jpg" class="img-res" alt="">
  <div class="overlay">
    <div class="text" style="font-size: 12pt;" ><b><i>Ingredients:</i></b> <br>Still water</div>
  </div>
</div>
     <div class="description">
         <h3 class="mealname">BONAQUA</h3>
                                
          <p><strong class="price">1.70 AZN</strong></p>
           <div class="buttons clearfix">
              <i>(0.5 porsion.)</i>               
             <div><a href="#" class="add_basket" data-outstok="true" >ADD TO ORDER</a></div>
       </div>
          </div>
           </section>
      <section class="product">                     
         <div class="containermycss">
  <img src="lipton.jpg" class="img-res" alt="">
  <div class="overlay">
    <div class="text" style="font-size: 12pt;" ><b><i>Ingredients:</i></b> <br>Ice tea</div>
  </div>
</div>
     <div class="description">
         <h3 class="mealname">LIPTON ice tea</h3>
                                
          <p><strong class="price">3.00 AZN</strong></p>
           <div class="buttons clearfix">
              <i>(0.5 porsion.)</i>               
             <div><a href="#" class="add_basket" data-outstok="true" >ADD TO ORDER</a></div>
       </div>
          </div>
           </section>
  
</p>
</div>
</div>

<br><br>
<footer >
  <hr>
  <div class="container" style="clear: both;">
    <div class="row">


      <div class="col-sm-4">
        <h4>About Us</h4>
        <hr>
        <p>Julien Holder married Suzanne, the granddaughter of Charlemagne Mayot. The Holders opened their own bakery in Lille, in 1935. The Holders and their son Francis took over a better known bakery-pâtisserie owned by the Paul family, and kept the "Paul" name.</p> 
      </div>  
            <div class="col-sm-3"> </div>  
       <div class="col-sm-2">
        <h4>Cafeterias</h4>
        <hr>
        <ul class="list-unstyled">
          <li><a class="navigation" href="paul.html">PAUL</a></li>
          <li><a class="navigation" href="cinnabon.html">Cinnabon</a></li>
          <li><a class="navigation" href="divan.html">REM</a></li>
          <li><a class="navigation" href="books.html">Books&Bytes</a></li>
        </ul>  
      </div>  


    

      <div class="col-sm-2">
        <h4>Contacts</h4>
        <hr>
        <ul class="list-unstyled">
        <div style="font-size: 12px" >

        <li>+994 553830733 </li>
        <li>+994 702023616 </li>
        <li>FlexTech@gmail.com </li>


        </ul>

        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-twitter "></a>
        <a href="#" class="fa fa-google "></a>
        <a href="#" class="fa fa-instagram  "></a>
        
        
      </div>  


    </div>
      
<hr><p>
<h5>Copyright &copy; 2017 TastySeach.com </h5> 
        All rights reserved. </p>

  </div>

</footer>





	<script>
function openMenu(evt, menuBar) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
        tablinks[i].style.backgroundColor="";
    }
    document.getElementById(menuBar).style.display = "block";
    evt.currentTarget.className += " active";
}

</script>
<script >
$(function() {
    $(".plus").click(function() {
        var text = $(this).prev(":text");
        text.val(parseFloat(text.val(), 10) + 0.5 + " (porsion)");
    });

    $(".minus").click(function() {
        var text = $(this).next(":text");
        text.val(parseFloat(text.val(), 10) - 0.5 + " (porsion)");
    });
});
    </script>


</body>
</html>