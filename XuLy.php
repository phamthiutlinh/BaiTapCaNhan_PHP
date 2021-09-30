<!DOCTYPE HTML 
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>From thông tin</title>
    <style type="text/css">
        body {  
            background-color: #FFFFFF;
        }
        table{
            background: black;
            border: 1pt;
            display: inline-block;
        }
        
    </style>
</head>
<body>
<b>Bạn đã đăng nhập thành công, dưới đây là những thông tin bạn đã nhập:</b>
<br>
<?php

    $hoten=$_POST['hoten'];
    $diachi=$_POST['diachi'];
    $SDT=$_POST['SDT'];
    $gioitinh=$_POST['gioitinh'];
    $quoctich=$_POST['quoctich'];
    $php=$_POST['php'] ??"";
    $csharp=$_POST['csharp'] ??"";
    $xml=$_POST['xml'] ?? "";
    $mysql=$_POST['mysql']?? "";
    $python=$_POST['python']?? "";
    $ghichu=$_POST['ghichu'];
    
?>    
   <form align='left' action="XuLy.php" method="post">
       <table>
        <tr> Họ tên:
        <?php echo $hoten ?><br> </tr>
        <tr> Địa chỉ:
        <?php echo $diachi ?><br> </tr>   
        <tr> Số điện thoại:
        <?php echo $SDT ?><br> </tr>
        <tr> Giới tính:
        <?php echo $gioitinh ?><br> </tr>
        <tr> Quốc tịch:
        <?php echo $quoctich ?><br> </tr>
        <tr> Các môn đã học:
        <?php echo $php . " " . $mysql . " " . $python . " " . $csharp . " " . $xml; ?><br> </td>
        <tr> Ghi chú:
        <?php echo $ghichu ?><br> </tr>
        <tr><a href="javascript:window.history.back(-1);"><font color="blue"><i><u>Quay Lại trang trước</i></u><font></a></tr>
    </table>
    </form>
</body>
