<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="<?= (isset($meta_description)) ? $meta_description : ""; ?>">
    <meta name="keywords" content="<?= (isset($meta_keyword)) ? $meta_keyword : ""; ?>">
    <?php
      if(isset($meta_title)){
         echo "<title>$meta_title</title>";
      }else{
         echo "<title>SISTec-GN</title>";
      }
   ?>

    <link rel="shortcut icon" href="<?= base_url("assets/web/images/others/sistec-favicon.png") ?>" type="image/png" />
    <link rel="canonical" href="">

    <!-- Open Graph Meta -->
    <meta property="og:site_name" content="">
    <meta property="og:type" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Twitter Meta -->
    <meta name="twitter:card" content="">
    <meta name="twitter:site" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">

    <!-- CSS -->
    <link rel="stylesheet" href="<?= base_url("assets/fontawesome/css/fontawesome.all.min.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/web/css/bootstrap.min.css") ?>">
    <link rel=" stylesheet" href="<?= base_url("assets/web/css/webstyle.min.css") ?>">
    <link rel=" stylesheet" href="<?= base_url("assets/web/css/jquery.fancybox.min.css") ?>">

    <!-- Slick CSS -->
    <link rel=" stylesheet" href="<?= base_url("assets/common/css/slick.css") ?>">
    <link rel=" stylesheet" href="<?= base_url("assets/common/css/slick-theme.css") ?>">
    <link rel=" stylesheet" href="<?= base_url("assets/common/css/swiper-bundle.min.css") ?>">
</head>

