<div class="container">
		<h3>Search results:</h3>
		<ul>
			<?php
				// Kết nối đến cơ sở dữ liệu
				$conn = mysqli_connect('localhost', 'username', 'password', 'database');

				// Kiểm tra kết nối
				if (!$conn) {
					die('Kết nối thất bại: ' . mysqli_connect_error());
				}

				// Lấy từ khóa tìm kiếm từ biến POST
				if (isset($_POST['submit'])) {
					$search = $_POST['search'];

					// Truy vấn cơ sở dữ liệu để tìm kiếm các bản ghi phù hợp
					$sql = "SELECT * FROM music WHERE title LIKE '%$search%' OR artist LIKE '%$search%'";
					$result = mysqli_query($conn, $sql);

					// Hiển thị danh sách các bản ghi phù hợp
					while ($row = mysqli_fetch_assoc($result)) {
						echo '<li>' . $row['title'] . ' - ' . $row['artist'] . '</li>';
					}

					// Đóng kết nối
					mysqli_close($conn);
				}
			?>
		</ul>
	</div>