<?php
include "../config.php";

$sql = "SELECT s.id, c.coursecode, c.coursename, s.sectioncode, s.grade 
FROM course as c INNER JOIN section as s ON c.id = s.course_id;";
$result = mysqli_query($conn, $sql);

	while ($data = mysqli_fetch_assoc($result)):
		?>
		<tr>
		<td><?php echo $data['coursecode'];?></td>
		<td><?php echo $data['coursename'];?></td>
		<td><?php echo $data['sectioncode'];?></td>
		<td><?php echo $data['grade'];?></td>
		<td data-label="Manage">
            <a href = "" id="edit" data-id="<?php echo $data['id'];?>"><i class="fa fa-edit"></i> |</a>
            <a href = "" id="delete" data-id="<?php echo $data['id'];?>"><i class="fa fa-trash delete-item" aria-hidden="true" onclick="confirm('Are you sure ?')"></i></a></td>
        </tr>
	<?php
	endwhile; 
?>