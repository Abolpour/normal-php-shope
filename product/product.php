<?php 
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "ninja";

  $conn = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
 

   

   $data1 = $conn->prepare("SELECT * FROM product where id= :id");
   $data1->bindValue('id',$_GET['id']);
   $data1->execute();
   
   
   
  

   


   
   
   
   
?>
<!DOCTYPE html>
<html>
<head>
<title>Product </title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php foreach( $data1-> fetchall() as $products) {?>
	<div class="card">
		<div class="imgBx">
		<img src="<?php echo "../products/" . $products["img"] . ".png"; ?>" />
		</div>
		<div class="details">
			<h3><?php echo $products['name'] ?><br><span>Men's Shoe</span></h3>
			<h4><?php echo $products['des'] ?></h4>
			<p>Thank you very much. There is no direct guidance.

			</p>
			<h4>Size</h4>
			<ul class="size">
				<li>36</li>
				<li>38</li>
				<li>40</li>
				<li>42</li>
				<li>44</li>
			</ul>
			<div class="group">
				<h2><sup>$</sup><?php echo $products['price']?><small>.99</small></h2>
				<a href="#">Buy Now</a>
			</div>
		</div>
	</div>
	<?php } ?>
</body>
</html>
