<?php

$uzenet = "";

// Csak bejelentkezett felhasználó tölthet fel képet
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SESSION['user'])) {
    if (isset($_FILES['kep']) && $_FILES['kep']['error'] === UPLOAD_ERR_OK) {
        $fajlnev = $_FILES['kep']['name'];
        $tmp = $_FILES['kep']['tmp_name'];
        $kiterjesztes = strtolower(pathinfo($fajlnev, PATHINFO_EXTENSION));

        $engedelyezett = ['jpg', 'jpeg', 'png', 'gif'];
        if (in_array($kiterjesztes, $engedelyezett)) {
            $cel = "uploads/" . uniqid() . "." . $kiterjesztes;
            move_uploaded_file($tmp, $cel);
            $uzenet = "Sikeres feltöltés!";
        } else {
            $uzenet = "Csak kép fájlokat lehet feltölteni!";
        }
    } else {
        $uzenet = "Hiba a feltöltés során!";
    }
}

// Meglévő képek listázása
$kepek = glob("uploads/*.{jpg,jpeg,png,gif}", GLOB_BRACE);
?>

<section>
  <h2>Képgaléria</h2>

  <?php if ($uzenet): ?>
    <p style="color:green;"><?= htmlspecialchars($uzenet) ?></p>
  <?php endif; ?>

  <?php if (isset($_SESSION['user'])): ?>
  <form method="post" enctype="multipart/form-data">
    <label>Kép kiválasztása:</label>
    <input type="file" name="kep" accept="image/*" required>
    <button type="submit">Feltöltés</button>
  </form>
  <?php else: ?>
    <p>Kérlek jelentkezz be a képfeltöltéshez.</p>
  <?php endif; ?>

  <div style="display:flex; flex-wrap:wrap; gap:10px; margin-top:20px;">
    <?php foreach ($kepek as $kep): ?>
      <div>
        <img src="<?= $kep ?>" alt="Kép" style="width:200px; border-radius:6px; box-shadow:0 0 4px #999;">
      </div>
    <?php endforeach; ?>
  </div>
</section>