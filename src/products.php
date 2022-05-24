<?php
session_start();
include('cart.php');
?>
<!DOCTYPE html>
<html>

<head>
	<title>
		Products
	</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link href="style.css" type="text/css" rel="stylesheet">
</head>

<body>
	 <!-- print_r($_SESSION['cart']);  -->
	
	<div id="header">
		<h1 id="logo">Logo</h1>
		<nav>
			<ul id="menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="products.php">Product</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</nav>
	</div>
	<div class="container mt-5">
		<div class="row">
			<div class="col-sm-3">
				<form action="config.php"method="POST">
				<div class="card" >
					<img src="images/basketball.png" class="card-img-top" alt="...">
					<div class="card-body text-center">
						<h5 class="card-title">basketball</h5>
						<p class="card-text">Price:$150.00</p>
						<button type="submit" name="add_cart" class="btn btn-danger">Add To Cart</button>
						<input type="hidden" name="Item_name" value="basketball">
						<input type="hidden" name="price" value="150">
					</div>
				</div>
				</form>
			</div>
			<div class="col-sm-3">
				<form action="config.php" method="POST">
				<div class="card" >
					<img src="images/football.png" class="card-img-top" alt="...">
					<div class="card-body text-center">
						<h5 class="card-title">football</h5>
						<p class="card-text">Price:$120.00</p>
						<button type="submit" name="add_cart" class="btn btn-danger">Add To Cart</button>
						<input type="hidden" name="Item_name" value="football">
						<input type="hidden" name="price" value="120">
					</div>
				</div>
				</form>
			</div>
			<div class="col-sm-3">
				<form action="config.php" method="POST">
				<div class="card" >
					<img src="images/soccer.png" class="card-img-top" alt="...">
					<div class="card-body text-center">
						<h5 class="card-title">soccer</h5>
						<p class="card-text">Price:$110.00</p>
						<button type="submit" name="add_cart" class="btn btn-danger">Add To Cart</button>
						<input type="hidden" name="Item_name" value="soccer">
						<input type="hidden" name="price" value="110">
					</div>
				</div>
				</form>
			</div>
			<div class="col-sm-3">
				<form action="config.php" method="POST">
				<div class="card" >
					<img src="images/table-tennis.png" class="card-img-top" alt="...">
					<div class="card-body text-center">
						<h5 class="card-title">table-tennis</h5>
						<p class="card-text">Price:$90.00</p>
						<button type="submit" name="add_cart" class="btn btn-danger">Add To Cart</button>
						<input type="hidden" name="Item_name" value="table-tennis">
						<input type="hidden" name="price" value="90">
					</div>
				</div>
				</form>
			</div><br>
			<div class="col-sm-3">
				<form action="config.php" method="POST">
				<div class="card" >
					<img src="images/tennis.png" class="card-img-top" alt="...">
					<div class="card-body text-center">
						<h5 class="card-title">tennis</h5>
						<p class="card-text">Price:$80.00</p>
						<button type="submit" name="add_cart" class="btn btn-danger">Add To Cart</button>
						<input type="hidden" name="Item_name" value="tennis">
						<input type="hidden" name="price" value="80">
					</div>
				</div>
				</form>
			</div>
		</div>
	</div>
	<div id="footer">
		<nav>
			<ul id="footer-links">
				<li><a href="#">Privacy</a></li>
				<li><a href="#">Declaimers</a></li>
			</ul>
		</nav>
	</div>
</body>

</html>