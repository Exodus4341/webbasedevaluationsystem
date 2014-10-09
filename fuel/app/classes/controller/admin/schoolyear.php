<?php 
class Controller_Admin_Schoolyear extends Controller_Admin 
{
	public function action_index()
	{
		$view =  View::forge('admin\schoolyear/index');
		$query = DB::query("SELECT * FROM schoolyear ")->execute()->as_array();
		$view->set_global('index', $query);
		$this->template->title = "School Year";
		$this->template->content = $view;
	}


	public function action_id()
	{
		$view = View::forge('admin\schoolyear/schoolyear');
		$get_id = DB::query("SELECT * FROM schoolyear")->execute()->as_array();
		$view->set_global('get_id', $get_id);
		$this->template->title = "Get Id";
		$this->template->content = $view;
	}

	function action_edit($id = null)
	{
		$view =  View::forge('admin\schoolyear/edit');
		$val = Model_schoolyear::validate('edit');
		if ($val->run()) {
			$scho_year = Input::post('scho_year');
			$academicyear = Input::post('academicyear');
			$schoolyear = DB::query("UPDATE schoolyear SET scho_year = '".$scho_year."', academicyear = '".$academicyear."' WHERE id = '".$id."' ")->execute();
			if (isset($schoolyear)) {
				Session::set_flash('success', e('School Year is Successfully Updated!'));
				Response::redirect('admin/schoolyear');
			}
			else
			{
				Session::set_flash('error', e('Could Not Update the Schol Year'));
				Response::redirect('admin/schoolyear');
			}
		}

		$view->set_global('years', Arr::assoc_to_keyval(Model_Academicyear::find('all'), 'year', 'year'));
		$this->template->title = "Update Academic Year";
		$this->template->content = $view;
	}

}
 ?>
