<?php
class Controller_Student_Users extends Controller_Student
{

	public function action_index()
	{
		$data['users'] = Model_User::find('all');
		$this->template->title = "Student";
		$this->template->content = View::forge('student\users/index', $data);

	}

	public function action_view($id = null)
	{
		$view = View::forge('student\users/view');
		$q = "SELECT *, u.`id` AS uid FROM users AS u INNER JOIN courses AS c WHERE u.`course` = c.`id` AND u.`id` = '".$id."' ";
		$qw = DB::query($q)->execute()->as_array();
		$view->set_global('user', $qw);
		$this->template->title = "Student";
		$this->template->content = $view;

	}

	public function action_edit($id = null)
	{
		$user = Model_User::find($id);
		$val = Model_User::validate('edit');
		$view = View::forge('student\users/edit');
		if ($val->run())
		{
			$user->username = Input::post('username');
			$user->password = Auth::instance()->hash_password(Input::post('password'));
			$user->group = Input::post('group');
			$user->profile_fields = Input::post('profile_fields');
			$user->last_login = Input::post('last_login');
			$user->decrypted_pass = Input::post('password');

			if ($user->save())
			{
				Session::set_flash('success', e('Updated user #' . $id));

				Response::redirect('student/');
			}

			else
			{
				Session::set_flash('error', e('Successfullu updated'));
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$user->username = $val->validated('username');
				$user->password = $val->validated('password');
				$user->group = $val->validated('group');
				$user->profile_fields = $val->validated('profile_fields');
				$user->last_login = $val->validated('last_login');

					Session::set_flash('error', $val->error());
			}

			$this->template->set_global('user', $user, false);
		}
		$view->set_global('courses', Arr::assoc_to_keyval(Model_Course::find('all'), 'id', 'course_name'));
		$this->template->title = "Student";
		$this->template->content = $view;

	}


}