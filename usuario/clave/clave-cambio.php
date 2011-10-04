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
$inc=$inc0.$inc0."inc";
include ("$inc/header0.php");
$incM="../";
?>
<?php
if ( isset($_SESSION['Authenticated']) AND $_SESSION['Authenticated'] == 1 ){
?>
<?php // menu
include ("$inc/menu.php");
// titulo y subtitulo para la página
$titulo ="IVA";
$subtitulo ="SUBTITULO";
include ("$inc/body.php");
?>
<!-- Contenido HTML -->

<?php
if ( isset($_POST['claveadm']) ){
extract($_POST);

	// comprueba tamaño clave
	if (strlen($passadminN1) >= 6) {
		$clavemd5 = md5($passadminA);
		$passadminN1md5 = md5($passadminN1);
		$passadminN2md5 = md5($passadminN2);
		
		$checkuser1=mysql_query("select clave from usuarios where usuario = 'admin'");
		$usercheck=mysql_fetch_row($checkuser1);
	    // print_r ($usercheck);
		if ( $usercheck[0] == $clavemd5 AND $passadminN1md5 == $passadminN2md5 ){
			mysql_query("update usuarios set clave='$passadminN2md5' where usuario='admin'");
			print "<p class=\"botonA\">Clave Modificada Correctamente</p>";
			print"<br /><br /><br /><br /><br />";
			print"<br />\n<a href=\"../\" class=\"botonR\">Volver</a><br /><br />\n";
		} else{
			print"<br /><br /><br /><br /><br />";
			print"<h3>Algún Dato no es Correcto</h3>";
			print"<br />\n<a href=\"../\" class=\"botonR\">Volver</a><br /><br />\n";
		}
	} else{
		print"<br />\n<a href=\"admin.php\" class=\"botonR\">Volver</a><br /><br />\n";
		die("<br />\nLa clave tiene menos de 6 caracteres!<br /><br />\n");
	}
		
}else{
	print"<br /><br /><br /><br /><br />";
	print"<h3>Faltan Datos</h3>";
	print"<br />\n<a href=\"admin.php\" class=\"botonR\">Volver</a><br /><br />\n";
}
print mysql_error();
?>

<!-- FIN Contenido HTML -->
<?php // footer
} else{
	print"<h3>No ha iniciado Sesión Correctamente</h3><br />\n";
	print"<br />\n<a href=\"../index.php\" class=\"botonR\">Volver</a><br /><br />\n";
}
include ("$inc/footer.php");
?>
