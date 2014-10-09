<h2>Listing Academic Year</h2>
<br>
<?php if ($years): ?>
<table cellpadding="0" cellspacing="0" border="0" class="table table-striped display" id="example" width="100%">
	<thead>
		<tr>
			<th>Academic Year</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($years as $year): ?>		<tr>
			<td><?php echo $year->year; ?></td>
			<td>
				<?php echo Html::anchor('admin/academicyear/view/'.$year->id, '', array('class'=>'icon icon-eye-open', 'title'=>'View')); ?> |
				<?php echo Html::anchor('admin/academicyear/edit/'.$year->id, '', array('class'=>'icon icon-wrench', 'title'=>'Edit')); ?> |
				<?php echo Html::anchor('admin/academicyear/delete/'.$year->id, '', array('onclick' => "return confirm('Are you sure?')", 'class'=>'icon icon-trash', 'title'=>'Delete')); ?>
			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Year.</p>

<?php endif; ?><p>
	<br />
	<br />
	<?php echo Html::anchor('admin/academicyear/create', 'Add Academic Year', array('class' => 'btn btn-success')); ?>

</p>
