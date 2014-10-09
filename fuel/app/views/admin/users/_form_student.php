<?php echo Form::open(array('method' => 'post', 'enctype' => 'multipart/form-data')); ?>
	<fieldset class="box">
	<table>
		<tr>
			<th><?php echo Form::label('Student Profile', 'student_profile'); ?></th>
			<th>
				 <?php //echo Html::img('uploads/'.$user->pic_url, array('class' => "thumbnail", "style" => "width:80px; height:80px")); ?>
			<div class="clearfix">
			<img id="PreviewHolder" style="width:100px; height:100px; border-radius:10%; border: 2px solid #1b1b1b;"/>
				<div class="input">
					<?php echo Form::input('pic_url', Input::post('pic_url', isset($user) ? $user->pic_url : ''), array('class' => 'span4', 'id' => 'pic_url', 'type' => 'file')); ?>
				</div>
			</div></th>
		</tr>
		<tr>
			<th><?php echo Form::label('Username', 'username'); ?></th>
			<th><div class="clearfix">
			<div class="input">
				<?php echo Form::input('username', Input::post('username', isset($user) ? $user->username : ''), array('class' => 'span4', 'required' => '')); ?>
			</div>
			</div></th>
		</tr>
		<tr>
			<th><?php echo Form::label('Generated Password', 'password'); ?></th>
			<th><div class="clearfix">
			<div class="input">
				<?php echo Form::input('genpassword', Str::random('alnum', 10), array('class' => 'span4','id' => 'genpass','readonly')); ?>
			</div>
			</div></th>
		</tr>
		<tr>
			<th><?php echo Form::label('Password', 'password'); ?></th>
			<th><div class="clearfix">
			<div class="input">
				<?php echo Form::password('password', '', array('class' => 'span4', 'id' =>'pass', 'required' => '')); ?>
			</div>
			</div></th>
		</tr>
		<tr>
			<th><?php echo Form::label('Fname', 'fname'); ?></th>
			<th><div class="clearfix">
			<div class="input">
				<?php echo Form::input('fname', Input::post('fname', isset($user) ? $user->fname : ''), array('class' => 'span4', 'required' => '')); ?>
			</div>
			</div></th>
		</tr>
		<tr>
			<th><?php echo Form::label('Lname', 'lname'); ?></th>
			<th><div class="clearfix">
			<div class="input">
				<?php echo Form::input('lname', Input::post('lname', isset($user) ? $user->lname : ''), array('class' => 'span4', 'required' => '')); ?>
			</div>
			</div></th>
		</tr>
		<tr>
			<th><?php echo Form::label('Mname', 'mname'); ?></th>
			<th><div class="clearfix">
			<div class="input">
				<?php echo Form::input('mname', Input::post('mname', isset($user) ? $user->mname : ''), array('class' => 'span4', 'required' => '')); ?>
			</div>
			</div></th>
		</tr>
		<tr>
			<th><?php echo Form::label('Course', 'course'); ?></th>
			<th><div class="clearfix">
			<div class="input">
				<?php echo Form::select('course', Input::post('course', isset($user) ? $user->course : $current_user->id), $courses, array('class' => 'span4')); ?>
			</div>
			</div></th>
		</tr>
		<tr>
			<th><?php echo Form::label('Year', 'year'); ?></th>
			<th><div class="clearfix">
			<div class="input">
				<?php echo Form::select('year', Input::post('year', isset($user) ? $user->year : ''), 
				array(1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5),array('class' => 'span4', 'required' => '')); ?>
			</div>
			</div></th>
		</tr>
		<tr>
			<th><?php echo Form::label('Email', 'email'); ?></th>
			<th><div class="clearfix">
			<div class="input">
				<?php echo Form::input('email', Input::post('email', isset($user) ? $user->email : ''), array('class' => 'span4')); ?>
			</div>
			</div></th>
		</tr>
		<tr>
			<th><?php echo Form::label('Contact Number', 'contact_num'); ?></th>
			<th><div class="clearfix">
			<div class="input">
				<?php echo Form::input('contact_num', Input::post('contact_num', isset($user) ? $user->contact_num : ''), array('class' => 'span4', 'required' => '')); ?>
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