<?php 
include_once 'db_connect.php';



function signup($data){
	$conn = db_conn();


    $sql = "INSERT INTO products(ID, Name, Price)
VALUES (:ID, :Name, :Price)";
    try{
        $stmt = $conn->prepare($sql);
        $stmt->execute([

  ':ID' => $data['ID'],
  ':Name' => $data['Name'],
  ':Price' => $data['Price'],

        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

