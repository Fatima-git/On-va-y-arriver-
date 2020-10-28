<?php
    
$servername = "10.115.49.73";
$username = "maxime";
$password = "maxime";
$dbname="maxime"; 

try 
{

 $conn = new PDO("mysql:host=$servername;dbname", $username, $password);
 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
 echo "Connected successfully";       
 echo "<br>";
}
catch (Exception $e)
{
    echo "Connection failed: " . $e->getMessage();
    echo "erreur";
        die('Erreur : ' . $e->getMessage());
}


function executeSQL( $req )
{
	$result = false;
	if ( $req != "" )
	{
		$servername = "10.115.49.73";
		$username = "maxime";
		$password = "maxime";

		// Create connection
		$conn = new mysqli($servername, $username, $password);

		// Check connection
		if ($conn->connect_error) 
		{
		  die("Connection failed: " . $conn->connect_error);
		}


		//echo $req."<br>";
		$result = $conn->query( $req );
		if ($conn->error) 
		{
		  die("erreur insert: " . $conn->error);
		}

		$conn->close();
	}
	return $result;
}






        //create table resultats  ( id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,maj datetime, id_user int, id_competence int, result int);   
?>

    
    <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
</body>
</html>
<h1>Utilisateur </h1>
<h2>Compétences</h2>
<?php
$req = "SELECT * FROM maxime.competences;"; 
		$result = executeSQL( $req );
		echo "<select name=\"competences\" id=\"matieres\">\n";
		while ( $row = $result->fetch_assoc() )
			echo "<option value=\"".$row[ 'matieres' ]."\">".$row[ 'matieres' ]."</option>\n";
		echo "</select><br>\n";
		?>
<input id="number" type="number" value="" name="HTML" min="0" max="10"> 

