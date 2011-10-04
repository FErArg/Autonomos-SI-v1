<?php // header
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
*****************************************************************************************/
$inc="inc";
$style=$inc."/style.css";
include ("$inc/header.php");
?>
<?php // menu
include ("$inc/menu.php");
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
			<form action="usuario/check.php" method="post">
				<tr>
					<td style="vertical-align: top;">Usuario</td>
					<td style="vertical-align: top;"><input type="text" name="user" size=10 /></td>
				</tr>
				<tr>
					<td style="vertical-align: top;">Clave</td>
					<td style="vertical-align: top;"><input type="password" name="pass" size=10 /></td>
				</tr>
				<tr>
					<td style="vertical-align: top;"><input type="hidden" name="login" /></td>
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
include ("$inc/footer.php");
?>
