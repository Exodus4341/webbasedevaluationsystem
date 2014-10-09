<?php
class Controller_Teacher_Results extends Controller_Teacher 
{

	public function action_index()
	{
		$data['results'] = Model_Studentevaluation::find('all');
		$this->template->title = "Results";
		$this->template->content = View::forge('teacher\results/index', $data);

	}

	public function action_view($id = null)
	{
		$data['result'] = Model_Studentevaluation::find($id);

		$this->template->title = "Result";
		$this->template->content = View::forge('teacher\results/view', $data);

	}
	
	public function action_delete($id = null)
	{
		if ($result = Model_Studentevaluation::find($id))
		{
			$result->delete();

			Session::set_flash('success', e('Deleted result #'.$id));
		}

		else
		{
			Session::set_flash('error', e('Could not delete result #'.$id));
		}

		Response::redirect('teacher/results');

	}


}