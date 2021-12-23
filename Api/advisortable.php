<?php
include "../config.php";

$sql = "SELECT * FROM users where user_type='advisor'";
$result = mysqli_query($conn, $sql);
	while ($data = mysqli_fetch_assoc($result)):
		?>
		<tr>
		<!-- <td><?php echo $data['deptid'];?></td> -->
		<td><?php echo $data['firstname'] ." ". $data['lastname'];?></td>
		<td><?php echo $data['email'];?></td>
		<td>
            <a href = "javascript:;" id="edit" data-id="<?php echo $data['id'];?>"><i class="fa fa-edit"></i> |</a>
            <a href = "javascript:;" id="delete" data-id="<?php echo $data['id'];?>"><i class="fa fa-trash delete-item" aria-hidden="true" onclick="confirm('Are you sure ?')"></i></a></td>
        </tr>
	<?php
	endwhile; 
?>
