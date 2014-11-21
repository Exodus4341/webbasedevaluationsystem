<?php
class Controller_Admin_Question extends Controller_Admin 
{

	public function action_index()
	{
		$view = View::forge('admin\question/index');
		$query = DB::query("SELECT *, q.`id` AS qid FROM `categories` AS c INNER JOIN `questions` AS q ON c.`id` = q.`category` WHERE q.`status` = '0' AND c.`status` = '0' GROUP BY q.`question` ")->execute()->as_array();
		$view->set_global('questions', $query);
		$this->template->title = "Question";
		$this->template->content = $view;

	}

	public function action_deactivated()
	{
		$view = View::forge('admin\question/deactivated');
		$query = DB::query("SELECT *, q.`id` AS qid FROM `categories` AS c INNER JOIN `questions` AS q ON c.`id` = q.`category` WHERE q.`status` = '1' GROUP BY q.`question` ")->execute()->as_array();
		$view->set_global('questions', $query);
		$this->template->title = "Question";
		$this->template->content = $view;

	}

	public function action_deactivateQuestions($c_id = null, $orderNo = null)
	{
		$status = 1;
		for ($i=0; $i < sizeof($c_id); $i++) { 
			$quest = "UPDATE `questions` SET `status` = '".$status."' WHERE `category` = '".$c_id."' AND `order_no` = '".$orderNo."' ";
			$quest = rtrim($quest,',');
			$update = DB::query($quest)->execute();
		}

		if (isset($update)) {
			Session::set_flash('success', e('Successfully Deactivated!'));
			Response::redirect('admin/question');
		}
		else
		{
			Session::set_flash('error', e('Could not update.'));
		}
	}

	public function action_activateQuestions($c_id = null, $orderNo = null)
	{
		$status = 0;
		for ($i=0; $i < sizeof($c_id); $i++) { 
			$quest = "UPDATE `questions` SET `status` = '".$status."' WHERE `category` = '".$c_id."' AND `order_no` = '".$orderNo."' ";
			$quest = rtrim($quest,',');
			$update = DB::query($quest)->execute();
		}

		if (isset($update)) {
			Session::set_flash('success', e('Successfully Activated!'));
			Response::redirect('admin/question');
		}
		else
		{
			Session::set_flash('error', e('Could not update.'));
		}
	}

	public function action_view($id = null)
	{
		$view = View::forge('admin\question/view');
		$q = "SELECT *, q.`id` AS qid FROM questions AS q INNER JOIN categories AS c WHERE q.`category` = c.`id` AND q.`id` = '".$id."' ";
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
				$status = 0;
				$query = "INSERT INTO `questions` (`category`, `order_no`, `question`, `subj_id`, `status`) VALUES";
				for ($i=0; $i<sizeof($subj_id); $i++){
					$query .= "('".Input::post('category')."', '".Input::post('order_no')."', '".Input::post('question')."', '".$subj_id[$i]."', '".$status."'),";
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
		$subjects = DB::query("SELECT *, s.`id` AS sid FROM subjects AS s INNER JOIN `schoolyear` AS sy ON sy.`academicyear` = s.`academicyear` AND s.`semester` = sy.`scho_year` GROUP BY s.`subj_code` ")->execute()->as_array();
		$view->set_global('subjects', $subjects);
		// print_r($query);

		$view->set_global('category', Arr::assoc_to_keyval(Model_Category::find()->where('status', '=', '0')->get(), 'id', 'cat_name'));
		$this->template->title = "questions";
		$this->template->content = $view;

	}

	public function action_add_question_subject($id = null, $c_id = null, $orderNo = null)
	{
		$question = Model_Question::find($id);
		$val = Model_Question::validate('add_question_subject');
		$view = View::forge('admin\question/add_question_subject');
		if ($val->run())
		{
			$subj_id = $_POST['subj_id'];
			$status = 0;
			$query = "INSERT INTO `questions` (`category`, `order_no`, `question`, `subj_id`, `status`) VALUES";
			for ($i=0; $i<sizeof($subj_id); $i++){
				$query .= "('".Input::post('category')."', '".Input::post('order_no')."', '".Input::post('question')."','".$subj_id[$i]."', '".$status."'),";
			}
				$query = rtrim($query,',');
				$question = DB::query($query)->execute();

			if ($question)
			{
				Session::set_flash('success', e('Successfully Added!'));

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
		
		$existing_subject = DB::query("SELECT subj_id, category, order_no FROM questions WHERE category = '".$c_id."' AND order_no = '".$orderNo."' ")->execute()->as_array();
		$subjects = "SELECT *, s.`id` AS `sid` FROM subjects AS s INNER JOIN `schoolyear` AS sy ON sy.`academicyear` = s.`academicyear` AND s.`semester` = sy.`scho_year` WHERE s.`id` NOT IN (";
			foreach ($existing_subject as $exist_subj) {
				$subjects .= "'".$exist_subj['subj_id']."',";
			}	
		
		$subjects = rtrim($subjects, ",");
		$subjects .= " )";
		$subjectss = DB::query($subjects)->execute()->as_array();
		// var_dump($subjects);
		// exit();
		//$subjects = DB::query("SELECT *, s.`id` AS sid FROM subjects AS s INNER JOIN questions AS q ON q.`subj_id` INNER JOIN `schoolyear` AS sy ON sy.`academicyear` = s.`academicyear` AND s.`semester` = sy.`scho_year` GROUP BY s.`subj_code` ")->execute()->as_array();
		$view->set_global('subjects', $subjectss);
		// print_r($query);

		$view->set_global('category', Arr::assoc_to_keyval(Model_Category::find('all'), 'id', 'cat_name'));
		$this->template->title = "Add Question Subject";
		$this->template->content = $view;
	}

	public function action_edit($id = null, $c_id = null, $order_no = null)
	{
		$question = Model_Question::find($id);
		$val = Model_Question::validate('edit');
		$view = View::forge('admin\question/edit');
		if ($val->run())
		{
			// $question->category = Input::post('category');
			// $question->question = Input::post('question');
			// $question->subj_id = Input::post('subj_id');

			$or_no = $_POST['order_no'];
			// $subj_id = $_POST['subj_id'];
			for ($i=0; $i < sizeof($or_no); $i++) { 
				$query = "UPDATE `questions` SET `category` = '".Input::post('category')."', `order_no` = '".$or_no[$i]."', 
				`question` = '".Input::post('question')."' WHERE `category` = '".$c_id."' AND `order_no` = '".$order_no."' ";
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