
<?php 
include_once "person.php";


?>

<html>
<head>
	<meta charset="UTF-8">
	<title>Food &amp; Recipes Web Template</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="http://localhost/dashboard/site/css/login.css">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<div>
<center>
		<?php  if($_SESSION["pre_url"]=="home_admin.php"){ 
			 ?></center>

</head>
<body>
	<div class="header">
		<div>
			<img src="images/logo.png" alt="Logo">
		</div>
		        <!--  <form >
<a href="http:login_Form.php" class="button ">LOG IN</a>			
		</form>
	</div> -->

	</div>
	<div class="body">
		<div>
			
			<div class="body">
				<form action="viewprofile.php" >
								<h3><?php echo " * HI ".$_SESSION["username"] ."  .....     "?>  
								<input type="submit" name="sumit" value="view my profile "/>

								</form><form action="search.php" method="POST">
<input type="text" name="search" value ="write the recipe's name .. ">
<input type="submit" name="btn" value="search">
																</h3>
</form>
								
<br>
				
				<ul>
					<li class="current">
						<a href="blog.html"><img src="images/holi-turkey.jpg" alt="Image"></a>
						<div>
							<h2><a href="blog.html">Holy Turkey</a></h2>
							<p>
								This is just a place holder
							</p>
						</div>
					</li>
					<li>
						<a href="blog.html"><img src="images/fruits-and-bread.jpg" alt="Image"></a>
						<div>
							<h2><a href="blog.html">Fruits &amp; Bread</a></h2>
							<p>
								This is just a place holder
							</p>
						</div>
					</li>
					<li>
						<a href="blog.html"><img src="images/dessert.jpg" alt="Image"></a>
						<div>
							<h2><a href="blog.html">Dessert</a></h2>
							<p>
								This is just a place holder
							</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="footer">
				<ul>
					<li>
						<h2><a href="Records.php">View Records</a></h2>
						<a href="Records.php"><img src="images/info.png" alt="Image"></a>
					</li>
					
					<li>
						<h2><a href="">delete </a></h2>
						<a href="delete.php"><img src="images/delete.jpg" alt="Image"></a>
					</li>
				</ul>
				
				<ul>
					<li>
						<h2><a href="show_orders.php">View orders</a></h2>
						<a href="show_orders.php"><img src="images/order.jpg" alt="Image"></a>
					</li>
					<li>
						<h2><a href="read_complain.php">Read complains</a></h2>
						<a href="read_complain.php"><img src="images/complain.jpg" alt="Image"></a>
					</li>
				</ul>
				<ul>
					
					<li>
						<h2><a href="">View Recipes</a></h2>
						<a href="viewrecTABLE.php"><img src="images/view.png" alt="Image"></a>
					</li>
					<li>
						<h2><a href="addrec.html">The payment </a></h2>
						<a href="payment_page.php"><img src="images/add.png" alt="Image"></a>
					</li>
				</ul>
				
				
			</div>
		</div>
		<div>

		<div>
				
				
				<ul ><form action="myhome.php" method="POST">
					<input type="submit" value ="LogOut" name ="logout" class="button ">
				</form>
			</div>
			<div>
				
			</div>
			
			<div>
				<h3>Get Updates</h3>
				<a href="http://freewebsitetemplates.com/go/facebook/" target="_blank" id="facebook">Facebook</a>
				<a href="http://freewebsitetemplates.com/go/twitter/" target="_blank" id="twitter">Twitter</a>
				<a href="http://freewebsitetemplates.com/go/youtube/" target="_blank" id="youtube">Youtube</a>
				<a href="http://freewebsitetemplates.com/go/flickr/" target="_blank" id="flickr">Flickr</a>
				<a href="http://freewebsitetemplates.com/go/googleplus/" target="_blank" id="googleplus">Google&#43;</a>
			</div>
		</div>
	</div>
	<div class="footer">
		<div>
			<p>
				&copy; Copyright 2012. All rights reserved
			</p>
		</div>
	</div>
</body>
</html>
<?php 
}else {
  ?>
  <img src="images/warning.png" alt="HTML5 Icon" style="width:128px;height:128" > <?php
  echo "<h1>Sorry u can't access this page ..</h1>";
  ?>
  <form action ="myhome.php">
    <input type="submit" class="btn btn-primary btn-lg" value="Go To Home Page" name="home">
  </form>
  <?php
}
?>