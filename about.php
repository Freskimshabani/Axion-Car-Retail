<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <?php include('components/head.php') ?>
</head>

<body>
    <?php include('components/navbar.php') ?>
    <main>
        <header class="section-style">
            <div id="headerHeading" class="header-heading">
                ABOUT
                <span class="logo-span">
                    <?php include('components/logo.php') ?>
                </span>
            </div>
            <div id="headerCarousel" class="image-carousel-container">
                <div id="headerCarouselImages" class="image-carousel-images">
                    <img src="img/header-carousel/header-carousel-8.webp" alt="image1"
                        class="image-carousel-image img-style current-carousel-image">
                </div>
            </div>
        </header>
        <section id="aboutSection" class="section-style">
            <h2 class="section-heading">
                ABOUT US
            </h2>
            <div id="aboutSectionContent" class="section-content">
                <p style="text-transform: uppercase;">
                    Welcome to Axion – your automotive hub for seamless transactions. At Axion, we connect car
                    enthusiasts, offering a platform to buy, sell, rent, and repair vehicles. Our mission is to simplify
                    and elevate your car experience, providing a one-stop destination for all your automotive needs.
                </p>
                <br>
                <p style="text-transform: uppercase;">
                    At Axion, we believe in creating a dynamic automotive ecosystem that goes beyond transactions. We
                    are more than just a platform; we are a community of car enthusiasts fostering a passion for
                    automobiles. Whether you're looking to find your dream car, list your vehicle for sale, rent a
                    unique ride, or book professional car repairs, Axion is the driving force behind your automotive
                    journey.
                </p>
            </div>

        </section>
    </main>
    <?php include('components/footer.php') ?>
</body>

</html>