
<!DOCTYPE>
<?php
include("includes/db.php");
if(isset($_GET['edit_faq'])){
	$get_id = $_GET['edit_faq'];
	$get_faq = "select * from faq where faq_id='$get_id'";
	$run_faq = mysqli_query($con, $get_faq);
	$i = 0 ;

	$row_faq=mysqli_fetch_array($run_faq);
		$faq_id = $row_faq['faq_id'];
		$faq_question = $row_faq['faq_question'];
		$faq_answer = $row_faq['faq_answer'];
}
?>
<html>
<head>
<title>Edit Frequently Asked Question</title>

<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
<script>tinymce.init({selector:'textarea'});</script>
</head>
<body bgcolor="white">


<form action="" method="post" enctype="multipart/form-data">
<table align="center" width="795" border="3"  bgcolor="#829AB2">

<tr align="center">
<td colspan="7"><h2>Edit & Update Faqs</h2></td>
</tr>

<tr>
<td align="right"><b>Faq Question:</b></td>
<td><input type="text" name="faq_question" size="80" value="<?php echo $faq_question;?>"/></td>
</tr>



<td align="right"><b>Faq Answer:</b></td>
<td><input type="text" name="faq_answer" size="80" value="<?php echo $faq_answer;?>"/></td>
</tr>


<tr align="center">
<td colspan="7""><input type="submit" name="update_faq" value="Update Faqs"/></td>
</tr>

</table>




</body>
<html>
<?php
if(isset($_POST['update_faq'])){
	
	//getting the text date from the fields
	$update_id = $faq_id;
	
	$faq_question = mysql_escape_string($_POST['faq_question']);
	$faq_answer = mysql_escape_string($_POST['faq_answer']);
	
	
	
	
	$update_faq = "update faq set faq_question='$faq_question',faq_answer='$faq_answer' where faq_id='$update_id'"	;
	
	$run_faq= mysqli_query($con, $update_faq);
	if($run_faq){
		echo "<script>alert('Faq has been updated!')</script>";
		echo "<script>window.open('index.php?view_faq','_self')</script>";
	}
}


?>