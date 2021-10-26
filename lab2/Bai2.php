<?php
    $a = rand(1,10);
    echo "Số được tạo ra là $a.<br>";

    for($i = 1; $i <= 10; $i ++){
        echo "$a x $i =  ".($a * $i);
        echo "<br>";

    }
?>