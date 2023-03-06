<?php
//首先先去資料庫撈全部user資料
$users = db_all('user');
?>

<fieldset>
    <legend>帳號管理</legend>
    <form action="/api/acc.php" method="post">
        <table>
            <tr>
                <td>帳號</td>
                <td>密碼</td>
                <td>刪除</td>
            </tr>
            <?php foreach ($users as $user) : ?>
                <tr>
                    <td><?= $user['acc'] ?></td>
                    <td><?= $user['pw'] ?></td>
                    <!-- 可能刪除多個，所以給一個del[]陣列儲存，並且傳回哪個id -->
                    <td><input type="checkbox" name="del[]" value="<?= $user['id'] ?>"></td>
                </tr>
            <?php endforeach ?>
        </table>
        <button>確定刪除</button>
        <button type="reset">清除選取</button>
    </form>



    <script>
        let msg = '<?= getMsg() ?>';
        if (msg) {
            alert(msg);
        }
    </script>


    <h1>新增會員</h1>
    <div style="color: red;">*請設定您要註冊的帳號及密碼(最長12個字元)</div>
    <!-- 要注意給的網址喔，因為reg會抓網址所以在reg.php之後，我們要加個?back=1 讓程式去抓back(1自己決定) -->
    <form action="/api/reg.php?back=1" method="post">
        <table>
            <tr>
                <td>帳號：</td>
                <td><input type="text" name="acc" id=""></td>
            </tr>
            <tr>
                <td>密碼：</td>
                <td><input type="password" name="pw" id=""></td>
            </tr>
            <tr>
                <td>確認密碼：</td>
                <td><input type="text" name="cpw" id=""></td>
            </tr>
            <tr>
                <td>信箱</td>
                <td><input type="text" name="email" id=""></td>
            </tr>
            <tr>
                <td>
                    <button>註冊</button>
                    <button type="reset">清除</button>
                </td>
                <td></td>
            </tr>
        </table>
    </form>
</fieldset>