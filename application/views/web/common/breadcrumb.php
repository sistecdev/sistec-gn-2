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