<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TẠO TRANG WEB THỰC HIỆN PHÉP TÍNH 2 SÔ</title>
    <style type="text/css">
        body {  
    background-color: black;
        }
        table{
            background: #FFFFFF;
            border: 0 solid yellow;
            margin-top: 200px;
            display: inline-block;
        }
        td {
            color: blue;
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
    if(isset($_POST['sothunhat']))  
    $sothunhat=trim($_POST['sothunhat']); 
    else $sothunhat="";
    if(isset($_POST['sothuhai'])) 
    $sothuhai=trim($_POST['sothuhai']); 
    else $sothuhai="";
    if(isset($_POST['tinh'])){
        if (is_numeric($sothunhat) && is_numeric($sothuhai)){
            $sothunhat;
            $sothuhai;
        }
        else{
            echo "<font color='red'>Vui lòng nhập vào đúng thông tin</font>"; 
        }        
    }
   ?>

   <form align='center' action="KQTinh.php" method="post">
    <table>
        <tr>
            <th colspan="5"  > <h3>PHÉP TÍNH TRÊN 2 SỐ<h3></th>
        </tr>
        <tr>
            <td><font color="red">Chọn phép tính:</font></td>

            <td><font color="red">
                <input type="radio" name="pheptinh" value="Cộng" checked>Cộng
                <input type="radio" name="pheptinh" value="Trừ">Trừ
                <input type="radio" name="pheptinh" value="Nhân">Nhân
                <input type="radio" name="pheptinh" value="Chia">Chia
                </font>
            </td> 
            </td>
        </tr>
     <tr><td>Số thứ nhất:</td>
     <td><input type="text" name="sothunhat" value="<?php  echo $sothunhat;?>"/></td>
    </tr>
    <tr><td>Số thứ hai:</td>
    <td><input type="text" name="sothuhai"  value="<?php  echo $sothuhai;?> "/></td>
    </tr>
    <tr>
    <td colspan="2" align="center"><input type="submit" value="Tính" name="tinh" /></td>
    </tr>
    </table>
</body>
</html>
