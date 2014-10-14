<style type="text/css">
	.box-department{
		width: 500px;
		height: 0px auto;
		border-radius: 10px;
	}
</style>
<?php echo Form::open(); ?>
	<fieldset>
	<div class="box-department">
		<div class="clearfix">
			<?php echo Form::label('Department name', 'dept_name'); ?>

			<div class="input">
				<?php echo Form::input('dept_name', Input::post('dept_name', isset($department) ? $department->dept_name : ''), array('class' => 'form-control', 'required' => '')); ?>
			</div>
		</div>
		<br />
		<div class="actions">
			<?php echo Html::anchor('admin/department', 'Back', array('class' => 'btn btn-default')); ?>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>
		</div>
	</div>
	</fieldset>
<?php echo Form::close(); ?>