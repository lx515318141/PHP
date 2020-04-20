<?php
    /*
    (1)$_GET这个内置对象，表示接收的前端发生过来的get请求数据包
    (2)$_POST这个内置对象，表示接收的前端发送过来的post请求数据包
    (3)echo代表返回前端指定数据
    (4)json_encode(对象)，来将数组或对象等复杂值转换成json
    */
    // get无参请求
    /*$successArr=array('msg'=>'ok','info'=>'my tel is 1234567890x');
    echo json_encode($successArr)*/
    // get有参请求
    // $successArr=array('msg'=>'ok','info'=>$_GET);
    // echo json_encode($successArr)
    // post有参请求
    $successArr=array('msg'=>'ok','info'=>$_POST);
    echo json_encode($successArr)
?>