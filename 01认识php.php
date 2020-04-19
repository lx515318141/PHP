<?php
    define('BR','<br>');        // 定义一个常量进行强制换行;
    echo "Hello PHP!";
    echo BR;
    echo "Hello World!";
    echo '<br>';
    var_dump('php标记');
    echo BR;
    $_num = 10;
    echo $_num;
    echo BR;
    $var = 'frank';
    $Var = 'iwen';
    echo "$var,$Var";
    echo BR;    
    define('FRANK','沃德天·辣么帅');
    echo FRANK;
    echo BR;
    echo __FILE__;    // 魔法常量，其值会改变
?>