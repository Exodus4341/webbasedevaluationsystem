<?php

class Controller_Student extends Controller_Base
{
	public $template = 'student/template';

	public function before()
	{
		parent::before();

		if (Request::active()->controller !== 'Controller_Student' or ! in_array(Request::active()->action, array('login', 'logout')))
		{
			if (Auth::check())
			{
				if ( ! Auth::member(1))
				{
					Session::set_flash('error', e('You don\'t have access to the student panel'));
					Response::redirect('/');
				}
			}
			else
			{
				Response::redirect('student/login');
			}
		}
	}

	public function action_login()
	{
		// Already logged in
		Auth::check() and Response::redirect('student');

		$val = Validation::forge();

		if (Input::method() == 'POST')
		{
			$val->add('email', 'Email or Username')
			    ->add_rule('required');
			$val->add('password', 'Password')
			    ->add_rule('required');

			if ($val->run())
			{
				$auth = Auth::instance();

				// check the credentials. This assumes that you have the previous table created
				if (Auth::check() or $auth->login(Input::post('email'), Input::post('password')))
				{
					// credentials ok, go right in
					$current_user = Model_User::find_by_username(Auth::get_screen_name());
					Session::set_flash('success', e('Welcome, '.$current_user->username));
						if (Auth::member(1)) {
							Response::redirect('student');
						}
						if (Auth::member(50)) {
							Response::redirect('teacher');
						}
						if (Auth::member(100)) {
							Response::redirect('admin');
						}
				}
				else
				{
					$this->template->set_global('login_error', '<script>alert("Username or Email and Password Mismatch!")</script>');
				}
			}
		}
		return View::forge('student/login', array('val' => $val), false);
	}

	/**
	 * The logout action.
	 *
	 * @access  public
	 * @return  void
	 */
	public function action_logout()
	{
		Auth::logout();
		Response::redirect('student');
	}

	/**
	 * The index action.
	 *
	 * @access  public
	 * @return  void
	 */
	public function action_index()
	{
		$this->template->title = 'Dashboard';
		$this->template->content = View::forge('student/dashboard');
	}

}

/* End of file admin.php */
