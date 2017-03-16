<?php
class Start extends CI_Controller {
	public function __construct () {
		parent::__construct();
		$this->load->model("Start_model");
		$this->load->library('encryption');
		$this->load->helper('url');
		$this->load->library('session');
	}

	public function Login() {
		if($this->session->userdata("fullname")) {
			if($this->session->userdata("projectmanager") == TRUE) {
				redirect("ProjectManager");
			}
			else if($this->session->userdata("translator") == TRUE) {
				redirect("Translator");
			}
		}
		else {
			if(!$this->input->post("lusername")) {
				$this->load->view("Login_view");
			}
			else {
				$username = $this->input->post("lusername");
				$password = $this->input->post("lpassword");

				if($this->Start_model->checkAccount($username, $password)) {
					$this->session->set_userdata("fullname", $this->Start_model->getFullName($username, $password)); 
					if($this->session->userdata("projectmanager") == TRUE) {
						$this->session->set_userdata("id", $this->Start_model->getID($username, $password));
						redirect("ProjectManager");
					}
					else if($this->session->userdata("translator") == TRUE) {
						$this->session->set_userdata("id", $this->Start_model->getID($username, $password));
						$this->session->set_userdata("translatoremployeestatus", $this->Start_model->checkTranslatorEmployeeStatus($this->session->userdata('id')));

						if($this->session->userdata("translatoremployeestatus")) {
							redirect("Translator");
						}
						else {
							redirect("Translator/Languages");
						}
					}
				}
				else {
					$this->session->set_userdata("error", TRUE);
					redirect("Login");
				}
			}
		}
	}

	public function NotFound() {
		$this->load->view("404_view");
	}

	public function Confirmation() {
		$this->load->view("Confirmation_view");

		// echo $this->input->get('emailcode');

		if($this->Start_model->checkTranslatorAccount($this->input->get('emailcode'))) {

			$results = $this->Start_model->createTranslatorAccount($this->input->get('emailcode'));
			$this->Start_model->updateTranslatorSignature($this->input->get('emailcode'));
			$emailcode = $this->input->get('emailcode');

			require_once 'mailing/PHPmailerAutoload.php';

			$mailer = new PHPmailer();
			$mailer->isHTML(true);

			/* REMOVE THIS LINE IF YOU WANT TO REMOVE ECHO-ING OF SEEMINGLY USELESS INFORMATION*/
			// $mailer -> SMTPDebug = 1;
			
			$mailer -> IsSMTP();
			$mailer -> SMTPAuth = true;
			$mailer -> Host = "smtp.gmail.com";
			$mailer -> Port = 465;
			$mailer -> SMTPSecure = 'ssl';
			
			$mailer -> Username = 'orangestranslations@gmail.com';
			$mailer -> Password = 'explore.dream.discover';
			$mailer -> From = 'orangestranslations@gmail.com';
			$mailer -> FromName = "Orange Translations";

			$mailer -> AddAddress($results['email'], $results['fullname']);
			$mailer -> Subject = "Translator Account Details";

			$message = "<p align=\"center\"><b>Translator Account Details</b></p>
				<br>
				<p>Username: ".$results['username']."</p>
				<br>
				<p>Click <a href=\"http://localhost/OrangeTranslations/index.php/Translator/Password?emailcode=$emailcode\">here</a> to log in and be part of Orange Translations.</p>";

			$mailer -> Body = $message;

			$mailer -> Send();
		}
	}

	public function PProgressionConfirmation() {
		$this->load->view("ProjectProgressionConfirmation_view");
	}

	public function PProgressionYes() {
		if($this->session->userdata("pprogressionprojectcode")) {

			$this->load->view("ProjectProgressionConfirmation_yes_view");

			$results = $this->Start_model->getDetailsForProjectProgression($this->session->userdata("pprogressionprojectcode"));

			require_once 'mailing/PHPmailerAutoload.php';

			$mailer = new PHPmailer();
			$mailer->isHTML(true);

			/* REMOVE THIS LINE IF YOU WANT TO REMOVE ECHO-ING OF SEEMINGLY USELESS INFORMATION*/
			// $mailer -> SMTPDebug = 1;
			
			$mailer -> IsSMTP();
			$mailer -> SMTPAuth = true;
			$mailer -> Host = "smtp.gmail.com";
			$mailer -> Port = 465;
			$mailer -> SMTPSecure = 'ssl';
			
			$mailer -> Username = 'orangestranslations@gmail.com';
			$mailer -> Password = 'explore.dream.discover';
			$mailer -> From = 'orangestranslations@gmail.com';
			$mailer -> FromName = "Orange Translations";

			$mailer -> AddAddress($results[0]['delivertomanageremail'], $results[0]['PMFullName']);

			$mailer -> Subject = "Project Progression";

			$mailmessage = "Client ".$results[0]['ClientFullName']." said yes to continue the project - ".$results[0]['projectname']." which has a trasnlation pair of ".$results[0]['languagedesc'].".";

			$mailer -> Body = $mailmessage;

			/* USED FOR CHECKING*/

			$mailer -> Send();

			$this->Start_model->updateProjectStatus($this->session->userdata("pprogressionprojectcode"), "Active");
			$this->Start_model->insertaudit($this->session->userdata("pprogressionprojectcode"), "ACTIVE"); 
			$this->Start_model->insertprogressionnotification($this->session->userdata("pprogressionprojectcode"), "Yes");

		}
	}

	public function PProgressionNo() {
		if($this->session->userdata("pprogressionprojectcode")) {

			$this->load->view("ProjectProgressionConfirmation_no_view");

			$results = $this->Start_model->getDetailsForProjectProgression($this->session->userdata("pprogressionprojectcode"));

			require_once 'mailing/PHPmailerAutoload.php';

			$mailer = new PHPmailer();
			$mailer->isHTML(true);

			/* REMOVE THIS LINE IF YOU WANT TO REMOVE ECHO-ING OF SEEMINGLY USELESS INFORMATION*/
			// $mailer -> SMTPDebug = 1;
			
			$mailer -> IsSMTP();
			$mailer -> SMTPAuth = true;
			$mailer -> Host = "smtp.gmail.com";
			$mailer -> Port = 465;
			$mailer -> SMTPSecure = 'ssl';
			
			$mailer -> Username = 'orangestranslations@gmail.com';
			$mailer -> Password = 'explore.dream.discover';
			$mailer -> From = 'orangestranslations@gmail.com';
			$mailer -> FromName = "Orange Translations";

			$mailer -> AddAddress($results[0]['delivertomanageremail'], $results[0]['PMFullName']);

			$mailer -> Subject = "Project Progression";

			$mailmessage = "Client ".$results[0]['ClientFullName']." said not to continue the project - ".$results[0]['projectname']." which has a trasnlation pair of ".$results[0]['languagedesc'].".";

			$mailer -> Body = $mailmessage;

			/* USED FOR CHECKING*/

			$mailer -> Send();

			$this->Start_model->updateProjectStatus($this->session->userdata("pprogressionprojectcode"), "Cancelled");
			$this->Start_model->insertaudit($this->session->userdata("pprogressionprojectcode"), "CANCELLED");
			$this->Start_model->insertprogressionnotification($this->session->userdata("pprogressionprojectcode"), "No");
		}
	}

	// practice lang

	
}

?>