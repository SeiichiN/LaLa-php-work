<?php
$color = "red";
?>
<?php switch ($color):?><?php 
  case "green": ?>
    <p>緑色は120円です</p>
    <?php break; ?>
<?php case "red": ?>
    <p>赤色は150円です</p>
    <?php break; ?>
<?php default: ?>
    <p>その他の色は100円です</p>
<?php endswitch; ?>
