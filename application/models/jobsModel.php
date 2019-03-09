<?php

	class jobsModel extends CI_Model
	{
			public function saveData($data)
			{
			
				$this->db->insert('jobs', $data);



				
			}
	}
?>