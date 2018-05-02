<?php
$field_name = filter_var($_POST['cf_name'], FILTER_SANITIZE_STRING);
$field_email = filter_var(filter_var($_POST["cf_email"], FILTER_VALIDATE_EMAIL), FILTER_SANITIZE_EMAIL);
$field_subject = filter_var($_POST['cf_subject'], FILTER_SANITIZE_STRING);
$field_message = filter_var($_POST['cf_message'], FILTER_SANITIZE_STRING);

$mail_to = "lazzikka@gmail.com";
$subject = "Palaute - ". $field_subject;

/* $body_message = 'Nimi: '.$field_name."\n";
$body_message .= 'S-posti: '.$field_email."\n";
$body_message .= 'Aihe: '.$field_subject."\n"; */
$body_message .= $field_message;

$headers = "From: $field_name <$field_email>";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) {	 ?>
	<script charset="utf-8" language="javascript" type="text/javascript">
		// Miten ä ja ö toimimaan alertboxissa?
		alert("Kiitos palautteesta!");
		window.location = "PHPLoginPractice.php";
	</script>
<?php
}
else { ?>
	<script charset="utf-8" language="javascript" type="text/javascript">
		// Miten ä ja ö toimimaan alertboxissa?
		alert("Palautteen siirto ei onnistunut.");
		window.location = "PHPLoginPractice.php";
	</script>
<?php
}
?>