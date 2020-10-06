
<?php

echo "<form method=\"POST\" action=\"formulaireSQL_PHP.php\">\n";
    echo "    <input type=\"text\" name=\"titre\" size=\"20\" placeholder=\"Inserer mon titre\" maxlength=\"35\">\n";
    echo "    <input type=\text\" name=\"description\" size=\"20\" placeholder='Inserer votre description' maxlength=\"35\">\n";
    echo "    <input type=\"text\" name=\"image\" size=\"20\" placeholder=\"lien d'une image\" maxlength=\"70\">\n";
    echo "    <input type=\"number\" name=\"prix\" size=\"20\" placeholder=\"prix\" maxlength=\"70\">\n";
    echo "    <input type='submit' name=\"envoi\" value=\"Ajouter\">\n";
    echo "</form>\n";

?>