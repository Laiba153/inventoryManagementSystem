<?php
class Pop_model extends CI_model
{
	function all()
	{
		return $pops = $this->db->get('pop')->result_array(); // select * from client
	}

	function create($formArray)
	{
		$this->db->insert('pop',$formArray); // insert into users (name,email)values(?,?)
	}


	function getPop($popId)
	{
		$this->db->where('ID',$popId);
		return $pop = $this->db->get('pop')->row_array(); // select * from users where user_id = ?
	}

	function updatePop($popId,$formArray)
	{
		$this->db->where('ID',$popId);
		$this->db->update('pop',$formArray);
	}

	function deletePop($popId)
	{
		$this->db->where('ID',$popId);
		$this->db->delete('pop'); //delete from users where user_id = ?
	}
}
?>