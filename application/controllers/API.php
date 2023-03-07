<?php
defined('BASEPATH') or exit('No direct script access allowed');

class API extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->source = "sistecgn.ac.in";
		$this->sistec_api_key = "sistec!@#8426-@khatarnaak-developer";
	}
	public function check_duplicate_admission_enquiry()
	{
		$result = json_encode((Array)["status"=>0, "msg"=>"Bad Request."]);
		if(isset($_POST["contact"])) {
			extract($_POST);
			$url = 'https://www.sistec.ac.in/checkduplicate-admission-enquiry-api';
			$ch = curl_init($url);
			$data = ['column' => "contact", 'value' => $contact, 'column2' => "source", 'value2' => $this->source];
			curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
			$headers = array(
				'Content-Type: application/json',
				'sistec-api-key: '.$this->sistec_api_key
			);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$result = curl_exec($ch);
			curl_close($ch);
		}
		echo $result;
	}
	public function send_admission_enquiry()
	{
		$result = json_encode((Array)["status"=>0, "msg"=>"Bad Request."]);
		if(isset($_POST["contact"])) {
			extract($_POST);
			$url = 'https://www.sistec.ac.in/admission-enquiry-api';
			$ch = curl_init($url);
			$data = ['name' => $name, 'course' => $course, 'branch' => $branch, 'state' => $state, 'district'=>$district, 'tehsil'=>$tehsil, 'contact'=>$contact, 'source'=>$this->source];
			curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
			$headers = array(
				'Content-Type: application/json',
				'sistec-api-key: '.$this->sistec_api_key
			);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$result = curl_exec($ch);
			curl_close($ch);
		}
		echo $result;
	}
	public function get_branch_on_course_name()
	{
		echo "<option value='' selected disabled>- select branch</option>";
		if(isset($_GET["course_name"])){
			extract($_GET);
			$data = $this->mod->select("branches", "*", ["course_name"=>$course_name, "active"=>1, "status"=>1], "branch_id", "ASC")->result();
			foreach($data as $d){
				echo "<option>".$d->branch_acronym."</option>";
			}
		}
	}
	public function get_city_on_state()
	{
		echo "<option value='' selected disabled>- select district</option>";
		if(isset($_GET["state_id"])){
			extract($_GET);
			$data = $this->mod->select("cities", "*", ["state_id"=>$state_id], "name", "ASC")->result();
			foreach($data as $d){
				echo "<option>".$d->name."</option>";
			}
		}
	}
	
}
