<style type="text/css">
	.box-department{
		width: 500px;
		height: 0px auto;
		border-radius: 10px;
	}
</style>
<?php echo Form::open(); ?>
<fieldset class="box-department">
	<div class="clearfix">
		<?php echo Form::label('School Semester', 'school_semester'); ?>
		<div class="input">
			<?php echo Form::select('scho_year', Input::post('scho_year', isset($schoolyear) ? $schoolyear->scho_year : ''), 
			array(0 => 'First Semester', 1 => 'Second Semester'), array('class' => 'form-control')); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo Form::label('Academic Year', 'Academicyear'); ?>
			<div class="input">
				<?php echo Form::select('academicyear', Input::post('academicyear', isset($schoolyear) ? $schoolyear->academicyear : $current_user->id), $years, array('class' => 'form-control')); ?>
			</div>
	</div>
	<br />
	<div class="actions">
		<?php echo Html::anchor('admin/schoolyear', 'Back', array('class' => 'btn btn-default')); ?> |
		<?php echo Form::submit('submit', 'Update', array('class' => 'btn btn-primary')); ?>
	</div>
</fieldset>
<?php echo Form::close(); ?>