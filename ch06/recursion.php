<?php

    function fact($num){
        $result = 1;
        for($i = 1; $i<=$num;$i++){
            $result *= $i;
        }
    };
    $num = 10;
    $result = fact($num);
    print $result;
?>