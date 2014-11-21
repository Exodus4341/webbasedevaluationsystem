<ol class="breadcrumb">
  <li><?php echo Html::anchor('student/subject/subjects', 'Subjects'); ?></li>
  <li class="active">Classmates</li>
</ol>
<h2>List of classmates</h2>
<br>
<?php $date = date("Y-m-d"); ?>
<?php if ($classmates): ?>
<table cellpadding="0" cellspacing="0" border="0" class="table table-striped display" id="example" width="100%">
	<thead>
		<tr>
			<th>Picture</th>
			<th>Student Name</th>
			<th>Course</th>
			<th>Year</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($classmates as $classmate): ?>		<tr>
			<td><?php echo Html::img('uploads/'.$classmate['pic_url'], array('class' => "thumbnail", "style" => "width:50px; height:50px")); ?></td>
			<td><?php echo ucwords($classmate['fname']) ." ". ucwords($classmate['mname']) ." ". ucwords($classmate['lname']); ?></td>
			<td><?php echo $classmate['course_name']; ?></td>
			<td><?php echo $classmate['year']; ?></td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No classmates in this semester.</p>

<?php endif; ?>
