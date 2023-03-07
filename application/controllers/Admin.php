<?php

use function PHPSTORM_META\type;

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('encryption');
	}

	public function loginHead()
	{
		$this->load->view('admin/login-head');
	}
	public function loginFoot()
	{
		$this->load->view('admin/login-foot');
	}
	public function header($title = "SPS-RB")
	{
		$data["title"] = $title;
		$this->load->view('admin/header', $data);
	}
	public function footer()
	{
		$this->load->view('admin/footer');
	}
	public function login_page()
	{
		$this->loginHead();
		$this->load->view('admin/login');
		$this->loginFoot();
	}
	public function login()
	{
		if ($this->session->userdata("admin_userid")) {
			redirect("webadmin");
		} else {
			redirect("admin-login");
		}
	}
	public function logout()
	{
		$this->session->unset_userdata("admin_userid");
		redirect("admin-login");
	}
	public function validate_user()
	{
		if (isset($_POST["username"]) && isset($_POST["password"])) {
			extract($_POST);
			$qry = $this->adm->userValidate($username, $password);
			if ($qry) {
				$this->session->set_userdata("admin_userid", $qry["id"]);
				$this->session->set_userdata("admin_password", $password);
				$this->session->set_userdata("admin_username", $qry["name"]);
				$this->session->set_userdata("role", $qry["role_id"]);

				echo base_url("webadmin");
			} else {
				echo 0;
			}
		} else {
			echo "Hack Karta Hai! Teri To...";
		}
	}
	private function entry_by()
	{
		$userid = $this->session->userdata("admin_userid");
		$name = $this->session->userdata("admin_username");
		$role_id = $this->session->userdata("role");
		$data = ["userid" => $userid, "name" => $name, "role_id" => $role_id];
		return json_encode($data);
	}
	public function delete_with_file()
	{
		if (isset($_GET["table"])) {
			extract($_GET);
			$where = ["id" => $id];
			$this->adm->delete($table, $where);
			$this->lib->delete_file($filepath);
			if (isset($_GET["filepath2"])) {
				$this->lib->delete_file($filepath2);
			}
			if (isset($_GET["filepath3"])) {
				$this->lib->delete_file($filepath3);
			}
			if (isset($_GET["filepath4"])) {
				$this->lib->delete_file($filepath4);
			}
			if (isset($_GET["career_qualification"])) {
				$this->adm->delete("career_qualification", ["career_id" => $id]);
			}
		}
		redirect($_SERVER["HTTP_REFERER"]);
	}
	public function index()
	{
		if (!$this->session->userdata("admin_userid")) {
			$this->login();
		} else {
			$this->session->set_userdata("active-page", "admin-index");
			$this->header();
			$this->load->view('admin/pages/home');
			$this->footer();
		}
	}
	public function our_team()
	{
		if (!$this->session->userdata("admin_userid")) {
			$this->login();
		} else {
			$this->session->set_userdata("active-page", "admin-our-teams");
			$data["team"] = $this->adm->select("team", "id DESC", "*")->result();
			$this->header("Our Teams");
			$this->load->view('admin/pages/admin-our-teams', $data);
			$this->footer();
		}
	}
	public function submit_team()
	{
		if (isset($_FILES["image"])) {
			extract($_POST);
			$imageName = @generateSeoURL($name . "-" . $designation . "-" . $department);
			$image_str = $this->lib->file_upload('upload/team/', "image", $imageName);
			$data2 = ["image" => $image_str, "name" => $name, "designation" => $designation, "department" => $department, "entry_by" => $this->entry_by(), "datetime" => date("Y-m-d H:i:s")];
			$this->adm->insert("team", $data2);
			$this->session->set_userdata('event-added', 1);
		}
		redirect($_SERVER["HTTP_REFERER"]);
	}
	public function alumni_achievers()
	{
		if (!$this->session->userdata("admin_userid")) {
			$this->login();
		} else {
			$this->session->set_userdata("active-page", "admin-alumni-achievers");
			$data["alumni"] = $this->adm->select("alumni", "id DESC", "*")->result();
			$this->header("Alumni Achievers");
			$this->load->view('admin/pages/admin-alumni-achievers', $data);
			$this->footer();
		}
	}
	public function submit_alumni()
	{
		if (isset($_FILES["image"])) {
			extract($_POST);
			$imageName = @generateSeoURL($name . "-" . $designation . "-" . $batch);
			$image_str = $this->lib->file_upload('upload/alumni/', "image", $imageName);
			$data2 = ["image" => $image_str, "name" => $name, "designation" => $designation, "about" => $about, "batch" => $batch, "entry_by" => $this->entry_by(), "datetime" => date("Y-m-d H:i:s")];
			$this->adm->insert("alumni", $data2);
			$this->session->set_userdata('event-added', 1);
		}
		redirect($_SERVER["HTTP_REFERER"]);
	}
	public function events_gallery()
	{
		if (!$this->session->userdata("admin_userid")) {
			$this->login();
		} else {
			$this->session->set_userdata("active-page", "admin-events-gallery");
			$this->header();
			$this->load->view('admin/pages/admin-events-gallery');
			$this->footer();
		}
	}
	public function events_gallery_list()
	{
		if (!$this->session->userdata("admin_userid")) {
			$this->login();
		} else {
			$this->session->set_userdata("active-page", "admin-events-gallery");
			$data["events"] = $this->adm->select("events", "event_date DESC", "*")->result();
			$this->header();
			$this->load->view('admin/pages/admin-events-gallery-list', $data);
			$this->footer();
		}
	}
	public function check_event_name()
	{
		$res = 0;
		if (isset($_POST["event_date"])) {
			extract($_POST);
			$res = $this->adm->select("events", "id DESC", "id", ["title" => $title, "event_date" => $event_date])->num_rows();
		}
		echo $res;
	}
	public function submit_event()
	{
		if (isset($_FILES["image1"])) {
			extract($_POST);
			$routers_link = @generateSeoURL($title . "-on-" . date("dMY", strtotime($event_date)));
			$imageName1 = @generateSeoURL($routers_link . "-img1");
			$image_str1 = $this->lib->file_upload('upload/events/', "image1", $imageName1);
			$imageName2 = @generateSeoURL($routers_link . "-img2");
			$image_str2 = $this->lib->file_upload('upload/events/', "image2", $imageName2);

			$image_str3 = $image_str4 = "";
			if (file_exists($_FILES['image3']['tmp_name']) || is_uploaded_file($_FILES['image3']['tmp_name'])) {
				$imageName3 = @generateSeoURL($routers_link . "-img3");
				$image_str3 = $this->lib->file_upload('upload/events/', "image3", $imageName3);
			}
			if (file_exists($_FILES['image4']['tmp_name']) || is_uploaded_file($_FILES['image4']['tmp_name'])) {
				$imageName4 = @generateSeoURL($routers_link . "-img4");
				$image_str4 = $this->lib->file_upload('upload/events/', "image4", $imageName4);
			}

			$data2 = ["event_type" => $event_type, "department"=>$department, "title" => $title, "event_date" => $event_date, "image1" => $image_str1, "image2" => $image_str2, "image3" => $image_str3, "image4" => $image_str4, "about_event" => $about_event, "fb_link" => $fb_link, "yt_link" => $yt_link, "in_link" => $in_link, "insta_link" => $insta_link, "routers_link" => $routers_link, "entry_by" => $this->entry_by(), "datetime" => date("Y-m-d H:i:s")];

			if(isset($_POST["recent_happening"])){
				$data2 += ["recent_happening"=>1];
			}else{
				$data2 += ["recent_happening"=>0];
			}

			$insert_id = $this->adm->insert("events", $data2);

			$data3 = ["routers_link" => $routers_link, "routers_route" => "Events/recent_event_dynamic_link/$insert_id", "meta_title"=>$meta_title, "meta_keyword"=>$meta_keyword, "meta_description"=>$meta_description];
			$this->adm->insert("routes", $data3);

			$this->session->set_userdata('event-added', 1);
		}
		redirect($_SERVER["HTTP_REFERER"]);
	}


	public function news_notice()
	{
		if (!$this->session->userdata("admin_userid")) {
			$this->login();
		} else {
			$this->session->set_userdata("active-page", "admin-news-notice");
			$data["news_notice"] = $this->adm->select("news_notice", "id DESC", "*")->result();
			$this->header("News and notices");
			$this->load->view('admin/pages/admin-news-notice', $data);
			$this->footer();
		}
	}
	public function submit_news_notice()
	{
		if (isset($_POST["title"])) {
			extract($_POST);
			$data2 = ["type" => $type, "date" => $date, "title" => $title, "entry_by" => $this->entry_by(), "datetime" => date("Y-m-d H:i:s")];
			if ($details_type != "") {
				$file_str = "";
				if ($_FILES["pdf_file"]["size"] > 0) {
					$file_str = $this->lib->file_upload('upload/others/', "pdf_file");
				}
				$data2 += ["details_type" => $details_type, "detailed_text" => $detailed_text, "pdf_file" => $file_str, "external_link" => $external_link];
			}
			$this->adm->insert("news_notice", $data2);
			$this->session->set_userdata('event-added', 1);
		}
		redirect($_SERVER["HTTP_REFERER"]);
	}

	public function slider()
	{
		if (!$this->session->userdata("admin_userid")) {
			$this->login();
		} else {
			$this->session->set_userdata("active-page", "home");
			$data["home_slider"] = $this->adm->select("home_slider", "id DESC", "*")->result();
			$this->header("Home Sliders");
			$this->load->view('admin/pages/admin-slider', $data);
			$this->footer();
		}
	}
	public function submit_slider()
	{
		if (isset($_FILES["image"])) {
			extract($_POST);
			$image_str = $this->lib->file_upload('upload/slider/', "image");
			$data2 = ["image" => $image_str, "type" => $type, "title" => $title];
			$this->adm->insert("home_slider", $data2);
			$this->session->set_userdata('event-added', 1);
		}
		redirect($_SERVER["HTTP_REFERER"]);
	}
	public function meritorious_student()
	{
		if (!$this->session->userdata("admin_userid")) {
			$this->login();
		} else {
			$this->session->set_userdata("active-page", "home");
			$data["meritorious_student"] = $this->adm->select("meritorious_student", "id DESC", "*")->result();
			$this->header("Meritorious Student");
			$this->load->view('admin/pages/admin-meritorious-student', $data);
			$this->footer();
		}
	}
	public function submit_meritorious_student()
	{
		if (isset($_FILES["image"])) {
			extract($_POST);
			$image_str = $this->lib->file_upload('upload/others/meritorious_student/', "image");
			$data2 = ["image" => $image_str, "name" => $name, "sem" => $sem, "subject"=>$subject, "marks"=>$marks];
			$this->adm->insert("meritorious_student", $data2);
			$this->session->set_userdata('event-added', 1);
		}
		redirect($_SERVER["HTTP_REFERER"]);
	}
	public function placements()
	{
		if (!$this->session->userdata("admin_userid")) {
			$this->login();
		} else {
			$this->session->set_userdata("active-page", "home");
			$data["placements"] = $this->adm->select("placements", "id DESC", "*")->result();
			$this->header("Student Placements");
			$this->load->view('admin/pages/admin-placements', $data);
			$this->footer();
		}
	}
	public function submit_placements()
	{
		if (isset($_FILES["image"])) {
			extract($_POST);
			$image_str = $this->lib->file_upload('upload/others/placements/', "image");
			$data2 = ["image" => $image_str, "name" => $name, "designation" => $designation, "company"=>$company, "package"=>$package, "department"=>$department, "hometown"=>$hometown];
			$this->adm->insert("placements", $data2);
			$this->session->set_userdata('event-added', 1);
		}
		redirect($_SERVER["HTTP_REFERER"]);
	}

	public function journals()
	{
		if (!$this->session->userdata("admin_userid")) {
			$this->login();
		} else {
			$this->session->set_userdata("active-page", "home");
			$data["publish"] = $this->adm->select("dept_journals", "publish_year DESC", "*")->result();
			$this->header("");
			$this->load->view('admin/pages/admin-journals', $data);
			$this->footer();
		}
	}
	public function submit_journals()
	{
		if (isset($_FILES["csv"])) {
			extract($_POST);
			$file = $this->lib->file_upload('upload/others/', "csv");
			$table_name = "dept_journals";
			$columns = "title,author_name,journal_name,publish_year,isbn";
			$qry='LOAD DATA LOCAL INFILE "'.$file.'"
			INTO TABLE `'.$table_name.'`
			FIELDS TERMINATED by \',\'
			ENCLOSED by \'"\'
			LINES TERMINATED BY \'\r\n\'
			IGNORE 1 LINES ('.$columns.')';
			$qry .= " SET department = '$department'";
			$this->db->query($qry);
			$this->session->set_userdata('event-added', 1);
			$this->lib->delete_file($file);
		}
		redirect($_SERVER["HTTP_REFERER"]);
	}
	public function conferences()
	{
		if (!$this->session->userdata("admin_userid")) {
			$this->login();
		} else {
			$this->session->set_userdata("active-page", "home");
			$data["publish"] = $this->adm->select("dept_conferences", "year DESC", "*")->result();
			$this->header("");
			$this->load->view('admin/pages/admin-conferences', $data);
			$this->footer();
		}
	}
	public function submit_conferences()
	{
		if (isset($_FILES["csv"])) {
			extract($_POST);
			$file = $this->lib->file_upload('upload/others/', "csv");
			$table_name = "dept_conferences";
			$columns = "teacher_name,title,conference_name,type,year";
			$qry='LOAD DATA LOCAL INFILE "'.$file.'"
			INTO TABLE `'.$table_name.'`
			FIELDS TERMINATED by \',\'
			ENCLOSED by \'"\'
			LINES TERMINATED BY \'\r\n\'
			IGNORE 1 LINES ('.$columns.')';
			$qry .= " SET department = '$department'";
			$this->db->query($qry);
			$this->session->set_userdata('event-added', 1);
			$this->lib->delete_file($file);
		}
		redirect($_SERVER["HTTP_REFERER"]);
	}
	public function ugc()
	{
		if (!$this->session->userdata("admin_userid")) {
			$this->login();
		} else {
			$this->session->set_userdata("active-page", "home");
			$data["publish"] = $this->adm->select("dept_ugc", "year DESC", "*")->result();
			$this->header("");
			$this->load->view('admin/pages/admin-ugc', $data);
			$this->footer();
		}
	}
	public function submit_ugc()
	{
		if (isset($_FILES["csv"])) {
			extract($_POST);
			$file = $this->lib->file_upload('upload/others/', "csv");
			$table_name = "dept_ugc";
			$columns = "title,author_name,journal_name,year,isbn,link";
			$qry='LOAD DATA LOCAL INFILE "'.$file.'"
			INTO TABLE `'.$table_name.'`
			FIELDS TERMINATED by \',\'
			ENCLOSED by \'"\'
			LINES TERMINATED BY \'\r\n\'
			IGNORE 1 LINES ('.$columns.')';
			$qry .= " SET department = '$department'";
			$this->db->query($qry);
			$this->session->set_userdata('event-added', 1);
			$this->lib->delete_file($file);
		}
		redirect($_SERVER["HTTP_REFERER"]);
	}

	public function video_gallery()
	{
		if (!$this->session->userdata("admin_userid")) {
			$this->login();
		} else {
			$this->session->set_userdata("active-page", "admin-events-gallery");
			$data["video_gallery"] = $this->adm->select("video_gallery", "id DESC", "*")->result();
			$this->header("Video Gallery");
			$this->load->view('admin/pages/admin-video-gallery', $data);
			$this->footer();
		}
	}
	public function submit_video_gallery()
	{
		if (isset($_FILES["image"])) {
			extract($_POST);
			$image_str = $this->lib->file_upload('upload/others/video_gallery/', "image");
			$data2 = ["image" => $image_str, "title" => $title, "youtube" => $youtube];
			$this->adm->insert("video_gallery", $data2);
			$this->session->set_userdata('event-added', 1);
		}
		redirect($_SERVER["HTTP_REFERER"]);
	}
	
}
