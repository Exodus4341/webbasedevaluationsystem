<?php echo Form::open(); ?>

	<fieldset class="box">
	<table>
		<tr>
			<th><?php echo Form::label('Username', 'username'); ?></th>
			<th><div class="clearfix">
			<div class="input">
				<?php echo Form::input('username', Input::post('username', isset($user) ? $user->username : ''), array('class' => 'span4', 'required')); ?>
			</div>
			</div></th>
		</tr>
		<tr>
			<th><?php echo Form::label('Password', 'password'); ?></th>
			<th><div class="clearfix">
			<div class="input">
				<?php echo Form::password('password', Input::post('password', isset($user) ? $user->password : ''), array('class' => 'span4', 'required')); ?>
			</div>
			</div></th>
		</tr>
		<tr>
			<th><?php echo Form::label('Email', 'email'); ?></th>
			<th><div class="clearfix">
			<div class="input">
				<?php echo Form::input('email', Input::post('email', isset($user) ? $user->email : ''), array('class' => 'span4', 'required')); ?>
			</div>
			</div></th>
		</tr>
		<tr>
			<th><?php echo Form::label('User type', 'group'); ?></th>
			<th><div class="clearfix">
			<div class="input">
				<?php echo Form::select('group', Input::post('group', isset($user) ? $user->group : ''), array(100=>'admin') , array('class' => 'span4',)); ?>
			</div>
			</div></th>
		</tr>
	</table>
		
		<div class="actions">
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>
		</div>
	</fieldset>
<?php echo Form::close(); ?>