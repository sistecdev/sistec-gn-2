<script src="<?= base_url("assets/web/js/jquery.fancybox.min.js") ?>"></script>
<script>
   $(".fancy-box-container a").fancybox({
      buttons: ["slideShow", "thumbs", "zoom", "fullScreen", "share", "close"],
      loop: true,
      keyboard: true,
      wheel: false,
      arrows: true,
      transitionDuration: 1000,
      // transitionEffect: "slide",
   });
</script>