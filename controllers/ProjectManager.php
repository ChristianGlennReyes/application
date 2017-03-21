<?php
class ProjectManager extends CI_Controller {
	public function __construct () {
		parent::__construct();
		$this->load->model("ProjectManager_model");
		$this->load->helper('url');
		$this->load->library('session');
	}

	public function Home() {
		if($this->session->userdata("fullname") && $this->session->userdata("projectmanager") == TRUE) {
			$this->load->view("ProjectManager_dashboard_view");
		}
		else {
			redirect("Login");
		}
	}

	public function Logout() {
		$this->session->sess_destroy();
		redirect("Login");
	}

	public function CreateProject() {
		if($this->session->userdata("projectmanager") == TRUE)
			$this->load->view("ProjectManager_project_create_view");
		else redirect("Login");
	}

	public function AddTranslator() {
		if($this->session->userdata("projectmanager") == TRUE)
			$this->load->view("ProjectManager_project_addtranslator_view");
		else redirect("Login");
	}

	public function AddLanguage() {
		if($this->session->userdata("projectmanager") == TRUE)
			$this->load->view("ProjectManager_project_addlanguage_view");
		else redirect("Login");
	}

	public function ReAssign() {
		if($this->session->userdata("projectmanager") == TRUE)
			$this->load->view("ProjectManager_project_reassign_view");
		else redirect("Login");
	}

	public function ProjectSummary() {
		if($this->session->userdata("projectmanager") == TRUE)
			$this->load->view("ProjectManager_project_projectsummary_view");
		else redirect("Login");
	}

	public function ViewAll() {
		if($this->session->userdata("projectmanager") == TRUE)
			$this->load->view("ProjectManager_translator_viewall_view");
		else redirect("Login");
	}

	public function PerformanceReport() {
		if($this->session->userdata("projectmanager") == TRUE)
			$this->load->view("ProjectManager_translator_performancereport_view");
		else redirect("Login");
	}

	public function TransactionSummary() {
		if($this->session->userdata("projectmanager") == TRUE)
			$this->load->view("ProjectManager_transactionsummary_view");
		else redirect("Login");
	}

	public function SendAgreementForm() {
		if($this->session->userdata("projectmanager") == TRUE)
			$this->load->view("ProjectManager_translator_agreementform_view");
		else redirect("Login");
	}

