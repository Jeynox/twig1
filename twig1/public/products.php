<?php

require_once __DIR__ . '/../config/twig.php';

$products = ["guitare", "bass", "banjo", "cithare", "lyre", "harpe"];

echo $twig->render('product.html.twig', ['products' => $products]);