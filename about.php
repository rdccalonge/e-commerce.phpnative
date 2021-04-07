<!DOCTYPE>
<?php
session_start();
include("functions/functions.php");

?>
<html>
<head>
<title>Kevin and Kira's Box</title>
<link rel="stylesheet" href="styles/style.css" media="all"/>
<!doctype html>

<link rel="stylesheet" type="text/css" href="contentslider.css" />

<script type="text/javascript" src="contentslider.js">

/***********************************************
* Featured Content Slider- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for this script and 100s more
***********************************************/

</script>
</head>

<body>
<div class="main_wrapper">
 <div class="header_wrapper">
 <a href="../index.php"><img src="images/header.jpg" /></a>
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
        <input type="text"  style="width:250;height:42;font-size: 13;border-top-left-radius: 8px;
border-bottom-left-radius: 8px; " name="user_query" placeholder="Search a Product"/ >
        <input type="submit" style="width:65;height:44;vertical-align: bottom;background-image: url('images/search.png'); " name="search" value=""/>
        </form>
		</div>
        </ul>
      
  </div>
  <div class="content_wrapper">

         <center>
 		 <div id="about">
		
		 
			
		

<!--Inner content DIVs should always carry "contentdiv" CSS class-->
<!--Pagination DIV should always carry "paginate-SLIDERID" CSS class-->

<div id="slider1" class="sliderwrapper">

<div class="contentdiv">
<h2>History</h2>
            <p>Kevin and Kira’s Box has been operating since 2000 located in Crame, Quezon City, Kevin and Kira’s Box is operated by Lyndon and Cherry Romaraog and it was named after their kids namely Kevin and Kira. The concept “Kevin and Kira’s Box” originated because when they're kids receive gifts from friends and relatives in a form of a box it is always either for their kids Kevin or Kira only. They started selling their kids toys online since then the business have been successful and they decided to sell more product rather than their toys. They have been selling multiple branded products since then.</p>
			<br>
			</p><b>Our Mission:</b>
To be able to cater and satisfy every online shopper and to innovate Philippine online selling.</p>
<br>
	</p><b>Our Vision:</b>
To become Philippine's top one stop online shop, and to be the first choice of online shoppers.</p>
</div>

<div class="contentdiv"><center>
<!--Google Map-->
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="color:blue;overflow:hidden;height:500px;width:600px;"><div id="gmap_canvas" style="height:500px;width:600px;"></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style><a class="google-map-code" href="http://premium-wordpress-themes.org" id="get-map-data">meer wordpress templates</a></div><script type="text/javascript"> function init_map(){var myOptions = {zoom:17,center:new google.maps.LatLng(14.61258654028402,121.05237992837215),mapTypeId: google.maps.MapTypeId.HYBRID};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(14.61258654028402, 121.05237992837215)});infowindow = new google.maps.InfoWindow({content:"<b>Kevin and Kira's Box</b><br/>3rd Avenue Cubao St.,<br/> Quezon City" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script></center>
</div>

<div class="contentdiv">
<h2>Contact Us</h2>
<p><br>
<b>Viber/Wechat/Message:</b> +639163529716</br>
<b>Facebook:</b> www.facebook.com/KKBOXII<br>
<b>Email: </b><br>
</p>
</div>

</div>

<div id="paginate-slider1" class="pagination">

</div>

<script type="text/javascript">

featuredcontentslider.init({
	id: "slider1",  //id of main slider DIV
	contentsource: ["inline", ""],  //Valid values: ["inline", ""] or ["ajax", "path_to_file"]
	toc: ["| History |", "| Location |","| Contacts |"],  //Valid values: "#increment", "markup", ["label1", "label2", etc]
	nextprev: ["<", ">"],  //labels for "prev" and "next" links. Set to "" to hide.
	revealtype: "click", //Behavior of pagination links to reveal the slides: "click" or "mouseover"
	enablefade: [true, 0.2],  //[true/false, fadedegree]
	autorotate: [true, 3000],  //[true/false, pausetime]
	onChange: function(previndex, curindex, contentdivs){  //event handler fired whenever script changes slide
		//previndex holds index of last slide viewed b4 current (0=1st slide, 1=2nd etc)
		//curindex holds index of currently shown slide (0=1st slide, 1=2nd etc)
	}
})

</script>




<!--Inner content DIVs should always carry "contentdiv" CSS class-->
<!--Pagination DIV should always carry "paginate-SLIDERID" CSS class-->


		 
		 </div>
		 </div>
 
</center>
 
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