<section class="page__content">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <table class="table table-striped mb-0">
               <thead>
                  <tr>
                     <th colspan="3" class="text-center">
                        <h1 class="table-title">Financial Audited Statements</h1>
                     </th>
                  </tr>
                  <tr class="text-center">
                     <th class="w-25">Audit Report</th>
                     <th class="w-25">As On</th>
                     <th class="w-25">Action</th>
                  </tr>
               </thead>
               <tbody>
                  <?php for ($i = 0; $i < count($financialStatements); $i++) { ?>
                     <tr class="align-middle text-center">
                        <td>
                           <?= $financialStatements[$i]["name"]; ?>
                        </td>
                        <td class="text-center">
                           <?= $financialStatements[$i]["year"]; ?>
                        </td>
                        <td>
                           <a href="<?= base_url($financialStatements[$i]["link"]); ?>" class="web__btn__two"
                              target="_blank">
                              View
                           </a>
                           <a href="<?= base_url($financialStatements[$i]["link"]); ?>" download class="web__btn__two">
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