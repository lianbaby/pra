<?php
// 做管理者刪除功能
// 用id判斷，哪一筆要刪除，因為是多筆，所以用foreach
//完成後回上一頁
include_once('../base.php');

$id=$_POST['del']??null;

foreach($id as $del){
    db_delete('user',$del);
}
back();