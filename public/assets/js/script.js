var slider1 = new Swiper ('.slider1', {
  loop: true,
  speed: 1000,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev"
  },
});

var slider2 = new Swiper ('.slider2', {
  // loop: true,
  speed: 900,
  slidesPerView: 4,
  spaceBetween: 20,
  speed: 1000,
  // autoplay: {
  //   delay: 3000,
  //   disableOnInteraction: false,
  // },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev"
  },
});

// owl carousel
$(document).ready(function () {
  var owl = $('.owl-1');
  var owlone = $('.owl-2');
  var owlonetwo = $('.owl-2-1');
  var owltwo = $('.owl-3');
  var owlthree = $('.owl-4');
  var owlfour = $('.owl-5');
  var owlfive = $('.owl-6');
  var owlsix = $('.owl-7');
  var owlseven = $('.owl-8');
  var owleight = $('.owl-9');



  owl.owlCarousel({
  loop: true,
  slideSpeed: 3000,
    margin: 0,
    nav: false,
    dots: false,
    items: 1,
    autoplay:2500,
    smartSpeed: 1000,
 
 
    
  });

  owlone.owlCarousel({
    loop: true,
    margin: 0,
    nav: false,
    dots: true,
    items: 4,
    autoplay:true,
    autoplayTimeout:1000,
    autoplayHoverPause:true
    
  });

  owlonetwo.owlCarousel({
    loop: false,
    margin: 0,
    nav: false,
    dots: false,
    items: 1,
    onChanged: function (event) {
      if (!event.namespace) {
        return;
      }
      var slides = event.relatedTarget;
      $('.slider-counter').text(slides.relative(slides.current()) + 1 + '/' + slides.items().length);
      console.log(slides.relative((slides.current())+1) +'/'+ (slides.items().length));
    }
  });

  owltwo.owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: false,
    lazyLoad: true,
    // items: 1,

    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
        nav: false
      },
      360: {
        items: 1,
        nav: false
      },
      600: {
        items: 2,
        nav: false
      },
      1025: {
        items: 3,
        nav: false,

      },
      1360: {
        items: 4,
        nav: false,

      },
    }
  });

  owlthree.owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: false,
    // items: 1,

    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
        nav: false
      },
      700: {
        items: 2,
        nav: false
      },
      900: {
        items: 2,
        nav: false
      },
      1025: {
        items: 3,
        nav: false,

      },

    }
  });

  owlfour.owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: false,
    items: 1,
  });

  owlfive.owlCarousel({
    loop: true,
    margin: 0,
    nav: false,
    dots: true,
    items: 1,
  });

  owlsix.owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: false,

    // items: 1,

    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
        margin: 10,
        autoWidth: false,
        nav: false
        // mergeFit:true
      },
      600: {
        items: 2,
        autoWidth: false,
        nav: false
      },
      900: {
        items: 2,
        nav: false
      },
      1025: {
        items: 3,
        nav: false,

      },

    }
  });

  owlseven.owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: false,

    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
        margin: 10,
        nav: false
        // mergeFit:true
      },
      300: {
        items: 3,
        autoWidth: true,
        nav: false
      },
      750: {
        items: 3,
        autoWidth: true,
        nav: false
      },

      800: {
        items: 6,
        autoWidth: true,
        margin: 10,
      },

    }

  });

  owleight.owlCarousel({
    loop: true,
    margin: 0,
    nav: false,
    dots: false,
    items: 1
  });


  // Add this code - remove between item width
  // var widthItem = $(".owl-item").width();
  // $(".owl-item .item").css("width", widthItem +1)


  // owl Custom Button hide of only 1
  // if ($('.owl-carousel .item ').length === 1) {
  //   //There is one image
  //   $('.related-next-btn, .related-prev-btn').hide();
  // }


  // owl Custom Button
  $('.slider1-next-btn').click(function () {
    owl.trigger('next.owl.carousel');
  });
  $('.slider1-prev-btn').click(function () {
    owl.trigger('prev.owl.carousel');
  });

  $('.slider2-next-btn').click(function () {
    owlone.trigger('next.owl.carousel');
  });
  $('.slider2-prev-btn').click(function () {
    owlone.trigger('prev.owl.carousel');
  });

  $('.slider2-1-next-btn').click(function () {
    owlonetwo.trigger('next.owl.carousel');
  });
  $('.slider2-1-prev-btn').click(function () {
    owlonetwo.trigger('prev.owl.carousel');
  });

  $('.slider3-next-btn').click(function () {
    owltwo.trigger('next.owl.carousel');
  });
  $('.slider3-prev-btn').click(function () {
    owltwo.trigger('prev.owl.carousel');
  });

  $('.slider4-next-btn').click(function () {
    owlthree.trigger('next.owl.carousel');
  });
  $('.slider4-prev-btn').click(function () {
    owlthree.trigger('prev.owl.carousel');
  });

  $('.slider5-next-btn').click(function () {
    owlfour.trigger('next.owl.carousel');
  });
  $('.slider5-prev-btn').click(function () {
    owlfour.trigger('prev.owl.carousel');
  });

  $('.slider6-next-btn').click(function () {
    owlfive.trigger('next.owl.carousel');
  });
  $('.slider6-prev-btn').click(function () {
    owlfive.trigger('prev.owl.carousel');
  });

  $('.slider7-next-btn').click(function () {
    owlsix.trigger('next.owl.carousel');
  });
  $('.slider7-prev-btn').click(function () {
    owlsix.trigger('prev.owl.carousel');
  });

  $('.slider8-next-btn').click(function () {
    owleight.trigger('next.owl.carousel');
  });
  $('.slider8-prev-btn').click(function () {
    owleight.trigger('prev.owl.carousel');
  });

});

//anchor link animation
$(document).ready(function () {
  $('a').click(function () {
    var offset = 80; // Adjust this value to set your desired offset
    var target = $($(this).attr('href'));
    var targetTop = target.offset().top - offset;

    $('html, body').animate({
      scrollTop: targetTop
    }, 700);
    
    return false;
  });
});

 
//popup
function myFunctionMobile() {
  console.log("clickblack1")
  var xy = document.getElementById("black-overlay-1");
  if (xy.style.display === "block") {
    xy.style.display = "none";
  } else {
    xy.style.display = "block";
  }
}

function toggleMobileMenu() {
  var body = document.body;
  var mobileMenu = document.getElementById('mobileMenu');

  // Toggle the 'no-scroll' class directly on the body
  body.classList.toggle('no-scroll');

  // Toggle the visibility of the mobile menu
  mobileMenu.style.display = (mobileMenu.style.display === 'block') ? 'none' : 'block';
}


const openButton = document.getElementById('openOverlay');
const closeButton = document.getElementById('closeOverlay');
const overlay = document.getElementById('overlay');

openButton.addEventListener('click', () => {
  overlay.style.display = 'flex';
  document.body.style.overflow = 'hidden'; // Prevent scrolling of the content below
});

closeButton.addEventListener('click', () => {
  overlay.style.display = 'none';
  document.body.style.overflow = 'auto'; // Allow scrolling again
});


































