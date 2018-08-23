<?php
/**
 * CodeIgniter Admin - An Admin Panel for CodeIgniter 
 *
 * @package  CIAdmin
 * @author   Ali Rzaa <amrshah.github.io>
 * @email 	amr.shah@gmail.com
 * @Description:	Please add
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class AdminDashboard extends CI_Controller {

	/**
	 
	 */
	
	
	public function index($page='dashboard')
	{	
		
		//$this->output->enable_profiler(TRUE);
		//$this->load->library('ion_auth');
		
		if (!$this->auth->logged_in())
		{
			redirect('index.php/auth/login');
		}
		//var_dump($page);
		$page=strtolower($page);
		$path = 'admin/';
		if($page!='dashboard')
		{
			switch($page)
			{
				case '404':
				case '500':
				case 'pace':
					$path = $path . 'pages/example/';
					break;
				case 'users':
				case 'roles':
				case 'permissions':
					$path = $path . 'pages/users/';
					break;
				case 'login':
				case 'register':
					$path = $path . 'pages/auth/';
					break;
					
			}
		}
		
		$pathToPage = $path . $page;

		//var_dump($pathToPage);
		
		$data['current_page'] = $page;
		
		$this->load->view($pathToPage, $data);
	}
	
	
}
