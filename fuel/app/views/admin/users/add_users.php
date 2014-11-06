<style type="text/css">
	.box-department{
		width: 500px;
		height: 0px auto;
		border-radius: 10px;
	}
</style>
<div>
		    <ul id="myTab" class="nav nav-tabs">
		      <li class="active"><a href="#home" data-toggle="tab">New Admin User</a></li>
		      <li><a href="#new_teacher" data-toggle="tab">New Teacher</a></li>
		      <li><a href="#new_student" data-toggle="tab">New Student</a></li>
		    </ul>
		    <div id="myTabContent" class="tab-content">
		      <div class="tab-pane fade in active" id="home">
		        <form action="create" method="POST" enctype="multipart/form-data" class="box-department">
					<fieldset class="box-department">
						<div class="clearfix">
							<?php echo Form::label('Username', 'username'); ?>
							<div class="input">
								<?php echo Form::input('username', Input::post('username', isset($user) ? $user->username : ''), array('required', 'class' => 'form-control')); ?>
							</div>
						</div>
						<div class="clearfix">
							<?php echo Form::label('Password', 'password'); ?>
							<div class="input">
								<?php echo Form::password('password', Input::post('password', isset($user) ? $user->password : ''), array('required', 'class' => 'form-control')); ?>
							</div>
						</div>
						<div class="clearfix">
							<?php echo Form::label('Email', 'email'); ?>
							<div class="input">
								<?php echo Form::input('email', Input::post('email', isset($user) ? $user->email : ''), array('required', 'class' => 'form-control')); ?>
							</div>
						</div>
						<div class="clearfix">
							<div class="input">
								<?php echo Form::select('group', Input::post('group', isset($user) ? $user->group : ''), array(100=>'admin') , array('class' => 'form-control', 'style' => 'display:none;')); ?>
							</div>
						</div>
			      
			     		 <div class="modal-footer">
				        	<div class="actions">
								<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>
							</div>
						</div>
					</fieldset>
				<?php echo Form::close(); ?>
		      </div>
		      <div class="tab-pane fade" id="new_teacher">
		        <form action="teacher" method="POST" enctype="multipart/form-data" class="box-department">
					<fieldset class="box-department">
							<div class="clearfix">
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
									<?php echo Form::input('genpassword', Str::random('alnum', 10), array('class' => 'form-control','id' => 'genpasss','readonly')); ?>
								</div>
							</div>
							<div class="clearfix">
								<?php echo Form::label('Password', 'password'); ?>
								<div class="input">
									<?php echo Form::password('password', '', array('class' => 'form-control', 'id' =>'passs', 'required' => '')); ?>
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
					      <div class="modal-footer">
						        <div class="actions">
									<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>
							 	</div>
						 </div>
					</fieldset>
				</form>
					<script type="text/javascript">
					  	var genpasss = $('#genpasss').val();
					  	var passs = $('#passs').val(genpasss);

					  	function readURLs(input){
					  		if(input.files && input.files[0]){
					  			var reader = new FileReader();
					  			reader.onload = function(e){
					  				$('#PreviewHolder').attr('src', e.target.result);
					  			}
					  			reader.readAsDataURL(input.files[0]);
					  		}
					  	}
					  	$("#pic_url").change(function(){
					  		readURLs(this);
					  	});
					</script>
		      </div>
		      <div class="tab-pane fade" id="new_student">
		        <form action="student" method="POST" enctype="multipart/form-data" class="box-department">
							<fieldset class="box-department">
								<div class="clearfix">
								<img id="PreviewHolders" style="width:100px; height:100px; border-radius:10%; border: 2px solid #1b1b1b;"/>
									<div class="input">
										<?php echo Form::input('pic_url', Input::post('pic_url', isset($user) ? $user->pic_url : ''), array('class' => 'form-control', 'id' => 'pic_urls', 'type' => 'file')); ?>
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
									<?php echo Form::label('Course', 'course'); ?>
									<div class="input">
										<?php echo Form::select('course', Input::post('course', isset($user) ? $user->course : $current_user->id), $courses, array('class' => 'form-control')); ?>
									</div>
								</div>
								<div class="clearfix">
									<?php echo Form::label('Year', 'year'); ?>
									<div class="input">
										<?php echo Form::select('year', Input::post('year', isset($user) ? $user->year : ''), 
										array(1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5),array('class' => 'form-control', 'required' => '')); ?>
									</div>
								</div>
								<div class="clearfix">
									<?php echo Form::label('Email', 'email'); ?>
									<div class="input">
										<?php echo Form::input('email', Input::post('email', isset($user) ? $user->email : ''), array('class' => 'form-control')); ?>
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
										<?php echo Form::select('group', Input::post('group', isset($user) ? $user->group : ''), array(1=>'student') , array('class' => 'form-control', 'style' => 'display:none')); ?>
									</div>
								</div>
								<br />
							<div class="modal-footer">
								<div class="actions">
									<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>
								</div>
							</div>
						</fieldset>
					</form>
						<script type="text/javascript">
						  	var genpass = $('#genpass').val();
						  	var pass = $('#pass').val(genpass);

						  	function readURL(input){
						  		if(input.files && input.files[0]){
						  			var readers = new FileReader();
						  			readers.onload = function(e){
						  				$('#PreviewHolders').attr('src', e.target.result);
						  			}
						  			readers.readAsDataURL(input.files[0]);
						  		}
						  	}
						  	$("#pic_urls").change(function(){
						  		readURL(this);
						  	});
						</script>
		      </div>