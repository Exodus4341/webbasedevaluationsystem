<ol class="breadcrumb">
  <li><?php echo Html::anchor('admin/category', 'Category'); ?></li>
  <li class="active">Deactivated Categories</li>
</ol>
<h2>List of Deactivated Categories</h2>
<br>
<?php if ($deactivated): ?>
<table cellpadding="0" cellspacing="0" border="0" class="table table-striped display" id="example" width="100%">
	<thead>
		<tr>
			<th>Category</th>
			<th>Percentage</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($deactivated as $deactivate): ?>		<tr>

			<td><?php echo $deactivate['cat_name']; ?></td>
			<td><?php echo $deactivate['percentage']; ?></td>
			<td>
				<?php echo Html::anchor('admin/category/activate/'.$deactivate['id'], '', array('onclick' => "return confirm('Are you sure?')",'class'=>'glyphicon glyphicon-ok btn btn-success btn-xs', 'title'=>'Activate')); ?>
			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No deactivated categories.</p>

<?php endif; ?>