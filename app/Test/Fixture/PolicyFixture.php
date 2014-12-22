<?php
/**
 * PolicyFixture
 *
 */
class PolicyFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'agents_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'clients_id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 40, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'details' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'dateofpurchase' => array('type' => 'date', 'null' => false, 'default' => null),
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
			'agents_id' => 1,
			'clients_id' => 'Lorem ipsum dolor sit amet',
			'details' => 'Lorem ipsum dolor sit amet',
			'dateofpurchase' => '2014-11-03',
			'detailmasque' => 1
		),
	);

}
