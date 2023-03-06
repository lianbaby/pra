<?php
$ques=db_all('que',['subject_id'=>0]); //id為0的就是題目，id有數字的就是跟著題目id命一樣的
?>



<fieldset>
    <legend>目前位置：首頁 > 問卷調查 </legend>
    <table>
        <tr>
            <td>編號</td>
            <td>問卷題目</td> 
            <td>投票總數</td>
            <td>結果</td>
            <td>狀態</td>
        </tr>
        <?php foreach ($ques as $key =>$que) : ?>
                <tr>
                    <td><?= $key+1 ?></td>
                    <td><?=$que['text']?></td>
                    <td><?=$que['total']?></td>
                    <!-- 下面那行記一下 -->
                    <td><a href="?do=result&id=<?=$que['id']?>">結果</a></td>
                    <td>
                        <?php if($is_login):?>
                            <a href="?do=vote&id=<?=$que['id']?>">參與投票</a>
                        <?php else :?>
                            請先登入
                        <?php endif ?>
                    </td>
                </tr>
        <?php endforeach ?>
    </table>
</fieldset>