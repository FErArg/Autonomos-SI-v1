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
$titulo ="Gastos a DB";
$subtitulo ="SUBTITULO";
include ("$inc/body.php");
?>
<!-- Contenido HTML -->

<?php
extract($_POST);
for ($i = 1; $i <= $max; $i++) {
	$valor = $i;
	// Fecha
	// FALTA CONTROL DE NUMERO DE DÍAS SEGUN MES !!!!!!!!!!!!!!!!!!!!!!!!!!!!!
	$ano[$valor]=(string)$ano[$valor];
	if ( $mes[$valor] < '10' ){
		$mes[$valor]="0".(string)$mes[$valor];
	}
	if ( $dia[$valor] < '10' ){
		$dia[$valor]="0".(string)$dia[$valor];
	}
	$fecha[$valor]=$ano[$valor]."-".$mes[$valor]."-".$dia[$valor];
	$fecha[$valor]=(string)$fecha[$valor];
	$base[$valor] = (float)$base[$valor];
	$iva[$valor] = (float)$iva[$valor];
	$total[$valor] = (float)$total[$valor];
	if ($proveedor[$valor] == TRUE) {
		$a1[$valor] = '1';
	} else{
		$b1[$valor] = '1';
	}
	if ($factura[$valor] == TRUE) {
		$a2[$valor] = '1';
	} else{
		$b2[$valor] = '1';
	}
	if ($base[$valor] == TRUE) {
		$a3[$valor] = '1';
	} else{
		$b3[$valor] = '1';
	}

 
	print "<hr>";

 // TRIMESTRE
	if ((int)$mes[$valor] >= 1 AND (int)$mes[$valor] <= 3){
		$trim[$valor] = '1';
	}
	if ((int)$mes[$valor] >= 4 AND (int)$mes[$valor] <= 6){
		$trim[$valor] = '2';
	}
	if ((int)$mes[$valor] >= 7 AND (int)$mes[$valor] <= 9){
		$trim[$valor] = '3';
	}
	if ((int)$mes[$valor] >= 10 AND (int)$mes[$valor] <= 12){
		$trim[$valor] = '4';
	}



	if ( $a1[$valor] == TRUE ) {
		if ( $a2[$valor] == TRUE ) {
			if ( $a3[$valor] == TRUE ) {
				if ( $iva[$valor] == ''){
					$iva[$valor] = ($base[$valor] * 0.18);
				}
				if ( $total[$valor] == ''){
					$total[$valor] = ($base[$valor] + $iva[$valor]);
				}
				// print $valor." ".$fecha[$valor]." ".$proveedor[$valor]." ".$factura[$valor]." ".$detalle[$valor]." ".$base[$valor]." ".$iva[$valor]." ".$total[$valor]." ".$pagada[$valor]."<br />";
				print ("Línea ".$valor." Cargada Correctamente");
				mysql_query("insert into gastos (ano, trimestre, fecha, proveedor_id, nro_factura, detalle, base, iva, total, pagada)
					values ('$ano[$valor]', '$trim[$valor]', '$fecha[$valor]', '$proveedor[$valor]', '$factura[$valor]', '$detalle[$valor]', '$base[$valor]', '$iva[$valor]', '$total[$valor]', '$pagada[$valor]')");
				
			} else{
				print("<br />\nCampo de Base Obligatorio! No se cargan Datos de la Línea ".$valor."<br />\n");
			}
		} else{
			print("<br />\nCampo de Factura Obligatorio! No se cargan Datos de la Línea ".$valor."<br />\n");
		}
	} else{
		print("<br />\nCampo de Proveedor Obligatorio! No se cargan Datos de la Línea ".$valor."<br />\n");
	}

}
?>
<br />
<a href="compras.php" class="botonR">Volver</a>

<!-- FIN Contenido HTML -->
<?php // footer
} else{
	print"<h3>No ha iniciado Sesión Correctamente</h3><br />\n";
	print"<br />\n<a href=\"../index.php\" class=\"botonR\">Volver</a><br /><br />\n";
}
include ("$inc/footer.php");
?>
