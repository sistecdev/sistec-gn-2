<script src="<?= base_url("assets/common/js/swiper-bundle.min.js"); ?>"></script>

<!-- Swiper Sync Card Text Slider -->
<script>
   var departmentSwiperSyncCardTextSlider = new Swiper(".departmentSwiperSyncCardTextSlider", {
      loop: true,
      autoplay: {
         delay: 3000,
         disableOnInteraction: false,
      },
      allowTouchMove: false
   });
</script>

<!-- Swiper Sync Card Image Slider -->
<script>
   var departmentSwiperSyncCardImageSlider = new Swiper(".departmentSwiperSyncCardImageSlider", {
      effect: "cards",
      grabCursor: true,
      loop: true,
      autoplay: {
         delay: 3000,
         disableOnInteraction: false,
      },
      lazy: {
         loadPrevNext: true,
      },
      allowTouchMove: false
   });

   function moveDepartmentCardSyncSliderNext() {
      console.log("Next");
      departmentSwiperSyncCardTextSlider.slideNext();
      departmentSwiperSyncCardImageSlider.slideNext();
   }

   function moveDepartmentCardSyncSliderPrev() {
      console.log("Prev");
      departmentSwiperSyncCardTextSlider.slidePrev();
      departmentSwiperSyncCardImageSlider.slidePrev();
   }
</script>

<script>
   function showFacultyDetailsInFacultyModal(faculty) {
      let theId = faculty.dataset.facid;
      document.getElementById("departmentFacultyName").innerHTML = document.getElementById(`${theId}name`).innerHTML;
      document.getElementById("departmentFacultyAbout").innerHTML = document.getElementById(`${theId}about`).innerHTML;
      document.getElementById("departmentFacultyDesignation").innerHTML = document.getElementById(`${theId}designation`).innerHTML;
      document.getElementById("departmentFacultyQualification").innerHTML = document.getElementById(`${theId}qualification`).innerHTML;
      if (document.getElementById(`${theId}industrial`).innerHTML === "NIL") {
         document.getElementById("departmentFacultyIndustrial").parentElement.style.display = "none";
      } else {
         document.getElementById("departmentFacultyIndustrial").parentElement.style.display = "revert";
         document.getElementById("departmentFacultyIndustrial").innerHTML = document.getElementById(`${theId}industrial`).innerHTML;
      }
      document.getElementById("departmentFacultyTeaching").innerHTML = document.getElementById(`${theId}teaching`).innerHTML;
      document.getElementById("departmentFacultySpecialization").innerHTML = document.getElementById(`${theId}specialization`).innerHTML;
      document.getElementById("departmentFacultyAssociation").innerHTML = document.getElementById(`${theId}association`).innerHTML;
   }
</script>