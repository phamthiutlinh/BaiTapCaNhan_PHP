
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TẠO TRANG WEB THỰC HIỆN PHÉP TÍNH 2 SÔ</title>
    <style type="text/css">
        body {  
    background-color: Black;
        }
        table{
            background: #FFFFFF;
            border: 0 solid yellow;
            margin-top: 200px;
            display: inline-block;
        }
        td {
            color: red;
        }
        h3{
           font-family: verdana;
            text-align: center;
/* text-anchor: middle; */
            color: blue;
            font-size: medium;
        }
       
</style>
</head>
<body>
<?php
    
    $ketqua = 0;
    $sothunhat = $_POST['sothunhat'];
    $sothuhai = $_POST['sothuhai']; 
     
    if (is_numeric($sothunhat) && is_numeric($sothuhai)){
        $sothunhat;
        $sothuhai;}
    else{
        echo "<font color='red'>Vui lòng nhập vào đúng thông tin</font>"; 
    }        

    if(isset($_POST['pheptinh'])&&$_POST['pheptinh']=='Cộng') {
        $ketqua = $sothunhat + $sothuhai;
       $pheptinh = "Cộng";
    }      
    if(isset($_POST['pheptinh'])&&$_POST['pheptinh']=='Trừ') {
        $ketqua = $sothunhat - $sothuhai;   
       $pheptinh = "Trừ";
    }
       
    if(isset($_POST['pheptinh'])&&$_POST['pheptinh']=='Nhân') {
        $ketqua = $sothunhat * $sothuhai;
       $pheptinh = "Nhân";
    }
       
    if(isset($_POST['pheptinh'])&&$_POST['pheptinh']=='Chia'){
        $ketqua = $sothunhat / $sothuhai;
       $pheptinh = "Chia";
    }
?>

   ?>
   <form align='center' action="KQTinh.php" method="post">
    <table>
        <tr>
            <th colspan="5"  > <h3>PHÉP TÍNH TRÊN 2 SỐ</h3></th>
        </tr>
        <tr>
            <td>Chọn phép tính:</td>
            <td align="left"><?php echo $pheptinh ?></td>
        </tr>
     <tr><td><font color="blue">Số 1:<font></td>
     <td><input type="text" name="sothunhat" value=" <?php echo $sothunhat; ?>"/></td>
    </tr>
    <tr><td><font color="blue">Số 2:<font></td>
    <td><input type="text" name="sothuhai"  value=" <?php echo $sothuhai; ?>"/></td>
    </tr>
    <tr><td><font color="blue">Kết quả:<font></td>
    <td><input type="text" name="ketqua" value="<?php  echo $ketqua;?> "/></td>
    </tr>
    <tr>
    <td colspan="2" align="center"><a href="javascript:window.history.back(-1);"><font color="purple"><i><u>Quay Lại trang trước</i></u><font></a></td>
    </tr>
    </table>
</body>
</html>
