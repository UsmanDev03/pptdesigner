<!DOCTYPE html>
<html lang="en" class="scroll-auto">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/app.css') }} ">
  <link rel="stylesheet" href="{{ asset('css/style.css') }} ">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

<style>


</style>
</head>

<body class="overflow-x-hidden">

@include('include.header')
@yield('contant')
@include('include.footer')

<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 4,
        grid: {
            rows: 1,
        },
        spaceBetween: 10,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
</script>
<script>
    // Burger menus
    document.addEventListener('DOMContentLoaded', function () {
    // open
    const burger = document.querySelectorAll('.navbar-burger');
    const menu = document.querySelectorAll('.navbar-menu');

    if (burger.length && menu.length) {
        for (var i = 0; i < burger.length; i++) {
        burger[i].addEventListener('click', function () {
            for (var j = 0; j < menu.length; j++) {
            menu[j].classList.toggle('hidden');
            }
        });
        }
    }

    // close
    const close = document.querySelectorAll('.navbar-close');
    const backdrop = document.querySelectorAll('.navbar-backdrop');

    if (close.length) {
        for (var i = 0; i < close.length; i++) {
        close[i].addEventListener('click', function () {
            for (var j = 0; j < menu.length; j++) {
            menu[j].classList.toggle('hidden');
            }
        });
        }
    }

    if (backdrop.length) {
        for (var i = 0; i < backdrop.length; i++) {
        backdrop[i].addEventListener('click', function () {
            for (var j = 0; j < menu.length; j++) {
            menu[j].classList.toggle('hidden');
            }
        });
        }
    }
    });

    function myFunction() {
  var x = document.getElementById("myDIV");
  var x1 = document.getElementById("myDIV1");
  var x2 = document.getElementById("myDIV2");
  if (x.style.display = "block") {
    x1.style.display = "none";
    x2.style.display = "none";
  } else {
    x1.style.display = "none";

  }
}
function myFunction1() {
  var x = document.getElementById("myDIV");
  var x1 = document.getElementById("myDIV1");
  var x2 = document.getElementById("myDIV2");
  if ( x1.style.display = "block") {
    x.style.display = "none";
    x2.style.display = "none";

  } else {
    x1.style.display = "block";
  }
}
function myFunction2() {
  var x = document.getElementById("myDIV");
  var x1 = document.getElementById("myDIV1");
  var x2 = document.getElementById("myDIV2");
  if ( x2.style.display = "block") {
    x.style.display = "none";
    x1.style.display = "none";
  } else {
    x1.style.display = "block";
  }
}

$(document).ready(function () {
    var silder = $(".owl-carousel");
    silder.owlCarousel({
        autoplay: true,
        speed:1000,
        autoplayTimeout:2000,
        items: 1,
        center: false,
        nav: true,
        margin: 40,
        dots: false,
        loop: true,
        navText: ["<i class='fa fa-arrow-left' aria-hidden='true'></i>", "<i class='fa fa-arrow-right' aria-hidden='true'></i>"],
        responsive: {
            0: {
                items: 1,
            },
            575: { items: 1 },
            768: { items: 2 },
            991: { items: 3 },
            1200: { items: 3 }
        }
    });
});


$(document).ready(function(){
    $('.items').slick({
        dots: true,
        infinite: true,
        speed: 1000,
        autoplay: false,
        autoplaySpeed: 2000,
        slidesToShow: 1,
        slidesToScroll: 1,
        responsive: [
            {
            breakpoint: 1024,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: true
                }
            },
            {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
                }
            },
            {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
                }
            }
        ]
    });
});

</script>
</body>
</html>
