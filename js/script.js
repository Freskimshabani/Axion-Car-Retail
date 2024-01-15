const menuButtonOpen = document.getElementById('mobileMenuButton');
const menuButtonClose = document.getElementById('closeMenuButton');

const navMenu = document.getElementById('mobileNavMenu');

menuButtonOpen.addEventListener('click', () => {
    navMenu.style.transform = 'translateX(0%)';
});

menuButtonClose.addEventListener('click', () => {
    console.log(menuButtonClose);
    navMenu.style.transform = 'translateX(100%)';
});

const track = document.querySelector('.image-carousel-images');
const trackImages = document.querySelectorAll('.image-carousel-image');

const nextButton = document.querySelector('.carousel-button-next');
const prevButton = document.querySelector('.carousel-button-prev');

const trackImageWidth = trackImages[0].getBoundingClientRect().width;

const setTrackImagePosition = (slide, index) => {
    slide.style.left = trackImageWidth * index + 'px';
}

trackImages.forEach(setTrackImagePosition);

const moveToTrackImage = (currentTrackImage, targetTrackImage) => {
    currentTrackImage.style.transform = 'translateX(-' + targetTrackImage.style.left + ')';
    targetTrackImage.style.transform = 'translateX(-' + targetTrackImage.style.left + ')';

    currentTrackImage.classList.remove('current-carousel-image');
    targetTrackImage.classList.add('current-carousel-image');
}

nextButton.addEventListener('click', () => {
    const currentTrackImage = track.querySelector('.current-carousel-image');
    const nextTrackImage = currentTrackImage.nextElementSibling;

    moveToTrackImage(currentTrackImage, nextTrackImage);
});

prevButton.addEventListener('click', () => {
    const currentTrackImage = track.querySelector('.current-carousel-image');
    const prevTrackImage = currentTrackImage.previousElementSibling;

    moveToTrackImage(currentTrackImage, prevTrackImage);
});

const cardTrack = document.querySelector('.card-carousel-cards');
const cards = document.querySelectorAll('.card-carousel-card');

const cardButtonNext = document.querySelector('#homeOffersCarouselRight');
const cardButtonPrev = document.querySelector('#homeOffersCarouselLeft');

const cardWidth = cards[0].getBoundingClientRect().width;

const setCardPosition = (slide, index) => {
    slide.style.left = cardWidth * index + 'px';
}

cards.forEach(setCardPosition);

const moveToCard = (currentCard, targetCard) => {
    currentCard.style.transform = 'translateX(-' + targetCard.style.left + ')';
    targetCard.style.transform = 'translateX(-' + targetCard.style.left + ')';

    currentCard.classList.remove('current-carousel-card');
    targetCard.classList.add('current-carousel-card');
}

cardButtonNext.addEventListener('click', () => {
    const currentCard = cardTrack.querySelector('.current-carousel-card');
    const nextCard = currentCard.nextElementSibling;

    moveToCard(currentCard, nextCard);
});

cardButtonPrev.addEventListener('click', () => {
    const currentCard = cardTrack.querySelector('.current-carousel-card');
    const prevCard = currentCard.previousElementSibling;

    moveToCard(currentCard, prevCard);
});
const faqButtons = document.querySelectorAll('[data-scroll-to]');
const faqContentMenuButton = document.getElementById('faqContentMenuButton');
const faqMenu = document.getElementById('homeFAQContentMenu');


faqContentMenuButton.addEventListener('click', () => {
    faqMenu.style.transform = 'translateX(0%)';
})

faqButtons.forEach(button => {
    button.addEventListener('click', () => {
        var computedStyle = window.getComputedStyle(faqContentMenuButton);
        var displayValue = computedStyle.getPropertyValue('display');
        let sectionId = button.getAttribute('data-scroll-to');
        let section = document.getElementById(sectionId);
        let faqScrollSection = document.getElementById('homeFAQContentContainer');
        if (displayValue !== 'none') {
            faqMenu.style.transform = 'translateX(100%)';
        } else {
            faqMenu.style.transform = 'translateX(0)';
        }

        if (section && faqScrollSection) {
            let rect = section.getBoundingClientRect();
            let middleOfSection = rect.top + rect.height / 2;
            let middleOfContainer = faqScrollSection.clientHeight / 2;
            let scrollTop = middleOfSection - middleOfContainer + faqScrollSection.scrollTop;

            faqScrollSection.scrollTop = scrollTop;
        }
    })
});

