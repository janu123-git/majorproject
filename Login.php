<?php

include'components/header.php';
include'connection.php';
include'components/Navbar.php';
if(isset($_POST['login'])){
    $Email=$_POST['email'];
   
   $Password=$_POST['password'];
   
 
   $sql="INSERT INTO `Logins`(`Email`,`Password`)values('$Email','$Password')";
 $result=mysqli_query($con,$sql);
 if($result){
 echo"data is inserted on your database";
 }else{
    echo"data is not inserted";
 }
 }
 ?>
<style>
    body{
        background: linear-gradient(#e66465, #9198e5);
        background-repeat:no-repeat;
        background-size:Cover;
        height:100vh;
     } 
     
     
     .login-form{
        /* padding:2; */
        border-radius:20px;
        margin:80px 0px;
        text-align:Center;
        /* width:50%; */
        /* background-color:white;/ */
        height:auto;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    
    }
    .login-form h1{
        padding:15px 20px;
        font-size:30px;
        text-transform:Capitalize;
        /* margin-top:20px; */
        color:White;

    }
    input{
      padding:10px 20px;
      width:90%;
      margin:10px 0px;
      font-size:20px;
      text-transform:capitalize;
      border-radius:10px;
      outline:none;
      border:none;
      /* box-shadow:3px 5px 10px gray; */
      box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    }
    input:hover{
        /* box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset; */
    }
    .btn{
        font-size:25px;
        margin:10px;
        width:90%;
    }
    .login-form .forget{
        text-decoration:none;
        color:white;
        font-size:20px;
        text-transform:Capitalize;
        /* padding:10px; */
        margin-bottom:10px;
        float:left;
        margin-left:30px;
    }
    </style>
<div class="container">

    <div class="row">
     <div class="col-md-6 mx-auto">
      
        <form action="Login.php"method="POST"class="login-form">
        <h1>
            login form
        </h1>
        <input type="email"name="email"placeholder="Enter your email"><br>
        <input type="password"name="password"placeholder="Enter your password">
        <a  href="" class="forget">forget password?</a>   
        <button class="btn btn-primary btn"value="login"name="login">Login</button><br>
         <span>Not a member?<a href="Signup.php">Signup</a></span>
</form>
</div>
   
</div>
</div>
<?php
include'components/footer.php';
?>