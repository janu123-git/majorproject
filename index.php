<?php
 include './components/header.php';
 include './components/Navbar.php';


?>


<!-- <div class="container-fluid"> -->
 
<!-- </div> -->
<!-- coursel  -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/img1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption  d-block">
        <h5>welcome to the <span>Andhikhola polytechnic institude</span></h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/images2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption  d-block">
        <h5>welcome to the <span>Andhikhola polytechnic institude</span></h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/school.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption  d-block">
        <h5>welcome to the <span>Andhikhola polytechnic institude</span></h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- about college -->
<section class="about-section  py-4">
  <h2 class="text-center m-4 ">About</h2>
  <div class="container">
    <div class="row ">
      <div class="col-md-6">
        <img class="img-fluid" src="images/images3.jpg"width="500px" >
      </div>
    
        <div class="col-md-6">
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
        <a href="About.php">  <button class="btn btn-primary text-capitalize">learn more</button></a>
        </div>
    </div>

  </div>
</section>
<!-- course section -->
<Section class="course-section">
  <h1 class="text-center ">Courses</h1>
  <div class="courses">
    <div class="container">
    <div class="row my-5">
      <div class="col-md-6">
  
        <div class="card text-center">
          <div class="card-header ">
            Diploma in IT(Information Technology)
          </div>
          <div class="card-body ">
            <img src="images/ITimg.jpg"height="300px"width="100%">
            <div class="">
            <h5 class="card-title m-4">INTRODUCTION</h5>
            <p class="card-text">
              Information technology (IT) is the use of any computers, storage, networking and other physical devices, infrastructure and processes to create, process, store, secure and exchange all forms of electronic data.Diploma In Information Technology (DIT)
 
              INTRODUCTION Information Technology (IT) is emerging field in the engineering and technology sector. Many people in the developed countries, developing </p>
            <a href="IT.php" class="btn btn-primary">view more</a>
          </div>
        </div>
        </div>

        
         
        </div>
        <div class="col-md-6 ">
  
          <div class="card text-center ">
            <div class="card-header ">
              Diploma in civil engineering
            </div>
            <div class="card-body ">
              <img src="images/civil.jpg"height="300px"width="100%">
              <div class="">
              <h5 class="card-title m-4">INTRODUCTION</h5>
              <p class="card-text">
                Civil engineering is responsible for the structural design, construction, and integrity of buildings, bridges, and buildings of industrial facilities. It also encompasses the design of means of safe disposal of waste, liquids, and gases, preserving the quality of water, air, and the environment.</p>
              <a href="civil.php" class="btn btn-primary">view more</a>
            </div>
          </div>
          </div>
  
          
           
          </div>
   </div>
   </div>
   </div>
     
  

</Section>

<?php
 include './components/footer.php';

?>
