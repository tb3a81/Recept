<?php
// controllers/kapcsolat.php


// PDO csatlakozás (állítsd be a saját adatbázis-kredencialistád)
$pdo = new PDO('mysql:host=localhost;dbname=receptdb;charset=utf8mb4','root','',[
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

$hibak = [];
$siker = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nev    = trim($_POST['nev']    ?? '');
    $email  = trim($_POST['email']  ?? '');
    $szoveg = trim($_POST['szoveg'] ?? '');

    // Szerveroldali validáció
    if (strlen($nev) < 5) {
        $hibak[] = 'A névnek legalább 5 karakter hosszúnak kell lennie.';
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $hibak[] = 'Érvénytelen e-mail cím.';
    }
    if ($szoveg === '') {
        $hibak[] = 'Az üzenet nem lehet üres.';
    }

    if (empty($hibak)) {
        $stmt = $pdo->prepare(
            'INSERT INTO uzenetek (nev, email, szoveg) VALUES (:nev,:email,:szoveg)'
        );
        $stmt->execute([
            ':nev'    => $nev,
            ':email'  => $email,
            ':szoveg' => $szoveg
        ]);
        $siker = true;
    }
}
?>
<section>
  <h2>Kapcsolat</h2>

  <?php if ($siker): ?>
    <p style="color:green;">Köszönjük, az üzenetedet elküldtük!</p>
    <h3>Az elküldött adatok:</h3>
    <ul>
      <li><strong>Név:</strong> <?= htmlspecialchars($nev) ?></li>
      <li><strong>E-mail:</strong> <?= htmlspecialchars($email) ?></li>
      <li><strong>Üzenet:</strong> <?= nl2br(htmlspecialchars($szoveg)) ?></li>
    </ul>
  <?php else: ?>
    <?php if ($hibak): ?>
      <ul style="color:red;">
        <?php foreach ($hibak as $hiba): ?>
          <li><?= htmlspecialchars($hiba) ?></li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>

    <form id="kapcsolatForm" method="post" onsubmit="return ellenorizKapcsolat();">
      <label>Név:</label><br>
      <input type="text" id="nev" name="nev" required><br><br>

      <label>E-mail:</label><br>
      <input type="email" id="email" name="email" required><br><br>

      <label>Üzenet:</label><br>
      <textarea id="szoveg" name="szoveg" rows="5" required></textarea><br><br>

      <button type="submit" id="kuld">Küldés</button>
      <button type="button" onclick="ellenorizKapcsolat();">Ellenőriz</button>
    </form>
  <?php endif; ?>
</section>