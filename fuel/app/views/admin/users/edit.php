<h2>Update User</h2>
<br>

<?php
	if ($user->group == 1) {
		echo "<ol class='breadcrumb'>
	  			<li>".Html::anchor('admin/users/student_list', 'Student')."</li>
			 	<li class='active'>Update Student</li>
			</ol>";
	 	echo render('admin\users/_form_student');
	 }
	 elseif ($user->group == 50) {
	 	echo "<ol class='breadcrumb'>
	  			<li>".Html::anchor('admin/users/teacher_list', 'Teacher')."</li>
			 	<li class='active'>Update Teacher</li>
			</ol>";
	  	echo render('admin\users/_form_teacher');
	  }
	  else{
	  	echo "<ol class='breadcrumb'>
	  			<li>".Html::anchor('admin/users', 'Admin')."</li>
			 	<li class='active'>Update Admin</li>
			</ol>";
	   	echo render('admin\users/_form');
	  }  
?>