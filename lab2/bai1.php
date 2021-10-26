<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    $a = random_int(10,1000);
   
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

    function songuyento($n){
        for($i = 0;$i<$n;$i++)
        {
            if(ktsonguyento($i)==true)
            {
                echo $i."\t";
            }
        }
    }
    
    function tachso($n){
        $mang;
        $du;
        $dem = 0;
        
        while($n>0)
        {
            $du=(int)$n%10;
            $n=(int)$n/10;
            
            if($du!=0)
                $mang[$dem] = $du;
            else
                if($n!=0)
                    $mang[$dem] = $du;
            $dem++;
        }
        
        $dem--;
        echo "Số có "."$dem"." chữ số là: ";
        foreach (array_reverse($mang) as $value) {
            echo $value."\t";
        }
        
        echo "<br>Chữ số lớn nhất là:". max($mang);
    }
    
    
    echo "các số nguyên tố: ";
    songuyento($a);
    echo "<br>";
    var_dump((string)"$a");
    echo "<br>";
    tachso($a);
    echo "<br>";
    
    
