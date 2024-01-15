<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <?php include('components/head.php') ?>
</head>

<body>
    <?php include('components/navbar.php') ?>

    <main>
        <header class="section-style">
            <div id="headerHeading" class="header-heading">
                CONTACT
                <span class="logo-span">
                    <?php include('components/logo.php') ?>
                </span>
            </div>
            <div id="headerCarousel" class="image-carousel-container">
                <div id="headerCarouselImages" class="image-carousel-images">
                    <img src="img/header-carousel/header-carousel-9.webp" alt="image1"
                        class="image-carousel-image img-style current-carousel-image">
                </div>
            </div>
        </header>
        <section id="contactSection" class="section-style">
            <h2 class="section-heading">
                CONTACT US
            </h2>
            <div id="contactSectionContent" class="section-content">
                <div id="contactButtons" class="contact-group">
                    <a class="contact-link" href="https://www.instagram.com">
                        <button class="default-button button-style">
                            <i class="fi fi-brands-instagram"></i>
                        </button>
                    </a>
                    <a class="contact-link" href="https://www.facebook.com">
                        <button class="default-button button-style">
                            <i class="fi fi-brands-facebook"></i>
                        </button>
                    </a>
                    <a class="contact-link" href="https://www.linkedin.com">
                        <button class="default-button button-style">
                            <i class="fi fi-brands-linkedin"></i>
                        </button>
                    </a>
                    <a class="contact-link" href="mailto:info@axion.com">
                        <button class="default-button button-style">
                            <i class="fi fi-rr-envelope"></i>
                        </button>
                    </a>
                </div>
                <div id="contactForm" class="contact-group">
                    <form action="" class="form-style">
                        <span class="input-group">
                            <input type="text" class="input-style" placeholder="Enter Name">
                        </span>
                        <span class="input-group">
                            <input type="email" class="input-style" placeholder="Enter Email">
                        </span>
                        <span class="input-group">
                            <textarea name="" id="" class="textarea-style" placeholder="Your message here"></textarea>
                        </span>
                        <button class="primary-button button-style">SEND MESSAGE</button>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <?php include('components/footer.php') ?>
</body>

</html>