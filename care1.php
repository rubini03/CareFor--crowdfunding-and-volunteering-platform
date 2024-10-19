<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CareFor</title>

    <!-- CareFor favicon -->
    <link href="data:image/x-icon;base64,AAABAAEAEBAQAAEABAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAgAAAAAAAAAAAAAAAEAAAAAAAAAAAAAAAwgppAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAQAAAAAAAAABAAAAAAAAAAEAAAAAAAAAERERAAAAAAEBAAAAAAAAAQEAAAAAAAABARERAAAAAAEAAAAAAAAAAQAAAAAAAAABAAAAAAAAAAAREREAAAAAAAAAAAAAAAAAAAAAAAD//wAA//8AAP//AAD+/wAA/v8AAP7/AAD8DwAA+v8AAPr/AAD6DwAA+/8AAPv/AAD7/wAA/A8AAP//AAD//wAA" rel="icon" type="image/x-icon" />

     <!-- Latest compiled and minified CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
     <!-- CSS file link -->
    

     <!-- Fonts awesone link -->
<script src="https://kit.fontawesome.com/6c69895d3f.js" crossorigin="anonymous"></script>
<style>

h1,h2,h3,h4,h5,h6
{
  font-family: 'Montserrat-Bold', sans-serif;
  font-weight: bold;
}
body{
    font-family: 'Montserrat', sans-serif;
  }
/* Title section */
.container-fluid
{
  padding: 2% 10% 7%;

}
.navbar
{
   background-color: #674188;
    border-radius: 30px;
    /* padding: 0px 20px;
    margin: 0px 10px; */
    overflow: auto;
    color: #F7EFE5;
}
.navbar a
{
    padding: 0px 20px;
}


#title
{
    padding-top: 5%;
}
body
{
    background-color: #FFFBF5;
}
h4
{
    color: #674188;
}

.title-des
{
  text-align: center;
  padding-top: 100px;
}
.title-img
{
  padding-top: 25px;
  width: 40%;
  object-fit: contain;
  height: 50%;
  text-align: left;
  margin-left: 0;
}
.title-des,.title-img
{
  float: left;
}

/* About us section */
#opportunities
{
    padding-top: 5%;
    background-color: #F7EFE5;
}
.oppo
{
    text-align: center;
    color: #674188;
}
#description 
{
    background-color: #FFFBF5;
}
.feature-box{
    text-align: center;
    padding: 5%;
  }
.icon
{
    font-size: 48px;
    color: #674188;
  margin-bottom: 1.5rem;
}
.icon:hover
{
    color: #C3ACD0;
}
.reasons
{
    text-align: center;
}
/* Stories section  */
#stories
{
padding: 7% 15%;
text-align: center;
font-weight: bold;
background-color: #F7EFE5;

}
.testimonial-img
{
  width: 10%;
  border-radius: 100%;
  margin: 20px;
}
.carousel-control-next,
.carousel-control-prev /*, .carousel-indicators */ {
    filter: invert(100%);
}
/* Call to action */
#cta
{
  color: #674188;
  text-align: center;
  font-style: "Montserrat-Black";
  font-size: 2rem;
  padding: 7% 15%;
}
.call
{
  padding: 5%;
}
.ctabtn
{
  background-color: #674188;
  color: white;
}
/* Footer */
#footer
{
  text-align: center;
  background-color: #F7EFE5;
  padding: 0 15%;
}
.social-icons
{
  color: #674188;
  padding: 1%;
  margin: 20px 10px;
}
.social-icons:hover
{
    color: #C3ACD0;
}
.cpy
{
  padding: 3%;
}
.social-contain
{
 text-align: center;
}

</style>



</head>
<body>
    <!-- Title  -->

    <section id="title">
        <div class="container-fluid">
            <!-- Navbar content -->
             <nav class="navbar navbar-expand-lg navbar-dark">
              <a class="navbar-brand" href="#">CareFor</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="care1.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="VolunterFor.php">VolunteerFor</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="DonateFor.php">DonateFor</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="register.php">Sign up</a>
                  </li>
                </ul>
              </div>
            <!-- </div> -->
          </nav>
          
          <!-- Title -->
<div id="flex-container" class="row">
  <div class=" title-des col-lg-6">
    <h1> Helping People, Changing Lives.</h1>
    <br>
    <p>Welcome to CareFor, a charitable crowdfunding and volunteering platform dedicated to making a positive impact in the world.Through our platform, you can donate to a variety of causes, volunteer your time and skills, and join a community of like-minded individuals committed to making a difference.Together, we can create a lasting change</p>
   </div>

  <!-- Image -->
  <div class="title-img col-lg-6">
    <?php
   echo"<img class='title-image' src='images/titleimg1.png' alt='image1'>";
    ?>
  </div>
