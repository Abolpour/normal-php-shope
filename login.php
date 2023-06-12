<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>login to shop</title>
  <link rel="stylesheet" href="login/style.css">
  <link rel="stylesheet" href="menu/style.css">
  <link rel="stylesheet" href="contact us/style.css">
  

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
  <ul class="menu">
    <li style="--clr:#00ade1" >
      <a href="index.php" data-text="&nbsp;Home">&nbsp;Home&nbsp; </a>
    </li>
    <li style="--clr:#ff6492">
      <a href="login.php" data-text="&nbsp;login">&nbsp;login&nbsp;</a>
    </li>
    <li style="--clr:#ffdd1c">
      <a href="products.php" data-text="&nbsp;products">&nbsp;product&nbsp;</a>
    </li>
    <li style="--clr:#00dc82">
      <a href="#" data-text="&nbsp;search" class="openBtn" onclick="openSearch()">&nbsp;search&nbsp;</a>
    </li>
    <li style="--clr:#dc00d4">
      <a href="contact.html" data-text="&nbsp;Contact">&nbsp;Contact&nbsp;</a>
    </li>
  </ul>
<!-- partial:index.partial.html -->
<div class="login-box">
  <h2>login to shop</h2>
  <form id="login" action="admin/pages/action/login.php" method="post">
    <div class="user-box">
      <input type="text" name="usernam" required="">
      <label>User name</label>
    </div>
    <div class="user-box">
      <input type="password" name="pasword" required="">
      <label>Password</label>
    </div>
    <a href=''>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      LOGIN
      <input type="submit" value="send" >
    </a>
    <a href='log out.php'>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      logout
    </a>
  </form>
</div>
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
