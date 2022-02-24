<?php
   $newfilename = "newfilename";

   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

      $expensions= array("jpeg","jpg","png");
      if(file_exists($file_name)) {
        echo "Sorry, file already exists.";
        }
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }

      if($file_size > 4097152){
         $errors[]='File size must be excately 4 MB';
      }

      if(empty($errors)==true){
        move_uploaded_file($file_tmp,"images/".$newfilename.".".$file_ext);
        echo "Success";
        echo "<script>window.close();</script>";

      }

      else{
         print_r($errors);
      }
   }
?>
<html>
   <body>

      <form  action="" method="POST" enctype="multipart/form-data">
      PROFILE PICTURE:<br>
<input type="picture" name="profilepic"><span id="profilepic" class="required"></span>
<br>
         <input type="file" name="image" /> <br>
         <input type="submit"/>
      </form>

   </body>
</html>