<?php
class DefaultDao extends LtBaseDao
{
	public function __construct()
	{
		parent::__construct();
		$this->table = $this->db->getTDG('img');
		$this->primaryKey = 'id';
	}
}
