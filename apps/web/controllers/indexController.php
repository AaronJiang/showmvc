<?php
class indexController extends baseController{
	
	public function __construct(){
		parent::__construct();
	}
	public function index(){

		$this->load->model('user');
		$vars['title'] = 'title';
		$vars['users'] = $this->user->getUsers();
		$this->load->view('index',$vars);	
	}

	public function test($id) {
		echo $id;
	}

}
