<ol class="breadcrumb">
  <li><?php echo Html::anchor('admin/department', 'Department'); ?></li>
  <li class="active">Deactivated Department</li>
</ol>
<h2>List of Deactivated Department</h2>
<br>
<?php if ($deactivated): ?>
<table cellpadding="0" cellspacing="0" border="0" class="table table-striped display" id="example" width="100%">
	<thead>
		<tr>
			<th>Department</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($deactivated as $deactivate): ?>		<tr>

			<td><?php echo $deactivate->dept_name; ?></td>
			<td>
				<?php echo Html::anchor('admin/department/activate/'.$deactivate->id, '', array('onclick' => "return confirm('Are you sure?')",'class'=>'glyphicon glyphicon-ok btn btn-success btn-xs', 'title'=>'Activate')); ?>
			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No deactivated department.</p>

<?php endif; ?>