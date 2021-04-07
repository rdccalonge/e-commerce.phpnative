<?php
include("functions/functions.php");

?>
<html>
<head>
<title>Kevin and Kira's Box</title>
<link rel="stylesheet" href="styles/style.css" media="all"/>
</head>

<body>
<div class="main_wrapper">
 <div class="header_wrapper">
 <img src="images/header.jpg" />
  	<div class="menubar">
    <ul id="menu">
    	<li><a href="index.php"><img class="hoverImages" src="images/menu/home.png" /></a></li>
        <li><a href="all_products.php"><img class="hoverImages" src="images/menu/products.png" /></a></li>
        <li><a href="customer/my_account.php"><img class="hoverImages" src="images/menu/account.png" /></a></li>
        <!--<li><a href="#"><img class="hoverImages" src="images/menu/signup.png" /></a></li>-->
        <li><a href="cart.php"><img class="hoverImages" src="images/menu/cart.png" /></a></li>
        <li><a href="about.php"><img class="hoverImages" src="images/menu/about.png" /></a></li>
		 <li><a href="#"><img class="hoverImages" src="images/menu/faq.png" /></a></li>
		   <div id="form" valign="bottom">
        <form method="get" action="results.php" enctype="multipart/form-data">
        <input type="text"  style="width:250;height:42;font-size: 13; border-top-left-radius: 8px;
border-bottom-left-radius: 8px;" name="user_query" placeholder="Search a Product"/ >
        <input type="submit" style="width:65;height:44;vertical-align: bottom;background-image: url('images/search.png'); " name="search" value=""/>
        </form>
		</div>
        </ul>
      
  </div>
  <div class="content_wrapper">
			<div id="sidebar">
			
				<div id="sidebar_title">CATEGORIES</div>
				<ul id="cats">
				<?php getCats(); ?>
				</ul>	
					<center>
              <div id="sidebar_title">FILTER</div>
			<select id="opts" onchange="GotoPage()" name="product_brand">
			<option>By Brand</option>
			<?php echo getBrands ()?>
			
			</select>
			<script type="text/javascript">
		function GotoPage()
		{
		var loc = document.getElementById('opts').value;
		if(loc!="0")
			window.location = loc;
			}
		</script>
		
	
         </div>
         </center>
         
 		 <div id="content_area">
		<div id="shopping_cart" valign="bottom"> 
					
					<span style="float:right; font-size:14px; padding:5px; line-height:40px;">
					
					<?php
					if(isset($_SESSION['customer_email'])){
					echo "<b>Welcome! </b>" . $_SESSION ['customer_email'] . "<b style='color:#4C97C1;'> </b>";
					}
					else {
					echo "<b>Welcome Guest! </b>";
					}
		 
					?>
							
					<b style="color:#4C97C1">Shopping Cart:</b>Total Items: <?php total_items() ;?>  Total Price: <?php total_price() ;?> <a href="index.php" style="color:#4C97C1"><b>Back to Shop<b></a>&nbsp|
					
					<?php 
					if(!isset($_SESSION['customer_email'])){
					
					echo "<a href='checkout.php' style='color:#4C97C1;'>Login</a>";
					
					}
					else {
					echo "<a href='logout.php' style='color:#4C97C1;'>Logout</a>";
					}
					
					
					
					?>
					
					</span>
			</div>
		
	<?php
	if(isset($_GET['pro_id'])){
	$product_id = $_GET['pro_id'];
	$get_pro = "select * from products where product_id='$product_id'";
	$run_pro = mysqli_query($con, $get_pro);
	while($row_pro=mysqli_fetch_array($run_pro)){
		$pro_id = $row_pro['product_id'];
		$pro_title = $row_pro['product_title'];
		$pro_price = $row_pro['product_price'];
		$pro_image = $row_pro['product_image'];
		$pro_desc = $row_pro['product_desc'];
	
		echo "
			<div id='single_product'  style='width:700px;'>
			<h3>$pro_title</h3>
			<img src='admin_area/product_images/$pro_image' width='400' height='300' />
			<p><b> Php $pro_price</b></p>
			<p>$pro_desc</p>
			<a href='index.php' style='float:left;'>Go Back</a>
			
			<a href='index.php'?pro_id=$pro_id'><button style='float:right'>Add to Cart</button></a>
			</div>
			";
	}
	}
	?>
			</div>
		 </div>
  </div>
<div id="footer" valign="bottom">
 <center><tt>&copy; 2015 Ecommerce for Online Shopping</div></tt></center>

 
</div>
</body>
</html>