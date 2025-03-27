<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        .top-navbar {
            background: white;
            padding: 10px 20px;
            border-bottom: 1px solid #ddd;
        }
        .top-navbar .social-icons a {
            color: black;
            margin-right: 15px;
            font-size: 18px;
        }
        .offer-text {
            color: #ff6f61;
            font-weight: bold;
            font-size: 16px;
        }
        .search-bar {
            width: 250px;
            border-radius: 20px;
            padding: 5px 10px;
        }
        .navbar {
            background: white !important;
            padding: 15px 20px;
            border-bottom: 2px solid #ddd;
        }
        .navbar-brand {
            font-weight: bold;
            font-size: 20px;
        }
        .nav-link {
            margin: 0 10px;
        }
        .modal-content {
            border-radius: 15px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
        .banner {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
            padding: 30px;
        }
        .banner img {
            width: 45%;
            border-radius: 10px;
            transition: transform 0.3s ease-in-out;
        }
        .banner img:hover {
            transform: scale(1.05);
        }
        .discount-container {
            position: relative;
            background: #e0e0e0; /* Dark White */
            padding: 30px;
            border-radius: 15px;
            text-align: center;
            color: black;
            overflow: hidden;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            margin: 20px;
        }

        .discount-container::before {
            content: "10% OFF";
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 100px;
            font-weight: bold;
            color: rgba(0, 0, 0, 0.08);
            z-index: 0;
            white-space: nowrap;
        }

        .discount-content {
            position: relative;
            z-index: 1;
        }

        .discount-content h2 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
            color: black;
        }

        .discount-content p {
            font-size: 16px;
            margin-bottom: 20px;
            color: black;
        }

        .email-input {
            width: 250px;
            padding: 10px;
            border-radius: 25px;
            border: 1px solid black;
            outline: none;
            text-align: center;
            font-size: 14px;
            background: transparent;
        }

        .subscribe-btn {
            background: black;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 25px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s ease-in-out;
        }

        .subscribe-btn:hover {
            background: white;
            color: black;
            border: 1px solid black;
        }
        
        .featured-section {
            text-align: center;
            padding: 40px 20px;
        }

        .featured-section h2 {
            font-size: 28px;
            font-weight: bold;
            position: relative;
            display: inline-block;
        }

        .featured-section h2::before {
            content: "\f005"; /* Star Icon */
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            margin-right: 10px;
            color: black;
        }

        .product-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 20px;
        }

        .product-card {
            position: relative;
            width: 200px;
            overflow: hidden;
            border-radius: 10px;
            background: white;
            padding: 10px;
            transition: 0.3s;
            cursor: pointer;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        .product-card:hover {
            transform: scale(1.05);
        }

        .product-card img {
            width: 100%;
            border-radius: 10px;
            transition: 0.3s;
        }

        .product-card:hover img {
            filter: brightness(70%);
        }

        .product-icons {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: flex;
            gap: 10px;
            opacity: 0;
            transition: 0.3s;
        }

        .product-card:hover .product-icons {
            opacity: 1;
        }

        .product-icons a {
            background: black;
            color: white;
            padding: 8px;
            border-radius: 50%;
            text-decoration: none;
        }

        .modal-content {
            border-radius: 15px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        .modal-body {
            text-align: center;
        }

        .modal-body img {
            width: 100%;
            border-radius: 10px;
        }

        .modal-body h3 {
            font-size: 20px;
            margin: 10px 0;
        }

        .modal-body p {
            font-size: 14px;
            color: #555;
        }

        .add-to-cart-btn {
            background: black;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 25px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s ease-in-out;
        }

        .add-to-cart-btn:hover {
            background: white;
            color: black;
            border: 1px solid black;
        }
        
    .fashion-sales-title {
        font-size: 24px;
        font-weight: bold;
        margin: 20px 0;
        text-align: center;
        color: #333;
    }
    .fashion-sales-title i {
        color: red;
        margin-right: 10px;
    }
    .sales-container {
        display: flex;
        justify-content: center;
        gap: 15px;
    }
    .sales-item {
        position: relative;
        width: 200px;
        cursor: pointer;
    }
    .sales-item img {
        width: 100%;
        border-radius: 10px;
        transition: transform 0.3s ease-in-out;
    }
    .sales-item:hover img {
        transform: scale(1.05);
    }
    .hover-icons {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        display: none;
        gap: 10px;
    }
    .sales-item:hover .hover-icons {
        display: flex;
    }
    .hover-icons i {
        background: white;
        padding: 10px;
        border-radius: 50%;
        font-size: 18px;
        cursor: pointer;
    }
    .winter-collection {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 40px;
        padding: 50px 50px;
        background-color: #f5f5f5;
    }

    .winter-image img {
        width: 100%;
        max-width: 500px;
        border-radius: 10px;
    }

    .winter-content {
        max-width: 500px;
    }

    .winter-content h2 {
        font-size: 28px;
        color: #333;
        margin-bottom: 15px;
    }

    .winter-content p {
        font-size: 16px;
        color: #555;
        line-height: 1.6;
    }

    .shop-btn {
        display: inline-block;
        margin-top: 15px;
        padding: 12px 25px;
        font-size: 16px;
        color: #fff;
        background: black;
        border: none;
        cursor: pointer;
        transition: 0.3s;
        border-radius: 5px;
    }

    .shop-btn:hover {
        background: gray;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .winter-collection {
            flex-direction: column;
            text-align: center;
        }
    }
    .feedback-section {
        padding: 50px 20px;
        text-align: center;
        background-color: #f5f5f5;
    }

    .feedback-section h2 {
        font-size: 28px;
        margin-bottom: 30px;
        color: #333;
    }

    .feedback-container {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 20px;
    }

    .feedback-card {
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        max-width: 280px;
        text-align: center;
        transition: transform 0.3s ease-in-out;
    }

    .feedback-card img {
        width: 100px;
        height: 100px;
        border-radius: 10px; /* Square Shape */
        margin-bottom: 15px;
        object-fit: cover;
    }

    .feedback-card h4 {
        font-size: 18px;
        color: black;
        margin-bottom: 5px;
    }

    .feedback-card p {
        font-size: 14px;
        color: #555;
    }

    .feedback-card:hover {
        transform: scale(1.05);
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .feedback-container {
            flex-direction: column;
            align-items: center;
        }
    }
    .footer {
        background: #222;
        color: #fff;
        padding: 50px 20px;
    }

    .footer-container {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        max-width: 1200px;
        margin: auto;
    }

    .footer-column {
        flex: 1;
        min-width: 220px;
        margin-bottom: 20px;
    }

    .footer-column h3 {
        font-size: 18px;
        margin-bottom: 15px;
        border-bottom: 2px solid #ff6600;
        display: inline-block;
        padding-bottom: 5px;
    }

    .footer-column ul {
        list-style: none;
        padding: 0;
    }

    .footer-column ul li {
        margin: 8px 0;
    }

    .footer-column ul li a {
        color: #ccc;
        text-decoration: none;
        transition: color 0.3s;
    }

    .footer-column ul li a:hover {
        color: #ff6600;
    }

    .footer-bottom {
        text-align: center;
        margin-top: 30px;
        border-top: 1px solid #444;
        padding-top: 15px;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .footer-container {
            flex-direction: column;
            text-align: center;
        }
    }
    </style>
</head>
<body>
    <nav class="top-navbar d-flex justify-content-between align-items-center">
        <div class="social-icons">
            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
            <a href="#"><i class="fa-brands fa-youtube"></i></a>
            <a href="#"><i class="fa-brands fa-pinterest"></i></a>
        </div>
        <span class="offer-text">Special Offer: Free Shipping on all orders above $100</span>
        <div class="d-flex align-items-center">
            <input class="form-control search-bar" type="search" placeholder="Search...">
            <a href="#" class="btn btn-outline-secondary ms-2">Contact</a>
            <a href="#" class="btn btn-outline-dark ms-2">Cart</a>
        </div>
    </nav>
    
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><i class="fa-solid fa-shopping-cart"></i> Atex Mart Service</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Men</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Women</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Shop</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Sale</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">Pages</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">About Us</a></li>
                            <li><a class="dropdown-item" href="#">Shop</a></li>
                            <li><a class="dropdown-item" href="#">Blog</a></li>
                            <li><a class="dropdown-item" href="#">Single Product</a></li>
                        </ul>
                    </li>
                </ul>
                <div>
                    <a href="#" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#signupModal"><i class="fa-solid fa-user-plus"></i> Signup</a>
                    <a href="#" class="btn btn-outline-danger ms-2"><i class="fa-solid fa-shopping-cart"></i> Cart</a>
                    <a href="#" class="btn btn-outline-success ms-2" data-bs-toggle="modal" data-bs-target="#loginModal"><i class="fa-solid fa-sign-in-alt"></i> Login</a>
                </div>
            </div>
        </div>
    </nav>
    
    <!-- Signup Modal -->
    <div class="modal fade" id="signupModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Signup</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div id="signupMsg"></div> <!-- Error/Success Messages Will Appear Here -->
                <input type="text" id="name" class="form-control mb-3" placeholder="Name">
                <input type="email" id="email" class="form-control mb-3" placeholder="Email">
                <input type="password" id="password" class="form-control mb-3" placeholder="Password">
            </div>
            <div class="modal-footer">
                <button id="signupBtn" class="btn btn-primary">Signup</button>
            </div>
        </div>
    </div>
</div>

    
    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div id="loginMsg"></div> <!-- Error/Success Messages Will Appear Here -->
                <input type="email" id="loginEmail" class="form-control mb-3" placeholder="Email">
                <input type="password" id="loginPassword" class="form-control mb-3" placeholder="Password">
            </div>
            <div class="modal-footer">
                <button id="loginBtn" class="btn btn-success">Login</button>
            </div>
        </div>
    </div>
</div>

    <div class="banner">
        <img src="imagesproduct/shoe1.jpg" alt="Shoe 1">
        <img src="imagesproduct/shoe2.jpg" alt="Shoe 2">
    </div>

    <div class="container">
        <div class="discount-container">
            <div class="discount-content">
                <h2>10% OFF Discount Coupons</h2>
                <p>Subscribe us to get 10% OFF on all the purchases</p>
                <input type="email" class="email-input" placeholder="Enter your email">
                <button class="subscribe-btn">Subscribe</button>
            </div>
        </div>
    </div>
    
    <div class="container featured-section">
        <h2>Featured Products</h2>
        <div class="product-container">
            
            <!-- Product 1 -->
            <div class="product-card" data-bs-toggle="modal" data-bs-target="#productModal1">
                <img src="imagesproduct/card1.jpg" alt="Product 1">
                <div class="product-icons">
                    <a href="#"><i class="fa-solid fa-search"></i></a>
                    <a href="#"><i class="fa-solid fa-lock"></i></a>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="product-card" data-bs-toggle="modal" data-bs-target="#productModal2">
                <img src="imagesproduct/card4.jpg" alt="Product 2">
                <div class="product-icons">
                    <a href="#"><i class="fa-solid fa-search"></i></a>
                    <a href="#"><i class="fa-solid fa-lock"></i></a>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="product-card" data-bs-toggle="modal" data-bs-target="#productModal3">
                <img src="imagesproduct/char.webp" alt="Product 3">
                <div class="product-icons">
                    <a href="#"><i class="fa-solid fa-search"></i></a>
                    <a href="#"><i class="fa-solid fa-lock"></i></a>
                </div>
            </div>

            <!-- Product 4 -->
            <div class="product-card" data-bs-toggle="modal" data-bs-target="#productModal4">
                <img src="imagesproduct/chevex.jpg" alt="Product 4">
                <div class="product-icons">
                    <a href="#"><i class="fa-solid fa-search"></i></a>
                    <a href="#"><i class="fa-solid fa-lock"></i></a>
                </div>
            </div>

            <!-- Product 5 -->
            <div class="product-card" data-bs-toggle="modal" data-bs-target="#productModal5">
                <img src="imagesproduct/dell.jpg" alt="Product 5">
                <div class="product-icons">
                    <a href="#"><i class="fa-solid fa-search"></i></a>
                    <a href="#"><i class="fa-solid fa-lock"></i></a>
                </div>
            </div>

        </div>
    </div>

    <!-- Product Modal -->
    <!-- Product Modal -->
<div class="modal fade" id="productModal1" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            
            <!-- Close Button (X) -->
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <img src="imagesproduct/card1.jpg" alt="Product Image">
                <h3>Running Shoes For Men</h3>
                <h4>$99</h4>
                <p>
                    Buy good shoes and a good mattress, because when you're not in one you're in the other. 
                    With four pairs of shoes, I can travel the world.
                </p>
                <p><strong>Colour Shown:</strong> Red, White, Black</p>
                <p><strong>Style:</strong> SM3018-100</p>
                <p><strong>Categories:</strong> Clothing, Men's Clothes, Tops & T-Shirts</p>
                <button class="add-to-cart-btn">Add to Cart</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="productModal2" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            
            <!-- Close Button (X) -->
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <img src="imagesproduct/card4.jpg" alt="Product Image">
                <h3>Running Shoes For Men</h3>
                <h4>$99</h4>
                <p>
                    Buy good shoes and a good mattress, because when you're not in one you're in the other. 
                    With four pairs of shoes, I can travel the world.
                </p>
                <p><strong>Colour Shown:</strong> Red, White, Black</p>
                <p><strong>Style:</strong> SM3018-100</p>
                <p><strong>Categories:</strong> Clothing, Men's Clothes, Tops & T-Shirts</p>
                <button class="add-to-cart-btn">Add to Cart</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="productModal3" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            
            <!-- Close Button (X) -->
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <img src="imagesproduct/char.webp" alt="Product Image">
                <h3>Running Shoes For Men</h3>
                <h4>$99</h4>
                <p>
                    Buy good shoes and a good mattress, because when you're not in one you're in the other. 
                    With four pairs of shoes, I can travel the world.
                </p>
                <p><strong>Colour Shown:</strong> Red, White, Black</p>
                <p><strong>Style:</strong> SM3018-100</p>
                <p><strong>Categories:</strong> Clothing, Men's Clothes, Tops & T-Shirts</p>
                <button class="add-to-cart-btn">Add to Cart</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="productModal4" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            
            <!-- Close Button (X) -->
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <img src="imagesproduct/chevex.jpg" alt="Product Image">
                <h3>Running Shoes For Men</h3>
                <h4>$99</h4>
                <p>
                    Buy good shoes and a good mattress, because when you're not in one you're in the other. 
                    With four pairs of shoes, I can travel the world.
                </p>
                <p><strong>Colour Shown:</strong> Red, White, Black</p>
                <p><strong>Style:</strong> SM3018-100</p>
                <p><strong>Categories:</strong> Clothing, Men's Clothes, Tops & T-Shirts</p>
                <button class="add-to-cart-btn">Add to Cart</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="productModal5" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            
            <!-- Close Button (X) -->
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <img src="imagesproduct/dell.jpg" alt="Product Image">
                <h3>Running Shoes For Men</h3>
                <h4>$99</h4>
                <p>
                    Buy good shoes and a good mattress, because when you're not in one you're in the other. 
                    With four pairs of shoes, I can travel the world.
                </p>
                <p><strong>Colour Shown:</strong> Red, White, Black</p>
                <p><strong>Style:</strong> SM3018-100</p>
                <p><strong>Categories:</strong> Clothing, Men's Clothes, Tops & T-Shirts</p>
                <button class="add-to-cart-btn">Add to Cart</button>
            </div>
        </div>
    </div>
</div>

<h2 class="fashion-sales-title">
    <i class="fa-solid fa-fire"></i> Latest Fashion Sales
</h2>

<div class="sales-container">
    <div class="sales-item" data-bs-toggle="modal" data-bs-target="#salesModal1">
        <img src="imagesproduct/men1.jpg" alt="Product 1">
        <div class="hover-icons">
            <i class="fa-solid fa-search"></i>
            <i class="fa-solid fa-lock"></i>
        </div>
    </div>
    <div class="sales-item" data-bs-toggle="modal" data-bs-target="#salesModal2">
        <img src="imagesproduct/men2.jpg" alt="Product 2">
        <div class="hover-icons">
            <i class="fa-solid fa-search"></i>
            <i class="fa-solid fa-lock"></i>
        </div>
    </div>
    <div class="sales-item" data-bs-toggle="modal" data-bs-target="#salesModal3">
        <img src="imagesproduct/men3.jpg" alt="Product 3">
        <div class="hover-icons">
            <i class="fa-solid fa-search"></i>
            <i class="fa-solid fa-lock"></i>
        </div>
    </div>
    <div class="sales-item" data-bs-toggle="modal" data-bs-target="#salesModal4">
        <img src="imagesproduct/men4.webp" alt="Product 4">
        <div class="hover-icons">
            <i class="fa-solid fa-search"></i>
            <i class="fa-solid fa-lock"></i>
        </div>
    </div>
    <div class="sales-item" data-bs-toggle="modal" data-bs-target="#salesModal5">
        <img src="imagesproduct/men5.jpg" alt="Product 5">
        <div class="hover-icons">
            <i class="fa-solid fa-search"></i>
            <i class="fa-solid fa-lock"></i>
        </div>
    </div>
</div>

<div class="modal fade" id="salesModal1" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Elegant Women's Dress</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="imagesproduct/men1.jpg" class="img-fluid" alt="Women's Dress">
                <h4>$79.99</h4>
                <p>Elegant and stylish dress perfect for any occasion. Made from high-quality fabric for ultimate comfort.</p>
                <ul>
                    <li><strong>Color:</strong> Red, White, Blue</li>
                    <li><strong>Size:</strong> S, M, L, XL</li>
                    <li><strong>Category:</strong> Women's Clothing</li>
                </ul>
                <button class="btn btn-primary">Add to Cart</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="salesModal2" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Elegant Women's Dress</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="imagesproduct/men2.jpg" class="img-fluid" alt="Women's Dress">
                <h4>$79.99</h4>
                <p>Elegant and stylish dress perfect for any occasion. Made from high-quality fabric for ultimate comfort.</p>
                <ul>
                    <li><strong>Color:</strong> Red, White, Blue</li>
                    <li><strong>Size:</strong> S, M, L, XL</li>
                    <li><strong>Category:</strong> Women's Clothing</li>
                </ul>
                <button class="btn btn-primary">Add to Cart</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="salesModal3" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Elegant Women's Dress</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="imagesproduct/men3.jpg" class="img-fluid" alt="Women's Dress">
                <h4>$79.99</h4>
                <p>Elegant and stylish dress perfect for any occasion. Made from high-quality fabric for ultimate comfort.</p>
                <ul>
                    <li><strong>Color:</strong> Red, White, Blue</li>
                    <li><strong>Size:</strong> S, M, L, XL</li>
                    <li><strong>Category:</strong> Women's Clothing</li>
                </ul>
                <button class="btn btn-primary">Add to Cart</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="salesModal4" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Elegant Women's Dress</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="imagesproduct/men4.webp" class="img-fluid" alt="Women's Dress">
                <h4>$79.99</h4>
                <p>Elegant and stylish dress perfect for any occasion. Made from high-quality fabric for ultimate comfort.</p>
                <ul>
                    <li><strong>Color:</strong> Red, White, Blue</li>
                    <li><strong>Size:</strong> S, M, L, XL</li>
                    <li><strong>Category:</strong> Women's Clothing</li>
                </ul>
                <button class="btn btn-primary">Add to Cart</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="salesModal5" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Elegant Women's Dress</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="imagesproduct/men5.jpg" class="img-fluid" alt="Women's Dress">
                <h4>$79.99</h4>
                <p>Elegant and stylish dress perfect for any occasion. Made from high-quality fabric for ultimate comfort.</p>
                <ul>
                    <li><strong>Color:</strong> Red, White, Blue</li>
                    <li><strong>Size:</strong> S, M, L, XL</li>
                    <li><strong>Category:</strong> Women's Clothing</li>
                </ul>
                <button class="btn btn-primary">Add to Cart</button>
            </div>
        </div>
    </div>
</div>

<section class="winter-collection">
    <div class="winter-image">
        <img src="imagesproduct/men6.webp" alt="Winter Collection">
    </div>
    <div class="winter-content">
        <h2>Classic Winter Collection</h2>
        <p>
            Embrace the chill with our **Classic Winter Collection**, designed to keep you warm and stylish. 
            From cozy jackets to premium woolen sweaters, find everything you need to stay comfortable in the cold.
            Our collection features high-quality fabrics, timeless designs, and unbeatable warmth. 
            Explore the latest trends and make a statement this winter!
        </p>
        <button class="shop-btn">Shop Collection</button>
    </div>
</section>

<section class="feedback-section">
    <h2>What Our Customers Say</h2>
    <div class="feedback-container">
        <div class="feedback-card">
            <img src="imagesproduct/img1.jpeg" alt="User">
            <h4>Chaitanya Mankar</h4>
            <p>"Amazing quality and fast delivery! The winter collection is absolutely stunning. Highly recommend!"</p>
        </div>
        <div class="feedback-card">
            <img src="imagesproduct/img2.jpeg" alt="User">
            <h4>Suraj Tiwari</h4>
            <p>"Best shopping experience ever. The material is so comfortable and stylish. Will shop again!"</p>
        </div>
        <div class="feedback-card">
            <img src="imagesproduct/img3.jpeg" alt="User">
            <h4>Sarang Rajankar</h4>
            <p>"I love the winter jackets! Super warm and fashionable. Definitely worth the price."</p>
        </div>
        <div class="feedback-card">
            <img src="imagesproduct/img4.jpeg" alt="User">
            <h4>Romit Borkar</h4>
            <p>"The best online store for trendy clothes. The designs are fresh and unique. Highly satisfied!"</p>
        </div>
        <div class="feedback-card">
            <img src="imagesproduct/img5.jpeg" alt="User">
            <h4>Dipendar Chauturvedi</h4>
            <p>"Excellent customer service and top-notch product quality. I’m a regular buyer now!"</p>
        </div>
    </div>
</section>

 
<footer class="footer">
    <div class="footer-container">
        <!-- Info Section -->
        <div class="footer-column">
            <h3>Info</h3>
            <ul>
                <li><a href="#">Track Your Order</a></li>
                <li><a href="#">Our Blog</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Shipping</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Help</a></li>
                <li><a href="#">Community</a></li>
            </ul>
        </div>

        <!-- Company Section -->
        <div class="footer-column">
            <h3>Company</h3>
            <ul>
                <li><a href="#">About</a></li>
                <li><a href="#">History</a></li>
                <li><a href="#">Our Team</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Manufacture</a></li>
                <li><a href="#">Wholesale</a></li>
                <li><a href="#">Retail</a></li>
            </ul>
        </div>

        <!-- Popular Section -->
        <div class="footer-column">
            <h3>Popular</h3>
            <ul>
                <li><a href="#">Prices Drop</a></li>
                <li><a href="#">New Products</a></li>
                <li><a href="#">Best Sales</a></li>
                <li><a href="#">Stores</a></li>
                <li><a href="#">Login</a></li>
                <li><a href="#">Cart</a></li>
                <li><a href="#">Mens Collection</a></li>
            </ul>
        </div>

        <!-- Contact Section -->
        <div class="footer-column">
            <h3>Contact Us</h3>
            <p><strong>Atex Mart Store</strong><br>123 Main Street, Nandanvan-Nagpur.</p>
            <p><strong>Call us:</strong> (+91) 83974-8375</p>
            <p><strong>Email:</strong> contact@yourwebsite.com</p>
        </div>
    </div>

    <!-- Copyright Section -->
    <div class="footer-bottom">
        <p>© 2025 Atex Mart Store. All Rights Reserved.</p>
    </div>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function () {
    $("#signupBtn").click(function () {
        var name = $("#name").val();
        var email = $("#email").val();
        var password = $("#password").val();

        $.ajax({
            url: "signup.php",
            type: "POST",
            data: { name: name, email: email, password: password },
            success: function (response) {
                $("#signupMsg").html(response);  // Show message inside modal
                setTimeout(function () { $(".alert").fadeOut(); }, 3000); // Hide message after 3 sec
            }
        });
    });
});
</script>
<script>
$(document).ready(function () {
    $("#loginBtn").click(function () {
        var email = $("#loginEmail").val();
        var password = $("#loginPassword").val();

        $.ajax({
            url: "login.php",
            type: "POST",
            data: { email: email, password: password },
            success: function (response) {
                $("#loginMsg").html(response);  // Show message inside modal
                setTimeout(function () { $(".alert").fadeOut(); }, 3000); // Hide message after 3 sec

                if (response.includes("success")) {
                    setTimeout(function () { window.location.href = "index1.php"; }, 2000); // Redirect
                }
            }
        });
    });
});
</script>
</body>
</html>