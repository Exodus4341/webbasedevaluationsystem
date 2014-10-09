<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
	<?php echo Asset::css('bootstrap.css'); ?>
	<?php echo Asset::css('demo_table.css'); ?>
	<style>
		body { margin: 80px; }
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
	</style>
	<?php echo Asset::js(array(
		'jquery.js',
		'jquery.min.js',
		'bootstrap.js',
		'jquery.dataTables.js',
		'script.js',
		'jquery.mixitup.min.js',
		'jquery.vegas.js',
		'jquery-scrolltofixed-min.js'
	)); ?>
	<script>
		$(function(){ $('.topbar').dropdown(); });
	</script>
</head>
<body <?php if (!$current_user) {
	echo "class='login'";
} ?>>

	<?php if ($current_user): ?>
	<div class="navbar navbar-fixed-top">
	    <div class="navbar-inner">
	        <div class="container">
	            <a href="#" class="brand">My Site</a>
	            <ul class="nav">
	                <li class="<?php echo Uri::segment(2) == '' ? 'active' : '' ?>">
						<?php echo Html::anchor('teacher', 'Dashboard') ?>
					</li>
					<li>
						<?php echo Html::anchor('teacher/subject', 'Subjects') ?>
					</li>
	          </ul>
	          	<div class="nav pull-right">
	        		<?php echo Html::img('uploads/'.$current_user->pic_url, array('class' => "thumbnail", "style" => "width:30px; height:30px")); ?>
	       		</div>
	          <ul class="nav pull-right">
	            <li class="dropdown">
	              <a data-toggle="dropdown" class="dropdown-toggle" href="#"><?php echo $current_user->username ?> <b class="caret"></b></a>
	              <ul class="dropdown-menu">
	              	<li><?php echo Html::anchor('teacher/users/edit/'.$current_user->id, 'Change Username/Password')?></li>
	             	<li><?php echo Html::anchor('teacher/users/view/'.$current_user->id, 'View Account')?></li>
	               <li><?php echo Html::anchor('teacher/logout', 'Logout') ?></li>
	              </ul>
	            </li>
	          </ul>
	        </div>
	        
	    </div>
	</div>
	<?php endif; ?>

	<div class="container">
		<div class="row">
			<div class="span12">
				<?php if (!$current_user): ?>
				<?php else: ?>
					<?php 
						$query = DB::query("SELECT * FROM schoolyear")->execute()->as_array();
						if ($query) {
							if ($query[0]['scho_year'] == "0") {
									echo "<h1>First Semester - " .$query[0]['academicyear']."</h1>";
								}else{
									echo "<h1>Second Semester - " .$query[0]['academicyear']."</h1>";
								}
						}
					 ?>
				<hr>
			<?php endif ?>
			<br />
				<!-- <hr> -->
<?php if (Session::get_flash('success')): ?>
				<div class="alert alert-success">
					<button class="close" data-dismiss="alert">×</button>
					<p><?php echo implode('</p><p>', (array) Session::get_flash('success')); ?></p>
				</div>
<?php endif; ?>
<?php if (Session::get_flash('error')): ?>
				<div class="alert alert-error">
					<button class="close" data-dismiss="alert">×</button>
					<p><?php echo implode('</p><p>', (array) Session::get_flash('error')); ?></p>
				</div>
<?php endif; ?>
			</div>
			<div class="span12">
<?php echo $content; ?>
			</div>
		</div>
 <?php if (!$current_user): ?>
 	
 <?php else: ?>
		<hr/>
		<footer>
			<p class="pull-right">Created by: Team FlappyCodes <i class="icon-thumbs-up"></i></p>
			<p>
				<a href="#">Web-E-SMS-Notification-System</a> A Fast Robust Faculty College Evaluation with SMS Technology System.<br>
				<small>Version: 2.0</small>
			</p>
		</footer>
	<?php endif ?>
	</div>
</body>
</html>
