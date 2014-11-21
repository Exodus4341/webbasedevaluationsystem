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
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" role="navigation" style="margin-bottom: 0; background-color: rgba(138, 39, 118, 0.8);">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#" style="color:white;">JMC Web-E-SMS-Notification-System</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-nav navbar-right">
          		
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:white;">
                        <i class="glyphicon glyphicon-user"></i> <?php echo $current_user->username ?>  <i class="caret"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user" style="background-color: rgba(138, 39, 118, 0.8);">
                    	<li><?php echo Html::anchor('admin/users/add_users', '<i class="glyphicon glyphicon-plus"></i> New User' , array('style' => 'color:white')) ?></li>
                    	<li><?php echo Html::anchor('admin/users/deactivated', '<i class="glyphicon glyphicon-ban-circle"></i> Deactivated Users' , array('style' => 'color:white')) ?></li>
                        <li><?php echo Html::anchor('admin/department/deactivated', '<i class="glyphicon glyphicon-ban-circle"></i> Deactivated Department' , array('style' => 'color:white')) ?></li>
                        <li><?php echo Html::anchor('admin/category/deactivated', '<i class="glyphicon glyphicon-ban-circle"></i> Deactivated Category' , array('style' => 'color:white')) ?></li>
                        <li><?php echo Html::anchor('admin/question/deactivated', '<i class="glyphicon glyphicon-ban-circle"></i> Deactivated Questionnaires' , array('style' => 'color:white')) ?></li>
                        <li><?php echo Html::anchor('admin/course/deactivated', '<i class="glyphicon glyphicon-ban-circle"></i> Deactivated Course' , array('style' => 'color:white')) ?></li>
		                <li><?php echo Html::anchor('admin/SchoolYear', '<i class="glyphicon glyphicon-wrench"></i> Set School Year' , array('style' => 'color:white')) ?></li>
		               	<li><?php echo Html::anchor('admin/academicyear', '<i class="glyphicon glyphicon-font"></i> Academic Year' , array('style' => 'color:white')) ?></li>
		               	<li><?php echo Html::anchor('admin/achives', '<i class="glyphicon glyphicon-briefcase"></i> Archives' , array('style' => 'color:white')) ?></li>
                        <li class="divider">
                        	<li><?php echo Html::anchor('admin/logout', '<i class="glyphicon glyphicon-log-out"></i> Logout', array('style' => 'color:white')) ?></li>
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
                        	<?php echo Html::anchor('admin', '<i class="glyphicon glyphicon-dashboard"></i> Dashboard') ?>
                        </li>
                        <li>
                        	<?php echo Html::anchor('admin/department', '<i class="glyphicon glyphicon-bookmark"></i> Department') ?>
                        </li>
                        <li>
                        	<?php echo Html::anchor('admin/category', '<i class="glyphicon glyphicon-copyright-mark"></i> Category') ?>
                        </li>
                        <li>
                        	<?php echo Html::anchor('admin/question', '<i class="glyphicon glyphicon-question-sign"></i> Questionnaires') ?>
                        </li>
                        <li>
                        	<?php echo Html::anchor('admin/studentevaluation', '<i class="glyphicon glyphicon-edit"></i> Student Evaluations') ?>
                        </li>
                        <li>
                        	<?php echo Html::anchor('admin/subject', '<i class="glyphicon glyphicon-book"></i> Subject') ?>
                        </li>
                        <li>
                        	<?php echo Html::anchor('admin/course', '<i class="glyphicon glyphicon-subtitles"></i> Course') ?>
                        </li>
                        <li>
							<?php echo Html::anchor('admin/users', 'Users  <span class="pull-right glyphicon glyphicon-chevron-down"></span>') ?>
							 <ul class="nav nav-second-level">
                                <li>
                                    <?php echo Html::anchor('admin/users', '<i class="glyphicon glyphicon-user"></i> Administrators') ?>
                                </li>
                                <li>
                                    <?php echo Html::anchor('admin/users/student_list', '<i class="glyphicon glyphicon-user"></i> Students') ?>
                                </li>
                                <li>
                                    <?php echo Html::anchor('admin/users/teacher_list', '<i class="glyphicon glyphicon-user"></i> Teachers') ?>
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
					<small><i class="glyphicon glyphicon-copyright-mark"></i> Version: 101</small>
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
      	
		    </div>
		</div>
      </div>
    </div>
  </div>
</div>