<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Catalog</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<style>
		.card {
			margin-top: 20px;
		}
		.card img {
			height: 300px;
			object-fit: cover;
		}
		.card-title {
			font-weight: bold;
			font-size: 20px;
		}
		.card-text {
			margin-top: 10px;
			margin-bottom: 10px;
		}
		.card-button {
			margin-top: 10px;
		}
	</style>
</head>
<body>
	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="#">Thế giới âm nhạc</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="index.php">Homepage</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="catalog.php">Catalog</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i> Cart</a>
				</li>
			</ul>
		</div>
	</nav>

	<!-- Content -->
	<div class="container">
		<h1>Catalog</h1>
		<div class="row">
			<?php
				// Kết nối database
				$conn = mysqli_connect("localhost", "username", "password", "database");

				// Kiểm tra kết nối
				if (!$conn) {
					die("Kết nối database thất bại: " . mysqli_connect_error());
				}

				// Truy vấn database để lấy danh sách sản phẩm
				$sql = "SELECT * FROM products";
				$result = mysqli_query($conn, $sql);

				// Hiển thị danh sách sản phẩm
				while ($row = mysqli_fetch_assoc($result)) {
					echo '<div class="col-md-4">';
					echo '<div class="card">';
					echo '<img class="card-img-top" src="' . $row["image"] . '" alt="' . $row["name"] . '">';
					echo '<div class="card-body">';
					echo '<h5 class="card-title">' . $row["name"] . '</h5>';
					echo '<p class="card-text">' . $row["description"] . '</p>';
					echo '<p class="card-text"><strong>Price:</strong> ' . number_format($row["price"]) . ' VND</p>';
					echo '<a href="add_to_cart.php?id=' . $row["id"] . '" class="btn btn-primary card-button"><i class="fas fa-shopping-cart"></i> Add to cart</a>';
					echo '</div>';
					echo '</div>';
					echo '</div>';
				}

				// Đóng kết nối database
				mysqli_close($conn);
			?>
		</div>
	</div>
</body>
</html>