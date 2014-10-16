<!-- <h2>Viewing #<?php //echo $category->id; ?></h2> -->
<ol class="breadcrumb">
  <li><?php echo Html::anchor('admin/category', 'Category'); ?></li>
  <li class="active">View Category</li>
</ol>
<p>
	<strong>Category:</strong>
	<?php echo $category->cat_name; ?></p>
<?php echo Html::anchor('admin/category/edit/'.$category->id, 'Edit', array('class' => 'btn btn-warning')); ?> |
<?php echo Html::anchor('admin/category', 'Back', array('class' => 'btn btn-default')); ?>