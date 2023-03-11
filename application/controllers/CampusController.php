<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CampusController extends CI_Controller
{
   public function facilities()
   {
      active_nav("campus-life", "facilities", "0");
      $this->lib->header();

      $pageData["pageHeader"] = (object) [
         "title" => "facilities",
         "breadcrumb" => ["campus life", "facilities"]
      ];

      $this->load->view('web/common/breadcrumb', $pageData);
      $this->load->view('web/pages/campus/facilities');
      $this->load->view('web/pages-scripts/common-script');
      $this->lib->footer();
   }

   public function electro_pulse_club()
   {
      active_nav("campus-life", "student-bodies", "electro-pulse-club");
      $this->lib->header();

      $pageData["pageHeader"] = (object) [
         "title" => "electro-pulse-club",
         "breadcrumb" => ["campus life", "electro-pulse-club"]
      ];

      $this->load->view('web/common/breadcrumb', $pageData);
      $this->load->view('web/pages/campus/electro-pulse-club');
      $this->load->view('web/pages-scripts/common-script');
      $this->lib->footer();
   }

   public function student_activity_council()
   {
      active_nav("campus-life", "student-bodies", "student-activity-council");
      $this->lib->header();

      $pageData["pageHeader"] = (object) [
         "title" => "Student Activity Council",
         "breadcrumb" => ["campus life", "Student Activity Council"]
      ];

      $this->load->view('web/common/breadcrumb', $pageData);
      $this->load->view('web/pages/campus/student-activity-council');
      $this->load->view('web/pages-scripts/common-script');
      $this->lib->footer();
   }

   public function events()
   {
      active_nav("campus-life", "events-gallery", "events");
      $this->lib->header();
      $pageData["pageHeader"] = (object) [
         "title" => "Events",
         "breadcrumb" => ["campus life", "Events"]
      ];
      $data["events"] = $this->mod->select("events", "*")->result();
      $this->load->view('web/common/breadcrumb', $pageData);
      $this->load->view('web/pages/campus/events', $data);
      $this->load->view('web/pages-scripts/common-script');
      $this->lib->footer();
   }

   /*public function inner_event()
   {
   active_nav("campus-life", "events");
   $this->lib->header();
   $pageData["pageHeader"] = (object)[
   "title" => "Inner Event",
   "breadcrumb" => ["campus life", "Inner Event"]
   ];
   $this->load->view('web/common/breadcrumb', $pageData);
   $this->load->view('web/pages/campus/inner-event');
   $this->load->view('web/pages-scripts/common-script');
   $this->load->view('web/pages-scripts/fancybox');
   $this->lib->footer();
   }*/

   public function photo_gallery()
   {
      active_nav("campus-life", "events-gallery", "photo-gallery");
      $this->lib->header();

      $pageData["pageHeader"] = (object) [
         "title" => "Photo Gallery",
         "breadcrumb" => ["campus life", "Photo Gallery"]
      ];

      $this->load->view('web/common/breadcrumb', $pageData);
      $this->load->view('web/pages/campus/photo-gallery');
      $this->load->view('web/pages-scripts/common-script');
      $this->lib->footer();
   }

   public function video_gallery()
   {
      active_nav("campus-life", "events-gallery", "video-gallery");
      $this->lib->header();

      $pageData["pageHeader"] = (object) [
         "title" => "Video Gallery",
         "breadcrumb" => ["campus life", "Video Gallery"]
      ];
      $data["video_gallery"] = $this->mod->select("video_gallery", "*")->result();

      $this->load->view('web/common/breadcrumb', $pageData);
      $this->load->view('web/pages/campus/video-gallery', $data);
      $this->load->view('web/pages-scripts/common-script');
      $this->load->view('web/pages-scripts/fancybox');
      $this->lib->footer();
   }
}