<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AcademicsController extends CI_Controller
{
   public function programmes_offered()
   {
      active_nav("academics", "programmes-offered");
      $this->lib->header();

      $pageData["pageHeader"] = (object)[
         "title" => "Programmes Offered",
         "breadcrumb" => ["academics", "Programmes Offered"]
      ];

      $this->load->view('web/common/breadcrumb', $pageData);
      $this->load->view('web/pages/academics/programmes-offered');
      $this->load->view('web/pages-scripts/common-script');
      $this->lib->footer();
   }

   public function academic_planning()
   {
      active_nav("academics", "academic-planning");
      $this->lib->header();

      $pageData["pageHeader"] = (object)[
         "title" => "Academic Planning",
         "breadcrumb" => ["academics", "Academic Planning"]
      ];

      $pageData["academicPlanning"] = @academicPlanning();

      $this->load->view('web/common/breadcrumb', $pageData);
      $this->load->view('web/pages/academics/academic-planning');
      $this->load->view('web/pages-scripts/common-script');
      $this->lib->footer();
   }

   public function code_of_conduct()
   {
      active_nav("academics", "code-of-conduct");
      $this->lib->header();

      $pageData["pageHeader"] = (object)[
         "title" => "Code of Conduct",
         "breadcrumb" => ["academics", "Code of Conduct"]
      ];

      $pageData["codeOfConduct"] = @codeOfConduct();

      $this->load->view('web/common/breadcrumb', $pageData);
      $this->load->view('web/pages/academics/code-of-conduct');
      $this->load->view('web/pages-scripts/common-script');
      $this->lib->footer();
   }

   public function examination_evaluation()
   {
      active_nav("academics", "examination-evaluation");
      $this->lib->header();

      $pageData["pageHeader"] = (object)[
         "title" => "Examination Evaluation",
         "breadcrumb" => ["academics", "Examination Evaluation"]
      ];

      $this->load->view('web/common/breadcrumb', $pageData);
      $this->load->view('web/pages/academics/examination-evaluation');
      $this->load->view('web/pages-scripts/common-script');
      $this->lib->footer();
   }

   public function awards_scholarships()
   {
      active_nav("academics", "awards-scholarships");
      $this->lib->header();

      $pageData["pageHeader"] = (object)[
         "title" => "Awards & Scholarships",
         "breadcrumb" => ["academics", "Awards & Scholarships"]
      ];

      $this->load->view('web/common/breadcrumb', $pageData);
      $this->load->view('web/pages/academics/awards-scholarships');
      $this->load->view('web/pages-scripts/common-script');
      $this->lib->footer();
   }

   public function working_hours()
   {
      active_nav("academics", "working-hours");
      $this->lib->header();

      $pageData["pageHeader"] = (object)[
         "title" => "Working Hours",
         "breadcrumb" => ["academics", "Working Hours"]
      ];

      $this->load->view('web/common/breadcrumb', $pageData);
      $this->load->view('web/pages/academics/working-hours');
      $this->load->view('web/pages-scripts/common-script');
      $this->lib->footer();
   }

   public function capability_enhancement_development_schemes()
   {
      active_nav("academics", "capability-enhancement-development-schemes");
      $this->lib->header();

      $pageData["pageHeader"] = (object)[
         "title" => "Capability Enhancement Development Schemes",
         "breadcrumb" => ["academics", "Capability Enhancement Development Schemes"]
      ];

      $this->load->view('web/common/breadcrumb', $pageData);
      $this->load->view('web/pages/academics/capability-enhancement-development-schemes');
      $this->load->view('web/pages-scripts/common-script');
      $this->lib->footer();
   }
}
