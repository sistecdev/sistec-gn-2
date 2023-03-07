<section class="split-slideshow">
   <div class="slideshow">
      <div class="slider">
         <?php
         foreach ($slider as $s) {
         ?>
            <div class="item">
               <img src="<?= base_url($s->image); ?>" alt="<?= $s->title; ?>" title="<?= $s->title; ?>" />
            </div>
         <?php
         }
         ?>
      </div>
   </div>
   <div class="slideshow-text">
      <?php
      foreach ($slider as $s) {
      ?>
         <div class="item"><?= $s->title; ?></div>
      <?php
      }
      ?>
   </div>
</section>

<section id="about-college" class="page__section bg__1">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div>
               <h1 class="page__section__title">
                  ABOUT SIST<span class="text-lowercase">ec</span> Workflow 2
               </h1>
            </div>
         </div>
      </div>
   </div>
   <div>
      <div class="container">
         <div class="row">
            <div class="col-md-6">
               <div class="d-flex h-100 align-items-center">
                  <p class="text-justify mb-0">
                     Sagar Institute of Science and Technology (SISTec®), established in the year 2007, is one of the best engineering colleges, located in the heart of the state, the city of lakes - Bhopal. SISTec is the brand name for technical colleges under the umbrella of the Sagar Group of Institutions®. Boasting state-of-the-art facilities, a diverse student body, and a talented pool of faculty, SISTec has established itself as a leader in providing quality education offering B.Tech., MBA, and M.Tech. programs. The academic programs are designed to meet the needs and interests of students from all backgrounds, making SISTec the perfect place to jumpstart your future. The brand has a strong motivation towards innovation in curriculum implementation. It further aspires to be a part of the education revolution in Technical education, impacting futuristic technologies in the Indian framework. In this process, it aims to be one of the finest providers of technical education in India.
                  </p>
               </div>
            </div>
            <div class="col-md-6">
               <div class="about-bg-image"></div>
            </div>
         </div>
      </div>
   </div>
</section>

<section id="news-notices" class="page__section bg__whitish">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div>
               <h1 class="page__section__title">
                  News & Notices
               </h1>
            </div>
         </div>
      </div>
   </div>
   <div>
      <div class="container">
         <div class="row">
            <div class="col-md-6">
               <div class="nn-card">
                  <div class="header">
                     <p>
                        <i class="fas fa-newspaper"></i>
                        Latest News
                     </p>
                  </div>
                  <div>
                     <ul class="list-ul space-y-4 scrollbar-style-1">
                        <?php
                        foreach ($news_notice as $n) if ($n->type == "Latest News") {
                           $elseUrl = $n->details_type == "link" ? $n->external_link : base_url($n->pdf_file);
                        ?>
                           <li>
                              <a href="<?= $n->details_type == "text" ? "#!" : $elseUrl; ?>" class="<?= $n->details_type == "text" ? "popup-text" : ""; ?>" popup-text="<?= $n->detailed_text; ?>" target="_blank">
                                 <div class="date">
                                    <p><?= date("d", strtotime($n->date)); ?></p>
                                    <p><?= date("M", strtotime($n->date)); ?></p>
                                 </div>
                                 <p class="title line-clamp line-clamp-3"><?= $n->title; ?></p>
                              </a>
                           </li>
                        <?php
                        }
                        ?>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-md-6">
               <div class="nn-card">
                  <div class="header">
                     <p>
                        <i class="fas fa-newspaper"></i>
                        Notices
                     </p>
                  </div>
                  <div class="mt-3">
                     <ul class="list-ul space-y-4 scrollbar-style-1">
                        <?php
                        foreach ($news_notice as $n) if ($n->type == "Notices") {
                           $elseUrl = $n->details_type == "link" ? $n->external_link : base_url($n->pdf_file);
                        ?>
                           <li>
                              <a href="<?= $n->details_type == "text" ? "#!" : $elseUrl; ?>" class="<?= $n->details_type == "text" ? "popup-text" : ""; ?>" popup-text="<?= $n->detailed_text; ?>" target="_blank">
                                 <div class="date">
                                    <p><?= date("d", strtotime($n->date)); ?></p>
                                    <p><?= date("M", strtotime($n->date)); ?></p>
                                 </div>
                                 <p class="title line-clamp line-clamp-3"><?= $n->title; ?></p>
                              </a>
                           </li>
                        <?php
                        }
                        ?>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<?php
