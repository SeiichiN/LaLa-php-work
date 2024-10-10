<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <form action="uketori.php" method="post" id="form">
    <label>ユーザーID (半角英数字小文字) :<br>
      <input type="text" name="userid">
      <span id="mes-id" style="color:red"></span>
    </label><br>
    <label>
      パスワード(半角英数字小文字) :<br>
      <input type="password" name="password">
    </label><br>
    <input type="submit" value="送信">
  </form>
  <hr>
  <?php $url = rawurlencode("PHP 8サンプル.html") ?>
  <p><a href="<?php echo $url ?>">PHP 8サンプル</a></p>
  <script>
    'use strict';
    
    const form = document.getElementById('form');
    const mes_id = document.getElementById('mes-id');
    
    form.onsubmit = function() {
    	const userid = form.userid.value;
      console.log(userid);
    	if (!userid.match(/^[\w\W]+$/)) {
    		mes_id.textContent = "半角英数字ではありません";
    		return false;
    	}
    	return true;
    }

  </script>  
</body>
</html>