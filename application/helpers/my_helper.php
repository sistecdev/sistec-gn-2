<?php
if (!defined('BASEPATH'))
   exit('No direct script access allowed');

if (!function_exists('active_nav')) {
   function active_nav($nav = "", $secondNav = "")
   {
      $ci = &get_instance();
      $ci->load->library('session');
      if ($nav != "") {
         $ci->session->set_userdata("current_nav", $nav);
      }
      if ($secondNav != "") {
         active_second_nav($secondNav);
      } else if ($secondNav == "0") {
         $ci->session->unset_userdata("current_second_nav");
      }
      return $ci->session->userdata("current_nav");
   }
}

if (!function_exists('active_second_nav')) {
   function active_second_nav($nav = "")
   {
      $ci = &get_instance();
      $ci->load->library('session');
      if ($nav != "") {
         $ci->session->set_userdata("current_second_nav", $nav);
      }
      return $ci->session->userdata("current_second_nav");
   }
}

if (!function_exists('header_data')) {
   function header_data()
   {
      $ci = &get_instance();
      $ci->load->model(['Query' => 'mod']);
      return $ci->mod->select("header_data", "*", ["id" => 1])->row();
   }
}

if (!function_exists('generateSeoURL')) {
   function generateSeoURL($string, $wordLimit = 0)
   {
      $separator = '-';
      if ($wordLimit != 0) {
         $wordArr = explode(' ', $string);
         $string = implode(' ', array_slice($wordArr, 0, $wordLimit));
      }
      $quoteSeparator = preg_quote($separator, '#');
      $trans = array(
         '&.+?;' => '',
         '[^\w\d _-]' => '',
         '\s+' => $separator,
         '(' . $quoteSeparator . ')+' => $separator
      );
      $string = strip_tags($string);
      foreach ($trans as $key => $val) {
         $string = preg_replace('#' . $key . '#i' . (UTF8_ENABLED ? 'u' : ''), $val, $string);
      }
      $string = strtolower($string);
      return trim(trim($string, $separator));
   }
}

if (!function_exists('create_breadcrumb')) {
   function create_breadcrumb($breadcrumbArrayFromPages)
   {
      $ci = &get_instance();
      $breadcrumb[0] = "<a href='{$ci->config->item("base_url")}'>Home</a>";
      for ($i = 0; $i < count($breadcrumbArrayFromPages); $i++) {
         $breadcrumb[$i + 1] = $breadcrumbArrayFromPages[$i];
      }
      return $breadcrumb;
   }
}

if (!function_exists('departmentTabs')) {
   function departmentTabs()
   {
      $ci = &get_instance();
      return $ci->config->item("departmentTabs");
   }
}

if (!function_exists('departmentAbout')) {
   function departmentAbout()
   {
      $ci = &get_instance();
      return $ci->config->item("departmentAbout");
   }
}

if (!function_exists('departmentVision')) {
   function departmentVision()
   {
      $ci = &get_instance();
      return $ci->config->item("departmentVision");
   }
}

if (!function_exists('departmentMission')) {
   function departmentMission()
   {
      $ci = &get_instance();
      return $ci->config->item("departmentMission");
   }
}

if (!function_exists('departmentPEO')) {
   function departmentPEO()
   {
      $ci = &get_instance();
      return $ci->config->item("departmentPEO");
   }
}

if (!function_exists('departmentPSO')) {
   function departmentPSO()
   {
      $ci = &get_instance();
      return $ci->config->item("departmentPSO");
   }
}

if (!function_exists('departmentPO')) {
   function departmentPO()
   {
      $ci = &get_instance();
      return $ci->config->item("departmentPO");
   }
}

if (!function_exists('departmentProgramsUG')) {
   function departmentProgramsUG()
   {
      $ci = &get_instance();
      return $ci->config->item("departmentProgramsUG");
   }
}

if (!function_exists('departmentProgramsPG')) {
   function departmentProgramsPG()
   {
      $ci = &get_instance();
      return $ci->config->item("departmentProgramsPG");
   }
}

if (!function_exists('departmentFaculties')) {
   function departmentFaculties()
   {
      $ci = &get_instance();
      return $ci->config->item("departmentFaculties");
   }
}

if (!function_exists('departmentLabs')) {
   function departmentLabs()
   {
      $ci = &get_instance();
      return $ci->config->item("departmentLabs");
   }
}

if (!function_exists('departmentVac')) {
   function departmentVac()
   {
      $ci = &get_instance();
      return $ci->config->item("departmentVac");
   }
}

if (!function_exists('departmentJournals')) {
   function departmentJournals()
   {
      $ci = &get_instance();
      return $ci->config->item("departmentJournals");
   }
}

if (!function_exists('departmentConferences')) {
   function departmentConferences()
   {
      $ci = &get_instance();
      return $ci->config->item("departmentConferences");
   }
}

if (!function_exists('departmentNewsletters')) {
   function departmentNewsletters()
   {
      $ci = &get_instance();
      return $ci->config->item("departmentNewsletters");
   }
}

if (!function_exists('departmentPublications')) {
   function departmentPublications()
   {
      $ci = &get_instance();
      return $ci->config->item("departmentPublications");
   }
}

if (!function_exists('departmentStudentAchievements')) {
   function departmentStudentAchievements()
   {
      $ci = &get_instance();
      return $ci->config->item("departmentStudentAchievements");
   }
}

if (!function_exists('sistecBulletins')) {
   function sistecBulletins()
   {
      $ci = &get_instance();
      return $ci->config->item("sistecBulletins");
   }
}

if (!function_exists('aicteApprovals')) {
   function aicteApprovals()
   {
      $ci = &get_instance();
      return $ci->config->item("aicteApprovals");
   }
}

if (!function_exists('rgpvApprovals')) {
   function rgpvApprovals()
   {
      $ci = &get_instance();
      return $ci->config->item("rgpvApprovals");
   }
}

if (!function_exists('buApprovals')) {
   function buApprovals()
   {
      $ci = &get_instance();
      return $ci->config->item("buApprovals");
   }
}

if (!function_exists('financialStatements')) {
   function financialStatements()
   {
      $ci = &get_instance();
      return $ci->config->item("financialStatements");
   }
}

if (!function_exists('academicPlanning')) {
   function academicPlanning()
   {
      $ci = &get_instance();
      return $ci->config->item("academicPlanning");
   }
}

if (!function_exists('codeOfConduct')) {
   function codeOfConduct()
   {
      $ci = &get_instance();
      return $ci->config->item("codeOfConduct");
   }
}

if (!function_exists('industryLinkages')) {
   function industryLinkages()
   {
      $ci = &get_instance();
      return $ci->config->item("industryLinkages");
   }
}

if (!function_exists('homeFacilities')) {
   function homeFacilities()
   {
      $ci = &get_instance();
      return $ci->config->item("homeFacilities");
   }
}