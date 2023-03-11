<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AboutController extends CI_Controller
{
   public function sagar_institute_science_technology()
   {
      active_nav("about", "sagar-institute-science-technology", "0");
      $this->lib->header();

      $pageData["pageHeader"] = (object) [
         "title" => "SIST<span class='text-lowercase'>ec</span>",
         "breadcrumb" => ["about", "SIST<span class='text-lowercase'>ec</span>"]
      ];

      $this->load->view('web/common/breadcrumb', $pageData);
      $this->load->view('web/pages/about/sagar-institute-science-technology');
      $this->load->view('web/pages-scripts/common-script');
      $this->lib->footer();
   }

   public function sagar_group()
   {
      active_nav("about", "sagar-group", "0");
      $this->lib->header();

      $pageData["pageHeader"] = (object) [
         "title" => "Sagar Group",
         "breadcrumb" => ["about", "sagar group"]
      ];

      $this->load->view('web/common/breadcrumb', $pageData);
      $this->load->view('web/pages/about/sagar-group');
      $this->load->view('web/pages-scripts/common-script');
      $this->load->view('web/pages-scripts/slick');
      $this->lib->footer();
   }

   public function sagar_group_of_institutions()
   {
      active_nav("about", "sagar-group-of-institutions", "0");
      $this->lib->header();

      $pageData["pageHeader"] = (object) [
         "title" => "Sagar Group of Institutions",
         "breadcrumb" => ["about", "sagar group of institutions"]
      ];

      $this->load->view('web/common/breadcrumb', $pageData);
      $this->load->view('web/pages/about/sagar-group-of-institutions');
      $this->load->view('web/pages-scripts/common-script');
      $this->lib->footer();
   }

   public function vision_mission()
   {
      active_nav("about", "vision-mission", "0");
      $this->lib->header();

      $pageData["pageHeader"] = (object) [
         "title" => "Vision & Mission",
         "breadcrumb" => ["about", "vision & mission"]
      ];

      $this->load->view('web/common/breadcrumb', $pageData);
      $this->load->view('web/pages/about/vision-mission');
      $this->load->view('web/pages-scripts/common-script');
      $this->lib->footer();
   }

   public function management_team()
   {
      active_nav("about", "management-team", "0");
      $this->lib->header();

      $pageData["pageHeader"] = (object) [
         "title" => "Management Team",
         "breadcrumb" => ["about", "management team"]
      ];

      $this->load->view('web/common/breadcrumb', $pageData);
      $this->load->view('web/pages/about/management-team');
      $this->load->view('web/pages-scripts/common-script');
      $this->lib->footer();
   }

   public function governing_bodies()
   {
      active_nav("about", "governing-bodies", "0");
      $this->lib->header();

      $pageData["pageHeader"] = (object) [
         "title" => "Governing Bodies",
         "breadcrumb" => ["about", "governing bodies"]
      ];

      $this->load->view('web/common/breadcrumb', $pageData);
      $this->load->view('web/pages/about/governing-bodies');
      $this->load->view('web/pages-scripts/common-script');
      $this->lib->footer();
   }

   public function advisory_committee()
   {
      active_nav("about", "advisory-committee", "0");
      $this->lib->header();

      $pageData["pageHeader"] = (object) [
         "title" => "Advisory Committee",
         "breadcrumb" => ["about", "advisory committee"]
      ];

      $this->load->view('web/common/breadcrumb', $pageData);
      $this->load->view('web/pages/about/advisory-committee');
      $this->load->view('web/pages-scripts/common-script');
      $this->lib->footer();
   }

   public function committees()
   {
      active_nav("about", "committees", "0");
      $this->lib->header();

      $pageData["pageHeader"] = (object) [
         "title" => "Committees",
         "breadcrumb" => ["about", "committees"]
      ];

      $this->load->view('web/common/breadcrumb', $pageData);
      $this->load->view('web/pages/about/committees');
      $this->load->view('web/pages-scripts/common-script');
      $this->lib->footer();
   }

   public function financial_audited_statements()
   {
      active_nav("about", "financial-audited-statements", "0");
      $this->lib->header();

      $pageData["pageHeader"] = (object) [
         "title" => "Financial Audited Statements",
         "breadcrumb" => ["about", "financial audited statements"]
      ];

      $pageData["financialStatements"] = @financialStatements();

      $this->load->view('web/common/breadcrumb', $pageData);
      $this->load->view('web/pages/about/financial-audited-statements');
      $this->load->view('web/pages-scripts/common-script');
      $this->lib->footer();
   }
}