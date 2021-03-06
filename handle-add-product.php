<?php
include ("functions.php");
if(isset($_POST['submit']))
{
    $productName=$_POST['name'];
    $description=$_POST['description'];
    $price=$_POST['price'];
    $newPrice= getPriceWithDiscount($price);

    $productDetails=[$productName,$description,$price,$newPrice];

    $errors=[];
    if (empty($productName))
    {
        $errors[]="productName is required";
    } elseif (! is_string($productName) || is_numeric($productName))
    {
        $errors[]="productName must be a string";
    
    } elseif(strlen($productName)>255 || strlen($productName)<5)
    {
        $errors[]="productName maximum 255 chars and minimum 5 chars";
    }
    if (! is_string($description)  || is_numeric($description))
    {
        $errors[]="description must be a string";
    
    }

    if(empty($price))
    {
        $errors[]="price is required";
    } elseif(! is_numeric($price))
    {
        $errors[]="price must be a number";
    } elseif ($price<=0)
    {
        $errors[]="price must be greater than 0";
    }
    
    if(count($errors)>0)
    {
        print_r($errors);
    } else {
        print_r($productDetails);
    }

}