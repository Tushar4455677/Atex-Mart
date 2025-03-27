<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Atex Mart</title>
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="assets/images/favicon.png">
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link rel="stylesheet" href="style1.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script src="script.js"></script>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
      <style>
        .popup-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    display: flex; /* Flexbox use kiya */
    justify-content: center;
    align-items: center;
}

.popup-form {
    background: #fff;
    padding: 30px;
    border-radius: 15px;
    width: 400px;
    text-align: center;
    transform: scale(0.8);
    transition: transform 0.3s ease-in-out;
    position: relative;
    box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.3);
}

.popup-overlay.active .popup-form {
    transform: scale(1);
}

.close-btn {
    position: absolute;
    top: 15px;
    right: 20px;
    font-size: 25px;
    cursor: pointer;
}

.form-group input {
    border-radius: 25px;
    padding: 10px;
    border: 1px solid #ccc;
}

.error {
    color: red;
    font-size: 14px;
    display: none;
}

/* Submit Button */
.submit-btn {
    background: linear-gradient(135deg, #6e8efb, #a777e3);
    border: none;
    padding: 10px 20px;
    border-radius: 25px;
    color: white;
    cursor: pointer;
    margin-top: 10px;
    transition: all 0.3s ease-in-out;
}

/* Hover Effect */
.submit-btn:hover {
    background: linear-gradient(135deg, #a777e3, #6e8efb);
    transform: scale(1.05);
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
}
.overlay-popup {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        display: flex;
        justify-content: center;
        align-items: center;
        display: none;
    }
    .form-popup {
        background: #fff;
        padding: 30px;
        border-radius: 15px;
        width: 350px;
        text-align: center;
        transform: scale(1);
        transition: transform 0.3s ease-in-out;
        position: relative;
        box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.3);
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .btn-close {
        position: absolute;
        top: 10px;
        right: 15px;
        font-size: 20px;
        cursor: pointer;
    }
    .input-group {
        width: 100%;
    }
    .input-group input {
        width: 100%;
        padding: 10px;
        margin-top: 10px;
        border-radius: 25px;
        border: 1px solid #ccc;
        text-align: center;
    }
    .msg-error, .msg-success {
        display: none;
        font-size: 14px;
        font-weight: bold;
        margin-top: 5px;
        display: flex;
        align-items: center;
        gap: 5px;
    }
    .msg-error {
        color: red;
    }
    .msg-success {
        color: green;
        margin-bottom: 10px;
    }
    .btn-submit {
        background: linear-gradient(135deg, #6e8efb, #a777e3);
        border: none;
        padding: 10px 20px;
        border-radius: 25px;
        color: white;
        cursor: pointer;
        margin-top: 10px;
        transition: all 0.3s ease-in-out;
    }
    .btn-submit:hover {
        background: linear-gradient(135deg, #a777e3, #6e8efb);
        transform: scale(1.05);
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
    }
    </style>
      



</head>

<body>
  <!--navbar start-->
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <nav class="navbar navbar-expand-lg navbar-white" id="nav">
          <a href="" class="navbar-brand text-white"><img src="images/Shopping.png" alt="" width="70px" height="70px"
              class="mr-4 display-3"><b>ATEX MART</b></a>

          <a href="" class="navbar-brand text-white"><img src="images/icons8-location-50.png" alt="" width="30px"
              height="30px" class="display-3"><i>Deliver to nagpur 440025</i></a>

          <button class="btn btn-success" id="signupBtn"><img src="images/icons8-add-48.png" alt=""
              width="25px" height="25px">SIGNUP</button>
          <button class="btn btn-primary ml-3"  id="openLoginPopup">LOGIN</button>

          <form class="form-inline ml-auto">
            <input type="search" class="form-control" placeholder="search ATEX-MART" style="width:300px;">
            <button class="btn btn-custom btn-outline-primary my-2 my-sm-0 ml-4">search

            </button>


        </nav>

      </div>

    </div>

  </div>
  <div class="container-fluid" id="navbar2">
    <div class="row" style="background-color:#34495e;">
      <div class="col">
        <nav class="navbar navbar-expand-lg navbar-white" id="nav2">
          <a href="" class="navbar-brand text-white">50% OFF SALES</a>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="" class="nav-link text-white disabled">HOME</a>
            </li>
            <li class="nav-item dropdown ml-4">
              <a href="" class="nav-link dropdown-toggle text-white" data-toggle="dropdown"><i>Groceries</i></a>
              <div class="dropdown-menu">
                <a href="" class="dropdown-item">Friuts and vegetables</a>
                <a href="" class="dropdown-item">Cooking essential</a>
                <a href="" class="dropdown-item">Dairy and bakery</a>
                <a href="" class="dropdown-item">Drinks and curds</a>
                <a href="" class="dropdown-item">Personal care</a>
                <a href="" class="dropdown-item">Home and beauty care</a>
                <a href="" class="dropdown-item">Gift and hampers</a>
                <a href="" class="dropdown-item">Crafts and drawings</a>
              </div>
            </li>
            <li class="nav-item dropdown ml-4">
              <a href="" class="nav-link dropdown-toggle text-white" data-toggle="dropdown"><i>Home & life-style</i></a>
              <div class="dropdown-menu">
                <a href="" class="dropdown-item">Kitchenware</a>
                <a href="" class="dropdown-item">Furnishing </a>
                <a href="" class="dropdown-item">Health and Fitness</a>
                <a href="" class="dropdown-item">Table ware</a>
                <a href="" class="dropdown-item">Furniture</a>
                <a href="" class="dropdown-item">Toya and Games</a>
                <a href="" class="dropdown-item">Garden and Outdoor</a>
                <a href="" class="dropdown-item">Home and care</a>
              </div>
            </li>
            <li class="nav-item dropdown ml-4">
              <a href="" class="nav-link dropdown-toggle text-white" data-toggle="dropdown"><i>Electronics </i></a>
              <div class="dropdown-menu ml-4">
                <a href="index1.php" class="dropdown-item">Moblile and tablets</a>
                <a href="index1.php" class="dropdown-item">Computer and accessories </a>
                <a href="" class="dropdown-item">TV & home entertainment</a>
                <a href="" class="dropdown-item">Home Appliances</a>
                <a href="" class="dropdown-item">Kitchen Appliances</a>
                <a href="" class="dropdown-item">Camera & Musical instruments
                </a>
                <a href="" class="dropdown-item">Wearable and smart tech</a>
                <a href="" class="dropdown-item">Lightings</a>
              </div>
            </li>
            <li class="nav-item dropdown ml-4">
              <a href="" class="nav-link dropdown-toggle text-white" data-toggle="dropdown"><i>Fashion</i></a>
              <div class="dropdown-menu ml-4">
                <a href="" class="dropdown-item">Men</a>
                <a href="" class="dropdown-item">Women</a>
                <a href="" class="dropdown-item">Boys</a>
                <a href="" class="dropdown-item">Girls</a>
                <a href="" class="dropdown-item"></a>
                <a href="" class="dropdown-item">Infants
                </a>
                <a href="" class="dropdown-item">tech</a>
                <a href="" class="dropdown-item">Crafts of india</a>
              </div>
            </li>
            <li class="nav-item dropdown ml-4">
              <a href="" class="nav-link dropdown-toggle text-white" data-toggle="dropdown"><i>Welness</i></a>
              <div class="dropdown-menu ml-4">
                <a href="" class="dropdown-item">Personal care</a>
                <a href="" class="dropdown-item">Fitness</a>
                <a href="" class="dropdown-item">Skin care</a>
                <a href="" class="dropdown-item">Mom and baby</a>
                <a href="" class="dropdown-item">Hair fashion</a>
                <a href="" class="dropdown-item">Wellness
                </a>
                <a href="" class="dropdown-item">Surgical</a>
                <a href="" class="dropdown-item">Fragrances</a>
              </div>
            </li>
            <li class="nav-item dropdown ml-4">
              <a href="" class="nav-link dropdown-toggle text-white" data-toggle="dropdown"><i>Industrail and
                  Professional Supplies</i></a>
              <div class="dropdown-menu ml-4">
                <a href="" class="dropdown-item">Auto care</a>
                <a href="" class="dropdown-item">Industrail and suppliances</a>
                <a href="" class="dropdown-item">Home cleaning and organisation</a>
                <a href="" class="dropdown-item">Electrical andElectronic components</a>
                <a href="" class="dropdown-item">Security safety and automation</a>
                <a href="" class="dropdown-item">Building supplies and measuring tools</a>

              </div>
            </li>
            <li class="nav-item dropdown ml-4">
              <a href="" class="nav-link dropdown-toggle text-white" data-toggle="dropdown"><i>Diwali offers</i></a>
              <div class="dropdown-menu ml-4">
                <a href="" class="dropdown-item">Clothes for men and women</a>
                <a href="" class="dropdown-item">Mobile and Laptops</a>
                <a href="" class="dropdown-item">Electricl appliances</a>
                <a href="" class="dropdown-item">Fresh Foods</a>
                <a href="" class="dropdown-item">accessories</a>
                <a href="" class="dropdown-item">Systems</a>

              </div>
            </li>




          </ul>
        </nav>
      </div>

    </div>

  </div>
  </div>
  <!---navbar end-->

  <!---interface start-->
  <div class="container-fluid1">
    <div class="row">
      <div class="col-md-12">

        <div class="background-section">
          <div class="popup-message">
            <h1>Welcome to Online Shopping!</h1>
            <p>Enjoy the best deals and offers!</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!---interface end-->

  <!---crousel shopping items start-->

  <div class="container my-5">
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
          <img src="images/shop.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Ladies Fashion Sales</h5>
            <p>AL are in just in 50 % off Ladies garments and Bras.</p>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="images/girls.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Girls beauty Products</h5>
            <p>Girls Suits and Beauty products in just 50% off.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/imag1.jpeg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Girls Marriage Jwelleries</h5>
            <p>Girls Marriage Jwelleries Lets make wedding season wonderfull.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/tushar.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5></h5>
            <p>Some representative placeholder content for the third slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/sari.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Home Clothes</h5>
            <p>Regular Home Wearing clothes are now available in just rs 505off</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/girls.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Girls Fashion wears</h5>
            <p>Girls formal suits and Kurtas are now available in just 50%off</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/srk.webp" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Srks new brand </h5>
            <p>SRK's new brand dvayolds bransaddor shops are in jsut 50%off</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

  <!---crousel shopping items end-->

  <!---card in shopping items start-->
  <div id="container-fluid mb-5">
    <div class="row py-5">
      <div class="col-md-3">

        <div class="card ml-5" style="width: 18rem;">
          <img src="images/card1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">snickers 50% off</h5>
            <p class="card-text">
              Tasty and yummy snikers now getting in Rs 20 in 50% off price</p>
            <a href="shop.php" class="btn btn-info">Shop now</a>
          </div>
  
        </div>
      </div>
      <div class="col-md-3">
        <div class="card ml-3" style="width: 18rem;">
          <img src="images/card2.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">hair oil 50% off</h5>
            <p class="card-text">Best hair oil for hair not getting in rs 50 discount.
              content.</p>
            <a href="shop.php" class="btn btn-info">Shop now</a>
          </div>

        </div>
      </div>

      <div class="col-md-3">
        <div class="card ml-3" style="width: 18rem;">
          <img src="images/card3.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Canada dry juice 50% off</h5>
            <p class="card-text">Tasty and yummy jice vitamin now getting in Rs 20 in 50% off price</p>
            <a href="shop.php" class="btn btn-info">Shop now</a>
          </div>
        </div>
      </div>
      
      <div class="col-md-3">
        <div class="card ml-3" style="width: 18rem;">
          <img src="images/card4.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">face wash 50% off</h5>
            <p class="card-text">face wash multivitamin serum now getting Rs 20 in 50% off price
            </p>
            <a href="shop.php" class="btn btn-info">Shop now</a>
          </div>

        </div>
      </div>
      <!---card in shopping items end-->

      <!---fashion sale interface start-->
      <div class="container-fluid my-5">
        <div class="main-home">

          <div class="main-text">
            <h2>fashion collection Diwali 2024</h2>
            <h1>New winter<br> Collection 2024</h1>
            <p>There is nothing like trend!</p>
            <a href="shop1.php" class="main-btn">Shop now</a>
          </div>
        </div>
      </div>
      <!---fashion sale interface end-->

      <!-----footer start-->
      <div class="container-fluid">
        <footer class="footer">
          <div class="container">
            <div class="footer-form">
              <h2>Contact Us</h2>
              <form action="#" method="post">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <textarea name="message" placeholder="Your Message" required></textarea>
                <button type="submit">Send</button>
              </form>
            </div>
            <div class="social-media">
              <ul class="list-unstyled custom-list" style="text-align: justify;">
                <li><a href="" class="text-black" style="margin-bottom: 10px;font-size:35px;">Top popular Items</a></li>
                <li><a href="index1.php" class="text-yellow">Electronics</a></li>
                <li><a href="index3.php">Fashion</a></li>
                <li><a href="index3.php">Kurtas tradiionals</a></li>
                <li><a href="">Premium books</a></li>
                <li><a href="index2.php">foods</a></li>
                <li><a href="">furniture</a></li>
                <li><a href="">Grocery</a></li>
              </ul>

              <a href="#" class="social-icon"><img src="images/icons8-instagram-48.png" alt=""
                  style="margin-top:300px;"></a>
              <a href="#" class="social-icon"><img src="images/icons8-facebook-48.png" alt=""
                  style="margin-top:300px;"></a>
              <a href="#" class="social-icon"><img src="images/icons8-twitter-48.png" alt=""
                  style="margin-top:300px;"></a>
              <a href="#" class="social-icon"><img src="images/icons8-whatsapp-48.png" alt=""
                  style="margin-top:300px;"></a>
              <ul class="list-unstyled custom-list" style="text-align: justify;">
                <li><a href="" class="text-black" style="margin-bottom: 10px;font-size:35px;">Help & support</a></li>
                <li><a href="">About us</a></li>
                <li><a href="">Terms & conditions</a></li>
                <li><a href="">FAQ</a></li>
                <li><a href="">Privacy Policy</a></li>
                <li><a href="">Shopping & Delivery Policy</a></li>
                <li><a href="">Cancellation & return Policy</a></li>
              </ul>

            </div>
          </div>

        </footer>

      </div>
      <!--footer end-->

      <div class="foot" style="position:relative;top:46px;">
        <div class="footer-bottom">
          <p class="text-white text-center">Copyright 2024 &copy; Atex mart shopping | all rights reserved.</p>
        </div>
      </div>
      <div class="popup-overlay" id="popup">
        <div class="popup-form">
            <span class="close-btn" id="closePopup">&times;</span>
            <h4 id="formTitle">Signup</h4>
            <form id="userForm">
                <div class="form-group">
                    <input type="text" id="name" class="form-control" placeholder="Name">
                    <span class="error" id="nameError">Please enter name</span>
                </div>
                <div class="form-group">
                    <input type="email" id="email" class="form-control" placeholder="Email">
                    <span class="error" id="emailError">Please enter email</span>
                </div>
                <div class="form-group">
                    <input type="password" id="password" class="form-control" placeholder="Password">
                    <span class="error" id="passwordError">Please enter password</span>
                </div>
                <button type="submit" class="submit-btn">Submit</button>
            </form>
        </div>
    </div>
    <div class="overlay-popup" id="loginPopup">
    <div class="form-popup">
        <span class="btn-close" id="closeLoginPopup">&times;</span>
        <h2>Login</h2>
        <p class="msg-success" id="successMsg" style="display: none;"><i class="fa fa-check-circle"></i> Login Successful! Redirecting...</p>
        <div class="input-group">
            <input type="email" id="loginEmail" placeholder="Email" required>
            <p class="msg-error" id="emailErr" style="display: none;"><i class="fa fa-exclamation-circle"></i> Enter a valid email</p>
        </div>
        <div class="input-group">
            <input type="password" id="loginPassword" placeholder="Password" required>
            <p class="msg-error" id="passwordErr" style="display: none;"><i class="fa fa-exclamation-circle"></i> Password is required</p>
        </div>
        <button class="btn-submit" id="loginSubmit">Login</button>
        <p class="msg-error" id="loginErr" style="display: none;"><i class="fa fa-times-circle"></i> Invalid email or password</p>
    </div>
</div>
    <script>
        $(document).ready(function () {
            $("#signupBtn").click(function () {
                $("#popup").fadeIn().addClass('active');
            });

            $("#closePopup").click(function () {
                $("#popup").fadeOut().removeClass('active');
            });

            $("#userForm").submit(function (e) {
                e.preventDefault();
                $(".error").hide();
                let name = $("#name").val();
                let email = $("#email").val();
                let password = $("#password").val();
                
                let valid = true;
                if (name === "") { $("#nameError").fadeIn().delay(1000).fadeOut(); valid = false; }
                if (email === "") { $("#emailError").fadeIn().delay(1000).fadeOut(); valid = false; }
                if (password === "") { $("#passwordError").fadeIn().delay(1000).fadeOut(); valid = false; }
                
                if (!valid) return;
                
                $.ajax({
                    url: 'process.php',
                    type: 'POST',
                    data: { name: name, email: email, password: password },
                    success: function (response) {
                        alert("Registration Successful");
                        $("#popup").fadeOut().removeClass('active');
                        $("#userForm")[0].reset();
                    }
                });
            });
        });
    </script>
  <script>
    $(document).ready(function () {
        $("#openLoginPopup").click(function () {
            $("#loginPopup").fadeIn().addClass("active");
        });
        $("#closeLoginPopup").click(function () {
            $("#loginPopup").fadeOut().removeClass("active");
        });
        
        $("#loginSubmit").click(function () {
            let email = $("#loginEmail").val().trim();
            let password = $("#loginPassword").val().trim();
            
            $(".msg-error, .msg-success").hide();
            
            if (email === "") {
                $("#emailErr").fadeIn();
                setTimeout(() => { $("#emailErr").fadeOut(); }, 2000);
                return;
            }
            if (password === "") {
                $("#passwordErr").fadeIn();
                setTimeout(() => { $("#passwordErr").fadeOut(); }, 2000);
                return;
            }
            
            $.ajax({
                url: "login.php",
                method: "POST",
                data: { email: email, password: password },
                success: function (response) {
                    if (response.trim() === "success") {
                        $("#successMsg").fadeIn();
                        setTimeout(function () {
                            $("#successMsg").fadeOut();
                            window.location.href = "index1.php";
                        }, 2000);
                    } else {
                        $("#loginErr").fadeIn();
                        setTimeout(() => { $("#loginErr").fadeOut(); }, 2000);
                    }
                }
            });
        });
    });
</script>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    </body>
</html>