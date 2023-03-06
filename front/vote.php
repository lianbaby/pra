<?php

$id=$_GET['id']??null;
$sub=db_get('que',$id);
$ques=db_all('que',['subject_id'=>$id]);
?>


<fieldset>
    <legend>目前位置：首頁 > 問卷調查 > <?=$sub['text']?> </legend>
    <h1><?=$sub['text']?></h1>
    <form action="/api/vote.php" method="post">
        <input type="hidden" name="sub_id" value="<?=$id?>">
        <?php foreach($ques as $key => $que):?>
            <div>
                <input type="radio" name="id" id="<?=$que['id']?>">
                <?=$que['text']?>
            </div>
        <?php endforeach ?>
        <button>我要投票</button>
    </form>
</fieldset>