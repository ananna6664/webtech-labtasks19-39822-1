<?php 
function db_conn()
{
    $dbhost ="localhost";
    $username = "root";
    $password = "";
    $dbname="product_db";
    

    try {
        $dsn= "mysql:host=".$dbhost.";dbname=".$dbname;

        $conn = new PDO($dsn, $username, $password);
        echo "connection successful";
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       
       
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    return $conn;
}
