<?php
// controllers/belepes.php
session_start();

try {
    $pdo = new PDO(
        'mysql:host=localhost;dbname=adatbf;charset=utf8mb4',
        'adatbf','Gamfweb2025!',
        [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]
    );
} catch (PDOException $e) {
    die("Adatbázis-kapcsolódási hiba: ".$e->getMessage());
}

$hiba = '';
$regHiba = '';
$regSiker = '';

// -------------------------
// Belépés
// -------------------------
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');

    $stmt = $pdo->prepare('SELECT * FROM users WHERE username = :u');
    $stmt->execute([':u'=>$username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user'] = [
          'username' => $user['username'],
          'fullname' => $user['fullname'] ?? $user['username']
        ];
        header('Location: index.php?page=home');
        exit;
    } else {
        $hiba = "Hibás felhasználónév vagy jelszó!";
    }
}

// -------------------------
// Regisztráció
// -------------------------
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register'])) {
    $regu = trim($_POST['reg_username'] ?? '');
    $regp = trim($_POST['reg_password'] ?? '');

    if (strlen($regu) < 3) {
        $regHiba = "A felhasználónév legyen legalább 3 karakter!";
    } elseif (strlen($regp) < 6) {
        $regHiba = "A jelszó legyen legalább 6 karakter!";
    } else {
        $hash = password_hash($regp, PASSWORD_DEFAULT);
        $stmt = $pdo->prepare('INSERT INTO users (username,password) VALUES (:u,:p)');
        try {
            $stmt->execute([':u'=>$regu, ':p'=>$hash]);
            $regSiker = "Sikeres regisztráció! Most jelentkezz be!";
        } catch (PDOException $e) {
            if ($e->getCode() === '23000') {
                $regHiba = "Ez a felhasználónév már létezik.";
            } else {
                $regHiba = "Adatbázis hiba: " . $e->getMessage();
            }
        }
    }
}
?>

<section>
  <h2>Belépés</h2>
  <?php if ($hiba): ?>
    <p style="color:red;"><?= htmlspecialchars($hiba) ?></p>
  <?php endif; ?>
  <form method="post">
    <label>Felhasználónév:</label><br>
    <input type="text" name="username" required><br><br>
    <label>Jelszó:</label><br>
    <input type="password" name="password" required><br><br>
    <button type="submit" name="login">Belépés</button>
  </form>

  <hr>

  <h2>Regisztráció</h2>
  <?php if ($regHiba): ?>
    <p style="color:red;"><?= htmlspecialchars($regHiba) ?></p>
  <?php elseif ($regSiker): ?>
    <p style="color:green;"><?= htmlspecialchars($regSiker) ?></p>
  <?php endif; ?>
  <form method="post">
    <label>Felhasználónév:</label><br>
    <input type="text" name="reg_username" required><br><br>
    <label>Jelszó:</label><br>
    <input type="password" name="reg_password" required><br><br>
    <button type="submit" name="register">Regisztráció</button>
  </form>
</section>