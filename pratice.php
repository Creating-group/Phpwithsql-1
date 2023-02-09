<?php
if(isset($_POST['submit']))
{
    $username=$_POST['user'];
    $password=$_POST['pass'];
    $mobilenumber=$_POST['mobile'];

    $connect=mysqli_connect('localhost','root','','demo');

     //$query="INSERT INTO pratice(username,password,mobile)";
    //$query.="VALUES('$username','$password','$mobilenumber')";  
     $query="SELECT * FROM pratice";
    $result=mysqli_query($connect,$query);

    while($row=mysqli_fetch_row($result))
    {
        print_r($row);
    }





    }











?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratice with new data base</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section id="sec">
    <form action="pratice.php"  method="post">
        <h1> Registration</h1>
    <label for="username">UserName :
        <input type="text" name="user" id="user" placeholder="Please enter username" required>
    </label> <br><br>
    <label for="password">Password :
        <input type="password" name="pass" id="pass" placeholder="Please enter password" pattern="(?=.*[a-z])(?=.*[A-Z]).{9}"  title="password should have atleast one uppercase and one lowercase and only 9 letters" required>
    </label> <br><br>
    <label for="mobile">Mobile Number :
        <input type="text" placeholder="Enter mobile number" name="mobile" id="date"  title="Please enter valid mobile number " maxlength="10" minlength="10" pattern="[0-9]{10}" style="width: 50%;"  required>
    </label> <br><br>
    <input type="submit" name="submit" id="submit" value="Click Here!">









    </form>
    </section>
</body>
</html>