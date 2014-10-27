<?php
	// echo "<h2>Viewing #" .$user[0]['uid']. "</h2></br>";
	if ($user[0]['group'] == 50) {
		echo "<ol class='breadcrumb'>
			  <li class='active'>View Profile</li>
			</ol>";
		echo Html::img('uploads/'.$user[0]['pic_url'], array('class' => "thumbnail", "style" => "width:80px; height:80px"));
	  	echo "<p><strong>Username: </strong>" .$user[0]['username']."</p>"; 
		echo "<p><strong>Name: </strong>" .$user[0]['fname']." ".$user[0]['mname']." ".$user[0]['lname']."</p>";
		echo "<p><strong>Department: </strong>" .$user[0]['dept_name']."</p>";
		echo "<p><strong>Email: </strong>" .$user[0]['email']."</p>";
	  }
?>
	<?php echo Html::anchor('teacher', 'Back', array('class' => 'btn btn-default')); ?>