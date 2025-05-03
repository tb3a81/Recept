<?php
  session_start();
  $config = require __DIR__ . '/config.php';
  $page = $_GET['page'] ?? 'home';
  $allowed = ['home','kepek','kapcsolat','belepes','kilepes','uzenetek'];
  if (!in_array($page, $allowed)) { $page = 'home'; }
?><!DOCTYPE html>
<html lang="hu">
<head>
  <meta charset="UTF-8">
  <title><?=htmlspecialchars($config['sitename'])?></title>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="assets/js/kapcsolat.js" defer></script>
</head>
<!-- a body osztálya most már az aktuális oldal slug-ja lesz -->
<body class="page-<?= htmlspecialchars($page) ?>">
  <header>
    <?php if (isset($_SESSION['user'])): ?>
      <p class="user-info">
        Bejelentkezett:
        <?= htmlspecialchars($_SESSION['user']['fullname']) ?>
        (<?= htmlspecialchars($_SESSION['user']['username']) ?>)
      </p>
    <?php endif; ?>
    <nav>
      <ul class="main-menu">
        <?php foreach ($config['menu'] as $slug => $label): ?>
          <?php
            if ($slug === 'belepes'  && isset($_SESSION['user']))   continue;
            if ($slug === 'kilepes'  && !isset($_SESSION['user']))  continue;
            if ($slug === 'uzenetek' && !isset($_SESSION['user']))  continue;
          ?>
          <li><a href="index.php?page=<?= $slug ?>"><?= htmlspecialchars($label) ?></a></li>
        <?php endforeach; ?>
      </ul>
    </nav>
  </header>

  <main>
    <?php
    $file = __DIR__ . '/controllers/' . $page . '.php';
    if (file_exists($file)) {
        include $file;
    } else {
        echo '<p>Az oldal nem található!</p>';
    }
    ?>
  </main>

  <footer>
    &copy; <?= date('Y') ?> <?= htmlspecialchars($config['sitename']) ?>
  </footer>
</body>
</html>







