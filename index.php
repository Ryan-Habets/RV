<?php
session_start();

//check if product is coming or not
if (isset($_GET['pro_id']))  {

    $proid = $_GET['pro_id'];

    // If session cart is not empty
    if (!empty($_SESSION['cart'])) {

        // Using "array_column() function" we get the product id existing in session cart array
        $acol = array_column($_SESSION['cart'], 'pro_id') ;

        // now we compare whether id already exist with "in_array() function" 
        if (in_array($proid, $acol))  {
            
        }
    }
}