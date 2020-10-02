<!-- Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo con la relativa lunghezza e sostituire la badword passata in GET con tre *** -->

<?php
$badword = $_GET["badword"];
$paragrafo = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
$posizione_badword = strpos($paragrafo, $badword);
$conteggio_parole = explode(" ", $paragrafo);
$nuovo_paragrafo = str_replace($badword, "***", $paragrafo);
$lunghezza_paragrafo = strlen($nuovo_paragrafo);
var_dump($conteggio_parole);
 ?>






<h1><?php echo $nuovo_paragrafo?></h1>
<h2>Posizione della badword: <?php echo $posizione_badword ?></h2>
<h2>Lunghezza paragrafo: <?php echo $lunghezza_paragrafo ?></h2>
