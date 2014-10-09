<?php echo Form::open(); ?>

	<fieldset>
		<div class="clearfix">
			<?php echo Form::label('Questionnaire id', 'questionnaire_id'); ?>

			<div class="input">
				<?php echo Form::input('question', Input::post('question', isset($studentevaluation) ? $studentevaluation->question : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Subj id', 'subj_id'); ?>

			<div class="input">
				<?php echo Form::input('subj_id', Input::post('subj_id', isset($studentevaluation) ? $studentevaluation->subj_id : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Teacher id', 'teacher_id'); ?>

			<div class="input">
				<?php echo Form::input('teacher_id', Input::post('teacher_id', isset($studentevaluation) ? $studentevaluation->teacher_id : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="actions">
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>

		</div>
	</fieldset>
<?php echo Form::close(); ?>