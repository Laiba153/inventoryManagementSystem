<?php
class Product_model extends CI_model
{
	function all()
	{
		return $products = $this->db->get('product')->result_array(); // select * from vendor
	}
}
?>