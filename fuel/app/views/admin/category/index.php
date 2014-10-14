<h2>List of Category</h2>
<br>
<?php if ($categories): ?>
<table cellpadding="0" cellspacing="0" border="0" class="table table-striped display" id="example" width="100%">
	<thead>
		<tr>
			<th>Category</th>
			<th>Percentage</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($categories as $category): ?>		<tr>

			<td><?php echo $category->cat_name; ?></td>
			<td><?php echo $category->percentage; ?></td>
			<td>
				<?php echo Html::anchor('admin/category/view/'.$category->id, '', array('class'=>'glyphicon glyphicon-eye-open btn btn-info btn-xs', 'title'=>'View')); ?>
				<?php echo Html::anchor('admin/category/edit/'.$category->id, '', array('class'=>'glyphicon glyphicon-wrench btn btn-warning btn-xs', 'title'=>'Edit')); ?>
				<?php echo Html::anchor('admin/category/delete/'.$category->id, '', array('onclick' => "return confirm('Are you sure?')",'class'=>'glyphicon glyphicon-trash btn btn-danger btn-xs', 'title'=>'Delete')); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No category.</p>

<?php endif; ?><p>
<br />
<br />
	<?php echo Html::anchor('admin/category/create', 'Add new category', array('class' => 'btn btn-success')); ?>

</p>
