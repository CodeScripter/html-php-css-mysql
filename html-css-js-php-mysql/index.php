<!DOCTYPE html>
<html>
  <head>
    <title>
      Product Page
    </title>
    
    <!-- (A) CSS & JS -->
    <link href="style.css" rel="stylesheet">
    <script src="script.js"></script>
  </head>
  <body>
    <!-- (B) BOOKS LIST -->
    <h1>OUR BOOKS</h1>
    <div id="our-books">
      <?php 
      require "products.php";
      foreach ($products as $p) { ?>
      <div class="book-wrap" data-id="<?=$p['product_id']?>">
        <div class="book-title"><?=$p['product_name']?></div>
        <div class="book-desc"><?=$p['product_description']?></div>
      </div>
      <?php } ?>
    </div>
  </body>
</html>