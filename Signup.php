<?php

include'components/header.php';
include'connection.php';
include'components/Navbar.php';
if(isset($_POST['Signup'])){
    $Firstname=$_POST['firstname'];
    $Lastname=$_POST['lastname'];
    $Email=$_POST['email'];
   
   $Password=$_POST['password'];
   
 
   $sql="INSERT INTO `singup`(`firstname`,`lastname`,`email`,`password`)values('$Firstname','$Lastname','$Email','$Password')";
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
        background: linear-gradient(237deg, rgba(255,0,0,.8), rgba(255,0,0,0) 70.71%),
            linear-gradient(127deg, rgba(0,255,0,.8), rgba(0,255,0,0) 70.71%),
            linear-gradient(336deg, rgba(0,0,255,.8), rgba(0,0,255,0) 70.71%);
        background-repeat:no-repeat;
        background-size:Cover;
        height:110vh;
     } 
     
     
     .signup-form{
        padding:10px;
        border-radius:20px;
        margin:80px 0px;
        text-align:Center
        
        /* width:50%; */
        /* background-color:white;/ */
        height:auto;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    
    }
    .signup-form h1{
        padding:15px 20px;
        font-size:30px;
        text-transform:Capitalize;
        /* margin-top:20px; */
        color:White;
        text-align:center;


    }
    ::placeholder{
     /* margin-top:50px; */
     font-size:25px;
     color:white;
    }
    input{
        /* text-align:Center; */
        border:none;
        outline:none;
        background:none;
        border-bottom:2px solid white;
        width:90%;
        /* margin-top:-20px; */
        margin:10px 20px;
        padding:10px 20px;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 0px 4px;
   
    }
    .text-sign{
        text-align:center;
        padding:10px;
        margin-left:100px;
        margin-top:20px;
        font-size:20px;
    }
    .btn{
        width:50%;
        align-items:center;
       text-align:Center;
       font-size:25px;
       margin-left:100px;
       margin-top:10px;
    }
   .signup-form a{
        font-size:25px;
        color:White;
        margin:10px;
    }
    </style>
<div class="container">

    <div class="row">
     <div class="col-md-6 mx-auto">
      
        <form action="Signup.php"method="POST"class="signup-form">
        <h1>
            Signup
        </h1>
   <input type="text"name="firstname"placeholder="Firstname">
   <input type="text"name="lastname"placeholder="Lastname">
       
   <input type="email"name="email"placeholder="Email"><br>
        <input type="password"name="password"placeholder="Password">
    <br>  
    <span class="text-sign">Already a member?<a href="Login.php"class="sign">Log In</a></span> <br>
     <button class="btn btn-dark btn"value="Signup"name="Signup">Sign up</button><br>
        
</form>
</div>
   
</div>
</div>
<?php
include'components/footer.php';
?>