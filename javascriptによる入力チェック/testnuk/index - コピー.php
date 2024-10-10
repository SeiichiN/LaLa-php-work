<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <form action="uketori.php" method="post" id="form">
    <label>ユーザーID (半角英数字) :<br>
      <input type="text" name="userid">
      <span style="color:red" id="mes-id"></span>
    </label><br>
    <label>
      パスワード(半角英数字) :<br>
      <input type="password" name="password">
      <span style="color:red" id="mes-pw"></span>
    </label><br>
    <input type="submit" value="送信">
  </form>
  <script>
   'use strict';

   const form = document.getElementById('form');
   const mes_id = document.getElementById('mes-id');
   const mes_pw = document.getElementById('mes-pw');
   
   form.onsubmit = function() {
     mes_id.textContent = '';
     mes_pw.textContent = '';
     let id_ok = false;
     let pw_ok = false;
     const userid = form.userid.value;
     if (!userid.match(/^[0-9A-Za-z]+$/)) {
       mes_id.textContent = "半角英数字ではありません";
     } else {
       id_ok = true;
     }
     const passwd = form.password.value;
     if (!passwd.match(/^[0-9A-Za-z]+$/)) {
       mes_pw.textContent = "半角英数字ではありません";
     } else {
       pw_ok = true;
     }
     if (id_ok && pw_ok) {
       return true;
     } else {
       return false;
     }
   }
  </script>
</body>
</html>

<!-- 修正時刻: Thu 2024/10/10 07:17:08 -->
