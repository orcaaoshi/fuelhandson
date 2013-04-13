<?php

class Controller_Osu0413 extends Fuel\Core\Controller
{
	public function action_index($text = 'good morning')
	{
		$data = array();
		$data['title'] = '2013年4月13日（土）';
		$data['text'] = $text;
		return View::forge('osu0413', $data);
	}
}
