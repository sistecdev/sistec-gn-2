<script src="<?= base_url("assets/common/js/slick.min.js"); ?>"></script>
<script src="<?= base_url("assets/common/js/swiper-bundle.min.js"); ?>"></script>


<!-- Swiper Sync Card Text Slider -->
<script>
   var swiperSyncCardTextSlider = new Swiper(".swiperSyncCardTextSlider", {
      loop: true,
      autoplay: {
         delay: 3000,
         disableOnInteraction: false,
      },
      allowTouchMove: false
   });
</script>

<!-- Swiper Sync Card Image Slider -->
<script>
   var swiperSyncCardImageSlider = new Swiper(".swiperSyncCardImageSlider", {
      effect: "cards",
      grabCursor: true,
      loop: true,
      autoplay: {
         delay: 3000,
         disableOnInteraction: false,
      },
      lazy: {
         loadPrevNext: true,
      },
      allowTouchMove: false
   });

   function moveCardSyncSliderNext() {
      console.log("Next");
      swiperSyncCardTextSlider.slideNext();
      swiperSyncCardImageSlider.slideNext();
   }

   function moveCardSyncSliderPrev() {
      console.log("Prev");
      swiperSyncCardTextSlider.slidePrev();
      swiperSyncCardImageSlider.slidePrev();
   }
</script>

<!-- Home Page Slider -->
<script>
   var $slider = $('.slideshow .slider'),
      maxItems = $('.item', $slider).length,
      dragging = false,
      tracking,
      rightTracking;

   $sliderRight = $('.slideshow').clone().addClass('slideshow-right').appendTo($('.split-slideshow'));

   rightItems = $('.item', $sliderRight).toArray();
   reverseItems = rightItems.reverse();
   $('.slider', $sliderRight).html('');
   for (i = 0; i < maxItems; i++) {
      $(reverseItems[i]).appendTo($('.slider', $sliderRight));
   }

   $slider.addClass('slideshow-left');
   $('.slideshow-left').slick({
      vertical: true,
      verticalSwiping: true,
      arrows: false,
      infinite: true,
      dots: true,
      speed: 1000,
      autoplaySpeed: 3000,
      autoplay: true,
      pauseOnHover: false,
      pauseOnFocus: false,
      cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)'
   }).on('beforeChange', function(event, slick, currentSlide, nextSlide) {
      if (currentSlide > nextSlide && nextSlide == 0 && currentSlide == maxItems - 1) {
         $('.slideshow-right .slider').slick('slickGoTo', -1);
         $('.slideshow-text').slick('slickGoTo', maxItems);
      } else if (currentSlide < nextSlide && currentSlide == 0 && nextSlide == maxItems - 1) {
         $('.slideshow-right .slider').slick('slickGoTo', maxItems);
         $('.slideshow-text').slick('slickGoTo', -1);
      } else {
         $('.slideshow-right .slider').slick('slickGoTo', maxItems - 1 - nextSlide);
         $('.slideshow-text').slick('slickGoTo', nextSlide);
      }
   });

   $('.slideshow-right .slider').slick({
      swipe: false,
      vertical: true,
      arrows: false,
      infinite: true,
      speed: 950,
      cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
      initialSlide: maxItems - 1
   });

   $('.slideshow-text').slick({
      swipe: false,
      vertical: true,
      arrows: false,
      infinite: true,
      speed: 900,
      cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)'
   });
</script>

<!-- Spread Counter -->
<script>
   $(document).ready(function() {
      $(window).scroll(function() {
         $(".count").each(function() {
            if ($(this).isOnScreen()) {
               startCounter($(this));
            } else {
               if ($(this).hasClass("notVisible") == false) {
                  $(this).stop();
                  $(this).addClass("notVisible");
                  $(this).text("0");
               }
            }
         });
      });
   });

   $.fn.isOnScreen = function() {
      var win = $(window);

      var viewport = {
         top: win.scrollTop(),
         left: win.scrollLeft(),
      };

      viewport.right = viewport.left + win.width();
      viewport.bottom = viewport.top + win.height();

      var bounds = this.offset();
      bounds.right = bounds.left + this.outerWidth();
      bounds.bottom = bounds.top + this.outerHeight();

      return !(
         viewport.right < bounds.left ||
         viewport.left > bounds.right ||
         viewport.bottom < bounds.top ||
         viewport.top > bounds.bottom
      );
   };

   function startCounter(counterElement) {
      if (counterElement.hasClass("notVisible")) {
         counterElement.removeClass("notVisible");

         counterElement.prop("Counter", 0).animate({
            Counter: counterElement.attr("counter-lim"),
         }, {
            duration: 1500,
            easing: "swing",
            step: function(now) {
               // counterElement.text(
               // 	Math.ceil(now).toLocaleString("en-IN", {
               // 		maximumFractionDigits: 2,
               // 		currency: "INR",
               // 	})
               // );
               counterElement.text(Math.ceil(now * 100) / 100);
            },
         });
      }
   }

   $(".count").each(function() {
      $(this).addClass("notVisible");
      if ($(this).isOnScreen() === true) {
         startCounter($(this));
      }
   });
</script>

<!-- Recruiters Slider -->
<script>
   $(".our-recruiters-slider").slick({
      dots: false,
      arrows: false,
      slidesToShow: 6,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 0,
      speed: 12000,
      pauseOnHover: false,
      cssEase: "linear",
      responsive: [{
         breakpoint: 767,
         settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            centerMode: false,
         },
      }, ],
   });
</script>

<!-- Upper Strip, Lower Strip & Navigation Menu -->
<script>
   var stripUpper = $("#strip-upper");
   var stripLower = $("#strip-lower");
   var fixedNavigation = $("#fixed-navigation");

   // For initial loading
   if ($(window).scrollTop() >= 101) {
      stripUpper.addClass("active");
      stripLower.addClass("active");
      fixedNavigation.addClass("active");
   }

   // Once the user starts scrolling
   $(window).scroll(function() {
      if ($(window).scrollTop() >= 101 && $(window).scrollTop() <= 750) {
         stripUpper.addClass("active");
         stripLower.removeClass("move-to-top").addClass("active");
         fixedNavigation.removeClass("move-to-top").addClass("active");
      } else if ($(window).scrollTop() >= 751) {
         stripUpper.removeClass("active");
         stripLower.addClass("move-to-top");
         fixedNavigation.addClass("move-to-top");
      } else {
         stripUpper.removeClass("active");
         stripLower.removeClass("active");
         fixedNavigation.removeClass("active");

         allNavTabs.forEach((thisNavTab) => {
            thisNavTab.classList.remove('active');
            if (thisNavTab.querySelector(".second-level") != null) {
               thisNavTab.querySelector(".second-level").classList.remove("active");
            }
            if (thisNavTab.querySelector(".icon-caret") != null) {
               thisNavTab.querySelector(".icon-caret").classList.remove("rotate90");
            }
         });
         document.getElementById("<?php echo active_nav(); ?>").classList.add('active');
      }
   });
</script>