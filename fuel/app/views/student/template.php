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
	.padding-img{
		padding: 5px;
	}
	.login {
	  background: url("../assets/img/Jmc2008.jpg") no-repeat;
	  background-size: 100%;
	  background-position: center;
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
                    	<li><?php echo Html::anchor('student/users/edit/'.$current_user->id, '<i class="glyphicon glyphicon-pencil"></i> Change Username/Password') ?></li>
                    	<li><?php echo Html::anchor('student/users/view/'.$current_user->id, '<i class="glyphicon glyphicon-eye-open"></i> View Account')?></li>
                        <li class="divider">
                        	<li><?php echo Html::anchor('student/logout', '<i class="glyphicon glyphicon-log-out"></i> Logout') ?></li>
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
                    	<li class="padding-img" align="center">
                    		<?php echo Html::img('uploads/'.$current_user['pic_url'], array('class' => "img-circle", "style" => "width:100px; height:100px")) ; ?>
                    		<p>Hello, <?php echo ucwords($current_user->fname)." ".ucwords($current_user->mname).". ".ucwords($current_user->lname); ?></p>
                    	</li>
                        <li class="<?php echo Uri::segment(2) == '' ? 'active' : '' ?>">
						<?php echo Html::anchor('student', '<i class="glyphicon glyphicon-home"></i> Dashboard') ?>
						</li>
						<li>
							<?php echo Html::anchor('student/subject', '<i class="glyphicon glyphicon-link"></i> Subjects') ?>
						</li>	
                    </ul>
                </div>
            </div>
        </nav>
<?php endif; ?>
<br /><br />
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
				<small>Version: 2.0</small>
			</p>
		</footer>
	<?php endif ?>
	</div>
</div>
</body>
</html>
