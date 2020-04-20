<?php
    $username=$_POST['username'];
    $password=$_POST['password'];
    $success=array('msg'=>'ok');
    if($username === 'lix' && $password === '123456'){
        $success['infoCode']=200;
    }else{
        $success['infoCode']=400;
    }
    echo json_encode($success)
?>