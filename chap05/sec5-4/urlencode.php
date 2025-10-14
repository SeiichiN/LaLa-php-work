<?php
$animals = "犬 猫";
$animals_enc = urlencode($animals);
$url = "getAnimal.php?animals={$animals_enc}";
?>
<p><a href="<?php echo $url; ?>">動物たち</a></p>
