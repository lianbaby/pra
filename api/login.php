<?php
include_once('../base.php');

$acc=$_POST['acc']??null;
$pw=$_POST['pw']??null;
//要去db撈資料啊user
$user=db_get('user',['acc'=>$acc]);

if(!$user){
    setMsg('查無帳號'); //是setMsg給他的訊息，不是得到
    back();//回上一步啊
    exit();//帳號錯誤就離開程式了，不用往下執行
}

if($user['pw']!=$pw){  //如果資料庫裡的密碼不等於得到的密碼
    setMsg('密碼錯誤');
    back();
    exit();
}
//還要判斷一下，這個session記錄裡的user是否是admin

$_SESSION['user']=$acc;

if($acc == 'admin'){
    to('/back.php');
    exit();  //如果是admin的話，導去管理頁面
}
to('/');