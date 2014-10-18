<?php
class Controller_Admin_Users extends Controller_Admin 
{

	public function action_index()
	{
		$data['users'] = Model_User::find()->where('group', '=', '100')->get();
		$this->template->title = "Users";
		$this->template->content = View::forge('admin\users/index', $data);

	}
	
	public function action_add_users()
	{
		$view = View::forge('admin\users/add_users');
		$this->template->title = "Add Users";
		$this->template->content = $view;
	}

	public function action_teacher_subjects($id = null)
	{
		$view = View::forge('admin\users/teacher_subjects');
		$q = "SELECT * FROM subjects AS s INNER JOIN users AS u ON s.`teacher_id` = u.`id` INNER JOIN schoolyear AS sy ON sy.`scho_year` = s.`semester` AND sy.`academicyear` = s.`academicyear` WHERE s.`teacher_id` = '".$id."' ";
		$qw = DB::query($q)->execute()->as_array();
		$view->set_global('teacher_subjects', $qw);
		$this->template->title = "Teacher Subjects";
		$this->template->content = $view;
	}

	public function action_activate($id = null)
	{
		$status = 0;
		$status = DB::query("UPDATE `users` SET `status` = ".$status." WHERE `id` = ".$id." ")->execute();
		if (isset($status)) {
			Session::set_flash('success', e('Activated status'));
			Response::redirect('admin/users');
		}
		else
		{
			Session::set_flash('error', e('Could not update.'));
		}
		
	}

	public function action_status($id = null)
	{
		$status = 1;
		$status = DB::query("UPDATE `users` SET `status` = ".$status." WHERE `id` = ".$id." ")->execute();
		if (isset($status)) {
			Session::set_flash('success', e('Deactivated status'));
			Response::redirect('admin/users');
		}
		else
		{
			Session::set_flash('error', e('Could not update.'));
		}
		
	}	
	public function action_deactivated()
	{
		$view = View::forge('admin\users/deactivated');
		$deactivate = DB::query("SELECT *, u.`id` AS `uid` FROM  `users` AS u INNER JOIN  `courses` AS c ON u.`course` = c.`id` WHERE u.`group` =  '1' AND u.`status` = 1 ")->execute()->as_array();
		$view->set_global('deactivate', $deactivate);

		$deactivate_teacher = DB::query("SELECT *, u.`id` AS `uid` FROM  `users` AS u INNER JOIN  `departments` AS d ON u.`department` = d.`id` WHERE u.`group` =  '50' AND u.`status` = 1 ")->execute()->as_array();
		$view->set_global('deactivate_teacher', $deactivate_teacher);
		$this->template->title = "Users";
		$this->template->content = $view ;
	}

	public function action_student_list()
	{
		// $data['users'] = Model_User::find()->where('group', '=', '1')->get();
		$view = View::forge('admin\users/student_list');
		$data = DB::query("SELECT *, u.`id` AS `uid` FROM  `users` AS u INNER JOIN  `courses` AS c ON u.`course` = c.`id` WHERE u.`group` =  '1' AND u.`status` = 0 ")->execute()->as_array();
		$view->set_global('users', $data);
		$this->template->title = "Students";
		$this->template->content = $view ;

	}

	public function action_teacher_list()
	{
		$view = View::forge('admin\users/teacher_list');
		// $data['users'] = Model_User::find()->where('group', '=', '50')->get();
		$data = DB::query("SELECT *, u.`id` AS `uid` FROM  `users` AS u INNER JOIN  `departments` AS d ON u.`department` = d.`id` WHERE u.`group` =  '50' AND u.`status` = 0 ")->execute()->as_array();
		$view->set_global('users', $data);
		$this->template->title = "Teachers";
		$this->template->content = $view;

	}

	public function action_view($id = null)
	{
		$data['user'] = Model_User::find($id);
		$this->template->title = "User";
		$this->template->content = View::forge('admin\users/view', $data);

	}

