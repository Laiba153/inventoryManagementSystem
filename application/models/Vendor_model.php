<?php
class Vendor_model extends CI_model
{
	function all()
	{
		return $vendors = $this->db->get('vendor')->result_array(); // select * from vendor
	}
}
?>