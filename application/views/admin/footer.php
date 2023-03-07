 </div>
 <!-- End of Main Content -->
 <!-- Footer -->
 <footer class="sticky-footer bg-white">
    <div class="container my-auto">
       <div class="copyright text-center my-auto">
          <span>Copyright &copy; SISTec <?= date("Y"); ?></span>
       </div>
    </div>
 </footer>
 <!-- End of Footer -->
 </div>
 <!-- End of Content Wrapper -->
 </div>
 <!-- End of Page Wrapper -->
 <!-- Scroll to Top Button-->
 <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
 </a>
 <!-- Logout Modal-->
 <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
       <div class="modal-content">
          <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
             <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
             </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
             <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
             <a class="btn btn-primary" href="<?= base_url('admin-logout') ?>">Logout</a>
          </div>
       </div>
    </div>
 </div>
 <!-- Bootstrap core JavaScript-->
 <script src="<?= base_url('assets/common/js/jquery-3.6.0.min.js') ?>"></script>
 <script src="<?= base_url('assets/admin/js/popper.min.js') ?>"></script>
 <script src="<?= base_url('assets/admin/js/bootstrap.min.js') ?>"></script>
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 <!-- Custom scripts for all pages-->
 <script src="<?= base_url('assets/admin/js/jquery.dataTables.min.js') ?>"></script>
 <script src="<?= base_url('assets/admin/js/admin-script.js') ?>"></script>
 <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
 <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
 <script src="<?= base_url('assets/admin/js/new-admin-script.js') ?>"></script>

 <?php require("swal-messages.php"); ?>
 <script>
    var _URL = window.URL || window.webkitURL;
    $(".validate-width-height-size-type").change(function() {
       const validId = $(this).attr("valid-id");
       const validWidth = $(this).attr("valid-width");
       const validHeight = $(this).attr("valid-height");

       let maxSize = 1000000; /* 1 MB */
       let maxSizeText = "1MB";
       const eventImg = $(this).attr("event-img");
       if (typeof eventImg !== 'undefined' && eventImg !== false) {
          maxSize = 5000000;
          maxSizeText = "5MB";
       }

       var fileExtension = ['jpeg', 'jpg', 'png'];
       if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
          $("#" + validId).text("Invalid file type !!");
       } else {
          $("#" + validId).text("");
       }

       var imgWidth = imgHeight = imgSize = 0;
       imgSize = this.files[0].size;

       var file, img;
       if ((file = this.files[0])) {
          img = new Image();
          var objectUrl = _URL.createObjectURL(file);
          img.onload = function() {
             imgWidth = this.width;
             imgHeight = this.height;

             if ((imgWidth != validWidth || imgHeight != validHeight) && validWidth != 0 && validHeight != 0) {
                /*$("#" + validId).text(`Image should be in w:${validWidth} x h:${validHeight} ratio.`);*/
             } else if (imgSize > maxSize) {
                $("#" + validId).text(`Image should be less than ${maxSizeText}`);
             } else {
                $("#" + validId).text("");
             }

             _URL.revokeObjectURL(objectUrl);
          };
          img.src = objectUrl;
       }
    });
    $(".validate-pdf-and-image-file").change(function() {
       const validId = $(this).attr("valid-id");
       var fileExtension = ['pdf', 'jpeg', 'jpg', 'png'];
       if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
          $("#" + validId).text("Please upload pdf or image file only !!");
       } else {
          $("#" + validId).text("");
       }
    });
    $(".validate-pdf-file").change(function() {
       const validId = $(this).attr("valid-id");
       var fileExtension = ['pdf'];
       if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
          $("#" + validId).text("Please upload pdf file only !!");
       } else {
          $("#" + validId).text("");
       }
    });
    $(".validate-img-file").change(function() {
       const validId = $(this).attr("valid-id");
       var fileExtension = ['jpeg', 'jpg', 'png'];
       if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
          $("#" + validId).text("Invalid file type !!");
       } else {
          $("#" + validId).text("");
       }
    });
    $("#valid-form").submit(function(e) {
       e.preventDefault();
       let isErr = 0;
       $('.valid-error').each(function(i, obj) {
          if ($(obj).text().length > 0) {
             isErr = 1;
          }
       });
       if (isErr == 0) {
          document.getElementById("valid-form").submit();
       }
    });
    $("#event-title").keyup(function() {
       checkEventDuplicacy();
    });
    $("#event-date").change(function() {
       checkEventDuplicacy();
    });
    checkEventDuplicacy = () => {
       const eventDate = $("#event-date").val();
       const eventTitle = $("#event-title").val();
       $.ajax({
          url: "<?= base_url("Admin/check_event_name"); ?>",
          type: "POST",
          data: {
             event_date: eventDate,
             title: eventTitle
          },
          success: (res) => {
             if (res > 0) {
                $("#event-title-error").text(`This event already added on selected event date.`);
             } else {
                $("#event-title-error").text("");
             }
          }
       });
    }
    $("#result_type").change(function() {
       const result_type = $(this).val();
       if (result_type == "JEE RESULTS") {
          $("#marks").text("AIR");
       } else {
          $("#marks").text("Score");
       }
    });

    $(document).on("keyup", ".10-digit", function() {
       const val = $(this).val();
       const id = $(this).attr("valid-id");
       if (val.length > 0 && val.length != 10) {
          $("#" + id).text("Please enter 10 digits only.");
       } else {
          $("#" + id).text("");
       }
    });

    $(document).on("keyup", ".7-digit", function() {
       const val = $(this).val();
       const id = $(this).attr("valid-id");
       if (val.length > 0 && val.length != 7) {
          $("#" + id).text("Please enter 7 digits only.");
       } else {
          $("#" + id).text("");
       }
    });
    $(document).on("keyup", ".5-digit", function() {
       const val = $(this).val();
       const id = $(this).attr("valid-id");
       if (val.length > 0 && val.length != 5) {
          $("#" + id).text("Please enter 5 digits only.");
       } else {
          $("#" + id).text("");
       }
    });
    $("#slider-type").change(function() {
       const type = $(this).val();
       if (type == "POPUP") {
          $("#title-input").removeClass("d-none");
          $("#slider-input").attr("valid-width", 500);
          $("#slider-input").attr("valid-height", 500);
       } else {
          $("#title-input").addClass("d-none");
          $("#slider-input").attr("valid-width", 1920);
          $("#slider-input").attr("valid-height", 1080);
       }
    });
    $(document).on("click", ".change_media_date", function() {
       const id = $(this).attr("data-id");
       const media_date = $("#media_date" + id).val();
       $.ajax({
          url: "<?= base_url("Admin/change_media_date"); ?>",
          type: "POST",
          data: {
             id: id,
             media_date: media_date
          },
          success: (res) => {
             if (res == 1) {
                const Toast = Swal.mixin({
                   toast: true,
                   position: 'top-end',
                   showConfirmButton: false,
                   timer: 3000,
                   timerProgressBar: true,
                   didOpen: (toast) => {
                      toast.addEventListener('mouseenter', Swal.stopTimer)
                      toast.addEventListener('mouseleave', Swal.resumeTimer)
                   }
                });
                Toast.fire({
                   icon: 'success',
                   title: 'Media date updated successfully.'
                });
             }
          }
       });
    });
    $("#tc_no").keyup(function() {
       const val = $(this).val();
       const id = $(this).attr("valid-id");
       if (val.length > 8) {
          $("#" + id).text("Max 8 digits allowed.");
       } else {
          $.ajax({
             url: "<?= base_url("Admin/check_tc_no"); ?>",
             type: "POST",
             data: {
                tc_no: val
             },
             success: (res) => {
                if (res > 0) {
                   $("#" + id).text("Tc no. already exist.");
                } else {
                   $("#" + id).text("");
                }
             }
          });
       }
    });
    $("#details_type").change(function(){
      const id = $(this).val();
      $(".details-type-options").addClass("d-none");
      if(id.length > 0){ $("#"+id).removeClass("d-none"); }
    });
 </script>

 </body>
 <html>