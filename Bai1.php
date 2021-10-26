<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="qlnv.css">
<title>Thông tin loai nhân viên</title>
</head>
<body id="than">
<?php # Script - mysqli_connect.php
DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', '');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'quanlynhanvien');

// Make the connection:
$dbc = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) 
		OR die ('Could not connect to MySQL: ' . mysqli_connect_error() );

// Set the encoding...
mysqli_set_charset($dbc, 'utf8');?>



 <div id="menu">
<ul>
	<li>
		<a href="../Bai2/TTLoaiNV.php">Thông Tin Loại Nhân Viên</a>
	</li>
	<li>
		<a href="../Bai2/TTNhanVien.php">Thông Tin Nhân Viên</a>
	</li>
	<li>
	<a href="../Bai2/TTPhongBan.php">Thông Tin Phòng Ban</a>
	</li>
</ul>
</div>

</body>
</html>