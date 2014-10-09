<?php echo Form::open(array()); ?>
	<?php if (isset($_GET['destination'])): ?>
		<?php echo Form::hidden('destination',$_GET['destination']); ?>
	<?php endif; ?>
<div align="center">
	<div class="box">
			<?php if (isset($login_error)): ?>
				<div class="error"><?php echo $login_error; ?></div>
			<?php endif; ?>
		<table>
			<tr>
				<th><?php echo Asset::img('admin-edited.png', array('style' => 'width:170px; height:170px; border-radius:50%; border: 2px solid #000000;')); ?></th>
			</tr>
			<tr>
				<th><h2>Administrator</h2></th>
			</tr>
			<tr>
				<div class="row">
					<th><div class="input"><?php echo Form::input('email', Input::post('email'), array('placeholder' => 'Email or Username')); ?></div></th>
					<?php if ($val->error('email')): ?>
						<div class="error"><?php echo $val->error('email')->get_message('You must provide a username or email'); ?></div>
					<?php endif; ?>
				</div>
			</tr>
			<tr>
				<div class="row">
					<th><div class="input"><?php echo Form::password('password', Input::post(''), array('placeholder' => 'Password')); ?></div></th>
					<?php if ($val->error('password')): ?>
						<div class="error"><?php echo $val->error('password')->get_message(':label cannot be blank'); ?></div>
					<?php endif; ?>
				</div>
			</tr>
		</table>
		<div class="actions">
			<?php echo Form::submit(array('value'=>'Login', 'name'=>'submit', 'class' => 'btn btn-primary', 'style' => 'width:220px;')); ?>
		</div>
	</div>
</div>
<?php echo Form::close(); ?>