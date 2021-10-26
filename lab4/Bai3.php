<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Xử lý n</title>
</head>
<body>
<?php
	if(isset($_POST['n'])) $n=$_POST['n'];
	else $n=0;
    
	$ketqua="";
	if(isset($_POST['hthi'])) 
	{	//Tạo mảng có n phần tử, các phần tử có giá trị [-100,100]
		$arr=array();
        function hienthimang($n, &$arr, &$ketqua){
		for($i=0;$i<$n;$i++)
		{
			$x=rand(-200,200);
			$arr[$i]=$x;
		}
		//In ra mảng vừa tạo
        
		$ketqua="\na) Mảng được tạo là:" .implode(" ",$arr)."&#13;&#10;";
       }
        //Sắp xếp mảng tăng dần theo giá trị.
        function sxTangDan(&$arr, &$ketqua){
			asort($arr);
			$sapxep = "\nb) Sắp xếp tăng dần : " . implode("->", $arr) . "\n";
			$ketqua .= $sapxep;
		}
		function themso($offset, $x, &$arr, &$ketqua){
			array_splice($arr, $offset, 0, $x);
			$vitri = $offset +1;
            $themso = "\nc) Mảng sau khi thêm sô $x vào vị trí $vitri:" . implode(" ", $arr) . "\n";
            $ketqua .= $themso;
		}
        function sapxep($offset, $n, $x, &$arr, &$ketqua){
            $arr1 =array();
            for($i=0;$i<$offset;$i++){
                $arr1[$i]=$arr[$i];
            }
            arsort($arr1);
            $arr2 = array();
            for($i =0;$i>$offset;$i--){
                $arr2[$i]=$arr[$i];
            }
            arsort($arr2);

            array_push($arr1, $x);
            $arr = $arr1 + $arr2;
            $sx ="\nd) Mảng sau sắp xếp:".implode("", $arr);
            $ketqua .= $sx;
        }
        if(isset($_POST['hthi'])){
            $arr = array();
            hienthimang($n, $arr, $ketqua);
            sxTangDan($arr, $ketqua);
            $offset = rand(0, $n);
            themso($offset, $x, $arr, $ketqua);
            sapxep($offset, $n, $x, $arr, $ketqua);
        }
				
	}
?>
<form action="" method="post">
	Nhập n: <input type="text" name="n" value="<?php echo $n?>"/>
	<input type="submit" name="hthi" value="Hiển thị"/>
	Kết quả: <br>
	<textarea cols="70" rows="10" name="ketqua"> <?php echo $ketqua?></textarea>
</form>
</body>
</html>
