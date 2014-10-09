<?php echo Form::open(); ?>
<fieldset>
	<div class="clearfix">
		<?php echo Form::label('School Semester', 'school_semester'); ?>
		<div class="input">
			<?php echo Form::select('scho_year', Input::post('scho_year', isset($schoolyear) ? $schoolyear->scho_year : ''), 
			array(0 => 'First Semester', 1 => 'Second Semester'), array('class' => 'span4')); ?>
		</div>
	</div>

	<div class="clearfix">
		<?php echo Form::label('Academic Year', 'Academicyear'); ?>
			<div class="input">
				<?php echo Form::select('academicyear', Input::post('academicyear', isset($schoolyear) ? $schoolyear->academicyear : $current_user->id), $years, array('class' => 'span4')); ?>
			</div>
	</div>
	<div class="actions">
		<?php echo Form::submit('submit', 'Update', array('class' => 'btn btn-primary')); ?>
	</div>
</fieldset>
<?php echo Form::close(); ?>