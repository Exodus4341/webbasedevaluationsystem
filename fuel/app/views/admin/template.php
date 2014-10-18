<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="<?php echo Config::get('base_url');?>/assets/img/jmc_logo.ico"/>
	<title><?php echo $title; ?></title>
	<?php echo Asset::css('bootstrap.min.css'); ?>
	<?php echo Asset::css('plugins/metisMenu/metisMenu.min.css'); ?>
	<?php echo Asset::css('sb-admin-2.css'); ?>
	<?php echo Asset::css('demo_table.css'); ?>
	<?php echo Asset::css('jquery-ui.css'); ?>

	<style>
		.box-modal{
			width: 500px;
			height: 0px auto;
			border-radius: 10px;
		}
		.login {
		  background: url("../assets/img/Jmc2008.jpg") no-repeat;
		  background-size: 100%;
		  background-position: center;
		}

		.ui-datepicker-calendar { 
			display: none; 
		}
	</style>
	<?php echo Asset::js(array(
		'jquery-1.11.0.js',
		'bootstrap.min.js',
		'jquery.dataTables.js',
		'script.js',
		'jquery-ui.js',
		'plugins/metisMenu/metisMenu.min.js',
		'sb-admin-2.js'
	)); ?>

	<script>
		$(function(){ $('.topbar').dropdown(); });
	</script>

</head>
<body <?php if (!$current_user) {
	echo "class='login'";
} ?>>
<div id="wrapper">
<?php if ($current_user): ?>
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">JMC Web-E-SMS-Notification-System</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-nav navbar-right">
          		
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="glyphicon glyphicon-user"></i> <?php echo $current_user->username ?>  <i class="caret"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                    	<li><a href="#" data-toggle="modal" data-target="#admin"><i class="glyphicon glyphicon-plus"></i> New User</a></li>
                    	<li><?php echo Html::anchor('admin/users/deactivated', '<i class="glyphicon glyphicon-ban-circle"></i> Deactivated Users') ?></li>
		                <li><?php echo Html::anchor('admin/SchoolYear', '<i class="glyphicon glyphicon-pencil"></i> Set School Year') ?></li>
		               	<li><?php echo Html::anchor('admin/academicyear', '<i class="glyphicon glyphicon-font"></i> Academic Year') ?></li>
		               	<li><?php echo Html::anchor('admin/achives', '<i class="glyphicon glyphicon-briefcase"></i> Archives') ?></li>
                        <li class="divider">
                        	<li><?php echo Html::anchor('admin/logout', '<i class="glyphicon glyphicon-log-out"></i> Logout') ?></li>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="<?php echo Uri::segment(2) == '' ? 'active' : '' ?>">
                        	<?php echo Html::anchor('admin', '<i class="glyphicon glyphicon-home"></i> Dashboard') ?>
                        </li>
                        <li>
                        	<?php echo Html::anchor('admin/department', '<i class="glyphicon glyphicon-list-alt"></i> Department') ?>
                        </li>
                        <li>
                        	<?php echo Html::anchor('admin/category', '<i class="glyphicon glyphicon-list-alt"></i> Category') ?>
                        </li>
                        <li>
                        	<?php echo Html::anchor('admin/question', '<i class="glyphicon glyphicon-list-alt"></i> Question') ?>
                        </li>
                        <li>
                        	<?php echo Html::anchor('admin/studentevaluation', '<i class="glyphicon glyphicon-list-alt"></i> Student Evaluations') ?>
                        </li>
                        <li>
                        	<?php echo Html::anchor('admin/subject', '<i class="glyphicon glyphicon-list-alt"></i> Subject') ?>
                        </li>
                        <li>
                        	<?php echo Html::anchor('admin/course', '<i class="glyphicon glyphicon-list-alt"></i> Course') ?>
                        </li>
                        <li>
							<?php echo Html::anchor('admin/users', 'Users  <span class="pull-right glyphicon glyphicon-chevron-down"></span>') ?>
							 <ul class="nav nav-second-level">
                                <li>
                                    <?php echo Html::anchor('admin/users', '<i class="glyphicon glyphicon-list-alt"></i> Administrators') ?>
                                </li>
                                <li>
                                    <?php echo Html::anchor('admin/users/student_list', '<i class="glyphicon glyphicon-list-alt"></i> Students') ?>
                                </li>
                                <li>
                                    <?php echo Html::anchor('admin/users/teacher_list', '<i class="glyphicon glyphicon-list-alt"></i> Teachers') ?>
                                </li>
                            </ul> 
						</li>
                    </ul>
                </div>
            </div>
        </nav>
