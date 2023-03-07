<section>
   <div class="container-fluid">

      <div class="row">
         <!-- <div class="col-12">
            <div class="alert alert-info p-0 text-center">
               <i class="fa fa-info-circle"></i>
               Home slider image ratio should be in w:1920 x h:1080 and Popup slider image ratio should be in w:500 x h:500
            </div>
         </div> -->
         <div class="col-4">
            <div class="card">
               <div class="card-body">
                 
                     <form action="<?= base_url("admin/submit_slider") ?>" method="POST" id="valid-form" enctype="multipart/form-data">
                        <div class="row">
                           <div class="form-group col-12">
                              <label for="event_images">Slider Type <span class="text-danger">*</span></label>
                              <select class="form-control" required name="type" id="slider-type">
                                 <option value="HOME">Home Slider</option>
                                 <option value="POPUP">Popup Slider</option>
                              </select>
                           </div>
                           <div class="form-group col-12" id="title-input">
                              <label for="event_images">Title</label>
                              <input type="text" class="form-control" name="title" />
                           </div>
                           <div class="form-group col-12">
                              <label for="event_images">Upload Slider Image <span class="text-danger">*</span></label>
                              <input type="file" accept=".jpg, .jpeg, .png" class="form-control validate-width-height-size-type" required name="image" valid-id="img-error" id="slider-input" valid-width="1920" valid-height="1080" event-img="1" />
                              <span class="valid-error text-danger" id="img-error"></span>
                           </div>
                        </div>
                        <div class="row">
                           <div class="form-group col-12">
                              <button type="submit" class="btn btn-dark my-4" name="save">
                                 <i class="fa fa-check"></i> Save
                              </button>
                           </div>
                        </div>
                     </form>
                
               </div>
            </div>
         </div>
         <div class="col-8">
            <div class="card">
               <div class="card-body">
                  <table class="table web-box-shadow careers-table table-bordered table-striped text-center">
                     <thead>
                        <tr>
                           <th width="1%">#</th>
                           <th>Type</th>
                           <th>Title</th>
                           <th width="25%">Slider Image</th>
                           <th></th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php
                        $i = 1;
                        foreach ($home_slider as $s) {
                        ?>
                           <tr>
                              <td><?= $i++; ?></td>
                              <td><?= $s->type; ?></td>
                              <td><?= $s->title; ?></td>
                              <td>
                                 <img src="<?= base_url($s->image); ?>" loading="lazy" width="100%" />
                              </td>
                              <td class="">
                                 <?php
                                 if (count($home_slider) > 1) {
                                 ?>
                                    <a href="<?= base_url("delete-with-file?filepath=$s->image&table=home_slider&id=$s->id") ?>" onclick="return confirm('Are you sure ?')" class="btn btn-danger btn-sm">
                                       <i class="fa fa-trash"></i> Delete
                                    </a>
                                 <?php
                                 } else {
                                 ?>
                                    <button type="button" disabled class="btn btn-danger btn-sm">
                                       <i class="fa fa-trash"></i> Delete
                                    </button>
                                 <?php
                                 }
                                 ?>
                              </td>
                           </tr>
                        <?php
                        }
                        ?>
                     </tbody>
                  </table>

               </div>
            </div>
         </div>
      </div>

   </div>
</section>

<!-- 
<script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
<script>
   CKEDITOR.replace("cover_text");
</script> -->