<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pay</title>
    <!-- CareFor favicon -->
    <link href="data:image/x-icon;base64,AAABAAEAEBAQAAEABAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAgAAAAAAAAAAAAAAAEAAAAAAAAAAAAAAAwgppAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAQAAAAAAAAABAAAAAAAAAAEAAAAAAAAAERERAAAAAAEBAAAAAAAAAQEAAAAAAAABARERAAAAAAEAAAAAAAAAAQAAAAAAAAABAAAAAAAAAAAREREAAAAAAAAAAAAAAAAAAAAAAAD//wAA//8AAP//AAD+/wAA/v8AAP7/AAD8DwAA+v8AAPr/AAD6DwAA+/8AAPv/AAD7/wAA/A8AAP//AAD//wAA" rel="icon" type="image/x-icon" />

     <!-- Latest compiled and minified CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
     <!-- CSS file link -->
     <link rel="stylesheet" type="text/css" href="C:\Users\Sameeksha\College\weblab project\pay1.css">

     <!-- Fonts awesone link -->
<script src="https://kit.fontawesome.com/6c69895d3f.js" crossorigin="anonymous"></script>

<style>

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #04AA6D;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (and change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>
    <div class="row">
        <div class="col-75">
          <div class="container">
            <form action="payments2.php" method="POST">
      
              <div class="row">
                <div class="col-50">
                  <h3>Donation Information</h3>
                  <label for="fullname"><i class="fa fa-user"></i> Full Name</label>
                  <input type="text" id="fullname" name="fullname" placeholder="Raj Malhotra" required>
                  <label for="email"><i class="fa fa-envelope"></i> Email</label>
                  <input type="text" id="email" name="email" placeholder="raj@example.com" required>
                  <label for="address"><i class="fa fa-address-card-o"></i> Address</label>
                  <input type="text" id="address" name="address" placeholder="87, Vidyaranyapura" required>
                  <label for="city"><i class="fa fa-institution"></i> City</label>
                  <input type="text" id="city" name="city" placeholder="Bengaluru" required>
      
                  <div class="row">
                    <div class="col-50">
                      <label for="state">State</label>
                      <input type="text" id="state" name="state" placeholder="Karnataka" required>
                    </div>
                    <div class="col-50">
                      <label for="zip">Zip</label>
                      <input type="text" id="zip" name="zip" placeholder="560010" required>
                    </div>
                  </div>
                </div>
      
                <div class="col-50">
                  <h3>Payment</h3>
                  <label for="fname">Accepted Cards</label>
                  <div class="icon-container">
                    <i class="fa fa-cc-visa" style="color:navy;"></i>
                    <i class="fa fa-cc-amex" style="color:blue;"></i>
                    <i class="fa fa-cc-mastercard" style="color:red;"></i>
                    <i class="fa fa-cc-discover" style="color:orange;"></i>
                  </div>
                  <label for="cardname">Name on Card</label>
                  <input type="text" id="cardname" name="cardname" placeholder="Raj Malhotra" required>
                  <label for="cardnum">Credit card number</label>
                  <input type="text" id="cardnum" name="cardnum" placeholder="1111-2222-3333-4444" required>
                  <label for="expmonth">Exp Month</label>
                  <input type="text" id="expmonth" name="expmonth" placeholder="September" required>
                  <label for="expmonth">Donation amount</label>
                  <input type="text" id="amount" name="amount" placeholder="Rs.100" required>
                  
      
                  <div class="row">
                    <div class="col-50">
                      <label for="expyear">Exp Year</label>
                      <input type="text" id="expyear" name="expyear" placeholder="2023" required>
                    </div>
                    <div class="col-50">
                      <label for="cvv">CVV</label>
                      <input type="text" id="cvv" name="cvv" placeholder="352" required>
                    </div>
                  </div>
                </div>
      
              </div>
              
              <input type="submit" value="Continue to donate" class="btn">
            </form>
          </div>
        </div>
      
        
      </div>
    
</body>
</html>