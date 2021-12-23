<?php
include "../config.php";

$sql = "SELECT * FROM department";
$result = mysqli_query($conn, $sql);
	while ($data = mysqli_fetch_assoc($result)):
		?>
		<tr>
		<td><?php echo $data['id'];?></td>
		<td><?php echo $data['name'];?></td>
		<td data-label="Manage">
            <a href = "" class="edit" data-id="<?php echo $data['id'];?>" data-type="d"><i class="fa fa-edit"></i> |</a>
            <a href = "" class="delete" data-id="<?php echo $data['id'];?>" data-type="d"><i class="fa fa-trash delete-item" aria-hidden="true" onclick="confirm('Are you sure ?')"></i></a></td>
        </tr>
	<?php
	endwhile; 
?>