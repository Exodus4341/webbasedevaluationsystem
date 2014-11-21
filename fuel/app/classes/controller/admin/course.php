<?php
class Controller_Admin_Course extends Controller_Admin 
{

	public function action_index()
	{
		$data['courses'] = Model_Course::find()->where('status', '=', '0')->get();
		$this->template->title = "Courses";
		$this->template->content = View::forge('admin\course/index', $data);
	}

	public function action_view($id = null)
	{
		$data['course'] = Model_Course::find($id);

		$this->template->title = "Course";
		$this->template->content = View::forge('admin\course/view', $data);
	}

	public function action_deactivated()
	{
		$data['deactivated'] = Model_Course::find()->where('status', '=', '1')->get();
		$this->template->title = "Courses";
		$this->template->content = View::forge('admin\course/deactivated', $data);
	}

	public function action_deactivate($id = null)
	{
		$status = 1;
		$q = "UPDATE courses SET `status` = '".$status."' WHERE `id` = '".$id."' ";
		$qw = DB::query($q)->execute();

		if (isset($qw)) {
			Session::set_flash('success', e('Successfully Deactivated!'));
			Response::redirect('admin/course');
		}
		else
		{
			Session::set_flash('error', e('Could not update.'));
		}
	}

	public function action_activate($id = null)
	{
		$status = 0;
		$q = "UPDATE courses SET `status` = '".$status."' WHERE `id` = '".$id."' ";
		$qw = DB::query($q)->execute();

		if (isset($qw)) {
			Session::set_flash('success', e('Successfully Activated!'));
			Response::redirect('admin/course');
		}
		else
		{
			Session::set_flash('error', e('Could not update.'));
		}
	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Course::validate('create');

			if ($val->run())
			{
				$status = 0;
				$course = Model_Course::forge(array(
					'course_name' => Input::post('course_name'),
					'status' => $status,
				));

				if ($course and $course->save())
				{
					Session::set_flash('success', e('Added course #'.$course->id.'.'));

					Response::redirect('admin/course');
				}

				else
				{
					Session::set_flash('error', e('Could not save course.'));
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}
		$this->template->title = "Courses";
		$this->template->content = View::forge('admin\course/create');

	}

	public function action_edit($id = null)
	{
		$course = Model_Course::find($id);
		$val = Model_Course::validate('edit');

		if ($val->run())
		{
			$course->course_name = Input::post('course_name');

			if ($course->save())
			{
				Session::set_flash('success', e('Updated course #' . $id));

				Response::redirect('admin/course');
			}

			else
			{
				Session::set_flash('error', e('Could not update course #' . $id));
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$course->course_name = $val->validated('course_name');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('course', $course, false);
		}

		$this->template->title = "Courses";
		$this->template->content = View::forge('admin\course/edit');

	}

	public function action_delete($id = null)
	{
		if ($course = Model_Course::find($id))
		{
			$course->delete();

			Session::set_flash('success', e('Deleted course #'.$id));
		}

		else
		{
			Session::set_flash('error', e('Could not delete course #'.$id));
		}

		Response::redirect('admin/course');

	}


}