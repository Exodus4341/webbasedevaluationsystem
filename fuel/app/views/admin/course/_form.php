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
			<?php echo Form::label('Course name', 'course_name'); ?>

			<div class="input">
				<?php echo Form::input('course_name', Input::post('course_name', isset($course) ? $course->course_name : ''), array('class' => 'form-control', 'required' => '')); ?>
			</div>
		</div>
		<br />
		<div class="actions">
			<?php echo Html::anchor('admin/course', 'Back', array('class' => 'btn btn-default')); ?> |
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>
		</div>
	</fieldset>
</div>
<?php echo Form::close(); ?>
