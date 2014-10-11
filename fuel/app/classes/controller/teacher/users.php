<?php
class Controller_Teacher_Users extends Controller_Teacher 
{

	public function action_index()
	{
		$data['users'] = Model_User::find('all');
		$this->template->title = "Users";
		$this->template->content = View::forge('teacher\users/index', $data);

	}

	public function action_view($id = null)
	{
		$data['user'] = Model_User::find($id);
		$this->template->title = "User";
		$this->template->content = View::forge('teacher\users/view', $data);

	}

	public function action_edit($id = null)
	{
		$user = Model_User::find($id);
		$val = Model_User::validate('edit');
		$view = View::forge('teacher\users/edit');
		if ($val->run())
		{
			$user->username = Input::post('username');
			$user->password = Auth::instance()->hash_password(Input::post('password'));
			// $user->fname = Input::post('fname');
			// $user->lname = Input::post('lname');
			// $user->mname = Input::post('mname');
			// $user->department = Input::post('id');
			// $user->course = Input::post('course');
			// $user->year = Input::post('year');
			// $user->email = Input::post('email');
			$user->group = Input::post('group');
			$user->profile_fields = Input::post('profile_fields');
			$user->last_login = Input::post('last_login');
			$user->decrypted_pass = Input::post('password');

			if ($user->save())
			{
				Session::set_flash('success', e('Successfully updated'));

				Response::redirect('teacher/');
			}

			else
			{
				Session::set_flash('error', e('Could not update user #' . $id));
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$user->username = $val->validated('username');
				$user->password = $val->validated('password');
				// $user->fname = $val->validated('fname');
				// $user->lname = $val->validated('lname');
				// $user->mname = $val->validated('mname');
				// $user->department = $val->validated('department');
				// $user->course = $val->validated('course');
				// $user->year = $val->validated('year');
				// $user->email = $val->validated('email');
				$user->group = $val->validated('group');
				$user->profile_fields = $val->validated('profile_fields');
				$user->last_login = $val->validated('last_login');

					Session::set_flash('error', $val->error());
			}

			$this->template->set_global('user', $user, false);
		}
		$view->set_global('departments', Arr::assoc_to_keyval(Model_Department::find('all'), 'id', 'dept_name'));
		$this->template->title = "Users";
		$this->template->content = $view;

	}

}