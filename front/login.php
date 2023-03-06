<!-- 記得寫script來顯示訊息(api裡設置，前端畫面顯示) -->

<script>
    let msg = '<?= getMsg() ?>';
    if (msg) {
        alert(msg);
    }
</script>

<script>
    let msg='<?=getMsg()?>';
    if(msg){
        alert(msg);
    }
</script>

<fieldset>
    <legend>會員登入</legend>
    <form action="/api/login.php" method="post">
        <table>
            <tr>
                <td>帳號：</td>
                <td><input type="text" name="acc" ></td>
            </tr>
            <tr>
                <td>密碼：</td>
                <td><input type="password" name="pw" ></td>
            </tr>
            <tr>
                <td>
                    <button>登入</button>
                    <button type="reset">清除</button>
                </td>
                <td>
                    <a href="?do=forget">忘記密碼</a>
                    <a href="?do=reg">尚未註冊</a>
                </td>
            </tr>
        </table>
    </form>
</fieldset>