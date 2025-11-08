<?php 

/**
 * blog class
 */
class Blog
{
	use Controller;

	public function index()
	{

		$data['username'] = empty($_SESSION['USER']) ? 'User':$_SESSION['USER']->email;

		$this->view('blog',$data);
	}

}
