<?php 

/**
 * contact class
 */
class Contact
{
	use Controller;

	public function index()
	{

		$data['username'] = empty($_SESSION['USER']) ? 'User':$_SESSION['USER']->email;

		$this->view('contact',$data);
	}

}
