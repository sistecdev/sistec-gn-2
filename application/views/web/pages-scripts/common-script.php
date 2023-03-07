<a href="#" id="scroll-to-top-btn"><span></span></a>

<script src="<?= base_url("assets/common/js/jquery-3.6.0.min.js"); ?>"></script>
<script src="<?= base_url("assets/web/js/bootstrap.min.js"); ?>"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="<?= base_url("assets/admin/js/custom.js"); ?>"></script>

<script>
   function scrollToDeptSection(elem) {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
   }
</script>

<script>
   $(document).ready(function() {
      $(window).scroll(function() {
         if ($(this).scrollTop() > 100) {
            $('#scroll-to-top-btn').fadeIn();
         } else {
            $('#scroll-to-top-btn').fadeOut();
         }
      });
      $('#scroll-to-top-btn').click(function() {
         $("html, body").animate({
            scrollTop: 0
         }, 300);
         return false;
      });
   });
</script>