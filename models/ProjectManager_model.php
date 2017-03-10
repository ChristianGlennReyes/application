<?php
class ProjectManager_model extends CI_model {
	public function __construct () {
		$this->load->database();
	}

	public function checkpotentialtranslatoraccount($name, $email, $address) {
		$query = $this->db->select("potentialid")->where(array('name' => $name, 'email' => $email, 'address' => $address))->get("potentialtranslator");

		if($query->num_rows() > 0) {
			return false;
		}

		return true;
	}

	public function insertPotentialTranslator($array) {
		$this->db->insert("potentialtranslator", $array);
	}

	public function checkEmailCode($emailcode) {
		$query = $this->db->select("emailcode")->where(array('emailcode' => $emailcode))->get("potentialtranslator");

		if($query->num_rows() > 0) {
			return false;
		}

		return true;
	}

	public function getAllCountry() {
		$query = $this->db->select("countrycode, country")->order_by("country", "asc")->get("countryaddress_ref");
		return $data = $query->result_array();
	}

	public function getNumberOfCountries() {
		$query = $this->db->select("country")->get("countryaddress_ref");
		return $query->num_rows();
	}


	public function getDetailsForProjectProgression($projectcode) {
		$query = $this->db->select('d.projectcode, p.projectname, c.fullname, c.email')->from('projectdetails as d')->where('d.projectcode', $projectcode)->join('projectmanager as pm', 'd.managerid = pm.managerid', 'LEFT')->join('project as p', 'p.projectcode = d.projectcode', 'LEFT')->join('client as c', 'd.clientid = c.clientid', 'LEFT')->get();

		return $query->result_array();
	}




	public function getTranslatedDocument($projectcode) {
		$query = $this->db->select('td.documentcontent, td.docuname, td.docutype, td.docusize')->from('translateddocument as td')->where('p.projectcode', $projectcode)->join('project as p', 'p.translatedid = td.translatedid', 'LEFT')->get();
		return $query->result_array();

	}



}