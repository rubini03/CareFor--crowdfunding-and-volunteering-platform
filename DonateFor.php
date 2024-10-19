<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DonateFor</title>
    
    <!-- CareFor favicon -->
    <link href="data:image/x-icon;base64,AAABAAEAEBAQAAEABAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAgAAAAAAAAAAAAAAAEAAAAAAAAAAAAAAAwgppAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAQAAAAAAAAABAAAAAAAAAAEAAAAAAAAAERERAAAAAAEBAAAAAAAAAQEAAAAAAAABARERAAAAAAEAAAAAAAAAAQAAAAAAAAABAAAAAAAAAAAREREAAAAAAAAAAAAAAAAAAAAAAAD//wAA//8AAP//AAD+/wAA/v8AAP7/AAD8DwAA+v8AAPr/AAD6DwAA+/8AAPv/AAD7/wAA/A8AAP//AAD//wAA" rel="icon" type="image/x-icon" />

     <!-- Latest compiled and minified CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
     
     <!-- CSS file link -->
     <link rel="stylesheet" type="text/css" href="C:\Users\Sameeksha\College\weblab project\DonateForstyles.css">

      <!-- Fonts awesone link -->
<script src="https://kit.fontawesome.com/6c69895d3f.js" crossorigin="anonymous"></script>
<style>

body
{
    background-color: #FFFBF5;
}
.card-img
{
    width:300px;
    height: 200px;
}

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
  padding: 0 10% 0;

}
.navbar
{
   background-color: #674188;
    border-radius: 30px;
}
.navbar a
{
    padding: 0px 20px;
}
#title
{
    padding-top: 2%;
}

#opportunities
{
  padding: 100px;
  text-align: center;
}
.oppo-column{
  padding: 3% 2%;
}
.btn
{
    background-color: #674188;
    color: white;
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
                    <a class="nav-link" href="care1.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link"  href="VolunterFor.php">VolunteerFor</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="DonateFor.php">DonateFor</a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="register.php">Sign up</a>
                  </li>
                </ul>
              </div>
            
          </nav>
          </div>
          </section>

    <section id="opportunities">

        <h2>Donate for the opportunities that intrest you</h2>
        <p>Donate Today and Make a Difference!.</p>
        
        
            
      
        </div>
        <div class="row">
            <div class=" oppo-column col-lg-4 col-md-6">
              <div class="card">
                <div class="card-header">
                <?php echo"<img class='card-img' src='images/flood.jpg' alt='image1'>"; ?>
                  
                </div>
                <div class="card-body">
                  <h2>Flood relief fund</h2>
              <p>Children</p>
              <p><i class="fa-solid fa-location-dot"></i>Sakleshpur</p>
              <p>The unicorn express</p>
              <form action="payments1.php" method="POST">
                <input type="submit" value="Donate" class="oppo-column btn btn-lg btn-block btn-outline-dark"/>
              </form> 
                </div>
                <div class="card-footer">
                    
                </div>
            </div>
            </div>
            
          <div class="oppo-column col-lg-4 col-md-6">
            <div class="card">
              <div class="card-header">
              <?php echo"<img class='card-img' src='images/surgery.jpg' alt='image1'>"; ?>
                  
              </div>
              <div class="card-body">
                <h2>Open heart surgery </h2>
                <p>Senior citizens</p>
                <p><i class="fa-solid fa-location-dot"></i>Coorg</p>
                <p>Smile for all</p>
                <form action="payments1.php" method="POST">
                  <input type="submit" value="Donate" class="oppo-column btn btn-lg btn-block btn-outline-dark"/>
                </form>
              </div>
              <div class="card-footer">
                  
              </div>
            </div>
              
          </div>
         
        <div class="oppo-column col-lg-4">
        <div class="card">
        <div class="card-header">
        <?php echo"<img class='card-img' src='images/sports.png' alt='image1'>"; ?>      
        </div>
        <div class="card-body">
          <h2>Sports school for specially able</h2>
          <p>Children</p>
          <p><i class="fa-solid fa-location-dot"></i>Bengaluru</p>
          <p>The GoodWill foundation</p>
          <form action="payments1.php" method="POST">
            <input type="submit" value="Donate" class="oppo-column btn btn-lg btn-block btn-outline-dark"/>
          </form>
        </div>
        <div class="card-footer">
            
        </div>
        </div>
              
        
          </div>
        
        
    
      </section>
    
    
</body>
</html>