<body>
    <header id="<?= (active_nav() != "home") ? "fix-the-header" : ""; ?>">
        <section id="strip-upper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="flex-me">
                            <div class="left-child">
                                <a href="#!" class="glowing__btn">
                                    Admission Enquiry <span>2023-24</span>
                                </a>
                            </div>

                            <div class="right-child">
                                <a href="<?= base_url("newsletters-bulletins") ?>">
                                    SIST<span class="text-lowercase">ec</span> Bulletin
                                </a>
                                <a href="<?= base_url("approvals") ?>">
                                    Approvals
                                </a>
                                <a href="https://erp.sgibhopal.com/">
                                    ERP Login
                                </a>
                                <a href="<?= base_url("careers") ?>">
                                    Careers
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="strip-lower">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <img src="<?= base_url("assets/web/images/logo-strip/sistec-logo.png") ?>" class="w-100">
                    </div>
                </div>
            </div>
        </section>
        <div id="fixed-navigation">
            <section id="navigation">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <nav>
                                <ul id="nav-ul">
                                    <li class="<?= active_nav() == "home" ? "active" : ""; ?>">
                                        <a href="<?= base_url(); ?>">Home</a>
                                    </li>
                                    <li class="position-relative <?= active_nav() == "about" ? "active" : ""; ?>">
                                        <a href="#!">
                                            About <i class="icon-caret fas fa-caret-right"></i>
                                        </a>
                                        <div class="sub-nav to-left two-col-width">
                                            <ul class="two-columns">
                                                <li
                                                    class="<?= active_second_nav() == "sagar-institute-science-technology" ? "active" : ""; ?>">
                                                    <a href="<?= base_url("sagar-institute-science-technology") ?>">SIST<span
                                                            class="text-lowercase">ec</span></a>
                                                </li>
                                                <li
                                                    class="<?= active_second_nav() == "sagar-group" ? "active" : ""; ?>">
                                                    <a href="<?= base_url("sagar-group") ?>">Sagar Group</a>
                                                </li>
                                                <!-- <li class="<?= active_second_nav() == "sagar-group-of-institutions" ? "active" : ""; ?>">
                                       <a href="<?= base_url("sagar-group-of-institutions") ?>">Sagar Group of Institutions</a>
                                    </li> -->
                                                <li
                                                    class="<?= active_second_nav() == "vision-mission" ? "active" : ""; ?>">
                                                    <a href="<?= base_url("vision-mission") ?>">Vision & Mission</a>
                                                </li>
                                                <li
                                                    class="<?= active_second_nav() == "management-team" ? "active" : ""; ?>">
                                                    <a href="<?= base_url("management-team") ?>">Management Team</a>
                                                </li>
                                                <li
                                                    class="<?= active_second_nav() == "governing-bodies" ? "active" : ""; ?>">
                                                    <a href="<?= base_url("governing-bodies") ?>">Governing Bodies</a>
                                                </li>
                                                <li
                                                    class="<?= active_second_nav() == "advisory-committee" ? "active" : ""; ?>">
                                                    <a href="<?= base_url("advisory-committee") ?>">Advisory
                                                        Committee</a>
                                                </li>
                                                <li class="<?= active_second_nav() == "committees" ? "active" : ""; ?>">
                                                    <a href="<?= base_url("committees") ?>">Committees</a>
                                                </li>
                                                <li
                                                    class="<?= active_second_nav() == "financial-audited-statements" ? "active" : ""; ?>">
                                                    <a href="<?= base_url("financial-audited-statements") ?>">Financial
                                                        & Audited Statements</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="position-relative <?= active_nav() == "academics" ? "active" : ""; ?>">
                                        <a href="#!">
                                            Academics <i class="icon-caret fas fa-caret-right"></i>
                                        </a>
                                        <div class="sub-nav to-left two-col-width">
                                            <ul class="two-columns">
                                                <li
                                                    class="<?= active_second_nav() == "programmes-offered" ? "active" : ""; ?>">
                                                    <a href="<?= base_url("programmes-offered") ?>">Programmes
                                                        Offered</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?= base_url("assets/admin/upload/docs/academic-calendar.pdf") ?>">Academic
                                                        Calendar</a>
                                                </li>
                                                <li
                                                    class="<?= active_second_nav() == "academic-planning" ? "active" : ""; ?>">
                                                    <a href="<?= base_url("academic-planning") ?>">Academic Planning</a>
                                                </li>
                                                <li
                                                    class="<?= active_second_nav() == "code-of-conduct" ? "active" : ""; ?>">
                                                    <a href="<?= base_url("code-of-conduct") ?>">Code of Conduct</a>
                                                </li>
                                                <li
                                                    class="<?= active_second_nav() == "examination-evaluation" ? "active" : ""; ?>">
                                                    <a href="<?= base_url("examination-evaluation") ?>">Examination</a>
                                                </li>
                                                <li
                                                    class="<?= active_second_nav() == "awards-scholarships" ? "active" : ""; ?>">
                                                    <a href="<?= base_url("awards-scholarships") ?>">Awards &
                                                        Scholarships</a>
                                                </li>
                                                <li
                                                    class="<?= active_second_nav() == "working-hours" ? "active" : ""; ?>">
                                                    <a href="<?= base_url("working-hours") ?>">Working Hours</a>
                                                </li>
                                                <li
                                                    class="<?= active_second_nav() == "capability-enhancement-development-schemes" ? "active" : ""; ?>">
                                                    <a
                                                        href="<?= base_url("capability-enhancement-development-schemes") ?>">Capability
                                                        Enhancement and Development Schemes</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="position-relative <?= active_nav() == "departments" ? "active" : ""; ?>">
                                        <a href=" #!">
                                            Departments <i class="icon-caret fas fa-caret-right"></i>
                                        </a>
                                        <div class="sub-nav to-left two-col-width">
                                            <ul class="two-columns">
                                                <li
                                                    class="<?= active_second_nav() == "artifical-intelligence-data-science" ? "active" : ""; ?>">
                                                    <a href="<?= base_url("artifical-intelligence-data-science") ?>">Artifical
                                                        Intelligence & Data Science</a>
                                                </li>
                                                <li
                                                    class="<?= active_second_nav() == "civil-engineering" ? "active" : ""; ?>">
                                                    <a href="<?= base_url("civil-engineering") ?>">Civil Engineering</a>
                                                </li>
                                                <li
                                                    class="<?= active_second_nav() == "computer-science-engineering" ? "active" : ""; ?>">
                                                    <a href="<?= base_url("computer-science-engineering") ?>">Computer
                                                        Science & Engineering</a>
                                                </li>
                                                <li
                                                    class="<?= active_second_nav() == "cyber-security" ? "active" : ""; ?>">
                                                    <a href="<?= base_url("cyber-security") ?>">Cyber Security</a>
                                                </li>
                                                <li
                                                    class="<?= active_second_nav() == "electrical-electronics-engineering" ? "active" : ""; ?>">
                                                    <a href="<?= base_url("electrical-electronics-engineering") ?>">Electrical
                                                        & Electronics Engineering</a>
                                                </li>
                                                <li
                                                    class="<?= active_second_nav() == "electronics-communication-engineering" ? "active" : ""; ?>">
                                                    <a href="<?= base_url("electronics-communication-engineering") ?>">Electronics
                                                        & Communication Engineering</a>
                                                </li>
                                                <li
                                                    class="<?= active_second_nav() == "mechanical-engineering" ? "active" : ""; ?>">
                                                    <a href="<?= base_url("mechanical-engineering") ?>">Mechanical
                                                        Engineering</a>
                                                </li>
                                                <li
                                                    class="<?= active_second_nav() == "first-year-engineering" ? "active" : ""; ?>">
                                                    <a href="<?= base_url("first-year-engineering") ?>">First Year
                                                        Engineering</a>
                                                </li>
                                                <li
                                                    class="<?= active_second_nav() == "master-business-administration" ? "active" : ""; ?>">
                                                    <a href="<?= base_url("master-business-administration") ?>">Master
                                                        of Business Administration</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="<?= active_nav() == "campus-life" ? "active" : ""; ?>">
                                        <a href="#!">
                                            Campus Life <i class="icon-caret fas fa-caret-right"></i>
                                        </a>
                                        <div class="sub-nav in-center w-100">
                                            <div class="three-columns">
                                                <div>
                                                    <h2 class="the-heading">Facilities</h2>
                                                    <ul class="d-flex flex-column row-gap-5">
                                                        <li>
                                                            <a
                                                                href="<?= base_url("facilities#amphitheater") ?>">Amphitheater</a>
                                                        </li>
                                                        <li>
                                                            <a href="<?= base_url("facilities#atm") ?>">ATM</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="<?= base_url("facilities#auditorium") ?>">Auditorium</a>
                                                        </li>
                                                        <li>
                                                            <a href="#!">AV Halls</a>
                                                        </li>
                                                        <li>
                                                            <a href="#!">Canteen</a>
                                                        </li>
                                                        <li>
                                                            <a href="#!">Classrooms</a>
                                                        </li>
                                                        <li>
                                                            <a href="#!">Gym</a>
                                                        </li>
                                                        <li>
                                                            <a href="#!">Hostel & Mess</a>
                                                        </li>
                                                        <li
                                                            class="<?= active_second_nav() == "facilities" ? "active" : ""; ?>">
                                                            <a href="<?= base_url("facilities") ?>">More</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <h2 class="the-heading">Professional / Student Bodies</h2>
                                                    <ul class="d-flex flex-column row-gap-5">
                                                        <li>
                                                            <a href="#!">FACE</a>
                                                        </li>
                                                        <li>
                                                            <a href="#!">GDSC</a>
                                                        </li>
                                                        <li>
                                                            <a href="">Institution's Innovation Council</a>
                                                        </li>
                                                        <li>
                                                            <a href="">MLSA</a>
                                                        </li>
                                                        <li>
                                                            <a href="">SAE India Student Chapter</a>
                                                        </li>
                                                        <li>
                                                            <a href="">SMEA</a>
                                                        </li>
                                                        <li
                                                            class="<?= active_second_nav() == "student-activity-council" ? "active" : ""; ?>">
                                                            <a href="<?= base_url("student-activity-council") ?>">Student
                                                                Activity Council</a>
                                                        </li>
                                                        <li>
                                                            <a href="">TAES</a>
                                                        </li>
                                                        <li
                                                            class="<?= active_second_nav() == "electro-pulse-club" ? "active" : ""; ?>">
                                                            <a href="<?= base_url("electro-pulse-club") ?>">Electro
                                                                Pulse Club</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <h2 class="the-heading">Events & Gallery</h2>
                                                    <ul class="d-flex flex-column row-gap-5">
                                                        <li
                                                            class="<?= active_second_nav() == "events" ? "active" : ""; ?>">
                                                            <a href="<?= base_url("events") ?>">Events</a>
                                                        </li>
                                                        <li
                                                            class="<?= active_second_nav() == "video-gallery" ? "active" : ""; ?>">
                                                            <a href="<?= base_url("video-gallery") ?>">Video Gallery</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="<?= active_nav() == "r&d" ? "active" : ""; ?>">
                                        <a href="<?= base_url("research-development") ?>">
                                            R&D
                                        </a>
                                    </li>
                                    <li
                                        class="position-relative <?= active_nav() == "accreditations" ? "active" : ""; ?>">
                                        <a href="#!">
                                            Accreditations <i class="icon-caret fas fa-caret-right"></i>
                                        </a>
                                        <div class="sub-nav in-center three-col-width">
                                            <div class="two-columns">
                                                <div>
                                                    <h2 class="the-heading">NAAC</h2>
                                                    <ul class="d-flex flex-column row-gap-5">
                                                        <li>
                                                            <a
                                                                href="<?= base_url("assets/admin/upload/docs/IIQA.pdf") ?>">Institutional
                                                                Information for Quality Assessment</a>
                                                        </li>
                                                        <li>
                                                            <a href="https://www.youtube.com/watch?v=tYUST9heUwc"
                                                                target="_blank">Peer Team Visit</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="<?= base_url("assets/admin/upload/docs/ssr.pdf") ?>">Self
                                                                Study Report</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="<?= base_url("assets/admin/upload/docs/sistec-naac-accreditation-certificate.pdf") ?>">NAAC
                                                                Certificate</a>
                                                        </li>
                                                        <li
                                                            class="<?= active_second_nav() == "naac-mandatory-disclosure" ? "active" : ""; ?>">
                                                            <a href="<?= base_url("naac-mandatory-disclosure") ?>">NAAC
                                                                Mandatory Disclosure</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <h2 class="the-heading">NBA</h2>
                                                    <ul class="d-flex flex-column row-gap-5">
                                                        <li
                                                            class="<?= active_second_nav() == "nba-program-applied" ? "active" : ""; ?>">
                                                            <a href="<?= base_url("nba-program-applied") ?>">NBA Program
                                                                Applied</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="<?= base_url("assets/admin/upload/docs/sistec-nba-accreditation-certificate.pdf") ?>">NBA
                                                                Certificate</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="<?= active_nav() == "placements" ? "active" : ""; ?>">
                                        <a href="<?= base_url("placements") ?>">
                                            Placements
                                        </a>
                                    </li>
                                    <li class="position-relative <?= active_nav() == "admissions" ? "active" : ""; ?>">
                                        <a href="#!">
                                            Admissions <i class="icon-caret fas fa-caret-right"></i>
                                        </a>
                                        <div class="sub-nav to-right two-col-width">
                                            <ul class="two-columns">
                                                <li
                                                    class="<?= active_second_nav() == "admission-enquiry" ? "active" : ""; ?>">
                                                    <a href="<?= base_url("admissions") ?>">Admission Enquiry</a>
                                                </li>
                                                <li
                                                    class="<?= active_second_nav() == "admission-procedure" ? "active" : ""; ?>">
                                                    <a href="<?= base_url("admission-procedure") ?>">Admission
                                                        Procedure</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="<?= base_url("assets/admin/upload/docs/sistec-e-brochure.pdf") ?>">E-Brochure</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="<?= active_nav() == "contact" ? "active" : ""; ?>">
                                        <a href="<?= base_url("contact") ?>">
                                            Contact
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </header>