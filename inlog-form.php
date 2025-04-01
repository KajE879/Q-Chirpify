<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="main.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
</head>
<body>
    <div class="background">
        <div class="login-container">
            <img src="img/logo.png" alt="Q logo">
            <h2>Login</h2>
            <form action="inlog.php" method="post">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Login</button>
                <p>Don’t have an account? <a href="register-form.php">Sign up</a></p>
            </form>
        </div>
    </div>
</body>
</html>