<?php
// controllers/belepes.php

// Belépés kezelése
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');
    
    if ($username === 'teszt' && $password === 'titok') { 
        // Ideiglenes próba: ha felhasználónév 'teszt' és jelszó 'titok'
        $_SESSION['user'] = [
            'username' => $username,
            'fullname' => 'Teszt Elek' // majd később adatbázisból jön
        ];
        header('Location: index.php?page=home');
        exit;
    } else {
        $hiba = "Hibás belépési adatok!";
    }
}

// Regisztráció kezelése
if (isset($_POST['register'])) {
    // Regisztrációkor most még csak visszajelzünk
    $regisztralt = true;
}
?>

<section>
    <h2>Belépés vagy Regisztráció</h2>

    <?php if (!empty($hiba)) : ?>
        <p style="color:red;"><?= htmlspecialchars($hiba) ?></p>
    <?php endif; ?>

    <form method="post">
        <label>Felhasználónév:</label><br>
        <input type="text" name="username" required><br><br>

        <label>Jelszó:</label><br>
        <input type="password" name="password" required><br><br>

        <button type="submit">Belépés</button>
    </form>

    <hr>

    <h3>Új felhasználó vagy?</h3>
    <form method="post">
        <label>Válassz felhasználónevet:</label><br>
        <input type="text" name="reg_username" required><br><br>

        <label>Válassz jelszót:</label><br>
        <input type="password" name="reg_password" required><br><br>

        <button type="submit" name="register">Regisztráció</button>
    </form>

    <?php if (!empty($regisztralt)) : ?>
        <p style="color:green;">Sikeres regisztráció! Most jelentkezz be!</p>
    <?php endif; ?>
</section>