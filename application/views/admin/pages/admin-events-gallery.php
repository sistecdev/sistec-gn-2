<section>
   <div class="container-fluid">

      <div class="row">
         <div class="col-12 text-right">
            <a href="<?= base_url("Admin/events_gallery_list"); ?>" class="btn btn-dark btn-sm">
               View Events List
            </a>
         </div>
         <div class="col-12">
            <div class="card">
               <div class="card-body">
                  <form action="<?= base_url("admin/submit_event") ?>" method="POST" id="valid-form" enctype="multipart/form-data">
                     <div class="row">
                        <div class="form-group col-3">
                           <label for="event_images">Event Title <span class="text-danger">*</span></label>
                           <input type="text" class="form-control" required name="title" id="event-title" />
                           <span class="valid-error text-danger" id="event-title-error"></span>
                        </div>
                        <div class="form-group col-3">
                           <label for="event_images">Event Type <span class="text-danger">*</span></label>
                           <select class="form-control" name="event_type">
                              <option value="">- Select</option>
                              <option value="General Activity">General Activity</option>
                              <option value="Alumni">Alumni</option>
                              <option value="Campus Drive">Campus Drive</option>
                              <option value="Celebration">Celebration</option>
                              <option value="Conclave">Conclave</option>
                              <option value="Conference">Conference</option>
                              <option value="CSR">CSR</option>
                              <option value="Competitions">Competitions</option>
                              <option value="Expert Lecture">Expert Lecture</option>
                              <option value="Farewell">Farewell</option>
                              <option value="FDP">FDP</option>
                              <option value="Fest">Fest</option>
                              <option value="Fresher">Fresher</option>
                              <option value="Hostel">Hostel</option>
                              <option value="Orientation Program">Orientation Program</option>
                              <option value="Seminar">Seminar</option>
                              <option value="Sports">Sports</option>
                              <option value="STTP">STTP</option>
                              <option value="Training">Training</option>
                              <option value="Workshop">Workshop</option>
                           </select>
                        </div>
                        <div class="form-group col-3">
                           <label for="event_images">Department <span class="text-danger">*</span></label>
                           <select class="form-control" name="department">
                              <option value="" selected="">- Select</option>
                              <option value="College Level Event">College Level Event</option>
                              <option value="Basic Science">Basic Science</option>
                              <option value="Civil Engineering">Civil Engineering</option>
                              <option value="Computer Science &amp; Engineering">Computer Science &amp; Engineering</option>
                              <option value="Artificial Intelligence &amp; Data Science">Artificial Intelligence &amp; Data Science</option>
                              <option value="Artificial Intelligence &amp; Machine Learning">Artificial Intelligence &amp; Machine Learning</option>
                              <option value="CSE with IoT">CSE with IoT</option>
                              <option value="CSE with Cyber Security">CSE with Cyber Security</option>
                              <option value="Electrical Engineering">Electrical Engineering</option>
                              <option value="Electrical &amp; Electronics Engineering">Electrical &amp; Electronics Engineering</option>
                              <option value="Electronics &amp; Communication Engineering">Electronics &amp; Communication Engineering </option>
                              <option value="Mechanical Engineering">Mechanical Engineering</option>
                              <option value="Pharmacy">Pharmacy</option>
                              <option value="MBA">MBA</option>
                              <option value="Student Activity Council">Student Activity Council</option>
                              <option value="Training &amp; Placement">Training &amp; Placement</option>
                           </select>
                        </div>
                        <div class="form-group col-3">
                           <label for="event_images">Event Date <span class="text-danger">*</span></label>
                           <input type="date" class="form-control" max="<?= date("Y-m-d"); ?>" required name="event_date" id="event-date" />
                        </div>
                        <div class="form-group col-3">
                           <label for="event_images">Image 1 <span class="text-danger">*</span></label>
                           <input type="file" accept=".jpg, .jpeg, .png" class="form-control validate-width-height-size-type" required name="image1" valid-id="img-error-1" valid-width="0" valid-height="0" event-img="1" />
                           <span class="valid-error text-danger" id="img-error-1"></span>
                        </div>
                        <div class="form-group col-3">
                           <label for="event_images">Image 2 <span class="text-danger">*</span></label>
                           <input type="file" accept=".jpg, .jpeg, .png" class="form-control validate-width-height-size-type" required name="image2" valid-id="img-error-2" valid-width="0" valid-height="0" event-img="1" />
                           <span class="valid-error text-danger" id="img-error-2"></span>
                        </div>
                        <div class="form-group col-3">
                           <label for="event_images">Image 3 <span class="text-danger">*</span></label>
                           <input type="file" accept=".jpg, .jpeg, .png" class="form-control validate-width-height-size-type" required name="image3" valid-id="img-error-3" valid-width="0" valid-height="0" event-img="1" />
                           <span class="valid-error text-danger" id="img-error-3"></span>
                        </div>
                        <div class="form-group col-3">
                           <label for="event_images">Image 4 <span class="text-danger">*</span></label>
                           <input type="file" accept=".jpg, .jpeg, .png" required class="form-control validate-width-height-size-type" name="image4" valid-id="img-error-4" valid-width="0" valid-height="0" event-img="1" />
                           <span class="valid-error text-danger" id="img-error-4"></span>
                        </div>
                        <div class="form-group col-12">
                           <label for="event_images">About Event <span class="text-danger">*</span></label>
                           <textarea class="form-control" required name="about_event" rows="5"></textarea>
                        </div>
                        <div class="form-group col-3">
                           <label for="event_images">Facebook Link</label>
                           <input type="url" class="form-control" placeholder="https://facebook.com/sps-events-link" name="fb_link" />
                        </div>
                        <div class="form-group col-3">
                           <label for="event_images">YouTube Link</label>
                           <input type="url" class="form-control" placeholder="https://youtube.com/sps-events-link" name="yt_link" />
                        </div>
                        <div class="form-group col-3">
                           <label for="event_images">Linkedin Link</label>
                           <input type="url" class="form-control" placeholder="https://linkedin.com/sps-events-link" name="in_link" />
                        </div>
                        <div class="form-group col-3">
                           <label for="event_images">Instagram Link</label>
                           <input type="url" class="form-control" placeholder="https://instagram.com/sps-events-link" name="insta_link" />
                        </div>
                        
                        <div class="form-group col-4">
                           <label for="event_images">Meta Title</label>
                           <textarea class="form-control" name="meta_title"></textarea>
                        </div>
                        <div class="form-group col-4">
                           <label for="event_images">Meta Keywords</label>
                           <textarea class="form-control" name="meta_keyword"></textarea>
                        </div>
                        <div class="form-group col-4">
                           <label for="event_images">Meta Description</label>
                           <textarea class="form-control" name="meta_description"></textarea>
                        </div>

                        <div class="form-group col-12">
                           <input type="checkbox" name="recent_happening" id="recent_happening" value="1" />
                           Check this box to show this event in recent happenings.
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
         
      </div>

   </div>
</section>


<script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
<script>
   CKEDITOR.replace("about_event");
</script> 