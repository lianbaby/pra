<?php
include_once('../base.php');

$ids=$_POST['id'];
$dels=$_POST['del'];

foreach($dels as $del){
    db_delete('news',$del);
}

foreach($ids as $id){
    $sh=isset($_POST['sh_'.$id])?1:0;
    db_save('news',['id'=>$id,'sh'=>$sh]);
}

to('/back.php?do=news');