<?php include('components/head.php') ?>

<?php
include('components/dbconnect.php');
session_start();

if (isset($_POST['register_user'])) {
    $registerUsername = $_POST['usernameRegister'];
    $registerEmail = $_POST['usernameRegister'];
    $registerPassword = $_POST['passwordRegister'];
    $confirmPassword = $_POST['confirmPassword'];
    $registerProfileImage = $_POST['profileRegister'];

    $insertUserWithProfile = "INSERT INTO user (username, email, password, profile_image_path) VALUES ('$registerUsername', '$registerEmail', '$registerPassword', '$registerProfileImage')";
    $insertUserNoProfile = "INSERT INTO user (username, email, password) VALUES ('$registerUsername', '$registerEmail', '$registerPassword')";

    if ($confirmPassword == $registerPassword) {
        if (empty($registerProfileImage)) {
            mysqli_query($conn, $insertUserNoProfile);
        } else {
            mysqli_query($conn, $insertUserWithProfile);
        }
    }

    header('location: index.php');
    exit();
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="js/showPassword.js" defer></script>
</head>

<body>
    <main id="loginMain">
        <header class="section-style">
            <div id="headerHeading" class="header-heading">
            </div>
            <div id="headerCarousel" class="image-carousel-container">
                <div id="headerCarouselImages" class="image-carousel-images">
                    <img src="img/header-carousel/header-carousel-11.webp" alt="image1"
                        class="image-carousel-image img-style current-carousel-image">
                </div>
            </div>
        </header>
        <section class="login-section">
            <form class="form-style" id="registerForm" action="" method="post">
                <span class="logo-span">
                    <?php include('components/logo.php') ?>
                </span>
                <span class="input-group">
                    <input type="text" class="input-style" name="usernameRegister" placeholder="Username..." required>
                </span>
                <span class="input-group">
                    <input type="text" class="input-style" name="emailRegister" placeholder="Email..." required>
                </span>
                <span class="input-group">
                    <input type="password" class="input-style" name="passwordRegister" placeholder="Password..."
                        required>
                    <button id="showPassword" class="default-button button-style" type="button">
                        <i class="fi fi-rr-eye-crossed"></i>
                    </button>
                </span>
                <span class="input-group">
                    <input type="password" class="input-style" name="confirmPassword" placeholder="Password..."
                        required>
                </span>
                <span class="input-group">
                    <input type="file" class="input-style" name="profileRegister" placeholder="Upload Profile...">
                </span>

                <button id="registerButton" name="register_user" class="primary-button button-style">
                    CREATE ACCOUNT
                </button>
                <a href="login.php" class="link-style">LOGIN</a>
            </form>
        </section>
    </main>
</body>

</html>