	public function EmailAgreementForm() {
		if($this->ProjectManager_model->checkpotentialtranslatoraccount($this->input->post("fullname"), $this->input->post("emailaddress"), $this->input->post("address"))) {
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

			$mailer -> AddAddress($this->input->post("emailaddress"), $this->input->post("fullname"));

			$isTrue = true;
			while($isTrue) {
				$emailcode = bin2hex(openssl_random_pseudo_bytes(4));
				if($this->ProjectManager_model->checkEmailCode($emailcode)) {
					$isTrue = false;
				}
			}

			$mailer -> Subject = "Translation Agreement";

			$message = "<p align=\"center\"><b>TRANSLATION AGREEMENT</b></p>
			<p align=\"justify\">".$this->input->post("fullname").", of legal age, with residence address at ".$this->input->post("address")." hereinafter referred to as the \"<b>TRANSLATOR</b>\",</p>
			<p align=\"center\">and</p>
			<p align=\"justify\"><b>ORANGE TRANSLATIONS, LTD.</b>, a corporation duly organized and existing under and by virtue of the laws of Hong Kong, with office address at 161-7 Des Voeux Road Central, Hong Kong, represented herein by its Director, <b>Martin Heimann</b>, hereinafter referred to as the “<b>CLIENT</b>”;</p>
			<p align=\"center\"><b>WITNESSETH</b></p>
			<p align=\"justify\"><b>WHEREAS</b>, the TRANSLATOR, as an independent contractor, shall provide translation services to the CLIENT and the CLIENT has accepted such services, subject to the terms and conditions set forth herein;</p>
			<p align=\"justify\"><b>NOW, THEREFORE</b>, for and in  consideration of the foregoing premise, the Parties hereby agree with the following terms and conditions: 
			</p>
			<br>
			<p align=\"justify\" style=\"text-indent: 4em;\"><b>1. &nbsp;&nbsp;&nbsp; DESCRIPTION OF SERVICES</b></p>
			<p align=\"justify\" style=\"text-indent: 6em;\">TRANSLATOR, as an independent contractor, shall provide written language translation services.</p>
			<p align=\"justify\" style=\"text-indent: 4em;\"><b>2. &nbsp;&nbsp;&nbsp; UNDERTAKINGS AND WARRANTIES</b></p>
			<p align=\"justify\" style=\"text-indent: 6em;\">2.1 &nbsp;&nbsp; The TRANSLATOR undertakes and warrants that he/she shall: 
			</p>
			<p align=\"justify\" style=\"text-indent: 8.3em;\">a) &nbsp;&nbsp; Make every effort to complete service(s) by the agreed date but shall not be responsible for delays in completion caused by events beyond his/her control; 
			</p>
			<p align=\"justify\" style=\"text-indent: 8.3em;\">b) &nbsp;&nbsp; Provide services to CLIENT in accordance with the prevailing professional standards;
			</p>
			<p align=\"justify\" style=\"text-indent: 8.3em;\">c) &nbsp;&nbsp; Ask CLIENT for clarification if he/she is uncertain about any aspect of the translation;
			</p>
			<p align=\"justify\" style=\"text-indent: 8.3em;\">d) &nbsp;&nbsp; Correct, at no cost to CLIENT, any errors made by him/her upon being notified thereof by CLIENT subject to 2.2 (c) hereof; 
			</p>
			<p align=\"justify\" style=\"text-indent: 8.3em;\">e) &nbsp;&nbsp; Make every effort to complete service(s) by the agreed date but shall not be responsible for delays in completion caused by events beyond his/her control; 
			</p>
			<p align=\"justify\" style=\"text-indent: 8.3em;\">f) &nbsp;&nbsp; Report/disclose immediately to the CLIENT if he/she is hired to perform services for a client organization that in the past five (5) years he/she has provided other services to, has a vested interest in, has been employed by in any capacity or if any of the information concerns individuals whom he/she knows personally. 
			</p>
			<p align=\"justify\" style=\"text-indent: 6em;\">2.2 &nbsp;&nbsp; The CLIENT undertakes and warrants that it shall: 
			</p>
			<p align=\"justify\" style=\"text-indent: 8.3em;\">a) &nbsp;&nbsp; Make every effort to complete service(s) by the agreed date but shall not be responsible for delays in completion caused by events beyond his/her control; 
			</p>
			<p align=\"justify\" style=\"text-indent: 8.3em;\">b) &nbsp;&nbsp; Pay the rate set forth in each purchase order (PO); 
			</p>
			<p align=\"justify\" style=\"text-indent: 8.3em;\">c) &nbsp;&nbsp; Upon receipt of the translation from TRANSLATOR, promptly review it, and within 30 days after receipt shall notify TRANSLATOR of any requested corrections or changes; 
			</p>
			<p align=\"justify\" style=\"text-indent: 8.3em;\">d) &nbsp;&nbsp; Not hold the TRANSLATOR responsible as to any changes in translation made by persons other than the TRANSLATOR. 
			</p>
			<p align=\"justify\" style=\"text-indent: 4em;\"><b>3. &nbsp;&nbsp;&nbsp; FEE FOR SERVICES</b></p>
			<p align=\"justify\" style=\"text-indent: 6em;\">The fee for the TRANSLATOR’s services shall be the rate set forth in each purchase order (PO). Payment shall be due within thirty (30) days after invoice date, unless otherwise agreed upon by the Parties.  
			</p>
			<p align=\"justify\" style=\"text-indent: 4em;\"><b>4. &nbsp;&nbsp;&nbsp; CONFIDENTIALITY</b></p>
			<p align=\"justify\" style=\"text-indent: 6em;\">4.1 &nbsp;&nbsp;TRANSLATOR acknowledges that CLIENT owns an exclusive proprietary interest in certain confidential information and that such confidential information constitutes valuable commercial and industrial secrets of CLIENT.  TRANSLATOR further acknowledges that the misuse or unauthorized disclosure of any confidential information would constitute an act injurious to CLIENT and that the unauthorized disclosure or use of any confidential information may adversely affect CLIENT’s business, competitive position and goodwill.</p>
			<p align=\"justify\" style=\"text-indent: 6em;\">4.2 &nbsp; TRANSLATOR agrees that upon termination of this engagement with CLIENT, for any reason, voluntary or involuntary, with or without cause, he/she will immediately return to CLIENT any property, customer lists, information, forms, formulae, plans, documents or other written or computer material, software or hardware, or copies of the same, belonging to CLIENT within his/her possession or made or compiled or delivered to TRANSLATOR during his/her engagement hereunder, and will not at any time thereafter copy or reproduce the same.</p>
			<p align=\"justify\" style=\"text-indent: 6em;\">4.3 &nbsp;&nbsp; TRANSLATOR further agrees that he/she will not retain or use for his/her and any other’s account, at any time, any trade names, trademarks, service mark, or other proprietary business designation used or owned in connection with the business of CLIENT.  For the avoidance of doubt, it is hereby declared that ownership and title to all of the aforesaid properties shall at all times be vested in CLIENT or its related corporations, as the case may be. </p>
			<p align=\"justify\" style=\"text-indent: 6em;\">4.4 &nbsp; All knowledge and information which TRANSLATOR acquires during the term of this Agreement regarding the business and products of CLIENT and its customers shall be maintained in confidentiality by TRANSLATOR and, except as expressly authorized by CLIENT in writing, shall not be divulged or published by TRANSLATOR and shall not be authorized by TRANSLATOR to be divulged or published by others.  Upon request, TRANSLATOR will return any and all documents received from CLIENT and in general any documents (in written or electronic form) without keeping a copy thereof. </p>
			<p align=\"justify\" style=\"text-indent: 6em;\">4.5 &nbsp; The provisions of this agreement shall survive the termination of engagement, however caused.  </p>
			<p align=\"justify\" style=\"text-indent: 4em;\"><b>5. &nbsp;&nbsp;&nbsp; COPYRIGHT</b></p>
			<p align=\"justify\" style=\"text-indent: 6em;\">5.1 &nbsp;&nbsp;TRANSLATOR agrees that upon CLIENT's completion of all payments provided herein, the translation of the item(s) described in paragraph 1 above shall be the property of CLIENT.</p>
			<p align=\"justify\" style=\"text-indent: 6em;\">5.2 &nbsp;&nbsp;TRANSLATOR has no obligation to take any steps to protect any copyright, trademark or other right of CLIENT with respect to the translation, except as may be expressly otherwise provided in this Agreement. </p>
			<p align=\"justify\" style=\"text-indent: 6em;\">5.3 &nbsp;&nbsp; Notwithstanding the foregoing, TRANSLATOR shall have the right to retain file copies of the item(s) to be translated and of the translation, subject to the provisions of the immediately preceding paragraph. </p>
			<p align=\"justify\" style=\"text-indent: 4em;\"><b>6. &nbsp;&nbsp;&nbsp; PRIOR INTEREST</b></p>
			<p align=\"justify\" style=\"text-indent: 6em;\">6.1 &nbsp;&nbsp; TRANSLATOR is disqualified and/or relieved from the responsibility of performing services for any customer organization in which he/she has a prior interest subject to paragraph 2.1 (d) hereof.</p>
			<p align=\"justify\" style=\"text-indent: 4em;\"><b>7. &nbsp;&nbsp;&nbsp; CANCELLATION OR WITHDRAWAL BY CLIENT</b></p>
			<p align=\"justify\" style=\"text-indent: 6em;\">7.1 &nbsp;&nbsp; CLIENT, at its discretion, may cancel or withdraw any portion of the item(s) described in paragraph 1 hereof prior to TRANSLATOR’s completion of the service(s). The cancellation or withdrawal shall be without prejudice to the payment of the portion of the fee represented by the percentage of total service(s) performed by the TRANSLATOR.</p>
			<p align=\"justify\" style=\"text-indent: 6em;\">7.2 &nbsp;&nbsp; The provisions of this Contract relating to confidentiality shall survive the cancellation or withdrawal by CLIENT.</p>
			<p align=\"justify\" style=\"text-indent: 4em;\"><b>8. &nbsp;&nbsp;&nbsp; NON-COMPETITION AND NON-SOLICITATION</b></p>
			<p align=\"justify\" style=\"text-indent: 6em;\">The TRANSLATOR agrees that, during the term of his/her engagement hereunder and for two (2) year after the termination thereof, he/she shall not, for any reasons, solicit the customers of, or deal with any individual or legal entity which was a customer of CLIENT, for any business likely to compete with the business of CLIENT.</p>
			<p align=\"justify\" style=\"text-indent: 4em;\"><b>9. &nbsp;&nbsp;&nbsp; REFERENCE TO LEGISLATION</b></p>
			<p align=\"justify\" style=\"text-indent: 6em;\">The current legislation of Hong Kong is applicable to this Contract.</p>
			<p align=\"justify\" style=\"text-indent: 4em;\"><b>10.&nbsp;&nbsp;&nbsp;DISPUTES</b></p>
			<p align=\"justify\" style=\"text-indent: 6em;\">Any ambiguities in the terms and conditions of this contract will be resolved in discussions between TRANSLATOR and CLIENT. If after such discussions, the parties are unable to resolve the dispute, the matter will be settled in the applicable courts in Hong Kong.</p>
			<p align=\"justify\" style=\"text-indent: 4em;\"><b>11.&nbsp;&nbsp;&nbsp;LIABILITY FOR BREACH OF CONTRACT</b></p>
			<p align=\"justify\" style=\"text-indent: 6em;\">If during the term of engagement, TRANSLATOR breaches or violates this Agreement, this shall be sufficient cause for CLIENT to terminate the Translation Agreement. The termination of the Translation Agreement shall be without prejudice to any other legal remedies that CLIENT may have against TRANSLATOR.</p>
			<p align=\"justify\" style=\"text-indent: 4em;\"><b>12.&nbsp;&nbsp;&nbsp;ENTIRE CONTRACT</b></p>
			<p align=\"justify\" style=\"text-indent: 6em;\">This contract contains the entire agreement of the parties relating to the subject matter hereof. It may be modified only by an instrument in writing, signed by both parties hereto. This agreement covers any future services that TRANSLATOR provides to CLIENT.</p>
			<p align=\"justify\" style=\"text-indent: 4em;\"><b>13.&nbsp;&nbsp;&nbsp;EFFECTIVITY</b></p>
			<p align=\"justify\" style=\"text-indent: 6em;\">This Agreement shall take effect immediately upon signing of the parties.</p>
			<br>
			If you agree to the terms and conditions, click <a href=\"http://localhost/OrangeTranslations/index.php/Start/Confirmation?emailcode=$emailcode\" target=\"_blank\">here</a>.
			";

			$mailer -> Body = $message;

			/* USED FOR CHECKING*/

			if($mailer -> Send()) {
				$this->session->set_userdata("sentagreementform", "true");

				$data = array (
					'managerid' => $this->session->userdata("id"),
					'name' => $this->input->post("fullname"),
					'email' => $this->input->post("emailaddress"),
					'countrycode' => $this->input->post('country'),
					'address' => $this->input->post("address"),
					'emailcode' => $emailcode,
					'priceperword' => $this->input->post("priceperword")
				);

				$this->ProjectManager_model->insertPotentialTranslator($data);
			}
			else {
				$this->session->set_userdata("sentagreementform", "false");
			}
		}
		else {
			$this->session->set_userdata("sentagreementform", "existing");
		}
		$this->load->view("ProjectManager_translator_agreementform_view");
		$this->session->unset_userdata('sentagreementform');
	}

	public function DownloadTranslatedDocument() {
		$data = $this->ProjectManager_model->getTranslatedDocument($this->session->userdata('projectcode'));

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
}

?>