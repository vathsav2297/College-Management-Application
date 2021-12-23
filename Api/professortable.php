<?php
include "../config.php";

$sql = "SELECT * FROM users where user_type='professor'";
$result = mysqli_query($conn, $sql);
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else{
	while ($data = mysqli_fetch_assoc($result)):
		?>
		<tr>
		<td><?php echo $data['dept_id'];?></td>
		<td><?php echo $data['firstname'] ." ". $data['lastname'];?></td>
		<td><?php echo $data['email'];?></td>
		<td data-label="Manage">
            <a href = "javascript:;" id="edit" data-id="<?php echo $data['id'];?>"><i class="fa fa-edit"></i> |</a>
            <a href = "javascript:;" id="delete" data-id="<?php echo $data['id'];?>"><i class="fa fa-trash delete-item" aria-hidden="true" onclick="confirm('Are you sure ?')"></i></a></td>
        </tr>
	<?php
	endwhile; 
}
?>
