<?php
    $num=12;
    echo $num;
    echo '<br>';
    var_dump($num);
    echo '<br>';
    echo gettype($num);
    echo '<br>';
    // 布尔类型
    $bool1=true;
    $bool2=false;
    echo $bool1;        // 当输出为true时在页面显示为1，false时页面不显示
    echo $bool2;
    echo '<br>';
    var_dump($bool1);    // 直接输出只会看到1或不显示，无法看到其值，用var_dump才可以看到
    echo '<br>';
    $bool3=(bool)0;
    var_dump($bool3);        // 0本身只代码表数字0，是整数型，只有使用(bool)0，将0转化为布尔类型后才是false
    echo '<br>';
    // 整数类型
    $int1=10;
    var_dump($int1);
    $int2=0b10;
    var_dump($int2);
    $int3=010;
    var_dump($int3);
    $int4=0x10;
    var_dump($int4);
    echo '<br>';
    // 浮点类型
    $float1=1.234;
    $float2=1.2e3;
    $float3=178E-3;
    var_dump($float1);
    var_dump($float2);
    var_dump($float3);
    echo '<br>';
    // 字符类型
    $str1='my name is \'lixiang\'';
    echo $str1;
    echo '<br>';
    $age=12;
    echo '$age';        // 使用单引号不会解析字符串，会直接显示$age
    echo "$age";        // 使用双引号会进行解析，会显示12
    echo '<br>';
    $str2='我是
           一个
           人';
    echo "$str2";
    echo '<br>';
    $frank='张先森';
    echo 'my name is $frank'."<br/>";       // .表示拼接字符串
    echo "my name is $frank";
    echo '<br>';
    // 数组类型
    echo '<pre>';           // 预文本，是下面的数组显示的更加好看
    $arr1=array('username'=>'lixiang','password'=>'123456');
    $arr2=[true,12,'小明'];
    print_r($arr1);         // 数组不能用echo输出，会报错
    echo '<br>';
    print_r($arr2);
    $arr2[1]=15;            // 可通过键名赋值
    echo '<br>';
    echo $arr2[1];          // 输出数组中的单个值可以使用echo
    echo $arr1['username'];
    echo '<br>';
    echo count($arr1);
    echo count($arr2);
    echo '<br>';
    $arr2[100]='小黄';
    print_r($arr2);
    echo '<br>';
    // 对象类型
    class Phone{
        public $phoneType='oppo';
        function showInfo(){
            echo '充电五分钟通话两小时';
        }
    }
    $myPhone=new Phone;
    print_r($myPhone);
    $myPhone->showInfo();
    echo '<br>';
    echo $myPhone->phoneType;
    echo '<br>';
    // 空值类型
    $temp=null;
    var_dump($temp);
?>