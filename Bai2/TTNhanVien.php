<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Thông tin nhân viên</title>
</head>
<body>
<?php 
// Ket noi CSDL
require("../Bai1.php");
// Chuan bi cau truy van & Thuc thi cau truy van
$strSQL = "Select MANV,HO,TEN,NGAYSINH,GIOITINH,DIACHI, TENLOAINV , TENPHONG  from nhanvien,phongban,loainv WHERE  nhanvien.MALOAINV=loainv.MALOAINV AND nhanvien.MAPHONG=phongban.MAPHONG";
$result = mysqli_query($dbc,$strSQL);
// Xu ly du lieu tra ve
if(mysqli_num_rows($result) == 0)
{
	echo "Chưa có dữ liệu";
}
else
{	echo "<h1 style='color: #FF0000	;' align='center'>THÔNG TIN NHÂN VIÊN</h1>
	<a href='../Bai3/themnv.php'>Thêm nhân viên</a> </br>
	<a href='../Bai3/suanhanvien.php'>Sửa nhân viên</a> </br>
	<a href='../Bai3/xoanhanvien.php'>Xóa nhân viên</a> </br>
	<a href='../Bai3/timNhanVien.php'>Tìm kiếm nhân viên</a> </br>
	
		  <table align='center'  width='800' border='1' cellpadding='2' cellspacing='2' 
				style='border-collapse: collapse;'>
		  	<tr style='background-color: #F4A460;' align='center'>
				<td><b>Mã nhân viên</b></td>
				<td><b>Họ nhân viên</b></td>
				<td><b>Tên nhân viên</b></td>
				<td><b>Ngày sinh</b></td>
				<td><b>Giới tính</b></td>
                <td><b>Địa chỉ</b></td>
            
                <td><b>Loại nhân viên</b></td>
                <td><b>Phòng ban</b></td>
		  	</tr>";
	$stt=1;
	while ($row = mysqli_fetch_array($result))
	{
		if($stt%2!=0)
		{
            echo "<tr>";
			echo "<td>$row[0]</td>";
			echo "<td>$row[1]</td>";
			echo "<td>$row[2]</td>";
			echo "<td>$row[3]</td>";
			echo "<td>$row[4]</td>";
            echo "<td>$row[5]</td>";
			echo "<td>$row[6]</td>";
			echo "<td>$row[7]</td>";
	
			echo "</tr>";
		}
		else
		{
			echo "<tr style='background-color: #00EE00;'>";
			echo "<td>$row[0]</td>";
			echo "<td>$row[1]</td>";
			echo "<td>$row[2]</td>";
			echo "<td>$row[3]</td>";
			echo "<td>$row[4]</td>";
            echo "<td>$row[5]</td>";
			echo "<td>$row[6]</td>";
			echo "<td>$row[7]</td>";
	
            
			echo "</tr>";
		}
			$stt+=1;
	}
	echo '</table>';
}
//Dong ket noi
mysqli_close($dbc);
?>
</body>
</html>