<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reading information from database</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
    <form action="Reading_infodb.php" method="post">
    <label for="username">UserName : </label>
    <input type="text" name="user" placeholder="Enter username"><br><br>
    <label for="password">password : </label>
    <input type="password" name="pass" placeholder="Enter password"><br><br>
    <input type="submit" name="submit" value="click me!">
    

 </form>   
</body>
</html>
<?php
if(isset($_POST['submit']))
{
    $username=$_POST['user'];
    $password=$_POST['pass'];
    $connect=mysqli_connect('localhost','root','','demo');

$query="SELECT * FROM login";

$result=mysqli_query($connect,$query);


while($row=mysqli_fetch_row($result))
{
    print_r($row);
}
   
   

    

}
?>

