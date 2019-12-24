<!DOCTYPE html>
<html>
<head>
	<title>danh sách sinh viên</title>
	<link rel="stylesheet" type="text/css" href="./frontend/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./frontend/css/style.css">
</head>
<body>
	<header>
		<a href="#" title>
			<img src="./frontend/images/logo.png">
		</a>
		<h1>quản trị viên</h1>

		<div style="clear: both;"></div>
		<h3 style="text-align: center;text-transform: uppercase;margin-top: 20px;margin-bottom: 20px;color: #007f48;font-weight: bold;">danh sách sinh viên</h3>
		<a href="index.php?controller=actor&action=themsinhvien" style="padding: 8px 10px;margin-bottom: 18px;border: none;background: #007f48;color: #fff;border-radius: 8px;">Thêm sinh viên</a>
		<form action="" method='POST'>
					<table class="table table-bordered">
						<thead>
						    <tr>
						      	
						      	<th scope="col">MSSV</th>
						      	<th scope="col">Họ tên</th>
						      	<th scope="col">Ngày sinh</th>
						      	<th scope="col">Ngành học</th>
						      	<th scope="col">Khóa</th>
						      	<th scope="col">Lớp</th>
						    </tr>
						</thead>
						<tbody>
							<?php
                                while($array = $query->fetch_array()):
                                
                            ?>
						    <tr>
						      	
						      	<td><?php echo $array["maSv"];?></td>
						      	<td><?php echo $array["hoTen"];?></td>
						      	<td><?php echo $array["ngaySinh"];?></td>
						      	<td><?php echo $array["nganhHoc"];?></td>
						      	<td><?php echo $array["khoa"];?></td>
						      	<td><?php echo $array["lop"];?></td>
						      
						    </tr>
							<?php
                                endwhile;
                            ?>
						   
						</tbody>
					</table>
					</form>
	</header>
	<script src="./frontend/js/jquery.min.js" defer></script>
	<script src="./frontend/js/bootstrap.min.js" defer></script>
	<script src="./frontend/js/script.js" defer></script>
</body>
</html>