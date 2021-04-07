
<?php
$con = mysqli_connect("localhost","root","","ecommerce");
if (mysqli_connect_errno())
{
	echo "The Connection was not established " . mysqli_connect_error();
}

//getting the user ip address reference: http://www.phpf1.com/tutorial/get-ip-address.html
function getIp() {
    $ip = $_SERVER['REMOTE_ADDR'];
 
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
 
    return $ip;
}
 

function cart(){
	if(isset($_GET['add_cart'])){
		global $con;
		$ip = getIp();
		$pro_id = $_GET['add_cart'];
		$check_pro = "select * from cart where ip_add='$ip' AND p_id='$pro_id'";
		$run_check = mysqli_query($con, $check_pro);
		if(mysqli_num_rows($run_check)>0){
			echo ""; //refresh or do nothing
		}
		else {
		$insert_pro = "insert into cart(p_id,ip_add,qty) values ('$pro_id','$ip','1')";
		$run_pro = mysqli_query($con, $insert_pro);
		echo "<script>window.open('index.php','_self')</script>";
		}
}
}
//getting the total added items
function total_items(){
	if(isset($_GET['add_cart']))
	{
		global $con; 
		$ip = getIP();
		$get_items = "select * from cart where ip_add ='$ip'";
		$run_items = mysqli_query($con, $get_items);
		$count_items = mysqli_num_rows($run_items);
	}
		else {
		global $con; 
		$ip = getIP();
		$get_items = "select * from cart where ip_add ='$ip'";
		$run_items = mysqli_query($con, $get_items);
		$count_items = mysqli_num_rows($run_items);
	}	
	echo $count_items;
}
// getting total price of the items in the cart

function total_price(){
	$total = 0;
	global $con;
	$ip = getIp();
	$sel_price = "select * from cart where ip_add='$ip'";
	$run_price = mysqli_query($con, $sel_price);
	while($p_price=mysqli_fetch_array($run_price)){
		$pro_id = $p_price['p_id'];
		$pro_price = "select * from products where product_id='$pro_id'";
		$run_pro_price = mysqli_query($con, $pro_price);
		while ($pp_price = mysqli_fetch_array($run_pro_price)){
			$product_price = array($pp_price['product_price']);
			$values = array_sum($product_price);
			$total += $values;

		}
	}
	$total = number_format($total);
	echo "Php " . $total . "" ;
	
}
//getting the categories
function getCats (){
	global $con;
	$get_cats = "select * from categories";
	$run_cats = mysqli_query($con, $get_cats);
	
	while ($row_cats=mysqli_fetch_array($run_cats)){
		$cat_id = $row_cats['cat_id'];
		$cat_title = $row_cats['cat_title'];
		$cat_image = $row_cats['cat_image'];
		echo "<img src='images/cats_images/$cat_image'/>";
		$cat_title = str_replace('_', ' & ', $cat_title);
		echo "<li><a href='index.php?cat=$cat_id'>&nbsp;&nbsp;$cat_title</a></li>";
		
	}
}
//faq
function getFaq (){
	global $con;
	$get_faq = "select * from faq";
	$run_faq = mysqli_query($con, $get_faq);
	
	while ($row_faq=mysqli_fetch_array($run_faq)){
		$faq_id = $row_faq['faq_id'];
		$faq_question = $row_faq['faq_question'];
		$faq_answer = $row_faq['faq_answer'];
		
		echo "<li style='color:black;list-style: none; font-weight: bold; padding-top: 20px;' >$faq_question</li>";
		echo "<li style='color:gray; list-style: none;'>$faq_answer</li>";
		
	}
}
//getting the brands
function getBrands (){
	global $con;
	$get_brands = "select * from brands";
	$run_brands = mysqli_query($con, $get_brands);
	
	while ($row_brands=mysqli_fetch_array($run_brands)){
		$brand_id = $row_brands['brand_id'];
		$brand_title = $row_brands['brand_title'];
		echo "<option value='index.php?brand=$brand_id'>--$brand_title</option>";
	}
}
function getPro(){
	if(!isset($_GET['cat'])){
		if(!isset($_GET['brand'])){
		
	global $con;
	$get_pro = "select * from products order by RAND() LIMIT 0, 12";
	$run_pro = mysqli_query($con, $get_pro);
	while($row_pro=mysqli_fetch_array($run_pro)){
		$pro_id = $row_pro['product_id'];
		$pro_cat = $row_pro['product_cat'];
		$pro_brand = $row_pro['product_brand'];
		$pro_title = $row_pro['product_title'];
		$pro_price = $row_pro['product_price'];
		$pro_image = $row_pro['product_image'];
		$pro_price = number_format($pro_price);
		
		echo "
			<div id='single_product'>
			<h4>$pro_title</h4>
			<img src='admin_area/product_images/$pro_image' width='180' height='80' />
			<p><b> Price: Php $pro_price</b></p>
			<a href='details.php?pro_id=$pro_id' style='float:left;'>Details</a>
			
			<a href='index.php?add_cart=$pro_id'><button style='float:right'>Add to Cart</button></a>
			</div>
			";
		
	}
	}	
}
}




