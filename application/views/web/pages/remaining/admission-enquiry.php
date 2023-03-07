<section class="page__content">
   <div class="container">
      <form action="" id="admission-enq-form">
         <div class="space-y-5">
            <div class="row gx-3">
               <div class="col-md-6">
                  <div class="form-floating">
                     <input type="text" name="name" required class="form-control" id="floatingInputGrid" />
                     <label for="floatingInputGrid">Name</label>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-floating">
                     <select class="form-select get-branch-on-course-name" required name="course" id="floatingSelectGrid">
                        <option value="" selected disabled>- select course</option>
                        <?php
                           foreach($courses as $c) {
                        ?>
                        <option><?= $c->course_name; ?></option>
                        <?php
                           }
                        ?>
                     </select>
                     <label for="floatingSelectGrid">Course</label>
                  </div>
               </div>
            </div>

            <div class="row gx-3">
               <div class="col-md-6">
                  <div class="form-floating">
                     <select class="form-select change-branch-options-on-course" required name="branch" id="floatingSelectGrid">
                        <option value="" selected disabled>- select branch</option>
                     </select>
                     <label for="floatingSelectGrid">Branch</label>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-floating">
                     <select class="form-select get-city-on-state-change" name="state" required id="floatingSelectGrid">
                        <option value="" selected disabled>- select state</option>
                        <?php
                           foreach($states as $c) {
                        ?>
                        <option value="<?= $c->name; ?>" data-id="<?= $c->id; ?>"><?= $c->name; ?></option>
                        <?php
                           }
                        ?>
                     </select>
                     <label for="floatingSelectGrid">State</label>
                  </div>
               </div>
            </div>

            <div class="row gx-3">
               <div class="col-md-6">
                  <div class="form-floating">
                     <select class="form-select change-city-options-on-state" name="district" required id="floatingSelectGrid">
                        <option value="" selected disabled>- select district</option>
                     </select>
                     <label for="floatingSelectGrid">District</label>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-floating">
                     <input type="text" name="tehsil" class="form-control" id="floatingInputGrid" />
                     <label for="floatingInputGrid">Tehsil</label>
                  </div>
               </div>
            </div>

            <div class="row gx-3">
               <div class="col-md-6">
                  <div class="form-floating">
                     <input type="number" name="contact" required class="form-control contact-no" id="floatingInputGrid" />
                     <label for="floatingInputGrid">Contact</label>
                  </div>
                  <label class="text-danger" id="contact-error"></label>
               </div>
            </div>

            <div class="row gx-3">
               <div class="col-md-12">
                  <div class="text-center">
                     <button class="web__btn__two lg-size" id="enq-send-btn" type="submit">
                        Submit
                     </button>
                  </div>
               </div>
            </div>
         </div>
      </form>
   </div>
</section>

<?php require_once(FOOTER__DESIGN__PATH); ?>