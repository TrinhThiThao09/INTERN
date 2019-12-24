
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="./frontend/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./frontend/css/style.css">
</head>
<body>
	<header>
		<a href="#" title>
			<img src="./frontend/images/logo.png">
		</a>
		<h1>cổng thông tin đào tạo đại học</h1>
	</header>
	<div class="content">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
				<div class="status">
					<h3>Đang đăng kí lịch thi</h3>
				</div>
				<h3>Thông báo</h3>
				<ul>
					<li><a class="smooth" href="#" title>(Video) Hướng dẫn sử dụng cổng thông tin đào tạo - Đăng ký lịch thi</a></li>
					<li><a class="smooth" href="#" title>Kĩ năng học tập hiệu quả ở bậc Đại Học</a></li>
					<li><a class="smooth" href="#" title>(Video) Hướng dẫn đăng ký học bổng</a></li>
					<li><a class="smooth" href="#" title>(Video) Bài giảng môn phát triển ứng dụng web</a><strong>|</strong><a href="#" title>Câu hỏi ôn tập</a></li>
					<li><a class="smooth" href="#" title>(Ảnh) Lễ trao bằng tốt nghiệp năm 2019</a></li>
				</ul>
				<h3>Cổng thông tin dành cho sinh viên đã tốt nghiệp</h3>
				<ul>
					<li>
						<a class="smooth" href="http://svtotnghiep.daotao.vnu.edu.vn" target="_blank">http://svtotnghiep.daotao.vnu.edu.vn</a>
					</li>
				</ul>
				<h3>Hướng dẫn sử dụng</h3>
				<ul>
					<li><a href="#" title>Hướng dẫn lấy lại mật khẩu</a></li>
					<li><a href="#" title>Đường dẫn đăng kí môn học của trường khác & các môn Mác - Lê nin</a></li>
					<li><a href="#" title>Hướng dẫn đăng kí môn học của trường mình</a></li>
					<li><a href="#" title>Hướng dẫn khai báo thông tin sinh viên</a></li>
				</ul>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<form action="" method = 'POST'>
					<div class="box-header">
						<h3>Đăng nhập hệ thống</h3>
					</div>
					<div class="box-content">
						<div class="ct">
							<h5>Tên truy cập</h5>
							<input type="text" name="maSv" required>
						</div>
						<div class="ct">
							<h5>Mật khẩu</h5>
							<input type="password" name="passWord" required>
						</div>
						<div class="submit row">
							<div class="col-lg-4 col-md-4">
								<a class="forget-pass smooth" href="#" title>Quên mật khẩu?</a>
							</div>
							<div class="col-lg-4 col-md-4">
								<input type="submit" name="admin" class="login" value="ADMIN">
							</div>
							<div class="col-lg-4 col-md-4">
								<input type="submit" name="dangnhap" class="login" value="SINH VIÊN">
							</div>
						</div>
					</div>
				</form>
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