if (count($recent_happenings) > 0) {
?>
   <section id="recent-happenings" class="page__section bg__2">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div>
                  <h1 class="page__section__title">
                     Recent Happenings
                  </h1>
               </div>
            </div>
         </div>
      </div>
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <section class="hexagon-gallery overflow-hidden">
                  <?php $i = 1;
                  foreach ($recent_happenings as $h) { ?>
                     <div class="hex-wrap <?php if ($i <= 3) {
                                             echo "animate-hex-top-bottom";
                                          } ?> <?php if ($i == 4) {
                                                   echo "animate-hex-left-right";
                                                } ?> <?php if ($i >= 8 && $i <= 10) {
                                                         echo "animate-hex-bottom-top";
                                                      } ?> <?php if ($i == 7) {
                                                               echo "animate-hex-right-left";
                                                            } ?>">
                        <div class="hex">
                           <img src="<?= base_url($h->image1); ?>" class="block object-cover w-full">
                           <div class="animate-me">
                              <p class="this-text text-center text-lg font-Nunito-Regular leading-[1.2]">
                                 <?= $h->title; ?>
                              </p>
                           </div>
                        </div>
                     </div>
                  <?php $i++;
                  } ?>
               </section>
            </div>
         </div>
      </div>
   </section>
<?php
}
?>

