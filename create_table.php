<?php
  // Vérifie qu'il provient d'un formulaire
  //CREATE TABLE xavier.form01 ( id INT PRIMARY KEY NOT NULL AUTO_INCREMENT, nom VARCHAR(255), email VARCHAR(255) );

function SQLQuerry( $req )
{
    $servername = "10.115.49.73";
    $username = "nicolas";
    $password = "nicolas";

    // Create connection
    $conn = new mysqli($servername, $username, $password);

    // Check connection
    if ($conn->connect_error) 
    {
      die("Connection failed: " . $conn->connect_error);
    }

    echo $req."<br>";
    $result = $conn->query( $req ); 
    $conn->close();
}




  if ( $_POST ) 
  {
    $name  = ""; 
    $email = ""; 

    //if ( isset( $_POST["Name"])  )
      $name = $_POST["Name"];

    //if ( isset( $_POST["Email"])  )
      $email = $_POST["Email"];

    if ( $name == "" ){
      die("S'il vous plaît entrez votre nom");
    }
    if ( $email == "" || !filter_var($email, FILTER_VALIDATE_EMAIL))
    {
      die("S'il vous plaît entrez votre adresse e-mail");
    }

    print "Salut " . $name . "!, votre adresse e-mail est ". $email;


    $req = "INSERT INTO nicolas.formulaire (nom, email ) VALUES ( '$name', '$email' );";
    SQLQuerry( $req );
  }
?>

<html>
  <head>
    <title>Formulaire en PHP/MySQL</title>
  </head>
  <body>
    <form method="post" action="create_table.php">
      <input type="text" name="Name" placeholder="Entrez votre nom" /><br />
      <input type="email" name="Email" placeholder="Entrez votre Email" /><br />
      <input type="submit" value="Submit" />
    </form>
  </body>
</html>
