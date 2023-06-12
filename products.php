
<?php
require('conection.php');
   $data1 = $conn->prepare("SELECT * FROM product");
   $data1->execute();
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Products </title>
  <link rel="stylesheet" href="products/style.css">
  <link rel="stylesheet" href="menu/style.css">
  <!-- <link rel="stylesheet" href="contact us/style.css"> -->

</head>
<body>
  
    <!-- search -->
    <div id="myOverlay" class="overlay">
      <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
      <div class="overlay-content">
        <form action="#">
          <input type="text" placeholder="Search.." name="search">
              </form>
      </div>
    </div>
  <!--menu-->
  <ul>
    <li style="--clr:#00ade1" >
      <a href="index.php" data-text="&nbsp;Home">&nbsp;Home&nbsp; </a>
    </li>
    <li style="--clr:#ff6492">
      <a href="login.php" data-text="&nbsp;login">&nbsp;login&nbsp;</a>
    </li>
    <li style="--clr:#ffdd1c">
      <a href="products.php" data-text="&nbsp;products">&nbsp;products&nbsp;</a>
    </li>
    <li style="--clr:#00dc82">
      <a href="#" data-text="&nbsp;search" class="openBtn" onclick="openSearch()">&nbsp;search&nbsp;</a>
    </li>
    <li style="--clr:#dc00d4">
      <a href="contact.html" data-text="&nbsp;Contact">&nbsp;Contact&nbsp;</a>
    </li>
  </ul>
<!-- partial:index.partial.html -->

<main class="container">
  
  <?php foreach( $data1-> fetchall() as $products) {?>
  <section class="card card-blue">
  
    <div class="product-image">
      <img src=<?php echo "products/".$products["img"].".png" ; ?> alt="OFF%-Edition" draggable="false" />
    </div>
    <div class="product-info">
      <h2><?php echo $products['name'] ?></h2>
      
      <p><?php echo $products['des'] ?></p>
      <div class="price">$<?php echo $products['price'] ?></div>
    </div>
    
    <div class="btn">
   
      <button class="buy-btn" onclick="document.location.href='product/product.php?id=<?php echo $products['id']; ?>'">Buy Now</button>
      <button class="fav">
        
        <svg class="svg" id="i-star" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
          <path d="M16 2 L20 12 30 12 22 19 25 30 16 23 7 30 10 19 2 12 12 12 Z" />
        </svg>
      </button>
      
    </div>
    <br>
    <p style="text-align:center;">behtarin kafsha ra az ma bekhahid</p>
  </section>
  
  <?php } ?>
</main>

<!-- partial -->
<script>
  function openSearch() {
    document.getElementById("myOverlay").style.display = "block";
  }
  
  function closeSearch() {
    document.getElementById("myOverlay").style.display = "none";
  }
  </script>
</body>
</html>
