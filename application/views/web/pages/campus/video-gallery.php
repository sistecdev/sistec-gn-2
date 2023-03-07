<section class="page__content">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="gallery-grid">
               <?php
                  foreach($video_gallery as $v){
               ?>
               <div class="gallery-card">
                  <a data-fancybox="video-gallery" href="<?= $v->youtube; ?>" class="video-box">
                     <img src="<?= base_url($v->image); ?>">
                     <div class="play-div">
                        <i class="fas fa-play"></i>
                     </div>
                  </a>
                  <p class="video-box-text">
                     <?= $v->title; ?> 
                  </p>
               </div>
               <?php
                  }
               ?>
            </div>
         </div>
      </div>
   </div>
</section>

<?php require_once(FOOTER__DESIGN__PATH); ?>