<?php

if (isset($_POST['submit'])) {
   $namecontactName = $_POST['contactName'];
   $contactEmail = $_POST['contactEmail'];
   $contactSubject = $_POST['contactSubject'];
   $contactMessage= $_POST['contactMessage'];

   $mailto = "redazahidi96@gmail.com";
   $headers = "from : ". $contactEmail;
   $txt = "you have recevied to from ".$namecontactName .".\n\n".$contactMessage;

   mail($mailto, $contactSubject, $txt, $headers);
   header("location : index.html?mailsend");
}
   ?>