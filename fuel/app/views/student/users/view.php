<?php if ($current_user): ?>
	<?php
	 echo "<h2>Viewing #" .$current_user->id. "</h2></br>";
	 	echo Html::img('uploads/'.$user->pic_url, array('class' => "thumbnail", "style" => "width:80px; height:80px"));
		echo "<p><strong>Username:</strong>" .$current_user->username."</p>"; 
		echo "<p><strong>Fname:</strong>" .$current_user->fname."</p>";
		echo "<p><strong>Lname:</strong>" .$current_user->lname."</p>";
		echo "<p><strong>Mname:</strong>" .$current_user->mname."</p>";
		echo "<p><strong>Course:</strong>" .$current_user->course."</p>";
		echo "<p><strong>Year:</strong>" .$current_user->year."</p>";
		echo "<p><strong>Email:</strong>" .$current_user->email."</p>";
?>
	<?php echo Html::anchor('student', 'Back'); ?>
<?php endif; ?>
