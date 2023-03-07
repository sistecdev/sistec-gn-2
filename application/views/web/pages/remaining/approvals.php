<section class="page__content">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="d-flex align-items-start departments-nav">
               <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  <button class="nav-link active" id="v-pills-aicte-tab" data-bs-toggle="pill" data-bs-target="#v-pills-aicte" type="button" role="tab" aria-controls="v-pills-aicte" aria-selected="true" onclick="scrollToDeptSection(this)">
                     AICTE Affliation
                  </button>
                  <button class="nav-link" id="v-pills-rgpv-tab" data-bs-toggle="pill" data-bs-target="#v-pills-rgpv" type="button" role="tab" aria-controls="v-pills-rgpv" aria-selected="true" onclick="scrollToDeptSection(this)">
                     RGPV Affliation
                  </button>
                  <button class="nav-link" id="v-pills-bu-tab" data-bs-toggle="pill" data-bs-target="#v-pills-bu" type="button" role="tab" aria-controls="v-pills-bu" aria-selected="true" onclick="scrollToDeptSection(this)">
                     Barkatullah Affliation
                  </button>
               </div>

               <div class="tab-content" id="v-pills-tabContent">
                  <div class="tab-pane fade show active" id="v-pills-aicte" role="tabpanel" aria-labelledby="v-pills-aicte-tab">
                     <h2 class="title">AICTE - Extension of Approval</h2>
                     <table class="table table-striped">
                        <thead>
                           <tr>
                              <th class="text-center">#</th>
                              <th>Approval Letter</th>
                              <th class="text-center">Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php for ($i = 0; $i < count($aicteApprovals); $i++) { ?>
                              <tr class="align-middle">
                                 <th class="text-center"><?= $i + 1; ?></th>
                                 <td>Extension of approval for the academic year <?= $aicteApprovals[$i]["year"]; ?></td>
                                 <td class="text-center">
                                    <a href="<?= base_url($aicteApprovals[$i]["link"]); ?>" class="web__btn__two" target="_blank">
                                       View
                                    </a>
                                 </td>
                              </tr>
                           <?php } ?>
                        </tbody>
                     </table>
                  </div>
                  <div class="tab-pane fade" id="v-pills-rgpv" role="tabpanel" aria-labelledby="v-pills-rgpv-tab">
                     <h2 class="title">RGPV - Extension of Approval</h2>
                     <table class="table table-striped">
                        <thead>
                           <tr>
                              <th class="text-center">#</th>
                              <th>Approval Letter</th>
                              <th class="text-center">Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php for ($i = 0; $i < count($rgpvApprovals); $i++) { ?>
                              <tr class="align-middle">
                                 <th class="text-center"><?= $i + 1; ?></th>
                                 <td>Extension of approval for the academic year <?= $rgpvApprovals[$i]["year"]; ?></td>
                                 <td class="text-center">
                                    <a href="<?= base_url($rgpvApprovals[$i]["link"]); ?>" class="web__btn__two" target="_blank">
                                       View
                                    </a>
                                 </td>
                              </tr>
                           <?php } ?>
                        </tbody>
                     </table>
                  </div>
                  <div class="tab-pane fade" id="v-pills-bu" role="tabpanel" aria-labelledby="v-pills-bu-tab">
                     <h2 class="title">Barkatullah - Extension of Approval</h2>
                     <table class="table table-striped">
                        <thead>
                           <tr>
                              <th class="text-center">#</th>
                              <th>Approval Letter</th>
                              <th class="text-center">Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php for ($i = 0; $i < count($buApprovals); $i++) { ?>
                              <tr class="align-middle">
                                 <th class="text-center"><?= $i + 1; ?></th>
                                 <td>Extension of approval for the academic year <?= $buApprovals[$i]["year"]; ?></td>
                                 <td class="text-center">
                                    <a href="<?= base_url($buApprovals[$i]["link"]); ?>" class="web__btn__two" target="_blank">
                                       View
                                    </a>
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
   </div>
</section>