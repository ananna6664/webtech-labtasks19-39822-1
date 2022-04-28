<html>
<head>

</head>
<body>

<h2 style="text-align:center;">User LoGin</h2></br>







<?php                   
    setcookie("Cname",'Login',time()+100000,"/");                           
$emailErr =  $passErr = "";
$email = $password = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {


  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
   

  if(empty($_POST["password"])){
 
    $passErr = "password is required";
  }

  else {
    $password = test_input($_POST["password"]);
  }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;



  }

  ?>

  
  <?php
  session_start();
  $error='';
$message='';

if(isset($_POST["submit"]))  
 {  
    


$uemail=$_POST["email"];
$upass=$_POST["password"];

































 /*require_once 'db_connect.php';
    $conn = db_conn();
    $selectQuery = "SELECT * FROM  user ";

                                 
      foreach($selectQuery as list("Name"=>$name,"Email"=>$mail,"Address"=>$add,"PN"=>$pn,"Gender"=>$gn,"Dob"=>$dob,"Password"=>$pass))  
                          {  
                            

                                 
                          
                    
                          if($_POST["email"] == $mail && $_POST["password"] == $pass)

                         {

                         header( 'Location: UserHome.php');

                         $_SESSION['uname']=  $name; 
                         $_SESSION['uemail']=  $mail; 
                         $_SESSION['uadd']=  $add; 
                         $_SESSION['upn']=  $pn; 
                         $_SESSION['upass']=  $pass; 
                         $_SESSION['udob']=  $dob;   
                         $_SESSION['ugn']=  $gn;                           
                      

                         }
                         else{

                       $error = "Incorrect user email or password"; 

                        }

                     }





                        $_SESSION['uname']=  $Name; 
                         $_SESSION['uemail']=  $Email; 
                         $_SESSION['uadd']=  $Address; 
                         $_SESSION['upn']=  $PN; 
                       
                          $_SESSION['ugn']=  $Gender;
                         $_SESSION['udob']=  $Dob;   
                            $_SESSION['upass']=$Password; 
                            */                         
              
 }
               ?> 


<?php 
$data = // query to retrieve data from database
return response()->json($data); // return data in json format as it will be received by ajax
?>




 <form style="text-align:center;" action="controller/login.php" method="POST" enctype="multipart/form-data">
 

 <div class="container" style="width:400px;"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  

    Email: <input type="text" name="email" class="form-control" placeholder="Enter your Email"required>
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  
  Password: <input type="password" name="password" class="form-control" placeholder="Enter your Password"required>
  <span class="error">* <?php echo $passErr;?></span>
 
  <br><br>


 
    <input  type="submit" name="submit" value="Submit" class="btn btn-info" >    <a href="UserPassForget.php">forget password</a>


                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>

                     <?php   
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>
</form>



</div>


<script>
    $.ajax({
        type:'get', // or you can use post method also
        url: 'page.php',
        dataType: 'json',
        beforeSend: function () {
            $("body").css("cursor", "progress");
        },
        success: function (data) {
            // do your work here
        },
        complete: function (data) {
            $("body").css("cursor", "default");
        }
    });
</script>












</body>
</html>
