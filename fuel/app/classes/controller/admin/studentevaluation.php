<?php
class Controller_Admin_Studentevaluation extends Controller_Admin 
{

	public function action_index()
	{
		$view = View::forge('admin\studentevaluation/index');
		$teacher = DB::query("SELECT *, u.`id` AS `uid` FROM  `users` AS u INNER JOIN `departments` AS d ON u.`department` = d.`id` INNER JOIN subjects AS s WHERE u.`group` =  '50' AND u.`status` = '0' AND s.`teacher_id` = u.`id` ")->execute()->as_array();
		$view->set_global('teacher', $teacher);
		$this->template->title = "Teachers List";
		$this->template->content = $view;

	}

	public function action_result_evaluation($teach_id = null, $subj_id = null)
	{
		$view = View::forge('admin\studentevaluation/result_evaluation');

		$sql1 = "SELECT id, cat_name, percentage FROM categories";
		$category = DB::query($sql1)->execute()->as_array();

		$q_query = "SELECT 
				  *,";

			for($x = 1; $x <= sizeof($category); $x++){
			$q_query.= "(SELECT 
				    COUNT(category) 
				  FROM
				    questions 
				  WHERE subj_id ='".$subj_id."'
				    AND category = '".$x."') AS category$x,";
			}

			$q_query = rtrim($q_query,',');
			$q_query.=" FROM
				  questions AS q 
				WHERE q.subj_id = '".$subj_id."'
				GROUP BY q.category";

		$questionsum = DB::query($q_query)->execute()->as_array();

		$sql = "SELECT 
				  cat_name,
				  stud_id,
				  teacher_id,
				  subj_id,
				  category_id,
				  answer, ";
				 
