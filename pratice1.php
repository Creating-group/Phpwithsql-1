
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is a pratice application</title>
    <style>

*{
    color: red;
}
#text
{
    color: black;
}
input,button,a{
   
    color: black;

}

</style>
</head>
<body>
    <form action ="pratice1.php"  method="post">
    <label for="username" id="text">UserName : 
        <input type="text" name="username" id="username" pattern="[A-Za-z]{0,12}" title="Numbers are not allowed and atleast one uppercase or lowercase should be present" maxlength="12" placeholder="Enter username"  required >
    </label> *<br><br>
    <label for="mail" id="text" > Mail ID: 
        <input type="mail" name="mail" id="mail"  maxlength="20"  placeholder="Enter E-mail" required>
    </label> *<br><br>
    <label for="phone" id="text"> Mobile Number: 
        <input type="text" name="mobile" id="mobile"  maxlength="10"  pattern="[0-9]{10}" title="Only numbers are allowed"placeholder="Enter mobile number" required > 
    </label> *<br><br>
    <label for="password" id="text"> Password: 
        <input type="password" name="password" id="pass"  maxlength="15"  maxlenght="12" minlength="8" pattern="(?=.*[a-z])(?=.*[A-Z]).{9,}" placeholder="Enter password" required > 
    </label> *<br><br>
     <input type="submit" name="submit"  id="text" value="Click Me!">
     <button id="buton" name="button" title="click here to navigate to get data and make updation using id"><a href="Try_update.php" style="text-decoration:none;">Update data!</a></button>
    </form>

    <?php
if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $mail=$_POST['mail'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $connect=mysqli_connect('localhost','root','','demo');
    if(!$connect)
    {
        die(" db connection failed");
    }

    $query="INSERT INTO pratice(name,mail,number,password)";
    $query.="VALUES('$username','$mail','$mobile', '$password')";  
    $query1="SELECT id FROM pratice";
    $result=mysqli_query($connect,$query);
    $result1=mysqli_query($connect,$query1);
    while($row=mysqli_fetch_assoc($result1))
    {
        $id=$row['id'];
    }
    echo"<p style='color:red;'>Your response has been submitted successfully and ID = ".$id."<br><br> please remember your ID for further needs </P>";
    

    
    
}

?>  
</body>

</html>
