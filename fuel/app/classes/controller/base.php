<?php

class Controller_Base extends Controller_Template {

	public function before()
	{
		parent::before();
		
		// Assign current_user to the instance so controllers can use it
		$this->current_user = Auth::check() ? Model_User::find_by_username(Auth::get_screen_name()) : null;
		
		// Set a global variable so views can use it
		View::set_global('current_user', $this->current_user);

		// course into add student global
		View::set_global('courses', Arr::assoc_to_keyval(Model_Course::find('all'), 'id', 'course_name'));

		// departmens into add teacher global
		View::set_global('departments', Arr::assoc_to_keyval(Model_Department::find('all'), 'id', 'dept_name'));
	}

}