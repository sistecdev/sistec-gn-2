<section class="page__content">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="events-grid">
               <?php foreach ($events as $e) { ?>
                  <div class="event-card">
                     <div class="date-frame">
                        <div class="date-box">
                           <p><?= date("M", strtotime($e->event_date)); ?></p>
                           <p><?= date("d", strtotime($e->event_date)); ?></p>
                        </div>
                     </div>
                     <div class="event-card-img">
                        <img src="<?= base_url($e->image1); ?>">
                     </div>
                     <div class="content-box">
                        <p class="the-title line-clamp-1"> <?= $e->title; ?> </p>
                        <p class="sub-title line-clamp-2"> <?= substr($e->about_event,0,70); ?> </p>
                        <a href="<?= base_url($e->routers_link) ?>" class="event-card-btn">
                           Read More <i class="fas fa-long-arrow-alt-right icon-circle"></i>
                        </a>
                     </div>
                  </div>
               <?php } ?>
            </div>
         </div>
      </div>
   </div>
</section>

<?php require_once(FOOTER__DESIGN__PATH); ?>