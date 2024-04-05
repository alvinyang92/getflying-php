 //close form pup up
 $(".close-form").click(function () {
    // currentLocation = $(document).scrollTop();
    $(".popupform").hide();
 
  });

   //open form pup up
   $(".open-form").click(function () {
    // currentLocation = $(document).scrollTop();
    $(".popupform").show();
    // $(".content_holder_black").show();
  });

  $(document).ready(function () {
    var owlonetwo = $('.owl-2-1');
  
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
  
    // owl Custom Button
  
    $('.slider2-1-next-btn').click(function () {
      owlonetwo.trigger('next.owl.carousel');
    });
    $('.slider2-1-prev-btn').click(function () {
      owlonetwo.trigger('prev.owl.carousel');
    });
  
  });
  