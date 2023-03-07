$(document).on("click", ".confirmDelSwal", function (e) {
  const id = $(this).attr("data-id");
  const from = $(this).attr("data-from");
  const url = $(this).attr("data-url");
  const col = $(this).attr("data-col");
  swal({
    title: "Are you sure?",
    text: "Once deleted, you will not be able to recover this data!",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  }).then((willDelete) => {
    if (willDelete) {
      $.ajax({
        url: url,
        data: { id: id, from: from, col: col },
        type: "POST",
        dataType: "json",
        success: function (res) {
          if (res.status == 1) {
            $("#tr_" + id).remove();
            swal("Poof! Your data has been deleted!", {
              icon: "success",
            });
            // var allTableTrs = document.getElementsByClassName("table-tr");
            // allTableTrs = Array.from(allTableTrs);
            // allTableTrs.forEach((element, index) => {
            // 	element.children[0].children[0].innerHTML = index + 1;
            // });
          } else {
            console.log("Error");
          }
        },
      });
    } else {
      swal("Your data is safe!");
    }
  });
});

$(document).on("click", ".confirmBeforeDelSwal", function (e) {
  e.preventDefault();
  swal({
    title: "Are you sure?",
    text: "Once deleted, you will not be able to recover this data!",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  }).then((willDelete) => {
    if (willDelete) {
      window.location.replace($(this).attr("href"));
    } else {
      swal("Your data is safe!");
    }
  });
});

$(document).ready(function () {
  var scrollTop = $(".scroll-to-top");
  $(window).scroll(function () {
    var topPos = $(this).scrollTop();
    if (topPos > 100) {
      $(scrollTop).css("opacity", "1");
    } else {
      $(scrollTop).css("opacity", "0");
    }
  });
  $(scrollTop).click(function () {
    $("html, body").animate(
      {
        scrollTop: 0,
      },
      800
    );
    return false;
  });
});

$(".web-dataTable").DataTable({
  pagingType: "simple_numbers",
});

$(".csv-dataTable").DataTable({
  pagingType: "simple_numbers",
  dom: "Bfrtip",
  buttons: ["csv"],
});

$(".buttons-csv > span").text("Export to CSV");

function changeActiveStatus(checkedElement) {
  let theLink = checkedElement.getAttribute("data-link");
  let theId = checkedElement.getAttribute("data-id");
  let theTabName = checkedElement.getAttribute("data-tabname");
  let theCol = checkedElement.getAttribute("data-type") + "_active";
  let theValue = checkedElement.checked ? 1 : 0;

  $.ajax({
    url: theLink,
    type: "POST",
    dataType: "json",
    data: { id: theId, col: theCol, tabname: theTabName, value: theValue },
    success: function (res) {
      // console.log(res);
    },
  });
}

function alreadyExist(elem, checkingUrl) {
  console.log(elem.value);
  $.ajax({
    url: checkingUrl,
    type: "POST",
    datatype: "json",
    data: {
      doesExistValue: elem.value,
    },
  }).done(function (data) {
    data = JSON.parse(data);
    console.log(data);
    if (data == null) {
      document.getElementById(`${elem.id}_error`).textContent = "";
      document.getElementById("add_event_btn").removeAttribute("disabled");
      document.getElementById("add_event_btn").style.cursor = "pointer";
    } else {
      document.getElementById(`${elem.id}_error`).textContent =
        "Already Exists";
      document.getElementById("add_event_btn").setAttribute("disabled", true);
      document.getElementById("add_event_btn").style.cursor = "not-allowed";
    }
  });
}

