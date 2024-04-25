		<?php
		/* dati trasmessi dal form */
		$cognome =	$_POST["cog1"];
		$nome =		$_POST["nome1"];
		$mail=		$_POST["posta"];
		echo " La richiesta di $nome $cognome è stata registrata. <br>";
		echo " con indirizzo email:  $mail  . <br>";
		date_default_timezone_set('America/Los_Angeles');
		echo " richiesta arrivata alle ore ", date("H:i:s"), 
									"del ",date("d-m-Y");
		?>

