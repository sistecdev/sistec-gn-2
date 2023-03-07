<script src="<?= base_url("assets/common/js/slick.min.js") ?>"></script>
<script src="<?= base_url("assets/common/js/slick-animation.min.js") ?>"></script>

<script>
   $(".sps-slider-for").slick({
      infinite: true,
      autoplay: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      asNavFor: ".sps-slider-nav",
      autoplaySpeed: 3000,
      speed: 1500,
   });

   $(".sps-slider-nav").slick({
      infinite: true,
      autoplay: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      asNavFor: ".sps-slider-for",
      dots: false,
      arrows: false,
      focusOnSelect: true,
      autoplaySpeed: 3000,
      speed: 1500,
   });

   $(".sistec-slider-for").slick({
      infinite: true,
      autoplay: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      asNavFor: ".sistec-slider-nav",
      autoplaySpeed: 3000,
      speed: 1500,
   });

   $(".sistec-slider-nav").slick({
      infinite: true,
      autoplay: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      asNavFor: ".sistec-slider-for",
      dots: false,
      arrows: false,
      focusOnSelect: true,
      autoplaySpeed: 3000,
      speed: 1500,
   });

   $(".smpl-slider-for").slick({
      infinite: true,
      autoplay: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      asNavFor: ".smpl-slider-nav",
      autoplaySpeed: 3000,
      speed: 1500,
   });

   $(".smpl-slider-nav").slick({
      infinite: true,
      autoplay: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      asNavFor: ".smpl-slider-for",
      dots: false,
      arrows: false,
      focusOnSelect: true,
      autoplaySpeed: 3000,
      speed: 1500,
   });
</script>