let pbBulletinInputs = document.getElementsByClassName("pb-input-field");
pbBulletinInputs = Array.from(pbBulletinInputs);
let placementBulletinBtn = document.getElementById("placementBulletinBtn");
pbBulletinInputs.forEach((inputField) => {
  inputField.addEventListener("change", function () {
    let removeDisableAttr = true;
    pbBulletinInputs.forEach((field) => {
      if (field.value != "") {
        removeDisableAttr = false;
      }
    });
    if (!removeDisableAttr) {
      placementBulletinBtn.removeAttribute("disabled");
      placementBulletinBtn.classList.remove("not-allowed-cursor");
    } else {
      placementBulletinBtn.setAttribute("disabled", true);
      placementBulletinBtn.classList.add("not-allowed-cursor");
    }
  });
});

function validateCampusDriveForm(form) {
  let driveImage = form["drive_img"].value;
  let driveDate = form["drive_date"].value;
  let permission = true;

  // Error Fields
  let driveImageError = document.getElementById("drive-img-error");
  let driveDateError = document.getElementById("drive-date-error");

  document.querySelectorAll(".campus-drive-input-error").forEach((element) => {
    element.textContent = "";
  });

  if (driveDate == "") {
    driveDateError.textContent = "This field is required";
    permission = false;
  }

  // Image File Extension Allowed\
  var allowedExtensions = /(\.jpg|\.JPG|\.jpeg|\.JPEG|\.PNG|\.png)$/i;
  if (!allowedExtensions.exec(driveImage)) {
    driveImageError.textContent =
      "Either choose .jpg or .jpeg or .png file only";
    permission = false;
  }

  if (driveImage == "") {
    driveImageError.textContent = "This field is required";
    permission = false;
  }

  if (!permission) {
    return false;
  } else {
    console.log("Go Ahead");
    return true;
  }
}

function validatePagesForm(form) {
  let pagesType = form["pages_type"].value;
  let pagesImage = form["pages_img"].value;
  let pagesTitle = form["pages_title"].value;
  let pagesImgAlt = form["pages_img_alt"].value;
  let pagesDate = form["pages_date"].value;
  let permission = true;

  // Error Fields
  let pagesTypeError = document.getElementById("pages-type-error");
  let pagesImageError = document.getElementById("pages-img-error");
  let pagesTitleError = document.getElementById("pages-title-error");
  let pagesImgAltError = document.getElementById("pages-img-alt-error");
  let pagesDateError = document.getElementById("pages-date-error");

  document.querySelectorAll(".pages-input-error").forEach((element) => {
    element.textContent = "";
  });

  if (pagesType == "") {
    pagesTypeError.textContent = "This field is required";
    permission = false;
  }

  if (pagesTitle == "") {
    pagesTitleError.textContent = "This field is required";
    permission = false;
  }

  if (pagesImgAlt == "") {
    pagesImgAltError.textContent = "This field is required";
    permission = false;
  }

  if (pagesDate == "") {
    pagesDateError.textContent = "This field is required";
    permission = false;
  }

  // Image File Extension Allowed\
  var allowedExtensions = /(\.jpg|\.JPG|\.jpeg|\.JPEG|\.PNG|\.png)$/i;
  if (!allowedExtensions.exec(pagesImage)) {
    pagesImageError.textContent =
      "Either choose .jpg or .jpeg or .png file only";
    permission = false;
  }

  if (pagesImage == "") {
    pagesImageError.textContent = "This field is required";
    permission = false;
  }

  if (!permission) {
    return false;
  } else {
    console.log("Go Ahead");
    return true;
  }
}

