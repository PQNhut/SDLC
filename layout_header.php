<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Header</title>
</head>

    <body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<a class="logo" href="./">Thế giới âm nhạc</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<nav class="navbar-header">
						<a href="./index">Homepage</a>
						<a href="./login">Login</a>
                        <a href="./register">Register</a>
						<a href="./catalog.php">List Music</a>
					</nav>
				</ul>
				<form class="d-flex" method="post" action="search.php">
					<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
					<button class="btn btn-outline-success" type="submit" name="submit">Search</button>
				</form>
			</div>
		</div>
		<form class="d-flex" method="post" action="admin.php">
				<input class="form-control me-2" type="admin" placeholder="admin" aria-label="admin" name="admin">
				<button class="btn btn-outline-success" type="submit" name="submit">Đăng Nhập</button>
				</form>
	</nav>
</body>
</html>

<style>
		/*Định dạng CSS */
		.navbar {
			background-color: #333;
			color: #fff;
			padding: 10px;
		}
		.navbar a {
			color: #fff;
			padding: 10px;
			text-decoration: none;
		}
		.navbar a:hover {
			color: #fff;
			background-color: #555;
		}
	</style>