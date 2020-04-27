# 1.前后台语言的区别：

前台语言：负责用户交互 (html，css，js) 在浏览器/node 中运行，浏览器中存在解析前台语言的机制(解析器)。最终翻译成二进制，让计算机认识我们的代码。  
后台语言：负责业务逻辑 (C，C++，Java，PHP，Python，Go，Perl) 在服务器中运行，服务器中安装了能够解析后台语言的解析器，后台语言解析器 (apache/tomcat/ngix) 。

# 2.XAMPP

xampp 是一个服务器集成软件，xampp 中有 Apache，其中 x 代表系统，a 代表 Apache，m 代表 MySQL，p 代表 PHP，p 代表 Phpmyadmin/Perl。所以个人电脑上安装了 xampp，自己的电脑就有了服务器，能够解析后台语言。

[推荐阅读博客](https://www.cnblogs.com/qyfeng009/p/5055192.html)

## 2.1.安装 xampp

百度搜索 xampp，很多网站可以下载，安装过程中除安装目录其他不需要修改，默认安装目录为 C 盘，可能会影响系统，建议安装到其他盘中。

## 2.2.运行

安装成功后，在 xampp 文件夹下找到 xampp-control.exe 文件，点击运行，要使用哪个服务器就点击那个服务器后的 start，点击之后 start 会变成 stop，前面的服务器会背景颜色会改变。Port 表示端口，Apache 的默认端口是 80,443，可以通过设置进行修改。点击 Config，其中有两个选项需要修改，分别为：Apache(httpd.conf)和 Apache(httpd-ssl.conf)。打开 Apache(httpd.conf)，在其中搜索 80，将其修改为自己想要的端口，另一个文件同理，将其中的 443 修改为自己想要的端口(第一个文件要修改 3 处，第二个文件修改两处，因为尖括号里的一处，不需要修改)。

## 2.1.Apache 使用

1.运行成功后，可以通过 127.0.0.1:8088(80 端口修改后的端口)或 localhost:8088，访问文件。  
2.Apache 的根路径是 htdocs 这个文件夹，而且 Apache 只解析这个文件夹中的内容，也就是 Apache 解析的起点，要求把所有的后台文件放在
htdocs 文件夹下。  
3.网络路径的组成：http://localhost:8088/code/php-demo/01认识php.php  
网络协议：http(可以不显示) https(安全协议，必须显示)  
主域名：localhost 或 127.0.0.1  
端口：浏览器默认端口：80(如果使用的端口是 80，则在网络路径中不需要写出，如果使用 80 以外的端口则必须写出，本人使用的是 8088)  
4.在 VSCode 中加入 PHP  
在 VSCode 中编写 PHP 代码，需要先在扩展中搜索 xdebug 安装其中的 php debug ，然后再在设置中搜索 php 找到其中的 PHP>Validate:Executable Path，在settings.json 中编辑，把 PHP.exe 的路径写入其中。

# 3.PHP

## 3.1PHP 概述

### 1.PHP 简介

PHP，即"PHP：Hypertext Preprocessor"，中文名：超文本预处理器，是一种被广泛应用的开源通用脚本语言，尤其适用于 Web 开发并可嵌入到 HTML 中去。它的语法利用了 C、Java、和 Perl，易于学习。该语言的主要目标是允许开发人员快速编写动态生成的 Web 页面，但 PHP 的用途远不止于此。

### 2.PHP 概述与名词解释

#### (1).基本词法与名词解释  

PHP 标记：当 PHP 开始解析一个文件时，会寻找起始标记`<?php和结束标记?>`。  
```
<?php  
代码  
?> 
``` 
它告诉 PHP 开始和停止解析二者之间的代码。  
此种解析方法使得 PHP 可以被嵌入到各种不同的文档中去，而任何起始和结束标记之外的部分都会被 PHP 解析器忽略。  
PHP 文件必须以.PHP 结尾  
分隔符号：PHP 需要在每个语句后用分号;结束指令，需要注意的是必须采用英文输出。  
注释方法：PHP 的注释虽然支持 C、C++、unixshell 风格等的注释方法，但我们仍然保持在 js 中的注释风格即可，其余暂时不提。  
输出方法：echo 直接输出，写在 echo 中的信息会直接显在页面上。  
var_dump() 输出信息，不仅能看到数据还能看到数据的类型和长度。  
print_r() 输出数组  

#### (2).变量

描述：变量是其所表示的值可以发生改变的值，在 PHP 中的变量用一个美元符号后面跟变量名来表示。  
语法：\$变量名  
规则：变量名与 PHP 中其他的标签一样遵循相同的规则。一个有效的变量名由字母或下划线开头，后面跟上任意数量的字母，数字，或下划线。  
注意：  
a.PHP 中变量名是大小写敏感的  
b.PHP 中变量可以直接在写出变量名后直接使用，而不需要 js 中的“声明赋值”过程  
c.*php 中变量之间的赋值总是【赋值传递】，如果必须【地址传递】则需要使用&符号  
d.PHP 中变量的作用域采用函数级作用域(暂时)。  
例子：  
```  
$var = 'frank';
$Var = 'iwen';  
echo "$var,$Var"; // 输出"frank,iwen"  
```

#### (3).常量

描述：常量指在脚本执行期间该值不能改变的标识符。常量默认为大小写敏感，传统上常量标识符总是大写的。  
语法：define('常量名','简单值');  
规则：常量名和其他任何 PHP 标签遵循同样的命名规则。合法的常量名以字母或下划线开始，后面接任意字母，数字或下划线。  
注意：  
a.常量实际上可以认为是【宏定义】在 PHP 中的一个体现  
b.为了区分变量和常量，我们约定常量在定义时均使用大写  
c.PHP 中实际上并不是所有的常量的值都不能改变，MC(魔术变量)就能够发生改变  
例子：  
```
define('FRANK','沃德天·辣么帅');  
echo FRANK;  
```

#### (4).表达式

描述：表达式是 PHP 中的基石，可以说在 PHP 中所写的任何内容都是表达式。官方给出的概念是【任何有值的东西均可以称为是表达式】。  
语法：在 PHP 中表达式无法精确的被给出一个语法来设定，但可以简单设立一个通俗的标准。那就是语句如果不加分号的部分，即是表达式。  
注意：上面的说法并不完全准确，毕竟有一些语句是不使用分号结尾的。例如流程控制中的 if 等结构，还有函数等结构。因此上面的说法只是“简单”设立的一个标准。  
例子：  
```  
function foo(){return 5;} // 函数表达式  
 $c = $a++ // 赋值表达式  
```

### 3.php 常见数据类型

PHP中的数据类型相较于js多了很多种，但其中相当一部分对于我们来说很少用到。因此主要了解一下几种数据类型。

(1)布尔类型：Boolean  
(2)整数类型：Integer  
(3)浮点类型：Float  
(4)字符类型：String  
(5)数组类型：Array  
(6)对象类型：Object  
(7)空值类型：NULL

介绍数据类型之前，为大家提供两个方法来辨别变量的数据类型：  
var_dump(变量|表达式)：函数用来查看表达式的值和归属类型。  
gettype(变量|表达式)：函数用来查看变量或表达式的类型。  

#### (1)布尔类型Boolean

描述：Boolean是最简单值类型，用来表示表达式的真值。  
语法：一般使用TRUE或FALSE常量来指定布尔值，两者均不区分大小写。  
注意：  
a.可以使用(bool)或(boolean)强制转换修饰符，来对非布尔值类型的变量或表达式进行强制类型转换。  
b.当转换为布尔值类型时，以下值被认为是FALSE  
  布尔值FALSE本身  
  整数值0(零)  
  浮点型值0.0(零)  
  空字符串，以及字符串"0"  
  不包括任何元素的数组  
  特殊类型NULL(包括尚未赋值的变量)  
c.所有其他值都被认为是TRUE(包括任何资源和NAN)  
强调：-1和其他非零值(不论正负)一样，被认为是TRUE  

#### (2)整数类型Interger

描述：整数指的是集合Z={...,-2,-1,0,1,2,...}中的某个数  
语法：  
a.整数值可以使用十进制，十六进制，八进制或二进制表示，前面可以加上可选的符号(-或者+)。  
b.二进制表达的integer自PHP 5.4.0起可用。  
c.要使用八进制表达式，数字前必须加上0(零)，要使用十六进制表达式，数字前面必须加上0x，要使用二进制表达式，数字前必须加上0b。  
注意：  
a.PHP7以前的版本，如果向八进制传递了一个非法数字(即8或9)，则后面其余数字会被忽略。PHP7以后会产生Parse Error错误。  
b.PHP中没有整除的运算符。1/2产生出float0.5.  
c.使用(int)或(integer)方法对非整数变量或表达式进行强制类型转换  
强调：  
绝不要将未知的分数强制转换为integer，这样有事会导致不可预计的后果。  

#### (3)浮点类型Float

描述：浮点类型，又被称为浮点数Float或者双精度数double或者实数real。  
语法：可以通过以下任何一种类型来定义  
      $a = 1.234  
      $b = 1.2e3  
      $c = 7E-10  
注意：  
a.永远不要直接比较两个浮点数的大小，因为这样没有任何意义。  
b.如果必须比较两个浮点数大小，则可以采用【epsilon】机器极小值方法进行比较。  
c.NAN表示数学上无法用浮点数具体描述出的数，和true之外的任何值进行松散或严格比较的结构都会是false。  
强调：由于NAN代表着任何不同值，不应拿NAN去和其他值进行比较，包括其自身。  

#### (4)字符类型String

描述：字符类型也叫字符串类型，是由一系列字符构成。其中每一个字符等同于一个字节，因此php中只能支持256字符集，也正因为这样其不支持Unicode。  
语法：php中字符串有两种定义语法，单引号和双引号定义。  
注意：  
a.php字符串中使用转义字符\来描述容易引起歧义的内容。  
b.php对双引号定义的字符串中的变量可以进行内容解析，而单引号则不行。  
c.php字符串允许多行定义，但会忽略多余的空格和换行。  
d.php中字符串拼接采用.点运算符实现！不是！加号！！！  
例子：  
```
$frank='张先森';  
echo 'my name is $frank'."<br/>";  
echo "my name is $frank";  
```

#### (5)数组类型Array

描述：php中的数组实际上是一个有序映射，映射就是把keys关联到values上的类型。  
语法：  
     array(key => value,...)  
     // 键(key)可以是一个整数integer或字符串string  
     // 值(value)可以是任意类型的值。  
     自php5.4起，可以直接通过短数组定义方式[]来代替array()。  
注意：  
a.php中echo仅用来输出简单值，而复杂数据类型则需要通过print_r()函数来输出  
b.php中的数组实际与js中对象的结构更相似。  
c.php中数组的读取和赋值可以通过数组名[键名]方式来读写。  
d.php中数组的长度读取通过count()函数实现  
e.php中数组内部添加原本并不存在的key值，不会补齐之间的差值，而是仅添加当前新输入的key值。  
  例如：  
   ` $arr[100]=100    // 并不会为数组添加100个元素  `
  
例子：  
``` 
print_r($arr=['11','22','33']);  
print_r($arr[0]);  
$arr[100]=960  
```

#### (6)对象类型Object

描述：php中想要创建一个对象，则必须通过new语句实例化一个类得到。  
语法：$obj=new Func;  
注意：  
a.php中类由class关键字声明，类名后没有小括号。  
b.php中类内部的方法由->箭头来调用，而不是.运算符。  
例子：  
```
class Peo{  
      function eat(){  
          echo '我会吃饭';  
      }  
}  
$lix=new Peo;  
print_r($lix->eat());  
```  
补充：  
类和对象：  
类：是一些事物具有公共特征的抽象描述。  
对象：类中某一个具体存在的个体。  
类是范畴，而对象是其中的个体。  
对于类和对象的使用方法远不止于此，而在数据类型当中我们只需要知道对象类型是如何创建的即可，剩余部分会在类和对象中详细说明。

#### (7)空值类型NULL

描述：NULL表示变量未被赋值的状态，NULL类型唯一可能的值就是NULL。  
注意：NULL值不区分大小写，NULL或null都可以。  
例子：  
` var_dump($lix=NULL) `

### 4.php 运算符

php中运算符和js中的运算符大同小异，因此整体上来讲可以直接按照经验进行使用。但毕竟存在差异，因此列出两个明显的运算规则区别：  
(1)字符串的拼接符号不再是+加号运算符，而是.点运算符。  
(2)字符串内的+=运算符也不再表示拼接，而是使用.=来进行拼接。原本的+=仅用来单纯的数学运算累加。  
``` 
$str1='123';  
var_dump($str1+='456');   //int(579)  

$str1='123';  
var_dump($str1.='456');   //string(6)"123456"  
```

### 5.php流程控制语句

php中流程控制语句与js中的流程控制语句语法基本一样，可以直接使用。  
php中不但包括了js中原有的语句，还新添加了一些流程控制：  
(1)快速遍历不再是for-in结构，而是提供了一个foreach语句  
(2)文件引入语句include和require，文件的单次引入语句include_once和require_once  

#### (1).foreach快速遍历

描述：foreach语法结构提供了遍历数组的简单方法，foreach仅能够应用于数组和对象。如果尝试应用于其他数据类型的变量，或者未初始化的变量将发出错发信息。  
语法：  
foreach(array_expression as $value){ statement }  
或者  
foreach(array_expression as $key=>$value){ statement }  
注意：  
a.第一种格式遍历给定的array_expression数组。每次循环中，当前单元的值被赋给$value并且数组内部的指针向前移一步(因此下一次循环中将会得到下一个单元)。  
b.第二种格式做同样的事，只除了当前单元的键名也会在每次循环中被赋给变量$key。  
例子：  
```
$arr=[1,2,3,4,5];
foreach($arr as $index => $value){
      each '$arr['.$index.']:'.$value."<br>"
}
```

#### (2).include与require

描述：include和require语句都表示包含并运行指定文件。但未找到文件include会发出一条警告，后者会发出一个致命错误。  
语法：  
include''文件名|文件路径';  
注意：  
a.当一个文件被包含时，其中所包含的代码继承了include所在行的变量范围。从该处开始，调用文件在该行处可用的任何变量在被调用的文件中也都可用。  
b.不过所有在包含文件中定义的函数和类都具有全局作用域。  
例子：  
```  
vars.php
<?php
      $color = 'green';
      $fruit = 'apple';
?>

test.php
<?php
      echo "A $color $fruit"  //A
      include 'vars.php';
      echo "A $color $fruit"  //A green apple
?>
```

### 6.php函数

php中的函数结构和js中的函数结构基本持有相同的语法结构和特征。  
例如：  
函数的声明语法由function命令声明，  
函数参数写在小括号内部，  
函数返回值在函数内部采用return关键词声明，  
函数可以先使用后声明  
函数内部返回的函数(闭包)  
php中的作用域也采用函数级别，因此函数内部的变量无法在函数外部直接访问。  
……  
但php中函数的作用域部分与js中的函数还是存在一些区别的。  
例如：
在函数外部定义的全局变量并不能在函数内部直接使用，而是需要通过关键词global在函数内部再次声明才可以。
例如：  
```
$num = 100;             // 设置全局变量$num
function Fun(){
      global $num;      // 在函数内部声明$num文件全局变量，否则调用出错
      echo $num;        // 对全局变量做出修改
      $num++;
}
Fun();
echo $num;              // 在函数外部再次输出$num,得出结果101
```

通过上面的例子得出：  
在php的函数中如果想要使用哪怕是全局变量，也必须采用关键词global声明一次。否则无法生效。

### 6.php类和对象

php中和js不同，php内对于类和对象是有准确的定义和关键词声明的。  
因此暂时撇开目前类和对象所保留的认知，先看看在php中类和对象是如何规定的。  
先从以下几个角度来讨论一下php中的类和对象：  
(1)php中的类  
(2)php中的对象  
(3)php中类的属性与属性类型关键词  
(4)php中的类常量与静态常量  
(5)php中类的构造函数  
(6)php中的继承  

#### (1).php中的类  

描述：php中类的定义都以关键字class开头，后跟类名，再后面，再后面跟着一对花括号。括号内包含有类的属性与方法的定义。  
语法：class类名{ 类内部的结构 }  
说明：  
a.类名可以是任何非PHP保留字的合法标签。一个合法类名以字母或下划线开头，后面跟着若干字母，数字或下划线。  
b.一个类可以包含属于自己的常量，变量【属性】以及函数【即方法】。  
例子：  
```
class Peo{
      public $peoName = 'prople name';    // publics是一个关键词，稍后再说  
      function showSelf(){
            echo 'hello world!';
      }
}
```

#### (2).php中的对象

描述：要创建一个类的实例，必须使用new关键字。类应在被实例化之前定义。  
语法：$对象名 = new 类名();  
说明：  
a.对于创建对象的语句中，new后面的类名后有没有小括号都可以。  
b.对象与对象之间的传值仍然是赋值传递，只不过传递的内容是一个内存地址。  
例子：  
```
class Peo{
      public $peoName = 'prople name';  
      function showSelf(){
            echo 'hello world!';
      }
}
$lix = new Peo;   // Peo Object([peoName] => people name)
print_r($lix;)
```

#### (3).php中类的属性与属性类型关键词

描述：类内部的变量成员称为属性，或字段、特征。  
语法：由关键字public，protected或者private开头，然后跟一个普通的变量声明来组成。  
class 类名{  
      属性关键词$变量名(属性名)=属性值;  
      属性关键词function方法名(参数1，参数2，……){ 方法内容代码; }  
}  
说明：  
a.属性中的变量可以初始化，但初始化的值必须是整数。  
b.类的属性和方法如果没有写明类型关键词，则都默认是公有地  
public：被定义为公有的类成员可以在任何地方被访问。  
protected：被定义为受保护的类成员则可以被其自身以及子类和父类访问。  
private：被定义为私有的类成员则只能被其定义所在的类访问。  
c.在类的成员方法中，可以用->来访问非静态属性，其中->称为对象运算符  
例子：  
```
class Peo{
      public $peoName = 'prople name';          // 声明公共属性  
      private function showSelf(){              // 声明私有方法
            echo 'hello world!';
      }
      public function canUsedFun(){             // 声明公共方法
            $this->showSelf()                   // $this是一个伪对象，表示当前正在调用这个方法的对象
      }
}
$lix = new Peo();                             // 实例化一个Peo类的对象
echo $lix->peoName;                             // 通过->访问对象的公有属性
$lix->proName = 'LIX';                          // 修改对象的公有属性
echo $lix->peoName;
$beixi->canUsedFun();                           // 调用对象的公有方法，间接执行私有方法
```

#### (4).php中的类常量与静态变量

描述：php中的常量和静态变量是存在于类的结构中的两个不同于常见属性的两种结构。  
语法：类常量由关键词const声明，而静态变量则使用关键词static声明  
class 类名{  
      const 类常量(没有$开头)=简单值;  
      static 静态变量名(有$开头)=简单值;  
}  
说明：  
a.由const声明的类常量不允许发生任何变化，一经声明值即固定。  
b.由static声明的静态变量的语句，则仅在类被声明的时候执行一次，但可以修改。  
c.无论是const声明的类常量还是static声明的静态变量，两者的调用方式均为::调用。  
d.两者在调用的时候均可以不实例化对象直接通过类名调用。  
例子：  
```
class Peo{                                
      const peoName = 'people name';      // 声明类常量
      static $peoAge = 18;                // 声明静态变量
}
echo Peo::peoName;                        // 不实例化也能直接通过类名访问
echo Peo::$peoAge;                        // 不实例化也能直接通过类名访问
Peo::$peoAge++;                           // 修改静态变量的值
echo Peo::$peoAge;                        // 确认修改
$lix = new Peo();                         // 实例化对象，但静态变量声明语句不执行
echo lix::peoName;                        // 实例化后可通过对象访问
echo Peo::$peoAge;                        // 输出静态变量是刚刚修改后的值
```

#### (5).php中类的构造函数

描述：构造函数是类在实例化对象的时候自动执行，用来帮助类去构造对象的函数。php为所有的类都提供了一个和类名相同的隐藏构造函数。可以通过显示编写或通过_construct函数来主动进行编辑。  
语法：  
class 类名{  
      // function__construct(){ 主动修改的代码 }  
      function 类名(){ 主动修改的代码 }  
}
说明：两种写法的都能够实现构造函数的主动编辑，但是需要知道系统自动提供的是第二种结构。  
例子：
```
class Peo{
      public $peoName;
      function__construct(){$this->peoName='默认值'}
}
$lix=new Peo();
echo $lix->peoName;
```

#### (6).php中类的继承

描述：继承有时也被称为类扩展。是指子类会继承父类所有公有的和受保护的属性方法。在php中使用extends关键词来实现继承。  
语法：class SonClassName extends FatherClassName{  
      子类结构  
}  
说明：  
a.除非子类覆盖了父类的方法，否则被继承的方法都会保留其原有功能。  
b.继承对于功能的设计和抽象是非常有用的，避免了重复编写大量相同的公有结构。  
c.对于公有属性和方法的继承，子类可以直接随意使用。  
对于受保护得到属性和方法的继承，可以在【父类或子类内部】使用。  
对于私有的属性和方法，子类不能够继承。  
例子：  
```
class Father{
      public $pubPro = '父类公开的属性';
      protected $protecPro = '父类受保护的属性';
      private $priPro = '父类私有的属性';

      public function fatherPublicPut(){
            echo $this->pubPro."<br>";
            echo $this->protecPro."<br>";
            echo $this->priPro."<br>";
      }
      protected function fatherProtectPut(){
            echo $this->pubPro."<br>";
            echo $this->protecPro."<br>";
            echo $this->priPro."<br>";
      }
      private function fatherPrivatePut(){
            echo $this->pubPro."<br>";
            echo $this->protecPro."<br>";
            echo $this->priPro."<br>";
      }
}
class Son extends Father{
      public function SonSelfPut(){
            echo $this->pubPro."<br>";
            echo $this->protecPro."<br>";
            echo $this->priPro."<br>";
      }
}
$father = new Father();             
echo $father->pubPro;               // 父类公开的属性
echo $father->protecPro;            // 报错，受保护属性外部无法直接访问
echo $father->priPro;               // 报错，私有属性外部无法直接访问
$father->fatherPublicPut();         // 父类公开的属性、父类受保护属性、父类私有属性
$father->fatherProtectPut();        // 报错，受保护方法外部无法直接访问
$father->fatherPrivatePut();        // 报错，私有方法外部无法直接访问

$son = new Son();
echo $son->pubPro;                  // 父类公开的属性（继承来的）
echo $son->protecPro;               // 报错，受保护属性外部无法直接访问
echo $son->priPro;                  // 报错，私有属性无法继承更无法访问
$son->fatherPublicPut();            // 父类公开的属性、父类受保护属性、父类私有属性（继承来的）
$son->fatherProtectPut();           // 报错，受保护方法外部无法直接访问
$son->fatherPrivatePut();           // 报错，私有方法无法继承更无法访问

$son->SonSelfPut();                 // 父类公开的属性、父类受保护的属性、报错（证明继承的属性只有public和protected的属性）
```

### 8.php会话session与缓存cookie(扩展)

session和cookie都会是我们在ajax请求部分详细说明的内容。但是我们有必要在这里先对其概念有一个大致的了解，这样有助于更好的理解后面部分的内容。  
名词解释：  
cookie指的是当访问页面的时候，由后台发往前台页面数据时所夹带的一小段信息。  
session可以理解为一种不断验证口令以获得用户持久连接的"访问机制"。  
原理说明：  
当后台返回给前台数据的时候，添加的一段"持久"的信息。因此这段信息必须在php后台代码中插入添加。  
相关技术：  
(1)php中$_GET和$_POST对象，用于在php中获取get和post请求的数据对象。  
(2)php中time()用于获取当前的时间戳，单位是秒。支持加减法。  
(3)php中setcookie('key',value,过期时间);用于设置缓存。  
(4)html中document.cookie用来获取页面所保存的cookie值。类型是字符串。  
