<?php include('header.php');


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        /* Card Box Shadow */
        body
        {
            background-color:#FBF5DF;
        }
.card {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

/* Card Hover Effect */
.card:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
}

/* Button Hover Effect */
.btn-info {
    transition: background-color 0.3s ease, color 0.3s ease;
}

.btn-info:hover {
    background-color: #0073e6;
    color: white;
}
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

        /* Search bar */
        .search-bar {
            width: 300px;
            border-radius: 25px;
            border: 1px solid #ccc;
            padding: 5px 15px;
        }

        /* Page Title Styling */
        .page-title {
            background-color: #82B1FF;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            font-size: 1.5rem;
            font-weight: bold;
            color: #0073e6;
        }

        /* Product Listing Styling */
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
        display: none; /* Hide sidebar on smaller screens */
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
                        <a class="nav-link" href="index5.php" style="margin-right:25px;">Furnitures</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index2.php" style="margin-right:25px;">Drinks</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="margin-right:25px;">Latest trends</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index4.php" style="margin-right:25px;">Jwelleries</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index1.php" style="margin-right:25px;">Electronics</a>
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
    <div>
    <div class="container mt-5" style="margin-bottom:60px;">
        <div class="row g-4">
            <div col-md-3>
            <!-- Repeat the existing cards here -->
            <div class="page-title mb-4">

            Sales of Mobiles phones , Electronic Gadgets and Laptops - Flat 50%Off
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
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                                <img src="images/iphone1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Iphone 11</h5>
                            <p class="card-text">Price Rs 50,000</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                            <input type="hidden" name="Item_Name" value="Iphone 11">
                            <input type="hidden" name="Price" value="50000">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/iphone3.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Iphone 10</h5>
                            <p class="card-text">Price Rs 60,000</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                            <input type="hidden" name="Item_Name" value="Iphone 13">
                            <input type="hidden" name="Price" value="60000">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/iphone4.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Iphone 9</h5>
                            <p class="card-text">Price Rs 60,000</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                            <input type="hidden" name="Item_Name" value="Iphone 14">
                            <input type="hidden" name="Price" value="60000">
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                                <img src="images/samsung1.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Samsung M20</h5>
                            <p class="card-text">Price Rs 20,000</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                            <input type="hidden" name="Item_Name" value="samsung M20">
                            <input type="hidden" name="Price" value="20000">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/samsung3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Galaxy A23</h5>
                            <p class="card-text">Price Rs 15,000</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                            <input type="hidden" name="Item_Name" value="Galaxy A23">
                            <input type="hidden" name="Price" value="15500">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/samsung4.avif" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Galaxy A53</h5>
                            <p class="card-text">Price Rs 20,000</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                            <input type="hidden" name="Item_Name" value="Galaxy A53">
                            <input type="hidden" name="Price" value="20000">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                                <img src="images/oppo1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Oppo A16K</h5>
                            <p class="card-text">Price Rs 20,000</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                            <input type="hidden" name="Item_Name" value="Oppo A16K">
                            <input type="hidden" name="Price" value="20000">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/redmi1.avif" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Redmi 9</h5>
                            <p class="card-text">Price Rs 15,000</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                            <input type="hidden" name="Item_Name" value="Redmi 9">
                            <input type="hidden" name="Price" value="15500">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/lenevo1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Lenevo 5G</h5>
                            <p class="card-text">Price Rs 20,000</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                            <input type="hidden" name="Item_Name" value="Lenevo 5G">
                            <input type="hidden" name="Price" value="20000">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                                <img src="images/victus.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">victus I7 processor</h5>
                            <p class="card-text">Price Rs 100,000</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                            <input type="hidden" name="Item_Name" value="Victus I7 processor">
                            <input type="hidden" name="Price" value="100000">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/dell.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Dell I5 processor</h5>
                            <p class="card-text">Price Rs 45,000</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                            <input type="hidden" name="Item_Name" value="Dell I5 processor">
                            <input type="hidden" name="Price" value="40000">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/hp.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">HP I3 processor</h5>
                            <p class="card-text">Price Rs 35,000</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                            <input type="hidden" name="Item_Name" value="HP I3 processor">
                            <input type="hidden" name="Price" value="35000">
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

</body>

</html>
