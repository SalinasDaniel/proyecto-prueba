<?php
if ( isset($_GET['sent']) ){
	if ( $_GET['sent'] == '1'){
		echo "<p> ✔ Formulario enviado correctamente</p><br>";
	}
	else {
		echo "<p> Hubo un error al enviar</p><br>";
	}
}
?>