function validatePostCareerForm(form) {
  let careerTitle = form["career_title"].value;
  let careerDepartment = form["career_department"].value;
  let careerLocation = form["career_location"].value;
  let careerQualification = form["career_qualification"].value;
  let careerExperience = form["career_experience"].value;
  let careerOpportunities = form["career_opportunities"].value;
  let permission = true;

  // Error Fields
  let careerTitleError = document.getElementById("career-title-error");
  let careerDepartmentError = document.getElementById(
    "career-department-error"
  );
  let careerLocationError = document.getElementById("career-location-error");
  let careerQualificationError = document.getElementById(
    "career-qualification-error"
  );
  let careerExperienceError = document.getElementById(
    "career-experience-error"
  );
  let careerOpportunitiesError = document.getElementById(
    "career-opportunities-error"
  );

  document.querySelectorAll(".career-input-error").forEach((element) => {
    element.textContent = "";
  });

  if (careerTitle == "") {
    careerTitleError.textContent = "This field is required";
    permission = false;
  }

  if (careerDepartment == "") {
    careerDepartmentError.textContent = "This field is required";
    permission = false;
  }

  if (careerLocation == "") {
    careerLocationError.textContent = "This field is required";
    permission = false;
  }

  if (careerQualification == "") {
    careerQualificationError.textContent = "This field is required";
    permission = false;
  }

  if (careerExperience == "") {
    careerExperienceError.textContent = "This field is required";
    permission = false;
  }

  if (careerOpportunities == "") {
    careerOpportunitiesError.textContent = "This field is required";
    permission = false;
  }

  if (!permission) {
    return false;
  } else {
    console.log("Go Ahead");
    return true;
  }
}

function validateSeoForm(form) {
  let page = form["seo_page"].value;
  let title = form["seo_title"].value;
  let description = form["seo_description"].value;
  let keywords = form["seo_keywords"].value;
  let canonical = form["seo_canonical"].value;

  let ogTitle = form["og_title"].value;
  let ogDescription = form["og_description"].value;
  let ogUrl = form["og_url"].value;
  let ogImage = form["og_image"].value;

  let twitterTitle = form["twitter_title"].value;
  let twitterDescription = form["twitter_description"].value;
  let twitterImage = form["og_image"].value;

  let permission = true;

  // Error Fields
  let pageError = document.getElementById("seo-page-error");
  let titleError = document.getElementById("seo-title-error");
  let descriptionError = document.getElementById("seo-description-error");
  let keywordsError = document.getElementById("seo-keywords-error");
  let canonicalError = document.getElementById("seo-canonical-error");

  let ogTitleError = document.getElementById("og-title-error");
  let ogDescriptionError = document.getElementById("og-description-error");
  let ogUrlError = document.getElementById("og-url-error");
  let ogImageError = document.getElementById("og-image-error");

  let twitterTitleError = document.getElementById("twitter-title-error");
  let twitterDescriptionError = document.getElementById(
    "twitter-description-error"
  );
  let twitterImageError = document.getElementById("twitter-image-error");

  document.querySelectorAll(".seo-input-error").forEach((element) => {
    element.textContent = "";
  });

  if (page == "") {
    pageError.textContent = "This field is required";
    permission = false;
  }

  if (title == "") {
    titleError.textContent = "This field is required";
    permission = false;
  }

  if (description == "") {
    descriptionError.textContent = "This field is required";
    permission = false;
  }

  if (keywords == "") {
    keywordsError.textContent = "This field is required";
    permission = false;
  }

  if (canonical == "") {
    canonicalError.textContent = "This field is required";
    permission = false;
  }

  if (ogTitle == "") {
    ogTitleError.textContent = "This field is required";
    permission = false;
  }

  if (ogDescription == "") {
    ogDescriptionError.textContent = "This field is required";
    permission = false;
  }

  if (ogUrl == "") {
    ogUrlError.textContent = "This field is required";
    permission = false;
  }

  if (ogImage == "") {
    ogImageError.textContent = "This field is required";
    permission = false;
  }

  if (twitterTitle == "") {
    twitterTitleError.textContent = "This field is required";
    permission = false;
  }

  if (twitterDescription == "") {
    twitterDescriptionError.textContent = "This field is required";
    permission = false;
  }

  if (twitterImage == "") {
    twitterImageError.textContent = "This field is required";
    permission = false;
  }

  if (!permission) {
    return false;
  } else {
    console.log("Go Ahead");
    return true;
  }
}
