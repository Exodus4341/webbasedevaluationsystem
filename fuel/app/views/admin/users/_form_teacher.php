<style type="text/css">
	.box-department{
		width: 500px;
		height: 0px auto;
		border-radius: 10px;
	}
</style>
<?php echo Form::open(array('method' => 'post', 'enctype' => 'multipart/form-data')); ?>
	<fieldset class="box-department">
			<div class="clearfix">
				<?php //echo Form::label('Student Profile', 'student_profile'); ?>
				<img id="PreviewHolder" style="width:100px; height:100px; border-radius:10%; border: 2px solid #1b1b1b;"/>
				<div class="input">
					<?php echo Form::input('pic_url', Input::post('pic_url', isset($user) ? $user->pic_url : ''), array('class' => 'form-control', 'id' => 'pic_url','type' => 'file')); ?>
				</div>
			</div>
			<div class="clearfix">
				<?php echo Form::label('Username', 'username'); ?>
				<div class="input">
					<?php echo Form::input('username', Input::post('username', isset($user) ? $user->username : ''), array('class' => 'form-control', 'required' => '')); ?>
				</div>
			</div>
			<div class="clearfix">
				<?php echo Form::label('Generated Password', 'password'); ?>
				<div class="input">
					<?php echo Form::input('genpassword', Str::random('alnum', 10), array('class' => 'form-control','id' => 'genpass','readonly')); ?>
				</div>
			</div>
			<div class="clearfix">
				<?php echo Form::label('Password', 'password'); ?>
				<div class="input">
					<?php echo Form::password('password', '', array('class' => 'form-control', 'id' =>'pass', 'required' => '')); ?>
				</div>
			</div>
			<div class="clearfix">
				<?php echo Form::label('First name', 'fname'); ?>
				<div class="input">
					<?php echo Form::input('fname', Input::post('fname', isset($user) ? $user->fname : ''), array('class' => 'form-control', 'required' => '')); ?>
				</div>
			</div>
			<div class="clearfix">
				<?php echo Form::label('Last name', 'lname'); ?>
				<div class="input">
					<?php echo Form::input('lname', Input::post('lname', isset($user) ? $user->lname : ''), array('class' => 'form-control', 'required' => '')); ?>
				</div>
			</div>
			<div class="clearfix">
				<?php echo Form::label('Middle name', 'mname'); ?>
				<div class="input">
					<?php echo Form::input('mname', Input::post('mname', isset($user) ? $user->mname : ''), array('class' => 'form-control', 'required' => '')); ?>
				</div>
			</div>
			<div class="clearfix">
				<?php echo Form::label('Department', 'department'); ?>
				<div class="input">
					<?php echo Form::select('id', Input::post('id', isset($user) ? $user->department : $current_user->id), $departments, array('class' => 'form-control')); ?>
				</div>
			</div>
			<div class="clearfix">
				<?php echo Form::label('Email', 'email'); ?>
				<div class="input">
					<?php echo Form::input('email', Input::post('email', isset($user) ? $user->email : ''), array('class' => 'form-control', 'required' => '')); ?>
				</div>
			</div>
			<div class="clearfix">
				<?php echo Form::label('Contact Number', 'contact_num'); ?>
				<div class="input">
					<?php echo Form::input('contact_num', Input::post('contact_num', isset($user) ? $user->contact_num : ''), array('class' => 'form-control', 'required' => '')); ?>
				</div>
			</div>
			<div class="clearfix">
				<div class="input">
					<?php echo Form::select('group', Input::post('group', isset($user) ? $user->group : ''), array(50=>'teacher'), array('class' => 'form-control', 'style' => 'display:none;')); ?>
				</div>
			</div>
			<br />
		<div class="actions">
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>
		</div>
	</fieldset>
<?php echo Form::close(); ?>

<script type="text/javascript">
  	var genpass = $('#genpass').val();
  	var pass = $('#pass').val(genpass);

  	function readURL(input){
  		if(input.files && input.files[0]){
  			var reader = new FileReader();
  			reader.onload = function(e){
  				$('#PreviewHolder').attr('src', e.target.result);
  			}
  			reader.readAsDataURL(input.files[0]);
  		}
  	}

  	$("#pic_url").change(function(){
  		readURL(this);
  	});
</script>