<!DOCTYPE>
<?php
session_start();
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
 <a href="index.php"><img src="images/header.jpg" /></a>
  	<div class="menubar">
    <ul id="menu">
    	<li><a href="index.php"><img class="hoverImages" src="images/menu/home.png" /></a></li>
        <li><a href="all_products.php"><img class="hoverImages" src="images/menu/products.png" /></a></li>
        <li><a href="customer/my_account.php"><img class="hoverImages" src="images/menu/account.png" /></a></li>
        <!--<li><a href="#"><img class="hoverImages" src="images/menu/signup.png" /></a></li>-->
        <li><a href="cart.php"><img class="hoverImages" src="images/menu/cart.png" /></a></li>
        <li><a href="about.php"><img class="hoverImages" src="images/menu/about.png" /></a></li>
		 <li><a href="faq.php"><img class="hoverImages" src="images/menu/faq.png" /></a></li>
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
			 
            	<?php getCats();?>
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
		 <?php cart(); ?>
		 <div id="shopping_cart" valign="bottom">
		 <span style="float:right; font-size:14px; padding:5px; line-height:40px;">
		 
			<?php
			if(isset($_SESSION['customer_email'])){
			echo "<b>Welcome! </b>" . $_SESSION ['customer_email'] . "<b style='color:#4C97C1;'> Your</b>";
					}
			else {
			echo "<b>Welcome Guest! </b>";
					}
		 
			?>
		 
		 <b style="color:#4C97C1">Shopping Cart:</b>
		 Total Items: <?php total_items() ;?>  Total Price: <?php total_price() ;?> <a href="cart.php" style="color:#4C97C1"><img src="images/cats_images/cart.png"/></a>&nbsp|
		 
		 
		 <?php
		 if(!isset($_SESSION['customer_email'])){
			 echo "<a href='checkout.php' style='color:#4C97C1'>Login</a>";
			 
		 }
		 else{
			 echo "<a href='logout.php' style='color:#4C97C1'>Logout</a>";
	
		 
		 }
		 ?>
		 </span>
		 </div>
		
			<div id="products_box">
			<?php getPro(); ?>
			<?php getCatPro(); ?>
			<?php getBrandPro(); ?>
			
			</div>
		 </div>
  </div>

 
</div>
 <div id="footer" valign="bottom">
 
 <table>
<tr>
</tr>
 <tr>
 </br>
</br>
 <td style="
color: black;
font-size:12px;
font-weight: 700; vertical-align:middle; padding:20px 20px 0px; ">OUR PREFERRED PARTNERS: </td>

 <td><img src="images/footer/bpi.png" /></td>
  <td><img src="images/footer/bdo.png" /></td>
   <td><img src="images/footer/cebuana.png" /></td>
    <td><img src="images/footer/gcash.png" /></td>
	 <td><img src="images/footer/lbc.png" /></td>
	  <td><img src="images/footer/mlhuillier.png" /></td>
	   <td><img src="images/footer/western.png" /></td>
	   <td><img style="width:180; height:auto;" src="images/footer/paypal.png"></td>
 </tr>
<tr>
<td style="width:600; font-size:10px; padding-left:20px;"><b>MODES OF PAYMENT:</b></br> 
✔BDO BANK DEPOSIT (NO CHARGE)</br> 
✔LBC MONEY TRANSFER</br> 
✔WESTERN UNION</br> 
✔CEBUANA LHULLIER</br> 
✔ML KWARTA PADALA</br> 
✔PALAWAN</td>
<td style="font-family; arial; width:300; font-size:10px; padding-left:20px;"><b>PARTNER COURIER:</b></br>

LBC</br>
JRS</td>
<td></td>
</tr>

 </table>

 <center><tt>COPYRIGHT &copy; 2015 Kevin and Kira's Box</tt>
 </div>
 
<!-- floating fb -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js" type="text/javascript">
</script>
<script type="text/javascript">
//<!--
$(document).ready(function() {$(".floatinglikebox").hover(function() {$(this).stop().animate({right: "0"}, "medium");}, function() {$(this).stop().animate({right: "-250"}, "medium");}, 500);});
//-->
</script>
<div class="floatinglikebox" style="">
<div>
<iframe src="//www.facebook.com/plugins/likebox.php?
href=https://www.facebook.com/kevin.and.kira.sbox.enterprise&amp;width=251&amp;height=270&amp;colorscheme=light&amp;show_faces=true&amp;border_color=%23cccccc&amp;stream=false&amp;header=false&amp;" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:251px; height:270px; background:#fff;" allowtransparency="true">
</iframe></div></div>
</body>
</html>