<section id="spread-counter" class="page__section bg__whitish">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h1 class="page__section__title">
               The SGI Spread
            </h1>
            <h1 class="title font-medium"> </h1>
         </div>
         <div class="col-md-3">
            <div class="counter-card">
               <div>
                  <div class="counter-icon"> <img src="<?= base_url("assets/web/images/home/counter/years-in-education.png") ?>" alt=""> </div>
               </div>
               <div class="counter-content">
                  <div class="count-number"> <span class="count ff-semibold" counter-lim="22">22</span> <span class="plus-sign">+</span> </div>
                  <div class="counter-title"> Years in Education </div>
               </div>
            </div>
         </div>
         <div class="col-md-3">
            <div class="counter-card mt-mob">
               <div>
                  <div class="counter-icon"> <img src="<?= base_url("assets/web/images/home/counter/skilled-faculties.png") ?>" alt=""> </div>
               </div>
               <div class="counter-content">
                  <div class="count-number"> <span class="count ff-semibold" counter-lim="2000">2000</span> <span class="plus-sign">+</span> </div>
                  <div class="counter-title"> Highly Skilled Faculties </div>
               </div>
            </div>
         </div>
         <div class="col-md-3">
            <div class="counter-card mt-mob">
               <div>
                  <div class="counter-icon"> <img src="<?= base_url("assets/web/images/home/counter/network.png") ?>" alt=""> </div>
               </div>
               <div class="counter-content">
                  <div class="count-number"> <span class="count ff-semibold" counter-lim="20000">20000</span> <span class="plus-sign">+</span> </div>
                  <div class="counter-title"> Students Network </div>
               </div>
            </div>
         </div>
         <div class="col-md-3">
            <div class="counter-card mt-mob">
               <div>
                  <div class="counter-icon"> <img src="<?= base_url("assets/web/images/home/counter/jobs.png") ?>" alt=""> </div>
               </div>
               <div class="counter-content">
                  <div class="count-number"> <span class="count ff-semibold" counter-lim="1100">1100</span> <span class="plus-sign">+</span> </div>
                  <div class="counter-title"> Job Offers to 2021-22 Batch </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<section id="courses" class="page__section bg__3">
   <div class="space-y-8">
      <div class="courses-card">
         <div class="container">
            <div class="row">
               <div class="col-md-8">
                  <div>
                     <h1 class="page__section__title">
                        Engineering @ SIST<span class="text-lowercase">ec</span>
                     </h1>
                     <p> The B.Tech. Engineering Program at Sagar Institute of Science and Technology (SISTec) Gandhi Nagar Campus is developed from an industrial point of view, with a great focus on modern technologies employed in the industries. Engineers are the focal point in our economy to design, test, and develop the next generation of products and services for the betterment of society. In this regard, the pedagogy is designed based on industry-oriented training modules a level extra than the standard university curriculum. Similarly, the MTech Engineering Program is developed from a research point of view to inculcate the spirit of innovation and development in Science & Technology.</p>
                  </div>
                  <div class="course-content-row">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="the-courses">
                              <h2 class="course-name">B.Tech.</h2>
                              <div class="course-content">
                                 <div class="course-text">
                                    <ul class="web-list-style no-padding distance">
                                       <li>Civil Engineering</li>
                                       <li>Computer Science & Engineering</li>
                                       <li>CSE with Artificial Intelligence and Data Science</li>
                                       <li>CSE with Cyber Security</li>
                                       <li>Electrical & Electronics Engineering</li>
                                       <li>Electronics & Communication Engineering</li>
                                       <li>Mechanical Engineering</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="the-courses mt-mob">
                              <h2 class="course-name">M.Tech.</h2>
                              <div class="course-content">
                                 <div class="course-text">
                                    <ul class="web-list-style no-padding distance">
                                       <li>Computer Science & Engineering</li>
                                       <li>Digital Communication</li>
                                       <li>Machine Design</li>
                                       <li>Thermal Power & Engineering</li>
                                       <li>Very-Large-Scale Integration (VLSI) Design</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="course-video right">
                     <div>
                        <div class="shape-div">
                           <div class="video-div"> <video muted="" loop="" autoplay="" playsinline="" class="shape-video">
                                 <source src="<?= base_url("assets/web/videos/home/courses-engg.mp4"); ?>">
                              </video> </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="courses-card">
         <div class="container">
            <div class="row">
               <div class="col-md-8">
                  <div>
                     <h1 class="page__section__title">
                        MBA @ SIST<span class="text-lowercase">ec</span>
                     </h1>
                     <p> The MBA Program at Sagar Institute of Science and Technology (SISTec) Gandhi Nagar Campus is the flagship program designed to be a career-building experience for students, developing them into socially responsible and highly skilled managers, and masters in leading their organizations towards excellence. The pedagogy is designed such that students gain exposure to theory and practice alike. The program includes theoretical lectures, audio-visual lectures, case studies, paid/unpaid internships, learning through events & activities, and lab-based learning. Students receive a foundational level of MBA education with a great focus on the key management disciplines, subjects, and issues.</p>
                  </div>
                  <div class="course-content-row">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="the-courses">
                              <h2 class="course-name">MBA</h2>
                              <div class="course-content">
                                 <div class="course-text">
                                    <ul class="web-list-style no-padding distance">
                                       <li>Master of Business Administration</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="the-courses mt-mob">
                              <h2 class="course-name">Specializations</h2>
                              <div class="course-content">
                                 <div class="course-text">
                                    <ul class="web-list-style no-padding distance">
                                       <li>Financial Management</li>
                                       <li>Marketing Management</li>
                                       <li>Human Resource Management</li>
                                       <li>Retail Management</li>
                                       <li>Banking and Financial Services Management</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="course-video right">
                     <div>
                        <div class="shape-div">
                           <div class="video-div"> <video muted="" loop="" autoplay="" playsinline="" class="shape-video">
                                 <source src="<?= base_url("assets/web/videos/home/courses-mba.mp4"); ?>">
                              </video> </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<?php
