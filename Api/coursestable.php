<?php
include "../config.php";

// $sql = "SELECT s.id, d.name as dname, p.name as pname, c.coursecode, c.coursename, s.sectioncode FROM course as c
//  INNER JOIN department as d INNER JOIN programs as p INNER JOIN section as s ON c.id = s.course_id
//   and c.deptid = d.id and c.programid = p.id;";

$sql = "SELECT * FROM `course`";

$result = mysqli_query($conn, $sql);

	while ($data = mysqli_fetch_assoc($result)):
		?>
		<tr>
		<td><?php echo $data['deptid'];?></td>
		<td><?php echo $data['programid'];?></td>
		<td><?php echo $data['coursecode'];?></td>
		<td><?php echo $data['coursename'];?></td>
		<td data-label="Manage">
            <a href = "" class="edit" data-id="<?php echo $data['id']; ?>" data-type="c"><i class="fa fa-edit"></i> |</a>
            <a href = "" class="delete" data-id="<?php echo $data['id'];?>" data-type="c"><i class="fa fa-trash delete-item" aria-hidden="true" onclick="confirm('Are you sure ?')"></i></a></td>
        </tr>
	<?php
	endwhile; 
?>