<?php endif; ?>

<br><br>
        <div id="page-wrapper">
            <div class="row">
	            <div class="col-lg-12">		
	            <?php if (!$current_user): ?>
					<?php else: ?>
						<?php 
							$query = DB::query("SELECT * FROM schoolyear")->execute()->as_array();
							if ($query) {
								if ($query[0]['scho_year'] == "0") {
										echo "<h3 class='pull-right'>First Semester - " .$query[0]['academicyear']."</h3>";
									}else{
										echo "<h3 class='pull-right'>Second Semester - " .$query[0]['academicyear']."</h3>";
									}
							}
						 ?>
				<?php endif ?>
				<?php if (Session::get_flash('success')): ?>
								<br><br><br>
								<div class="alert alert-success alert-dismissible" role="alert">
								  <button type="button" class="pull-right close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
								  <p><?php echo implode('</p><p>', (array) Session::get_flash('success')); ?></p>
								</div>
				<?php endif; ?>
				<?php if (Session::get_flash('error')): ?>
								<br><br><br>
								<div class="alert alert-danger alert-dismissible" role="alert">
								  <button type="button" class="pull-right close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
								  <p><?php echo implode('</p><p>', (array) Session::get_flash('error')); ?></p>
								</div>
				<?php endif; ?>
				</div>
                <div class="col-lg-12">
					<?php echo $content; ?>
				</div>
            </div>

            <?php if (!$current_user): ?>
		<?php else: ?>
			<hr/>
			<footer>
				<p class="pull-right">Created by: Team FlappyCodes <i class="glyphicon glyphicon-thumbs-up"></i></p>
				<p>
					<a href="#">JMC Web-E-SMS-Notification-System</a> A Fast Robust Faculty College Evaluation with SMS Technology System.<br>
					<small>Version: 101</small>
				</p>
			</footer>
		<?php endif ?>

        </div>
        <!-- /#page-wrapper -->

</div>
    <!-- /#wrapper -->

</body>
</html>


<!-- Modal Admin -->
<div class="modal fade" id="admin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">New Admin User</h4>
      </div>
      <div class="modal-body">
      	<div>
		    <ul id="myTab" class="nav nav-tabs">
		      <li class="active"><a href="#home" data-toggle="tab">New Admin User</a></li>
		      <li><a href="#new_teacher" data-toggle="tab">New Teacher</a></li>
		      <li><a href="#new_student" data-toggle="tab">New Student</a></li>
		    </ul>
		    <div id="myTabContent" class="tab-content">
		      <div class="tab-pane fade in active" id="home">
		       <?php 
		      		if($_SERVER['REQUEST_URI'] == '/webbasedevaluationsystem/public/admin/users'){
		      			$action = '/webbasedevaluationsystem/public/admin/users/create';
		      		}
		      		else{
		      			$action = '/webbasedevaluationsystem/public/admin/users/create';
		      		}
		      	?>
		        <form action="<?= $action?>" method="POST" enctype="multipart/form-data">
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
		      	<?php 
		      		if($_SERVER['REQUEST_URI'] == '/webbasedevaluationsystem/public/admin/users'){
		      			$action = '/webbasedevaluationsystem/public/admin/users/teacher';
		      		}
		      		else{
		      			$action = '/webbasedevaluationsystem/public/admin/users/teacher';
		      		}
		      	?>
		        <form action="<?= $action?>" method="POST" enctype="multipart/form-data">
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
		      	<?php 
		      		if($_SERVER['REQUEST_URI'] == '/webbasedevaluationsystem/public/admin/users'){
		      			$action = '/webbasedevaluationsystem/public/admin/users/student';
		      		}
		      		else{
		      			$action = '/webbasedevaluationsystem/public/admin/users/student';
		      		}
		      	?>
		        <form action="<?= $action?>" method="POST" enctype="multipart/form-data">
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
		    </div>
		</div>
      </div>
    </div>
  </div>
</div>