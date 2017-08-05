<?PHP

class Init extends CI_Model {

    function __construct () {
        parent::__construct ();
    }
    function initPath ($contoller_path='') {
        $data["base_url"]   = $this->config->item ("base_url");
        $data["css"]     = $this->config->item ("css");
        $data["js"] = $this->config->item ("js");
        $data["images"]     = $this->config->item ("images");
        $data["path"]       = $data["base_url"] . $contoller_path;
        $data["title"]      = "";
        return $data;
    }
    function sendmail($cname, $to, $events, $comments){
    		log_message('info','$name '.$cname);
      		$toadmin = "rihazam786@gmail.com";    	
      			
    		//reply to user
    		$headers ="From:<$toadmin>\n";
		$headers.="MIME-Version: 1.0\n";
		$headers.="Content-type: text/html; charset=iso 8859-1";
		"Reply-To: rihazam786@gmail.com" . "\r\n" .
		"X-Mailer: PHP/" . phpversion();
		$subject = 'Confirmation Mail (GK Printers)';
		$body = ("<strong>Dear ".$cname."</strong>,");
		$body.= "<br>";
		$body.= ("We have received your query. We will contact you soon!");
		$body.= "<br>";
		$body.= "<br>";
		$body.= "<br>";
		$body.= "Sincerely,";
		$body.= "<br>";
		$body.= "<br>";
		$body.= "<strong>GK Printers</strong>";
		
		//email to admin
		$admin_headers ="From:<$to>\n";
		$admin_headers.="MIME-Version: 1.0\n";
		$admin_headers.="Content-type: text/html; charset=iso 8859-1";
		"Reply-To: mazahirharoon@gmail.com" . "\r\n" .
		"X-Mailer: PHP/" . phpversion();
		$admin_subject = 'Confirmation Mail (GK Printers)';
		$admin_body = ("<strong>Dear Sir,</strong>,");
		$admin_body.= "<br>";
		$admin_body.= ("You have one new query!");
		$admin_body.= "<br>";
		$admin_body = ("<strong>Name: </strong>".$cname);
		$admin_body.= "<br>";
		$admin_body.= ("<strong>Email: </strong>".$to);
		$admin_body.= "<br>";
		$admin_body.= ("<strong>Event: </strong>".$events);
		$admin_body.= "<br>";
		$admin_body.= ("<strong>Message: </strong>".$comments);
		$admin_body.= "<br>";
		$admin_body.= "<br>";
		$admin_body.= "<br>";
		$admin_body.= "Sincerely,";
		$admin_body.= "<br>";
		$admin_body.= "<br>";
		$admin_body.= "<strong>GK Printers Admin Panel</strong>";
		

		

		mail($to,$subject,$body,$headers,"-f$to");
		mail($toadmin,$admin_subject,$admin_body,$admin_headers,"-f$to");
	    }  
}
