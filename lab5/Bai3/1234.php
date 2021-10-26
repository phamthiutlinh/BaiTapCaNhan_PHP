<?php 

// ma trận 1
if(isset($_POST['m1'])){
	$m1=$_POST['m1'];
} 
else $m1=0;

if(isset($_POST['n1'])){
	$n1=$_POST['n1'];
} 
else $n1=0;

// ma trận 2
if(isset($_POST['m2'])){
	$m2=$_POST['m2'];
} 
else $m2=0;

if(isset($_POST['n2'])){
	$n2=$_POST['n2'];
} 
else $n2=0;

$ketqua = " ";


if(isset($_POST['submit']))
{
	
		// ma trận 1
		$array1 = array();
        for ($i = 0; $i < $m1; $i++) 
		{
            for ($j = 0; $j < $n1; $j++) 
			{
                $array1[$i][$j] = rand(-200, 200);
            }
        }
	
		
	
		// ma trận 2
		$array2 = array();
		for ($i = 0; $i < $m2; $i++) 
		{
            for ($j = 0; $j < $n2; $j++) 
			{
                $array2[$i][$j] = rand(-200, 200);
            }
        }
	
	
		
}

?>
<form method="POST" action="1234.php">
	<table cellspacing="0">
		<tr>
			<td>Nhập số dòng của ma trận 1:</td>
			<td>
				<input type="number" name="m1" min="0" value="<?php echo $m1;?>">
			</td>
		</tr>
		<tr>
			<td>Nhập số cột của ma trận 1:</td>
			<td>
				<input type="number" name="n1" min="0" value="<?php echo $n1;?>">
			</td>
		</tr>
		<tr>
			<td>Nhập số dòng của ma trận 2:</td>
			<td>
				<input type="number" name="m2" min="0" value="<?php echo $m2;?>">
			</td>
		</tr>
		<tr>
			<td>Nhập số cột của ma trận 2:</td>
			<td>
				<input type="number" name="n2" min="0" value="<?php echo $n2;?>">
			</td>
		</tr>
		<tr>
			<td>Kết quả</td>
			<td>
				<textarea rows="10" cols="30">
				<?php 
						echo "Ma trận 1 vừa nhập:\n";
						for ($i = 0; $i < $m1; $i++) 
						{  
							for ($j = 0; $j < $n1; $j++) 
							{
								echo $array1[$i][$j]. " ";
							}
						echo "\n"; 
						}
				?>
				
				<?php 
						echo "Ma trận 2 vừa nhập:\n";
						for ($i = 0; $i < $m2; $i++) 
						{  
							for ($j = 0; $j < $n2; $j++) 
							{
								echo $array2[$i][$j]. " ";
							}
						echo "\n"; 
						}
				?>
				
				<?php 
						echo "Cộng 2 ma trận cùng kích thước: \n";	
						// xét điều kiện cho 2 ma trận cùng kích thước
						if($m1 == $m2 && $n1 == $n2)
						{
							
							$tong=array();
							for($i = 0 ; $i < $m1 ; $i++)
							{
								for($j = 0 ; $j < $n1 ; $j++)
								{
									echo $tong[$i][$j] = $array1[$i][$j] + $array2[$i][$j]." ";
								}
								echo "\n";
							}
						}
						// nếu ko cùng thì xuất ra lỗi
						else
						{
							echo "Phải cùng dòng và cùng cột";
						}
				?>
				
				<?php 
					echo "Trừ 2 ma trận cùng kích thước: \n";
					// xét điều kiện cho 2 ma trận cùng kích thước
					if($m1==$m2 && $n1==$n2)
					{
						
						$tru=array();
						for($i = 0 ; $i < $m1 ; $i++)
						{
							for($j = 0 ; $j < $n1 ; $j++)
							{
								echo $tru[$i][$j] = $array1[$i][$j] - $array2[$i][$j]." ";
							}
							echo "\n";
						}
					}
					//nếu ko cùng thì xuất ra lỗi
					else
					{
						echo "Phải cùng dòng và cùng cột";
					}
				?>
				</textarea>
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="submit">
			</td>
		</tr>
</form>
