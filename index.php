

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>My Shop</title>
  <link rel="stylesheet" href="menu/style.css">
  <link    rel="stylesheet"    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

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
<!-- partial:index.partial.html -->
<ul >
  <li style="--clr:#00ade1" >
    <a href="index.html" data-text="&nbsp;Home">&nbsp;Home&nbsp; </a>
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
<!-- partial -->
<div  class="video">
  <video width="950" height="150%" loop autoplay muted>
    <source src="menu/shop.mp4" type="video/mp4">
    </div>
      </video> 
    <h4  class="animate__animated animate__backInUp" id="footer" >optimized for learning, testing, and training.While using this site, you agree to have read and accepted our terms of use, cookie and privacy policy.
      Copyright 1999-2023 by Refsnes Data. All Rights Reserved.</h4>
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
