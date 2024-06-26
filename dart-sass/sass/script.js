/*MENU*/
var $hamburger = jQuery(".hamburger");
var $menu = jQuery(".overlay");
var $links = jQuery("#links");

//$.fn.slideFadeToggle  = function(speed, easing, callback) {
//return this.animate({opacity: 'toggle', height: 'toggle'}, speed, easing, callback);
//}; 

$menu.hide();
$links.hide();

$hamburger.on("click", function (e) {
    $hamburger.toggleClass("is-active")
    $menu.slideToggle('slow', function (e) {
        $links.fadeToggle();
    });
    if (TRUE) {
        $hamburger.addClass("is-active");
    } else {
        $hamburger.removeClass("is-active");
    }
});



/*EFFET FADE IN SUR TOUTES LES SECTIONS*/
const threshold = .1
const options = {
    root: null,
    rootMargin: '0px',
    threshold
}

const handleIntersect = function (entries, observer) {
    entries.forEach(function (entry) {
        if (entry.intersectionRatio > threshold) {
            entry.target.classList.remove('reveal')
            observer.unobserve(entry.target)
        }
    })
}

document.documentElement.classList.add('reveal-loaded')

window.addEventListener("DOMContentLoaded", function () {
    const observer = new IntersectionObserver(handleIntersect, options)
    const targets = document.querySelectorAll('.reveal')
    targets.forEach(function (target) {
        observer.observe(target)
    })
})


/*ANIMATION DES TITRES*/
const sectionTitles = document.querySelectorAll('.section-title');

// Parcours des titres de section et création de l'animation pour chaque titre
sectionTitles.forEach((title) => {
    gsap.from(title, {
        opacity: 0, // Opacité de départ à 0
        y: 50, // Déplacement de 50px vers le bas
        duration: 1, // Durée de l'animation en secondes
        scrollTrigger: {
            trigger: title,
            start: 'top 80%', // Commence l'animation lorsque le haut du titre est à 80% de la vue
            end: '+=100', // Se termine 100px après le début du titre
            toggleActions: 'play none none reverse', // Contrôle de l'animation
        },
    });
});


/*SWIPER DES PERSONNAGES*/
const swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    spaceBetween: 50,
    speed: 1000,


    coverflowEffect: {
        rotate: 60,
        stretch: 0,
        depth: 100,
        slideShadows: false,
    },

    slidesPerView: "auto",
});


/*TEMPLATE NUAGES*/
/*déplacer les nuages horizontalement en fonction du défilement de la page.*/

const clouds = document.querySelectorAll('.cloud');
let animation;

function startCloudAnimation() {
    animation = gsap.to("#clouds", {
        x: -(document.getElementById("clouds").offsetWidth - document.getElementById("place").offsetWidth),
        duration: 10,
        repeat: -1,
        ease: "linear"
    });
}

function stopCloudAnimation() {
    if (animation) {
        animation.kill(); // Stop the animation
    }
}

function checkClouds() {
    const cloudsRect = document.getElementById("clouds").getBoundingClientRect();
    if (cloudsRect.top < window.innerHeight && cloudsRect.bottom > 0) {
        startCloudAnimation();
    } else {
        stopCloudAnimation();
    }
}

window.addEventListener('scroll', checkClouds);
