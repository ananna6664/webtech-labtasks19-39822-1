<?php

require_once '../model/db_connect.php';
$conn = db_conn();

$sql = "SELECT * FROM user where Email= :email AND Password= :password ";
$statement =$conn->prepare($sql);
$statement->execute(
array(
'email' => $_POST['email'],
'password'=> $_POST['password']
)
);

$count =$statement->rowCount();

if($count>0)
{ 

echo "seccessfull";
  header( 'Location:../homepage.php');
    
}
else
{
    echo "Incorrect Email or Password";

}



?>







