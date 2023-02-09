

<?php
function  showdate()
{



if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $connection=mysqli_connect('localhost','root','','demo');

   /* $query="INSERT INTO login(name,pass)";   this is only to enter the data in the database
    $query.="VALUES ('$username','$password')";*/
    $query="SELECT * FROM login";


    $result=mysqli_query($connection,$query);

   /*      To read the data from the data base    
           
   while($row=mysqli_fetch_row($result))

    {
        print_r($row);
    }*/
    while($row=mysqli_fetch_assoc($result))
                          {
                               $id=$row['id']; // here id is the name that is given in the data base


                               echo "<option value=''>$id</option>";
                              
                          }
    


    


}
   
}






?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sample data sending to database</title>
<link rel="stylesheet" href="style.css">
<script src="demo.js"></script>
</head>
<body>
    <section id="sec">
    <form action="Sample.php" method="post">
        <label for="name">UserName : 
            <input type="text" name="username"  id="user" placeholder="Enter user name"><p id="para">    </p>  </label><br><br>
           
            <label for="name">Password :   
            <input type="password" name="password" id="pass" placeholder="Enter password"> <p id="para1"></p></label><br><br>

            <select name="" id="">
      
            <?php

            
    // update the id from the php we have to write the select tag and select the particular id to update//
                    
                    
                      showdate();




                 ?>
 


            </select><br><br>
          
            <input type="submit" value="Click here!" id="submit" name="submit" onclick="datasubmit()">

            </section>

    </form>


    

</body>
</html>
