<!DOCTYPE html>
<HTML lang="es">
	<HEAD>
		<TITLE>Raspberry PI WEB controlador GPIO</TITLE>
		<META CHARSET="utf-8"/>
		<LINK rel="shortcut icon" href="./images/favicon.png"/>
		<LINK rel="stylesheet" href="./style.css"/>
		<SCRIPT src="./scripts.js"></SCRIPT>
<?php
// Funciones PHP del pin GPIO 2
	if ($_POST[Activar2]) { 
		$a=exec("sudo python /var/www/webRaspberriPI/Web\ Administración\ Raspberri\ PI/GPIO/2/activar.py");
		echo $a;
	}

	if ($_POST[Desactivar2]) { 
		$a=exec("sudo python /var/www/webRaspberriPI/Web\ Administración\ Raspberri\ PI/GPIO/2/apagar.py");
		echo $a;
	}

	if ($_POST[UNparpadeo2]) { 
		$a=exec("sudo python /var/www/webRaspberriPI/Web\ Administración\ Raspberri\ PI/GPIO/2/1parpadeo.py");
		echo $a;
	}

	if ($_POST[Parpadear2]) { 
		$a=exec("sudo python /var/www/webRaspberriPI/Web\ Administración\ Raspberri\ PI/GPIO/2/parpadear.py");
		echo $a;
	}
// Fin de las funciónes del pin GPIO 2
		
// Funciones PHP del pin GPIO 3
	if ($_POST[Activar3]) { 
		$a=exec("sudo python /var/www/webRaspberriPI/Web\ Administración\ Raspberri\ PI/GPIO/3/activar.py");
		echo $a;
	}

	if ($_POST[Desactivar3]) { 
		$a=exec("sudo python /var/www/webRaspberriPI/Web\ Administración\ Raspberri\ PI/GPIO/3/apagar.py");
		echo $a;
	}

	if ($_POST[UNparpadeo3]) { 
		$a=exec("sudo python /var/www/webRaspberriPI/Web\ Administración\ Raspberri\ PI/GPIO/3/1parpadeo.py");
		echo $a;
	}

	if ($_POST[Parpadear3]) { 
		$a=exec("sudo python /var/www/webRaspberriPI/Web\ Administración\ Raspberri\ PI/GPIO/3/parpadear.py");
		echo $a;
	}
// Fin de las funciónes del pin GPIO 3
?>
	</HEAD>
	
	<BODY id="pines">
		<H1>WEB DE CONTROL RaspberryPI</H1>
<FORM action="" method="post">		
		<DIV id="cajamenuprincipal">
			<NAV id="menuprincipal">
				<UL>
					<A href="index.html"><LI>PINES</LI></A>
					<A href="#"><LI>Monitor de Estado</LI></A>
					<A href="#"><LI>Futuras Funciones...</LI></A>
					<A href="#"><LI>Actualizar</LI></A>
				</UL>
			</NAV>
		</DIV>
		
		<TABLE id="tablaprincipal">
			<TR>
				<TD>PIN</TD>
				<TD>ACTIVAR</TD>
				<TD>DESACTIVAR</TD>
				<TD>1PARPADEO</TD>
				<TD>PARPADEAR</TD>
				<TD>ESTADO</TD>
			</TR>
			<TR>
				<TD>2</TD>
				<TD>
					
				
					<INPUT type="submit" name="Activar2" value="Activar"/>
					<INPUT type="submit" name="Desactivar2" value="Desactivar"/>
					<INPUT type="submit" name="UNparpadeo2" value="1Parpadeo"/>
					<INPUT type="submit" name="Parpadear2" value="Parpadear"/>
				
					
				</TD>
				<TD><IMG src="images/off.png" alt="Apagar"/></TD>
				<TD><IMG src="images/on.png" alt="Encender"/></TD>
				<TD><IMG src="images/on.png" alt="Encender"/></TD>
				<TD></TD>
			</TR>
			<TR>
				<TD>3</TD>
				<TD><IMG src="images/on.png" alt="Encender"/></TD>
				<TD><IMG src="images/off.png" alt="Apagar"/></TD>
				<TD><IMG src="images/on.png" alt="Encender"/></TD>
				<TD><IMG src="images/on.png" alt="Encender"/></TD>
				<TD></TD>
			</TR>
			<TR>
				<TD>4</TD>
				<TD><IMG src="images/on.png" alt="Encender"/></TD>
				<TD><IMG src="images/off.png" alt="Apagar"/></TD>
				<TD><IMG src="images/on.png" alt="Encender"/></TD>
				<TD><IMG src="images/on.png" alt="Encender"/></TD>
				<TD></TD>
			</TR>
		</TABLE>
</FORM>
	</BODY>
</HTML>

		