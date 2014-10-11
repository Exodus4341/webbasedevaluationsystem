<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
	<?php echo Asset::css('bootstrap.min.css'); ?>
	<?php echo Asset::css('plugins/metisMenu/metisMenu.min.css'); ?>
	<?php echo Asset::css('sb-admin-2.css'); ?>
	<?php echo Asset::css('demo_table.css'); ?>
	<?php echo Asset::css('jquery-ui.css'); ?>

	<style>
		/*body { margin: 80px; background-color: #f5f5f5; }*/
		.box{
		    border: 1px solid #1b1b1b;
			padding: 80px;
		    border-radius: 10px;
		    outline:500px;
		    height: auto 0px;
		    width: 400px;
		    background-color: rgb(237, 243, 233);
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
                <a class="navbar-brand" href="index.html">JMC Web Based Evaluation System</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-nav navbar-right">
          
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="glyphicon glyphicon-user"></i> <?php echo $current_user->username ?>  <i class="caret"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
		                <li><?php echo Html::anchor('admin/SchoolYear', 'Set School Year') ?></li>
		               	<li><?php echo Html::anchor('admin/academicyear', 'Academic Year') ?></li>
		               	<li><?php echo Html::anchor('admin/achives', 'Archives') ?></li>
                        <li class="divider"></li>
                        	<li><?php echo Html::anchor('admin/logout', 'Logout') ?></li>
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
                        	<?php echo Html::anchor('admin', 'Dashboard') ?>
                        </li>
                        <li>
                        	<?php echo Html::anchor('admin/department', 'Department') ?>
                        </li>
                        <li>
                        	<?php echo Html::anchor('admin/category', 'Category') ?>
                        </li>
                        <li>
                        	<?php echo Html::anchor('admin/question', 'Question') ?>
                        </li>
                        <li>
                        	<?php echo Html::anchor('admin/studentevaluation', 'Student Evaluations') ?>
                        </li>
                        <li>
                        	<?php echo Html::anchor('admin/subject', 'Subject') ?>
                        </li>
                        <li>
                        	<?php echo Html::anchor('admin/course', 'Course') ?>
                        </li>
                        <li>
							<?php echo Html::anchor('admin/users', 'Users  <span class="pull-right glyphicon glyphicon-chevron-down"></span>') ?>
							 <ul class="nav nav-second-level">
                                <li>
                                    <a href="blank.html">Administrator</a>
                                </li>
                                <li>
                                    <a href="blank.html">Students</a>
                                </li>
                                <li>
                                    <a href="login.html">Teachers</a>
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
					<a href="#">Web-E-SMS-Notification-System</a> A Fast Robust Faculty College Evaluation with SMS Technology System.<br>
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
