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
$titulo ="Compras";
$subtitulo ="SUBTITULO";
include ("$inc/body.php");
?>
<!-- Contenido HTML -->

<form action="compras-2.php" method="post">
	<table style="text-align: left; width: 100%;" border="0" cellpadding="0" cellspacing="0">
	<tbody>
		<tr>
			<td style="vertical-align: top; text-align: center;"></td>
			<td style="vertical-align: top; text-align: center;">Fecha</td>
			<td style="vertical-align: top; text-align: center;">Proveedor</td>
			<td style="vertical-align: top; text-align: center;">N.Fact</td>
			<td style="vertical-align: top; text-align: center;">Detalle</td>
			<td style="vertical-align: top; text-align: center;">Base</td>
			<td style="vertical-align: top; text-align: center;">I.V.A.</td>
			<td style="vertical-align: top; text-align: center;">Total</td>
			<td style="vertical-align: top; text-align: center;">Pagada</td>
		</tr>
<?php
$max='10';
			print ("<input type=\"hidden\" name=\"max\" value=\"$max\"/>\n");
for ($i = 1; $i <= $max; $i++) {
	$valor = $i;
		print ("<tr>");
			print ("<td style=\"vertical-align: top;\">");
			print ("<input type=\"hidden\" name=\"".$valor."\" />");
			print ("<p align=\"right\">".$valor."<p>");
			print ("</td>");
			print ("<td style=\"vertical-align: top;\">");
			print ("<input type=\"text\" name=\"ano[".$valor."]\" size=4 value=\"2011\" />");
			print ("<input type=\"text\" name=\"mes[".$valor."]\" size=2 value=\"12\" />");
			print ("<input type=\"text\" name=\"dia[".$valor."]\" size=2 value=\"31\" />");
			print ("</td>");
			print ("<td style=\"vertical-align: top;\">");
			print ("<input type=\"text\" name=\"proveedor[".$valor."]\" size=15 value=\"\" />");
			print ("</td>");
			print ("<td style=\"vertical-align: top;\">");
			print ("<input type=\"text\" name=\"factura[".$valor."]\" size=15 value=\"\" />");
			print ("</td>");
			print ("<td style=\"vertical-align: top;\">");
			print ("<input type=\"textarea\" name=\"detalle[".$valor."]\" size=25 value=\"\" />");
			print ("</td>");
			print ("<td style=\"vertical-align: top;\">");
			print ("<input type=\"text\" name=\"base[".$valor."]\" size=6 value=\"\" />");
			print ("</td>");
			print ("<td style=\"vertical-align: top;\">");
			print ("<input type=\"text\" name=\"iva[".$valor."]\" size=6 value=\"\" />");
			print ("</td>");
			print ("<td style=\"vertical-align: top;\">");
			print ("<input type=\"text\" name=\"total[".$valor."]\" size=6 value=\"\" />");
			print ("</td>");
			print ("<td style=\"vertical-align: top;\">");
				print ("<select name=\"pagada[".$valor."]\">");
					print ("<option selected=\"selected\" value=\"0\">No</option>");
					print ("<option value=\"1\">Si</option>");
				print ("</select>");
			print ("</td>");
		print ("</tr>\n");
}
?>
	</tbody>
</table>
	<br />
	<p align=right><input name="send" type="submit" class="botonG"></p>
</form>

<!-- FIN Contenido HTML -->
<?php // footer
} else{
	print"<h3>No ha iniciado Sesión Correctamente</h3><br />\n";
	print"<br />\n<a href=\"../index.php\" class=\"botonR\">Volver</a><br /><br />\n";
}
include ("$inc/footer.php");
?>
