<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login1.css">
    <script>src="login.js"</script>
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="login">
            <div class="login__content">
                <img class="login__img" src="assets/kereta3.png" alt="Login image" />
                <form class="login__form" action="login-proses.php" method="post" >
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
                                <input class="login__input" type="email" name="email" placeholder="Enter your email address" required />
                            </div>
                            <div>
                                <label for="password" class="login__label">Password</label>
                                <div class="login__box">
                                    <input class="login__input" type="password"name="password" placeholder="Enter your password" required />
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
                            <button type="submit" class="login__button" name="login">Log In</button>
                            <button class="login__button login__button-ghost"><a href = "register.php">Sign Up</a></button>
                        </div>
                        <a class="login__forgot" href="#">Forgot Password?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>
