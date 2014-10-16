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
		

		$comm = "SELECT * FROM subj_stud AS ss INNER JOIN users AS u ON ss.`subj_id` = '".$subj_id."' WHERE u.`id` = '".$teach_id."' ";
		$comment = DB::query($comm)->execute()->as_array();
		$view->set_global('comments', $comment);

		
		$this->template->title = "Evaluaton results";
		$view->set_global('evaluated', $result);
		$view->set_global('category', $category);
		$view->set_global('questionsum', $questionsum);
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