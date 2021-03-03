<?php
class Product_model extends CI_model
{
	function all()
	{
		return $products = $this->db->get('product')->result_array(); // select * from vendor
	}

	function create($formArray)
	{
		$this->db->insert('product',$formArray); // insert into users (name,email)values(?,?)
	}

	function getProduct($proId)
	{
		$this->db->where('ID',$proId);
		return $product = $this->db->get('product')->row_array(); // select * from users where user_id = ?
	}

	function updateProduct($proId,$formArray)
	{
		$this->db->where('ID',$proId);
		$this->db->update('product',$formArray);
	}

	function deleteProduct($proId)
	{
		$this->db->where('ID',$proId);
		$this->db->delete('product'); //delete from users where user_id = ?
	}
}
?>