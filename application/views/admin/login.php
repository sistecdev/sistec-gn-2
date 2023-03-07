<section class="mh-100vh d-flex justify-content-center align-items-center">
   <div class="container">
      <!-- Outer Row -->
      <div class="row justify-content-center">
         <div class="col-md-5">
            <div class="card o-hidden border-0 shadow-lg">
               <div class="card-body p-0">
                  <!-- Nested Row within Card Body -->
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="p-5">
                           <div class="text-center">
                              <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                           </div>
                           <form action="<?= base_url("validate-user") ?>" class="user" method="POST"
                              enctype="multipart/form-data" id="login-form">
                              <div class="form-group">
                                 <input type="text" class="form-control form-control-user" name="username" id="username"
                                    placeholder="Enter Username" required>
                                 <label class="error" id="login-username-error"></label>
                              </div>
                              <div class="form-group">
                                 <input type="password" class="form-control form-control-user" name="password"
                                    id="password" placeholder="Password" required>
                                 <label class="error" id="login-password-error"></label>
                              </div>
                              <input type="button" value="Login" name="loginsubmit" id="loginsubmit"
                                 class="btn btn-primary btn-user btn-block">
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>