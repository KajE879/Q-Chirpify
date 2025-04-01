<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="main.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
</head>
<body>
    <div class="background">
        <div class="login-container">
            <img src="img/logo.png" alt="Q logo">
            <h2>Sign up</h2>
            <form action="register.php" method="post">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="email" name="email" placeholder="E-mail" required>
                <button type="submit">Register</button>
                <p>Already have an account? <a href="inlog.php">Log in</a></p>
            </form>
        </div>
    </div>
</body>
</html>