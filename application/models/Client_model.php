<?php
class Client_model extends CI_model
{
	function all()
	{
		return $clients = $this->db->get('client')->result_array(); // select * from client
	}

	function create($formArray)
	{
		$this->db->insert('client',$formArray); // insert into users (name,email)values(?,?)
	}

	function getClient($clientId)
	{
		$this->db->where('ID',$clientId);
		return $client = $this->db->get('client')->row_array(); // select * from users where user_id = ?
	}

	function updateClient($clientId,$formArray)
	{
		$this->db->where('ID',$clientId);
		$this->db->update('client',$formArray);
	}

	function deleteClient($clientId)
	{
		$this->db->where('ID',$clientId);
		$this->db->delete('client'); //delete from users where user_id = ?
	}
}
?>