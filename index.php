<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Axion - Car Retail</title>
    <?php include('components/head.php') ?>
</head>

<body>
    <?php include('components/navbar.php') ?>
    <main>
        <header class="section-style">
            <div id="headerHeading" class="header-heading">
                THIS IS
                <span class="logo-span">
                    <?php include('components/logo.php'); ?>
                </span>
                <button id="headerButton" class="primary-button button-style">LETS RIDE</button>
            </div>
            <span id="headerCarouselButtons" class="image-carousel-buttons">
                <button id="headerCarouselLeft" class="carousel-button carousel-button-prev button-style">
                    <i class="fi fi-rr-arrow-small-left"></i>
                </button>
                <button id="headerCarouselRight" class="carousel-button carousel-button-next button-style">
                    <i class="fi fi-rr-arrow-small-right"></i>
                </button>
            </span>
            <div id="headerCarousel" class="image-carousel-container">
                <div id="headerCarouselImages" class="image-carousel-images">
                    <img src="img/header-carousel/header-carousel-1.webp" alt="image1"
                        class="image-carousel-image img-style current-carousel-image">
                    <img src="img/header-carousel/header-carousel-2.webp" alt="image2"
                        class="image-carousel-image img-style">
                    <img src="img/header-carousel/header-carousel-3.webp" alt="image3"
                        class="image-carousel-image img-style">
                    <img src="img/header-carousel/header-carousel-4.webp" alt="image4"
                        class="image-carousel-image img-style">
                    <img src="img/header-carousel/header-carousel-5.webp" alt="image5"
                        class="image-carousel-image img-style">
                </div>
            </div>
        </header>
        <section id="homeServices" class="section-style">
            <h2 class="section-heading">
                WHAT WE OFFER
            </h2>
            <div id="homeServicesGrid" class="section-content">
                <div id="homeServicesGridMainImage" class="grid-image-box">
                    <span class="grid-image-description"><a href="buysell.php">BUY / SELL</a></span>
                    <img src="img/grid/home-grid-main-image.webp" alt="" class="grid-image img-style">
                </div>
                <div id="homeServicesGridTopImage" class="grid-image-box">
                    <span class="grid-image-description"><a href="">REPAIRS</a></span>
                    <img src="img/grid/home-grid-top-image.webp" alt="" class="grid-image img-style">
                </div>
                <div id="homeServicesGridBottomImage" class="grid-image-box">
                    <span class="grid-image-description"><a href="">RENT</a></span>
                    <img src="img/grid/home-grid-bottom-image.webp" alt="" class="grid-image img-style">
                </div>
            </div>
        </section>
        <section id="homeOffers" class="section-style">
            <span id="homeOffersCarouselButtons" class="card-carousel-buttons">
                <button id="homeOffersCarouselLeft" class="carousel-button carousel-button-prev button-style">
                    <i class="fi fi-rr-arrow-small-left"></i>
                </button>
                <button id="homeOffersCarouselRight" class="carousel-button carousel-button-next button-style">
                    <i class="fi fi-rr-arrow-small-right"></i>
                </button>
            </span>
            <h2 class="section-heading">
                NEWEST OFFERS FROM RETAILERS
            </h2>
            <div id="homeOffersContent" class="section-content">
                <div id="homeOffersCarousel" class="card-carousel-container">
                    <div id="homeOffersCarouselCards" class="card-carousel-cards">
                        <div class="card-carousel-card current-carousel-card">
                            <div class="card-carousel-image-box grid-image-box">
                                <span class="grid-image-sticker">USED</span>
                                <span class="grid-image-description"><a href="">MERCEDES - BENZ CLA</a></span>
                                <img src="img/card-carousel/card-carousel-image-1.webp" alt="" class="img-style">
                            </div>
                            <div class="card-carousel-description-box">
                                <div class="card-carousel-description">
                                    <div class="card-carousel-description-item">
                                        <i class="fi fi-rr-dashboard"></i>
                                        <span class="card-carousel-description-span">
                                            150K KM
                                        </span>
                                    </div>
                                    <div class="card-carousel-description-item">
                                        <i class="fi fi-rr-bolt"></i>
                                        <span class="card-carousel-description-span">
                                            302 HP
                                        </span>
                                    </div>
                                    <div class="card-carousel-description-item">
                                        <i class="fi fi-rr-raindrops"></i>
                                        <span class="card-carousel-description-span">
                                            DIESEL
                                        </span>
                                    </div>
                                    <div class="card-carousel-description-item">
                                        <i class="fi fi-rr-calendar-lines"></i>
                                        <span class="card-carousel-description-span">
                                            2021
                                        </span>
                                    </div>
                                </div>
                                <div class="card-carousel-description-buttons">
                                    <button class="primary-button button-style">
                                        CHECK OUT
                                    </button>
                                    <button class="default-button button-style">
                                        BROWSE
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card-carousel-card">
                            <div class="card-carousel-image-box grid-image-box">
                                <span class="grid-image-sticker">USED</span>
                                <span class="grid-image-description"><a href="">VOLKSWAGEN GOLF 7 R</a></span>
                                <img src="img/card-carousel/card-carousel-image-2.webp" alt="" class="img-style">
                            </div>
                            <div class="card-carousel-description-box">
                                <div class="card-carousel-description">
                                    <div class="card-carousel-description-item">
                                        <i class="fi fi-rr-dashboard"></i>
                                        <span class="card-carousel-description-span">
                                            230K KM
                                        </span>
                                    </div>
                                    <div class="card-carousel-description-item">
                                        <i class="fi fi-rr-bolt"></i>
                                        <span class="card-carousel-description-span">
                                            208 HP
                                        </span>
                                    </div>
                                    <div class="card-carousel-description-item">
                                        <i class="fi fi-rr-raindrops"></i>
                                        <span class="card-carousel-description-span">
                                            PETROL
                                        </span>
                                    </div>
                                    <div class="card-carousel-description-item">
                                        <i class="fi fi-rr-calendar-lines"></i>
                                        <span class="card-carousel-description-span">
                                            2017
                                        </span>
                                    </div>
                                </div>
                                <div class="card-carousel-description-buttons">
                                    <button class="primary-button button-style">
                                        CHECK OUT
                                    </button>
                                    <button class="default-button button-style">
                                        BROWSE
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card-carousel-card">
                            <div class="card-carousel-image-box grid-image-box">
                                <span class="grid-image-sticker">USED</span>
                                <span class="grid-image-description"><a href="">AUDI Q8</a></span>
                                <img src="img/card-carousel/card-carousel-image-3.webp" alt="" class="img-style">
                            </div>
                            <div class="card-carousel-description-box">
                                <div class="card-carousel-description">
                                    <div class="card-carousel-description-item">
                                        <i class="fi fi-rr-dashboard"></i>
                                        <span class="card-carousel-description-span">
                                            200K KM
                                        </span>
                                    </div>
                                    <div class="card-carousel-description-item">
                                        <i class="fi fi-rr-bolt"></i>
                                        <span class="card-carousel-description-span">
                                            350 HP
                                        </span>
                                    </div>
                                    <div class="card-carousel-description-item">
                                        <i class="fi fi-rr-raindrops"></i>
                                        <span class="card-carousel-description-span">
                                            DIESEL
                                        </span>
                                    </div>
                                    <div class="card-carousel-description-item">
                                        <i class="fi fi-rr-calendar-lines"></i>
                                        <span class="card-carousel-description-span">
                                            2022
                                        </span>
                                    </div>
                                </div>
                                <div class="card-carousel-description-buttons">
                                    <button class="primary-button button-style">
                                        CHECK OUT
                                    </button>
                                    <button class="default-button button-style">
                                        BROWSE
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="homeFAQ" class="section-style">
            <h2 class="section-heading">
                NEED HELP?
            </h2>
            <div id="homeFAQContent" class="section-content">
                <div id="homeFAQContentButtons" class="faq-content-buttons">
                    <div id="homeFAQContentButtonMenuButton">
                        <button id="faqContentMenuButton" class="faq-content-button button-style">
                            <i class="fi fi-rr-menu-burger"></i>
                        </button>
                    </div>
                    <div id="homeFAQContentMenu" class="faq-content-buttons">
                        <button data-scroll-to="faq" class="faq-content-button button-style">FAQ</button>
                        <button data-scroll-to="contact" class="faq-content-button button-style">CONTACT INFO</button>
                        <button data-scroll-to="feedback" class="faq-content-button button-style">FEEDBACK</button>
                        <button data-scroll-to="assistance" class="faq-content-button button-style">ASSISTANCE</button>
                    </div>
                </div>
                <div id="homeFAQContentContainer" class="faq-content-container">
                    <div id="faq" class="faq-content-container-item">
                        <h3 class="faq-content-container-title">FAQ</h3>
                        <div class="faq-content-container-box">
                            <h4 class="faq-content-container-question">How to list a car for sale on the website?</h4>
                            <p>
                                Visit "Sell Your Car" section, follow easy steps, submit details.
                            </p>
                            <h4 class="faq-content-container-question">Can I rent a car from a private owner?</h4>
                            <p>
                                Yes, browse listings, filter preferences, contact owner, finalize details.
                            </p>
                            <h4 class="faq-content-container-question">What services are provided in "Car Repair"
                                section?</h4>
                            <p>
                                Book professional repair services, enter details, choose time slot.
                            </p>
                        </div>
                    </div>
                    <div id="contact" class="faq-content-container-item">
                        <h3 class="faq-content-container-title">CONTACT</h3>
                    </div>
                    <div id="feedback" class="faq-content-container-item">
                        <h3 class="faq-content-container-title">FEEDBACK</h3>
                    </div>
                    <div id="assistance" class="faq-content-container-item">
                        <h3 class="faq-content-container-title">ASSISTANCE</h3>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include('components/footer.php') ?>
</body>

</html>