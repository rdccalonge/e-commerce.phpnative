<?php 
	include("includes/db.php"); 
	
	if(isset($_GET['delete_faq'])){
	
	$faq_id = $_GET['delete_faq'];
	
	$delete_faq = "delete from faq where faq_id='$faq_id'"; 
	
	$run_delete = mysqli_query($con, $delete_faq); 
	
	if($run_delete){
	
	echo "<script>alert('A Faq has been deleted!')</script>";
	echo "<script>window.open('index.php?view_faq','_self')</script>";
	}
	
	}





?>