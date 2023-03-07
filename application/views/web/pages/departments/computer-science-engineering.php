<section class="page__content">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="d-flex align-items-start departments-nav">
               <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  <?php $i = 0;
                  foreach ($departmentTabs["others"] as $deptKey => $deptValue) {
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
                           <button class="nav-link" id="about-peo-tab" data-bs-toggle="tab" data-bs-target="#about-peo" type="button" role="tab" aria-controls="about-peo" aria-selected="false">PEOs</button>
                           <button class="nav-link" id="about-pso-tab" data-bs-toggle="tab" data-bs-target="#about-pso" type="button" role="tab" aria-controls="about-pso" aria-selected="false">PSOs</button>
                           <button class="nav-link" id="about-po-tab" data-bs-toggle="tab" data-bs-target="#about-po" type="button" role="tab" aria-controls="about-po" aria-selected="false">POs</button>
                        </div>
                     </nav>
                     <div class="tab-content mt-3" id="nav-tabContent">
                        <div class="tab-pane fade show active space-y-5" id="about-text" role="tabpanel" aria-labelledby="about-text-tab">
                           <div>
                              <h2 class="title"><?= $pageHeader->title; ?></h2>
                              <div class="dept-content">
                                 <?= $departmentAbout["cs"]; ?>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="about-vision" role="tabpanel" aria-labelledby="about-vision-tab">
                           <div>
                              <h2 class="title">Vision</h2>
                              <div class="dept-content">
                                 <?= $departmentVision["cs"]; ?>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="about-mission" role="tabpanel" aria-labelledby="about-mission-tab">
                           <div>
                              <h2 class="title">Mission</h2>
                              <div class="dept-content">
                                 <?= $departmentMission["cs"]; ?>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="about-peo" role="tabpanel" aria-labelledby="about-peo-tab">
                           <div>
                              <h2 class="title">Programme Educational Objectives</h2>
                              <div class="dept-content">
                                 <table class="table">
                                    <tbody>
                                       <?php foreach ($departmentPEO["cs"] as $deptPeoKey => $deptPeoValue) { ?>
                                          <tr>
                                             <th><?= $deptPeoKey; ?></th>
                                             <td><?= $deptPeoValue; ?></td>
                                          </tr>
                                       <?php } ?>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="about-pso" role="tabpanel" aria-labelledby="about-pso-tab">
                           <div>
                              <h2 class="title">Programme Specific Outcomes</h2>
                              <div class="dept-content">
                                 <table class="table">
                                    <tbody>
                                       <?php foreach ($departmentPSO["cs"] as $deptPsoKey => $deptPsoValue) { ?>
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
                     <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                           <button class="nav-link active" id="ug-text-tab" data-bs-toggle="tab" data-bs-target="#ug-text" type="button" role="tab" aria-controls="ug-text" aria-selected="true">Undergraduate (UG)</button>
                           <button class="nav-link" id="pg-vision-tab" data-bs-toggle="tab" data-bs-target="#pg-vision" type="button" role="tab" aria-controls="pg-vision" aria-selected="false">Postgraduate (PG)</button>
                        </div>
                     </nav>
                     <div class="tab-content mt-3" id="nav-tabContent">
                        <div class="tab-pane fade show active space-y-5" id="ug-text" role="tabpanel" aria-labelledby="ug-text-tab">
                           <div>
                              <h2 class="title">B.Tech. Computer Science Engineering (CSE) <br> <span>Current Intake : 180</span></h2>
                              <div class="dept-content">
                                 <p>
                                    B.Tech. in Computer Science & Engineering is a four-year professional undergraduate program endeavors to provide students with an exposure to industry leading technologies. The main objectives of the B.Tech. (CSE) program is to produce engineers who are well prepared for industries with necessary core competency to be successful in engineering/entrepreneurship careers.
                                 </p>
                                 <table class="table table-striped">
                                    <thead>
                                       <tr>
                                          <th class="text-center">S.No.</th>
                                          <th class="text-center">Program</th>
                                          <th class="text-center">Semester</th>
                                          <th class="text-center">Scheme</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <?php $i = 0;
                                       foreach ($departmentProgramsUG["cs"] as $deptProgKey => $deptProgValue) {
                                          $i++; ?>
                                          <tr class="text-center align-middle">
                                             <th class="text-center"><?= $i; ?></th>
                                             <td class="text-center"><?= $deptProgValue["program"]; ?></td>
                                             <td class="text-center"><?= $deptProgValue["semester"]; ?></td>
                                             <td class="text-center">
                                                <a href="<?= $deptProgValue["scheme"]; ?>" target="_blank" class="web__btn__two">View</a>
                                             </td>
                                          </tr>
                                       <?php } ?>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="pg-vision" role="tabpanel" aria-labelledby="pg-vision-tab">
                           <div>
                              <h2 class="title">M.Tech. Computer Science Engineering (CSE) <br> Current Intake : 18</h2>
                              <div class="dept-content">
                                 <p>
                                    M. Tech. in Computer Science & Engineering is typically a 2-year postgraduate level degree program, divided into 4 semesters. It is a course program which provides students with an enriching exposure to research, entrepreneurship and innovation, internationalization, placements through a quality learning experience. The Faculty of Computer Science at the College endeavors to provide students with an exposure to industry leading technologies through its MTech program.
                                 </p>
                                 <table class="table table-striped">
                                    <thead>
                                       <tr>
                                          <th class="text-center">S.No.</th>
                                          <th class="text-center">Program</th>
                                          <th class="text-center">Semester</th>
                                          <th class="text-center">Scheme</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <?php $i = 0;
                                       foreach ($departmentProgramsPG["cs"] as $deptProgKey => $deptProgValue) {
                                          $i++; ?>
                                          <tr class="text-center align-middle">
                                             <th class="text-center"><?= $i; ?></th>
                                             <td class="text-center"><?= $deptProgValue["program"]; ?></td>
                                             <td class="text-center"><?= $deptProgValue["semester"]; ?></td>
                                             <td class="text-center">
                                                <a href="<?= $deptProgValue["scheme"]; ?>" target="_blank" class="web__btn__two">View</a>
                                             </td>
                                          </tr>
                                       <?php } ?>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="tab-pane fade" id="v-pills-faculty" role="tabpanel" aria-labelledby="v-pills-faculty-tab">
                     <div class="space-y-5">
                        <h2 class="title">Faculties of <?= $pageHeader->title; ?></h2>
                        <div class="faculty-cards-flex">
                           <?php for ($i = 0; $i < count($departmentFaculties["cs"]); $i++) {
                              $faculty =
                                 $departmentFaculties["cs"][$i]; ?>
                              <div class="faculty-card">
                                 <img src="<?= base_url() . $faculty["image"]; ?>">
                                 <div class="faculty-card-content space-y-3">
                                    <div>
                                       <p class="font-bold" id="cs<?= $i; ?>name"><?= $faculty["name"]; ?></p>
                                       <p id="cs<?= $i; ?>designation"><?= $faculty["designation"]; ?></p>
                                       <p class="d-none" id="cs<?= $i; ?>about"><?= $faculty["about"]; ?></p>
                                       <p class="d-none" id="cs<?= $i; ?>qualification"><?= $faculty["qualification"]; ?></p>
                                       <p class="d-none" id="cs<?= $i; ?>industrial"><?= $faculty["industrial-experience"]; ?></p>
                                       <p class="d-none" id="cs<?= $i; ?>teaching"><?= $faculty["teaching-experience"]; ?></p>
                                       <p class="d-none" id="cs<?= $i; ?>specialization"><?= $faculty["specialization"]; ?></p>
                                       <p class="d-none" id="cs<?= $i; ?>association"><?= $faculty["association"]; ?></p>
                                    </div>
                                    <a href="#!" class="web__btn__two" data-bs-toggle="modal" data-bs-target="#departmentFacultyModal" data-facid="cs<?= $i; ?>" onclick="showFacultyDetailsInFacultyModal(this)">
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
                        <table class="table table-striped">
                           <thead>
                              <tr class="text-center align-middle">
                                 <th class="text-center">Sr. No.</th>
                                 <th class="text-center">Name</th>
                                 <th class="text-center">Enrollment No.</th>
                                 <th class="text-center">Achievement</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php for ($i = 0; $i < count($departmentStudentAchievements["cs"]); $i++) { ?>
                                 <tr class="align-middle">
                                    <th class="text-center"><?= $i + 1; ?></th>
                                    <td class="text-center"><?= $departmentStudentAchievements["cs"][$i]["name"] ?></td>
                                    <td class="text-center"><?= $departmentStudentAchievements["cs"][$i]["enrollment"] ?></td>
                                    <td class="text-center"><?= $departmentStudentAchievements["cs"][$i]["achievement"] ?></td>
                                 </tr>
                              <?php } ?>
                           </tbody>
                        </table>
                     </div>
                  </div>

                  <div class="tab-pane fade" id="v-pills-laboratories" role="tabpanel" aria-labelledby="v-pills-laboratories-tab">
                     <h2 class="title">Laboratories</h2>
                     <div class="projects-cards-grid">
                        <div class="projects-card">
                           <h1 class="project-card-title">Automatic Hand Sanitizer</h1>
                           <img src="<?= base_url("assets/admin/upload/projects/ec/Automatic-Hand-Sanitizer.png"); ?>">
                        </div>
                        <div class="projects-card">
                           <h1 class="project-card-title">Automatic supervision personal robot</h1>
                           <img src="<?= base_url("assets/admin/upload/projects/ec/Automatic-supervision-of-temperature-humidity-gas-with-an-assistant-personal-robot.png"); ?>">
                        </div>
                        <div class="projects-card">
                           <h1 class="project-card-title">Autonomous Bot</h1>
                           <img src="<?= base_url("assets/admin/upload/projects/ec/Autonomous-Bot.png"); ?>">
                        </div>
                        <div class="projects-card">
                           <h1 class="project-card-title">Dual Axis solar tracking system using IOT</h1>
                           <img src="<?= base_url("assets/admin/upload/projects/ec/Dual-Axis-solar-tracking-system-using-IOT.png"); ?>">
                        </div>
                     </div>
                  </div>

                  <div class="tab-pane fade" id="v-pills-vac" role="tabpanel" aria-labelledby="v-pills-vac-tab">
                     <h2 class="title">Value Added Courses</h2>
                     <div class="space-y-3">
                        <table class="table table-striped">
                           <thead>
                              <tr>
                                 <th colspan="4" class="text-center text-uppercase fs-4 font-bold">
                                    CSE Department
                                 </th>
                              </tr>
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
                              foreach ($departmentVac["cs"]["cse"] as $deptVacKey => $deptVacValue) {
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

                        <table class="table table-striped">
                           <thead>
                              <tr>
                                 <th colspan="4" class="text-center text-uppercase fs-4 font-bold">
                                    EE Department
                                 </th>
                              </tr>
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
                              foreach ($departmentVac["cs"]["ee"] as $deptVacKey => $deptVacValue) {
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

                        <table class="table table-striped">
                           <thead>
                              <tr>
                                 <th colspan="4" class="text-center text-uppercase fs-4 font-bold">
                                    ECE Department
                                 </th>
                              </tr>
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
                              foreach ($departmentVac["cs"]["ece"] as $deptVacKey => $deptVacValue) {
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
                  </div>

                  <div class="tab-pane fade" id="v-pills-sttp" role="tabpanel" aria-labelledby="v-pills-sttp-tab">
                     <h2 class="title">STTP<span class="text-lowercase">s</span> / FDP<span class="text-lowercase">s</span> / Workshops</h2>
                     <div class="events-grid">
                        <?php for ($i = 0; $i <= 6; $i++) { ?>
                           <div class="event-card">
                              <div class="date-frame">
                                 <div class="date-box">
                                    <p>Dec</p>
                                    <p>21</p>
                                 </div>
                              </div>
                              <div class="event-card-img">
                                 <img src="https://www.spssn.ac.in/assets/admin/upload/events//national-level-in-national-childrens-science-congress-on-21dec2022-img1.jpg">
                              </div>
                              <div class="content-box">
                                 <p class="the-title line-clamp-1">
                                    National level in National Children's Science Congress </p>
                                 <p class="sub-title line-clamp-2">
                                    Very Happy to share that Science project made by Giriraj Taunk, Class VII @ Sagar Public School, Saket Nagar is selected for National level in National Children's Science Congress after winning first position in VI-VIII group.
                                    He will be presenting his project at Ahemdabad for Nationals.
                                    Congratulations to Giriraj. </p>
                                 <a href="http://localhost:8080/sagar/sistec_gn_code/sistec_gn/inner-event" class="event-card-btn">
                                    Read More <i class="fas fa-long-arrow-alt-right icon-circle"></i>
                                 </a>
                              </div>
                           </div>
                        <?php } ?>
                     </div>
                  </div>

                  <div class="tab-pane fade" id="v-pills-projects" role="tabpanel" aria-labelledby="v-pills-projects-tab">
                     <h2 class="title">Projects</h2>
                     <div class="projects-cards-grid">
                        <div class="projects-card">
                           <h1 class="project-card-title">An Online Compiler</h1>
                           <img src="<?= base_url("assets/admin/upload/projects/ec/Automatic-Hand-Sanitizer.png"); ?>">
                        </div>
                        <div class="projects-card">
                           <h1 class="project-card-title">Genre of Music</h1>
                           <img src="<?= base_url("assets/admin/upload/projects/ec/Automatic-Hand-Sanitizer.png"); ?>">
                        </div>
                        <div class="projects-card">
                           <h1 class="project-card-title">Megical Paws</h1>
                           <img src="<?= base_url("assets/admin/upload/projects/ec/Automatic-Hand-Sanitizer.png"); ?>">
                        </div>
                        <div class="projects-card">
                           <h1 class="project-card-title">Smart Electrical Load Prediction System</h1>
                           <img src="<?= base_url("assets/admin/upload/projects/ec/Automatic-Hand-Sanitizer.png"); ?>">
                        </div>
                        <div class="projects-card">
                           <h1 class="project-card-title">Ticket Manager</h1>
                           <img src="<?= base_url("assets/admin/upload/projects/ec/Automatic-Hand-Sanitizer.png"); ?>">
                        </div>
                     </div>
                  </div>

                  <div class="tab-pane fade" id="v-pills-visits" role="tabpanel" aria-labelledby="v-pills-visits-tab">
                     <h2 class="title">Industrial Visits</h2>
                     <div class="space-y-6">
                        <div class="industrial-visit-card">
                           <div class="industrial-visit-header">
                              <h1 class="iv-title">Industrial Visit: Smart City Bhopal</h1>
                              <p class="iv-date">2<sup>nd</sup> Nov 2022</p>
                           </div>
                           <div class="industrial-visit-images-grid">
                              <img src="<?= base_url("assets/admin/upload/industrial-visits/ec/1.1.png") ?>">
                              <img src="<?= base_url("assets/admin/upload/industrial-visits/ec/1.2.png") ?>">
                              <img src="<?= base_url("assets/admin/upload/industrial-visits/ec/1.3.png") ?>">
                           </div>
                        </div>

                        <div class="industrial-visit-card">
                           <div class="industrial-visit-header">
                              <h1 class="iv-title">Industrial Visit: SMPL</h1>
                              <p class="iv-date">27<sup>th</sup> Aug 2022</p>
                           </div>
                           <div class="industrial-visit-images-grid">
                              <img src="<?= base_url("assets/admin/upload/industrial-visits/ec/2.1.png") ?>">
                              <img src="<?= base_url("assets/admin/upload/industrial-visits/ec/2.2.png") ?>">
                              <img src="<?= base_url("assets/admin/upload/industrial-visits/ec/2.3.png") ?>">
                           </div>
                        </div>

                        <div class="industrial-visit-card">
                           <div class="industrial-visit-header">
                              <h1 class="iv-title">Industrial Visit: Meteorological Centre</h1>
                              <p class="iv-date">5<sup>th</sup> Aug 2022</p>
                           </div>
                           <div class="industrial-visit-images-grid">
                              <img src="<?= base_url("assets/admin/upload/industrial-visits/ec/3.1.png") ?>">
                              <img src="<?= base_url("assets/admin/upload/industrial-visits/ec/3.2.png") ?>">
                              <img src="<?= base_url("assets/admin/upload/industrial-visits/ec/3.3.png") ?>">
                           </div>
                        </div>

                        <div class="industrial-visit-card">
                           <div class="industrial-visit-header">
                              <h1 class="iv-title">Industrial Visit: Parle Agro</h1>
                              <p class="iv-date">25<sup>th</sup> July 2022</p>
                           </div>
                           <div class="industrial-visit-images-grid">
                              <img src="<?= base_url("assets/admin/upload/industrial-visits/ec/4.1.png") ?>">
                              <img src="<?= base_url("assets/admin/upload/industrial-visits/ec/4.2.png") ?>">
                           </div>
                        </div>

                        <div class="industrial-visit-card">
                           <div class="industrial-visit-header">
                              <h1 class="iv-title">Industrial Visit: AAI</h1>
                              <p class="iv-date">3<sup>rd</sup> Mar 2022</p>
                           </div>
                           <div class="industrial-visit-images-grid">
                              <img src="<?= base_url("assets/admin/upload/industrial-visits/ec/5.1.png") ?>">
                              <img src="<?= base_url("assets/admin/upload/industrial-visits/ec/5.2.png") ?>">
                              <img src="<?= base_url("assets/admin/upload/industrial-visits/ec/5.3.png") ?>">
                           </div>
                        </div>

                        <div class="industrial-visit-card">
                           <div class="industrial-visit-header">
                              <h1 class="iv-title">Industrial Visit: Artech Solonics Pvt. ltd.</h1>
                              <p class="iv-date">9<sup>th</sup> Feb 2022</p>
                           </div>
                           <div class="industrial-visit-images-grid">
                              <img src="<?= base_url("assets/admin/upload/industrial-visits/ec/6.1.png") ?>">
                              <img src="<?= base_url("assets/admin/upload/industrial-visits/ec/6.2.png") ?>">
                              <img src="<?= base_url("assets/admin/upload/industrial-visits/ec/6.3.png") ?>">
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="tab-pane fade" id="v-pills-publications" role="tabpanel" aria-labelledby="v-pills-publications-tab">
                     <h2 class="title">Publications</h2>
                     <div class="space-y-6">
                        <?php $i = 0;
                        foreach ($departmentPublications["ece"] as $deptPublicationKey => $deptPublicationValue) {
                           $i++; ?>
                           <div>
                              <h1 class="publications-person-title"><?= $i . "). " . $deptPublicationKey; ?></h1>
                              <ul class="publications-ul space-y-1">
                                 <?php
                                 foreach ($departmentPublications["ece"][$deptPublicationKey] as
                                    $deptPersonPublicationKey => $deptPersonPublicationValue) { ?>
                                    <li><?= $deptPersonPublicationValue; ?></li>
                                 <?php }
                                 ?>
                              </ul>
                           </div>
                        <?php
                        } ?>
                     </div>
                  </div>

                  <div class="tab-pane fade" id="v-pills-newsletters" role="tabpanel" aria-labelledby="v-pills-newsletters-tab">
                     <h2 class="title">Newsletters</h2>
                     <div class="newsletter-cards-grid">
                        <?php $i = 0;
                        foreach ($departmentNewsletters["ece"] as $deptNewsLetterKey => $deptNewsLetterValue) {
                           $i++; ?>
                           <a href="<?= base_url($deptNewsLetterValue["link"]); ?>" class="newsletter-card">
                              <?= $deptNewsLetterValue["year"] ?> Magazine
                           </a>
                        <?php } ?>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<?php require_once(FOOTER__DESIGN__PATH); ?>