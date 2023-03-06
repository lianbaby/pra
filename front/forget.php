<!-- 利用ajax來寫此功能 -->

<script>
    function search(){
        $.post('/api/forget.php',{
            email:$('input[name=email]').val()
        },function(res){
            $('#msg').text(res)
        })
    }
</script>

<fieldset>
    <legend>忘記密碼</legend>
    <form action="/api/forget.php" method="post">
        <div>請輸入信箱以查詢密碼</div>
        <div><input type="text" name="email"></div>
        <div id="msg"></div>
        <div><button type="button" onclick="search()">尋找</button></div>
    </form>
</fieldset>