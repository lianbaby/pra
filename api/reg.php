<?php

include_once('../base.php');

$acc=$_POST['acc']??null;
$pw=$_POST['pw']??null;
$cpw=$_POST['cpw']??null;
$email=$_POST['email']??null;
$back=$_GET['back']??null;//如果是管理者頁面的新增會員

if(!$acc){
    setMsg('帳號不可空白');
    back();
    exit();
}

if(!$pw){
    setMsg('密碼不可空白');
    back();
    exit();
}

if($cpw != $pw){
    setMsg('密碼不一致');
    back();
    exit();
}

if(!$email){
    setMsg('郵件不可空白');
    back();
    exit();
}

$checkac=db_count('user',['acc'=>$acc])>0; 
if($checkac){
    setMsg('帳號重覆');
    back();
    exit();
}
db_save('user',['acc'=>$acc,'pw'=>$pw,'email'=>$email]);

if($back){
    back();//返回管理頁面就好
    exit();//並離開此程式，不要再往下跑to回到登入頁面了
}

to('/?do=login');

