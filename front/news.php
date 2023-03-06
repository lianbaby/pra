<?php
$news = db_all('news');//先撈資料
$news_show=db_count('news',['sh'=>1]);//只秀sh為1的是顯示
?>

<script>
    function more(target){
        if($(target).find('div').css('white-space')=='nowrap'){
          $(target).find('div').css('white-space','');
        }else{
            $(target).find('div').css('white-space','nowrap');
        }
    }
</script>

<fieldset>
    <legend>目前位置：首頁 > 最新文章區 </legend>
    <table>
        <tr>
            <td>標題</td>
            <!-- (this)傳這個欄位資料給ajax -->
            <td>內容</td> 
        </tr>
        <?php foreach ($news as $new) : ?>
                <tr>
                    <td><?= $new['title'] ?></td>
                    <td onclick="more(this)"><div style="overflow: hidden;text-overflow:ellipsis;width:200px;white-space:nowrap"><?=$new['text']?></div></td>
                </tr>
        <?php endforeach ?>
    </table>
</fieldset>