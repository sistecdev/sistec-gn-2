<section class="page__header__breadcrumb">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h1 class="title">
               <?= $pageHeader->title; ?>
            </h1>
            <div class="page__breadcrumb">
               <?php $breadcrumbData = create_breadcrumb($pageHeader->breadcrumb);
               for ($i = 0; $i < count($breadcrumbData); $i++) { ?>
                  <p class="pb__item">
                     <?= $breadcrumbData[$i]; ?>
                  </p>
                  <?php if ($i != count($breadcrumbData) - 1) { ?>
                     <p class="pb__slash">
                        <?= "/"; ?>
                     </p>
                  <?php } ?>
               <?php } ?>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="page__content">
   <div class="container">
      <div class="row">
         <div class="col-md-4">
            <div>
               <ul class="departmental-laboratories-flex">
                  <li class="departmental-laboratories-title">
                     Mechanical Laboratories
                  </li>
                  <li class="active">
                     <a href="<?= base_url("laboratories/mechanical/theory-of-machines") ?>">
                        Theory of Machines
                     </a>
                  </li>
                  <li>
                     <a href="<?= base_url("laboratories/mechanical/refrigeration-and-air-conditioning") ?>">
                        Refrigeration and Air Conditioning
                     </a>
                  </li>
                  <li>
                     <a href="#!">
                        Mechanical Measurement & Control
                     </a>
                  </li>
                  <li>
                     <a href="#!">
                        Thermal Engineering
                     </a>
                  </li>
               </ul>
            </div>
         </div>
         <div class="col-md-8">
            <div class="laboratory-page-content">
               <h1 class="title">Theory of Machines</h1>
               <p>
                  This lab provides the platform for proper understanding of various mechanisms, degree of freedom, cams and gear trains etc.
               </p>
            </div>
            <div class="row">
               <div class="offset-md-1 col-md-10">
                  <div class="swiper-sync-cards-container my-4">
                     <div>
                        <div class="swiper-sync-card-text-slider">
                           <div class="swiper departmentSwiperSyncCardTextSlider">
                              <div class="swiper-wrapper">
                                 <?php for ($i = 1; $i <= 7; $i++) { ?>
                                    <div class="swiper-slide">
                                       <p class="the-title">
                                          Machine - <?= $i; ?>
                                       </p>
                                    </div>
                                 <?php } ?>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div>
                        <div class="swiper-sync-card-image-slider">
                           <div class="swiper departmentSwiperSyncCardImageSlider">
                              <div class="swiper-wrapper">
                                 <?php for ($i = 1; $i <= 7; $i++) { ?>
                                    <div class="swiper-slide">
                                       <img src="<?= base_url("assets/web/images/facilities/img ($i).jpg") ?>" />
                                    </div>
                                 <?php } ?>
                              </div>
                           </div>
                        </div>
                     </div>
                     <button onclick="moveDepartmentCardSyncSliderPrev()" class="btn btn-outline-dark swiper-sync-card-btn prev-btn">
                        <i class="fas fa-arrow-left"></i>
                     </button>
                     <button onclick="moveDepartmentCardSyncSliderNext()" class="btn btn-outline-dark swiper-sync-card-btn next-btn">
                        <i class="fas fa-arrow-right"></i>
                     </button>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>