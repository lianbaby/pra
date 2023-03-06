<?php
$news = db_all('news');//先撈資料
$news_show=db_count('news',['sh'=>1]);//只秀sh為1的是顯示
?>

<fieldset>
    <legend>最新文章管理</legend>
    <form action="/api/edit_news.php" method="post">
    <a href="">新增文章</a>
    <table>
        <tr>
            <td>編號</td>
            <td>標題</td>
            <td>顯示</td>
            <td>刪除</td>
        </tr>

        <?php foreach ($news as $key => $new) : ?>
                <tr>
                    <td>
                        <?= $key+1 ?>
                        <!-- 要傳id資料到後台啊 -->
                        <input type="hidden" name="id[]" value="<?=$new['id']?>">
                    </td>
                    <td><?=$new['title']?></td>
                    <td><input type="checkbox" name="sh_<?=$new['id']?>"<?=$new['sh']==1?'checked':''?>></td>
                    <td><input type="checkbox" name="del[]" value="<?=$new['id']?>"></td>
                </tr>
        <?php endforeach ?>    
    </table>
    <button>確認修改</button>
    </form>
</fieldset>