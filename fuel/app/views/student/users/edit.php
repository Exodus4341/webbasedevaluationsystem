<?php echo Form::open(); ?>
	<fieldset class="box" >
	<table>
		<tr>
			<th><?php echo Form::label('Username', 'username'); ?></th>
			<th>
			<div class="clearfix">
			<div class="input">
				<?php echo Form::input('username', Input::post('username', isset($user) ? $user->username : ''), array('class' => 'span4', 'required' => '')); ?>
			</div>
			</div></th>
		</tr>
		<tr>
			<th><?php echo Form::label('Password', 'password'); ?></th>
			<th><div class="clearfix">
			<div class="input">
				<?php echo Form::password('password', '', array('class' => 'span4', 'required' => '')); ?>
			</div>
			</div></th>
		</tr>
		<tr>
			<th><?php echo Form::label('User type', 'group'); ?></th>
			<th><div class="clearfix">
			<div class="input">
				<?php echo Form::select('group', Input::post('group', isset($user) ? $user->group : ''), array(1=>'student') , array('class' => 'span4')); ?>
			</div>
			</div></th>
		</tr>
	</table>
		
		<div class="actions">
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>

		</div>
	</fieldset>
<?php echo Form::close(); ?>