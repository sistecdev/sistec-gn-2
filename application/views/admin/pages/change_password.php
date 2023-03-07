<section>
   <div class="container-fluid">
      <div class="row">
         <div class="col-6">
            <div class="mb-4">
               <h1 class="h3 mb-0 text-gray-800">Change Password</h1>
            </div>
         </div>
         <div class="col-6">
         </div>
      </div>

      <form action="<?= base_url("admin/submit_change_password") ?>" id="change_password_form" method="POST" enctype="multipart/form-data">
         <input type="hidden" name="id" value="<?= $this->session->userdata("userid"); ?>"/>
         <div class="row">
            <div class="col-md-4">
               <div class="form-group">
                  <label for="event_title">Old Password</label>
                  <input type="text" class="form-control" name="old_password" id="old_password" required />
                  <font color="red" class="error_text" id="old_password_error"></font>
               </div>
            </div>
            <div class="col-md-4">
               <div class="form-group">
                  <label for="event_title">New Password</label>
                  <input type="text" class="form-control" name="new_password" id="new_password" required />
                  <font color="red" class="error_text" id="new_password_error"></font>
               </div>
            </div>
            <div class="col-md-4">
               <div class="form-group">
                  <label for="event_title">Confirm New Password</label>
                  <input type="text" class="form-control" name="confirm_new_password" id="confirm_new_password" required />
                  <font color="red" class="error_text" id="confirm_new_password_error"></font>
               </div>
            </div>
         </div>
         
         <div class="row">
            <div class="col-md-12">
               <div class="text-center">
                  <button type="button" id="update_pass" class="btn btn-dark my-4">
                     Update Password
                  </button>
               </div>
            </div>
         </div>
      </form>
   </div>
</section>


<script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
<script>
CKEDITOR.replace("cover_text");
</script>