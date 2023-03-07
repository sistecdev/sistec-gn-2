<?php
defined('BASEPATH') or exit('No direct script access allowed');

$defaultController = "Web";
$route['default_controller'] = $defaultController;

// About Tab Routes
$aboutController = "AboutController/";
$route["sagar-institute-science-technology"] = $aboutController . "sagar_institute_science_technology";
$route["sagar-group"] = $aboutController . "sagar_group";
$route["sagar-group-of-institutions"] = $aboutController . "sagar_group_of_institutions";
$route["vision-mission"] = $aboutController . "vision_mission";
$route["management-team"] = $aboutController . "management_team";
$route["governing-bodies"] = $aboutController . "governing_bodies";
$route["advisory-committee"] = $aboutController . "advisory_committee";
$route["committees"] = $aboutController . "committees";
$route["financial-audited-statements"] = $aboutController . "financial_audited_statements";

// Academics Tab Routes
$academicsController = "AcademicsController/";
$route["programmes-offered"] = $academicsController . "programmes_offered";
$route["academic-planning"] = $academicsController . "academic_planning";
$route["code-of-conduct"] = $academicsController . "code_of_conduct";
$route["examination-evaluation"] = $academicsController . "examination_evaluation";
$route["awards-scholarships"] = $academicsController . "awards_scholarships";
$route["working-hours"] = $academicsController . "working_hours";
$route["capability-enhancement-development-schemes"] = $academicsController . "capability_enhancement_development_schemes";

// Departments Tab Routes
$departmentController = "DepartmentsController/";
$route["artifical-intelligence-data-science"] = $departmentController . "artifical_intelligence_data_science";
$route["civil-engineering"] = $departmentController . "civil_engineering";
$route["computer-science-engineering"] = $departmentController . "computer_science_engineering";
$route["cyber-security"] = $departmentController . "cyber_security";
$route["electrical-electronics-engineering"] = $departmentController . "electrical_electronics_engineering";
$route["electronics-communication-engineering"] = $departmentController . "electronics_communication_engineering";
$route["mechanical-engineering"] = $departmentController . "mechanical_engineering";
$route["first-year-engineering"] = $departmentController . "first_year_engineering";
$route["master-business-administration"] = $departmentController . "master_business_administration";

// Departments Laboratories Routes
$route["mechanical-engineering/laboratories/theory-of-machines"] = $departmentController . "laboratory";

// Campus Life Tab Routes
$campusController = "CampusController/";
$route["facilities"] = $campusController . "facilities";
$route["student-activity-council"] = $campusController . "student_activity_council";
$route["electro-pulse-club"] = $campusController . "electro_pulse_club";
$route["events"] = $campusController . "events";
$route["inner-event"] = $campusController . "inner_event";
$route["photo-gallery"] = $campusController . "photo_gallery";
$route["video-gallery"] = $campusController . "video_gallery";

// Remaining Tab Routes
$remainingController = "RemainingController/";
$route["research-development"] = $remainingController . "research_development";
$route["naac-mandatory-disclosure"] = $remainingController . "naac_mandatory_disclosure";
$route["nba-program-applied"] = $remainingController . "nba_program_applied";
$route["placements"] = $remainingController . "placements";
$route["admissions"] = $remainingController . "admission_enquiry";
$route["admission-procedure"] = $remainingController . "admission_procedure";
$route["contact"] = $remainingController . "contact";
$route["newsletters-bulletins"] = $remainingController . "newsletters_bulletins";
$route["approvals"] = $remainingController . "approvals";
$route["careers"] = $remainingController . "careers";

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


// Routes by sanjay 06-02-2023
require_once(BASEPATH . 'database/DB.php');
$db = &DB();
$query = $db->get('routes');
$result = $query->result();
foreach ($result as $row) {
   $route[$row->routers_link] = $row->routers_route; //$route[$row->routers_link . '/(:any)'] = $row->routers_route . '/$1'; //$route[$row->routers_link . '/(:any)/(:any)'] = $row->routers_route . '/$1/$2';
}
$route['webadmin'] = 'admin/index';
$route['admin/home'] = 'admin/index';
$route['validate-user'] = 'admin/validate_user';
$route['admin-logout'] = 'admin/logout';
$route['admin-login'] = 'admin/login_page';
$route['admin-our-teams'] = 'admin/our_team';
$route['delete-with-file'] = 'admin/delete_with_file';
$route['admin-alumni-achievers'] = 'admin/alumni_achievers';
$route['admin-events-gallery'] = 'admin/events_gallery';
$route['admin-what-parents-say'] = 'admin/parent_says';
$route['admin-media-gallery'] = 'admin/media_gallery';
$route['admin-awards'] = 'admin/awards';
$route['admin-result-highlights'] = 'admin/result_highlights';
$route['admin-news-notice'] = 'admin/news_notice';
$route['admin-student-council'] = 'admin/student_council';
//API
$route['check-duplicate-admission-enquiry'] = 'API/check_duplicate_admission_enquiry';
$route['send-admission-enquiry'] = 'API/send_admission_enquiry';
$route['get-branch-on-course-name'] = 'API/get_branch_on_course_name';
$route['get-city-on-state'] = 'API/get_city_on_state';
