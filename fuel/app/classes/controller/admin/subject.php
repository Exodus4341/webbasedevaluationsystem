<?php
class Controller_Admin_Subject extends Controller_Admin 
{

	public function action_index()
	{
		$view = View::forge('admin\subject/index');
		$sqlQ = DB::query("SELECT *, s.`id` AS `sid` FROM `users` AS u INNER JOIN `subjects` AS s ON u.`id` = s.`teacher_id` INNER JOIN `schoolyear` AS sy ON sy.`academicyear` = s.`academicyear` AND s.`semester` = sy.`scho_year` WHERE u.`group` = '50' ")->execute()->as_array();
		$view->set_global('users2', $sqlQ);
		$this->template->title = "Subjects";
		$this->template->content = $view;		
	}

	public function action_student_list($subj_code = null)
	{	
		$view = View::forge('admin\subject/student_list');
		$query = DB::query("SELECT *, ss.`created_at` AS `ssc`, ss.`id` AS ssid FROM `subj_stud` AS ss INNER JOIN `users` AS u ON ss.`stud_id` = u.`id` LEFT JOIN `subjects` AS s ON s.`id` = ss.`subj_id` WHERE ss.`subj_id` = '".$subj_code."' ")->execute()->as_array();
		$sqlQ = DB::query("SELECT * FROM  `users` AS u INNER JOIN  `subjects` AS s ON u.`id` = s.`teacher_id` WHERE u.`group` =  '50' AND s.`id` =  '".$subj_code."' GROUP BY s.`subj_code` ")->execute()->as_array();
		$view->set_global('studentlist', $query);
		$view->set_global('teachers', $sqlQ);
		$this->template->title = "Subjects";
		$this->template->content = $view;
	}
	public function action_view($id = null)
	{
		$view = View::forge('admin\subject/view');
		$data = DB::query("SELECT *, s.`id` AS `sid` FROM `users` AS u INNER JOIN `subjects` AS s ON u.`id` = s.`teacher_id` WHERE u.`group` = '50' AND s.`id` = '".$id."' ")->execute()->as_array();
		$view->set_global('subject', $data);
		$this->template->title = "Subject";
		$this->template->content = $view;
	}

	public function action_delete_subject($id = null)
	{
		$delete = DB::query("DELETE FROM `subj_stud` WHERE `id` = ".$id." ")->execute();
		if (isset($delete)) {
			Session::set_flash('success', e('Successfully remove in this subject #'.$id));
		}
		else{
			Response::redirect('admin/subject');
		}
			Response::redirect('admin/subject');
	}

