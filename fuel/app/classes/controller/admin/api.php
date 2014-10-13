<?php 
class Controller_Admin_Api extends Controller_Admin {

	public function get_teachers(){
		$data['teachers'] = DB::select('username', 'decrypted_pass', 'email', 'contact_num')
		->where('group', '=', '50')
		->from(Model_User::table())
		->execute();
		return Format::forge($data)->to_json();
	}

	public function get_students(){
		$data['students'] = DB::select('username', 'decrypted_pass', 'email', 'contact_num')
		->where('group', '=', '1')
		->from(Model_User::table())
		->execute();
		return Format::forge($data)->to_json();
	}

	public function get_evaluation_notification()
	{
		
	}
}