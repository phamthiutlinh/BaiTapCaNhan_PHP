<!DOCTYPE html>

<html>

<head>

    <title>Nhập và tính toán trên dãy số</title>

    <meta charset="utf-8">

    <style>

    *{

    font-family: Tahoma;

    }
        table{
          
          width: 700px;
          margin: auto;
          background:pink;
          border: 2px solid black;
          border-radius: 20px;
      }

    </style>

</head>


<body>
<?php

    $ket_qua = 0;

    $mang_so = 0;

    if(isset($_POST['btn_goi'])){

        $mang_so = explode(",", $_POST['nhap_mang']);

        $n = count($mang_so);

        for($i = 0; $i < $n; $i++){

            $ket_qua += $mang_so[$i];

        }

    }

?>
    <form method="POST" action="Bai22.php">
        <table>
            <thead>
                <tr>
                    <th colspan="3" style="font-weight: bold; color: red; ">NHẬP VÀ TÍNH TRÊN DÃY SỐ</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Nhập dãy số:</th>

                    <th><input type="text" name="nhap_mang" value="<?php if (isset($_POST['submit']))  echo $_POST['nhap_mang'] ?>"></th>
                    <th> <p style='color:red;'>(*)</p></th>
                </tr>
                <tr>
                    <th></th>

                    <th><input type="submit" name="btn_goi" value="Tổng dãy số" ></th>

                </tr>

                <tr>

                    <th>Tổng dãy số:</th>

                    <th><input type="text" name="ket_qua" disabled="disabled" value="<?php echo $ket_qua ?>" ></th>

                </tr>
                <tr>
                <th><p style="color:red">(*) </p></th>
                <th><p style="color:blue">  Các số được nhập cách nhau bằng dấu ","</p></th>
            </tr>

            </tbody>

        </table>

    </form>

</body>

</html>