<?php
class Controller_Admin_Clients extends Controller_Admin{

	public function action_index()
	{
		$clients = Model_Client::find('all');
		
		  $contacts = array();
    foreach ($clients as $client)
    {
        $query = DB::select()
            ->from('contacts')
            ->where('client_id', $client->id)
            ->execute();
    }
		
		$view = View::forge('admin\clients/index', array('clients' =>$clients));
		$this->template->title = "Clients";
		$this->template->subtitle = "All Clients";
		$this->template->content = $view;

	}

	public function action_view($id = null)
	{
		$data['client'] = Model_Client::find($id);
		
		//$contacts = Model_Client::query()->related('contacts')->where('contacts.client_id', $id);

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
					'company' => Input::post('company'),
					'website' => Input::post('website'),				
				));
				

				if ($client and $client->save())
				{
					Session::set_flash('success', e('Added client: '.$client->company.'.'));

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
			$client->company = Input::post('company');
			$client->website = Input::post('website');

			if ($client->save())
			{
				Session::set_flash('success', e('Updated client ' . $company));

				Response::redirect('admin/clients');
			}

			else
			{
				Session::set_flash('error', e('Could not update client ' . $company));
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$client->company = $val->validated('company');
				$client->website = $val->validated('website');

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

			Session::set_flash('success', e('Deleted client '.$company));
		}

		else
		{
			Session::set_flash('error', e('Could not delete client #'.$company));
		}

		Response::redirect('admin/clients');

	}


}