<?php
// On commence par récupérer les champs

if(isset($_POST['titre']))      $titre=$_POST['titre'];
else      $titre="";

if(isset($_POST['description']))      $description=$_POST['description'];
else      $description="";

if(isset($_POST['image']))      $image=$_POST['image'];
else      $image="";

if(isset($_POST['prix']))      $prix=$_POST['prix'];
else      $prix="";


// On vérifie si les champs sont vides
if(empty($titre) OR empty($description) OR empty($image) OR empty($prix))
    {
    echo '<font color="red">Attention, seul le champs <b>ICQ</b> peut rester vide !</font>';
    }

// Aucun champ n'est vide, on peut enregistrer dans la table
else     
    {
       // connexion à la base
       $servername = "10.115.49.73";
       $username = "fatima";
       $password = "fatima" ;
       
       // Create connection
       $conn = mysqli_connect($servername, $username, $password);
       
       // Check connection
       if (!$conn) {
         die("Connection failed: " . mysqli_connect_error());
       }
       echo "Connected successfully";
       echo"<br>";
    }
    // on écrit la requête sql
    
    $sql = "INSERT INTO fatima.formulaire(titre,description,image,prix) 
    VALUES('$titre','$description','$image','$prix')";
    
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      
      mysqli_close($conn);
?>