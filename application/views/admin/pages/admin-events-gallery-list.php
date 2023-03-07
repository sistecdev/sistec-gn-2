<section>
   <div class="container-fluid">

      <div class="row">
         <div class="col-12 text-right">
            <a href="<?= base_url("Admin/events_gallery"); ?>" class="btn btn-dark btn-sm">
               Add New Event
            </a>
         </div>
         <div class="col-12">
            <div class="card">
               <div class="card-body">
                  <table class="table web-box-shadow careers-table web-dataTable text-center">
                     <thead>
                        <tr>
                           <th width="1%">#</th>
                           <th>Type</th>
                           <th>Event Title</th>
                           <th>Event Date</th>
                           <th width="20%">Event Image</th>
                           <th></th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php
                        $i = 1;
                        foreach ($events as $s) {
                           $recent_happening = $s->recent_happening;
                        ?>
                           <tr>
                              <td><?= $i++; ?></td>
                              <td><?= $s->event_type; ?></td>
                              <td>
                                 <?= $s->title; ?> 
                                 <?php
                                    if($recent_happening == 1){
                                 ?>
                                 <br/>
                                 <label class="badge bg-dark text-white">Recent Happenings</label>
                                 <?php      
                                    }
                                 ?>
                              </td>
                              <td><?= date("M d, Y", strtotime($s->event_date)); ?></td>
                              <td>
                                 <img src="<?= base_url($s->image1); ?>" title="<?= $s->title; ?>" loading="lazy" width="100%" />
                              </td>
                              <td>
                                 <a href="<?= base_url("delete-with-file?filepath=$s->image1&filepath2=$s->image2&filepath3=$s->image3&filepath4=$s->image4&table=events&id=$s->id") ?>" onclick="return confirm('Are you sure ?')" class="btn btn-danger btn-sm">
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