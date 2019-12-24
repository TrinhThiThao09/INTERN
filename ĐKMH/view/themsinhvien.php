<!DOCTYPE html>
<html>
<head>
	<title>thêm sinh viên</title>
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
		<form action="" method='POST'>
			<div class="text-header">
				<h3>Thêm thông tin sinh viên</h3>
			</div>
			<div class="info">
					<h5>MSSV:</h5>
					<input type="text" name="mssv">

					<h5>Password:</h5>
					<input type="text" name="password">
				
					<h5>Họ tên:</h5>
					<input type="text" name="hoten">
			
				
					<h5>Ngày sinh:</h5>
					<input type="text" name="ngaysinh">
		
			
					<h5>Ngành học:</h5>
					<input type="text" name="nganhhoc">
				
					<h5>Khoa:</h5>
					<input type="text" name="khoa">
				
					<h5>Lớp:</h5>
					<input type="text" name="lop">
			
			</div>
		<form>
			<div class="submit">
				<a href="#" class="save smooth" name="save" >SAVE</a>
				<a href="index.php?controller=actor&action=quantrisinhvien=<?php echo $array["mssv"];?>" class="cancel smooth">CANCEL</a>
			</div>
		</form>
	</header>
	<script src="./frontend/js/jquery.min.js" defer></script>
	<script src="./frontend/js/bootstrap.min.js" defer></script>
	<script src="./frontend/js/script.js" defer></script>
</body>
</html>