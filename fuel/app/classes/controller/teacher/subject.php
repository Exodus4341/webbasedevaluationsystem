<?php
class Controller_Teacher_Subject extends Controller_Teacher
{

	public function action_index()
	{
		$view = View::forge('teacher\subject/index');
		$query = DB::query("SELECT *, s.`id` AS sid FROM `subjects` AS s INNER JOIN `schoolyear` AS sy ON sy.`academicyear` = s.`academicyear` AND s.`semester` = sy.`scho_year` WHERE s.`teacher_id` = ".$this->current_user->id." GROUP BY s.`subj_code` ")->execute()->as_array();
		$view->set_global('subjects', $query);
		$this->template->title = "Subjects";
		$this->template->content = $view;

	}

	public function action_result_evaluation($teach_id = null, $subj_id = null)
	{
		$view = View::forge('teacher\subject/result_evaluation');

		$q = "SELECT * FROM users AS u INNER JOIN subjects AS s WHERE u.`id` = '".$teach_id."' AND s.`id` = '".$subj_id."' ";
		$qw = DB::query($q)->execute()->as_array();
		$view->set_global('teacher_subjects', $qw);

		$sql1 = "SELECT id, cat_name, percentage FROM categories";

		$category = DB::query($sql1)->execute()->as_array();

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
				 studentevaluations 
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

		$result = DB::query($sql)->execute()->as_array();
		

		$comm = "SELECT * FROM subj_stud AS ss INNER JOIN users AS u ON ss.`subj_id` = '".$subj_id."' WHERE u.`id` = '".$teach_id."' ";
		$comment = DB::query($comm)->execute()->as_array();
		$view->set_global('comments', $comment);

		
		$this->template->title = "Evaluaton results";
		$view->set_global('evaluated', $result);
		$view->set_global('category', $category);
		$this->template->content = $view;
	}

	public function action_studentlist($subj_code = null)
	{
		$view = View::forge('teacher\subject/studentlist');
		// $data['subjects'] = Model_Subject::find('all');
		$query = DB::query("SELECT *, ss.`created_at` AS `ssc` FROM `subj_stud` AS ss INNER JOIN `users` AS u ON ss.`stud_id` = u.`id` LEFT JOIN `subjects` AS s ON s.`id` = ss.`subj_id` WHERE s.`teacher_id` = ".$this->current_user->id." AND ss.`subj_id` = ".$subj_code." ")->execute()->as_array();

		// $query['subject'] = Model_Subject::find($id);
		$view->set_global('subjects', $query);
		$this->template->title = "Subjects";
		$this->template->content = $view;

	}

	public function action_view($id = null)
	{
		$data['subject'] = Model_Subject::find($id);
		$this->template->title = "Subject";
		$this->template->content = View::forge('teacher\subject/student', $data);

	}

}