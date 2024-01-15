<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy/Sell Cars</title>
    <?php include('components/head.php') ?>
</head>

<body>
    <?php include('components/navbar.php') ?>
    <main>
        <header class="section-style">
            <div id="headerHeading" class="header-heading">
                FIND YOUR DREAM CAR
                <span class="input-group">
                    <input type="text" class="input-style" placeholder="Search...">
                    <button class="primary-button button-style">
                        <i class="fi fi-rr-search"></i>
                    </button>
                </span>
            </div>
            <div id="headerCarousel" class="image-carousel-container">
                <div id="headerCarouselImages" class="image-carousel-images">
                    <img src="img/header-carousel/header-carousel-6.webp" alt="image1"
                        class="image-carousel-image img-style current-carousel-image">
                </div>
            </div>
        </header>
        <section id="buySection" class="section-style">
            <h2 class="section-heading">
                LATEST OFFERS
            </h2>
            <div id="buySectionContent" class="section-content">
                <div id="buySectionContentButtons" class="buy-content-buttons">
                    <div class="buy-content-buttons-top">
                        <button id="filterButton" class="default-button button-style">
                            <i class="fi fi-rr-bars-filter"></i>
                        </button>
                        <span id="buyResults" class="results-span">
                            <span class="result-number">45</span>
                            <span class="result-message">
                                OFFERS FROM RETAILERS
                            </span>
                        </span>
                        <span class='input-group'>
                            <input type="text" class="input-style" placeholder="Search...">
                            <button class="primary-button button-style">
                                <i class="fi fi-rr-search"></i>
                            </button>
                        </span>
                    </div>
                    <div class="buy-content-buttons-side">
                        <button id="sortButton" class="default-button button-style">
                            <i class="fi fi-rr-sort-alt"></i>
                        </button>
                        <button id="backToTopButton" class="default-button button-style">
                            <i class="fi fi-rr-arrow-up"></i>
                        </button>
                    </div>
                </div>
                <div id="buySectionContentCards" class="buy-content-cards">
                    <div class="buy-content-card">
                        <div class="buy-content-card-image-box grid-image-box">
                            <span class="grid-image-sticker">USED</span>
                            <span class="grid-image-description"><a href="">RANGE ROVER</a></span>
                            <img src="img/card-carousel/card-carousel-image-4.webp" alt="" class="img-style">
                        </div>
                        <div class="buy-content-card-description-box">
                            <div class="buy-content-card-description">
                                <div class="card-carousel-description-item">
                                    <i class="fi fi-rr-dashboard"></i>
                                    <span class="card-carousel-description-span">
                                        150K KM
                                    </span>
                                </div>
                                <div class="card-carousel-description-item">
                                    <i class="fi fi-rr-bolt"></i>
                                    <span class="card-carousel-description-span">
                                        306 HP
                                    </span>
                                </div>
                                <div class="card-carousel-description-item">
                                    <i class="fi fi-rr-calendar-lines"></i>
                                    <span class="card-carousel-description-span">
                                        2021
                                    </span>
                                </div>
                                <div class="card-carousel-description-item">
                                    <i class="fi fi-rr-raindrops"></i>
                                    <span class="card-carousel-description-span">
                                        DIESEL
                                    </span>
                                </div>
                                <div class="card-carousel-description-item">
                                    <i class="fi fi-rr-engine"></i>
                                    <span class="card-carousel-description-span">
                                        V6
                                    </span>
                                </div>
                            </div>
                            <div class="buy-content-card-description-buttons">
                                <span class="results-span">
                                    30000$
                                </span>
                                <button class="primary-button button-style">
                                    <i class="fi fi-rr-shopping-cart"></i>
                                </button>
                                <button class="default-button button-style">
                                    <i class="fi fi-rr-bookmark"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="buy-content-card">
                        <div class="buy-content-card-image-box grid-image-box">
                            <span class="grid-image-sticker">USED</span>
                            <span class="grid-image-description"><a href="">VOLKSWAGEN GOLF 7</a></span>
                            <img src="img/card-carousel/card-carousel-image-2.webp" alt="" class="img-style">
                        </div>
                        <div class="buy-content-card-description-box">
                            <div class="buy-content-card-description">
                                <div class="card-carousel-description-item">
                                    <i class="fi fi-rr-dashboard"></i>
                                    <span class="card-carousel-description-span">
                                        270K KM
                                    </span>
                                </div>
                                <div class="card-carousel-description-item">
                                    <i class="fi fi-rr-bolt"></i>
                                    <span class="card-carousel-description-span">
                                        205 HP
                                    </span>
                                </div>
                                <div class="card-carousel-description-item">
                                    <i class="fi fi-rr-calendar-lines"></i>
                                    <span class="card-carousel-description-span">
                                        2017
                                    </span>
                                </div>
                                <div class="card-carousel-description-item">
                                    <i class="fi fi-rr-raindrops"></i>
                                    <span class="card-carousel-description-span">
                                        DIESEL
                                    </span>
                                </div>
                                <div class="card-carousel-description-item">
                                    <i class="fi fi-rr-engine"></i>
                                    <span class="card-carousel-description-span">
                                        1.9 TDI
                                    </span>
                                </div>
                            </div>
                            <div class="buy-content-card-description-buttons">
                                <span class="results-span">
                                    15000$
                                </span>
                                <button class="primary-button button-style">
                                    <i class="fi fi-rr-shopping-cart"></i>
                                </button>
                                <button class="default-button button-style">
                                    <i class="fi fi-rr-bookmark"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="buy-content-card">
                        <div class="buy-content-card-image-box grid-image-box">
                            <span class="grid-image-sticker">USED</span>
                            <span class="grid-image-description"><a href="">AUDI Q8</a></span>
                            <img src="img/card-carousel/card-carousel-image-3.webp" alt="" class="img-style">
                        </div>
                        <div class="buy-content-card-description-box">
                            <div class="buy-content-card-description">
                                <div class="card-carousel-description-item">
                                    <i class="fi fi-rr-dashboard"></i>
                                    <span class="card-carousel-description-span">
                                        220K KM
                                    </span>
                                </div>
                                <div class="card-carousel-description-item">
                                    <i class="fi fi-rr-bolt"></i>
                                    <span class="card-carousel-description-span">
                                        350 HP
                                    </span>
                                </div>
                                <div class="card-carousel-description-item">
                                    <i class="fi fi-rr-calendar-lines"></i>
                                    <span class="card-carousel-description-span">
                                        2021
                                    </span>
                                </div>
                                <div class="card-carousel-description-item">
                                    <i class="fi fi-rr-raindrops"></i>
                                    <span class="card-carousel-description-span">
                                        PETROL
                                    </span>
                                </div>
                                <div class="card-carousel-description-item">
                                    <i class="fi fi-rr-engine"></i>
                                    <span class="card-carousel-description-span">
                                        V8
                                    </span>
                                </div>
                            </div>
                            <div class="buy-content-card-description-buttons">
                                <span class="results-span">
                                    50000$
                                </span>
                                <button class="primary-button button-style">
                                    <i class="fi fi-rr-shopping-cart"></i>
                                </button>
                                <button class="default-button button-style">
                                    <i class="fi fi-rr-bookmark"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="sellSection" class="section-style">
            <h2 class="section-heading">
                SELL YOUR CAR
            </h2>
            <div id="sellSectionContent" class="section-content">
                <div class="sell-section-description">
                    PUT YOUR CAR FOR SALE
                    <span class="highlighted-span">WITH ONLY 5% FEE</span>
                    <span class="button-span">
                        <button class="primary-button button-style">SELL NOW</button>
                    </span>
                </div>
                <div class="grid-image-box">
                    <img src="img/header-carousel/header-carousel-7.webp" alt="" class="img-style">
                </div>
            </div>
        </section>
    </main>
    <?php include('components/footer.php') ?>
</body>

</html>