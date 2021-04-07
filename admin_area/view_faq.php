<?php

if(!isset($_SESSION['user_email'])){
	echo "<script>window.open('login.php?not_admin=You are not an Admin!','_self')</script>";
}
else {
	
?>
<table width="795"  height="500" align="center" bgcolor="#829AB2";>

<tr align="center">
<td colspan="6"><h2>View Frequently Add Questions</h2></td>
</tr>


<?php 
include("includes/db.php");

$get_faq = "select * from faq";

$run_faq= mysqli_query($con, $get_faq);
$i = 0 ;

while ($row_faq=mysqli_fetch_array($run_faq)){
		$faq_id = $row_faq['faq_id'];
		$faq_question = $row_faq['faq_question'];
		$faq_answer = $row_faq['faq_answer'];
	
		$i++;
		
	


?>
<tr>
<tr>
<td><?php echo $i;?></td></tr>
<tr>
<td><?php echo $faq_question;?></td>
</tr>
<tr>
<td><?php echo $faq_answer;?></td>
</tr>
<tr>
<td> <a href="index.php?edit_faq=<?php echo $faq_id;?>">Edit</a></td>
<td><a href="delete_faq.php?delete faq=<?php echo $faq_id;?>">Delete</a></td>

</tr>
</tr>
</tr>
<?php } ?>


<tr><td><a href="index.php?insert_faq">INSERT NEW<a/></td>
</tr>
</table>

<?php } ?>