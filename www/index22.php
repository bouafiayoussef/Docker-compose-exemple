<?php
   echo "This is a PHP-MySQL demo application - Created by achraf koubaa.";
   echo "<br>";
   echo "Thanks for every one...";
$mysqli = new mysqli('moe-mysql-app', 'achraf', 'root', 'boutique');

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}else{
     echo "no Failed to connect to MySQL: ";
}

// Perform some queries
$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($mysqli->query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $mysqli->error;
}
?>
<center> <h1>achraf koubaa</h1>   </center>
<center> <a href="./shopifull/index.php"> check conect with database </a>   </center>
    