if (count($meritorious_student) > 0) {
?>
   <section id="our-meritorious-students" class="page__section bg__whitish">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <h1 class="page__section__title">
                  Meritorious Students
               </h1>
            </div>
         </div>
      </div>
      <div class="container">
         <div class="row">
            <?php foreach ($meritorious_student as $m) { ?>
               <div class="col-md-3">
                  <div class="meritorious-card">
                     <div class="img-container">
                        <div class="inner-skew">
                           <img src="<?= base_url($m->image) ?>" alt="<?= $m->name; ?>" title="<?= $m->name; ?>">
                        </div>
                     </div>
                     <div class="text-container">
                        <h3><?= $m->name; ?></h3>
                        <p>
                           (<?= $m->subject; ?> - <?= $m->sem; ?>)
                        </p>
                        <p>
                           <?= $m->marks; ?>
                        </p>
                     </div>
                  </div>
               </div>
            <?php } ?>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="text-center">
                     <a class="web__btn__one" href="#!">
                        <span>Click!</span><span>Show More</span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
   </section>
<?php
}

if (count($placements) > 0) {
?>
   <section id="our-placements" class="page__section bg__4">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <h1 class="page__section__title">
                  SISTec Placements
               </h1>
            </div>
         </div>
      </div>
      <div class="container">
         <div class="row">
            <?php foreach ($placements as $p) { ?>
               <div class="col-md-4">
                  <div class="placement-card-wrapper">
                     <div class="placement-card">
                        <div class="img-div">
                           <img src="<?= base_url($p->image) ?>" alt="">
                        </div>
                        <div>
                           <p class="text"><?= $p->name; ?></p>
                           <p class="text"><span class="special"><?= $p->designation; ?></span></p>
                           <p class="text"><?= $p->company; ?></p>
                           <p class="text">Package <span class="special"><?= $p->package; ?></span> LPA</p>
                           <p class="text">Department <span class="special"><?= $p->department; ?></span></p>
                           <p class="text">Hometown <span class="special"><?= $p->hometown; ?></span></p>
                        </div>
                     </div>
                  </div>
               </div>
            <?php } ?>
         </div>
      </div>
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="text-center">
                  <a class="web__btn__one" href="#!">
                     <span>Click!</span><span>Show More</span>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </section>
<?php
}
?>

<section id="our-facilities" class="page__section bg__whitish">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div>
               <h1 class="page__section__title">
                  SISTec Facilities
               </h1>
            </div>
         </div>
      </div>
   </div>
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="swiper-sync-cards-container">
               <div>
                  <div class="swiper-sync-card-text-slider">
                     <div class="swiper swiperSyncCardTextSlider">
                        <div class="swiper-wrapper">
                           <?php for ($i = 0; $i < count($homeFacilities); $i++) { ?>
                              <div class="swiper-slide">
                                 <p class="the-title">
                                    <?= $homeFacilities[$i]["name"]; ?>
                                 </p>
                              </div>
                           <?php } ?>
                        </div>
                     </div>
                  </div>
               </div>
               <div>
                  <div class="swiper-sync-card-image-slider">
                     <div class="swiper swiperSyncCardImageSlider">
                        <div class="swiper-wrapper">
                           <?php for ($i = 0; $i < count($homeFacilities); $i++) { ?>
                              <div class="swiper-slide">
                                 <img src="<?= base_url($homeFacilities[$i]["img"]) ?>" />
                              </div>
                           <?php } ?>
                        </div>
                     </div>
                  </div>
               </div>
               <button onclick="moveCardSyncSliderPrev()" class="btn btn-outline-dark swiper-sync-card-btn prev-btn">
                  <i class="fas fa-arrow-left"></i>
               </button>
               <button onclick="moveCardSyncSliderNext()" class="btn btn-outline-dark swiper-sync-card-btn next-btn">
                  <i class="fas fa-arrow-right"></i>
               </button>
            </div>
         </div>
      </div>
   </div>
</section>

<section id="our-recruiters" class="page__section bg__5">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h1 class="page__section__title">
               SISTec Recruiters
            </h1>
            <div>
               <div class="our-recruiters-slider">
                  <?php for ($i = 1; $i <= 16; $i++) { ?>
                     <div class="recruiter-card">
                        <div class="img-div">
                           <img src="<?= base_url('assets/web/images/home/recruiters/') ?>C<?= $i; ?>.jpg" class="recruiter-logo box-shadow-2">
                        </div>
                     </div>
                  <?php } ?>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<?php require_once(FOOTER__DESIGN__PATH); ?>