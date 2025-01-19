<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Virtual Try On - Login</title>
    <link rel="stylesheet" href="../login/loginstyle.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
    <div class="container">

        <div class="form-box login">

            <form action="../login/loginprocess.php" method="post">

                <div class="logo">
                    <img src="../images/logo.png" />
                  </div>

                <h1>Login</h1>
                <div class="input-box">
                    <input type="text" name="email" placeholder="Email Address" required>
                    <i class='bx bxs-envelope'></i>
                </div>
                <div class="input-box">
                    <input type="password" name="password" placeholder="Password" required>
                    <i class='bx bx-lock-alt'></i>
                </div>
                <div class="forgot-link">
                    <p>Forgot password?</p>     
                </div>

                <button type="submit" class="btn">Login</button>
            </form>
        </div>

        <div class="form-box register">
            <form action="../login/registerprocess.php" method="POST">

                <div class="logo">
                    <img src="../images/logo.png" />
                </div>

                <h1>Registration</h1>
                <div class="input-box">
                    <input type="text" name="fullname" placeholder="Full Name" required>
                    <i class='bx bxs-user'></i>
                </div>

                <div class="input-box">
                    <input type="text" name="email" placeholder="Email Address" required>
                    <i class='bx bxs-envelope'></i>
                </div>

                <div class="input-box">
                    <input type="date" name="birthdate" placeholder="dd/mm/yyyy" required>
                    <i class='bx bxs-calendar'></i>
                </div>

                <div class="input-box">
                    <input type="password" name="password" placeholder="Password" required>
                    <i class='bx bx-lock-alt'></i>
                </div>
                
                <button type="submit" class="btn">Register</button>
            </form>
        </div>

        <div class="toggle-box">
            <div class="toggle-panel toggle-left">
                <h1>Welcome!</h1>
                <p>Don't have an account?</p>
                <button class="btn register-btn">Register</button>
            </div>

            <div class="toggle-panel toggle-right">
                <h1>Welcome!</h1>
                <p>Already have an account?</p>
                <button class="btn login-btn">Login</button>
            </div>

        </div>

    </div>


    <script src="../login/login.js"></script>
</body>
</html>
