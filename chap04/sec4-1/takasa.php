<?php
$kyori = 20;
$kakudo = 32 * pi() / 180;
$takasa = $kyori * tan($kakudo);
$takasa = round($takasa, 1);

echo "木の高さは $takasa mです。";

