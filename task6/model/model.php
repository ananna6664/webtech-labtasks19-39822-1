<?php 

require_once 'db_connect.php';



function signup($data){
	$conn = db_conn();


    
    $sql = "INSERT INTO user(Name, Email, Address, PN, Gender,Dob ,Password)
VALUES (:Name, :Email, :Address, :PN,:Gender,:Dob, :Password)";
    try{
        $stmt = $conn->prepare($sql);
        $stmt->execute([

  ':Name' => $data['Name'],
  ':Email' => $data['Email'],
  ':Address' => $data['Address'],
   ':PN' =>$data['PN'],
  ':Gender' => $data['Gender'],
  ':Dob' => $data['Dob'],
':Password' => $data['Password'],

        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}





function searchUser($email){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `user` WHERE Email LIKE '%$email%'";

    
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}







