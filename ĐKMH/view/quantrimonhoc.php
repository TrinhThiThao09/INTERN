<!DOCTYPE html>
<html>
<head>
	<title>danh sách môn thi</title>
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
		<h3 style="text-align: center;text-transform: uppercase;margin-top: 20px;margin-bottom: 20px;color: #007f48;font-weight: bold;">danh sách môn thi</h3>
		<form action="" method='POST'>
					<table class="table table-bordered">
						<thead>
						    <tr>
						      	
						      	<th scope="col">Mã môn</th>
						      	<th scope="col">Tên môn</th>
						      	<th scope="col">Ngày thi</th>
						      	<th scope="col">Ca thi (giờ thi)</th>
						      	<th scope="col">Hình thức thi</th>
						      	<th scope="col">Phòng thi</th>
						      	<th scope="col">Tổng sinh viên</th>
						      	<th scope="col">Đã đăng kí</th>
						    </tr>
						</thead>
						<tbody>
							<?php
                                while($array = $query->fetch_array()):
                                
                            ?>
						    <tr>
						      	
						      	<td><?php echo $array["maMon"];?></td>
						      	<td><?php echo $array["tenMon"];?></td>
						      	<td><?php echo $array["ngayThi"];?></td>
						      	<td><?php echo $array["caThi"];?></td>
						      	<td><?php echo $array["hinhThucThi"];?></td>
						      	<td><?php echo $array["phongThi"];?></td>
						      	<td><?php echo $array["tongSinhVien"];?></td>
						      	<td><?php echo $array["daDangKi"];?></td>
						      
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