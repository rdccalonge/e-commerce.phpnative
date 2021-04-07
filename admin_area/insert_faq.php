
<!DOCTYPE>
<?php
include("includes/db.php");
?>
<html>
<head>
<title>Inserting Faq</title>

<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
<script>tinymce.init({selector:'textarea'});</script>
</head>
<body bgcolor="white">


<form action="insert_faq.php" method="post" enctype="multipart/form-data">
<table align="center" width="795" height="500" border="3" bgcolor="#829AB2";>

<tr align="center">
<td colspan="7"><h2>Insert New Faq Here</h2></td>
</tr>

<tr>
<td align="right"><b>Faq Question:</b></td>
<td><input type="text" name="faq_question" size="80" required/></td>
</tr>




<tr>
<td align="right"><b>Faq Answer:</b></td>
<td><input type="text" name="faq_answer" size="80" required/></td>
</tr>
<tr align="center">
<td colspan="7""><input type="submit" name="insert_post" value="Insert Faq Now!"/></td>
</tr>

</table>




</body>
<html>
<?php
if(isset($_POST['insert_post'])){
	
	//getting the text date from the fields
	$faq_question = mysql_escape_string($_POST['faq_question']);
	$faq_answer = $_POST['faq_answer'];
	

	$insert_faq = "insert into faq 
	(faq_question, faq_answer) values
    ('$faq_question', '$faq_answer')";
	
	$insert_faq = mysqli_query($con, $insert_faq);
	if($insert_faq){
		echo "<script>alert('Faq Has been inserted!')</script>";
		echo "<script>window.open('index.php?insert_faq','_self')</script>";
	}
}


?>

