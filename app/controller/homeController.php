<?php
/**
 * 
 */
class homeController extends Controller
{
	
	function __construct()
	{
		# code...
	}

	public function index($name='',$id='')
	{
		// echo "I am in " . __CLASS__ . " method " . __METHOD__;
		// echo "username is $name and $id is the id";
		$this->view('home\index',[
			'name' => $name,
			'id' => $id
		]);
		$this->view->pageTitle = "Welcome to MVC";
		$this->view->render();
		
		// echo "<pre>";
		// var_dump($this);
		// echo "</pre>";
	}

	public function aboutUs()
	{
		$this->view('home\aboutUs');
		$this->view->pageTitle = "MVC - About Us";
		$this->view->render();
	}
}