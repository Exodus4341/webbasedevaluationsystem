<?php
	if ($user->group == 1) {
		echo "<ol class='breadcrumb'>
	  			<li>".Html::anchor('admin/users/student_list', 'Student List')."</li>
			  <li class='active'>Update Student</li>
			</ol><h2>Update User</h2><br>";
	 	echo render('admin\users/_form_student');
	 }
	 elseif ($user->group == 50) {
	 	echo "<ol class='breadcrumb'>
	  			<li>".Html::anchor('admin/users/teacher_list', 'Teacher List')."</li>
			  <li class='active'>Update Teacher</li>
			</ol><h2>Update User</h2><br>";
	  	echo render('admin\users/_form_teacher');
	  }
	  else{
	  	echo "<ol class='breadcrumb'>
	  			<li>".Html::anchor('admin/users', 'Users')."</li>
			  <li class='active'>Update Admin</li>
			</ol><h2>Update User</h2><br>";
	   	echo render('admin\users/_form');
	  }  
?>