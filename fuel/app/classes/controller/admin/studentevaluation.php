<?php
class Controller_Admin_Studentevaluation extends Controller_Admin 
{

	public function action_index()
	{
		$view = View::forge('admin\studentevaluation/index');
		$teacher = DB::query("SELECT *, u.`id` AS `uid` FROM  `users` AS u INNER JOIN `departments` AS d ON u.`department` = d.`id` WHERE u.`group` =  '50' AND u.`status` = '0'  ")->execute()->as_array();
		$view->set_global('teacher', $teacher);
		$this->template->title = "Teachers List";
		$this->template->content = $view;

	}

	public function action_result_evaluation($teach_id = null, $subj_id = null)
	{
		$view = View::forge('admin\studentevaluation/result_evaluation');

		$sql1 = "SELECT id, cat_name, percentage FROM categories";
		$category = DB::query($sql1)->execute()->as_array();

		// $stud_list = "SELECT u.`id` AS uid FROM subj_stud AS ss 
		// 			  INNER JOIN subjects AS s ON ss.`subj_id` = s.`id`
		// 			  INNER JOIN users AS u ON u.`id` = ss.`stud_id`
		// 			  WHERE ss.`subj_id` = '2' ";

		// $stud_l = DB::query($stud_list)->execute()->as_array();


		$sql = "SELECT 
				  stud_id,
				  teacher_id,
				  subj_id,
				  category_id,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations 
				  WHERE category_id = ct.`id` 
				    AND answer = '1'  AND teacher_id ='".$teach_id."' AND subj_id = '".$subj_id."') AS choice_poor,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations 
				  WHERE category_id = ct.`id` 
				    AND answer = '2'  AND teacher_id ='".$teach_id."' AND subj_id = '".$subj_id."') AS choice_fair,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations 
				  WHERE category_id = ct.`id` 
				    AND answer = '3'  AND teacher_id ='".$teach_id."' AND subj_id = '".$subj_id."') AS choice_good,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations 
				  WHERE category_id = ct.`id` 
				    AND answer = '4' AND teacher_id ='".$teach_id."' AND subj_id = '".$subj_id."') AS choice_very_good,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations 
				  WHERE category_id = ct.`id` 
				    AND answer = '5'  AND teacher_id ='".$teach_id."' AND subj_id = '".$subj_id."') AS choice_excellent
				FROM
				 studentevaluations AS se
				  INNER JOIN categories AS ct 
				   ON ct.`id` = category_id 
				  INNER JOIN choices AS ch 
				    ON ch.`id` = answer
				WHERE category_id IN (";
		
		for($x = 1; $x <= sizeof($category); $x++){
			$sql.="'$x',";
		}
		$sql = rtrim($sql,',');


		$sql.=") AND teacher_id ='".$teach_id."' AND subj_id = '".$subj_id."' GROUP BY category_id";
		//  AND subj_id IN(";
			
		// for($a = 0; $a < sizeof($stud_l); $a++){
		// 	$sql.="'".$stud_l[$a]['uid']."' ";
		// }
		// $sql.=") GROUP BY category_id";

		$result = DB::query($sql)->execute()->as_array();
		// var_dump($result);
		$q = "SELECT * FROM `users` AS u INNER JOIN `subjects` AS s ON u.`id` = s.`teacher_id` WHERE u.`id` = '".$teach_id."'";
		$que = DB::query($q)->execute()->as_array();
		$view->set_global('teachers', $que);

		$comm = "SELECT * FROM subj_stud AS ss INNER JOIN users AS u ON ss.`subj_id` = '".$subj_id."' WHERE u.`id` = '".$teach_id."' ";
		$comment = DB::query($comm)->execute()->as_array();
		$view->set_global('comments', $comment);
		// var_dump($result);
		$this->template->title = "Evaluaton results";
		$view->set_global('evaluated', $result);
		$view->set_global('category', $category);
		$this->template->content = $view;
	}
	public function action_view_subjects($id = null)
	{
		$view = View::forge('admin\studentevaluation/view_subjects');
		// $date = date("Y");
		// INNER JOIN `schoolyear` AS sy 
		// sy.`scho_year` + '".$date."' = s.`semester` + s.`created_at` AND
		$query = DB::query("SELECT *, s.`id` AS sid FROM `subjects` AS s INNER JOIN `schoolyear` AS sy ON sy.`academicyear` = s.`academicyear` AND s.`semester` = sy.`scho_year` WHERE s.`teacher_id` = ".$id." GROUP BY s.`subj_code` ")->execute()->as_array();

		$sql1 = "SELECT id, cat_name, percentage FROM categories";
		$category = DB::query($sql1)->execute()->as_array();

		$u = "SELECT * FROM `users` AS u INNER JOIN `departments` AS d ON u.`department` = d.`id` WHERE u.`id` = '".$id."' ";
		$user = DB::query($u)->execute()->as_array();
		$view->set_global('teacher_name', $user);

		  
		$sql = "SELECT
				  stud_id,
				  subj_id,
				  category_id,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations AS se
				  WHERE category_id = ct.`id` 
				    AND answer = '1' AND se.`teacher_id` = '".$id."' AND subj_id = s.`id` ) AS choice_poor,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations AS se
				  WHERE category_id = ct.`id` 
				    AND answer = '2'  AND se.`teacher_id` = '".$id."' AND subj_id = s.`id` ) AS choice_fair,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations AS se
				  WHERE category_id = ct.`id` 
				    AND answer = '3'  AND se.`teacher_id` = '".$id."' AND subj_id = s.`id` ) AS choice_good,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations AS se
				  WHERE category_id = ct.`id` 
				    AND answer = '4' AND se.`teacher_id` = '".$id."' AND subj_id = s.`id` ) AS choice_very_good,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations AS se
				  WHERE category_id = ct.`id` 
				    AND answer = '5'  AND se.`teacher_id` = '".$id."' AND subj_id = s.`id` ) AS choice_excellent
				FROM
				 studentevaluations AS se
				  INNER JOIN categories AS ct 
				   ON ct.`id` = category_id 
				  INNER JOIN choices AS ch
				    ON ch.`id` = answer INNER JOIN `subjects` AS s
				WHERE category_id IN (";
		
		for($x = 1; $x <= sizeof($category); $x++){
			$sql.="'$x',";
		}
		$sql = rtrim($sql,',');

		$sql.=") AND se.`teacher_id` = '".$id."' AND subj_id = s.`id` GROUP BY category_id";

		$result = DB::query($sql)->execute()->as_array();

	

		// var_dump($result);

		$view->set_global('percent', $result);
		$view->set_global('subjects', $query);
		$view->set_global('category', $category);
		$this->template->title = "Subjects";
		$this->template->content = $view;
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