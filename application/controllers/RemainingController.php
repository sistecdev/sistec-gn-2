<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RemainingController extends CI_Controller
{
   public function research_development()
   {
      active_nav("research-development", "research-development");
      $this->lib->header();

      $pageData["pageHeader"] = (object) [
         "title" => "Research & Development",
         "breadcrumb" => ["campus life", "Research & Development"]
      ];

      $this->load->view('web/common/breadcrumb', $pageData);
      $this->load->view('web/pages/remaining/research-development');
      $this->load->view('web/pages-scripts/common-script');
      $this->lib->footer();
   }

   public function naac_mandatory_disclosure()
   {
      active_nav("accreditations", "naac-mandatory-disclosure");
      $this->lib->header();

      $pageData["pageHeader"] = (object) [
         "title" => "Naac Mandatory Disclosure",
         "breadcrumb" => ["campus life", "Naac Mandatory Disclosure"]
      ];

      $this->load->view('web/common/breadcrumb', $pageData);
      $this->load->view('web/pages/remaining/naac-mandatory-disclosure');
      $this->load->view('web/pages-scripts/common-script');
      $this->lib->footer();
   }

   public function nba_program_applied()
   {
      active_nav("accreditations", "nba-program-applied");
      $this->lib->header();

      $pageData["pageHeader"] = (object) [
         "title" => "NBA Program Applied",
         "breadcrumb" => ["campus life", "NBA Program Applied"]
      ];

      $this->load->view('web/common/breadcrumb', $pageData);
      $this->load->view('web/pages/remaining/nba-program-applied');
      $this->load->view('web/pages-scripts/common-script');
      $this->lib->footer();
   }

   public function placements()
   {
      active_nav("placements", "placements");
      $this->lib->header();

      $pageData["pageHeader"] = (object) [
         "title" => "placements",
         "breadcrumb" => ["campus life", "placements"]
      ];

      $pageData["industryLinkages"] = @industryLinkages();
      $this->load->view('web/common/breadcrumb', $pageData);
      $this->load->view('web/pages/remaining/placements');
      $this->load->view('web/pages-scripts/common-script');
      $this->lib->footer();
   }

   public function admission_enquiry()
   {
      active_nav("admissions", "admission-enquiry");
      $this->lib->header();

      $pageData["pageHeader"] = (object) [
         "title" => "admission enquiry",
         "breadcrumb" => ["campus life", "admission enquiry"]
      ];

      $data["courses"] = $this->mod->select("courses", "*", ["active" => 1, "status" => 1], "course_id", "ASC")->result();
      $data["states"] = $this->mod->select("states", "*", ["country_id" => 101], "name", "ASC")->result();
      $this->load->view('web/common/breadcrumb', $pageData);
      $this->load->view('web/pages/remaining/admission-enquiry', $data);
      $this->load->view('web/pages-scripts/common-script');
      $this->lib->footer();
   }


   public function admission_procedure()
   {
      active_nav("admissions", "admission-procedure");
      $this->lib->header();

      $pageData["pageHeader"] = (object) [
         "title" => "admission procedure",
         "breadcrumb" => ["campus life", "admission procedure"]
      ];

      $this->load->view('web/common/breadcrumb', $pageData);
      $this->load->view('web/pages/remaining/admission-procedure');
      $this->load->view('web/pages-scripts/common-script');
      $this->lib->footer();
   }

   public function contact()
   {
      active_nav("contact", "contact");
      $this->lib->header();

      $pageData["pageHeader"] = (object) [
         "title" => "contact",
         "breadcrumb" => ["campus life", "contact"]
      ];

      $this->load->view('web/common/breadcrumb', $pageData);
      $this->load->view('web/pages/remaining/contact');
      $this->load->view('web/pages-scripts/common-script');
      $this->lib->footer();
   }

   public function newsletters_bulletins()
   {
      active_nav("strip-upper", "newsletters-bulletins");
      $this->lib->header();

      $pageData["pageHeader"] = (object) [
         "title" => "newsletters bulletins",
         "breadcrumb" => ["campus life", "newsletters bulletins"]
      ];

      $pageData["sistecBulletins"] = @sistecBulletins();
      $this->load->view('web/common/breadcrumb', $pageData);
      $this->load->view('web/pages/remaining/newsletters-bulletins', $pageData);
      $this->load->view('web/pages-scripts/common-script');
      $this->lib->footer();
   }

   public function approvals()
   {
      active_nav("strip-upper", "approvals");
      $this->lib->header();

      $pageData["pageHeader"] = (object) [
         "title" => "approvals",
         "breadcrumb" => ["campus life", "approvals"]
      ];

      $pageData["aicteApprovals"] = @aicteApprovals();
      $pageData["rgpvApprovals"] = @rgpvApprovals();
      $pageData["buApprovals"] = @buApprovals();
      $this->load->view('web/common/breadcrumb', $pageData);
      $this->load->view('web/pages/remaining/approvals', $pageData);
      $this->load->view('web/pages-scripts/common-script');
      $this->lib->footer();
   }

   public function careers()
   {
      active_nav("strip-upper", "careers");
      $this->lib->header();

      $pageData["pageHeader"] = (object) [
         "title" => "careers",
         "breadcrumb" => ["campus life", "careers"]
      ];

      $this->load->view('web/common/breadcrumb', $pageData);
      $this->load->view('web/pages/remaining/careers');
      $this->load->view('web/pages-scripts/common-script');
      $this->lib->footer();
   }
}