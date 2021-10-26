<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    function ktsonguyento($n){
        $dem =0;
        for($i=1;$i<=$n;$i++)
        {
            if($n%$i == 0)
            {
                $dem++;
            }
        }
        if($dem==2)
            return true;
        else
            return false;
    }
    $a = random_int(-100,100);
    if($a<0)
        echo "Nhỏ hơn 0 không là số nguyên tô"."<br>";
    else
        if(ktsonguyento($a)==true){
            $fp = @fopen('Bai5.txt',"a+");
            if(!$fp)
            {
                echo "Mở file không thành";
                
            }
            else
            {
                $data = $a."\n";
                fwrite($fp, $data);
                fclose($fp);
                echo "Đã thêm vào file";
            }
        }
