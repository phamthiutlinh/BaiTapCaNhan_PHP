<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" href="Bai4.css">
	<title>Bai kiểm tra giữa kỳ</title>
    <style>
        
@import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

* {
	box-sizing: border-box; 
}

body {
	background: #f6f5f7;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	font-family: 'Montserrat', sans-serif;
	height: 100vh;
	margin: -50px 0 50px;
}

h1 {
	font-weight: bold;
	margin: 0;
}

h2 {
	text-align: center;
}
h3{
	color: #125f5f;
}

p {
	font-size: 14px;
	font-weight: 100;
	line-height: 20px;
	letter-spacing: 0.5px;
	margin: 20px 0 30px;
}

span {
	font-size: 12px;
}

#aa{
	background-color: #e9b0a6;
}


button {
	border-radius: 20px;
	border: 1px solid #FF4B2B;
	background-color: #FF4B2B;
	color: #FFFFFF;
	font-size: 12px;
	font-weight: bold;
	padding: 12px 45px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
}

button:active {
	transform: scale(0.95);
}

button:focus {
	outline: none;
}

button.ghost {
	background-color: transparent;
	border-color: #FFFFFF;
}

form {
	background-color: #FFFFFF;
	display: flex;
	align-items: right;
	justify-content: center;
	flex-direction: column;
	padding: 0 50px;
	height: 100%;
    width: 500px;
    margin-left: 120px;
	text-align: center;
}

input {
	background-color: #eee;
	border: none;
	padding: 12px 15px;
	margin: 8px 0;
	width: 100%;
}

.container {
	background-color: #fff;
	border-radius: 10px;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
			0 10px 10px rgba(0,0,0,0.22);
	position: relative;
	overflow: hidden;
	width: 768px;
	max-width: 100%;
	min-height: 480px;
}

.form-container {
	position: absolute;
	top: 0;
	height: 100%;
	transition: all 0.6s ease-in-out;
}

.sign-in-container {
	left: 0;
	width: 50%;
	z-index: 2;
}


    </style>
</head>
<body>
    <?php 
            //tạo ma trận m*n
            if(isset( $_POST['tinh'])){
                    $son = $_POST['n'];
                    $som = $_POST['m'];
                    $ketqua = $_POST['ketqua1'];
                    $ketqua ="";
                    $a= array();
                    for($i=0; $i< $son; $i ++){
                        for($j=0;$j<$som;$j++){
                            $tron = rand(0,100);
                            $a[$i][$j]= $tron;
                        }
                    }
                    for($i=0;$i<$son;$i++)
                    {   $ketqua.="\n";
                        foreach($a[$i] as $val)
                        {
                            $ketqua.=" $val ";
                        }
                       
                    }
                    //tính tổng hiệu của ma trận
                    //echo "sum = " . array_sum($a);
                     $sum='0';
                    for($i=0; $i< $son; $i ++){
                        for($j=0;$j<$som;$j++){
                            $sum += $a[$i][$j];
                        }
                    }
                    // echo "Tổng của ma trận là:" . $sum;
                    // echo "\nHiệu của ma trận là:" .-$sum;
                }
                
                ?>
 <h2>Bài Kiểm Tra</h2>
        <div class="container" >
          
            <div class="form-container sign-in-container">
                <form action="Linh.php" method="POST" name="form">
                    <h1>Nhập Số </h1>
                    <table>
                        <tr>
                            <td>
                                <h5>Nhập n</h5>
                            </td>
                            <td>
                            <input type="nummber" name="n"  value=""/>
                            </td>
                        </tr>
                        <tr>
                        <td>
                                <h5>Nhập m</h5>
                            </td>
                            <td>
                            <input type="nummber" name="m"  value=""/>
                            </td>
                        </tr>
                    </table>
	                <button type="submit" name="tinh">Xử lý</button>
                    <textarea name="ketqua1" id="" cols="30" rows="10"><?php echo "a) In ra ma trận m*n" .$ketqua ?>
                                                                        <?php echo "\nb) Tổng của ma trận là:" . $sum;
                                                                              echo "\nHiệu của ma trận là:" .-$sum;
                                                                              echo "\nc) Hiện lại câu a) ".$ketqua;
                                                                              echo "\n Hiện lại câu b)" .$sum .-$sum?>
                  </textarea>
                </form>       
            </div>  
        </div>
    </body>
</html>