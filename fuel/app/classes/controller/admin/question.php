<?php
class Controller_Admin_Question extends Controller_Admin 
{

	public function action_index()
	{
		$view = View::forge('admin\question/index');
		// $data['questions'] = Model_Question::find('all');
		$query = DB::query("SELECT * FROM `categories` AS c INNER JOIN `questions` AS q ON c.`id` = q.`category` GROUP BY q.`question` ")->execute()->as_array();
		$view->set_global('questions', $query);
		$this->template->title = "Question";
		$this->template->content = $view;

	}

	public function action_view($id = null)
	{
		$view = View::forge('admin\question/view');
		$q = "SELECT *, q.`id` AS qid FROM questions AS q INNER JOIN categories AS c WHERE q.`category` = c.`id` ";
		$qw = DB::query($q)->execute()->as_array();
		$view->set_global('questions', $qw);
		$this->template->title = "Question";
		$this->template->content = $view;

	}

	public function action_create()
	{
		$view = View::forge('admin\question/create');
		if (Input::method() == 'POST')
		{
			$val = Model_Question::validate('create');

			if ($val->run())
			{
				$subj_id = $_POST['subj_id'];
				$query = "INSERT INTO `questions` (`category`,`question`, `subj_id`) VALUES";
				for ($i=0; $i<sizeof($subj_id); $i++){
					$query .= "('".Input::post('category')."','".Input::post('question')."','".$subj_id[$i]."'),";
				}
				$query = rtrim($query,',');

				$question = DB::query($query)->execute();


				if ($question)
				{
					Session::set_flash('success', e('Successfully Added'));

					Response::redirect('admin/question');
				}

				else
				{
					Session::set_flash('error', e('Could not save question.'));
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}
		$subjects = DB::query("SELECT * FROM subjects AS c GROUP BY c.`subj_code` ")->execute()->as_array();
		$view->set_global('subjects', $subjects);
		// print_r($query);

		$view->set_global('category', Arr::assoc_to_keyval(Model_Category::find('all'), 'id', 'cat_name'));
		$this->template->title = "questions";
		$this->template->content = $view;

	}

	public function action_edit($id = null)
	{
		$question = Model_Question::find($id);
		$val = Model_Question::validate('edit');
		$view = View::forge('admin\question/edit');
		if ($val->run())
		{
			// $question->category = Input::post('category');
			// $question->question = Input::post('question');
			// $question->subj_id = Input::post('subj_id');
			$subj_id = $_POST['subj_id'];
			for ($i=0; $i < sizeof($subj_id); $i++) { 
				$query = "UPDATE `questions` SET `category` = '".Input::post('category')."', `question` = 
				'".Input::post('question')."', `subj_id` =  '".$subj_id[$i]."' WHERE `id` = '".$id."' ";
				$query = rtrim($query,',');

				$question = DB::query($query)->execute();

			}

			if ($question)
			{
				Session::set_flash('success', e('Successfully Updated'));

				Response::redirect('admin/question');
			}

			else
			{
				Session::set_flash('error', e('Could not update question #' . $id));
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$question->category = $val->validated('category');
				$question->question = $val->validated('question');
				$question->subj_id = $val->validated('subj_id');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('question', $question, false);
		}
		$subjects = DB::query("SELECT * FROM subjects AS c GROUP BY c.`subj_code` ")->execute()->as_array();
		$view->set_global('subjects', $subjects);
		// print_r($query);

		$view->set_global('category', Arr::assoc_to_keyval(Model_Category::find('all'), 'id', 'cat_name'));
		$this->template->title = "questions";
		$this->template->content = $view;

	}

	public function action_delete($id = null)
	{
		if ($question = Model_Question::find($id))
		{
			$question->delete();

			Session::set_flash('success', e('Deleted question #'.$id));
		}

		else
		{
			Session::set_flash('error', e('Could not delete question #'.$id));
		}

		Response::redirect('admin/question');

	}


}