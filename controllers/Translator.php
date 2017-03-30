<?php
class Translator extends CI_Controller {
	public function __construct () {
		parent::__construct();
		$this->load->model("Translator_model");
		$this->load->helper('url');
		$this->load->library('session');
	}

	public function Home() {
		if($this->session->userdata("fullname") && $this->session->userdata("translator") == TRUE) {
			if($this->session->userdata("translatoremployeestatus")) {
				$this->load->view("Translator_dashboard_view");
			}
			else redirect("Translator/Languages");
		}
		else {
			redirect("Login");
		}
		
		// $this->session->userdata("fullname"); this is how to get a session
	}

	public function Logout() {
		$this->session->sess_destroy();
		redirect("Login");
	}

	public function Project() {
		if($this->session->userdata("translator") == TRUE) {
			$this->load->view("Translator_projects_view");
		}
		else redirect("Login");
	}	

	public function Calendar() {
		if($this->session->userdata("translator") == TRUE) {
			$this->load->view('Translator_calendar_view_view');
		}
		else redirect("Login");
	}

	public function AddEvent() {
		if($this->session->userdata("translator") == TRUE) {
			$this->load->view('Translator_calendar_addevent_view');
		}
		else redirect("Login");
	}

	public function EditEvent() {
		if($this->session->userdata("translator") == TRUE) {
			$this->load->view('Translator_calendar_editevent_view');
		}
		else redirect("Login");
	}

	public function Password() {
		if($this->input->get('emailcode')) {
			$this->load->view("Translator_newpassword_view");
			$this->session->set_userdata('emailcode', $this->input->get('emailcode'));
		}
		else {
			$this->load->view("Login_view");
			redirect("Login");
		}
	}

	public function VerifyPassword() {
		if($this->input->post("password") == $this->input->post("repassword")) {
			$this->session->unset_userdata('wrongpassword');
			$this->Translator_model->setPassword($this->input->post("password"), $this->session->userdata('emailcode'));
			
			$this->load->view("Login_view");
			redirect("Login");
		}
		else {
			$this->session->set_userdata("wrongpassword", true);
			$this->load->view("Translator_newpassword_view");
		}
	}

	public function Languages() {
		$this->load->view('Translator_languageselection_view');
	}

	public function InsertLanguages() {
		$languagearray = $this->input->post("language");
		for($count = 0; $count < count($this->input->post("language")); $count++) {
			$language = $_POST['language'][$count];

			$this->Translator_model->insertTranslatorLanguage($this->session->userdata("id"), $language);
		}
		$this->Translator_model->updateEmployeeStatus($this->session->userdata("id"));
		$this->Translator_model->insertregisterednotification($this->session->userdata("id"));
		$this->session->set_userdata("translatoremployeestatus", 1);
		redirect("Translator");
	}

	public function CheckAddEvent() {
		$eventname = $this->input->post("eventname");
		$startdate = $this->input->post("startdate");
		$starttime = $this->input->post("starttime");
		$enddate = $this->input->post("enddate");
		$endtime = $this->input->post("endtime");

		$array = array(
			'eventname' => $eventname,
			'translatorid' => $this->session->userdata("id"),
			'startdate' => $startdate,
			'enddate' => $enddate,
			'starttime' => $starttime,
			'endtime' => $endtime
		);

		if($startdate <= $enddate) {
			if($startdate == $enddate) {
				if($starttime < $endtime) {
					$this->session->set_userdata('addevent', "true");
					$this->Translator_model->insertEvent($array);
				}
				else $this->session->set_userdata('addevent', "wrongtime");
			}
			else {
				$this->session->set_userdata('addevent', "true");
				$this->Translator_model->insertEvent($array);
			}
		}
		else $this->session->set_userdata('addevent', "wrongdate");

		$this->load->view('Translator_calendar_addevent_view');
		$this->session->unset_userdata('addevent');
	}

	

	public function CheckSaveEvent() {
		$eventid = $this->input->post("eventid");
		$eventname = $this->input->post("eventname");
		$startdate = $this->input->post("startdate");
		$starttime = $this->input->post("starttime");
		$enddate = $this->input->post("enddate");
		$endtime = $this->input->post("endtime");

		$array = array(
			'eventname' => $eventname,
			'startdate' => $startdate,
			'enddate' => $enddate,
			'starttime' => $starttime.":00",
			'endtime' => $endtime.":00"
		);

		if($startdate <= $enddate) {
			if($startdate == $enddate) {
				if($starttime < $endtime) {
					$this->session->set_userdata('editevent', "true");
					$this->Translator_model->upadteEvent($eventid, $array);
				}
				else $this->session->set_userdata('editevent', "wrongtime");
			}
			else {
				$this->session->set_userdata('editevent', "true");
				$this->Translator_model->upadteEvent($eventid, $array);
			}
		}
		else $this->session->set_userdata('editevent', "wrongdate");

		$this->load->view('Translator_calendar_editevent_view');
		$this->session->unset_userdata('editevent');
	}

	public function DeleteEvent() {
		$eventid = $this->input->post("eventid");
		$this->Translator_model->deleteEvent($eventid);
		$this->session->set_userdata('editevent', "deleted");
		$this->load->view('Translator_calendar_editevent_view');
		$this->session->unset_userdata('editevent');
	}

	public function DownloadUntranslatedDocument() {
		$data = $this->Translator_model->getUntranslatedDocument($this->session->userdata('projectcode'));

		$size = $data[0]['docusize'];
		$type = $data[0]['docutype'];
		$file = $data[0]['documentcontent'];
		$filename = $data[0]['docuname'];

		header("Content-length: $size");
		header("Content-type: $type");
		header("Content-Disposition: attachment; filename=$filename");
		ob_clean();
		flush();
		echo $file;
	}

	public function GetOldNotifs() {
		header("Content-type: application/json");
		$data = $this->Translator_model->GetOldNotifications($this->session->userdata('id'));

		echo json_encode($data);
	}

	public function GetNewNotifs() {
		header("Content-type: application/json");
		$data = $this->Translator_model->GetNewNotifications($this->session->userdata('id'));

		echo json_encode($data);
	}

	public function GetAllNotifs() {
		header("Content-type: application/json");
		$data = $this->Translator_model->GetAllNotifications($this->session->userdata('id'));

		echo json_encode($data);
	}

	public function SetNotifsSeen() {
		$this->Translator_model->updateNotifications($this->session->userdata('id'));
		return true;
	}
}

?>