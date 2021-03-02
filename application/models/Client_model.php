<?php
class Client_model extends CI_model
{
	function all()
	{
		return $clients = $this->db->get('client')->result_array(); // select * from client
	}
}
?>