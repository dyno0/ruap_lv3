<?php
$host = "dbrkic1-mysqldbserver.mysql.database.azure.com";
$user = "dbrkic@dbrkic1-mysqldbserver";
$pwd = "ayylmao_1";
$db = "dbrkicdb";

//Database=localdb;Data Source=127.0.0.1:55256;User Id=azure;Password=6#vWHD_$
// Connect to database.
try {
$conn = new PDO( "mysql:host=$host;dbname=$db", $user, $pwd);
$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch(Exception $e){
die(var_dump($e));
}

$sql_create = "CREATE TABLE registration_tbl(id INT NOT NULL
AUTO_INCREMENT, PRIMARY KEY(id), name VARCHAR(30), email
VARCHAR(30), date DATE);
";

$stmt = $conn->prepare($sql_create);

$stmt->execute();

?>