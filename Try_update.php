

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To update the data in the database</title>
</head>
<body>
    <section id="sec" style="text-align: center;">
    <form action="Try_update.php" method="post">
    <label for="select">  Enter the id to getdata: </label>
    <input type="text" placeholder="Please enter the id number" name="test" pattern="[0-9]{1,9}" title="only numbers are allowed" required ><br><br> 
    <!--<select id="">
 
    
</select>  -->

    <input type="submit" value="click here!" name="submit" style="margin-right: 10%;" onclick="getdata()">
    <p style="color: red;">
    <?php

function getdata()
{
if(isset($_POST['submit']))
{
    $id=$_POST['test'];

    $connection=mysqli_connect('localhost','root','','demo');

    $query="SELECT id,name,mail,number,password FROM pratice";
    

    $result=mysqli_query($connection,$query);

    while($row=mysqli_fetch_array($result))
    {
        $id1=$row['id'];
    // $id=print"<option value=''>$id1</option><br><br>"; 
        $name=$row['name'];
        $mail=$row['mail'];
        $number=$row['number'];
        $password=$row['password'];
        
        if($id==$id1)
        {
          print_r(" <br>ID = ".$id."<br> NAME = ".$name."<br> MAIL = ".$mail."<br> NUMBER = ".$number."<br> PASSWORD = ".$password."<br><br>");
          
    
        } 
       
    
       
     
    } 

    
    
}


}


   
 getdata()
 
?>
</p>
</form> 
</section>


<section id="sec1" style="text-align: center;">

<form action="Try_update.php" method="post"><br><br>

    <fieldset><legend style="text-align: center;color:green"> Enter the details to update :</legend> <br>
    <label for="id">ID :</label>
    <input type="text" placeholder="Please enter the id number" name="id"   required><br><br>
    <label for="name">UserName :</label>
    <input type="text" placeholder="Please enter username" name="user"  required><br><br>
    <label for="mobile">MobileNumber :</label>
    <input type="text" placeholder="please enter mobile number" name="number"  pattern="[0-9]{10}" maxlength="10" title="only numbers are allowed" required><br><br>
    

    <input type="submit" value="Update data" name="submit1" onclick="return setdata()" > <br>
   <p style="color: red;">
    <?php
    function setdata()
    {
        if(isset($_POST['submit1']))
  {
      $id=$_POST['id'];
      $name=$_POST['user'];
      $mobile=$_POST['number'];

      $connect=mysqli_connect('localhost','root','','demo');

      $query="UPDATE pratice SET name='$name',number='$mobile' WHERE id=$id ";

      $result=mysqli_query($connect,$query);

      if($result)
      {
        echo" data updated successfully";
      }

      

  }

  

    }
    setdata();




?>
</p>
    </fieldset>
    </form> </section>

</body>
</html>