	public function action_student()
	{
		$view = View::forge('admin\users/student');
		if (Input::method() == 'POST')
		{
			$val = Model_User::validate('student');

			if ($val->run())
			{
				$user = Model_User::forge(array(
					'username' => Input::post('username'),
					'pic_url' => Input::post('pic_url'),
					'password' => Auth::instance()->hash_password(Input::post('password')),
					'fname' => Input::post('fname'),
					'lname' => Input::post('lname'),
					'mname' => Input::post('mname'),
					'department' => Input::post('department'),
					'course' => Input::post('course'),
					'year' => Input::post('year'),
					'email' => Input::post('email'),
					'group' => Input::post('group'),
					'status' => 0,
					'contact_num' => Input::post('contact_num'),
					'profile_fields' => Input::post('profile_fields'),
					'last_login' => Input::post('last_login'),
					'decrypted_pass' => Input::post('password')
				));

				$config = array(
					'path' => DOCROOT.'uploads',
					'normalize' => true,
					'ext_whitelist' => array('png', 'jpg', 'bmp', 'jpeg')
					);
				Upload::process($config);

				if (Upload::is_valid()) {
					Upload::save();
					$value = Upload::get_files();
					foreach ($value as $files) {
						$user->pic_url = $value[0]['saved_as'];
					}

				if ($user and $user->save())
					{
						Session::set_flash('success', e('Added user # '.$user->fname.', '.$user->lname.', '.$user->mname.'.'));

						Response::redirect('admin/users/student_list');
					}

					else
					{
						Session::set_flash('error', e('Could not save user.'));
					}
				}//end upload file..

				
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$view->set_global('courses', Arr::assoc_to_keyval(Model_Course::find('all'), 'id', 'course_name'));
		$this->template->title = "Student";
		$this->template->content = $view;

	}

	public function action_teacher()
	{
		$view = View::forge('admin\users/teacher');
		if (Input::method() == 'POST')
		{
			$val = Model_User::validate('teacher');

			if ($val->run())
			{
				$user = Model_User::forge(array(
					'acadyear' => Input::post('acadyear'),
					'username' => Input::post('username'),
					'pic_url' => Input::post('pic_url'),
					'password' => Auth::instance()->hash_password(Input::post('password')),
					'fname' => Input::post('fname'),
					'lname' => Input::post('lname'),
					'mname' => Input::post('mname'),
					'department' => Input::post('id'),
					'course' => Input::post('course'),
					'year' => Input::post('year'),
					'email' => Input::post('email'),
					'group' => Input::post('group'),
					'status' => 0,
					'contact_num' => Input::post('contact_num'),
					'profile_fields' => Input::post('profile_fields'),
					'last_login' => Input::post('last_login'),
					'decrypted_pass' => Input::post('password')
				));

				$config = array(
					'path' => DOCROOT.'uploads',
					'normalize' => false,
					'ext_whitelist' => array('png', 'jpg', 'bmp', 'jpeg')
					);

				Upload::process($config);

				if (Upload::is_valid()) {
					Upload::save();
					$value = Upload::get_files();
					foreach ($value as $files) {
						$user->pic_url = $value[0]['saved_as'];
					}
					
					if ($user and $user->save())
					{
						Session::set_flash('success', e('Added user # '.$user->fname.', '.$user->lname.', '.$user->mname.'.'));

						Response::redirect('admin/users/teacher_list');
					}

					else
					{
						Session::set_flash('error', e('Could not save user.'));
					}
				}// end of upload pics...
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$view->set_global('departments', Arr::assoc_to_keyval(Model_Department::find('all'), 'id', 'dept_name'));
		$this->template->title = "Teacher";
		$this->template->content = $view;

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_User::validate('create');

			if ($val->run())
			{
				$user = Model_User::forge(array(
					'username' => Input::post('username'),
					'password' => Auth::instance()->hash_password(Input::post('password')),
					'fname' => Input::post('fname'),
					'lname' => Input::post('lname'),
					'mname' => Input::post('mname'),
					'department' => Input::post('department'),
					'course' => Input::post('course'),
					'year' => Input::post('year'),
					'email' => Input::post('email'),
					'group' => Input::post('group'),
					'profile_fields' => Input::post('profile_fields'),
					'last_login' => Input::post('last_login'),
					'decrypted_pass' => Input::post('password')
				));

				if ($user and $user->save())
				{
					Session::set_flash('success', e('Added user #'.$user->id.'.'));

					Response::redirect('admin/users');
				}

				else
				{
					Session::set_flash('error', e('Could not save user.'));
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Admin";
		$this->template->content = View::forge('admin\users/create');

	}

	public function action_edit($id = null)
	{
		$user = Model_User::find($id);
		$val = Model_User::validate('edit');
		$view = View::forge('admin\users/edit');
		if ($val->run())
		{
			$user->username = Input::post('username');
			$user->pic_url = Input::post('pic_url');
			$user->password = Auth::instance()->hash_password(Input::post('password'));
			$user->fname = Input::post('fname');
			$user->lname = Input::post('lname');
			$user->mname = Input::post('mname');
			$user->department = Input::post('id');
			$user->course = Input::post('course');
			$user->year = Input::post('year');
			$user->email = Input::post('email');
			$user->group = Input::post('group');
			$user->contact_num = Input::post('contact_num');
			$user->profile_fields = Input::post('profile_fields');
			$user->last_login = Input::post('last_login');
			$user->decrypted_pass = Input::post('password');

			$config = array(
					'path' => DOCROOT.'uploads',
					'normalize' => false,
					'ext_whitelist' => array('png', 'jpg', 'bmp', 'jpeg')
					);

				Upload::process($config);

				if (Upload::is_valid()) {
					Upload::save();
					$value = Upload::get_files();
					foreach ($value as $files) {
						$user->pic_url = $value[0]['saved_as'];
					}
					
					if ($user and $user->save())
					{
						Session::set_flash('success', e('Added user # '.$user->fname.', '.$user->lname.', '.$user->mname.'.'));

						Response::redirect('admin/users');
					}

					else
					{
						Session::set_flash('error', e('Could not save user.'));
					}
				}// end of upload pics...
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$user->username = $val->validated('username');
				$user->pic_url = $val->validated('pic_url');
				$user->password = $val->validated('password');
				$user->fname = $val->validated('fname');
				$user->lname = $val->validated('lname');
				$user->mname = $val->validated('mname');
				$user->department = $val->validated('department');
				$user->course = $val->validated('course');
				$user->year = $val->validated('year');
				$user->email = $val->validated('email');
				$user->group = $val->validated('group');
				$user->contact_num = $val->validated('contact_num');
				$user->profile_fields = $val->validated('profile_fields');
				$user->last_login = $val->validated('last_login');

					Session::set_flash('error', $val->error());
			}

			$this->template->set_global('user', $user, false);
		}
		$view->set_global('courses', Arr::assoc_to_keyval(Model_Course::find('all'), 'id', 'course_name'));
		$view->set_global('departments', Arr::assoc_to_keyval(Model_Department::find('all'), 'id', 'dept_name'));
		$this->template->title = "Users";
		$this->template->content = $view;

	}

	public function action_delete($id = null)
	{
		if ($user = Model_User::find($id))
		{
			$user->delete();

			Session::set_flash('success', e('Deleted user #'.$id));
		}

		else	
		{
			Session::set_flash('error', e('Could not delete user #'.$id));
		}

		Response::redirect('admin/users');

	}

}