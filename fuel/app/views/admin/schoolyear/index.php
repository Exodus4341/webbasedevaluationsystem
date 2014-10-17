<ol class="breadcrumb">
 	<li class="active">School Year</li>
</ol>
<h1>Set The School Year</h1>
<br>
<?php if ($index): ?>
<table cellpadding="0" cellspacing="0" border="0" class="table table-striped display" id="example" width="100%">
	<thead>
		<tr>
			<th>School year</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($index as $indexs): ?>		<tr>

			<td><?php if ($indexs['scho_year'] == "0") {
				echo "First Semester - " .$indexs['academicyear'];
			}else{
				echo "Second Semester - " .$indexs['academicyear'];
				} ?></td>
			<td>
				<?php echo Html::anchor('admin/schoolyear/edit/'.$indexs['id'], '', array('class'=>'btn btn-warning btn-xs glyphicon glyphicon-wrench', 'title'=>'Edit')); ?>
			</td>
		</tr>
<?php endforeach; ?>
	</tbody>
</table>

<?php else: ?>
<p>No Semester.</p>

<?php endif; ?><p>