</div>
</div>
      
          
          

    </section>

      <!-- Oppurtunities -->
    <section id="opportunities">
      <h3 class="oppo"><centre>Explore the opportunities that interest you</centre> </h3>
      <div class="row">
        <div class="icon feature-box col-lg-3">
          <i class="fa-solid fa-venus"></i>
          <h6> Women Empowerment</h6>
        </div>
        <div class="icon feature-box col-lg-3">
          <i class="fa-solid fa-hospital-user"></i>
          <h6> Medical Emergencies</h6>
        </div>
        <div class="icon feature-box col-lg-3">
          <i class="fa-solid fa-person-cane"></i>
          <h6> Senior Citizens</h6>
        </div>
        <div class="feature-box col-lg-3">
          <i class="icon fa-solid fa-children"></i>
          <h6> Children</h6>
        </div>

      </div>
    </section>

    <!-- About us -->

    <section id="description">
      <!-- Basic description -->
        
      <div class="row">
        <div class="feature-box col-lg-4">
          <i class="icon fa-solid fa-users"></i>
       <h6>About Us</h6>
          <p>CareFor is a nonprofit organisation that aims to aid in the development of the social sector by encouraging community engagement, creating capacity, and offering services with value added.</p>
        </div>
        <div class="feature-box col-lg-4">
          <i class="icon fa-solid fa-bullseye"></i>
          <h6>Mission</h6>
        <p>CareFor strives to offer comprehensive resource solutions for the social sector. We aim to foster a mutually beneficial relationship between NGOS, volunteers, corporations and individuals and give them more structure and value.</p>
        </div>
        <div class="feature-box col-lg-4">
          <i class="icon fa-solid fa-eye"></i>
          <h6>Vision</h6>
        <p>The goal of CareFor is to become the largest platform in India for individuals and organisational entities to collaborate on the development of social worth.</p>
        </div>
      </div>

    <!-- Reasons to choose carefor -->
    <div class="reasons">
    <h4>Why choose CareFor?</h4>
    <div class="row">
        
        <div class="feature-box col-lg-3">
          <i class="icon fa-solid fa-check"></i>
        <p>A trustworthy and reliable platform.</p>
        </div>
        <div class="feature-box col-lg-3">
          <i class="icon fa-solid fa-screwdriver-wrench"></i>
          <p>Easy to manage tools to boost results </p>
        </div>
          <div class="feature-box col-lg-3">
            <i class="icon fa-solid fa-headset"></i>
            <p>Expert support 24/7</p>
        </div>
        <div class="feature-box col-lg-3">
          <i class="icon fa-solid fa-hand-holding-dollar"></i>
          <p>Hassle free payment system</p>
        </div>
      
    </div>
  </div>

    </section>
    

    <!-- Stories -->

    <section id="stories">
      <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <h4>"I am so grateful to have found CareFor. The platform made it easy for me to donate to causes I'm passionate about, and I feel confident that my contributions are making a real difference in people's lives." </h4>
            <?php
   echo"<img class='testimonial-img' src='images/lady-img.jpg' alt='lady-profile'>";
    ?>
    <em>Sarah M, Bengaluru</em>
          </div>
          <div class="carousel-item">
            <h4 class="testimonial-text">"Volunteering with CareFor has been an incredibly rewarding experience. The staff and fellow volunteers are all passionate and dedicated to making a positive impact, and I've learned so much about myself and my community through my work with this organization."</h4>
    <?php echo"<img class='testimonial-img' src='images/p2.png' alt='guy-profile'>";?>
    <em>Aditya K, Mysore</em> 
          </div>
          <div class="carousel-item">
            <h4 class="testimonial-text">As someone who has benefitted from CareFor's programs, I cannot express enough how much this organization means to me. Without their support, I wouldn't have been able to overcome the obstacles I faced and achieve my goals. Thank you, CareFor, for all that you do.</h4>
            <?php echo"<img class='testimonial-img' src='images/lady2.jpg' alt='lady2-profile'>";?>
           
    <em>Shriya Hegde, Chitradurga</em> 
          </div>
          
          
        </div>
        <button class="carousel-control-prev" type="button" href="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" href="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

    </section>

    <!-- Call to Action -->

  <section id="cta">

    <h3>Join Our Community and Make a Difference Today.</h3>
    <div class="call">
      <button type="button" class="ctabtn btn btn-dark btn-lg"><a href="login.php"> Log in</a></button>
    <button type="button" class="ctabtn btn btn-light btn-lg"><a href="register.php">Register</a></button>
    </div>
  </section>  

    <!-- Footer -->

    <footer id="footer">
      <footer id="footer">
    
        <a href="https://twitter.com/"><i class=" social-icons fa-brands fa-twitter" ></i></a>
        <a href="https://www.facebook.com/facebook/"><i class="social-icons fa-brands fa-facebook"></i></a>
        <a href="https://www.instagram.com/"><i class="social-icons fa-brands fa-instagram"></i></a>
        <a href="https://www.google.com/gmail/about/"><i class="social-icons fa-solid fa-envelope"></i></a>
        
      <p class="cpy">© Copyright 2023 CareFor</p>
  
    </footer>

    </footer>
    
</body>
</html>