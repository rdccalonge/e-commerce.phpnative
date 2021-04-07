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
 <a href="../index.php"><img src="images/header.jpg" /></a>
  	<div class="menubar">
   <ul id="menu">
    	<li><a href="../index.php"><img class="hoverImages" src="images/menu/home.png" /></a></li>
        <li><a href="../all_products.php"><img class="hoverImages" src="images/menu/products.png" /></a></li>
        <li><a href="my_account.php"><img class="hoverImages" src="images/menu/account.png" /></a></li>
        <!--<li><a href="#"><img class="hoverImages" src="images/menu/signup.png" /></a></li>-->
        <li><a href="../cart.php"><img class="hoverImages" src="images/menu/cart.png" /></a></li>
        <li><a href="../about"><img class="hoverImages" src="images/menu/about.png" /></a></li>
		 <li><a href="#"><img class="hoverImages" src="images/menu/faq.png" /></a></li>
		   <div id="form" valign="bottom">
        <form method="get" action="results.php" enctype="multipart/form-data">
        <input type="text"  style="width:250;height:42;font-size: 13;border-top-left-radius: 8px;
border-bottom-left-radius: 8px; " name="user_query" placeholder="Search a Product"/ >
        <input type="submit" style="width:65;height:44;vertical-align: bottom;background-image: url('images/search.png'); " name="search" value=""/>
        </form>
		</div>
        </ul>
      
  </div>
  <div class="content_wrapper">
		 <div id="sidebar">
        	 <div id="sidebar_title">My Account</div>
             <ul id="cats">
			 <?php
			 $user = $_SESSION['customer_email'];
			 $get_img = "select * from customers where customer_email = '$user'";
			 $run_img = mysqli_query($con, $get_img);
			 $row_img = mysqli_fetch_array($run_img);
			 $c_image = $row_img['customer_image']; 
			 $c_name = $row_img['customer_name'];
			 echo "<p style='text-align:center;'><img src='customer_images/$c_image' height='200'/></p>";
			 ?>
			 
            	<li><a href="my_account.php?my_orders">My Orders</a></li>
				<li><a href="my_account.php?edit_account">Edit Account</a></li>
				<li><a href="my_account.php?change_pass">Change Password</a></li>
				<li><a href="my_account.php?delete_account">Delete Account</a></li>
				<li><a href="logout.php">Logout</a></li>
             	</ul>
            </div>
         
 		 <div id="content_area">
		 <?php cart(); ?>
		 <div id="shopping_cart" valign="bottom">
		 <span style="float:right; font-size:14px; padding:5px; line-height:40px;">
		 
			<?php
			if(isset($_SESSION['customer_email'])){
			echo "<b>Welcome! </b>" . $_SESSION ['customer_email'];
					}
				else{
					echo "<script>window.open('../checkout.php','_self')</script>";
				}
			?>
		 
		 <?php
		 if(!isset($_SESSION['customer_email'])){
			 echo "<a href='checkout.php' style='color:red'>Login</a>";
			 
		 }
		 else{
			 echo "<a href='logout.php' style='color:red'>Logout</a>";
		 
		 }
		 ?>
		 </span>
		 </div>
		
			<div id="products_box">
			
			<?php
			if(!isset($_GET['my_orders'])){
				if(!isset($_GET['edit_account'])){
					if(!isset($_GET['change_pass'])){
						if(!isset($_GET['delete_account'])){
							
							
							
			echo "
			<h1 style='padding:20px; color:red;'>Welcome! $c_name; </h1>
			<h2><b>You can see your orders progress by clicking this <a href='my_account.php?my_orders'>link</a></b></h2>";
					}
					}
				}
			}
			?>
			<?php
			if(isset($_GET['edit_account'])){
				include("edit_account.php");
			}
				if(isset($_GET['change_pass'])){
				include("change_pass.php");
			}
				if(isset($_GET['delete_account'])){
				include("delete_account.php");
			}
			
			?>
			
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
<td></center></td>
</tr>
 </table>
 <center><tt>&copy; 2015 Kevin and Kira's Box</tt>
 </div>
 <!-- floating fb -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js" type="text/javascript">
</script>
<script type="text/javascript">
//<!--
$(document).ready(function() {$(".floatinglikebox").hover(function() {$(this).stop().animate({right: "0"}, "medium");}, function() {$(this).stop().animate({right: "-250"}, "medium");}, 500);});
//-->
</script>
<style type="text/css">
.floatinglikebox{background: url("http://3.bp.blogspot.com/-VXmAJdQRHJ8/Tra8E16fZGI/AAAAAAAAClg/o5M632x9qX8/s1600/floatingfb.png") no-repeat scroll left center transparent !important;display: block;float: right;height: 270px;padding: 0 5px 0 40px;width: 245px;z-index: 99999;position:fixed;right:-250px;top:10%;}
.floatinglikebox div{border:none;position:relative;display:block;}
.floatinglikebox span{bottom: 10px;font: 10px tahoma,verdana,arial,sans-serif;position: absolute;right: 6px;text-align: right;z-index: 99999;}
.floatinglikebox span a{color: #808080;text-decoration:none;}
.floatinglikebox span a:hover{text-decoration:underline;}
</style><div class="floatinglikebox" style="">
<div>
<iframe src="//www.facebook.com/plugins/likebox.php?
href=https://www.facebook.com/kevin.and.kira.sbox.enterprise&amp;width=251&amp;height=270&amp;colorscheme=light&amp;show_faces=true&amp;border_color=%23cccccc&amp;stream=false&amp;header=false&amp;" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:251px; height:270px; background:#fff;" allowtransparency="true">
</iframe></div></div>
</body>
</html>