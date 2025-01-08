<?php
session_start();  // Start the session

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    
    // Add Item to Cart
    if (isset($_POST['Add_To_Cart'])) {
        if (isset($_SESSION['cart'])) {
            // Check if the item is already in the cart
            $myitems = array_column($_SESSION['cart'], 'Item_Name');
            if (in_array($_POST['Item_Name'], $myitems)) {
                echo "<script>
                    alert('Item already added');
                    window.location.href='index3.php';
                </script>";
            } else { 
                $count = count($_SESSION['cart']);
                $_SESSION['cart'][$count] = array(
                    'Item_Name' => $_POST['Item_Name'],
                    'price' => $_POST['Price'],  // Corrected the case here
                    'Quantity' => 1
                );
                echo "<script>
                    alert('Item added to cart');
                    window.location.href='index3.php';
                </script>";
            }
        } else {
            // If cart doesn't exist, create it
            $_SESSION['cart'][0] = array(
                'Item_Name' => $_POST['Item_Name'],
                'price' => $_POST['Price'],  // Corrected the case here
                'Quantity' => 1
            );
            echo "<script>
                alert('Item added to cart');
                window.location.href='index3.php';
            </script>";
        }
    }

    if (isset($_POST['Remove'])) {
        foreach ($_SESSION['cart'] as $key => $value) {
            if($value['Item_Name'] == $_POST['Item_Name']) {
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart'] = array_values($_SESSION['cart']); // Re-index the array
                echo "<script>
                    alert('Item Removed');
                    window.location.href='index3.php';
                </script>";
                break;
            }
        }
    }

        }
    

?>
