<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DepartmentsController extends CI_Controller
{
	public function getEntireDepartmentalFilesData()
	{
		$pageData["departmentTabs"] = @departmentTabs();
		$pageData["departmentAbout"] = @departmentAbout();
		$pageData["departmentVision"] = @departmentVision();
		$pageData["departmentMission"] = @departmentMission();
		$pageData["departmentPEO"] = @departmentPEO();
		$pageData["departmentPSO"] = @departmentPSO();
		$pageData["departmentPO"] = @departmentPO();
		$pageData["departmentPO"] = @departmentPO();
		$pageData["departmentFaculties"] = @departmentFaculties();
		$pageData["departmentProgramsUG"] = @departmentProgramsUG();
		$pageData["departmentProgramsPG"] = @departmentProgramsPG();
		$pageData["departmentVac"] = @departmentVac();
		$pageData["departmentLabs"] = @departmentLabs();
		$pageData["departmentNewsletters"] = @departmentNewsletters();
		$pageData["departmentPublications"] = @departmentPublications();
		$pageData["departmentStudentAchievements"] = @departmentStudentAchievements();
		$pageData["departmentJournals"] = @departmentJournals();
		$pageData["departmentConferences"] = @departmentConferences();
		return $pageData;
	}

	public function electronics_communication_engineering()
	{
		active_nav("departments", "electronics-communication-engineering", "0");
		$this->lib->header();

		$pageData["pageHeader"] = (object) [
			"title" => "Electronics & Communication Engineering",
			"breadcrumb" => ["departments", "Electronics & Communication Engineering"]
		];

		$departmentalData = $this->getEntireDepartmentalFilesData();

		$departmentalData["journals"] = $this->mod->select("dept_journals", "*", ["department" => "Electronics & Communication Engineering"], "publish_year", "DESC")->result();
		$departmentalData["conferences"] = $this->mod->select("dept_conferences", "*", ["department" => "Electronics & Communication Engineering"], "year", "DESC")->result();
		$departmentalData["ugcjournals"] = $this->mod->select("dept_ugc", "*", ["department" => "Electronics & Communication Engineering"], "year", "DESC")->result();

		$this->load->view('web/common/breadcrumb', $pageData);
		$this->load->view('web/pages/departments/electronics-communication-engineering', $departmentalData);
		$this->load->view('web/pages/modals-code', $pageData);
		$this->load->view('web/pages-scripts/common-script');
		$this->load->view('web/pages-scripts/departments-script');
		$this->lib->footer();
	}


	public function first_year_engineering()
	{
		active_nav("departments", "first-year-engineering", "0");
		$this->lib->header();

		$pageData["pageHeader"] = (object) [
			"title" => "First Year Engineering",
			"breadcrumb" => ["departments", "First Year Engineering"]
		];

		$departmentalData = $this->getEntireDepartmentalFilesData();

		$departmentalData["journals"] = $this->mod->select("dept_journals", "*", ["department" => "First Year Engineering"], "publish_year", "DESC")->result();
		$departmentalData["conferences"] = $this->mod->select("dept_conferences", "*", ["department" => "First Year Engineering"], "year", "DESC")->result();

		$this->load->view('web/common/breadcrumb', $pageData);
		$this->load->view('web/pages/departments/first-year-engineering', $departmentalData);
		$this->load->view('web/pages/modals-code', $pageData);
		$this->load->view('web/pages-scripts/common-script');
		$this->load->view('web/pages-scripts/departments-script');
		$this->lib->footer();
	}

	public function master_business_administration()
	{
		active_nav("departments", "master-business-administration", "0");
		$this->lib->header();

		$pageData["pageHeader"] = (object) [
			"title" => "Master of Business Administration",
			"breadcrumb" => ["departments", "Master of Business Administration"]
		];

		$departmentalData = $this->getEntireDepartmentalFilesData();

		$departmentalData["journals"] = $this->mod->select("dept_journals", "*", ["department" => "Master of Business Administration"], "publish_year", "DESC")->result();
		$departmentalData["conferences"] = $this->mod->select("dept_conferences", "*", ["department" => "Master of Business Administration"], "year", "DESC")->result();

		$this->load->view('web/common/breadcrumb', $pageData);
		$this->load->view('web/pages/departments/master-business-administration', $departmentalData);
		$this->load->view('web/pages/modals-code', $pageData);
		$this->load->view('web/pages-scripts/common-script');
		$this->load->view('web/pages-scripts/departments-script');
		$this->lib->footer();
	}

	public function computer_science_engineering()
	{
		active_nav("departments", "computer-science-engineering", "0");
		$this->lib->header();

		$pageData["pageHeader"] = (object) [
			"title" => "Computer Science Engineering",
			"breadcrumb" => ["departments", "Computer Science Engineering"]
		];

		$departmentalData = $this->getEntireDepartmentalFilesData();

		$this->load->view('web/common/breadcrumb', $pageData);
		$this->load->view('web/pages/departments/computer-science-engineering', $departmentalData);
		$this->load->view('web/pages/modals-code', $pageData);
		$this->load->view('web/pages-scripts/common-script');
		$this->load->view('web/pages-scripts/departments-script');
		$this->lib->footer();
	}

	public function civil_engineering()
	{
		active_nav("departments", "civil-engineering", "0");
		$this->lib->header();

		$pageData["pageHeader"] = (object) [
			"title" => "Civil Engineering",
			"breadcrumb" => ["departments", "Civil Engineering"]
		];

		$departmentalData = $this->getEntireDepartmentalFilesData();

		$this->load->view('web/common/breadcrumb', $pageData);
		$this->load->view('web/pages/departments/civil-engineering', $departmentalData);
		$this->load->view('web/pages/modals-code', $pageData);
		$this->load->view('web/pages-scripts/common-script');
		$this->load->view('web/pages-scripts/departments-script');
		$this->lib->footer();
	}

	public function electrical_electronics_engineering()
	{
		active_nav("departments", "electrical-electronics-engineering", "0");
		$this->lib->header();

		$pageData["pageHeader"] = (object) [
			"title" => "Electrical Electronics Engineering",
			"breadcrumb" => ["departments", "Electrical Electronics Engineering"]
		];

		$departmentalData = $this->getEntireDepartmentalFilesData();

		$this->load->view('web/common/breadcrumb', $pageData);
		$this->load->view('web/pages/departments/electrical-electronics-engineering', $departmentalData);
		$this->load->view('web/pages/modals-code', $pageData);
		$this->load->view('web/pages-scripts/common-script');
		$this->load->view('web/pages-scripts/departments-script');
		$this->lib->footer();
	}

	public function mechanical_engineering()
	{
		active_nav("departments", "mechanical-engineering", "0");
		$this->lib->header();

		$pageData["pageHeader"] = (object) [
			"title" => "Mechanical Engineering",
			"breadcrumb" => ["departments", "Mechanical Engineering"]
		];

		$departmentalData = $this->getEntireDepartmentalFilesData();

		$this->load->view('web/common/breadcrumb', $pageData);
		$this->load->view('web/pages/departments/mechanical-engineering', $departmentalData);
		$this->load->view('web/pages/modals-code', $pageData);
		$this->load->view('web/pages-scripts/common-script');
		$this->load->view('web/pages-scripts/departments-script');
		$this->lib->footer();
	}

	public function artifical_intelligence_data_science()
	{
		active_nav("departments", "artifical-intelligence-data-science", "0");
		$this->lib->header();

		$pageData["pageHeader"] = (object) [
			"title" => "Artifical Intelligence Data Science",
			"breadcrumb" => ["departments", "Artifical Intelligence Data Science"]
		];

		$departmentalData = $this->getEntireDepartmentalFilesData();

		$this->load->view('web/common/breadcrumb', $pageData);
		$this->load->view('web/pages/departments/artifical-intelligence-data-science', $departmentalData);
		$this->load->view('web/pages/modals-code', $pageData);
		$this->load->view('web/pages-scripts/common-script');
		$this->load->view('web/pages-scripts/departments-script');
		$this->lib->footer();
	}

	public function cyber_security()
	{
		active_nav("departments", "cyber-security", "0");
		$this->lib->header();

		$pageData["pageHeader"] = (object) [
			"title" => "Cyber Security",
			"breadcrumb" => ["departments", "Cyber Security"]
		];

		$departmentalData = $this->getEntireDepartmentalFilesData();

		$this->load->view('web/common/breadcrumb', $pageData);
		$this->load->view('web/pages/departments/cyber-security', $departmentalData);
		$this->load->view('web/pages/modals-code', $pageData);
		$this->load->view('web/pages-scripts/common-script');
		$this->load->view('web/pages-scripts/departments-script');
		$this->lib->footer();
	}

	public function laboratory()
	{
		active_nav("departments", "mechanical-engineering", "0");
		$this->lib->header();

		$pageData["pageHeader"] = (object) [
			"title" => "Theory of Machines",
			"breadcrumb" => ["departments", "mechanical engineering", "laboratories", "theory of machines"]
		];

		$this->load->view('web/pages/departments/laboratory', $pageData);
		$this->load->view('web/pages-scripts/common-script');
		$this->load->view('web/pages-scripts/departments-script');
		$this->lib->footer();
	}
}