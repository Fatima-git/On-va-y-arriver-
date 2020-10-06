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
//echo "Connected successfully";
echo"<br>";

$sql = "INSERT INTO fatima.travels (destination, description, price,place)
VALUES ('London', 'Big Ben', 18000,7)";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>