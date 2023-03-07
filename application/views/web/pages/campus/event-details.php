<section class="page__content">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h1 class="inner-event-title"><?= $event->title; ?></h1>
            <div class="event-details-header">
               <p> <span>Date</span> <br> <span> <?= date("d-m-Y", strtotime($event->event_date)); ?> </span> </p>
               <p> <span>Department</span> <br> <span> <?= $event->department; ?> </span> </p>
               <p> <span>Event</span> <br> <span> <?= $event->event_type; ?> </span> </p>
            </div>
            <div class="events-pics-grid fancy-box-container">
               <a href="<?= base_url($event->image1) ?>" target="_blank" data-fancybox="images">
                  <img src="<?= base_url($event->image1) ?>">
               </a>
               <a href="<?= base_url($event->image2) ?>" target="_blank" data-fancybox="images">
                  <img src="<?= base_url($event->image2) ?>">
               </a>
               <a href="<?= base_url($event->image3) ?>" target="_blank" data-fancybox="images">
                  <img src="<?= base_url($event->image3) ?>">
               </a>
               <a href="<?= base_url($event->image4) ?>" target="_blank" data-fancybox="images">
                  <img src="<?= base_url($event->image4) ?>">
               </a>
            </div>
            <div class="events-text space-y-3">
               <?= $event->about_event; ?>
            </div>
         </div>
      </div>
   </div>
</section>

<?php require_once(FOOTER__DESIGN__PATH); ?>