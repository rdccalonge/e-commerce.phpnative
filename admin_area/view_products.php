<?php

if(!isset($_SESSION['user_email'])){
	echo "<script>window.open('login.php?not_admin=You are not an Admin!','_self')</script>";
}
else {
	
?>
<table width="795"  height="500" align="center" bgcolor="#829AB2";>

<tr align="center">
<td colspan="6"><h2>View All Products Here</h2></td>
</tr>

<tr align="center" bgcolor="#475E8A";>
<th>S.N</th>
<th>Title</th>
<th>Image</th>
<th>Price</th>
<th>Edit</th>
<th>Delete</th>


</tr>
<?php 
include("includes/db.php");

$get_pro = "select * from products";

$run_pro = mysqli_query($con, $get_pro);
$i = 0 ;

while ($row_pro=mysqli_fetch_array($run_pro)){
		$pro_id = $row_pro['product_id'];
		$pro_title = $row_pro['product_title'];
		$pro_image = $row_pro['product_image'];
		$pro_price = $row_pro['product_price'];
		$i++;
		
	


?>

<tr>
<td><?php echo $i;?></td>
<td><?php echo $pro_title;?></td>
<td><img src="product_images/<?php echo $pro_image;?>" width="60" height="60"/></td>
<td><?php echo $pro_price;?></td>
<td> <a href="index.php?edit_pro=<?php echo $pro_id;?>">Edit</a></td>
<td><a href="delete_pro.php?delete pro=<?php echo $pro_id;?>">Delete</a></td>

</tr>
<?php } ?>



</table>

<?php } ?>