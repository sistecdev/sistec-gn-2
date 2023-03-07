<section class="page__content">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <table class="table table-dark table-striped table-bordered mb-0">
               <thead>
                  <tr>
                     <th colspan="4" class="text-center">
                        <h1 class="table-title">The SIST<span class="text-lowercase">ec</span> Gandhi Nagar Bulletins</h1>
                     </th>
                  </tr>
                  <tr class="text-center">
                     <th class="w-25">Date</th>
                     <th class="w-25">Edition</th>
                     <th class="w-25">Action</th>
                  </tr>
               </thead>
               <tbody>
                  <?php for ($i = 0; $i < count($sistecBulletins); $i++) { ?>
                     <tr class="align-middle text-center">
                        <td><?= $sistecBulletins[$i]["date"]; ?></td>
                        <td class="text-center">
                           <?= $sistecBulletins[$i]["edition"]; ?>
                        </td>
                        <td>
                           <a href="<?= base_url($sistecBulletins[$i]["link"]); ?>" class="web__btn__two" target="_blank">
                              View
                           </a>
                           <a href="<?= base_url($sistecBulletins[$i]["link"]); ?>" download class="web__btn__two">
                              Download
                           </a>
                        </td>
                     </tr>
                  <?php } ?>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</section>

<?php require_once(FOOTER__DESIGN__PATH); ?>