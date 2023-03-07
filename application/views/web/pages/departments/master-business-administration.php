<section class="page__content">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="d-flex align-items-start departments-nav">
               <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  <?php $i = 0;
                  foreach ($departmentTabs["mba"] as $deptKey => $deptValue) {
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
                           <button class="nav-link" id="about-pso-tab" data-bs-toggle="tab" data-bs-target="#about-pso" type="button" role="tab" aria-controls="about-pso" aria-selected="false">PSOs</button>
                           <button class="nav-link" id="about-po-tab" data-bs-toggle="tab" data-bs-target="#about-po" type="button" role="tab" aria-controls="about-po" aria-selected="false">POs</button>
                        </div>
                     </nav>
                     <div class="tab-content mt-3" id="nav-tabContent">
                        <div class="tab-pane fade show active space-y-5" id="about-text" role="tabpanel" aria-labelledby="about-text-tab">
                           <div>
                              <h2 class="title"><?= $pageHeader->title; ?></h2>
                              <div class="dept-content">
                                 <?= $departmentAbout["mba"]; ?>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="about-vision" role="tabpanel" aria-labelledby="about-vision-tab">
                           <div>
                              <h2 class="title">Vision</h2>
                              <div class="dept-content">
                                 <?= $departmentVision["mba"]; ?>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="about-mission" role="tabpanel" aria-labelledby="about-mission-tab">
                           <div>
                              <h2 class="title">Mission</h2>
                              <div class="dept-content">
                                 <?= $departmentMission["mba"]; ?>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="about-pso" role="tabpanel" aria-labelledby="about-pso-tab">
                           <div>
                              <h2 class="title">Programme Specific Outcomes</h2>
                              <div class="dept-content">
                                 <table class="table">
                                    <tbody>
                                       <?php foreach ($departmentPSO["mba"] as $deptPsoKey => $deptPsoValue) { ?>
                                          <tr>
                                             <th><?= $deptPsoKey; ?></th>
                                             <td><?= $deptPsoValue; ?></td>
                                          </tr>
                                       <?php } ?>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="about-po" role="tabpanel" aria-labelledby="about-po-tab">
                           <div>
                              <h2 class="title">Programme Outcomes</h2>
                              <div class="dept-content">
                                 <table class="table mb-0">
                                    <tbody>
                                       <?php foreach ($departmentPO["mba"] as $deptPoKey => $deptPoValue) { ?>
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
                        <h2 class="title">MBA Affiliated to Barkatullah University, Bhopal (M.P.) <br> <span>Current Intake : 150</span></h2>
                        <div class="dept-content">
                           <p>
                              Masters in Business Administration is a 2-year postgraduate level degree program, divided into 4 semesters. It is a course program focusing on both theoretical & practical aspects to students in the field of management. This PG-level course aims at producing trained professionals who can successfully deal with fulfilling the exact market demands.
                           </p>
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
                                 foreach ($departmentProgramsPG["mba"] as $deptProgKey => $deptProgValue) {
                                    $i++; ?>
                                    <tr class="text-center align-middle">
                                       <th class="text-center"><?= $i; ?></th>
                                       <td class="text-center"><?= $deptProgValue["program"]; ?></td>
                                       <td class="text-center"><?= $deptProgValue["semester"]; ?></td>
                                       <td class="text-center">
                                          <a href="<?= base_url($deptProgValue['syllabus']) ?>" target="_blank" class="web__btn__two">View</a>
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
                           <?php for ($i = 0; $i < count($departmentFaculties["mba"]); $i++) {
                              $faculty =
                                 $departmentFaculties["mba"][$i]; ?>
                              <div class="faculty-card">
                                 <img src="<?= base_url() . $faculty["image"]; ?>">
                                 <div class="faculty-card-content space-y-3">
                                    <div>
                                       <p class="font-bold" id="mba<?= $i; ?>name"><?= $faculty["name"]; ?></p>
                                       <p id="mba<?= $i; ?>designation"><?= $faculty["designation"]; ?></p>
                                       <p class="d-none" id="mba<?= $i; ?>about"><?= $faculty["about"]; ?></p>
                                       <p class="d-none" id="mba<?= $i; ?>qualification"><?= $faculty["qualification"]; ?></p>
                                       <p class="d-none" id="mba<?= $i; ?>industrial"><?= $faculty["industrial-experience"]; ?></p>
                                       <p class="d-none" id="mba<?= $i; ?>teaching"><?= $faculty["teaching-experience"]; ?></p>
                                       <p class="d-none" id="mba<?= $i; ?>specialization"><?= $faculty["specialization"]; ?></p>
                                       <p class="d-none" id="mba<?= $i; ?>association"><?= $faculty["association"]; ?></p>
                                    </div>
                                    <a href="#!" class="web__btn__two" data-bs-toggle="modal" data-bs-target="#departmentFacultyModal" data-facid="mba<?= $i; ?>" onclick="showFacultyDetailsInFacultyModal(this)">
                                       Know More
                                    </a>
                                 </div>
                              </div>
                           <?php } ?>
                        </div>
                     </div>
                  </div>

                  <div class="tab-pane fade" id="v-pills-student-achievements" role="tabpanel" aria-labelledby="v-pills-student-achievements-tab">
                     <div class="space-y-5">
                        <h2 class="title">Student Achievements</h2>
                        <table class="table table-striped align-middle">
                           <thead>
                              <tr class="text-center align-middle">
                                 <th class="text-center">Sr. No.</th>
                                 <th class="text-center">Name</th>
                                 <th class="text-center">Enrollment No.</th>
                                 <th class="text-center">Achievement</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php for ($i = 0; $i < count($departmentStudentAchievements["mba"]); $i++) { ?>
                                 <tr>
                                    <th class="text-center"><?= $i + 1; ?></th>
                                    <td class="text-center"><?= $departmentStudentAchievements["mba"][$i]["name"] ?></td>
                                    <td class="text-center"><?= $departmentStudentAchievements["mba"][$i]["enrollment"] ?></td>
                                    <td class="text-center"><?= $departmentStudentAchievements["mba"][$i]["achievement"] ?></td>
                                 </tr>
                              <?php } ?>
                           </tbody>
                        </table>
                     </div>
                  </div>

                  <div class="tab-pane fade" id="v-pills-laboratories" role="tabpanel" aria-labelledby="v-pills-laboratories-tab">
                     <div class="space-y-5">
                        <h2 class="title">Laboratories</h2>
                        <div class="projects-cards-grid">
                           <div class="projects-card">
                              <h1 class="project-card-title">MBA Lab 1</h1>
                              <img src="<?= base_url("assets/admin/upload/projects/ec/Automatic-Hand-Sanitizer.png"); ?>">
                           </div>
                           <div class="projects-card">
                              <h1 class="project-card-title">MBA Lab 2</h1>
                              <img src="<?= base_url("assets/admin/upload/projects/ec/Automatic-supervision-of-temperature-humidity-gas-with-an-assistant-personal-robot.png"); ?>">
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="tab-pane fade" id="v-pills-vac" role="tabpanel" aria-labelledby="v-pills-vac-tab">
                     <h2 class="title">Value Added Courses</h2>
                     <table class="table table-striped">
                        <thead>
                           <tr>
                              <th class="text-center text-uppercase" colspan="4">
                                 ROAD MAP OF TECHNICAL TRAINING MODULES / Value Added Courses
                              </th>
                           </tr>
                           <tr class="text-center align-middle">
                              <th class="text-center">Session</th>
                              <th class="text-center">Semester</th>
                              <th class="text-center">Course Name</th>
                              <th class="text-center">Course Duration in Hours</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php $i = 0;
                           foreach ($departmentVac["mba"] as $deptVacKey => $deptVacValue) {
                              $i++; ?>
                              <tr class="text-center align-middle">
                                 <td class="text-center w-25"><?= $deptVacValue["session"]; ?></td>
                                 <td class="text-center w-25"><?= $deptVacValue["semester"]; ?></td>
                                 <td class="text-center w-25"><?= $deptVacValue["course"]; ?></td>
                                 <td class="text-center w-25"><?= $deptVacValue["duration"]; ?></td>
                              </tr>
                           <?php } ?>
                        </tbody>
                     </table>
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
                                          foreach ($conferences as $j) {
                                             $i++; ?>
                                             <tr class="text-center align-middle">
                                                <td class="text-center"><?= $i; ?></td>
                                                <td class="text-center"><?= $j->teacher_name; ?></td>
                                                <td class="text-center"><?= $j->title; ?></td>
                                                <td class="text-center"><?= $j->conference_name; ?></td>
                                                <td class="text-center"><?= $j->type; ?></td>
                                                <td class="text-center"><?= $j->year; ?></td>
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

                  <div class="tab-pane fade" id="v-pills-visits" role="tabpanel" aria-labelledby="v-pills-visits-tab">
                     <h2 class="title">Industrial Visits</h2>
                     <div class="space-y-6">
                        <div class="industrial-visit-card">
                           <div class="industrial-visit-header">
                              <h1 class="iv-title">Industrial Visit: Central Railside Warehouse Company Limited (CRWC)</h1>
                              <p class="iv-date">9<sup>th</sup> Dec 2021</p>
                           </div>
                           <div class="industrial-visit-images-grid">
                              <img src="<?= base_url("assets/admin/upload/industrial-visits/mba/1.1.png") ?>">
                              <img src="<?= base_url("assets/admin/upload/industrial-visits/mba/1.2.png") ?>">
                              <img src="<?= base_url("assets/admin/upload/industrial-visits/mba/1.3.png") ?>">
                           </div>
                        </div>

                        <div class="industrial-visit-card">
                           <div class="industrial-visit-header">
                              <h1 class="iv-title">Industrial Visit: MY FM Corporate Office</h1>
                              <p class="iv-date">6<sup>th</sup> Dec 2020</p>
                           </div>
                           <div class="industrial-visit-images-grid">
                              <img src="<?= base_url("assets/admin/upload/industrial-visits/mba/2.1.png") ?>">
                              <img src="<?= base_url("assets/admin/upload/industrial-visits/mba/2.2.png") ?>">
                              <img src="<?= base_url("assets/admin/upload/industrial-visits/mba/2.3.png") ?>">
                           </div>
                        </div>

                        <div class="industrial-visit-card">
                           <div class="industrial-visit-header">
                              <h1 class="iv-title">Industrial Visit: SMPL</h1>
                              <p class="iv-date">25<sup>th</sup> Jan 2020</p>
                           </div>
                           <div class="industrial-visit-images-grid">
                              <img src="<?= base_url("assets/admin/upload/industrial-visits/mba/3.1.png") ?>">
                              <img src="<?= base_url("assets/admin/upload/industrial-visits/mba/3.2.png") ?>">
                              <img src="<?= base_url("assets/admin/upload/industrial-visits/mba/3.3.png") ?>">
                           </div>
                        </div>

                        <div class="industrial-visit-card">
                           <div class="industrial-visit-header">
                              <h1 class="iv-title">Industrial Visit: Adarsh Pvt. Ltd. </h1>
                              <p class="iv-date">16<sup>th</sup> Jan 2020</p>
                           </div>
                           <div class="industrial-visit-images-grid">
                              <img src="<?= base_url("assets/admin/upload/industrial-visits/mba/4.1.png") ?>">
                              <img src="<?= base_url("assets/admin/upload/industrial-visits/mba/4.2.png") ?>">
                              <img src="<?= base_url("assets/admin/upload/industrial-visits/mba/4.3.png") ?>">
                           </div>
                        </div>

                        <div class="industrial-visit-card">
                           <div class="industrial-visit-header">
                              <h1 class="iv-title">Industrial Visit: Cola Plant</h1>
                              <p class="iv-date">22<sup>nd</sup> Feb 2019</p>
                           </div>
                           <div class="industrial-visit-images-grid">
                              <img src="<?= base_url("assets/admin/upload/industrial-visits/mba/5.1.png") ?>">
                              <img src="<?= base_url("assets/admin/upload/industrial-visits/mba/5.2.png") ?>">
                              <img src="<?= base_url("assets/admin/upload/industrial-visits/mba/5.3.png") ?>">
                           </div>
                        </div>

                        <div class="industrial-visit-card">
                           <div class="industrial-visit-header">
                              <h1 class="iv-title">Industrial Visit: SMPL</h1>
                              <p class="iv-date">27<sup>th</sup> Feb 2019</p>
                           </div>
                           <div class="industrial-visit-images-grid">
                              <img src="<?= base_url("assets/admin/upload/industrial-visits/mba/6.1.png") ?>">
                              <img src="<?= base_url("assets/admin/upload/industrial-visits/mba/6.2.png") ?>">
                              <img src="<?= base_url("assets/admin/upload/industrial-visits/mba/6.3.png") ?>">
                           </div>
                        </div>

                        <div class="industrial-visit-card">
                           <div class="industrial-visit-header">
                              <h1 class="iv-title">Industrial Visit: Sanchi Dudh Sangh</h1>
                              <p class="iv-date">29<sup>th</sup> Oct 2018</p>
                           </div>
                           <div class="industrial-visit-images-grid">
                              <img src="<?= base_url("assets/admin/upload/industrial-visits/mba/7.1.png") ?>">
                              <img src="<?= base_url("assets/admin/upload/industrial-visits/mba/7.2.png") ?>">
                              <img src="<?= base_url("assets/admin/upload/industrial-visits/mba/7.3.png") ?>">
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