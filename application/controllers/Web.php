<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Web extends CI_Controller
{
	public function index()
	{
		$data["slider"] = $this->mod->select("home_slider", "*", ["type" => "HOME"])->result();
		$data["news_notice"] = $this->mod->select("news_notice", "*", null, "date", "ASC")->result();
		$data["recent_happenings"] = $this->mod->select("events", "title,image1", ["recent_happening" => 1], "id", "DESC", null, 10)->result();
		$data["meritorious_student"] = $this->mod->select("meritorious_student", "*", null, "id", "DESC", null, 4)->result();
		$data["placements"] = $this->mod->select("placements", "*", null, "id", "DESC", null, 3)->result();
		$data["homeFacilities"] = @homeFacilities();

		active_nav("home", "0");
		$this->lib->header();
		$this->load->view('web/pages/home', $data);
		$this->load->view('web/pages-scripts/common-script');
		$this->load->view('web/pages-scripts/home-script');
		$this->lib->footer();
	}
}
