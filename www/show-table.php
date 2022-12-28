<br>
<br>
<h1> </h1>
<br>

<?php


   $host = 'moe-mysql-app';

if(!empty($_ENV['MYSQL_USER']))
   $user = $_ENV['MYSQL_USER'];
else
   $user = 'youssef';

if(!empty($_ENV['MYSQL_PASSWORD']))
   $pass = $_ENV['MYSQL_PASSWORD'];
else
   $pass = 'root';

if(!empty($_ENV['MYSQL_DB']))
   $db_name = $_ENV['MYSQL_DB'];
else
   $db_name = 'datadocker';

echo "Connecting to Database: $host $user $pass $db_name";
echo "<br><br>";

//$conn = new mysqli('moe-mysql-app', 'achraf', 'root', 'datadocker');
$conn =mysqli_connect("moe-mysql-app","achraf","root","datadocker");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected to MySQL successfully!";
echo "<br><br>";

$res = $conn->query("Select ITEM_NAME, ITEM_DESC, ITEM_ONHAND from MOE_ITEM_T");

for ($row_no = 0; $row_no < $res->num_rows; $row_no++) {
    $res->data_seek($row_no);
    $row = $res->fetch_assoc();
    echo " Item Name = " . $row['ITEM_NAME'] . " Item Description = " . $row['ITEM_DESC'] . " Item Onhand = " . $row['ITEM_ONHAND'];
    echo "<br>";
}


?>
