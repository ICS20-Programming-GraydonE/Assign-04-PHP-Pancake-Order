<!DOCTYPE html>
<html>
  <head>
    <!--Meta data--> 
    <meta charset="utf-8">
    <meta name="description" content="VolumeSphere, with JavaScript">    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Graydon Ezzeddin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--Favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav/favicon-16x16.png">
    <link rel="manifest" href="./fav/site.webmanifest">
    
    <!--Css-->
    <link rel="stylesheet" href="./css/style.css">
    
    <!--title--> 
    <title>Calculate the price of your Pancake Order!</title>
  </head>
  <body>
    
    <!--JavaScript-->
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script src="./js/script.js"></script>
    
    <!--MDL--> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> 
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.brown-orange.min.css"> 
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script> 
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">Pancake Order!</span>
        </div>
      </header>
      <main class="mdl-layout__content">
        
        <!-- Text and Image-->
        <center>
        <h1>Fill out your order below!</h1>
        </center>
        <img src=./images/Pancakes.webp alt="Pancakes" height="100" width="100" /> 
        <!-- action attribute-->
        <form action="./results.php" method="post" target="results">
        <!--  Interactable list of pancakes sizes -->

        <label for="size-pancakes">Pancake Size:</label>
        <select name="size-pancakes" id="size-pancakes">
          <option value="three-pancakes">3 Pancake Platter</option>
          <option value="two-pancakes">2 Pancake Platter</option>
          <option value="kids-pancakes">Kids Size Pancake Platter (1 pancake)</option>
        </select>
        
        <!--  Interactable list of pancake toppings -->

        <label for="pancake-topping">Pancake Toppings:</label>
        <select name="pancake-topping" id="pancake-topping">
          <option value="no-topping">No Toppings</option>
          <option value="one-topping">Chocolate Chips</option>
          <option value="one-topping">Whipped Cream</option>
          <option value="one-topping">Assorted Fruit</option>
          <option value="two-topping">Chocolate Chips and Whipped Cream</option>
          <option value="two-topping">Chocolate Chips and Assorted Fruit</option>
          <option value="two-topping">Assorted Fruit and Whipped Cream</option>
          <option value="three-topping">Assorted Fruit, Chocolate Chips and Whipped Cream </option>
        </select>

        <!--  Interactable list of Juice Types -->

        <label for="juice-type">Juice Type:</label>
        <select name="juice-type" id="juice-type">
          <option value="juice-type">Orange Juice</option>
          <option value="juice-type">Apple Juice</option>
          <option value="juice-type">Cranberry Juice</option>
        </select>
        
        <!--  Interactable list of juice sizes -->

        <label for="juice-size">Juice Sizes:</label>
        <select name="juice-size" id="juice-size">
          <option value="small">Small</option>
          <option value="medium">Medium</option>
          <option value="large">Large</option>
        </select>
        <br> 
    <input type="submit" value="Calculate">
        </form>

    <!-- iframe for the results to show on the web page. -->
    <iframe id="results" name="results">			
    
    </iframe>
    </center>
  </body>
</html>
