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
$titulo ="TITULO";
$subtitulo ="SUBTITULO";
include ("$inc/body.php");
?>
<!-- Contenido HTML -->
<pre>
<?php
	$query0="SELECT * FROM ventas ORDER BY fecha";
	$query=mysql_query($query0);
	print "<table border=0 width=\"90%\">\n";
	print "<tr>\n";
	print "<td>Año </td><td>Trim </td><td>Fecha </td><td>Cliente </td><td>Detalle </td><td>Nro. </td><td>Base </td><td>IVA </td><td>Total </td><td>Cobrada </td>\n";
	print "</tr>\n";
	$i=1;
	while( $rec3 = mysql_fetch_row($query) ){
		if ( $rec3[7] == '0'){
			$estado = 'No';
		} else{
			$estado = 'Si';
		}
		print "<tr>";
		print "<td>". $rec3[1] ."</td><td>". $rec3[2] ."</td><td>". $rec3[3] ."</td><td>". $rec3[4] ."</td><td>". $rec3[5] ."</td><td>". $rec3[6] ."</td><td>". $rec3[8] ."</td><td>". $rec3[9] ."</td><td>". $rec3[10] ."</td><td>". $estado ."</td>\n";
		print "</tr>";
	}
	print "</table>\n";
?>
</pre>
<!-- FIN Contenido HTML -->
<?php // footer
} else{
	print"<h3>No ha iniciado Sesión Correctamente</h3><br />\n";
	print"<br />\n<a href=\"../index.php\" class=\"botonR\">Volver</a><br /><br />\n";
}
include ("$inc/footer.php");
?>
