<?php
// index.php
session_start();
$config = require 'config.php';
$page = $_GET['page'] ?? 'home';
$allowed = ['home','kepek','kapcsolat','belepes','kilepes','uzenetek'];
if (!in_array($page, $allowed)) { $page = 'home'; }
?>
<!DOCTYPE html>
<html lang="hu">
<head>
  <meta charset="UTF-8">
  <title><?= htmlspecialchars($config['sitename']) ?></title>
  <link rel="stylesheet" href="assets/css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <header>
  <nav>
  <ul style="list-style:none; display:flex; gap:1rem; padding:0; margin:0;">
    <?php foreach ($config['menu'] as $key => $label): ?>
      <?php 
        // Belépés csak kijelentkezettnek, kilépés és üzenetek csak bejelentkezettnek
        if ($key === 'belepes' && isset($_SESSION['user'])) continue;
        if (in_array($key, ['kilepes','uzenetek']) && !isset($_SESSION['user'])) continue;
      ?>
      <li><a href="index.php?page=<?= $key ?>"><?= htmlspecialchars($label) ?></a></li>
    <?php endforeach; ?>
  </ul>
</nav>
  </header>

  <main>
    <?php
    // IDE kell beilleszteni:
    $file = __DIR__ . '/controllers/' . $page . '.php';
    if (file_exists($file)) {
        include $file;
    } else {
        echo "<p>Az oldal nem található!</p>";
    }
    ?>
  </main>

  <footer>
    &copy; <?= date('Y') ?> <?= htmlspecialchars($config['sitename']) ?>
  </footer>
</body>
</html>