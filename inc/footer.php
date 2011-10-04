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
<?php
print mysql_error();
// cierra conexion
mysql_close($enlace);

// instalacion y licencia validada
/*
if ( $validada == '0' ){
        $valida = "No";
} else{
        $valida = "Si";
}
*/

?>
  <div class="footer">
    <div class="footer_resize">
      <p class="lf">&copy; Copyright 2011 <a href="http://www.SerInformaticos.es">SerInformaticos</a>. </p>
      <p class="rf">Idea, Diseño y Desarrollo por <a href="http://www.SerInformaticos.es">SerInformaticos</a></p>
      <div class="clr"></div>

<!--	  <p class="lf">Versión: <?php echo $version ;?> // Fecha Validación: <?php print $validada_fecha; ?>  // Instalación Valida: <?php echo $valida; ?></p> -->

      <div class="clr"></div>
    </div>
    <div class="clr"></div>
  </div>
</div>
<!-- Piwik -->
<script type="text/javascript">
var pkBaseURL = (("https:" == document.location.protocol) ? "https://www.serinformaticos.es/piwik/" : "http://www.serinformaticos.es/piwik/");
document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
</script><script type="text/javascript">
try {
var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 9);
piwikTracker.trackPageView();
piwikTracker.enableLinkTracking();
} catch( err ) {}
</script><noscript><p><img src="http://www.serinformaticos.es/piwik/piwik.php?idsite=9" style="border:0" alt="" /></p></noscript>
<!-- End Piwik Tracking Code -->
</body>
</html>
