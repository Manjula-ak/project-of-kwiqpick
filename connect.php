
<?php

$conn_string = "host=192.168.1.100 port=5432 dbname=PHPTEST user=postgres password=admindb";
$dbconn4 = pg_connect($conn_string);
//connect to a database named "test" on the host "sheep" with a username and password
$query = "SELECT name FROM tbl_test WHERE id = 1;";
//$query = "SELECT name FROM tbl_test WHERE Id = 2;"
//$query = "SELECT name FROM tbl_test WHERE Id = 3;"
$result = pg_query( $dbconn4, $query);
echo "the name is :" .$result. "\n";
$array = pg_fetch_all($result);
 print_r($array);
pg_close($dbconn4);
?>
