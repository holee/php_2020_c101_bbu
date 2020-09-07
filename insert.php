<?php
require("database/database.php");

//$sql = "INSERT INTO account(first_name,last_name,email,password)";
//$sql .= " VALUES('set','sereymony','mony@example.com','password')";
$statement = "INSERT INTO account VALUES(null,'kim','ratana','tola@example1.com','password1',";
$statement .= "'2000-09-05','male')";

if ($connection->exec($statement)) {
    echo "insert successfully.";
} else {
    var_dump($connection->errorInfo()[2]);
}



//$results = $connection->query("SELECT * FROM account");

///echo json_encode(['data' => $results->fetchAll()]);