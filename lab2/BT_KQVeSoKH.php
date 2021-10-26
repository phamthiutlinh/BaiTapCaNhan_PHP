<!DOCTYPE HTML>
<html>
<head>
        <meta http-equiv="content-type" content="text/html" charset="utf-8/"/>
        <title>SỔ SỐ KIẾN THIẾT</title>
        <style type=”text/css”>
            .style1{
            color: #FF0000;
            font-weight: bold;
            }
            body
                {
                margin: 0 auto;
            }
            
</style>
</head>
<body>
<?php
    echo "<h2>SỔ SỐ KIẾN THIẾT</h2>" . "<br>";

    $haiSo = rand (0, 99);
    $baSo = rand(0, 999);
    $bonSo = rand(0,9999);
    $namSo = rand(0,99999);
    $sauSo = rand(0,999999);

    echo " Giải 8: ";
    if ($haiSo < 10){
        echo  "0" . $haiSo . "<br>";
    } else {
        echo $haiSo ."<br>";
    }

    echo "Giải 7:";
    if($baSo < 100){
        echo "0" . $baSo ."<br>";
    }else{
        echo $baSo ."<br>";
    }

    echo "Giải 6:";
    if($baSo < 10000){
        echo "0" . $baSo. "<br>";
    }else{
        echo $baSo ."<br>";
    }

    echo "Giải 5:";
    if($baSo < 10000){
        echo "0" . $baSo. "<br>";
    }else{
        echo $baSo ."<br>";
    }

    echo "Giải 4:";
    if($bonSo < 100000){
        echo "0" . $bonSo . "<br>";
    }else{
        echo $bonSo . "<br>";        
    }

    echo "Giải 3:";
    if($bonSo < 100000){
        echo "0" . $bonSo . "<br>";
    }else{
        echo $bonSo . "<br>";
    }

    echo "Giải 2:";
    if($bonSo < 100000){
        echo "0" . $bonSo . "<br>";
    }else{
        echo $bonSo ."<br>";
    } 

    echo "Giải 1:";
    if($bonSo < 100000){
        echo "0" . $bonSo . "<br>";
    }else{
        echo $bonSo ."<br>";
    }

    echo "Giải ĐB:";
    if($bonSo < 1000000){
        echo "0" . $namSo ."<br>";
    }else{
        echo $namSo. "<br>";
    }
?>
</body>
<html>

