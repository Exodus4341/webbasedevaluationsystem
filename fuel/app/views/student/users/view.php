<?php if ($user[0]['group'] == '1'): ?>
	<?php
	 //echo "<h2>Viewing #" .$user[0]['uid']. "</h2></br>";
		echo "<ol class='breadcrumb'>
		  <li class='active'>Update Username / Password</li>
		</ol>";
	 	echo Html::img('uploads/'.$user[0]['pic_url'], array('class' => "thumbnail", "style" => "width:80px; height:80px"));
		echo "<p><strong>Username: </strong>" .$user[0]['username']."</p>"; 
		echo "<p><strong>Name: </strong>" .ucwords($user[0]['fname'])." ".ucwords($user[0]['lname'])." ".ucwords($user[0]['mname'])."</p>";
		echo "<p><strong>Course: </strong>" .$user[0]['course_name']."</p>";
		echo "<p><strong>Year: </strong>" .$user[0]['year']."</p>";
		echo "<p><strong>Email: </strong>" .$user[0]['email']."</p>";
?>
	<?php echo Html::anchor('student', 'Back', array('class' => 'btn btn-default')); ?>
<?php endif; ?>
