jQuery(document).ready(function ($) {
    function toggleMenu() {
        $(".menu-btn").toggleClass("hidden");
        $(".x-btn").toggleClass("hidden");
        $(".menu").toggleClass("open");
    }

    $(document).on("click", function (event) {
        var burgerNav = $(".burger-nav");
        if (event.target == burgerNav || burgerNav.has(event.target).length) {
            toggleMenu();
        } else {
            var menuContainer = $(".menu-header-menu-container");
            if (menuContainer !== event.target && !menuContainer.has(event.target).length && $(".menu").hasClass("open")) {
                toggleMenu();
            }
        }
    });

    var accordion = document.querySelectorAll('.accordion-container');

    for (var i = 0; i < accordion.length; i++) {
        accordion[i].addEventListener('click', function () {
            var activeContainers = document.querySelectorAll('.accordion .accordion-container.active');
            for (var j = 0; j < activeContainers.length; j++) {
                if (this !== activeContainers[j]) {
                    activeContainers[j].classList.remove('active');
                }
            }
            this.classList.toggle('active');
        })
    }

    new Swiper(".mySwiper", {
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            renderBullet: function (index, className) {
                return '<span class="' + className + '">' + (index + 1) + "</span>";
            },
        },
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        },
    });
});