function getCatPro(){
	if(isset($_GET['cat'])){
		
		$cat_id = $_GET['cat'];
	global $con;
	$get_cat_pro = "select * from products where product_cat='$cat_id'";
	$run_cat_pro = mysqli_query($con, $get_cat_pro);
	$count_cats = mysqli_num_rows($run_cat_pro);
	if($count_cats==0){
		echo"<h2 style='padding:20px'>No products where found in this category!</h2>";
		
	}
	
	while($row_cat_pro=mysqli_fetch_array($run_cat_pro)){
		$pro_id = $row_cat_pro['product_id'];
		$pro_cat = $row_cat_pro['product_cat'];
		$pro_brand = $row_cat_pro['product_brand'];
		$pro_title = $row_cat_pro['product_title'];
		$pro_price = $row_cat_pro['product_price'];
		$pro_image = $row_cat_pro['product_image'];
		$pro_price = number_format($pro_price);
	
	
		echo "
			<div id='single_product'>
			<h4>$pro_title</h4>
			<img src='admin_area/product_images/$pro_image' width='180' height='80' />
			<p><b> Price: Php $pro_price</b></p>
			<a href='details.php?pro_id=$pro_id' style='float:left;'>Details</a>
			
			<a href='index.php?add_cart=$pro_id'><button style='float:right'>Add to Cart</button></a>
			</div>
			
			";
	}
	
	
}
}
function getBrandPro(){
	if(isset($_GET['brand'])){
		
		$brand_id = $_GET['brand'];
	global $con;
	$get_brand_pro = "select * from products where product_brand='$brand_id'";
	$run_brand_pro = mysqli_query($con, $get_brand_pro);
	$count_brands = mysqli_num_rows($run_brand_pro);
	if($count_brands==0){
		echo"<h2 style='padding:20px'>No products where found associated to this brand!</h2>";
		
	}
	
	while($row_brand_pro=mysqli_fetch_array($run_brand_pro)){
		$pro_id = $row_brand_pro['product_id'];
		$pro_cat = $row_brand_pro['product_cat'];
		$pro_brand = $row_brand_pro['product_brand'];
		$pro_title = $row_brand_pro['product_title'];
		$pro_price = $row_brand_pro['product_price'];
		$pro_image = $row_brand_pro['product_image'];
		$pro_price = number_format($pro_price);
	
	
		echo "
			<div id='single_product'>
			<h4>$pro_title</h4>
			<img src='admin_area/product_images/$pro_image' width='180' height='80' />
			<p><b>Price: Php $pro_price</b></p>
			<a href='details.php?pro_id=$pro_id' style='float:left;'>Details</a>
			
			<a href='index.php?add_cart=$pro_id'><button style='float:right'>Add to Cart</button></a>
			</div>
			
			";
	}
	
	
}
}
?>