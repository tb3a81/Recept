<?php
try {
    $pdo = new PDO(
        'mysql:host=localhost;dbname=adatbf;charset=utf8mb4',
        'adatbf',
        'Gamfweb2025!',
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
} catch (PDOException $e) {
    die("Adatbázis‐kapcsolódási hiba: " . $e->getMessage());
}

$hibak = [];
$siker = false;
$nev = $email = $szoveg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nev    = trim($_POST['nev'] ?? '');
    $email  = trim($_POST['email'] ?? '');
    $szoveg = trim($_POST['szoveg'] ?? '');

    if (mb_strlen($nev) < 5) {
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
            'INSERT INTO uzenetek (nev, email, szoveg) 
             VALUES (:nev, :email, :szoveg)'
        );
        $stmt->execute([
            ':nev'    => $nev,
            ':email'  => $email,
            ':szoveg' => $szoveg,
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

    <form id="kapcsolatForm" method="post">
      <label for="nev">Név:</label>
      <input  id="nev"   name="nev"   type="text" required value="<?= htmlspecialchars($nev) ?>">

      <label for="email">E-mail:</label>
      <input  id="email" name="email" type="email" required value="<?= htmlspecialchars($email) ?>">

      <label for="szoveg">Üzenet:</label>
      <textarea id="szoveg" name="szoveg" rows="5" required><?= htmlspecialchars($szoveg) ?></textarea>

      <button id="kuld" type="submit">Küldés</button>
    </form>
  <?php endif; ?>
</section>