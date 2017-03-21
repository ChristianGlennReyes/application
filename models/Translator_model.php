<?php
class Translator_model extends CI_model {
	public function __construct () {
		$this->load->database();
	}

	public function getLanguageReference() {
		$query = $this->db->select("language, languagedesc")->get("language_ref");
		return $query->result_array();
	}

	public function getNumRowsLanguageReference() {
		$query = $this->db->select("language, languagedesc")->get("language_ref");
		return $query->num_rows();
	}

	public function setPassword($password, $emailcode) {
		$query = $this->db->select('t2.translatorid')->from('potentialtranslator as t1')->where('t1.emailcode', $emailcode)->join('translator as t2', 't1.potentialid = t2.potentialid', 'LEFT')->get();
		$data = $query->result_array();

		$this->db->where('translatorid', $data[0]['translatorid'])->update("translator", array('password' => md5($password)));
	}

	public function insertTranslatorLanguage($id, $language) {
		$query = $this->db->select("translatorid")->where(array('language' => $language, 'translatorid' => $id))->get("translatorlanguage");

		if($query->num_rows() == 0) {
			$data = array('language'=>$language, 'translatorid'=>$id);
			$this->db->insert("translatorlanguage", $data);
		}
	}

	public function gettranslatorname($id){
		$query = $this->db->select("fullname")->where(array('translatorid' => $id))->get("translator");
		
		$data = $query->result_array();
		return ($data[0]['fullname']);
				
	}

	public function getmanagerid($transid){
		$query = $this->db->select("potentialid")->where(array('translatorid' => $transid))->get("translator");
		$data = $query->result_array();

		$potential = $data[0]['potentialid'];
		$query2 = $this->db->select("managerid")->where(array('potentialid' => $potential))->get("potentialtranslator");

		$data2 = $query2->result_array();
		return ($data2[0]['managerid']);
	}

	public function insertregisterednotification($id){
		date_default_timezone_set('Asia/Manila');

		$notifdata  = array(
			'time' => date('H:i:s'),
			'date' => date('Y-m-d'),
			'notificationtext' => "Translator ".$this->gettranslatorname($id)." has succesfully registered their account!",
			'managerid' => $this->getmanagerid($id)
		);
		$this->db->insert("notifications", $notifdata);
	}
	public function updateEmployeeStatus($id) {
		$this->db->where('translatorid', $id)->update("translator", array('employeestatus' => 1));		
	}

	public function getEvent($id) {
		$query = $this->db->select("eventname, startdate, enddate, year(startdate) as 'yearstartdate', month(startdate) as 'monthstartdate', day(startdate) as 'daystartdate', year(enddate) as 'yearenddate', month(enddate) as 'monthenddate', day(enddate) as 'dayenddate', hour(starttime) as 'hourstarttime', minute(starttime) as 'minutestarttime', hour(endtime) as 'hourendtime', minute(endtime) as 'minuteendtime'")->where(array('translatorid' => $id, 'estatus' => 'On Going'))->get("event");

		if($query->num_rows() > 0) {
			$data = $query->result_array();
			return $data;
		}
		return false;
	}

	public function getEventWithCurrentDate($id, $currentDate) {
		$query = $this->db->select("eventid, eventname, startdate, enddate, year(startdate) as 'yearstartdate', month(startdate) as 'monthstartdate', day(startdate) as 'daystartdate', year(enddate) as 'yearenddate', month(enddate) as 'monthenddate', day(enddate) as 'dayenddate', hour(starttime) as 'hourstarttime', minute(starttime) as 'minutestarttime', hour(endtime) as 'hourendtime', minute(endtime) as 'minuteendtime'")->where('enddate >=', $currentDate)->where(array('translatorid' => $id, 'estatus' => 'On Going'))->get("event");

		if($query->num_rows() > 0) {
			$data = $query->result_array();
			return $data;
		}
		
	}

	public function insertEvent($array) {
		$this->db->insert("event", $array);
	}

	public function upadteEvent($eventid, $array) {
		$this->db->where('eventid', $eventid)->update("event", $array);
	}

	public function deleteEvent($eventid) {
		$this->db->where('eventid', $eventid)->update("event", array('estatus' => "Cancelled"));
	}

	public function getProjectDetails($id, $currentdate) {
		$query = $this->db->select("p.projectcode as 'projectcode', p.projectname as 'projectname', c.fullname as 'clientname', l.languagedesc as 'languagepair', d.deadline as 'deadline'")->from('projectdetails as d')->where('d.deadline >', $currentdate)->where(array('d.translatorid' => $id, 'p.projectstatus' => "Active"))->join('project as p', 'd.projectcode = p.projectcode', 'LEFT')->join('client as c', 'd.clientid = c.clientid', 'LEFT')->join('language_ref as l', 'd.language = l.language', 'LEFT')->get();
		return $data = $query->result_array();
	}

	public function getUntranslatedDocument($projectcode) {
		$query = $this->db->select('d.documentcontent, d.docuname, d.docutype, d.docusize')->from('document as d')->where('p.projectcode', $projectcode)->join('project as p', 'p.documentid = d.documentid', 'LEFT')->get();
		return $query->result_array();

	}
}