<?php
if($result == True){
  $to = $email;
  $toadmin = "mazahirharoon@gmail.com";
  $toadmin1 = "mazahirharoon@gmail.com";
  $from = "mazahirharoon@gmail.com";
  $headers ="From:<$from>\n";
  $headers.="MIME-Version: 1.0\n";
  $headers.="Content-type: text/html; charset=iso 8859-1";
   "Reply-To: mazahirharoon@gmail.com" . "\r\n" .
   "X-Mailer: PHP/" . phpversion();
   $subject = 'Confirmation Mail (GK Printers)';
   $body = ("<strong>Dear ".$name."</strong>,");
   $body.= "<br>";
   $body.= ("We have received your request. We will contact you soon!");
   $body.= "<br>";
   $body.= "<br>";
   $body.= "<br>";
   $body.= "Sincerely,";
   $body.= "<br>";
   $body.= "<br>";
   $body.= "<strong>The BYM Team</strong>";
   mail($to,$subject,$body,$headers,"-f$from");

   $subjectadmin = 'Event Notification (Book Your Musician)';
   $bodyadmin = ("There is one new request from :");
   $bodyadmin.= ("<br>");
   $bodyadmin.= ("<strong>Name: </strong>".$name);
   $bodyadmin.= ("<br>");
   $bodyadmin.= ("<strong>Contact: </strong>".$contact1);
   $bodyadmin.= ("<br>");
   $bodyadmin.= ("<strong>Email id: </strong>".$email);
   $bodyadmin.= ("<br>");
   $bodyadmin.= ("<strong>Skill: </strong>".$req2);
   $bodyadmin.= ("<br>");
   $bodyadmin.= ("<strong>Perfomance Video: </strong>".$vlink);
   $bodyadmin.= ("<br>");
   $bodyadmin.= ("<strong>More Details at </strong>: http://www.bookyourmusician.com/bmm/notifm.php");

   mail($toadmin,$subjectadmin,$bodyadmin,$headersadmin,"-f$from");
   mail($toadmin1,$subjectadmin,$bodyadmin,$headers,"-f$from");
}
?>