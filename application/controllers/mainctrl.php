<?php
header('Access-Control-Allow-Origin: *');
defined('BASEPATH') OR exit('No direct script access allowed');
class Mainctrl extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{	
		$data = $this->Init->initPath ('/mainctrl');
		$this->load->view('pages/index', $data);
	}
	public function Sendmail() {
	 	$this->load->model('Init');
		//$cname =  $this->input->post('cname');
		//$to =  $this->input->post('cemail');
		//$events =  $this->input->post('events');
		//$comments =  $this->input->post('comments');
		$cname = "mazahir";
		$to ="mazahirharoon@gmail.com";
		log_message('info','$name '.$cname);
		$toadmin = "mazahirharoon@gmail.com";
		$toadmin1 = "mazahirharoon@gmail.com";
		$from = "mazahirharoon@gmail.com";
		$headers ="From:<$from>\n";
		$headers.="MIME-Version: 1.0\n";
		$headers.="Content-type: text/html; charset=iso 8859-1";
		"Reply-To: mazahirharoon@gmail.com" . "\r\n" .
		"X-Mailer: PHP/" . phpversion();
		$subject = 'Confirmation Mail (GK Printers)';
		$body = ("<strong>Dear ".$cname."</strong>,");
		$body.= "<br>";
		$body.= ("We have received your request. We will contact you soon!");
		$body.= "<br>";
		$body.= "<br>";
		$body.= "<br>";
		$body.= "Sincerely,";
		$body.= "<br>";
		$body.= "<br>";
		$body.= "<strong>GK Printers</strong>";
		mail($to,$subject,$body,$headers,"-f$from");

		// mail($toadmin,$subjectadmin,$bodyadmin,$headersadmin,"-f$from");
		// mail($toadmin1,$subjectadmin,$bodyadmin,$headers,"-f$from");
	}
}
