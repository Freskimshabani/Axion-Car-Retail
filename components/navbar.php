<script src="../js/script.js" defer></script>
<?php
session_start();

if (isset($_SESSION['username'])) {
    echo '<script src="./js/profile.js" defer></script>';
}
if (isset($_GET['log_out'])) {
    session_destroy();
    unset($_SESSION['username']);
    unset($_SESSION['profileImage']);
    header('location: ./index.php');
    exit();
}
?>
<nav>
    <section id="desktopNav" class="nav-section">
        <span id="desktopLogoNav" class="nav-span">
            <?php include('logo.php') ?>
        </span>
        <span id="desktopNavLinks" class="nav-span link-span">
            <a href="./index.php" class="nav-link link-style">HOME</a>
            <a href="./buysell.php" class="nav-link link-style">BUY/SELL</a>
            <a href="./about.php" class="nav-link link-style">ABOUT</a>
            <a href="./contact.php" class="nav-link link-style">CONTACT</a>
        </span>
        <span id="desktopProfile" class="nav-span hide">
            <span id="desktopProfilePicture" class="profile-span">
                <img id="desktopProfileImage"
                    src="<?php echo isset($_SESSION['profileImage']) && !empty($_SESSION['profileImage']) ? "./img/" . $_SESSION['profileImage'] : ' ' ?>"
                    alt="" class="profile-image img-style">
            </span>
            <span id="desktopProfileName" class="profile-span">
                <h3 id="desktopProfileNameDisplay" class="profile-name">
                    <?php echo isset($_SESSION['username']) && !empty($_SESSION['username']) ? $_SESSION['username'] : " " ?>
                </h3>
            </span>
            <form method="get" id="desktopProfileLogout" class="profile-span">
                <button id="desktopLogoutButton" name="log_out" class="error-button button-style">
                    <i class="fi fi-rr-exit"></i></button>
            </form>
        </span>
        <span id="desktopLoginButtonNav" class="nav-span">
            <a href="./login.php" class="link-style">
                <button id="desktopLoginButton" class="primary-button button-style">LOG IN / SIGN UP</button>
            </a>
        </span>
    </section>
    <section id="mobileNav" class="nav-section">
        <span id="mobileLogoNav" class="nav-span">
            <?php include('logo.php') ?>
        </span>
        <button id="mobileMenuButton" class="menu-button button-style">
            <i class="fi fi-rr-bars-sort"></i>
        </button>
    </section>
</nav>
<article id="mobileNavMenu">
    <section id="mobileCloseMenu" class="mobile-menu-section">
        <button id="closeMenuButton" class="menu-button button-style">
            <i class="fi fi-rr-cross"></i>
        </button>
    </section>
    <section id="mobileProfile" class="profile-section mobile-menu-section hide">
        <span id="mobileProfilePicture" class="profile-span">
            <img id="mobileProfileImage"
                src="<?php echo isset($_SESSION['profileImage']) && !empty($_SESSION['profileImage']) ? "./img/" . $_SESSION['profileImage'] : " " ?>"
                alt="" class="profile-image img-style">
        </span>
        <span id="mobileProfileName" class="profile-span">
            <h3 id="mobileProfileNameDisplay" class="profile-name">
                <?php echo isset($_SESSION['username']) && !empty($_SESSION['username']) ? $_SESSION['username'] : " " ?>
            </h3>
        </span>
        <form method="get" id="mobileProfileLogout" class="profile-span">
            <button id="mobileLogoutButton" name="log_out" class="error-button button-style">LOGOUT</button>
        </form>
    </section>
    <section id="mobileMenuLinks" class="mobile-menu-section">
        <a href="./index.php" class="nav-link link-style">HOME</a>
        <a href="./buysell.php" class="nav-link link-style">BUY/SELL</a>
        <a href="./about.php" class="nav-link link-style">ABOUT</a>
        <a href="./contact.php" class="nav-link link-style">CONTACT</a>
    </section>
    <section id="mobileLoginButtonNav" class="mobile-menu-section">
        <a href="./login.php" class="link-style">
            <button id="mobileLoginButton" class="primary-button button-style">LOGIN / REGISTER</button>
        </a>
    </section>
</article>