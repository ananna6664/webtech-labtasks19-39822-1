
<?php 

 $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
 {  

     if(empty($_POST["id"]))  
     {  
          $error = "<label class='text-danger'>Enter ID</label>";  
     }



      else if (!preg_match("/^[a-zA-Z-' ]*$/",($_POST["name"])))  
      {  
           $error = "<label class='text-danger'>Name,Only use letter.</label>";  
      }
      

      else if(empty($_POST["price"]))  
      {  
           $error = "<label class='text-danger'>Enter Price</label>";  
      }
       
      else  
      {
   $_POST["id"]=true;        
   $_POST["name"]=true;
   $_POST["price"]=true;

      }  
 }
 
 ?> 






 <!DOCTYPE html>  
 <html>  
      <head>  



           <title>Add Products</title> 
           
     </head>  
      <body>  
        

   
           <br />  
           <div class="container" style="width:500px;">  
                <h3 align="">Add Products</h3>                
                
                    <form action="controller/createStudent.php" method="POST" enctype="multipart/form-data">
                   
                     <br />  

                     <label>ID</label>
                     <input type="text" name = "id" class="form-control" placeholder="Enter ID" required /><br />

                     <label>Name</label>  
                     <input type="text" name="name" class="form-control" placeholder="Enter Name" required /><br />  

                     <label>Price</label>
                     <input type="text" name = "price" class="form-control" placeholder="Enter Price" required /><br />

                     
                     
                   

                     <input type="submit" name="addproducts" value="creat" class="btn btn-info" /><br />                      
                     <?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>  

                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>

                </form>  
           </div>  
           <br />  
      </body>  
 </html>  
