<?php
// on se connecte à notre base
$base = mysql_connect('10.115.49.73', 'fatima', 'fatima');
mysql_select_db ('ma_base', $base) ;

// lancement de la requete
$sql = 'SELECT telephone FROM liste_proprietaire WHERE nom = "LA GLOBULE"';

// on lance la requête (mysql_query) et on impose un message d'erreur si la requête ne se passe pas bien (or die)
$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());

// on recupere le resultat sous forme d'un tableau
$data = mysql_fetch_array($req);

// on libère l'espace mémoire alloué pour cette interrogation de la base
mysql_free_result ($req);
mysql_close ();

?>