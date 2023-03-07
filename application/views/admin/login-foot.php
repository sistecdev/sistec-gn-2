<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/common/js/jquery-3.6.0.min.js') ?>"></script>
<script src="<?= base_url('assets/common/js/sweetalert-2.1.2.min.js') ?>"></script>
<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/admin/js/admin-script.js') ?>"></script>
<script>
   $("#loginsubmit").click(function() {
      const username = $("#username").val();
      const password = $("#password").val();

      $("#login-username-error").text("");
      $("#login-password-error").text("");

      if (username === "" && password === "") {
         $("#login-username-error").text("Username is required");
         $("#login-password-error").text("Password is required");
      } else if (username === "") {
         $("#login-username-error").text("Username is required");
         $("#login-password-error").text("");
      } else if (password === "") {
         $("#login-username-error").text("");
         $("#login-password-error").text("Password is required");
      } else {
         const ajaxUrl = $("#login-form").attr("action");
         $.ajax({
            url: ajaxUrl,
            type: "POST",
            data: {
               username: username,
               password: password,
            },
            success: function(res) {
               if (res == 0) {
                  swal("Error", "Wrong Credentials", "error");
               } else {
                  window.location.replace(res);
               }
            },
         });
      }
   });
</script>
</body>
<html>