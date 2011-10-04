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
if ( isset($_SESSION['Authenticated']) AND $_SESSION['Authenticated'] == 1 ){
?>
<?php // menu
include ("$inc/menu.php");
// titulo y subtitulo para la página
$titulo ="Acceso Principal";
$subtitulo ="SUBTITULO";
include ("$inc/body.php");
?>

<!-- Contenido HTML -->

<p>Esta pequeña aplicación es una ayuda, sin ningún tipo de garantía, que permite a cualquier 
trabajador autónomo o empresa poder rellenar los modelos para la declaración trimestral 
de IVA e IRPF.</p>
<br />
<p>
     Copyright (c) 2008, 2009, 2010, 2011 Fernando A. Rodriguez para SerInformaticos.es
</p><br /><p>
     Este programa es software libre: usted puede redistribuirlo y / o modificarlo bajo los términos de la GNU General Public License publicada por la
     la Free Software Foundation, bien de la versión 3 de la Licencia, o de
     la GPL2, o cualquier versión posterior.
</p><br /><p>
     Este programa se distribuye con la esperanza de que sea útil,
     pero SIN NINGUNA GARANTÍA, incluso sin la garantía implícita de
     COMERCIABILIDAD o IDONEIDAD PARA UN PROPÓSITO PARTICULAR. Véase el
     GNU General Public License para más detalles.
</p><br /><p>
     Usted debería haber recibido una copia de la Licencia Pública General de GNU
     junto con este programa. Si no, visite http://www.gnu.org/licenses/.
</p><br /><p>
     Puede descargar la version completa de la GPL3 en este enlace: 
     	<a href="http://www.serinformaticos.es/index.php?file=kop804.php">Enlace al texto de la GPL v.3</a>
</p>
<br />
<p>
	 Para mas información puede contactarnos :
</p>
<br />
<p>		Teléfono (+34) 961 19 60 62 - Email	info@serinformaticos.es- MSn:	info@serinformaticos.es - Twitter	@SerInformaticos</p>

<p>		Web:	<a href="http://www.SerInformaticos.es">www.SerInformaticos.es</a></p>
<!-- FIN Contenido HTML -->
<?php // footer
} else{
	print"<h3>No ha iniciado Sesión Correctamente</h3><br />\n";
	print"<br />\n<a href=\"../index.php\" class=\"botonR\">Volver</a><br /><br />\n";
}
include ("$inc/footer.php");
?>
