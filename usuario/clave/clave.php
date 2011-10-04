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

<form action="clave-cambio.php" method="post">
<table style="text-align: left; width: 60%; margin-left: auto; margin-right: auto;"
border="0" cellpadding="2" cellspacing="2">
<tbody>
<tr>
<td style="vertical-align: top;">Clave Actual</td>
<td style="vertical-align: top;"><input type="password" name="passadminA" size=20 /></td>
</tr>
<tr>
<td style="vertical-align: top;">Nueva Clave</td>
<td style="vertical-align: top;"><input type="password" name="passadminN1" size=20 /></td>
</tr>
<tr>
<td style="vertical-align: top;">Repita Nueva Clave</td>
<td style="vertical-align: top;"><input type="password" name="passadminN2" size=20 /></td>
</tr>
<tr>
<td style="vertical-align: top;"><input type="hidden" name="claveadm" /></td>
<td style="vertical-align: top;"></td>
</tr>
<tr>
<td style="vertical-align: top;"><input type="reset" class="botonR"></td>
<td style="vertical-align: top;"><input name="send" type="submit" class="botonG"></td>
</tr>
</tbody>
</table>
</div>
</form>

<!-- FIN Contenido HTML -->
<?php // footer
} else{
	print"<h3>No ha iniciado Sesión Correctamente</h3><br />\n";
	print"<br />\n<a href=\"../index.php\" class=\"botonR\">Volver</a><br /><br />\n";
}
include ("$inc/footer.php");
?>
