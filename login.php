<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Favour's SMS</title>
    <link rel="stylesheet" href="styles/style_login.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<body>
    <nav>
        <label for="logo" class="logo">Some School</label>
        <div class="div1">
            <button><a href="index.php">Home</a></button>
            <button><a href="">Contact</a></button>
            <button><a href="">Admissions</a></button>
        </div>
    </nav>
    <div class="whole">
        <h1 class="head1">Login</h1>
        <div id="error_message">
            <?php
                error_reporting(0);
                session_start();
                echo $_SESSION['loginMessage'];
                session_destroy();
            ?>
        </div>
        <br>
        <form action="login_check.php" method="POST">
            <div>
                <label for="username" class="username">Username</label>
                <br>
                <input type="text" name="username" placeholder="Username" class="box" required oninvalid="this.setCustomValidity('Username cannot be left blank')" oninput="this.setCustomValidity('')">
            </div>
            <br>
            <div>
                <label for="password" class="password">Password</label>
                <br>
                <input type="password" name="password" id="password" placeholder="Password" class="box" required oninvalid="this.setCustomValidity('Enter your password')" oninput="this.setCustomValidity('')">
                <i class="far fa-eye" id="togglePassword"></i>
                <a href="contact.php" class="link1">Forgot password? Contact administrator</a>
            </div>
            <br>
            <div>
                <input type="submit" value="Login" class="submit">
            </div>
        </form>
    </div>

    <script>
        const password = document.querySelector('#password');
        const icon = document.querySelector('#togglePassword');
        icon.addEventListener('click', function (e) {
            //toggle password visibility
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            //toggle icon
            this.classList.toggle('fa-eye-slash')
        });
    </script>
</body>
</html>