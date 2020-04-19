<?php
    $num = 100;             // 设置全局变量$num
    function Fun(){
          global $num;      // 在函数内部声明$num文件全局变量，否则调用出错
          echo $num;        // 对全局变量做出修改
          $num++;
    }
    Fun();
    echo '<br>';
    echo $num;              // 在函数外部再次输出$num,得出结果101
?>