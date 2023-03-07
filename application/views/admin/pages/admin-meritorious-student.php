<section>
   <div class="container-fluid">

      <div class="row">
         <div class="col-4">
            <div class="card">
               <div class="card-body">
                  <form action="<?= base_url("admin/submit_meritorious_student") ?>" method="POST" id="valid-form" enctype="multipart/form-data">
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
                           <label for="event_images">Semester <span class="text-danger">*</span></label>
                           <select class="form-control" name="sem">
                              <option>1st Sem</option>
                              <option>2nd Sem</option>
                              <option>3rd Sem</option>
                              <option>4th Sem</option>
                              <option>5th Sem</option>
                              <option>6th Sem</option>
                              <option>7th Sem</option>
                              <option>8th Sem</option>
                           </select>
                        </div>

                        <div class="form-group col-12">
                           <label for="event_images">Subject <span class="text-danger">*</span></label>
                           <input type="text" class="form-control" required name="subject" placeholder="CSE" style="text-transform:uppercase;" />
                        </div>

                        <div class="form-group col-12">
                           <label for="event_images">Marks <span class="text-danger">*</span></label>
                           <input type="text" class="form-control" required name="marks" value="SGPA - 0.00" />
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
                           <th>Subject</th>
                           <th>Marks</th>
                           <th width="20%">Image</th>
                           <th></th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php
                        $i = 1;
                        foreach ($meritorious_student as $s) {
                        ?>
                           <tr>
                              <td><?= $i++; ?></td>
                              <td><?= $s->name; ?></td>
                              <td><b><?= $s->subject; ?></b> <br/> <?= $s->sem; ?></td>
                              <td><?= $s->marks; ?></td>
                              <td><img src="<?= base_url($s->image); ?>" title="<?= $s->name; ?>" loading="lazy" width="100%" /></td>
                              <td>
                                 <a href="<?= base_url("delete-with-file?filepath=$s->image&table=meritorious_student&id=$s->id") ?>" onclick="return confirm('Are you sure ?')" class="btn btn-danger btn-sm">
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