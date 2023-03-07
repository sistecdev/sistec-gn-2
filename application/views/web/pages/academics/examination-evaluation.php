<section class="page__content">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="d-flex align-items-start departments-nav">
               <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  <button class="nav-link active" id="v-pills-2022-23-tab" data-bs-toggle="pill" data-bs-target="#v-pills-2022-23" type="button" role="tab" aria-controls="v-pills-2022-23" aria-selected="true" onclick="scrollToDeptSection(this)">
                     Continuous Internal Evaluation
                  </button>
                  <button class="nav-link" id="v-pills-2021-22-tab" data-bs-toggle="pill" data-bs-target="#v-pills-2021-22" type="button" role="tab" aria-controls="v-pills-2021-22" aria-selected="true" onclick="scrollToDeptSection(this)">
                     Mechanism of Internal Assessment
                  </button>
                  <button class="nav-link" id="v-pills-2020-21-tab" data-bs-toggle="pill" data-bs-target="#v-pills-2020-21" type="button" role="tab" aria-controls="v-pills-2020-21" aria-selected="true" onclick="scrollToDeptSection(this)">
                     Mechanism to deal with Exam Related Grievances
                  </button>
               </div>

               <div class="tab-content" id="v-pills-tabContent">
                  <div class="tab-pane fade show active" id="v-pills-2022-23" role="tabpanel" aria-labelledby="v-pills-2022-23-tab">
                     <img src="<?= base_url("assets/web/images/examination/cie-exam.png") ?>" class="w-100">
                  </div>
                  <div class="tab-pane fade" id="v-pills-2021-22" role="tabpanel" aria-labelledby="v-pills-2021-22-tab">
                     <img src="<?= base_url("assets/web/images/examination/mia-exam.png") ?>" class="w-100">
                  </div>
                  <div class="tab-pane fade" id="v-pills-2020-21" role="tabpanel" aria-labelledby="v-pills-2020-21-tab">
                     <p>
                        For grievances related to exam, the students can write an application to the Principal. Subsequently, Principal forwards the applications to the Examination Cell. After verification, necessary corrections are done immediately and forwarded to the university for necessary action. The institute adheres to the redressal mechanism for grievances before exam and during exam.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<?php require_once(FOOTER__DESIGN__PATH); ?>