<?php 

include_once('../base.php');

$email=$_POST['email']??null;

$check_email=db_get('user',['email'=>$email]);

if($check_email){
    echo('您的密碼為：'.$check_email['pw']);
}else{
    echo('查無此資料');
}