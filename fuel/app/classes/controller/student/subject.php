<?php
class Controller_Student_Subject extends Controller_Student 
{

	public function action_index()
	{
		$view = View::forge('student\subject/index');	
		
		$sqlQ = DB::query("SELECT *, ss.`status`, ss.`created_at` AS createdat, ss.`id` AS stud_subj_id, u.`id` AS uid, s.`id` AS sid FROM `subj_stud` AS ss INNER JOIN `subjects` AS s ON ss.`subj_id` = s.`id` LEFT JOIN `users` AS u ON u.`id` = s.`teacher_id` INNER JOIN `schoolyear` AS sy ON sy.`academicyear` = s.`academicyear` AND s.`semester` = sy.`scho_year`  WHERE ss.`stud_id` = ".$this->current_user->id." ")->execute()->as_array();
		$view->set_global('users2', $sqlQ);
		$this->template->title = "Subjects";
		$this->template->content = $view;
	}

	public function action_view($id = null)
	{
		$view = View::forge('student\subject/view');
		$data = DB::query("SELECT * FROM `users` AS u INNER JOIN `subjects` AS s ON u.`id` = s.`teacher_id` WHERE u.`group` = '50' ")->execute()->as_array();

		$view->set_global('subject', $data);

		$this->template->title = "Subject";
		$this->template->content = $view;
	}

	public function action_evaluate($stud_subj_id = null, $uid = null, $sid = null)
	{	
		$view = View::forge('student\subject/edit');
		
		$teacher_info = DB::query("SELECT * FROM `subj_stud` AS ss
			INNER JOIN `subjects` AS s ON s.`id` = ss.`subj_id` 
			INNER JOIN `users` AS u ON u.`id` = s.`teacher_id` 
			WHERE ss.`id` = ".$stud_subj_id." ")->execute()->as_array();

		$cat_name = DB::query("SELECT * FROM categories")->execute()->as_array();
		
		$questions = DB::query("SELECT *, q.`id` AS qid FROM questions AS q
			INNER JOIN categories AS c ON c.`id` = q.`category`
			INNER JOIN subjects AS s ON s.`id` = q.`subj_id`
			WHERE q.`subj_id` = ".$sid."  ORDER BY c.`id` ")->execute()->as_array();

			// var_dump($questions);
			// exit();
		$choices = DB::query("SELECT * FROM choices")->execute()->as_array();

		if (Input::method() == 'POST')
		{
			$status = "1";
			$stat = "UPDATE `subj_stud` SET `status` = '".$status."', `created_at` = NOW(), `comment` = '".$_POST['comments']."' WHERE `subj_id` = ".$stud_subj_id." AND `stud_id` = ".$this->current_user->id." ";
			$evaluation = "INSERT INTO `studentevaluations` (`question_id`,`subj_id`,`teacher_id`,`category_id`, `stud_id`, `answer`) VALUES";
			for($x = 0; $x < sizeof($questions); $x++){
				$evaluation .= "('".$questions[$x]['qid']."','".$stud_subj_id."','".$uid."','".$questions[$x]['category']."', '".$this->current_user->id."','".$_POST['choices'.$x]."' ),";
			}
			
			// var_dump($evaluation);
			// exit();
				
			$evaluation = rtrim($evaluation,',');
			 
			$eval = DB::query($evaluation)->execute();
			
			$STATS = DB::query($stat)->execute();

			if ($eval)
			{
				Session::set_flash('success', e('Successfully Evaluated'));
				Response::redirect('student/subject');
			}
			else
			{
				Session::set_flash('error', e('Could not Evaluate the teacher.'));
			}
		}

		$view->set_global('subject', $teacher_info);
	    $view->set_global('cat_name', $cat_name);
	    $view->set_global('question', $questions);
	    $view->set_global('choices', $choices);
		
		$this->template->title = "Subjects";
		$this->template->content = $view;

	}

	public function action_delete($id = null)
	{
		if ($subject = Model_Subject::find($id))
		{
			$subject->delete();

			Session::set_flash('success', e('Deleted subject #'.$id));
		}

		else
		{

			Session::set_flash('error', e('Could not delete subject #'.$id));
		}

		Response::redirect('student/subject');

	}

}