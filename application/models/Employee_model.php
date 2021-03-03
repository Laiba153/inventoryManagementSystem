<?php
class Employee_model extends CI_model
{
	function all()
	{
		return $employees = $this->db->get('employee')->result_array(); // select * from employee
	}

	function create($formArray)
	{
		$this->db->insert('employee',$formArray); // insert into users (name,email)values(?,?)
	}

	function getEmployee($empId)
	{
		$this->db->where('ID',$empId);
		return $employee = $this->db->get('employee')->row_array(); // select * from users where user_id = ?
	}

	function updateEmployee($empId,$formArray)
	{
		$this->db->where('ID',$empId);
		$this->db->update('employee',$formArray);
	}

	function deleteEmployee($empId)
	{
		$this->db->where('ID',$empId);
		$this->db->delete('employee'); //delete from users where user_id = ?
	}
}
?>