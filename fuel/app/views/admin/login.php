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
		.box {
			margin: 0px auto;
		}

		
	</style>


<?php echo Form::open(array()); ?>
	<?php if (isset($_GET['destination'])): ?>
		<?php echo Form::hidden('destination',$_GET['destination']); ?>
	<?php endif; ?>
	<div class="box">
		<hr />
			<?php if (isset($login_error)): ?>
				<div class="error"><?php echo $login_error; ?></div>
			<?php endif; ?>
			<div align="center">
				<?php echo Asset::img('admin-edited.png', array('style' => 'width:170px; height:170px; border-radius:50%; border: 2px solid #000000;')); ?>
				<h2>Administrator</h2>
					<div class="row">
						<th><div class="input-group"><?php echo Form::input('email', Input::post('email'), array('placeholder' => 'Email or Username', 'style' => 'width:220px;', 'class' => 'form-control')); ?></div></th>
						<?php if ($val->error('email')): ?>
							<div class="error"><?php echo $val->error('email')->get_message('You must provide a username or email'); ?></div>
						<?php endif; ?>
					</div>
					<div class="row">
						<div class="input-group"><?php echo Form::password('password', Input::post(''), array('placeholder' => 'Password', 'style' => 'width:220px;', 'class' => 'form-control')); ?></div>
						<?php if ($val->error('password')): ?>
							<div class="error"><?php echo $val->error('password')->get_message(':label cannot be blank'); ?></div>
						<?php endif; ?>
					</div>
			</div>
		<div class="actions" align="center">
			<?php echo Form::submit(array('value'=>'Login', 'name'=>'submit', 'class' => 'btn btn-primary', 'style' => 'width:220px;')); ?>
		</div>
		<hr />
	</div>
<?php echo Form::close(); ?>
