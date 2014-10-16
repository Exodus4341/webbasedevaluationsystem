<style type="text/css">
	.box-department{
		width: 500px;
		height: 0px auto;
		border-radius: 10px;
	}
</style>
<ol class="breadcrumb">
  <li><?php echo Html::anchor('admin/subject', 'Subject'); ?></li>
  <li class="active">Update Subject</li>
</ol>
<h2>Update Subject</h2>
<?php echo Form::open(); ?>
<div class="box-department">
	<fieldset>
		<div class="clearfix">
			<?php echo Form::label('Subject Code', 'subject sode'); ?>

			<div class="input">
				<?php echo Form::input('subj_code', Input::post('subj_code', isset($subject) ? $subject['subj_code'] : ''), array('class' => 'form-control')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Subject Description', 'subject description'); ?>

			<div class="input">
				<?php echo Form::input('subj_desc', Input::post('subj_desc', isset($subject) ? $subject['subj_desc'] : ''), array('class' => 'form-control')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Schedule', 'schedule'); ?>

			<div class="input">
				<?php echo Form::input('schedule', Input::post('schedule', isset($subject) ? $subject['schedule'] : ''), array('class' => 'form-control')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Time', 'time'); ?>

			<div class="input">
				<?php echo Form::input('time', Input::post('time', isset($subject) ? $subject['time'] : ''), array('class' => 'form-control')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Room', 'room'); ?>

			<div class="input">
				<?php echo Form::input('room', Input::post('room', isset($subject) ? $subject['room'] : ''), array('class' => 'form-control')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Teacher Name', 'teacher_id'); ?>
			<div class="input">
				<?php for($x = 0; $x < sizeof($users); $x++){ $name[$users[$x]['id']] = $users[$x]['name']; }echo Form::select('teacher_id', Input::post('teacher_id', isset($subject) ? $subject['teacher_id'] : $current_user->id), $name, array('class' => 'form-control'));?>
			</div>
		</div>
		<!-- for semester here ... -->
		<div class="clearfix">
			<div class="input">
		        <?php for($x = 0; $x < sizeof($schoolyear); $x++){ $scho[$schoolyear[$x]['scho_year']] = $schoolyear[$x]['scho_year']; }
		        echo Form::select('semester', Input::post('semester', isset($subject) ? $subject['semester'] : $current_user->id), $scho, array('class' => 'span4', "style" => "display:none")); ?>
   			</div>
		</div>
		<div class="clearfix">
			<div class="input">
		        <?php for($x = 0; $x < sizeof($schoolyear); $x++){ $schoo[$schoolyear[$x]['academicyear']] = $schoolyear[$x]['academicyear'];}
		        echo Form::select('academicyear', Input::post('academicyear', isset($subject) ? $subject['academicyear'] : $current_user->id), $schoo, array('class' => 'form-control',  "style" => "display:none")); ?>
   			</div>
		</div>
		<!-- end for semester here ... -->
		<div class="clearfix">
			<?php echo Form::label('Date of Evaluation', 'date_evaluation'); ?>
			<div class="input">
				 <?php echo Form::input('dateevaluation', Input::post('dateevaluation', isset($academicyear) ? $academicyear->dateevaluation : ''), array('class' => 'form-control ', 'type' => 'date', 'required' => '')); ?>
			</div>
		</div>
		<br />
		<div class="actions">
			<?php echo Html::anchor('admin/subject', 'Back', array('class' => 'btn btn-default')); ?> |
			<?php echo Form::submit('submit', 'Update', array('class' => 'btn btn-primary')); ?>
		</div>
	</fieldset>
</div>
<?php echo Form::close(); ?>
