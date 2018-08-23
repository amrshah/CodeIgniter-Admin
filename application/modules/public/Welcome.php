<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * CodeIgniter Admin - An Admin Panel for CodeIgniter
 *
 * @package  CIAdmin
 * @author   Ali Rzaa <amrshah.github.io>
 * @email 	amr.shah@gmail.com
 *
 */

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome');
	}
}
