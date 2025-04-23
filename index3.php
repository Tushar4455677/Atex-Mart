<?php include('header2.php'); ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        
         .navbar {
            background-color: #2c3e50;
        }

        .navbar .navbar-brand,
        .navbar .nav-link {
            color: #FAFAFA;
        }

        .navbar .nav-link:hover {
            color: #f0ad4e;
        }

      
        .search-bar {
            width: 300px;
            border-radius: 25px;
            border: 1px solid #ccc;
            padding: 5px 15px;
        }

        
        .page-title {
            background-color: #82B1FF;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            font-size: 1.5rem;
            font-weight: bold;
            color: #0073e6;
        }

      
        .product-listing {
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 10px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .product-listing:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .card {
    border: none;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    transition: all 0.3s ease-in-out;
    cursor: pointer;
}

.card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 30px rgba(0,0,0,0.2);
}

.card-img-top {
    transition: transform 0.5s ease;
    height: 250px;
    object-fit: cover;
}

.card:hover .card-img-top {
    transform: scale(1.1);
}

.card-body {
    padding: 15px;
    background: linear-gradient(135deg, #f9f9f9, #ffffff);
    text-align: center;
}

.card-title {
    font-size: 1.2rem;
    font-weight: 600;
    color: #333;
}

.card-text {
    color: #555;
    margin-bottom: 15px;
    font-size: 1rem;
}

.btn-info {
    background: #00bcd4;
    border: none;
    padding: 10px 25px;
    border-radius: 30px;
    font-weight: bold;
    transition: background 0.3s ease;
}

.btn-info:hover {
    background: #0288d1;
    color: #fff;
}

.sidebar
{
    position:fixed;
    left:0;
    top:0;
    height:100vh;
    width:330px;
    background-color:#FFAA1D;
    padding:20px;
    border-right:1px solid #ddd;
    overflow-x:auto;
    transition:all 0.5s rgba ease;
    box-shadow:2px 0 5px rgba(0,0,0,0.1);
    

}
.sidebar:hover
{
    left:0;
}
h4,h5
{
    color:#333;
    font-weight:bold;
    transition:color 0.3s ease;
}
h4:hover,h5:hover
{
    color:#007bff;
}
.list-unstyled li{
    padding:5px 0;
    cursor:pointer;
    transition:transform 0.3s ease ,color 0.3s ease;

}
.list-unstyled li:hover
{
    color:#007bff;
    transform:translateX(10px);
}
.form-check-label{
   cursor:pointer;
   transition:color 0.3s ease, transform 0.3s ease;
}
.form-check-label:hover
{
    background:linear-gradient(to-right,#007bff,#ddd);
    height:6px;
    border-radius:5px;
    cursor:pointer;
}
.form-range{
    background:linear-gradient(to-right,#007bff,#ddd);
    height:6px;
    border-radius:5px;
    cursor:pointer;
}
.form-range:hover
{
    background:linear-gradient(to-right,#0056b3,#bbb);
}
.containers
{
    transition : margin-left 0.5s ease;
}


        /* Responsive Cards */
        @media (max-width: 768px) {
            .search-bar {
                width: 100%;
            }
            .sidebar {
                display: none;
            }
        }
    </style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark pb-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">MyShop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 mr-5">
                    <li class="nav-item">
                        <a class="nav-link " href="#" style="margin-right:25px;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="margin-right:25px;">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="margin-right:25px;">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="margin-right:25px;">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index1.php" style="margin-right:25px;">Electronics</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="margin-right:25px;">Latest trends</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index5.php" style="margin-right:25px;">Furnitures</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index4.php" style="margin-right:25px;">Jwelleries</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index3.php" style="margin-right:25px;">Traditionals</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="search-bar" type="search" placeholder="Search Products" aria-label="Search">
                    <button class="btn btn-info ms-2" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Page Title -->
    
    <!-- Product Cards -->
     <div>
    <div class="container mt-5" style="margin-bottom:60px;">
        <div class="row g-4">
            <div col-md-3>
            <!-- Repeat the existing cards here -->
            <div class="page-title mb-4">
                Menas and Womens traditional and fashion Dresses-Flat 50%Off
    </div>
    </div>
    <div class="sidebar" style="position:absolute;top:290px;left: 1140px;">
        <h4>Product type</h4>
        <div class="mb-5 mt-4">
            <input type="text" class="form-control" placeholder="search here...">
        </div>
        <h5 class="mt-4">Names</h5>
        <ul class="lst-unstyled">
            <li>People</li>
            <li>watch</li>
            <li>cinema</li>
            <li>clothes</li>
            <li>foods</li>
            <li>cars</li>
        </ul>
        <h5 class="mt-4 mb-4">
            Brands
        </h5>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="brand1">
            <label for="brand1" class="form-check-label">Mercedes</label>

        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="brand2">
            <label for="brand2" class="form-check-label">Toyota</label>

        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="brand3">
            <label for="brand3" class="form-check-label">Maruti</label>

        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="brand4">
            <label for="brand4" class="form-check-label">Nissan</label>

        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="brand5">
            <label for="brand5" class="form-check-label">Range rovvers</label>

        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="brand6">
            <label for="brand66" class="form-check-label">alto</label>

        </div>
        <h5 class="mt-4">Product range</h5>
        <input type="range" class="form-range" min="0" max="100" step="1"></div>


    <div class="row mt-5">
            <div class="col-lg-3">
                <form action="manage_cart2.php" method="POST">
                    <div class="card">
                                <img src="images1/t1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Mens Kurtas</h5>
                            <p class="card-text">Price Rs 500</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                            <input type="hidden" name="Item_Name" value="Mens Kurtas">
                            <input type="hidden" name="Price" value="500">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart2.php" method="POST">
                    <div class="card">
                        <img src="images1/t3.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Mens Latest Traditional Kurtas</h5>
                            <p class="card-text">Price Rs 1000</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                            <input type="hidden" name="Item_Name" value="Mens Latest traditional kurtas">
                            <input type="hidden" name="Price" value="1000">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart2.php" method="POST">
                    <div class="card">
                        <img src="images1/t4.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Mens Traditional shaadi kurtas</h5>
                            <p class="card-text">Price Rs 2000</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                            <input type="hidden" name="Item_Name" value="Mens Traditional shaadi kurtas">
                            <input type="hidden" name="Price" value="2000">
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-3">
                <form action="manage_cart2.php" method="POST">
                    <div class="card">
                                <img src="images1/t5.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Mens Kurtas in latest</h5>
                            <p class="card-text">Price Rs 1000</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                            <input type="hidden" name="Item_Name" value="Mens Kurtas in latest">
                            <input type="hidden" name="Price" value="1000">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart2.php" method="POST">
                    <div class="card">
                        <img src="images1/t6.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Mens Wear garments</h5>
                            <p class="card-text">Price Rs 6000</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                            <input type="hidden" name="Item_Name" value="Mens Wear garments">
                            <input type="hidden" name="Price" value="6000">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart2.php" method="POST">
                    <div class="card">
                        <img src="images1/t7.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">mens Formal Wear
                            </h5>
                            <p class="card-text">Price Rs 5000</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                            <input type="hidden" name="Item_Name" value="mens Formal Wear">
                            <input type="hidden" name="Price" value="5000">
                        </div>
                    </div>
                </form>
            </div>
        <div class="row mt-5">
            <div class="col-lg-3">
                <form action="manage_cart2.php" method="POST">
                    <div class="card">
                                <img src="images1/w1.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Womens Beautiful saris</h5>
                            <p class="card-text">Price Rs 2000</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                            <input type="hidden" name="Item_Name" value="Womens Beautiful saris">
                            <input type="hidden" name="Price" value="2000">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart2.php" method="POST">
                    <div class="card">
                        <img src="images1/w2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Womens formal saris</h5>
                            <p class="card-text">Price Rs 1000</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                            <input type="hidden" name="Item_Name" value="Womens formal saris">
                            <input type="hidden" name="Price" value="1000">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart2.php" method="POST">
                    <div class="card">
                        <img src="images1/w3.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Womens latest brands</h5>
                            <p class="card-text">Price Rs 1550</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                            <input type="hidden" name="Item_Name" value="Womens latest brands">
                            <input type="hidden" name="Price" value="1550">
                        </div>
                    </div>
                </form>
            </div>
            
    </div>
        </div>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>
