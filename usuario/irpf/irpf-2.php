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
$titulo ="IRPF-2";
$subtitulo ="SUBTITULO";
include ("$inc/body.php");
?>
<!-- Contenido HTML -->
<?php
extract($_POST);

print "Año: ".$ano."<br /> Trimestre: ".$trimestre;

// Limitar por año y  Trimestre
// Sumar Base Ventas
// Sumar IVA Ventas
// Sumar Total Ventas
// comprobar Base + IVA = Total Ventas

// Ventas
$query0="SELECT ano, trimestre, SUM(base), SUM(iva), SUM(total) FROM ventas WHERE ano='$ano' AND trimestre='$trimestre'";
$query1=mysql_query($query0);
$ventas=mysql_fetch_row($query1);
/*
print "Vtas";
print "<pre>";
print_r ($ventas);
print "</pre>";
*/

// Compras
$query0="SELECT ano, trimestre, SUM(base), SUM(iva), SUM(total) FROM compras WHERE ano='$ano' AND trimestre='$trimestre'";
$query1=mysql_query($query0);
$compras=mysql_fetch_row($query1);
/*
print "Cpras";
print "<pre>";
print_r ($compras);
print "</pre>";
*/

// Gastos
$query0="SELECT ano, trimestre, SUM(base), SUM(iva), SUM(total) FROM gastos WHERE ano='$ano' AND trimestre='$trimestre'";
$query1=mysql_query($query0);
$gastos=mysql_fetch_row($query1);
/*
print "Gtos";
print "<pre>";
print_r ($gastos);
print "</pre>";
*/

// Gastos S IVA
$query0="SELECT ano, trimestre, SUM(total) FROM gastos_s_iva WHERE ano='$ano' AND trimestre='$trimestre'";
$query1=mysql_query($query0);
$gastos_s_iva=mysql_fetch_row($query1);
/*
print "Gtos S IVA";
print "<pre>";
print_r ($gastos_s_iva);
print "</pre>";
*/

// Calculos
// 

print("<table style=\"text-align: left; width: 80%;\" border=\"1\" cellpadding=\"0\" cellspacing=\"0\">");
	print("<tbody>");
		print ("<tr>");
			print ("<td style=\"vertical-align: top;\">");
				print ("");
			print ("</td>");
			print ("<td style=\"vertical-align: top;\">");
				print ("Base");
			print ("</td>");
			print ("<td style=\"vertical-align: top;\">");
				print ("IVA");
			print ("</td>");
			print ("<td style=\"vertical-align: top;\">");
				print ("Total");
			print ("</td>");
		print ("</tr>\n");
		print ("<tr>");
			print ("<td style=\"vertical-align: top;\">");
				print ("Ventas");
			print ("</td>");
			print ("<td style=\"vertical-align: top;\">");
				$ventas[2]=number_format($ventas[2], 2, '.', '');
				print $ventas[2];
			print ("</td>");
			print ("<td style=\"vertical-align: top;\">");
				$ventas[3]=number_format($ventas[3], 2, '.', '');
				print $ventas[3];
			print ("</td>");
			print ("<td style=\"vertical-align: top;\">");
				$ventas[4]=number_format($ventas[4], 2, '.', '');
				print $ventas[4];
			print ("</td>");
		print ("</tr>\n");
		print ("<tr>");
			print ("<td style=\"vertical-align: top;\">");
				print ("Compras");
			print ("</td>");
			print ("<td style=\"vertical-align: top;\">");
				$compras[2]=number_format($compras[2], 2, '.', '');
				print $compras[2];
			print ("</td>");
			print ("<td style=\"vertical-align: top;\">");
				$compras[3]=number_format($compras[3], 2, '.', '');
				print $compras[3];
			print ("</td>");
			print ("<td style=\"vertical-align: top;\">");
				$compras[4]=number_format($compras[4], 2, '.', '');
				print $compras[4];
			print ("</td>");
		print ("</tr>\n");
		print ("<tr>");
			print ("<td style=\"vertical-align: top;\">");
				print ("Gastos");
			print ("</td>");
			print ("<td style=\"vertical-align: top;\">");
				$gastos[2]=number_format($gastos[2], 2, '.', '');
				print $gastos[2];
			print ("</td>");
			print ("<td style=\"vertical-align: top;\">");
				$gastos[3]=number_format($gastos[3], 2, '.', '');
				print $gastos[3];
			print ("</td>");
			print ("<td style=\"vertical-align: top;\">");
				$gastos[4]=number_format($gastos[4], 2, '.', '');
				print $gastos[4];
			print ("</td>");
		print ("</tr>\n");
	print("</tbody>");
print("</table>");
print("<br />");

print("<table style=\"text-align: left; width: 80%;\" border=\"1\" cellpadding=\"0\" cellspacing=\"0\">");
	print("<tbody>");
		print ("<tr>");
			print ("<td style=\"vertical-align: top;\">");
				print ("Casilla 01");
			print ("</td>");
			print ("<td style=\"vertical-align: top;\">");
				print $ventas[2];
			print ("</td>");
		print ("</tr>\n");
		print ("<tr>");
			print ("<td style=\"vertical-align: top;\">");
				print ("Casilla 02");
			print ("</td>");
			print ("<td style=\"vertical-align: top;\">");
				$todosgtosmascompras=$gastos[2] + $gastos_s_iva[2] + $compras[2];
				$todosgtosmascompras=number_format($todosgtosmascompras, 2, '.', '');
				print $todosgtosmascompras;
			print ("</td>");
		print ("</tr>\n");
		print ("<tr>");
			print ("<td style=\"vertical-align: top;\">");
				print ("Casilla 03");
			print ("</td>");
			print ("<td style=\"vertical-align: top;\">");
				$diferenciabase=( $ventas[2] - ( $compras[2] + $gastos[2] + $gastos_s_iva[2]) );
				$diferenciabase=number_format($diferenciabase, 2, '.', '');
				print $diferenciabase;
			print ("</td>");
		print ("</tr>\n");
		print ("<tr>");
			print ("<td style=\"vertical-align: top;\">");
				print ("Casilla 04 / 07 / 12 / 14 / 17 / 19");
			print ("</td>");
			print ("<td style=\"vertical-align: top;\">");
				$porciento=($diferenciabase * 0.20);
				$porciento=number_format($porciento, 2, '.', '');
				print $porciento;
			print ("</td>");
		print ("</tr>\n");
	print("</tbody>");
print("</table>");

// SI ES CORRECTO ENVIAR A DB TABLA IVA
?>
<!-- FIN Contenido HTML -->
<?php // footer
} else{
	print"<h3>No ha iniciado Sesión Correctamente</h3><br />\n";
	print"<br />\n<a href=\"../index.php\" class=\"botonR\">Volver</a><br /><br />\n";
}
include ("$inc/footer.php");
?>
