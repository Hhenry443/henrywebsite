<?php
$pages = [
  '/ihatehenry.php',
  '/index.php',
  '/marmoset.php',
];

$randomPage = $pages[array_rand($pages)];
header("Location: $randomPage");
exit;
