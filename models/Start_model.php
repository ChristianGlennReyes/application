<?php
class Start_model extends CI_model {
	public function __construct () {
		$this->load->database();
		$this->load->library('session');
	}

	public function checkAccount($username, $password) {
		$query = $this->db->select("username")->where(array('username' => $username, 'password' => md5($password)))->get("projectmanager");

		if($query->num_rows() > 0) {
			$this->session->set_userdata("projectmanager", true);
			return true;
		}

		$query2 = $this->db->select("username")->where(array('username' => $username, 'password' => md5($password)))->get("translator");

		if($query2->num_rows() > 0) {
			$this->session->set_userdata("translator", true);
			return true;
		}
		
		return false;
	}

	public function getFullName($username, $password) {
		$query = $this->db->select("fullname")->where(array('username' => $username, 'password' => md5($password)))->get("projectmanager");
		$query2 = $this->db->select("fullname")->where(array('username' => $username, 'password' => md5($password)))->get("translator");

		if($query->num_rows() > 0) {
			$data = $query->result_array();
		}
		else {
			$data = $query2->result_array();
		}

		return ($data[0]['fullname']);
	}

	public function insertNewPM($array) {
		$this->db->insert("projectmanager", $array);
	}

	public function checkCountry($country) {
		$query = $this->db->select("countrycode")->where(array('country' => $country))->get("countryaddress_ref");

		if($query->num_rows() > 0) {
			return true;
		}

		return false;
	}

	public function getCountryCode($country) {
		$query = $this->db->select("countrycode")->where(array('country' => $country))->get("countryaddress_ref");
		$data = $query->result_array();

		return ($data[0]['countrycode']);
	}

	public function getID($username, $password) {
		$query = $this->db->select("managerid")->where(array('username' => $username, 'password' => md5($password)))->get("projectmanager");
		$query2 = $this->db->select("translatorid")->where(array('username' => $username, 'password' => md5($password)))->get("translator");

		if($query->num_rows() > 0) {
			$data = $query->result_array();
			return ($data[0]['managerid']);
		}
		else {
			$data = $query2->result_array();
			return ($data[0]['translatorid']);
		}
	}

	public function createTranslatorAccount($emailcode) {
		$query = $this->db->select("potentialid, name, email, countrycode, address, priceperword")->where(array('emailcode' => $emailcode))->get("potentialtranslator");

		if($query->num_rows() > 0) {
			$data = $query->result_array();

			$array = explode(' ', trim($data[0]['name']));
			$word = "tl_";
			for($count = 0; $count < count($array); $count++) {
				$word .= $array[$count];	
			}
			$username = strtolower($word);

			$savingdata  = array(
				'username' => $username,
				'fullname' => $data[0]['name'],
				'email' => $data[0]['email'],
				'countrycode' => $data[0]['countrycode'],
				'address' => $data[0]['address'],
				'potentialid' => $data[0]['potentialid'],
				'priceperword' => $data[0]['priceperword']
			);

			$translatordata = array(
				'username' => $username,
				'fullname' => $data[0]['name'],
				'email' => $data[0]['email']
			);

			$this->db->insert("translator", $savingdata);
		}
		return $translatordata;
	}

	public function checkUsername($username) {
		$query = $this->db->select("username")->where(array('username' => $username))->get("translator");

		if($query->num_rows() > 0) {
			return false;
		}
		return true;
	}

	public function updateTranslatorSignature($emailcode) {
		$this->db->where('emailcode', $emailcode)->update("potentialtranslator", array('translatorsignature' => 1));
	}

	public function checkTranslatorAccount($emailcode) {
		$query = $this->db->select("potentialid, name, email, countrycode, address")->where(array('emailcode' => $emailcode))->get("potentialtranslator");
		$data = $query->result_array();

		$query2 = $this->db->select("username")->where(array('potentialid' => $data[0]['potentialid'], 'fullname' => $data[0]['name'], 'email' => $data[0]['email'], 'countrycode' => $data[0]['countrycode'], 'address' => $data[0]['address']))->get("translator");

		if($query2->num_rows() > 0) {
			return false;
		}
		return true;
	}

	public function checkTranslatorEmployeeStatus($translatorid) {
		$query = $this->db->select("employeestatus")->where(array('translatorid' => $translatorid))->get("translator");
		$data = $query->result_array();

		if($data[0]['employeestatus'] == 0) {
			return false;
		}
		return true;
	}

	public function getDetailsForProjectProgression($projectcode) {
		$query = $this->db->select('d.projectcode, p.projectname, pm.fullname as PMFullName, d.delivertomanageremail, c.fullname as ClientFullName, l.languagedesc')->from('projectdetails as d')->where('d.projectcode', $projectcode)->join('projectmanager as pm', 'd.managerid = pm.managerid', 'LEFT')->join('project as p', 'p.projectcode = d.projectcode', 'LEFT')->join('client as c', 'd.clientid = c.clientid', 'LEFT')->join('language_ref as l', 'd.language = l.language', 'LEFT')->get();

		return $query->result_array();
	}

	public function updateProjectStatus($projectcode, $projectstatus) {
		$this->db->where('projectcode', $projectcode)->update("project", array('projectstatus' => $projectstatus));
	}

	public function gettranslator($projectcode){
		$query = $this->db->select("translatorid")->where(array('projectcode' => $projectcode))->get("projectdetails");
		
			$data = $query->result_array();
			return ($data[0]['translatorid']);
				
	}

	public function insertaudit($projectcode, $projectstatus) {
		date_default_timezone_set('Asia/Manila');

		$translator = $this->gettranslator($projectcode);

		$auditdata  = array(
			'projectcode' => $projectcode,
			'date' => date('Y-m-d H:i:s'),
			'newtranslator' => $translator,
			'typeofaudit' => $projectstatus
		);
		$this->db->insert("projectaudit", $auditdata);
	}

	public function getprojectmanager($projectcode){
		$query = $this->db->select("managerid")->where(array('projectcode' => $projectcode))->get("projectdetails");
		$data = $query->result_array();

		return ($data[0]['managerid']);
	}


	public function insertprogressionnotification($projectcode, $status){
		date_default_timezone_set('Asia/Manila');

		$notifdata  = array(
			'time' => date('H:i:s'),
			'date' => date('Y-m-d'),
			'notificationtext' => "The client has said ".$status." to the project progression",
			'managerid' => $this->Start_model->getprojectmanager($projectcode)
		);
		$this->db->insert("notifications", $notifdata);
	}
}


?>