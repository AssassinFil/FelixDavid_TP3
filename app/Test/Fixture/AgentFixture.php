<?php
/**
 * AgentFixture
 *
 */
class AgentFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 200, 'key' => 'primary'),
		'prenom' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 40, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'nom' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 40, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'datenaissance' => array('type' => 'date', 'null' => false, 'default' => null),
		'email' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 40, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'detailmasque' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'indexes' => array(
			
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'prenom' => 'Lorem ipsum dolor sit amet',
			'nom' => 'Lorem ipsum dolor sit amet',
			'datenaissance' => '2014-11-03',
			'email' => 'Lorem ipsum dolor sit amet',
			'detailmasque' => 1
		),
	);

}
