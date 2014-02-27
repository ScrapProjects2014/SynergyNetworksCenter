<?php
class Controller_Admin_Contacts extends Controller_Admin{

	public function action_index()
	{
		$data['contacts'] = Model_Contact::find('all');
		$this->template->title = "Contacts";
		$this->template->subtitle = "Viewing All Contacts";
		$this->template->content = View::forge('admin\contacts/index', $data);

	}

	public function action_view($id = null)
	{
		$data['contact'] = Model_Contact::find($id);

		$this->template->title = "Contact";
		$this->template->subtitle = "Information";
		$this->template->content = View::forge('admin\contacts/view', $data);

	}

	public function action_create()
	{
	
		$view = View::forge('admin/contacts/create');
	
		if (Input::method() == 'POST')
		{
			$val = Model_Contact::validate('create');

			if ($val->run())
			{
				$contact = Model_Contact::forge(array(
					'first_name' => Input::post('first_name'),
					'last_name' => Input::post('last_name'),
					'phone' => Input::post('phone'),
					'email' => Input::post('email'),
					'modified_date' => Input::post('modified_date'),
					'modified_by' => Input::post('modified_by'),
				));

				if ($contact and $contact->save())
				{
					Session::set_flash('success', e('Added contact #'.$contact->id.'.'));

					Response::redirect('admin/contacts');
				}

				else
				{
					Session::set_flash('error', e('Could not save contact.'));
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}
		
		// Set some data
		$view->set_global('clients', Arr::assoc_to_keyval(Model_Client::find('all'), 'id', 'company'));

		$this->template->title = "Contacts";
		$this->template->subtitle = "Create";
		$this->template->content = $view;

	}

	public function action_edit($id = null)
	{
	
		$view = View::forge('admin/contacts/edit');
	
		$contact = Model_Contact::find($id);
		$val = Model_Contact::validate('edit');

		if ($val->run())
		{
			$contact->first_name = Input::post('first_name');
			$contact->last_name = Input::post('last_name');
			$contact->phone = Input::post('phone');
			$contact->email = Input::post('email');
			$contact->modified_date = Input::post('modified_date');
			$contact->modified_by = Input::post('modified_by');

			if ($contact->save())
			{
				Session::set_flash('success', e('Updated contact #' . $id));

				Response::redirect('admin/contacts');
			}

			else
			{
				Session::set_flash('error', e('Could not update contact #' . $id));
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$contact->first_name = $val->validated('first_name');
				$contact->last_name = $val->validated('last_name');
				$contact->phone = $val->validated('phone');
				$contact->email = $val->validated('email');
				$contact->modified_date = $val->validated('modified_date');
				$contact->modified_by = $val->validated('modified_by');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('contact', $contact, false);
		}
		
		// Set some data
		$view->set_global('clients', Arr::assoc_to_keyval(Model_Client::find('all'), 'id', 'company'));

		$this->template->title = "Contacts";
		$this->template->subtitle = "Editing";
		$this->template->content = $view;

	}

	public function action_delete($id = null)
	{
		if ($contact = Model_Contact::find($id))
		{
			$contact->delete();

			Session::set_flash('success', e('Deleted contact #'.$id));
		}

		else
		{
			Session::set_flash('error', e('Could not delete contact #'.$id));
		}

		Response::redirect('admin/contacts');

	}


}