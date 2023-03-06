<?php
include_once('../base.php');

$id=$_POST['id']??null;
$sub_id=$_POST['sub_id']??null;

$que = db_get('que',$id);
$sub=db_get('que',$sub_id);

$que['total'] +=1;
$sub['total'] +=1;
db_save('que',$que);
db_save('que',$sub);

to('/?do=result&id='.$sub_id);
