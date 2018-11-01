<?php
/**
 * 
 */
class carController extends Controller
{
	
	public function index()
	{
		$this->model('Car');
		$this->view('car\index',['cars' => $this->model->getCars()]);
		$this->view->pageTitle = 'cars';
		$this->view->render();
		
		var_dump($this->model->getCars());
	}
}