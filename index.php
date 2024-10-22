<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portifolio</title>
    <!-- styles css link---->
    <link rel = "stylesheet"  href = "./styles.css">
    <!-------- bootstrap link --------->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet"
     integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
     crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <!----Link for Top navbar--->
    <?php
        include ('navbar.php');
    ?>
    
    <section  id="about">
    <!---Top header-->
    <h1 class="top-title text-primary " id="home">Welcome To My Portifolio Website</h1>

    <!--container section-->
    <div class="container" >
        <h1 class = "title-1" >About Me</h1>
        <p>I am Denis Juma, a student at Ardhi University in Dar-es-Salaam,
             pursuing a Bachelor of Science in Information Systems Management.
              This portfolio website showcases various projects I am currently working on, 
              including videos that demonstrate my work, as well as notes and questions in 
              different programming languages. </p>
         
         <div class="row g-4">
                <div class=" col-md-4">
                <img src="./images/profile.jpeg"  class="img-style"alt="deliz and edgarius">
                </div>
                <div class="col-md-8">
                <p>As programmer I have several goals in order to success and grow in this field. Here are some 
                   of the goals </p>
            <ol>
                  <li>
                   <p class="text-primary"><strong>Enhance Programming Skills</strong></p>
                  </li>
                    <p> Continuously improve by learning new programming languages 
                        and staying updated with the latest technologies.</p>
                    <li>
                   <p class="text-primary"> <strong>Build Impressive Personal Projects</strong></p>
                    </li>
                    <p>  Develop personal projects that showcase my skills and capabilities
                         in the programming field</p>

                     <li>
                        <p class="text-primary"><strong>Contribute to Team Projects</strong></p>
                        <p> Engage in collaborative projects to enhance my teamwork,
                             communication skills, and experience in working within a 
                             team environment.</p>
                     </li>

                     <li>
                        <p class="text-primary"><strong>Secure Employment or Pursue Self-Employment</strong></p>
                        <p> Aim to either secure a job in the tech industry or explore
                             self-employment opportunities.</p>
                    </li>

                     <li>
                        <p class="text-primary"><strong>Tackle New Programming Challenges</strong></p>
                        <p>Take on complex algorithmic problems and design intricate
                             applications to push the boundaries of my technical
                              abilities.</p>
                     </li>
            </ol>
                </div>
            </div>
            </div>
            </section> 

            <!------ This is title 2 ---------->
        <section class = "container-fluid bg-light mt-5" id= "Skills">
            <div class="container mt-5 pt-5">
         <h1 class = "title-2 text-center text-primary ">Skills</h1>
        
         <p>I have programming skills in both front-end and back-end development,
             for both static and dynamic websites. The programming language I am most
              comfortable with is PHP, particularly with the Laravel framework. 
              I also work with other languages like Python, Java, JavaScript,
               and frameworks like React.js and Node.js. <p>
         <div class="row g-3">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                    <img src="./images/php.jpg" class="img-fluid"  alt="php image">
                    </div>
                    <div class="card-header">
                    <h5><a href="">PHP Language</a></h5>
                    <p>Level: Advanced</p>
                    </div>
                </div>
                
            </div>

            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                    <img src="./images/python.jpg" class="img-fluid" width = "270px" height = "200px "alt="Python image">
                    </div>
                    <div class="card-header">
                    <h5> <a href="./programming notes/python Notes.pdf" target = "_self">Python Language</a></h5>
                    <p>Level: Intermediate</p>
                    </div>
                </div>
            </div>

            <div class=" col-md-3">
                <div class="card">
                    <div class="card-header">
                    <img src="./images/java.jpg" class="img-fluid"  alt="Python image">
                    </div>
                    <div class="card-header">
                    <h5><a href="">JAVA Language</a></h5>
                    <p>Level: Intermediate</p>
                    </div>
                </div>
            </div>

            <div class=" col-md-3">
                <div class="card">
                    <div class="card-header">
                    <img src="./images/javascript.jpg" class="img-fluid" alt="Python image">
                    </div>
                    <div class="card-header">
                    <h5><a href="./programming notes/javaScript Notes.pdf" target = "_self">JavaScript Language</a></h5>
                    <p>Level: Intermediate</p>
                    </div>
                </div>
            </div>
        
            <div class="row g-3">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">
                        <img src="./images/laravel.jpg" class="img-fluid" alt="laravel image">
                        </div>
                        <div class="card-header">
                        <h5><a href="#">Laravel framework</a></h5>
                        <p>Level: Intermediate</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 ">
                    <div class="card">

                    <div class="card-header">
                    <img src="./images/django.jpg" class="img-fluid" alt="django image">
                    </div>
                    <div class="card-header">
                    <h5><a href="#">Django framework</a></h5>
                    <p>Level: Intermediate</p>
                    </div>
                    </div>
                   
                   
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">
                        <img src="./images/database.jpg" class="img-fluid" alt="database image">
                        </div>
                        <div class="card-header">
                        <h5>Database skills</h5>
                        <p>Level: Intermediate</p>
                        </div>
                    </div>
                </div>


                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">
                        <img src="./images/node.jpg" class="img-fluid" alt="node js image">
                        </div>
                        <div class="card-header">
                        <caption>Node js framework</caption> 
                        <p>Level: Intermediate</p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </section >
        <!---------------- ./title 2 ----------------------->
        

      
            <!------------------ Title 3 ------------------->
        <section id="project" class="mt-5">
         <div class="container mt-5 pt-5">
         <h1 class = "title-3 text-center text-primary" >Projects</h1>
         <p>The following are the projects which am performed, not only this but am continue to add them in this 
            website. </p>
            <!--- row  ------->
            <div class="row">
                <div class="col-md-6">
                <h4 class="text-primary">1: Drivers Verification and Recruitment System</h4>
            <p>This system aims to facilitate the verification of drivers' credentials and their registration
                for driving-related jobs.
            </p>
            <p><strong>Purpose:</strong> The system is designed to allow companies or organizations to 
                review and verify drivers' qualifications before enrolling them on their platform.</p>
            <p><strong>Driver Registration:</strong>Drivers can register on the system by providing their 
                personal details, driving credentials, employment history, etc.</p>
                <p><strong>Credential Verification:</strong> The system carries out verification of 
                of drivers' qualifications, such as document checks, driving history and background screening.</p>
                <p><strong>Security:</strong> The system ensures the security of drivers' personal data 
                  and complies with privacy laws and regulations.</p>
                  <p><strong class="text-info">Technologies:</strong> PHP, mysql database.</p>
                </div>

                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                        <img src="./images/driver system.png" width = "100%" height = "330px"alt="Driver verification and recruitment system">
                 <strong>LINK : </strong><a href="./driver Recruitment/index.php" title="Go to Driver Verification and recruitment system" target = "_self">
                    Driver Verification and Recruitment System</a>
                        </div>
                    </div>
                </div>
            </div>
         </div>
        </section>
            <!--- ./row ---->
            

        <section  class = " container-fluid bg-light mt-5 pt-4 pl-4">
         <div class="container">
          <div class="row">
            <div class="col-md-6">
                <h4 class = "text-primary"> 2: Church Management system</h4>
                <p>This sysytem facilitate financial management in the church, Have the following 
                    features like create budgent, track income and expenses.
                </p>
                <h5><strong>Purpose</strong></h5>
                <p><strong>Financial Management: </strong>Simplifying the tracking of tithes, offerings,
                     and other donations, and providing transparency through detailed 
                     financial reports.</p>

                <p><Strong>Enhancing Member Engagement:</Strong> Providing tools to
                 better connect with members through personalized communication, event
                  notifications, and spiritual resources, which can lead to a stronger 
                  sense of community.</p>

                  <p><strong>Data-Driven Decision Making:</strong> Offering insights through analytics and reporting 
                    features that help church leaders make informed decisions about growth, outreach, 
                    and ministry impact.</p>
                    <p><strong class="text-info">Technologies:</strong> React.js, Python(Django), mysql database,</p>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                    <video width="640" height="380" controls>
                          <source src="./video/system demostration.mp4" type="video/mp4">
                          Your browser does not support the video tag.
                 </video>
                    </div>
                </div>
         </div>
      </div>
      </div>
  </section>


  <section class = " container-fluid mt-5 pt-4">
    <div class="container">
        <div class="row">
            <div class ="col-md-6">
            <h4 class= "text-primary">3: ARU Convocation System</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                 Aspernatur qui error provident culpa, corrupti odit sint
                  laudantium accusantium sapiente, alias sequi deleniti option!</p>

            <h5><strong>Purpose</strong></h5>

            <p><strong>Facilitate Communication:</strong>
            The system provides a platform for communicating important information,
             such as schedules, guidelines, and updates, to graduates, faculty, and staff.
            It ensures that all participants are well-informed about the convocation
             process.</p>

             <p><strong>Automate Registration and Attendance:</strong>
                The system allows graduating students to register for the convocation 
                ceremony online, reducing the need for manual paperwork.
                It tracks attendance and participation in the convocation events.</p>

                <p><strong class="text-info">Technologies:</strong> PHP(Laravel), mysql database,</p>
            </div>

            <div class="col-md-6">
                    <img src="./images/Home page.png" class = "img-fluid" alt="ARU Convocation system">
                 <strong>LINK : </strong><a href="./driver Recruitment/index.php" title=" recruitment system" target = "_self">
                    ARU Convocation System</a>
                </div>
        </div>
    </div>
  </section>
           
