<style type="text/css">
	.box-department{
		width: 500px;
		height: 0px auto;
		border-radius: 10px;
	}
</style>
<h2>Change Username/Password</h2>
<?php echo Form::open(); ?>
	<fieldset class="box-department" >
		<div class="clearfix">
				<?php echo Form::label('Username', 'username'); ?>
			<div class="input">
				<?php echo Form::input('username', Input::post('username', isset($user) ? $user->username : ''), array('class' => 'form-control', 'required' => '')); ?>
			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Password', 'password'); ?>
			<div class="input">
				<?php echo Form::password('password', '', array('class' => 'form-control', 'required' => '')); ?>
			</div>
		</div>
		<div class="clearfix">
			<div class="input">
				<?php echo Form::select('group', Input::post('group', isset($user) ? $user->group : ''), array(50=>'teacher') , array('class' => 'form-control', 'style' => 'display:none;')); ?>
			</div>
		</div>
		<br />
		<div class="actions">
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>

		</div>
	</fieldset>
<?php echo Form::close(); ?>