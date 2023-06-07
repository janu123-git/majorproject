<?php
include 'components/header.php';
include 'components/Navbar.php';

?>
<style>
    .It-objective {
    position: relative;
    margin: 20px;
}

.It-objective h1::after{
    content:'';
    width: 0%;
    height: 5px;
    margin: 20px auto;
    background-color: red;
    position: absolute;
    top: 5%;
    left: 40%;
    transition: 0.5s;
}
.It-objective h1:hover::after{
    width: 20%;
    cursor: pointer;

}
.obj1{
    background: antiquewhite;;
    padding:10px;
    text-align:Center;
    margin:15px 20px;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 10px;
    
}
.obj1 h2{
    text-transform:Capitalize;
}
    </style>

    <div class="container">
        <div class="IT-section">
            <!-- INTRODUCTION of IT in our college -->
            <div class="container">
            <div class="row">
                <div class="col-md-12">
           
                <img src="images/ITimg.jpg"class="img-fluid my-5"width="1000px">
           
        </div>
            <div class="ITMain-Section">
                <h4 class="mt-1">Diploma in Information Technology</h4>
           <h2 class="m-3 text-center">INTRODUCTION</h2>
           <p>Information Technology (IT) is emerging field in the engineering and technology sector. Many people in the developed countries, developing  countries and under developed countries have been given emphasis for the broader application of Information and Communication Technology (ICT).

 <br><br>         This field has been helping the world for the socio-economic development and it has been creating jobs opportunities both in public and private sectors as well as has been creating self-employment opportunities immensely. IT jobs are the top most earning job on global market and knowledge base industries are the new destination of economic growth.
            
           <br><br> This curriculum is designed with the purpose of producing middle level technical workforce equipped with knowledge and skills related to the areas of IT so as to meet the demand of such workforce in the country to contribute in the national streamline of poverty reduction of our country Nepal. This skills
            and knowledge included in this curriculum will be successful to deliver the individual needs and the needs in the field of IT.
            
            </p>
            </div>
        </div>
    </div>

    <!-- objective of IT engineering -->
    <div class="It-objective">
        <h1 class="text-center ">Objective</h1>
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="obj1">
                    <h2>competent technical workforce</h1>
               <p>To produce middle level competent technical <br>workforce/human resources that could
               <br> provide services to the public and private organizations in the field of IT.</p>
                </div>
                <div class="obj1">
                    <h2>competent technical workforce</h1>
               <p>To produce middle level competent technical <br>workforce/human resources that could
               <br> provide services to the public and private organizations in the field of IT.</p>
                </div>
                <div class="obj1">
                    <h2>competent technical workforce</h1>
               <p>To produce middle level competent technical <br>workforce/human resources that could
               <br> provide services to the public and private organizations in the field of IT.</p>
                </div>
                <div class="obj1">
                    <h2>competent technical workforce</h1>
               <p>To produce middle level competent technical <br>workforce/human resources that could
               <br> provide services to the public and private organizations in the field of IT.</p>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
    </div>
  <?php 
    include 'components/footer.php';
    ?>
