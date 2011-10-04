<?php
/****************************************************************************************
#     Copyright (c) 2008, 2009, 2010, 2011 Fernando A. Rodriguez para SerInformaticos.es
#
#     Este programa es software libre: usted puede redistribuirlo y / o modificarlo
#     bajo los términos de la GNU General Public License publicada por la
#     la Free Software Foundation, bien de la versión 3 de la Licencia, o de
#     la GPL2, o cualquier versión posterior.
#
#     Este programa se distribuye con la esperanza de que sea útil,
#     pero SIN NINGUNA GARANTÍA, incluso sin la garantía implícita de
#     COMERCIABILIDAD o IDONEIDAD PARA UN PROPÓSITO PARTICULAR. Véase el
#     GNU General Public License para más detalles.
#
#     Usted debería haber recibido una copia de la Licencia Pública General de GNU
#     junto con este programa. Si no, visite <http://www.gnu.org/licenses/>.
#
#     Puede descargar la version completa de la GPL3 en este enlace: 
#     	< http://www.serinformaticos.es/index.php?file=kop804.php >
#
#	 Para mas información puede contactarnos :
#
#		Teléfono (+34) 961 19 60 62
#
#		Email	info@serinformaticos.es
#
#		MSn:	info@serinformaticos.es
#
#		Twitter	@SerInformaticos
#
#		Web:	www.SerInformaticos.es
#
*****************************************************************************************/ ?>
<?php // header
$inc0="../";
$inc=$inc0."inc";
include ("$inc/header0.php");
$incM="";
?>
<?php
if( isset($_POST['login']) ){
//	extract($_POST);
$usuario = filter_var($_POST['user'], FILTER_SANITIZE_STRING);
$clave = filter_var($_POST['pass'], FILTER_SANITIZE_STRING);

		if ( $usuario AND $clave ){ 			
			$getclave=" select clave from usuarios where usuario='$usuario' ";
			$getclave1=mysql_query($getclave);
			$clavedb=mysql_fetch_row($getclave1);

			$clavemd5=md5($clave);
			// print "db ".$clavedb[0]."<br /> md5 ".$clavemd5."<br /> user ".$usuario;
			
			if ( $clavemd5 == $clavedb[0] ){
				// actualiza fecha e ip de ultimo login de cliente
				$ipcliente = $_SERVER['REMOTE_ADDR'];
				$fechalogin = date("Y-m-d H:i:s");
				mysql_query("UPDATE usuarios set ultimo_login='$fechalogin', ip='$ipcliente' WHERE usuario='$usuario' ");
				
				$_SESSION['Authenticated'] = 1;
				session_write_close();
				// header('Location: usuario.php');
				echo "<meta http-equiv='refresh' content='0;URL=usuario.php'>";
			}else{
				$_SESSION['Authenticated'] = 0;
				// header('Location: ../index.php');
				echo "<meta http-equiv='refresh' content='0;URL=../'>";
			}
		}else{
			print"<br /><br /><br /><br /><br />";
			print"<h3>Falta Usuario o Clave</h3>";
			print"<br />\n<a href=\"../index.php\" class=\"botonR\">Volver</a><br /><br />\n";
		}	
}	
if( isset($_GET['logout']) ){
	session_destroy();
	header('Location: ../index.php');
	echo "<meta http-equiv='refresh' content='0;URL=../'>";
}
print mysql_error();
// imprimer error de mysql si existio
// die("error.". mysql_error());
// cierra conexion
mysql_close($enlace);
?>
<?php 
include ("$inc/leftbar.php");
require("$inc/footer.php"); 
?>
