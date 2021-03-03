<?php
class Vendor_model extends CI_model
{
	function all()
	{
		return $vendors = $this->db->get('vendor')->result_array(); // select * from vendor
	}

	function create($formArray)
	{
		$this->db->insert('vendor',$formArray); // insert into users (name,email)values(?,?)
	}

	function getVendor($venId)
	{
		$this->db->where('ID',$venId);
		return $vendor = $this->db->get('vendor')->row_array(); // select * from users where user_id = ?
	}

	function updateVendor($venId,$formArray)
	{
		$this->db->where('ID',$venId);
		$this->db->update('vendor',$formArray);
	}

	function deleteVendor($venId)
	{
		$this->db->where('ID',$venId);
		$this->db->delete('vendor'); //delete from users where user_id = ?
	}
}
?>