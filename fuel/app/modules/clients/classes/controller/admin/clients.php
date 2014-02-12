<?php
class Controller_Admin_Clients extends Controller_Admin{

	public function action_index()
	{
		$data['clients'] = Model_Client::find('all');
		$this->template->title = "Clients";
		$this->template->subtitle = "All Clients";
		$this->template->content = View::forge('admin\clients/index', $data);

	}

	public function action_view($id = null)
	{
		$data['client'] = Model_Client::find($id);

		$this->template->title = "Client";
		$this->template->subtitle = "Profile";
		$this->template->content = View::forge('admin\clients/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Client::validate('create');

			if ($val->run())
			{
				$client = Model_Client::forge(array(
					'site' => Input::post('site'),
					'web_address' => Input::post('web_address'),
				));

				if ($client and $client->save())
				{
					Session::set_flash('success', e('Added client #'.$client->id.'.'));

					Response::redirect('admin/clients');
				}

				else
				{
					Session::set_flash('error', e('Could not save client.'));
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Clients";
		$this->template->subtitle = "Creating New Client";
		$this->template->content = View::forge('admin\clients/create');

	}

	public function action_edit($id = null)
	{
		$client = Model_Client::find($id);
		$val = Model_Client::validate('edit');

		if ($val->run())
		{
			$client->site = Input::post('site');
			$client->web_address = Input::post('web_address');

			if ($client->save())
			{
				Session::set_flash('success', e('Updated client #' . $id));

				Response::redirect('admin/clients');
			}

			else
			{
				Session::set_flash('error', e('Could not update client #' . $id));
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$client->site = $val->validated('site');
				$client->web_address = $val->validated('web_address');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('client', $client, false);
		}

		$this->template->title = "Clients";
		$this->template->subtitle = "Editing Client";
		$this->template->content = View::forge('admin\clients/edit');

	}

	public function action_delete($id = null)
	{
		if ($client = Model_Client::find($id))
		{
			$client->delete();

			Session::set_flash('success', e('Deleted client #'.$id));
		}

		else
		{
			Session::set_flash('error', e('Could not delete client #'.$id));
		}

		Response::redirect('admin/clients');

	}


}