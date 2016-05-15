<?php

namespace drey\bancos;

use drey\bancos\Migrate;

class MigrationTest extends \PHPUnit_Framework_TestCase
{
	public $db;

	function setUp()
	{
		$this->db = new \PDO('sqlite::memory:');  
        $this->db->setAttribute( \PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION );
	}

	function test()
	{	
		$migrate = new Migrate($this->db);
		$pp = dirname(__FILE__) . '/../../sql/bancos-schema.sql';
		$qsch = file_get_contents($pp);
		$pp = dirname(__FILE__) . '/../../sql/bancos-data.sql';
		$qdat = file_get_contents($pp);
		$migrate->up($qsch,$qdat);
		$pp = dirname(__FILE__) . '/../../sql/bancos-drop-table.sql';
		$qdrp = file_get_contents($pp);
		$migrate->down($qdrp);
	}
}
