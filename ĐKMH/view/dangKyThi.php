<!DOCTYPE html>
<html>
<head>
	<title>Đăng kí thi</title>
	<link rel="stylesheet" type="text/css" href="./frontend/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./frontend/css/style.css">
</head>
<body>
	<header>
		<a href="#" title>
			<img src="./frontend/images/logo.png">
		</a>
		<div class="header-title">
			<h3>cổng thông tin đào tạo đại học</h3>
			<h4>Dành cho sinh viên</h4>
		</div>
		<div class="welcome">
			Xin chào bạn: <strong><?php echo $hoTen;?> </strong>[<?php echo $masv;?>]
		</div>
		<div class="bannerMenu">
			<ul>
				<li>
					Chọn học kì: 
					<select>
						<option selected="">Học kì 1 năm 2019 - 2020</option>
						<option>Học kì 2 năm 2018 - 2019</option>
						<option>Học kì 1 năm 2018 - 2019</option>
						<option>Học kì 2 năm 2017 - 2018</option>
						<option>Học kì 1 năm 2017 - 2018</option>
					</select>
				</li>
				<li class="see-the-notice">
					<a class="smooth" href="#" title>Xem thông báo</a>
				</li>
				<li class="change-pass">
					<a class="smooth" href="#" title>Đổi mật khẩu</a>
				</li>
				<li class="exit">
					<a class="smooth" href="index.php?controller=actor&action=login" title>Thoát</a>
				</li>
			</ul>
		</div>
	</header>
	<div class="main">
		<div class="left-list">
			<table>
				<tbody>

					<tr>
						<td><a href="http://localhost/btl-ver2/home.php">» Hướng dẫn</a></td>
					</tr>
					<tr>
						<td>» Cập nhật hồ sơ sinh viên</td>
					</tr>
					<tr>
						<td>» Kết quả đăng kí học</td>
					</tr>
					<tr>
						<td>» Đăng kí môn học</td>
					</tr>
					<tr>
						<td>» Kết quả học tập</td>
					</tr>
					<tr>
						<td class="first-news">» Lịch thi</td>
					</tr>
					<tr>
						<td>» Đề cương môn học</td>
					</tr>
					<tr>
						<td>» Danh sách biểu mẫu</td>
					</tr>
					<tr>
						<td>» Gửi yêu cầu trợ giúp</td>
					</tr>
					<tr>
						<td>» Tài khoản truy cập email</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="right-content">
			<div class="guide">
				<h5>Lịch thi</h5>
			</div>
			<div class="notification">
				<h3>XEM ĐĂNG KÝ THI HỌC KỲ I, NĂM HỌC 2019-2020</h3>
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4">
						Chọn: 
						<select>
							<option>Xem lịch thi</option>
							<option selected="">Đăng kí lịch thi</option>
						</select>
						<p>Mã sinh viên: <?php echo $masv;?></p>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4">
						Học kì: 
						<select>
							<option>--Học kỳ--</option>
							<option selected="">Học kì 1 năm 2019 - 2020</option>
							<option>Học kì 2 năm 2018 - 2019</option>
							<option>Học kì 1 năm 2018 - 2019</option>
							<option>Học kì 2 năm 2017 - 2018</option>
							<option>Học kì 1 năm 2017 - 2018</option>
						</select>
						<p>Họ và tên: <?php echo $hoTen;?></p>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4">
						<div class="sum-exam">Tổng số kì thi đăng kí: <?php echo $count_2 ;?></div>
					</div>
				</div>
				<div class="list-exam">
				<form action="" method='POST'>
					<table class="table table-bordered">
						<thead>
						    <tr>
						      	
						      	<th scope="col">Mã học phần</th>
						      	<th scope="col">Môn thi</th>
						      	<th scope="col">Ngày thi</th>
						      	<th scope="col">Ca thi(giờ thi)</th>
						      	<th scope="col">Hình thức thi</th>
						      	<th scope="col">Phòng thi</th>
						      	<th scope="col">Tổng sinh viên</th>
						      	<th scope="col">Đã đăng kí</th>
						      	<th scope="col">Chọn</th>
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
						      	<td>
						      		<a href="index.php?controller=actor&action=dangKyThi&add=<?php echo $array["maMon"];?>">Thêm</a>

						      	</td>
						    </tr>
							<?php
                                endwhile;
                            ?>
						   
						</tbody>
					</table>
					</form>
					<a class="print smooth" href="index.php?controller=actor&action=lichthi" title>Lịch Thi</a>
					
				</div>
			</div>
		</div>
	</div>
	<footer>
		<div class="row">
			<div class="col-lg-2 online">
				Đang online
				<br>
				<strong>1</strong>
			</div>
			<div class="col-lg-6">
				<span>©</span>
				<span>2008-2019</span>
				<a href="#" title>Trung tâm ứng dụng CNTT - VNU</a>
				<p>This page was rendered at 11/8/2019 8:59:46 AM by DANGKYTHI-1</p>
			</div>
			<div class="col-lg-4 info">
				<a href="#" title>Trang chủ VNU</a>
				<a href="#" title>Trang chủ CAIT</a>
			</div>
		</div>
	</footer>
	<script src="./frontend/js/jquery.min.js" defer></script>
	<script src="./frontend/js/bootstrap.min.js" defer></script>
	<script src="./frontend/js/script.js" defer></script>
</body>
</html>