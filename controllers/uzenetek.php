<?php

if (!isset($_SESSION['user'])) {
    echo '<p>Kérlek, jelentkezz be az üzenetek megtekintéséhez.</p>';
    return;
}

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

$stmt = $pdo->query("
    SELECT nev, szoveg, created_at 
      FROM uzenetek 
  ORDER BY created_at DESC
");
$uzenetek = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<section>
  <h2>Üzenetek</h2>
  <?php if (empty($uzenetek)): ?>
    <p>Még nincs egyetlen üzenet sem.</p>
  <?php else: ?>
    <table border="1" cellpadding="8" cellspacing="0">
      <thead>
        <tr>
          <th>Küldő</th>
          <th>Üzenet</th>
          <th>Dátum</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($uzenetek as $u): ?>
          <tr>
            <td><?= htmlspecialchars($u['nev'] ?: 'Vendég') ?></td>
            <td><?= nl2br(htmlspecialchars($u['szoveg'])) ?></td>
            <td><?= date('Y-m-d H:i', strtotime($u['created_at'])) ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  <?php endif; ?>
</section>