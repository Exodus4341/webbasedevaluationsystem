<style type="text/css">
	.box-department{
		width: 500px;
		height: 0px auto;
		border-radius: 10px;
	}
</style>
<ol class="breadcrumb">
  <li><?php echo Html::anchor('admin/question', 'Questionnaires'); ?></li>
  <li class="active">Update Questionnaires</li>
</ol>
<br />
<h2>Update Questionnaire</h2>
<?php echo Form::open(); ?>
<div class="box-department">
	<fieldset>
		<div class="clearfix">
			<?php echo Form::label('Category', 'category'); ?>

			<div class="input">
				<?php echo Form::select('category', Input::post('category', isset($question) ? $question->category : $current_user->id), $category, array('class' => 'form-control')); ?>
			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Order Number', 'order_no'); ?>
			<div class="input">
				<?php echo Form::input('order_no', Input::post('order_no', isset($question) ? $question->order_no : ''), array('class' => 'form-control', 'required' => '')); ?>
			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Question', 'question'); ?>
			<div class="input">
				<?php echo Form::textarea('question', Input::post('question', isset($question) ? $question->question : ''), array('class' => 'form-control', 'required' => '')); ?>
			</div>
		</div>		
	</fieldset>
</div>
<br />
	<div class="actions">
		<?php echo Html::anchor('admin/question', 'Back', array('class' => 'btn btn-default')); ?> |
		<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>
	</div>
<?php echo Form::close(); ?>