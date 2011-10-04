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
		<table style="text-align: left; width: 60%; margin-left: auto; margin-right: auto;"
			border="0" cellpadding="2" cellspacing="2">
			<tbody>
			<tr>
				<td>
			</td>
			</tr>
			<form action="iva-2.php" method="post">
				<tr>
					<td style="vertical-align: top;">Año</td>
					<td style="vertical-align: top;">
						<select name="ano">
							<option value="2011">2013</option>
							<option value="2011">2012</option>
							<option selected="selected" value="2011">2011</option>
							<option value="2010">2010</option>
							<option value="2009">2009</option>
						</select>
					</td>
				</tr>
				<tr>
					<td style="vertical-align: top;">Trimestre</td>
					<td style="vertical-align: top;">
						<select name="trimestre">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
						</select>
					</td>
				</tr>
				<tr>
					<td style="vertical-align: top;"><input type="reset" class="botonR"></td>
					<td style="vertical-align: top;"><input name="send" type="submit" class="boton1"></td>
				</tr>
			</form>
			</tbody>
		</table>
<!-- FIN Contenido HTML -->
<?php // footer
} else{
	print"<h3>No ha iniciado Sesión Correctamente</h3><br />\n";
	print"<br />\n<a href=\"../index.php\" class=\"botonR\">Volver</a><br /><br />\n";
}
include ("$inc/footer.php");
?>
