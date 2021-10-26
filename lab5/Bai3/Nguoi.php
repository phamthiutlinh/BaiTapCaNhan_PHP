<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Bai tap 1</title>

        <style type="text/css">

			* {
			    font-family: 'Times New Roman', Times, serif;
			}

			body {
			    width: 100vw; display: flex; justify-content: center; align-items: center;
			    flex-direction: column;
			    font-size: 20px;
			    overflow-x: hidden;
			}

			input {
			    height: 40px;
			    font-size: 2rem;
			}

			input[type="number"] {
			    width: 100%;
			}

			input:disabled {
			    background-color: aquamarine;
			}

			table {
			    background-color: var(--color-table);
			}

			table > tbody > tr > td {
			    text-align: center;
			}
        </style>
    </head>

    <body>
        <?php

				$mang = [];

	        function tim_kiem($arr,$so){

			    for($i=0;$i<count($arr);$i++){

			        if($arr[$i]==$so){

			            return $i;

			        }

			    }

			    return -1;

			}

            if(isset($_POST['nnum']))
                $nnum = trim($_POST['nnum']);
            else $nnum = "";
        ?>
        <form id="bai_tap_1" style="max-width: 80%;" align='center' action="" method="POST">
            <table border="0" style="font-size: 20px; border: 3px solid black; background-color: AliceBlue">
                <tr>
                    <h2><font color="red">BÀI TẬP 1</font></h2>
                </tr>
                <tr>
                    <td>Nhập n: </td>
                    <td>
                        <input type="number" name="nnum" value="<?php if(isset($_POST['nnum'])) echo $_POST['nnum'];?>"/>
                        <input type="submit" value="Tính"/>
                    </td>
                </tr>

                <?php
                    if (isset($nnum)) {
                        $sl_chan = 0;
                        $sl_nho_100 = 0;
                        $sl_so_am = 0;
                        $tong_am = 0;
                        $vitri_0 = [];
                        for ($i = 0; $i < $nnum; $i ++) {
                            $num = rand(-100, 200);
                            $mang[] = $num;
                            if (($num % 2)==0) $sl_chan++;
                            if ($num < 100) $sl_nho_100++;
                            if ($num < 0) {
                                $sl_so_am++;
                                $tong_am = $tong_am + $num;
                            }
                            if ($num==0) $vitri_0[] = $i;
                        }
                    }
                ?>
                <tr>
                    <td>a/ Mảng </td>
                    <td>
                        <?php
                            foreach ($mang as $key => $value) {
                             	echo "$value ";
                             }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>b/ Số lượng phần tử chẵn: </td>
                    <td>
                        <?php
                            echo "$sl_chan";
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>c/ Số lượng phần tử có giá trị nhỏ hơn 100: </td>
                    <td>
                        <?php
                            echo "$sl_nho_100";
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>d/ Tổng các phần tử có giá trị âm: </td>
                    <td>
                        <?php
                            echo "$tong_am";
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>e/ Vị trí các phần tử có giá trị bằng 0: </td>
                    <td>
                        <?php
                        	if (empty($vitri_0)) {
	                            echo "Mảng không có phần tử có giá trị 0!!!";
                        	}
                        	else
                        	{
                        		echo "Vị trí giá trị 0 trong mảng: "; 
                        		foreach ($vitri_0 as $key => $value) {
	                             	echo "$value ";
	                             }
	                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>f/ Sắp xếp mảng theo thứ tự tăng dần: </td>
                    <td>
                        <?php
                            sort($mang);
                            foreach ($mang as $key => $value) {
                             	echo "$value ";
                             }
                        ?>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>