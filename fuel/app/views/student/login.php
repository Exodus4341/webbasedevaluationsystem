<?php echo Asset::css('bootstrap.min.css'); ?>

<style>
	body {
	    margin: 80px; 
	    background-color: #f5f5f5; 
		background: url("../assets/img/Jmc2008.jpg") no-repeat;
		background-size: 100%;
		background-position: center;
	}
	.box{
		padding: 50px;
		border-radius: 10px;
		outline:500px;
		height: auto 0px;
		width: 600px;
		background-color: rgba(237, 243, 233, 0.6);
		margin: 0px auto;
	}
	.box{
		margin: 0px auto;
	}		
</style>
<?php echo Form::open(array()); ?>

	<?php if (isset($_GET['destination'])): ?>
		<?php echo Form::hidden('destination',$_GET['destination']); ?>
	<?php endif; ?>
	<div class="box" align="center">
			<?php if (isset($login_error)): ?>
				<div class="error"><?php echo $login_error; ?></div>
			<?php endif; ?>
				<?php echo Asset::img('user-edited.png', array('style' => 'width:170px; height:170px; border-radius:50%; border: 2px solid #1b1b1b;')); ?></th>
				<h2>User</h2>
				<div class="row">
					<div class="input"><?php echo Form::input('email', Input::post('email'), array('placeholder' => 'Email or Username', 'class' => 'form-control', 'style' => 'width:220px;')); ?></div>
					<?php if ($val->error('email')): ?>
						<div class="error"><?php echo $val->error('email')->get_message('You must provide a username or email'); ?></div>
					<?php endif; ?>
				</div>
				<div class="row">
						<div class="input"><?php echo Form::password('password', Input::post(''), array('placeholder' => 'Password', 'class' => 'form-control', 'style' => 'width:220px;')); ?></div>
						<?php if ($val->error('password')): ?>
							<div class="error"><?php echo $val->error('password')->get_message(':label cannot be blank'); ?></div>
						<?php endif; ?>
				</div>
		<div class="actions">
			<?php echo Form::submit(array('value'=>'Login', 'name'=>'submit', 'class' => 'btn btn-primary', 'style' => 'width:220px;')); ?>
		</div>
	</div>
<?php echo Form::close(); ?>