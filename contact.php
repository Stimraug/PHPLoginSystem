<?php
$field_name = $_POST['cf_name'];
$field_email = $_POST['cf_email'];
$field_subject = $_POST['cf_subject'];
$field_message = $_POST['cf_message'];

$mail_to = "lazzikka@gmail.com";
$subject = "Palaute - ". $field_subject;

/* $body_message = 'Nimi: '.$field_name."\n";
$body_message .= 'S-posti: '.$field_email."\n";
$body_message .= 'Aihe: '.$field_subject."\n"; */
$body_message .= $field_message;

$headers = "From: $field_name <$field_email>";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) {	 ?>
	<script language="javascript" type="text/javascript">
		alert("Palautteesi on lähetetty!");
		window.location = "index.php";
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert("Palautteen lähetys epäonnistui");
		window.location = "index.php";
	</script>
<?php
}
?>