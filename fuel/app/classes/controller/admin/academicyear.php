<?php
class Controller_Admin_Academicyear extends Controller_Admin 
{

	public function action_index()
	{
		$data['years'] = Model_Academicyear::find('all');
		$this->template->title = "Academic Year";
		$this->template->content = View::forge('admin\academicyear/index', $data);

	}

	public function action_view($id = null)
	{
		$data['years'] = Model_Academicyear::find($id);
		$this->template->title = "Academic Year";
		$this->template->content = View::forge('admin\academicyear/view', $data);
	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Academicyear::validate('create');

			if ($val->run())
			{
				$year = Model_Academicyear::forge(array(
					'year' => Input::post('year'),
				));

				if ($year and $year->save())
				{
					Session::set_flash('success', e('Added year #'.$year->id.'.'));

					Response::redirect('admin/academicyear');
				}

				else
				{
					Session::set_flash('error', e('Could not save year.'));
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}
		$this->template->title = "Year";
		$this->template->content = View::forge('admin\academicyear/create');

	}

	public function action_edit($id = null)
	{
		$year = Model_Academicyear::find($id);
		$val = Model_Academicyear::validate('edit');

		if ($val->run())
		{
			$year->year = Input::post('year');

			if ($year->save())
			{
				Session::set_flash('success', e('Updated year #' . $id));

				Response::redirect('admin/academicyear');
			}

			else
			{
				Session::set_flash('error', e('Could not update year #' . $id));
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$year->year = $val->validated('year');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('year', $year, false);
		}

		$this->template->title = "Academic Year";
		$this->template->content = View::forge('admin\academicyear/edit');

	}

	public function action_delete($id = null)
	{
		if ($year = Model_Academicyear::find($id))
		{
			$year->delete();

			Session::set_flash('success', e('Deleted year #'.$id));
		}

		else
		{
			Session::set_flash('error', e('Could not delete year #'.$id));
		}

		Response::redirect('admin/academicyear');

	}


}