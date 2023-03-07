<section>
   <div class="container-fluid">

      <div class="row">
         <div class="col-3">
            <div class="card">
               <div class="card-body">
                  <form action="<?= base_url("admin/submit_journals") ?>" method="POST" id="valid-form" enctype="multipart/form-data">
                     <div class="row">
                        
                        <div class="form-group col-12">
                           <label for="event_images">Department <span class="text-danger">*</span></label>
                           <select class="form-control" required name="department">
                                 <option value="">- Select</option>
                                 <option>Artifical Intelligence & Data Science</option>
                                 <option>Civil Engineering</option>
                                 <option>Computer Science & Engineering</option>
                                 <option>Cyber Security</option>
                                 <option>Electrical & Electronics Engineering</option>
                                 <option>Electronics & Communication Engineering</option>
                                 <option>Mechanical Engineering</option>
                                 <option>First Year Engineering</option>
                                 <option>Master of Business Administration</option>
                           </select>
                        </div>
                        <div class="form-group col-12">
                           <label for="event_images">
                              CSV <span class="text-danger">*</span>
                              <a href="<?= base_url("assets/admin/upload/others/publications/journals.csv"); ?>" download style="position:absolute;right:0;">
                                 <small>Download Format</small>
                              </a>
                           </label>
                           <input type="file" accept=".csv" class="form-control" required name="csv" />
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
         <div class="col-9">
            <div class="card">
               <div class="card-body">
               	<div class="table-responsive">
                  <table class="table web-box-shadow careers-table web-dataTable text-center">
                     <thead>
                        <tr>
                           <th width="1%">#</th>
                           <th>Department</th>
                           <th>Title of the Paper</th>
                           <th>Name of the Author(s)</th>
                           <th>Name of the Journal</th>
                           <th>Year of Publication</th>
                           <th>ISBN / ISSN Number</th>
                           <th></th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php
                        $i = 1;
                        foreach ($publish as $s) {
                        ?>
                           <tr>
                              <td><?= $i++; ?></td>
                              <td><?= $s->department; ?> </td>
                              <td><?= $s->title; ?></td>
                              <td><?= $s->author_name; ?></td>
                              <td><?= $s->journal_name; ?></td>
                              <td><?= $s->publish_year; ?></td>
                              <td><?= $s->isbn; ?></td>
                              <td>
                                 <a href="<?= base_url("delete-with-file?table=dept_journals&id=$s->id") ?>" onclick="return confirm('Are you sure ?')" class="btn btn-danger btn-sm">
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
   </div>
</section>

<!-- 
<script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
<script>
   CKEDITOR.replace("cover_text");
</script> -->