<?php
    echo '<pre>';
    $num1=10;
    $num2=20;
    echo $num1+$num2;
    echo '<br>';
    echo $num1.$num2;
    // $num1+=$num2;    // 单纯的数字运算
    $num1.=$num2;       // 字符串内的拼接
    echo '<br>';
    echo $num1;
    $num3=10;
    $num4=20;
    echo '<br>';
    echo ($num3===10)&&($num4===20);            // 1表示true
    echo '<br>';
    var_dump(($num3===10)&&($num4===20));
    echo '<br>';
    // 流程控制
    $arr=['ww','aa','ss','dd'];
    foreach($arr as $key => $value){
        echo $key,$value;
    }
    echo '<br>';
    foreach($arr as $value){
        echo $value;
    }
    echo '<br>';
    // include 和 require
    include 'vars.php';
    echo "A $color $fruit";
?>