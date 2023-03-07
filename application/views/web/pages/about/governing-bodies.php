<section class="page__content">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="d-flex align-items-start departments-nav">
               <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  <button class="nav-link active" id="v-pills-2022-23-tab" data-bs-toggle="pill" data-bs-target="#v-pills-2022-23" type="button" role="tab" aria-controls="v-pills-2022-23" aria-selected="true" onclick="scrollToDeptSection(this)">
                     2022-23
                  </button>
                  <button class="nav-link" id="v-pills-2021-22-tab" data-bs-toggle="pill" data-bs-target="#v-pills-2021-22" type="button" role="tab" aria-controls="v-pills-2021-22" aria-selected="true" onclick="scrollToDeptSection(this)">
                     2021-22
                  </button>
                  <button class="nav-link" id="v-pills-2020-21-tab" data-bs-toggle="pill" data-bs-target="#v-pills-2020-21" type="button" role="tab" aria-controls="v-pills-2020-21" aria-selected="true" onclick="scrollToDeptSection(this)">
                     2020-21
                  </button>
               </div>

               <div class="tab-content" id="v-pills-tabContent">
                  <div class="tab-pane fade show active" id="v-pills-2022-23" role="tabpanel" aria-labelledby="v-pills-2022-23-tab">
                     <iframe src="<?= base_url("assets/admin/upload/governing-bodies/2022-23/Governing-Body-Notice-2022-23.pdf") ?>" width="100%" height="620px">
                     </iframe>
                  </div>
                  <div class="tab-pane fade" id="v-pills-2021-22" role="tabpanel" aria-labelledby="v-pills-2021-22-tab">
                     <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                           <button class="nav-link active" id="minutes-2-tab" data-bs-toggle="tab" data-bs-target="#minutes-2" type="button" role="tab" aria-controls="minutes-2" aria-selected="false">Minutes of Meeting</button>
                           <button class="nav-link" id="action-2-tab" data-bs-toggle="tab" data-bs-target="#action-2" type="button" role="tab" aria-controls="action-2" aria-selected="false">Action</button>
                        </div>
                     </nav>

                     <div class="tab-content mt-3" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="minutes-2" role="tabpanel" aria-labelledby="minutes-2-tab">
                           <iframe src="<?= base_url("assets/admin/upload/governing-bodies/2022-23/Governing-Body-Minutes-2021-22.pdf") ?>" width="100%" height="620px">
                           </iframe>
                        </div>
                        <div class="tab-pane fade" id="action-2" role="tabpanel" aria-labelledby="action-2-tab">
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="v-pills-2020-21" role="tabpanel" aria-labelledby="v-pills-2020-21-tab">
                     <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                           <button class="nav-link active" id="minutes-3-tab" data-bs-toggle="tab" data-bs-target="#minutes-3" type="button" role="tab" aria-controls="minutes-3" aria-selected="false">Minutes of Meeting</button>
                           <button class="nav-link" id="action-3-tab" data-bs-toggle="tab" data-bs-target="#action-3" type="button" role="tab" aria-controls="action-3" aria-selected="false">Action</button>
                        </div>
                     </nav>

                     <div class="tab-content mt-3" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="minutes-3" role="tabpanel" aria-labelledby="minutes-3-tab">
                           <iframe src="<?= base_url("assets/admin/upload/governing-bodies/2022-23/Governing-Body-Minutes-2020-21.pdf") ?>" width="100%" height="620px">
                           </iframe>
                        </div>
                        <div class="tab-pane fade" id="action-3" role="tabpanel" aria-labelledby="action-3-tab">
                           <iframe src="<?= base_url("assets/admin/upload/governing-bodies/2022-23/Governing-Body-Actions-2020-21.pdf") ?>" width="100%" height="620px">
                           </iframe>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<?php require_once(FOOTER__DESIGN__PATH); ?>