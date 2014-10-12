<?php 
class Controller_Admin_Achives extends Controller_Admin 
{
	public function action_index()
	{
		$view = View::forge('admin\achives/index');
		$this->template->title = "Academic Year";
		$view->set_global('years', Arr::assoc_to_keyval(Model_Academicyear::find('all'), 'year', 'year'));
		$this->template->content = $view;
	}

	public function action_view_pdf()
	{
		$users = Model_User::find('all');
		
		$view = View::forge('admin/achives/report');

		$pdf = new FPDF();
		$pdf->AddPage();
		$pdf->SetFont('Arial','B',12);
		foreach ($users as $user) {
			$pdf->Cell(40,10, $user['username'],0,0,1);
		}
		$pdf->Output();

	 	$this->template->title = "Archives";
		$this->template->content = $view;
	}

	public function action_search()
	{
		$view = View::forge('admin\achives/search');
		$acadyear = $_POST['acadyear'];
		$sem = $_POST['semester'];
		$search = DB::query("SELECT * FROM subjects AS s WHERE s.`academicyear` = ".$acadyear." AND s.`semester` = ".$sem." ")->execute()->as_array();
		$view->set_global('search', $search);
		$this->template->title = "Search";
		$this->template->content = $view;
	}
}
 ?>
