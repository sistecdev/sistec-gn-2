<section class="page__content">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <p class="font-bold mb-1">
               Click <a href="<?= base_url("assets/web/pdf/student-diary.pdf") ?>" target="_blank" class="primary-clr">here</a> to download the student diary
            </p>
            <div class="space-y-5">
               <p class="font-bold">
                  All the students of the Sagar Group must strictly adhere to the Rules and Regulations and Code of Conduct enforced by the College from time to time. In general, the students should conduct themselves with dignity and decorum and observe the following rules:
               </p>
               <ul class="publications-ul space-y-1">
                  <?php foreach ($codeOfConduct as $cocKey => $cocData) { ?>
                     <li><?= $cocData; ?></li>
                  <?php } ?>
               </ul>
               <p class="font-bold">
                  Besides following the laid procedure of admissions, we at 'SISTec' try to come up with innovative and fruitful ways to provide assistance in counseling such as delivering presentations on career guidance, providing helpline numbers to acquaint the candidates with all the information regarding college, admission details, counseling procedures etc. to all the candidates.
               </p>
               <div>
                  <h4 class="font-bold tertiary-clr">Examinations</h4>
                  <p>
                     In addition to the semester exams conducted by RGPV, our institute conducts our own exams such as Mid Semester Exams I and II and Pre University Test, prior to the University exams. The marks obtained in these exams as well as periodic assignments will count for the sessional marks. The students are expected to take them seriously.
                  </p>
               </div>
               <div>
                  <h4 class="font-bold tertiary-clr">Attendance</h4>
                  <ul class="publications-ul space-y-1">
                     <li class="pt-0">Student are required to attend at least 75% of lectures of each subject and practical separately. However con-donation of 15% absence can be considered as per the ordinance of the university.</li>
                     <li>Leave, other than vacation will not be encouraged. Parents and guardians are requested not to promote their wards to take leave from the college.</li>
                     <li>Admission rules and procedures are subjected to alteration / modification at any time without notice to the candidates.</li>
                     <li>Students, remaining absent from the classes for longer duration is liable to be removed from the college rolls.</li>
                  </ul>
               </div>
               <div>
                  <h4 class="font-bold tertiary-clr">Vacation</h4>
                  <p>
                     As far as possible there will be a semester break of 10 to 15 days after the end of odd semester examinations. Summer Vacation of 20-30 days at the end of even semester examination will be given depending upon University notification.
                  </p>
               </div>
               <div>
                  <h4 class="font-bold tertiary-clr">Ragging</h4>
                  <p>
                     Any student found guilty of ragging in or outside the campus will be liable to severe disciplinary action. The act of ragging is punishable offense under Govt. Law. Under this Law the student is liable to be dismissed from the college without any notice and the case may be reported to the police, if necessary.
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<?php require_once(FOOTER__DESIGN__PATH); ?>