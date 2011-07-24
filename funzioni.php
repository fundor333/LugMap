<?php

# l'array utilizza come chiave la richiesta in input
# (utilizzata anche per identificare il file da leggere)
# e come valore la stringa da visualizzare
$elenco_regioni = array (
  "abruzzo"    => "Abruzzo",
  "basilicata" => "Basilicata",
  "calabria"   => "Calabria",
  "campania"   => "Campania",
  "emilia"     => "Emilia Romagna",
  "friuli"     => "Friuli Venezia Giulia",
  "lazio"      => "Lazio",
  "liguria"    => "Liguria",
  "lombardia"  => "Lombardia",
  "marche"     => "Marche",
  "molise"     => "Molise",
  "piemonte"   => "Piemonte",
  "puglia"     => "Puglia",
  "sardegna"   => "Sardegna",
  "sicilia"    => "Sicilia",
  "toscana"    => "Toscana",
  "trentino"   => "Trentino Alto Adige",
  "umbria"     => "Umbria",
  "valle"      => "Valle d'Aosta",
  "veneto"     => "Veneto",
  "Italia"     => "Italia"
);

function lugheader ($title, $keywords, $extracss = null, $extrajs = null) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="language" content="italian" />
  <meta name="keywords" content="Linux, GNU/Linux, software libero, free software, LUG, Linux Users Group, <?php echo $keywords; ?>" />

  <link href="/css/main.css" rel="stylesheet" type="text/css" />

  <?php
    if ($extracss != null)
      foreach ($extracss as $e) {
        ?>
        <link href="<?php echo $e; ?>" rel="stylesheet" type="text/css" />
        <?php
      }

    if ($extrajs != null)
      foreach ($extrajs as $e) {
        ?>
        <script type="text/javascript" src="<?php echo $e; ?>"></script>
        <?php
      }
  ?>

  <title><?php echo $title; ?></title>
</head>
<!-- <a href="http://lugbs.linux.it/plugins/bond.php">select</a> -->
<body>

<div id="header">
  <img src="/immagini/ils_logo.png" alt="Italian Linux Society" />
  <h2 id="title"><?php echo $title; ?></h2>
</div>

<?php
}

function lugfooter () {
?>
<div id="footer">
		<p class="helpMessage">Aiutaci a mantenere la LugMap aggiornata!</p>
		<p class="helpMessage">
		Segnalaci nuovi gruppi, cos&igrave; come errori ed omissioni, scrivendo
		alla <a href="http://lists.linux.it/listinfo/lugmap">mailing list pubblica</a>,
		oppure contattando direttamente Andrea Gelmini (telefonicamente al
		<a class=generalink" href="tel:328-72-96-628">328-72-96-628</a>, via
		<a class="generalink" href="mailto:andrea.gelmini@lugbs.linux.it">mail</a>, o attraverso
		<a class="generalink" href="http://www.facebook.com/andrea.gelmini">Facebook</a>.)<br>
		Puoi partecipare direttamente, sia alla stesura del codice che del database, sfruttando il
		<a class="generalink" href="http://github.com/Gelma/LugMap">repository GitHub</a>.
		Per saperne di pi&ugrave; &egrave; disponibile la
		<a class="generalink" href="https://github.com/Gelma/LugMap/tree/docs">Guida Intergalattica alla LugMap</a>.
		<p class="helpMessage">
		Te ne saremo eternamente grati!
		</p>
</div>
<!-- Piwik -->
<script type="text/javascript">
var pkBaseURL = (("https:" == document.location.protocol) ? "https://pergamena.lugbs.linux.it/" : "http://pergamena.lugbs.linux.it/");
document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
</script><script type="text/javascript">
try {
var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 1);
piwikTracker.trackPageView();
piwikTracker.enableLinkTracking();
} catch( err ) {}
</script><noscript><p><img src="http://pergamena.lugbs.linux.it/piwik.php?idsite=1" style="border:0" alt="" /></p></noscript>
<!-- End Piwik Tracking Code -->
</body>
</html>

<?php
}

function ultimo_aggiornamento () {
?>
   <a id="csvLink" href="http://github.com/Gelma/LugMap/commits/lugmap.linux.it">&raquo;Ultimo aggiornamento del <?php print file_get_contents('.ultimo_commit') ?></a>

<?php
}

?>