		for($x = 1; $x <= sizeof($category); $x++){
		$sql.= "(SELECT 
				    SUM(answer) 
				  FROM
				    studentevaluations 
					WHERE teacher_id = '".$teach_id."' 
				    AND subj_id = '".$subj_id."' 
				    AND category_id = '".$x."') AS category_sum$x,";
		}

		$sql = rtrim($sql,',');

		$sql.=" FROM
				    studentevaluations 
				  INNER JOIN categories AS ct 
				   ON ct.`id` = category_id 
				WHERE teacher_id = '".$teach_id."' 
				  AND subj_id = '".$subj_id."'
				  GROUP BY category_id";
		
		$result = DB::query($sql)->execute()->as_array();

		// var_dump($result);
		// exit();

		$q = "SELECT *, u.`id` AS uid FROM `users` AS u INNER JOIN `subjects` AS s ON u.`id` = s.`teacher_id` WHERE u.`id` = '".$teach_id."' AND s.`id` = '".$subj_id."'";
		$que = DB::query($q)->execute()->as_array();
		$view->set_global('teachers', $que);

		$comm = "SELECT * FROM subj_stud AS ss INNER JOIN users AS u ON ss.`subj_id` = '".$subj_id."' WHERE u.`id` = '".$teach_id."' ";
		$comment = DB::query($comm)->execute()->as_array();
		$view->set_global('comments', $comment);

		$q = "SELECT * FROM ranges";
    	$qw = DB::query($q)->execute()->as_array();
    	$view->set_global('ranges', $qw);
		// var_dump($result);
		$this->template->title = "Evaluaton results";

		$view->set_global('evaluated', $result);
		$view->set_global('category', $category);
		$view->set_global('questionsum', $questionsum);

		$this->template->content = $view;
	}

	public function action_reports_per_subject($teach_id = null, $subj_id = null)
	{
		$view = View::forge('admin\achives/report_per_subject');
		$sql1 = "SELECT id, cat_name, percentage FROM categories";
		$category = DB::query($sql1)->execute()->as_array();

		$q_query = "SELECT 
				  *,";

			for($x = 1; $x <= sizeof($category); $x++){
			$q_query.= "(SELECT 
				    COUNT(category) 
				  FROM
				    questions 
				  WHERE subj_id ='".$subj_id."'
				    AND category = '".$x."') AS category$x,";
			}

			$q_query = rtrim($q_query,',');
			$q_query.=" FROM
				  questions AS q 
				WHERE q.subj_id = '".$subj_id."'
				GROUP BY q.category";

		$questionsum = DB::query($q_query)->execute()->as_array();

		$sql = "SELECT 
				  cat_name,
				  stud_id,
				  teacher_id,
				  subj_id,
				  category_id,
				  answer, ";
				 
		for($x = 1; $x <= sizeof($category); $x++){
		$sql.= "(SELECT 
				    SUM(answer) 
				  FROM
				    studentevaluations 
					WHERE teacher_id = '".$teach_id."' 
				    AND subj_id = '".$subj_id."' 
				    AND category_id = '".$x."') AS category_sum$x,";
		}

		$sql = rtrim($sql,',');

		$sql.=" FROM
				    studentevaluations 
				  INNER JOIN categories AS ct 
				   ON ct.`id` = category_id 
				WHERE teacher_id = '".$teach_id."' 
				  AND subj_id = '".$subj_id."'
				  GROUP BY category_id";
		
		$result = DB::query($sql)->execute()->as_array();

		// var_dump($result);
		// exit();

		$q = "SELECT *, u.`id` AS uid FROM `users` AS u INNER JOIN `subjects` AS s ON u.`id` = s.`teacher_id` WHERE u.`id` = '".$teach_id."' AND s.`id` = '".$subj_id."'";
		$que = DB::query($q)->execute()->as_array();
		$view->set_global('teachers', $que);

		$comm = "SELECT * FROM subj_stud AS ss INNER JOIN users AS u ON ss.`subj_id` = '".$subj_id."' WHERE u.`id` = '".$teach_id."' ";
		$comment = DB::query($comm)->execute()->as_array();
		$view->set_global('comments', $comment);

		$q = "SELECT * FROM ranges";
    	$qw = DB::query($q)->execute()->as_array();
    	$view->set_global('ranges', $qw);
		// var_dump($result);
		$this->template->title = "Evaluaton results";

		$view->set_global('evaluated', $result);
		$view->set_global('category', $category);
		$view->set_global('questionsum', $questionsum);

		$this->template->content = $view;

		return $view;
	}


	public function action_view_subjects($id = null)
	{
		$view = View::forge('admin\studentevaluation/view_subjects');

		$subjects = DB::query("SELECT *, s.`id` AS sid FROM `subjects` AS s INNER JOIN `schoolyear` AS sy ON sy.`academicyear` = s.`academicyear` AND s.`semester` = sy.`scho_year` WHERE s.`teacher_id` = ".$id." GROUP BY s.`subj_code` ")->execute()->as_array();

		$sql1 = "SELECT id, cat_name, percentage FROM categories";
		$category = DB::query($sql1)->execute()->as_array();

		$u = "SELECT * FROM `users` AS u INNER JOIN `departments` AS d ON u.`department` = d.`id` WHERE u.`id` = '".$id."' ";
		$user = DB::query($u)->execute()->as_array();
		$view->set_global('teacher_name', $user);

		$q_query = "SELECT 
				  *,";
		  
		for($x = 1; $x <= sizeof($category); $x++){
			$q_query.= "(SELECT 
				    COUNT(category) 
				  FROM
				    questions 
				  WHERE subj_id = s.`id`
				    AND category = '".$x."') AS category$x,";
			}

			$q_query = rtrim($q_query,',');
			$q_query.=" FROM
				  questions AS q 
				INNER JOIN subjects AS s 
				    ON s.`id` = q.`subj_id` 
				WHERE q.subj_id = s.`id` 
				AND s.`teacher_id` = '".$id."'
				GROUP BY q.subj_id ";

		$questionsum = DB::query($q_query)->execute()->as_array();

		$sql = "SELECT DISTINCT 
				  s.`subj_code`,
				  s.`subj_desc`,
				  s.`room`,
				  s.`time`,
				  s.`schedule`,
				  s.`dateevaluation`,
				  se.stud_id,
				  se.teacher_id,
				  se.subj_id,
				  se.category_id, ";
		
		for($x = 1; $x <= sizeof($category); $x++){
		$sql.= "(SELECT 
				    SUM(answer) 
				  FROM
				    studentevaluations
					WHERE teacher_id = '".$id."' 
				    AND subj_id = s.id
				    AND category_id = '".$x."') AS category_sum$x,";
		}

		$sql = rtrim($sql,',');

		$sql.=" FROM
				  studentevaluations AS se 
				    INNER JOIN categories AS ct 
				    ON ct.`id` = category_id  
				  INNER JOIN subjects AS s 
				    ON s.`id` = se.`subj_id` INNER JOIN schoolyear AS sy ON s.`academicyear` = sy.`academicyear` AND s.`semester` = sy.`scho_year`
				WHERE se.teacher_id ='".$id."' 
				  AND se.subj_id = s.id 
				  GROUP BY se.`subj_id`";

		$evaluated = DB::query($sql)->execute()->as_array();

		$ranges = DB::query("SELECT * FROM ranges")->execute()->as_array();
	
		// var_dump($ranges);
		// exit();

		$view->set_global('evaluated', $evaluated);
		$view->set_global('subjects', $subjects);
		$view->set_global('category', $category);
		$view->set_global('questionsum', $questionsum);
		$view->set_global('ranges', $ranges);
		$this->template->title = "Subjects";
		$this->template->content = $view;
	}


	public function action_print_summary($id = null)
	{
		$view = View::forge('admin/achives/report');

		$subjects = DB::query("SELECT *, s.`id` AS sid FROM `subjects` AS s INNER JOIN `schoolyear` AS sy ON sy.`academicyear` = s.`academicyear` AND s.`semester` = sy.`scho_year` WHERE s.`teacher_id` = ".$id." GROUP BY s.`subj_code` ")->execute()->as_array();

		$sql1 = "SELECT id, cat_name, percentage FROM categories";
		$category = DB::query($sql1)->execute()->as_array();

		$u = "SELECT * FROM `users` AS u INNER JOIN `departments` AS d ON u.`department` = d.`id` WHERE u.`id` = '".$id."' ";
		$user = DB::query($u)->execute()->as_array();
		$view->set_global('teacher_name', $user);

		$q_query = "SELECT 
				  *,";
		  
		for($x = 1; $x <= sizeof($category); $x++){
			$q_query.= "(SELECT 
				    COUNT(category) 
				  FROM
				    questions 
				  WHERE subj_id = s.`id`
				    AND category = '".$x."') AS category$x,";
			}

			$q_query = rtrim($q_query,',');
			$q_query.=" FROM
				  questions AS q 
				INNER JOIN subjects AS s 
				    ON s.`id` = q.`subj_id` 
				WHERE q.subj_id = s.`id` 
				AND s.`teacher_id` = '".$id."'
				GROUP BY q.subj_id ";

		$questionsum = DB::query($q_query)->execute()->as_array();

		$sql = "SELECT DISTINCT 
				  s.`subj_code`,
				  s.`subj_desc`,
				  s.`room`,
				  s.`time`,
				  s.`schedule`,
				  s.`dateevaluation`,
				  se.stud_id,
				  se.teacher_id,
				  se.subj_id,
				  se.category_id, ";
		
		for($x = 1; $x <= sizeof($category); $x++){
		$sql.= "(SELECT 
				    SUM(answer) 
				  FROM
				    studentevaluations
					WHERE teacher_id = '".$id."' 
				    AND subj_id = s.id
				    AND category_id = '".$x."') AS category_sum$x,";
		}

		$sql = rtrim($sql,',');

		$sql.=" FROM
				  studentevaluations AS se 
				    INNER JOIN categories AS ct 
				    ON ct.`id` = category_id  
				  INNER JOIN subjects AS s 
				    ON s.`id` = se.`subj_id` INNER JOIN schoolyear AS sy ON s.`academicyear` = sy.`academicyear` AND s.`semester` = sy.`scho_year`
				WHERE se.teacher_id ='".$id."' 
				  AND se.subj_id = s.id 
				  GROUP BY se.`subj_id`";

		$evaluated = DB::query($sql)->execute()->as_array();

		$ranges = DB::query("SELECT * FROM ranges")->execute()->as_array();
	
		// var_dump($evaluated);
		// exit();

		$schoolyear = DB::query("SELECT * FROM schoolyear")->execute()->as_array();
		$view->set_global('schoolyear', $schoolyear);

		$view->set_global('evaluated', $evaluated);
		$view->set_global('subjects', $subjects);
		$view->set_global('category', $category);
		$view->set_global('questionsum', $questionsum);
		$view->set_global('ranges', $ranges);

		return $view;
	}



	public function action_view($id = null)
	{
		$data['studentevaluations'] = Model_Studentevaluation::find($id);

		$this->template->title = "studentevaluations";
		$this->template->content = View::forge('admin\studentevaluation/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Studentevaluation::validate('create');

			if ($val->run())
			{
				$studentevaluations = Model_Studentevaluation::forge(array(
					'question' => Input::post('question'),
					'subj_id' => Input::post('subj_id'),
					'teacher_id' => Input::post('teacher_id'),
				));

				if ($studentevaluations and $studentevaluations->save())
				{
					Session::set_flash('success', e('Added studentevaluations #'.$studentevaluations->id.'.'));

					Response::redirect('admin/studentevaluation');
				}

				else
				{
					Session::set_flash('error', e('Could not save studentevaluations.'));
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "studentevaluations";
		$this->template->content = View::forge('admin\studentevaluation/create');

	}

	public function action_edit($id = null)
	{
		$studentevaluations = Model_Studentevaluation::find($id);
		$val = Model_Studentevaluation::validate('edit');

		if ($val->run())
		{
			$studentevaluations->question = Input::post('question');
			$studentevaluations->subj_id = Input::post('subj_id');
			$studentevaluations->teacher_id = Input::post('teacher_id');

			if ($studentevaluations->save())
			{
				Session::set_flash('success', e('Updated studentevaluations #' . $id));

				Response::redirect('admin/studentevaluation');
			}

			else
			{
				Session::set_flash('error', e('Could not update studentevaluations #' . $id));
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$studentevaluations->question = $val->validated('question');
				$studentevaluations->subj_id = $val->validated('subj_id');
				$studentevaluations->teacher_id = $val->validated('teacher_id');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('studentevaluations', $studentevaluations, false);
		}

		$this->template->title = "studentevaluations";
		$this->template->content = View::forge('admin\studentevaluation/edit');

	}

	public function action_delete($id = null)
	{
		if ($studentevaluations = Model_Studentevaluation::find($id))
		{
			$studentevaluations->delete();

			Session::set_flash('success', e('Deleted studentevaluations #'.$id));
		}

		else
		{
			Session::set_flash('error', e('Could not delete studentevaluations #'.$id));
		}

		Response::redirect('admin/studentevaluation');

	}

	public function action_evaluationresults(){
		$sql = "SELECT 
				  ss.`stud_id`,
				  ss.`subj_id`,
				  se.`subj_id`,
				  se.`category_id`,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations 
				  WHERE category_id = ct.`id` 
				    AND answer = '1') AS choice_fair 
				FROM
				  subj_stud AS ss 
				  INNER JOIN studentevaluations AS se 
				    ON se.`subj_id` = ss.`subj_id` 
				  INNER JOIN categories AS ct 
				    ON ct.`id` = se.`category_id` 
				  INNER JOIN choices AS ch 
				    ON ch.`id` = se.`answer` 
				WHERE ss.stud_id = '34' 
				  OR ss.`stud_id` = '33' 
				  AND se.`category_id` = ct.`id` 
				GROUP BY ss.`stud_id`";
			
		$result = DB::query($sql)->execute()->as_array();

		var_dump($result);

		$this->template->title = "Evaluaton results";
		$this->template->content = View::forge('admin\studentevaluation/results');
	}


}