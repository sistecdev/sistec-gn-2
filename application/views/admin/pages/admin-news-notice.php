<section>
   <div class="container-fluid">

      <div class="row">
         <div class="col-3">
            <div class="card">
               <div class="card-body">

                  <form action="<?= base_url("admin/submit_news_notice") ?>" method="POST" id="valid-form" enctype="multipart/form-data">
                     <div class="row">
                        <div class="form-group col-12">
                           <label for="event_images">Type <span class="text-danger">*</span></label>
                           <select class="form-control" required name="type">
                              <option>Latest News</option>
                              <option>Notices</option>
                           </select>
                        </div>
                        <div class="form-group col-12">
                           <label for="event_images">Date <span class="text-danger">*</span></label>
                           <input type="date" class="form-control" required name="date" />
                        </div>
                        <div class="form-group col-12">
                           <label for="event_images">Title <span class="text-danger">*</span></label>
                           <textarea class="form-control" required name="title" rows="2"></textarea>
                        </div>
                        <div class="form-group col-12">
                           <label for="event_images">Details Type</label>
                           <select class="form-control" name="details_type" id="details_type">
                              <option value="" selected>- Select Detailed Info.</option>
                              <option value="text">Detailed Text</option>
                              <option value="pdf">Upload File</option>
                              <option value="link">External Link</option>
                           </select>
                        </div>
                        <div class="form-group details-type-options d-none col-12" id="text">
                           <label for="event_images">Detailed Text</label>
                           <textarea class="form-control" name="detailed_text" rows="5"></textarea>
                        </div>
                        <div class="form-group details-type-options d-none col-12" id="pdf">
                           <label for="event_images">Upload File</label>
                           <input type="file" accept=".pdf, .jpeg, .jpg, .png" class="form-control validate-pdf-and-image-file" valid-id="file-error1" name="pdf_file" />
                           <span class="valid-error text-danger" id="file-error1"></span>
                        </div>
                        <div class="form-group details-type-options d-none col-12" id="link">
                           <label for="event_images">External Link</label>
                           <input type="url" class="form-control" name="external_link" placeholder="https://redirect-link.com/" />
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
         <div class="col-9">
            <div class="card">
               <div class="card-body">
                  <table class="table web-box-shadow careers-table web-dataTable text-center">
                     <thead>
                        <tr>
                           <th width="1%">#</th>
                           <th>Type</th>
                           <th>Title</th>
                           <th>Details</th>
                           <th>Date</th>
                           <th></th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php
                        $i = 1;
                        foreach ($news_notice as $s) {
                           $details_type = $s->details_type;
                        ?>
                           <tr>
                              <td><?= $i++; ?></td>
                              <td><?= $s->type; ?></td>
                              <td><?= $s->title; ?></td>
                              <td>
                                 <?php
                                    $filepath = "none";
                                    if($details_type=="text"){
                                       echo $s->detailed_text;
                                    }
                                    elseif($details_type=="pdf"){
                                       $filepath = $s->pdf_file;
                                 ?>
                                    <a href="<?= base_url($s->pdf_file); ?>" target="_blank">View File</a>
                                 <?php 
                                    }
                                    elseif($details_type=="link"){
                                 ?>
                                    <a href="<?= $s->external_link; ?>" target="_blank">Open Link</a>
                                 <?php      
                                    }
                                 ?>
                              </td>
                              <td><?= date("M d, Y", strtotime($s->date)); ?></td>
                              <td>
                                 <a href="<?= base_url("delete-with-file?filepath=$filepath&table=news_notice&id=$s->id") ?>" onclick="return confirm('Are you sure ?')" class="btn btn-danger btn-sm">
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