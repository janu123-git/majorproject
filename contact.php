
<?php
include 'components/header.php';

include 'connection.php';
include 'components/Navbar.php';




if(isset($_POST['submit'])){
   $firstname=$_POST['firstname'];
  $lastname=$_POST['lastname'];
  
  $email=$_POST['email'];

  $sql="INSERT INTO `teams`(`firstname`,`lastname`,`email`)values('$firstname','$lastname','$email')";
$result=mysqli_query($con,$sql);
if($result){
echo"data is inserted on your database";
}else{
   echo"data is not inserted";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet"href="style1.css">
    
    <title>Document</title>
</head>
<body>


   <div class="container">
    <div class="container-center">
    <h1>registation form</h1>
    <p>please fill up the form</p>
    <form action="contact.php"method="POST">
        <input type="name"name="firstname"placeholder="enter firstname">
        <input type="name"name="lastname"placeholder="enter lastname">

        <input type="email"name="email"placeholder="enter email">
    <button value="submit"name="submit">submit</button>
    </div>
</div>

<?php 
include 'components/footer.php';
?>
<!-- </body> -->