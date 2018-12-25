<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Santri extends CI_Controller 
{
	public function __construct()
	{
		parent:: __construct();
		$this->load->database();
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->library('parser');
		$this->load->helper(array('url','language'));

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');
	}

	public function index()
	{
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		else if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the home page because they must be an administrator to view this
			return show_error('You must be an administrator to view this page.');
		}
		else
		{
			$data['santri'] = $this -> db -> query("SELECT * FROM santri ORDER BY id DESC LIMIT 10") -> result();
			$this->load->view('admin/datasantri',$data);
		}
	}
}