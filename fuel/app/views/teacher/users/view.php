<?php
	 echo "<h2>Viewing #" .$user->id. "</h2></br>";
	if ($user->group == 50) {
		echo Html::img('uploads/'.$user->pic_url, array('class' => "thumbnail", "style" => "width:80px; height:80px"));
	  	echo "<p><strong>Username:</strong>" .$user->username."</p>"; 
		echo "<p><strong>Fname:</strong>" .$user->fname."</p>";
		echo "<p><strong>Lname:</strong>" .$user->lname."</p>";
		echo "<p><strong>Mname:</strong>" .$user->mname."</p>";
		echo "<p><strong>Course:</strong>" .$user->department."</p>";
		echo "<p><strong>Email:</strong>" .$user->email."</p>";
	  }
?>
	<?php echo Html::anchor('teacher', 'Back'); ?>