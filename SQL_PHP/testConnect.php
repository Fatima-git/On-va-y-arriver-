<?php
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

//$sql = 'SELECT * FROM travels';

$sql = "SELECT id, destination,description,price,place FROM fatima.travels";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo  $row["id"]."- ".$row["destination"]."- ".$row["description"]. " " . $row["price"]. " " . $row["place"]. "<br>";
  }
} else {
  echo "0 results";
}
//$conn->close();

echo "<br>";

$sql = "SELECT fatima.panier.id, fatima.travels.destination,fatima.clients.nom,fatima.panier.id_clients,fatima.panier.id_travels, fatima.panier.qté,fatima.travels.price,(fatima.panier.qté*fatima.travels.price) as total 
FROM fatima.panier,fatima.travels,fatima.clients 
WHERE fatima.clients.id=fatima.panier.id_clients 
AND fatima.travels.id=fatima.panier.id_travels;";
$result = $conn->query($sql);


if ($result->num_rows > 0) 
{
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo  $row["id"]."- ".$row["destination"]."- ". $row["price"]. " " . $row["nom"]. " " . $row["qté"]. " " . $row["id_clients"]. " " . $row["id_travels"]. " " . $row["total"]. "<br>";
  }
} 
    else 
    {
    echo "0 results";
    }
$conn->close();


//$req = mysql_query($sql);


//$data = mysql_fetch_array($req);

?>