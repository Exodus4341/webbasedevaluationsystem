<?php 
class Controller_Api extends Controller_Rest{

	public function get_teachers(){
		$date['users'] = DB::select('username', 'password', 'email', 'contact_num')
		->where('group', '=', '50')
		->from(Model_User::table())
		->execute();
		return $this->response($date);
	}

	public function get_students(){
		$date['users'] = DB::select('username', 'password', 'email', 'contact_num')
		->where('group', '=', '1')
		->from(Model_User::table())
		->execute();
		return $this->response($date);
	}

	public function get_evaluation_notification()
	{
		
	}
}