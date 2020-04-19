<?php
    echo '<pre>';
    class Peo{
        public $peoName = 'lix';    // publics是一个关键词，稍后再说  
        function showSelf(){
              echo 'hello world!';
        }
    }
    $lix = new Peo;
    print_r($lix);
    $lix->showSelf();
    echo '<br>';
    echo $lix->peoName;
    echo '<br>';
    class Peo1{
        public $peoName = 'lix';          // 声明公共属性  
        private $peoAge = 18;
        private function showSelf(){              // 声明私有方法
            echo 'hello world!';
        }
        public function canUsedFun(){             // 声明公共方法
            $this->showSelf();                // $this是一个伪对象，表示当前正在调用这个方法的对象
        }
        public function getPeoAge(){
            echo $this->peoAge;
        }
    }
    $frank = new Peo1();
    print_r($frank);
    echo '<br>';
    echo $frank->canUsedFun();
    echo '<br>';
    echo $frank->peoName;
    echo '<br>';
    // echo $frank->peoAge;
    echo '<br>';
    echo $frank->getPeoAge();
    echo '<br>'; 
?>