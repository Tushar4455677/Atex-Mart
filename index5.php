<?php include('header4.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive E-Commerce Layout</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <style>
        /* Styling the Product Divs */
        .product-div {
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            border-radius: 10px;
            background-color: #2a2a2a;
        }
        .product-div:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(255, 255, 255, 0.2);
        }
        .product-div img {
            border-radius: 10px;
            box-shadow: 0 5px 10px rgba(255, 255, 255, 0.1);
        }

        /* Sidebar Styling */
        .sidebar {
            background-color: #343a40;
            color: #fff;
            padding: 15px;
            height: 100vh;
           /*  position: fixed; */
            right: 0;
            top: 0;
            overflow-y: auto;
            margin-top:40px;
        }

        /* General Body Styling */
         body {
            background-color: #1a1a1a;
            color: #fff;
        }
 
        .sidebar h4 {
            margin-top: 20px;
        }
        .icon-container {
            text-align: start; /* Icons ko center align karne ke liye */
        }
        .icon {
            display: inline-block; /* Inline-block se side by side aayenge */
            margin: 10px; /* Icons ke beech mein gap ke liye */
            font-size: 30px; /* Icon ka size */
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="images/Shopping.png" alt="" width="40px" height="40px"
                style="margin-right: 20px;"><b>Atex Mart</b></a>
            <form class="d-flex mx-auto">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light" type="submit">Search</button>
            </form>
            <ul class="navbar-nav m-3">
                <li class="nav-item"><a class="nav-link" href="#" style="margin-right: 30px;">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#" style="margin-right: 30px;">Products</a></li>
                <li class="nav-item"><a class="nav-link" href="#" style="margin-right: 30px;">Contact</a></li>
                <li class="nav-item"><a class="nav-link" href="#" style="margin-right: 30px;">Shop</a></li>
                <li class="nav-item"><a class="nav-link" href="index1.php" style="margin-right: 30px;">Electronics</a></li>
                <li class="nav-item"><a class="nav-link" href="index3.php" style="margin-right: 30px;">Traditionals</a></li>
                <li class="nav-item"><a class="nav-link" href="#" style="margin-right: 30px;">Beauty Products</a></li>
                <li class="nav-item"><a class="nav-link" href="index4.php" style="margin-right: 30px;">Jwelleries</a></li>
                <li class="nav-item"><a class="nav-link" href="index2.php" style="margin-right: 30px;">Drinks</a></li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container-fluid">
        <div class="row">
            <!-- Product Section -->
            <div class="col-md-9">
                <div class="container my-5">
                    <div class="product-div d-flex align-items-center p-3 mb-4">
                        <img src="images1/furni1.avif" alt="Product Image" class="img-fluid me-3" style="max-width: 150px;">
                        <div>
                            <h5 class="mb-2"><i>Eco freindly Furnitures</i></h5>
                            <div class="icon-container">
                                <div class="icon"><img src="images1/icons8-star-filled-30.png" alt="" style="height: 22px;"></div>
                                <div class="icon"><img src="images1/icons8-star-filled-30.png" alt="" style="height: 22px;"></div>
                                <div class="icon"><img src="images1/icons8-star-filled-30.png" alt="" style="height: 22px;"></div>
                                <div class="icon"><img src="images1/icons8-star-filled-30.png" alt="" style="height: 22px;"></div>
                                <div class="icon"><img src="images1/icons8-star-filled-30.png" alt="" style="height: 22px;"> </div>
                            </div>
                            <p class="mb-1">Ratings: 10/10</p>
                            <p class="mb-3">these Furnitures are made by vary highly skilled labours which are so delegated</p>
                            <div class="d-flex justify-content-between align-items-center">
                            <form action="manage_cart4.php" method="POST">
                                <span class="me-3">$49.99</span>
                                <button class="btn btn-light me-2" name="Add_To_Cart">Add to Cart</button>
                                <button class="btn btn-outline-light">Details</button>
                                <input type="hidden" name="Item_Name" value="timeless Necklaces">
                            <input type="hidden" name="Price" value="900000">
                            </form>
                            </div>
                        </div>
                    </div>

                    <div class="product-div d-flex align-items-center p-3 mb-4">
                        <img src="images1/furni2.jpg" alt="Product Image" class="img-fluid me-3" style="max-width: 150px;">
                        <div>
                            <h5 class="mb-2"><i>Home Furnitures</i></h5>
                            <div class="icon-container">
                                <div class="icon"><img src="images1/icons8-star-filled-30.png" alt="" style="height: 22px;"></div>
                                <div class="icon"><img src="images1/icons8-star-filled-30.png" alt="" style="height: 22px;"></div>
                                <div class="icon"><img src="images1/icons8-star-filled-30.png" alt="" style="height: 22px;"></div>
                                <div class="icon"><img src="images1/icons8-star-filled-30.png" alt="" style="height: 22px;"></div>
                                <div class="icon"><img src="images1/icons8-star-filled-30.png" alt="" style="height: 22px;"> </div>
                            </div>
                            <p class="mb-1">Ratings: 10/10</p>
                            <p class="mb-3">Home Furnitures are now available in 50%off sofa,beds</p>
                            <div class="d-flex justify-content-between align-items-center">
                            <form action="manage_cart4.php" method="POST">
                                <span class="me-3">$59.99</span>
                                <button class="btn btn-light me-2" name="Add_To_Cart">Add to Cart</button>
                                <button class="btn btn-outline-light">Details</button>
                                <input type="hidden" name="Item_Name" value="Pure Gold Necklaces">
                            <input type="hidden" name="Price" value="5000000">
                            </form>
                            </div>
                        </div>
                    </div>
                    <div class="product-div d-flex align-items-center p-3 mb-4">
                        <img src="images1/furni3.avif" alt="Product Image" class="img-fluid me-3" style="max-width: 150px;">
                        <div>
                            <h5 class="mb-2"><i>Bamboo strong furnitures for Home</i></h5>
                            <div class="icon-container">
                                <div class="icon"><img src="images1/icons8-star-filled-30.png" alt="" style="height: 22px;"></div>
                                <div class="icon"><img src="images1/icons8-star-filled-30.png" alt="" style="height: 22px;"></div>
                                <div class="icon"><img src="images1/icons8-star-filled-30.png" alt="" style="height: 22px;"></div>
                                <div class="icon"><img src="images1/icons8-star-filled-30.png" alt="" style="height: 22px;"></div>
                                <div class="icon"><img src="images1/icons8-star-filled-30.png" alt="" style="height: 22px;"> </div>
                            </div>
                            <p class="mb-1">Ratings: 10/10</p>
                            <p class="mb-3">Furnitures which are stong made by Bambooes and woods easty to handle at home</p>
                            <div class="d-flex justify-content-between align-items-center">
                            <form action="manage_cart4.php" method="POST">
                                <span class="me-3">$59.99</span>
                                <button class="btn btn-light me-2" name="Add_To_Cart">Add to Cart</button>
                                <button class="btn btn-outline-light">Details</button>
                                <input type="hidden" name="Item_Name" value="Everyday Elegance Necklaces">
                            <input type="hidden" name="Price" value="1000000">
                            </form>
                            </div>
                        </div>
                    </div>
                    <div class="product-div d-flex align-items-center p-3 mb-4">
                        <img src="images1/furni4.webp" alt="Product Image" class="img-fluid me-3" style="max-width: 150px;">
                        <div>
                            <h5 class="mb-2"><h5><i>sofa,Beds, and room furnitures</i></h5>
                            <div class="icon-container">
                                <div class="icon"><img src="images1/icons8-star-filled-30.png" alt="" style="height: 22px;"></div>
                                <div class="icon"><img src="images1/icons8-star-filled-30.png" alt="" style="height: 22px;"></div>
                                <div class="icon"><img src="images1/icons8-star-filled-30.png" alt="" style="height: 22px;"></div>
                                <div class="icon"><img src="images1/icons8-star-filled-30.png" alt="" style="height: 22px;"></div>
                                <div class="icon"><img src="images1/icons8-star-filled-30.png" alt="" style="height: 22px;"> </div>
                            </div>
                            <p class="mb-1">Ratings: 10/10</p>
                            <p class="mb-3"></p>room furnitures enhances beatiful impact at hall at home
                            <div class="d-flex justify-content-between align-items-center">
                            <form action="manage_cart4.php" method="POST">
                                <span class="me-3">$59.99</span>
                                <button class="btn btn-light me-2" name="Add_To_Cart">Add to Cart</button>
                                <button class="btn btn-outline-light">Details</button>
                                <input type="hidden" name="Item_Name" value="Modern Design Necklaces">
                            <input type="hidden" name="Price" value="50000">
                            </form>
                            </div>
                        </div>
                    </div>
                    <div class="product-div d-flex align-items-center p-3 mb-4">
                        <img src="images1/furni5.jpg" alt="Product Image" class="img-fluid me-3" style="max-width: 150px;">
                        <div>
                            <h5 class="mb-2"><i>Furnitures for bedrooms</i></h5>
                            <div class="icon-container">
                                <div class="icon"><img src="images1/icons8-star-filled-30.png" alt="" style="height: 22px;"></div>
                                <div class="icon"><img src="images1/icons8-star-filled-30.png" alt="" style="height: 22px;"></div>
                                <div class="icon"><img src="images1/icons8-star-filled-30.png" alt="" style="height: 22px;"></div>
                                <div class="icon"><img src="images1/icons8-star-filled-30.png" alt="" style="height: 22px;"></div>
                                <div class="icon"><img src="images1/icons8-star-filled-30.png" alt="" style="height: 22px;"> </div>
                            </div>
                            
                            <p class="mb-1">Ratings: 10/10</p>
                            <p class="mb-3">Wood furnitures for bedrooms are now available in least cost</p>
                            <div class="d-flex justify-content-between align-items-center">
                            <form action="manage_cart4.php" method="POST">
                                <span class="me-3">$59.99</span>
                                <button class="btn btn-light me-2" name="Add_To_Cart">Add to Cart</button>
                                <button class="btn btn-outline-light">Details</button>
                                <input type="hidden" name="Item_Name" value="Luxury Necklaces">
                            <input type="hidden" name="Price" value="10000">
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar Section -->
            <div class="col-md-3 sidebar mb-3">
                <h4>Prototype</h4>
                <form class="form">
                    <input type="search" class="form-control" placeholder="search ATEX-MART" style="width:300px;margin-top: 20px;">
                    </form>
        
                <ul class="list-unstyled">
                    <li style="margin-top: 20px;">People</li>
                    <li style="margin-top: 8px;">Watch</li>
                    <li style="margin-top: 8px;">Cinema</li>
                    <li style="margin-top: 8px;">Clothes</li>
                    <li style="margin-top: 8px;">Foods</li>
                </ul>
                <h4>Brands</h4>
                <form>
                    <div>
                        <input type="checkbox" id="merchandise">
                        <label for="merchandise" style="margin-top: 8px;">Merchandise</label>
                    </div>
                    <div>
                        <input type="checkbox" id="mercedes">
                        <label for="mercedes"  style="margin-top: 8px;">Mercedes</label>
                    </div>
                    <div>
                        <input type="checkbox" id="Toyota">
                        <label for="mercedes"  style="margin-top: 8px;">Toyota</label>
                    </div>
                    <div>
                        <input type="checkbox" id="Alto">
                        <label for="mercedes"  style="margin-top: 8px;">Mercedes</label>
                    </div>
                    <div>
                        <input type="checkbox" id="Raneg Rovvers">
                        <label for="mercedes"  style="margin-top: 8px;">Range Rovvers</label>
                    </div>
                    <div>
                        <input type="checkbox" id="Nissan">
                        <label for="mercedes"  style="margin-top: 8px;">Nissan</label>
                    </div>
                    <div>
                        <input type="checkbox" id="Honda">
                        <label for="mercedes"  style="margin-top: 8px;">Honda</label>
                    </div>
                    <div>
                        <input type="checkbox" id="Mitsubishi">
                        <label for="mercedes"  style="margin-top: 8px;">Mitsubishi</label>
                    </div>
                </form>
                <h4>Product Range</h4>
                <input type="range" class="form-range" min="0" max="100"  style="margin-top: 8px;">
                <p>Min <span class="float-end">Max</span></p>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
