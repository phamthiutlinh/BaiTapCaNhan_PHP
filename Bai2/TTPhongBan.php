<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Thong tin nhân viên</title>
</head>
<body>
<?php 
// Ket noi CSDL
require("../Bai1.php");
// Chuan bi cau truy van & Thuc thi cau truy van
$strSQL = "SELECT * FROM phongban";
$result = mysqli_query($dbc,$strSQL);
// Xu ly du lieu tra ve
if(mysqli_num_rows($result) == 0)
{
	echo "Chưa có dữ liệu";
}
else
{	echo "<h1 style='color: #FF0000;' align='center'>THÔNG TIN PHÒNG BAN</h1>
		  <table align='center' width='800' border='1' cellpadding='2' cellspacing='2' 
				style='border-collapse: collapse;'>
		  	<tr style='background-color: #F4A460;' align='center'>
				<td><b>Mã Phòng Ban</b></td>
				<td><b>Tên Phòng Ban</b></td>
			
		  	</tr>";
	$stt=1;
	while ($row = mysqli_fetch_array($result))
	{
		if($stt%2!=0)
		{
            echo "<tr>";
			echo "<td>$row[0]</td>";
			echo "<td>$row[1]</td>";
	
			echo "</tr>";
		}
		else
		{
			echo "<tr style='background-color: #00EE00;'>";
			echo "<td>$row[0]</td>";
			echo "<td>$row[1]</td>";
			
            
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