<section class="page__content">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="space-y-5">
               <div class="text-center">
                  <img src="<?= base_url("assets/web/images/academics/academic-planning.png"); ?>" alt="">
               </div>
               <p class="font-bold">
                  The College is affiliated to Rajiv Gandhi Proudyogiki Vishwavidyalaya and Barkatullah University (for MBA), the curriculum and syllabi prescribed by the university are strictly adhered to. Apart from this prescribed curriculum, the College has strategized ways and means to strengthen the teaching-learning process in the following ways:
               </p>
               <ul class="publications-ul space-y-1">
                  <?php foreach ($academicPlanning as $academicKey => $academicData) { ?>
                     <li><?= $academicData; ?></li>
                  <?php } ?>
               </ul>
            </div>
         </div>
      </div>
   </div>
</section>

<?php require_once(FOOTER__DESIGN__PATH); ?>