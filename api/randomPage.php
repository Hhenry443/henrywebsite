<?php
$pages = [
  '/about.php',
  '/ihatehenry.php',
  '/index.php',
  '/marmoset.php',
  '/nocontext.php'
];

$randomPage = $pages[array_rand($pages)];
header("Location: $randomPage");
exit;
