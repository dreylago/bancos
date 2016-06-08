<?php

namespace drey\bancos;

class Migrate {

	public $db;

	/**
	 * 
	 * @param PDO Object $db to create/destroy the table
	 */
	public function __construct($db)
	{
		$this->db = $db;
	}

	public function up($sql_schema,$sql_data)
	{
		$qs = $this->db->exec($sql_schema);
		$qd = $this->db->exec($sql_data);
	}

	public function down($drop_sql)
	{
		$qs = $this->db->exec($drop_sql);
	}
}
