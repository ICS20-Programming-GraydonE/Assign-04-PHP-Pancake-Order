
<!-- Created by: Graydon Ezzeddin -->
<!-- Created on: April 2022 -->
<!-- This file contains the PHP functions for index.html -->

<?php
    
  // Get Pancake Size 
  $sizePancakes = $_POST['size-pancakes'];

  // Declare Pancake Size
  $pancakePrice = 0 ;
  
  if ($sizePancakes == "three-pancakes") {
    $pancakePrice = 10;
  }

  else if ($sizePancakes == "two-pancakes") {
    $pancakePrice = 7;
  }

  else if ($sizePancakes == "kids-pancakes") {
    $pancakePrice = 5;
  }


  // Declare Toppings Price
  $pancakeTopping =  $_POST['pancake-topping'];
    
  $pancakeToppingPrice = 0 ;

  if ($pancakeTopping == "no-topping")  {
    $pancakeToppingPrice = 0;
  }
  
  if ($pancakeTopping == "one-topping") { 
    $pancakeToppingPrice = 1;
  }

  else if ($pancakeTopping == "two-topping") {
    $pancakeToppingPrice = 2;
  }

  else if ($pancakeTopping == "three-topping") {
    $pancakeToppingPrice = 3;
  }


  // Declare Juice Price
  $juiceSize = $_POST['juice-size'];

  $juicePrice = 0 ;

  if ($juiceSize == "large") {
    $juicePrice = 4.50;
  }

  else if ($juiceSize == "medium") {
    $juicePrice = 3;
  }

  else if ($juiceSize == "small") {
    $juicePrice = 1.50;
  }


  //calculate subtotal
  $subtotal = $pancakePrice + $pancakeToppingPrice + $juicePrice;
    
  //calculate tax
  $tax = $subtotal*0.13;

  // Calculate final total price
  $total = $tax+$subtotal;
  // output the price of the pancakes
  echo "Your total price is: $".number_format($total, 2);
?> 
