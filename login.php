<?php include('components/head.php') ?>

<?php
include('components/dbconnect.php');

session_start();

if (isset($_POST['login_user'])) {
    $loginUsername = mysqli_real_escape_string($conn, $_POST['usernameLogin']);
    $loginPassword = mysqli_real_escape_string($conn, $_POST['passwordLogin']);

    $loginQuery = "SELECT * FROM user WHERE username = '$loginUsername' AND password = '$loginPassword'";
    $loginResult = mysqli_query($conn, $loginQuery);

    if (mysqli_num_rows($loginResult) == 1) {
        $userRow = mysqli_fetch_assoc($loginResult);
        $_SESSION['username'] = $userRow['username'];
        $_SESSION['profileImage'] = $userRow['profile_image_path'];
        header('location: index.php');
        exit();
    }
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
                    <img src="img/header-carousel/header-carousel-10.webp" alt="image1"
                        class="image-carousel-image img-style current-carousel-image">
                </div>
            </div>
        </header>
        <section class="login-section">
            <form class="form-style" id="loginForm" action="" method="post">
                <span class="logo-span">
                    <?php include('components/logo.php') ?>
                </span>
                <span class="input-group">
                    <input type="text" class="input-style" name="usernameLogin" placeholder="Username..." required>
                </span>
                <span class="input-group">
                    <input type="password" class="input-style" name="passwordLogin" placeholder="Password..." required>
                    <button id="showPassword" class="default-button button-style" type="button">
                        <i class="fi fi-rr-eye-crossed"></i>
                    </button>
                </span>

                <button id="loginButton" name="login_user" class="primary-button button-style">
                    LOGIN
                </button>
                <a href="register.php" class="link-style">CREATE ACCOUNT</a>
            </form>
        </section>
    </main>
</body>

</html>