<style type="text/css">
	.box-department{
		width: 500px;
		height: 0px auto;
		border-radius: 10px;
	}
</style>
<?php echo Form::open(); ?>
<div class="box-department">
	<fieldset>
		<div class="clearfix">
			<?php echo Form::label('Category', 'category'); ?>

			<div class="input">
				<?php echo Form::input('cat_name', Input::post('cat_name', isset($category) ? $category->cat_name : ''), array('class' => 'form-control', 'required' => '')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Percentage', 'percentage'); ?>

			<div class="input">
				<?php echo Form::input('percentage', Input::post('percentage', isset($category) ? $category->percentage : ''), array('class' => 'form-control', 'required' => '')); ?>

			</div>
		</div>
		<br />
		<div class="actions">
			<?php echo Html::anchor('admin/category', 'Back', array('class' => 'btn btn-default')); ?> |
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>
		</div>
	</fieldset>
</div>
<?php echo Form::close(); ?>