<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_santri extends CI_Model
{
	

	public function get_data_santri($table)
	{
		return $this -> db -> get($table);
	}
}