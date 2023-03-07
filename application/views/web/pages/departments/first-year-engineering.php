<section class="page__content">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="d-flex align-items-start departments-nav">
               <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  <?php $i = 0;
                  foreach ($departmentTabs["first_year"] as $deptKey => $deptValue) {
                     $i++; ?>
                     <button class="nav-link <?= ($i == 1) ? 'active' : '' ?>" id="v-pills-<?= $deptKey; ?>-tab" data-bs-toggle="pill" data-bs-target="#v-pills-<?= $deptKey; ?>" type="button" role="tab" aria-controls="v-pills-<?= $deptKey; ?>" aria-selected="true" onclick="scrollToDeptSection(this)">
                        <?= strtoupper($deptValue); ?>
                     </button>
                  <?php } ?>
               </div>

               <div class="tab-content" id="v-pills-tabContent">
                  <div class="tab-pane fade show active" id="v-pills-about" role="tabpanel" aria-labelledby="v-pills-about-tab">
                     <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                           <button class="nav-link active" id="about-text-tab" data-bs-toggle="tab" data-bs-target="#about-text" type="button" role="tab" aria-controls="about-text" aria-selected="true">About</button>
                           <button class="nav-link" id="about-vision-tab" data-bs-toggle="tab" data-bs-target="#about-vision" type="button" role="tab" aria-controls="about-vision" aria-selected="false">Vision</button>
                           <button class="nav-link" id="about-mission-tab" data-bs-toggle="tab" data-bs-target="#about-mission" type="button" role="tab" aria-controls="about-mission" aria-selected="false">Mission</button>
                           <button class="nav-link" id="about-po-tab" data-bs-toggle="tab" data-bs-target="#about-po" type="button" role="tab" aria-controls="about-po" aria-selected="false">POs</button>
                        </div>
                     </nav>
                     <div class="tab-content mt-3" id="nav-tabContent">
                        <div class="tab-pane fade show active space-y-5" id="about-text" role="tabpanel" aria-labelledby="about-text-tab">
                           <div>
                              <h2 class="title"><?= $pageHeader->title; ?></h2>
                              <div class="dept-content">
                                 <?= $departmentAbout["first_year"]; ?>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="about-vision" role="tabpanel" aria-labelledby="about-vision-tab">
                           <div>
                              <h2 class="title">Vision</h2>
                              <div class="dept-content">
                                 <?= $departmentVision["first_year"]; ?>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="about-mission" role="tabpanel" aria-labelledby="about-mission-tab">
                           <div>
                              <h2 class="title">Mission</h2>
                              <div class="dept-content">
                                 <?= $departmentMission["first_year"]; ?>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="about-po" role="tabpanel" aria-labelledby="about-po-tab">
                           <div>
                              <h2 class="title">Programme Outcomes</h2>
                              <div class="dept-content">
                                 <table class="table mb-0">
                                    <tbody>
                                       <?php foreach ($departmentPO["ece"] as $deptPoKey => $deptPoValue) { ?>
                                          <tr>
                                             <th><?= $deptPoKey; ?></th>
                                             <td><?= $deptPoValue; ?></td>
                                          </tr>
                                       <?php } ?>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="tab-pane fade" id="v-pills-programs" role="tabpanel" aria-labelledby="v-pills-programs-tab">
                     <div>
                        <h2 class="title">Basic Sciences Department <br> <span>Current Intake : 540</span></h2>
                        <div class="dept-content">
                           <table class="table table-striped">
                              <thead>
                                 <tr>
                                    <th class="text-center">S.No.</th>
                                    <th class="text-center">Program</th>
                                    <th class="text-center">Semester</th>
                                    <th class="text-center">Syllabus</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php $i = 0;
                                 foreach ($departmentProgramsUG["first_year"] as $deptProgKey => $deptProgValue) {
                                    $i++; ?>
                                    <tr class="text-center align-middle">
                                       <th class="text-center"><?= $i; ?></th>
                                       <td class="text-center"><?= $deptProgValue["program"]; ?></td>
                                       <td class="text-center"><?= $deptProgValue["semester"]; ?></td>
                                       <td class="text-center">
                                          <a href="<?= base_url($deptProgValue['scheme']) ?>" target="_blank" class="web__btn__two">View</a>
                                       </td>
                                    </tr>
                                 <?php } ?>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>

                  <div class="tab-pane fade" id="v-pills-faculty" role="tabpanel" aria-labelledby="v-pills-faculty-tab">
                     <div class="space-y-5">
                        <h2 class="title">Faculties of <?= $pageHeader->title; ?></h2>
                        <div class="faculty-cards-flex">
                           <?php for ($i = 0; $i < count($departmentFaculties["first_year"]); $i++) {
                              $faculty =
                                 $departmentFaculties["first_year"][$i]; ?>
                              <div class="faculty-card">
                                 <img src="<?= base_url() . $faculty["image"]; ?>">
                                 <div class="faculty-card-content space-y-3">
                                    <div>
                                       <p class="font-bold" id="first_year<?= $i; ?>name"><?= $faculty["name"]; ?></p>
                                       <p id="first_year<?= $i; ?>designation"><?= $faculty["designation"]; ?></p>
                                       <p class="d-none" id="first_year<?= $i; ?>about"><?= $faculty["about"]; ?></p>
                                       <p class="d-none" id="first_year<?= $i; ?>qualification"><?= $faculty["qualification"]; ?></p>
                                       <p class="d-none" id="first_year<?= $i; ?>industrial"><?= $faculty["industrial-experience"]; ?></p>
                                       <p class="d-none" id="first_year<?= $i; ?>teaching"><?= $faculty["teaching-experience"]; ?></p>
                                       <p class="d-none" id="first_year<?= $i; ?>specialization"><?= $faculty["specialization"]; ?></p>
                                       <p class="d-none" id="first_year<?= $i; ?>association"><?= $faculty["association"]; ?></p>
                                    </div>
                                    <a href="#!" class="web__btn__two" data-bs-toggle="modal" data-bs-target="#departmentFacultyModal" data-facid="first_year<?= $i; ?>" onclick="showFacultyDetailsInFacultyModal(this)">
                                       Know More
                                    </a>
                                 </div>
                              </div>
                           <?php } ?>
                        </div>
                     </div>
                  </div>

                  <div class="tab-pane fade" id="v-pills-laboratories" role="tabpanel" aria-labelledby="v-pills-laboratories-tab">
                     <div class="space-y-5">
                        <h2 class="title">Laboratories</h2>
                        <div class="projects-cards-grid">
                           <div class="projects-card">
                              <h1 class="project-card-title">Chemistry Lab</h1>
                              <img src="<?= base_url("assets/admin/upload/projects/ec/Automatic-Hand-Sanitizer.png"); ?>">
                           </div>
                           <div class="projects-card">
                              <h1 class="project-card-title">Physics Lab</h1>
                              <img src="<?= base_url("assets/admin/upload/projects/ec/Automatic-Hand-Sanitizer.png"); ?>">
                           </div>
                           <div class="projects-card">
                              <h1 class="project-card-title">Language Lab</h1>
                              <img src="<?= base_url("assets/admin/upload/projects/ec/Automatic-Hand-Sanitizer.png"); ?>">
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="tab-pane fade" id="v-pills-sttp" role="tabpanel" aria-labelledby="v-pills-sttp-tab">
                     <div class="space-y-5">
                        <h2 class="title">
                           STTP<span class="text-lowercase">s</span> / FDP<span class="text-lowercase">s</span> / Workshops
                        </h2>
                     </div>
                  </div>

                  <div class="tab-pane fade" id="v-pills-publications" role="tabpanel" aria-labelledby="v-pills-publications-tab">
                     <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                           <button class="nav-link active" id="journals-tab" data-bs-toggle="tab" data-bs-target="#journals" type="button" role="tab" aria-controls="journals" aria-selected="true">Journals</button>
                           <button class="nav-link" id="conferences-tab" data-bs-toggle="tab" data-bs-target="#conferences" type="button" role="tab" aria-controls="conferences" aria-selected="false">Conferences</button>
                        </div>
                     </nav>
                     <div class="tab-content mt-3" id="nav-tabContent">
                        <div class="tab-pane fade show active space-y-5" id="journals" role="tabpanel" aria-labelledby="journals-tab">
                           <div>
                              <h2 class="title">Journals</h2>
                              <div class="dept-content">
                                 <div class="table-responsive">
                                    <table class="table table-striped table-bordered rnd-projects-table">
                                       <thead>
                                          <tr class="align-middle">
                                             <th class="text-center">Sr. No.</th>
                                             <th class="text-center">Title of the Paper</th>
                                             <th class="text-center">Name of the Author(s)</th>
                                             <th class="text-center">Name of the Journal</th>
                                             <th class="text-center">Year of Publication</th>
                                             <th class="text-center">ISBN / ISSN Number</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <?php $i = 0;
                                          foreach ($journals as $j) {
                                             $i++; ?>
                                             <tr class="text-center align-middle">
                                                <td class="text-center"><?= $i; ?></td>
                                                <td class="text-center"><?= $j->title; ?></td>
                                                <td class="text-center"><?= $j->author_name; ?></td>
                                                <td class="text-center"><?= $j->journal_name; ?></td>
                                                <td class="text-center"><?= $j->publish_year; ?></td>
                                                <td class="text-center"><?= $j->isbn; ?></td>
                                             </tr>
                                          <?php } ?>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="conferences" role="tabpanel" aria-labelledby="conferences-tab">
                           <div>
                              <h2 class="title">Conferences</h2>
                              <div class="dept-content">
                                 <div class="table-responsive">
                                    <table class="table table-striped table-bordered rnd-projects-table">
                                       <thead>
                                          <tr class="align-middle">
                                             <th class="text-center">Sr. No.</th>
                                             <th class="text-center">Name of the Teacher</th>
                                             <th class="text-center">Title of the Paper</th>
                                             <th class="text-center">Name of the Conference</th>
                                             <th class="text-center">National / International</th>
                                             <th class="text-center">Publication Year</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <?php $i = 0;
                                          foreach ($conferences as $k) {
                                             $i++; ?>
                                             <tr class="text-center align-middle">
                                                <td class="text-center"><?= $i; ?></td>
                                                <td class="text-center"><?= $k->teacher_name; ?></td>
                                                <td class="text-center"><?= $k->title; ?></td>
                                                <td class="text-center"><?= $k->conference_name; ?></td>
                                                <td class="text-center"><?= $k->type; ?></td>
                                                <td class="text-center"><?= $k->year; ?></td>
                                             </tr>
                                          <?php } ?>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>