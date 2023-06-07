<?php
include "components/header.php";
include 'components/Navbar.php';
?>
<style>
  .box{
    background-color: rgb(240, 237, 230);
    /* margin:10px  20px; */
    border-radius: 10px;
    /* box-shadow: 3px 5px 10px gray; */
       transition: 0.5s;
       cursor: pointer;
       height:auto;
}
.box h1{
    text-align: center;
    text-transform: capitalize;
    margin: 10px 0px;
    font-size: 37px;
    letter-spacing: 1px;
}
.box:hover{
    box-shadow: 3px 5px 10px gray;
}
.box p{
    letter-spacing: 2px;
  
}
  </style>
    <section class="about-section  py-4">
        <h2 class="text-center m-4 ">About</h2>

        <!-- vision mission and goal in about page -->
        <div class="container ">
          <!-- <div class="row"> -->
    
          
          
          <h1 class="text-center my-4">Vision,Mission and Goal</h1>
          <div class="row ">
            <div class="col-md-3 mx-auto box">
               <h1>the visiion</h1>
               <p>The vision of the Andhikhola Polytechnic Institute is to be a premier engineering education institution at par with world-class role models.</p>
</div>

<div class="col-md-3 mx-auto box">
               <h1>the mission</h1>
               <p>The Mission of Andhikhola Polytechnic Institute is to provide quality engineering education and research in the frontier engineering areas relevant primarily to the nation.</p>
</div>

<div class="col-md-3 mx-auto box">
               <h1>the goals</h1>
               <p>Andhikhola polytechnic Institute  has the following goals with measurable outcomes in the areas of research, educational, and resource excellence:
               Enhance Academic Excellence to ensure 80% employability of Graduates Providing Quality Education and Training by 2023. (सन् २०२३ सम्ममा ८०%
</p>
</div>
</div>
          </div>
          <div class="container">
          <div class="row ">
            <div class="col-md-12">
              <img class="img-fluid my-3" src="images/school.jpg"width="1000px" >
            </div>
            <div class="col-md-12">
                <img class="img-fluid my-3" src="images/images3.jpg"width="1000px" >
              </div>
            
          
              <div class="col-md-12">
              <p>Aandhikhola Polytechic is the Council for Technical Education and
                Vocational Training (CTEVT) constituted institutions.
                Where education is the basis of the economic development of the
                country, technical education is the main basis. The Polytechnic
                established in 2075 is located at Waling Municipality – 13,
                Syangja. The establishment of this school is aimed at developing
                the skills of Nepali youth entering the labor market from the
                surrounding areas of Syangja district through technical education
                and vocational training programs.
                The three-year Diploma in Information Technology  program is
                being conducted at the school, which started with a short-term
                (390 hours) training programs based on the curriculum of the
                Council for Technical Education and Vocational Training at five
                different local levels in Syangja district. Other short- and long-term
                programs based on local demand will be added in the future.
                Preserving the environment for the next generation and using
                information technology in educational activities are the challenges
                of the present generation. Our specialty is to make full use of
                technology in teaching and learning activities to turn these
                challenges into opportunities.</p>
                <button class="btn btn-primary text-capitalize">learn more</button>
              </div>
          </div>
      
        </div>
      </section>
      <?php
include 'components/footer.php';
?>

    