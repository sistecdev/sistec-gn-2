<section>
   <div class="container-fluid">

      <div class="row">
         <div class="col-4">
            <div class="card">
               <div class="card-body">
                  <form action="<?= base_url("admin/submit_placements") ?>" method="POST" id="valid-form" enctype="multipart/form-data">
                     <div class="row">
                        
                        <div class="form-group col-12">
                           <label for="event_images">Student Name <span class="text-danger">*</span></label>
                           <input type="text" class="form-control" required name="name" />
                        </div>
                        <div class="form-group col-12">
                           <label for="event_images">Student Image <span class="text-danger">*</span></label>
                           <input type="file" accept=".jpg, .jpeg, .png" class="form-control validate-width-height-size-type" required name="image" valid-id="img-error-1" valid-width="0" valid-height="0" event-img="1" />
                           <span class="valid-error text-danger" id="img-error-1"></span>
                        </div>
                        <div class="form-group col-12">
                           <label for="event_images">Designation <span class="text-danger">*</span></label>
                           <input type="text" class="form-control" required name="designation" />
                        </div>
                        <div class="form-group col-12">
                           <label for="event_images">Company <span class="text-danger">*</span></label>
                           <input type="text" class="form-control" required name="company" />
                        </div>
                        <div class="form-group col-12">
                           <label for="event_images">Package in LPA <span class="text-danger">*</span></label>
                           <input type="number" step="any" class="form-control" required name="package" />
                        </div>
                        <div class="form-group col-12">
                           <label for="event_images">Department <span class="text-danger">*</span></label>
                           <input type="text" class="form-control" required name="department" placeholder="CSE" style="text-transform:uppercase;" />
                        </div>
                        <div class="form-group col-12">
                           <label for="event_images">Hometown <span class="text-danger">*</span></label>
                           <input type="text" class="form-control" required name="hometown" />
                        </div>

                     </div>
                     <div class="row">
                        <div class="form-group col-12">
                           <button type="submit" class="btn btn-dark my-4" name="save">
                              <i class="fa fa-upload"></i> Upload
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
                  <table class="table web-box-shadow careers-table web-dataTable text-center">
                     <thead>
                        <tr>
                           <th width="1%">#</th>
                           <th>Name</th>
                           <th>Designation</th>
                           <th>Company</th>
                           <th>Package</th>
                           <th width="20%">Image</th>
                           <th></th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php
                        $i = 1;
                        foreach ($placements as $s) {
                        ?>
                           <tr>
                              <td><?= $i++; ?></td>
                              <td><?= $s->name; ?> <br/> (<?= $s->department; ?>)</td>
                              <td><?= $s->designation; ?></td>
                              <td><?= $s->company; ?></td>
                              <td><?= $s->package; ?> LPA</td>
                              
                              <td><img src="<?= base_url($s->image); ?>" title="<?= $s->name; ?>" loading="lazy" width="100%" /></td>
                              <td>
                                 <a href="<?= base_url("delete-with-file?filepath=$s->image&table=placements&id=$s->id") ?>" onclick="return confirm('Are you sure ?')" class="btn btn-danger btn-sm">
                                    <i class="fa fa-trash"></i>
                                 </a>
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