<!DOCTYPE>
<?php 
session_start(); 

include("functions/functions.php");

include("includes/db.php");
?>
<html>
	<head>
		<title>Kevin and Kira's Box</title>
		
		
	<link rel="stylesheet" href="styles/style.css" media="all" /> 
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
              <div id="sidebar_title">FILTER BY</div>
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
			
				<div id="products_box">
				
			<form action="" method="post" enctype="multipart/form-data">
			
				<table align="center" width="750" bgcolor="white" >
					
					<tr align="center">
						<th>Remove</th>
						<th>Product(S)</th>
						<th>Quantity</th>
						<th>Total Price</th>
					</tr>
					
		<?php 
		$total = 0;
		
		global $con; 
		
		$ip = getIp(); 
		
		$sel_price = "select * from cart where ip_add='$ip'";
		
		$run_price = mysqli_query($con, $sel_price); 
	
		
		
		while($p_price=mysqli_fetch_array($run_price)){
			
			$pro_id = $p_price['p_id']; 
			
			$pro_price = "select * from products where product_id='$pro_id'";
			
			$run_pro_price = mysqli_query($con,$pro_price); 
			
			while ($pp_price = mysqli_fetch_array($run_pro_price)){
			
			$product_price = array($pp_price['product_price']);
			
			$product_title = $pp_price['product_title'];
			
			$product_image = $pp_price['product_image']; 
			
			$single_price = $pp_price['product_price'];
			$single_price = number_format($single_price);
			$values = array_sum($product_price); 
			$total += $values; 	
	
			$pro_qty = "select * from cart where p_id='$pro_id'";
			
			$run_pro_qty = mysqli_query($con,$pro_qty); 
			
			while ($pp_qty = mysqli_fetch_array($run_pro_qty)){
				
			$product_qty = $pp_qty['qty'];
			
			
			
					?>
					
					<tr align="center">
						<td><input type="checkbox" name="remove[]" value="<?php echo $pro_id;?>"/></td>
						<td><?php echo $product_title; ?><br>
						<img src="admin_area/product_images/<?php echo $product_image;?>" width="60" height="60"/>
						</td>
						<td><input type="text" size="4" name="qty" value="<?php echo $product_qty;?>"/></td>
					
							<?php 
						if(isset($_POST['update_cart'])){
						
							$qty = $_POST['qty'];
							
							$update_qty = "update cart set qty='$qty'";
							
							$run_qty = mysqli_query($con, $update_qty); 
							
							$_SESSION['qty']=$qty;
							
							$total = $total*$qty;
							
							
						
						}
						
						
						?>
						
						
						<td><?php echo "Php " . $single_price; ?></td>
					</tr>
					
					
		<?php } } }?>
				
				<tr>
						<td colspan="4" align="right"><b>Sub Total:</b></td>
						<td><?php echo "Php " . $total;?></td>
					</tr>
					
					<tr align="center">
						<td colspan="1"><input type="submit" name="delete_cart" value="Delete Items"/></td>
						<td><input type="submit" name="continue" value="Continue Shopping" /></td>
						<td colspan="1"><input type="submit" name="update_cart" value="Update Cart"/></td>
						<td><button><a href="checkout.php" style="text-decoration:none; color:black;">Checkout</a></button></td>
					</tr>
					
				</table> 
			
			</form>

					
	<?php 
	
		
	function deletecart(){
		
		global $con; 
		
		$ip = getIp();
		
		if(isset($_POST['delete_cart'])){
		
			foreach($_POST['remove'] as $remove_id){
			
			$delete_product = "delete from cart where p_id='$remove_id' AND ip_add='$ip'";
			
			$run_delete = mysqli_query($con, $delete_product); 
			
			if($run_delete){
			
			echo "<script>window.open('cart.php','_self')</script>";
			
			}
			
			}
		
		}
		if(isset($_POST['continue'])){
		
		echo "<script>window.open('index.php','_self')</script>";
		
		}
	
	}
	echo @$del_cart = deletecart();
	
	?>

				
				</div>
			
			</div>
		</div>
		<!--Content wrapper ends-->
		
		

	
	
	
	
	
	
	</div> 
<!--Main Container ends here-->
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