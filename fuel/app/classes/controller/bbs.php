<?php
class Controller_Bbs extends Controller_Template 
{

	public function action_index()
	{
		$data['bbs'] = Model_Bb::find('all');
		$this->template->title = "Bbs";
		$this->template->content = View::forge('bbs/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('Bbs');

		if ( ! $data['bb'] = Model_Bb::find($id))
		{
			Session::set_flash('error', 'Could not find bb #'.$id);
			Response::redirect('Bbs');
		}

		$this->template->title = "Bb";
		$this->template->content = View::forge('bbs/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Bb::validate('create');
			
			if ($val->run())
			{
				$bb = Model_Bb::forge(array(
					'post_date' => Input::post('post_date'),
					'message' => Input::post('message'),
				));

				if ($bb and $bb->save())
				{
					Session::set_flash('success', 'Added bb #'.$bb->id.'.');

					Response::redirect('bbs');
				}

				else
				{
					Session::set_flash('error', 'Could not save bb.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Bbs";
		$this->template->content = View::forge('bbs/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('Bbs');

		if ( ! $bb = Model_Bb::find($id))
		{
			Session::set_flash('error', 'Could not find bb #'.$id);
			Response::redirect('Bbs');
		}

		$val = Model_Bb::validate('edit');

		if ($val->run())
		{
			$bb->post_date = Input::post('post_date');
			$bb->message = Input::post('message');

			if ($bb->save())
			{
				Session::set_flash('success', 'Updated bb #' . $id);

				Response::redirect('bbs');
			}

			else
			{
				Session::set_flash('error', 'Could not update bb #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$bb->post_date = $val->validated('post_date');
				$bb->message = $val->validated('message');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('bb', $bb, false);
		}

		$this->template->title = "Bbs";
		$this->template->content = View::forge('bbs/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('Bbs');

		if ($bb = Model_Bb::find($id))
		{
			$bb->delete();

			Session::set_flash('success', 'Deleted bb #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete bb #'.$id);
		}

		Response::redirect('bbs');

	}


}