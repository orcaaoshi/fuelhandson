<?php
use Orm\Model;

class Model_Bb extends Model
{
	protected static $_properties = array(
		'id',
		'post_date',
		'message',
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_save'),
			'mysql_timestamp' => false,
		),
	);

	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('post_date', 'Post Date', 'required');
		$val->add_field('message', 'Message', 'required|max_length[100]');

		return $val;
	}

}
