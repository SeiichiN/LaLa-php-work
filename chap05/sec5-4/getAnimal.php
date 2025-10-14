<?php
$animals = $_GET['animals'];
?>
<p>動物たち: <?php echo $animals; ?></p>
<p><a href="urlencode.php">もどる</a></p>
<p>
  このURLでアクセスされました。<br>
  <span id="url"></span>
</p>
<script>
  'use strict';

  let urltxt = location.href;
  document.getElementById('url').textContent = urltxt;
</script>