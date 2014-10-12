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
			<?php echo Form::label('Year', 'year'); ?>

			<div class="input">
				<?php echo Form::input('year', Input::post('year', isset($year) ? $year->year : ''), array('class' => 'form-control')); ?>

			</div>
		</div>
		<br />
		<div class="actions">
			<?php echo Html::anchor('admin/academicyear', 'Back', array('class' => 'btn btn-default')); ?> |
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>
		</div>
	</fieldset>
<?php echo Form::close(); ?>