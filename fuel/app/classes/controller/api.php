<?php

class Controller_Api extends Controller_Rest
{
	protected $format = 'json';

	public function get_list()
	{
		return \Model_Bb::find('all');
	}

	//public function post_create()
	public function get_create()
	{
		$bb = \Model_Bb::forge();
		$bb->post_date = \Input::get('post_date');
		$bb->message = \Input::get('message');
		$bb->save();

		return array(
			'id' => $bb->id,
			'post_date' => $bb->post_date,
			'message' => $bb->message,
		);
	}

	//public function post_edit()
	public function get_edit()
	{
		$bb = \Model_Bb::find(\Input::get('id'));
		$bb->post_date = \Input::get('post_date');
		$bb->message = \Input::get('message');
		$bb->save();

		return array(
			'id' => $bb->id,
			'post_date' => $bb->post_date,
			'message' => $bb->message,
		);
	}
}