<table border="1">
    <?php
        $a= array();
        $n= rand(2,5);
        $m= rand(2,5);
        
        echo "matrix $m x $n: <br>";

        for($i=0; $i<$m; $i++)
        {
            echo "<tr>";
            for($j=0; $j<$n; $j++)
            {
                echo "<td>". $a[$i][$j] = rand(-100,100). "</td>";
            }
            echo "</tr>";
        }

    ?>
</table>