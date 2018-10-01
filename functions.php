<?php
add_action( 'admin_post_nopriv_process_form', 'send_mail_data' );
add_action( 'admin_post_process_form', 'send_mail_data' );

// Funcion callback
function send_mail_data() {

	$name = sanitize_text_field($_POST['name']);
	$email = sanitize_email($_POST['email']);
	$number = sanitize_textarea_field($_POST['number']);

	$adminmail = "destino@dominio.com"; //email destino
	$subject = 'Formulario de contacto'; //asunto
	$headers = "Reply-to: " . $name . " <" . $email . ">";

	//Cuerpo del mensaje
	$msg = "Nombre: " . $name . "\n";
	$msg .= "E-mail: " . $email . "\n\n";
	$msg .= "Mensaje: \n\n" . $number . "\n";

	$sendmail = wp_mail( $adminmail, $subject, $msg, $headers);

	wp_redirect( home_url("/contacto/")."?sent=".$sendmail ); //asumiendo que existe esta url
}
?>