<?php
	 echo "<h2>Viewing #" .$user->id. "</h2></br>";
	if ($user->group == 1) {
		echo Html::img('uploads/'.$user->pic_url, array('class' => "thumbnail", "style" => "width:80px; height:80px"));
		echo "<p><strong>Username: </strong>" .$user->username."</p>"; 
		echo "<p><strong>Password: </strong>" .$user->password."</p>";
		echo "<p><strong>Name: </strong>" .$user->fname." ".$user->mname." ".$user->lname."</p>";
		echo "<p><strong>Year: </strong>" .$user->year."</p>";
		echo "<p><strong>Email: </strong>" .$user->email."</p>";
	 }
	 elseif ($user->group == 50) {
	 	echo Html::img('uploads/'.$user->pic_url, array('class' => "thumbnail", "style" => "width:80px; height:80px"));
	  	echo "<p><strong>Username: </strong>" .$user->username."</p>"; 
		echo "<p><strong>Password: </strong>" .$user->password."</p>";
		echo "<p><strong>Name: </strong>" .$user->fname." ".$user->mname." ".$user->lname."</p>";
		echo "<p><strong>Email: </strong>" .$user->email."</p>";
	  }
	  else{
	   	echo "<p><strong>Username: </strong>" .$user->username."</p>"; 
		echo "<p><strong>Password: </strong>" .$user->password."</p>";
		echo "<p><strong>Email: </strong>" .$user->email."</p>";
	  }  
?>
	<?php echo Html::anchor('admin/users/edit/'.$user->id, 'Edit', array('class' => 'btn btn-warning'));?>
	<?php echo Html::anchor('admin/users', 'Back', array('class' => 'btn btn-default')); ?>