<?php  
require_once '../model/model.php';


if (isset($_POST['addproducts'])) {

  $data['ID']=$_POST["id"]; 
  $data['Name']=$_POST["name"];
  $data['Price']=$_POST["price"];
   
  if (signup($data)) {
  	echo 'Successfully added!!';
  }
} else {
	echo 'You are not allowed to access this page.';
}

?>