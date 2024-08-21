<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/login.css">
    <title>Login page</title>
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form method="post" action="login_process.php">
                    <h2>Login</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="text" name="username" required>
                        <label for="">Username</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="password" required>
                        <label for="">Password</label>
                    </div>
                    <button type="submit">Log in</button>
                    <div class="register">
                        <p>Don't have an account? <a href="signup_pro.php">Sign up</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  
</body>
</html>