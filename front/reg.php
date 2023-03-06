<script>
    let msg='<?=getMsg()?>'; //用php去呼叫這個function
    if(msg){                 //如果有msg的話，alert這個msg
        alert(msg);
    }
</script>
<fieldset>
    <legend>會員註冊</legend>
    <div style="color: red;">*請設定您要註冊的帳號及密碼(最長12個字元)</div>
    <form action="/api/reg.php" method="post">
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