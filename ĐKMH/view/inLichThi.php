<!DOCTYPE html>
<html>
<head>
	<title>in lịch thi</title>
	<link rel="stylesheet" type="text/css" href="./frontend/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./frontend/css/style.css">
</head>
<body>
	<div class="head row">
		<div class="col-lg-6 col-md-6 col-sm-6">
			<p>ĐẠI HỌC QUỐC GIA HÀ NỘI</p>
			<p class="line-2">TRƯỜNG ĐẠI HỌC CÔNG NGHỆ</p>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6">
			<p>CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM</p>
			<p class="line-2">Độc lập - Tự do - Hạnh phúc</p>
		</div>
	</div>
	<div class="main-title"><h1>lịch thi học kỳ I, năm học 2019-2020</h1></div>
	<div class="row">
		<div class="col-lg-4 col-md-4 col-sm-4">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-3">
					<p>Họ và tên:</p>
					<p>Khoa: </p>
				</div>
				<div class="col-lg-9 col-md-9 col-sm-9">
					<p><?php echo $hoTen;?></p>
					<p><?php echo $nganhhoc;?></p>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-3">
					<p>Ngày sinh:</p>
					<p>Khóa: </p>
				</div>
				<div class="col-lg-9 col-md-9 col-sm-9">
					<p><?php echo $ngaysinh;?></p>
					<p><?php echo $khoa;?></p>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-3">
					<p>MSSV:</p>
					<p>Lớp: </p>
				</div>
				<div class="col-lg-9 col-md-9 col-sm-9">
					<p><?php echo $masv;?></p>
					<p><?php echo $lop;?></p>
				</div>
			</div>
		</div>
	</div>
	<form action="" method = 'POST'>
	<table class="table table-bordered">
		<thead>
			<tr>
				
				<th scope="col">Mã học phần</th>
				<th scope="col">Môn thi</th>
				<th scope="col">Ngày thi</th>
				<th scope="col">Ca thi(giờ thi)</th>
				<th scope="col">Hình thức thi</th>
				<th scope="col">Phòng thi</th>
				<th scope="col">Số báo danh</th>
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
				<td>20</td>
			</tr>
							<?php
                                endwhile;
                            ?>
			
		</tbody>
	</table>
	</form>
	<a href="#" class="downl smooth" download>Tải xuống</a>

	<script src="./frontend/js/jquery.min.js" defer></script>
	<script src="./frontend/js/bootstrap.min.js" defer></script>
	<script src="./frontend/js/script.js" defer></script>
</body>
</html>