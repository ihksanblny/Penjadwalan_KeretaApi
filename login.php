<?php
// Mulai sesi PHP
session_start();

// Cek apakah ada data yang dikirimkan melalui metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari input form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Simulasikan pengecekan kredensial - Biasanya Anda akan memeriksa kredensial ini di database
    $valid_email = 'user@example.com'; // Contoh email yang valid
    $valid_password = 'password123'; // Contoh password yang valid

    // Validasi kredensial
    if ($email === $valid_email && $password === $valid_password) {
        // Kredensial benar, atur session untuk pengguna
        $_SESSION['email'] = $email;

        // Redirect ke halaman dashboard atau halaman lain setelah login sukses
        header('Location: dashboard.php');
        exit;
    } 
    else {
        // Jika kredensial tidak valid, arahkan kembali ke halaman login dengan pesan error
        $error = "Invalid email or password. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./login.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="login">
            <div class="login__content">
                <img class="login__img" src="assets/kereta3.png" alt="Login image" />
                <form class="login__form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <div>
                        <h1 class="login__title">
                            <span>Welcome</span> Back
                        </h1>
                        <p class="login__description">
                            Welcome! Please login to continue.
                        </p>
                    </div>
                    <div>
                        <div class="login__inputs">
                            <div>
                                <label for="email" class="login__label">Email</label>
                                <input class="login__input" type="email" id="email" name="email" placeholder="Enter your email address" required />
                            </div>
                            <div>
                                <label for="password" class="login__label">Password</label>
                                <div class="login__box">
                                    <input class="login__input" type="password" id="password" name="password" placeholder="Enter your password" required />
                                </div>
                            </div>
                        </div>
                        <div class="login__check">
                            <label class="login__check-label" for="check">
                                <input class="login__check-input" type="checkbox" id="check" />
                                <i class="ri-check-line login__check-icon"></i>
                                Remember me
                            </label>
                        </div>
                    </div>
                    <div>
                        <div class="login__buttons">
                            <button type="submit" class="login__button">Log In</button>
                            <button class="login__button login__button-ghost">Sign Up</button>
                        </div>
                        <a class="login__forgot" href="#">Forgot Password?</a>
                        <?php
                        // Tampilkan pesan error jika login gagal
                        if (isset($error)) {
                            echo '<p class="error-message">' . $error . '</p>';
                        }
                        ?>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="/login.js"></script>
</body>
</html>
