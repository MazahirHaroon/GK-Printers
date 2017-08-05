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
		$this->load->view('pages/home', $data);
	}
	public function sendmail() {
	 	$this->load->model('Init');
		$cname =  $this->input->post('cname');
		$to =  $this->input->post('cemail');
		$events =  $this->input->post('events');
		$comments =  $this->input->post('comments');
		log_message('info','$name '.$cname);
		$userData = $this->Init->Sendmail($cname, $to, $events, $comments);
	}
}