	public function action_add_student_subject($id = null)
	{
		$view = View::forge('admin\subject/add_student_subject');
		if (Input::method() == 'POST')
		{
			$val = Model_Subject::validate('create');

			if ($val->run())
			{
				// $subj_ids = $_POST['subj_ids'];
				$stud_id = $_POST['stud_id'];
				$query = "INSERT INTO `subj_stud` (`stud_id`,`subj_id`) VALUES";
				for ($i=0; $i<sizeof($stud_id); $i++){
					$query .= "('".$stud_id[$i]."','".$_POST['subj_ids']."'),";
				}
				$query = rtrim($query,',');
				
				$query = DB::query($query)->execute();
				if ($query)
				{
					Session::set_flash('success', e('Successfully Added'));

					Response::redirect('admin/subject');
				}

				else
				{
					Session::set_flash('error', e('Could not save subject.'));
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$data = DB::query("SELECT * FROM `users` AS u INNER JOIN `subjects` AS s ON u.`id` = s.`teacher_id` WHERE s.`id` = '".$id."' ")->execute()->as_array();
	
		$existing_stud = DB::query("SELECT stud_id FROM subj_stud WHERE subj_id = '".$id."'")->execute()->as_array();

		$stud_list_query = "SELECT *, u.`id` AS uid FROM users AS u INNER JOIN courses AS c ON c.`id` = u.`course` WHERE u.`group` = 1 AND u.`id` NOT IN (";
		
		foreach ($existing_stud as $stud) {
			$stud_list_query .= "'".$stud['stud_id']."',";
		}
		$stud_list_query = rtrim($stud_list_query,",");
		$stud_list_query .= ")";
		
		$stud_list = DB::query($stud_list_query)->execute()->as_array();

		// var_dump($stud_list);
		// exit();

		$view->set_global('subject', $data);
		$view->set_global('students', $stud_list);
		$this->template->title = "Subjects";
		$this->template->content = $view;
	}

	public function action_create()
	{

		$view = View::forge('admin\subject/create');
		if (Input::method() == 'POST')
		{
			$val = Model_Subject::validate('create');

			if ($val->run())
			{

				$subject = Model_Subject::forge(array(
					'subj_desc' => Input::post('subj_desc'),
					'subj_code' => Input::post('subj_code'),
					'schedule' => Input::post('schedule'),
					'time' => Input::post('time'),
					'room' => Input::post('room'),
					'teacher_id' => Input::post('teacher_id'),
					'semester' => Input::post('semester'),
					'academicyear' => Input::post('academicyear'),
					'dateevaluation' => Input::post('dateevaluation')
				));

				$subject->save();

				$stud_id = $_POST['stud_id'];
				$query = "INSERT INTO `subj_stud` (`stud_id`,`subj_id`) VALUES";
				for ($i=0; $i<sizeof($stud_id); $i++){
					$query .= "('".$stud_id[$i]."','".$subject->id."'),";
				}
				$query = rtrim($query,',');

				$subject = DB::query($query)->execute();

				if ($subject)
				{
					Session::set_flash('success', e('Successfully Added'));

					Response::redirect('admin/subject');
				}

				else
				{
					Session::set_flash('error', e('Could not save subject.'));
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}
		
		$sql1 = DB::query("SELECT *, u.`id` AS `uid` FROM `users` AS u INNER JOIN `courses` AS c ON u.`course` = c.`id` WHERE u.`group` = '1' ")->execute()->as_array();
		$sql = DB::query("SELECT *,CONCAT(UPPER(LEFT(`fname`,1)),LOWER(SUBSTRING(`fname`,2)),' ',UPPER(LEFT(`mname`,1)),LOWER(SUBSTRING(`mname`,2)),' ',UPPER(LEFT(`lname`,1)),LOWER(SUBSTRING(`lname`,2))) AS name FROM `users` WHERE `group` = '50'")->execute()->as_array();

		$qu = "SELECT * FROM schoolyear";
		$que = DB::query($qu)->execute()->as_array();
		$view->set_global('schoolyear', $que);

		$view->set_global('users', $sql);
		$view->set_global('users1', $sql1);
		$this->template->title = "Subjects";
		$this->template->content = $view;

	}

	public function action_edit($id = null)
	{
		$view = View::forge('admin\subject/edit');
		$subject = Model_Subject::find($id);
		$val = Model_Subject::validate('edit');

		if ($val->run())
		{
			$subject->subj_code = Input::post('subj_code');
			$subject->subj_desc = Input::post('subj_desc');
			$subject->schedule = Input::post('schedule');
			$subject->time = Input::post('time');
			$subject->room = Input::post('room');
			$subject->teacher_id = Input::post('teacher_id');
			$subject->dateevaluation = Input::post('dateevaluation');

			if ($subject->save())
			{
				Session::set_flash('success', e('Updated subject #' . $id));

				Response::redirect('admin/subject');
			}

			else
			{
				Session::set_flash('error', e('Could not update subject #' . $id));
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$subject->subj_code = $val->validated('subj_code');
				$subject->subj_desc = $val->validated('subj_desc');
				$subject->schedule = $val->validated('schedule');
				$subject->time = $val->validated('time');
				$subject->room = $val->validated('room');
				$subject->teacher_id = $val->validated('teacher_id');
				$subject->dateevaluation = $val->validated('dateevaluation');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('subject', $subject, false);
		}

		$sqlQ = DB::query("SELECT * FROM `users` AS u INNER JOIN `subjects` AS s ON u.`id` = s.`teacher_id` WHERE u.`group` = '50' ")->execute()->as_array();
		$sql = DB::query("SELECT *, CONCAT(UPPER(LEFT(`fname`,1)),LOWER(SUBSTRING(`fname`,2)),' ',UPPER(LEFT(`mname`,1)),LOWER(SUBSTRING(`mname`,2)),' ',UPPER(LEFT(`lname`,1)),LOWER(SUBSTRING(`lname`,2))) AS name FROM `users` WHERE `group` = '50'")->execute()->as_array();
		
		$qu = "SELECT * FROM schoolyear";
		$que = DB::query($qu)->execute()->as_array();
		$view->set_global('schoolyear', $que);
		
		$view->set_global('users2', $sqlQ);
		$view->set_global('users',$sql);
		$this->template->title = "Subjects";
		$this->template->content = $view;

	}

	public function action_delete($id = null)
	{
		if ($subject = Model_Subject::find($id))
		{
			$subject->delete();

			Session::set_flash('success', e('Deleted subject #'.$id));
		}

		else
		{
			Session::set_flash('error', e('Could not delete subject #'.$id));
		}

		Response::redirect('admin/subject');

	}


}