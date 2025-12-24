<?php
$states = [
  "state unavailable",
  "resource not initialised",
  "content pending",
  "node incomplete",
  "no data at this address",
];

$targets = [
  "/api/randomPage.php"
];

$state = $states[array_rand($states)];
$target = $targets[array_rand($targets)];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>...</title>

    <link rel="stylesheet" href="/styles/limbo.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=BBH+Bartle&family=Bebas+Neue&display=swap" rel="stylesheet">
</head>
<body>

  <div class="wrap">
    <div class="status"><?= strtoupper($state) ?></div>
    <div class="meta">
      endpoint: <?= $_SERVER['REQUEST_URI'] ?><br>
      timestamp: <?= date("Y-m-d H:i:s") ?>
    </div>
    <a href="<?= $target ?>">continue</a>
  </div>

</body>
</html>
