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
				<?php echo Form::label('Username', 'username'); ?>
			<div class="input">
				<?php echo Form::input('username', Input::post('username', isset($user) ? $user->username : ''), array('class' => 'form-control', 'required')); ?>
			</div>
		</div>
		<div class="clearfix">
				<?php echo Form::label('Password', 'password'); ?>
			<div class="input">
				<?php echo Form::password('password', Input::post('password', ''), array('class' => 'form-control', 'required')); ?>
			</div>
		</div>
		<div class="clearfix">
				<?php echo Form::label('Email', 'email'); ?>
			<div class="input">
				<?php echo Form::input('email', Input::post('email', isset($user) ? $user->email : ''), array('class' => 'form-control', 'required')); ?>
			</div>
		</div>
		<div class="clearfix">
			<div class="input">
				<?php echo Form::select('group', Input::post('group', isset($user) ? $user->group : ''), array(100=>'admin') , array('style' => 'display:none;', 'class' => 'form-control',)); ?>
			</div>
		</div>
		<br />
		<div class="actions">
			<?php echo Html::anchor('admin/users', 'Back', array('class' => 'btn btn-default')); ?> |
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>
		</div>
	</fieldset>
</div>
<?php echo Form::close(); ?>