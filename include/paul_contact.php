<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "demo");
?>
<!DOCTYPE html>
<html id = "background">

<head>
		<title>PAUL CONTACT</title>
		  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="paul_css.css">
</head>

<body  >
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

<div id="contact_info">
	<h2>CONTACT US</h2>

		<hr><br>

	<iframe id="paulmap" 
			src="https://www.google.com/maps?q=ADA+University+&amp;output=embed"  frameborder="0" scrolling="no">
	</iframe  >
	<a href="https://www.facebook.com/PAUL.Azerbaijan/" class="fa fa-facebook fa-3x" style="color:black;"> </a>
	<a href="https://www.instagram.com/paulazerbaijan/" class="fa fa-instagram fa-3x" style="color:black;"></a>
	<a href="https://www.instagram.com/paulazerbaijan/" class="fa fa-twitter fa-3x" style="color:black;"></a> <br> <br>

<table>
	<tr>
		<td rowspan="2" > <i class="fa fa-phone fa-2x"> &nbsp </i> </td>	
		<td> 055-XXX-XX-XX </td>
	</tr>
	<tr>
		<td > 012-XXX-XX-XX </td>
	</tr>
</table><br>

<hr width="40%" style="float:left" >

<table>
	<tr>
		<td><i class="fa fa-envelope fa-2x" aria-hidden="true">&nbsp</i>
</td>
		<td>PAUL mail</td>
	</tr>
</table>

<hr width="40%" style="float:left" >

<table>
	<tr>
		<td><i class="fa fa-map-marker fa-2x" >&nbsp</i>
</td>
		<td>ADA University, Baku, Azerbaijan</td>
	</tr>
</table>

<hr>

<h2>Send Feedbacks</h2>
	<div id="feedbackform">
		<form action="paul_contact.php" method="post" enctype="multipart/form-data">
  			<input class="inputname" type="text" name="firstname" placeholder="Firstname">
			<input class="inputname" type="text" name="lastname" placeholder="Lastname"><br> <br>
  			<textarea name="feedback" type="text" id="feebackid" rows="20" cols="160" placeholder="Write feedbacks here.."></textarea>
  <input id="feedbackbutton" type="submit" name="submit" value="submit" />
		</form><br>

 
	</div><br>
</div>
<br><br><br><br><br><br><br>


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
				<a href="#" class="fa fa-instagram 	"></a>
				
        
      </div>  


    </div>
      
<hr><p>
<h5>Copyright &copy; 2017 TastySeach.com </h5> 
        All rights reserved. </p>

  </div>

</footer>

</body>
</html>
<?php 

if (isset($_POST['submit'])) 
{
  $fname = $_POST['firstname'];
  $lname = $_POST['lastname'];
  $feedback = $_POST['feedback'];
  
  $sql = "insert into feedback (fname, lname, feedback) values ('$fname','$lname','$feedback')";


  if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Perform queries 
mysqli_query($con,"SELECT * FROM feedback");
mysqli_query($con,"INSERT INTO feedback (fname, lname, feedback) values ('$fname','$lname','$feedback')");
echo '<script>alert("Thank you for your feedback.")</script>';
mysqli_close($con);

}

?>