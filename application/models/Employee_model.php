<?php
class Employee_model extends CI_model
{
	function all()
	{
		return $employees = $this->db->get('employee')->result_array(); // select * from employee
	}
}
?>