<!-- Footer -->
<footer class=" container-fluid bg-light text-center text-lg-start">
  <div class="container p-4">
    <div class="row">
      <!-- Column 1 -->
      <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase">About Me</h5>
        <p>
          I am Denis Juma, a student at Ardhi University pursuing a Bachelor of Science
           in Information Systems Management. This portfolio website showcases various
            projects I am working on.
        </p>
      </div>
      <!-- Column 2 -->
      <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase">Useful Links</h5>
        <ul class="list-unstyled mb-0">
          <li>
            <a href="#!" class="text-dark">Home</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Projects</a>
          </li>
          <li>
            <a href="#!" class="text-dark">Contact</a>
          </li>
          <li>
            <a href="#!" class="text-dark">About</a>
          </li>
        </ul>
      </div>
      <!-- Column 3 -->
      <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase">Contact</h5>
        <p>
          Email: <a href="mailto:your.email@example.com">denisjuma422@gmail.com</a><br>
          Phone: +255 616 753 716 | +255 744430216
        </p>
        <ul class="list-unstyled d-flex justify-content-center">
          <li>
            <a href="#!" class="text-dark mx-2"><i class="fab fa-facebook-f"></i></a>
          </li>
          <li>
            <a href="#!" class="text-dark mx-2"><i class="fab fa-twitter"></i></a>
          </li>
          <li>
            <a href="https://www.linkedin.com/in/denis-juma-1b8609288" class="text-dark mx-2"><i class="fab fa-linkedin-in"></i></a>
          </li>
          <li>
          <a href="https://github.com/Denisjuma" class="text-dark mx-2" target="_self">
            <i class="fab fa-github"></i>
         </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="text-center p-3 bg-dark text-white">
    © 2024 Denis Juma. All Rights Reserved.
  </div>
</footer>



    <script src= "script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
  crossorigin="anonymous"></script>
</body>
</html>