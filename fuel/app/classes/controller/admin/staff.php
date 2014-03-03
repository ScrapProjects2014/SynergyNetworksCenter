<?php
class Controller_Admin_Staff extends Controller_Admin{

	public function action_index()
	{
		$data['staffs'] = Model_Staff::find('all');
		$this->template->title = "Staffs";
		$this->template->subtitle = "All Staff";
		$this->template->content = View::forge('admin\staff/index', $data);

	}

	public function action_view($id = null)
	{
		$data['staff'] = Model_Staff::find($id);

		$this->template->title = "Staff";
		$this->template->subtitle = $staff->user;
		$this->template->content = View::forge('admin\staff/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Staff::validate('create');

			if ($val->run())
			{
				$staff = Model_Staff::forge(array(
					'first' => Input::post('first'),
					'last' => Input::post('last'),
					'email' => Input::post('email'),
					'personal_email' => Input::post('personal_email'),
					'phone' => Input::post('phone'),
					'cell_phone' => Input::post('cell_phone'),
					'profile_fields' => Input::post('profile_fields'),
					'user' => Input::post('user'),
				));

				if ($staff and $staff->save())
				{
					Session::set_flash('success', e('Added staff #'.$staff->id.'.'));

					Response::redirect('admin/staff');
				}

				else
				{
					Session::set_flash('error', e('Could not save staff.'));
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Staffs";
		$this->template->subtitle = "Create New Staff";
		$this->template->content = View::forge('admin\staff/create');

	}

	public function action_edit($id = null)
	{
		$staff = Model_Staff::find($id);
		$val = Model_Staff::validate('edit');

		if ($val->run())
		{
			$staff->first = Input::post('first');
			$staff->last = Input::post('last');
			$staff->email = Input::post('email');
			$staff->personal_email = Input::post('personal_email');
			$staff->phone = Input::post('phone');
			$staff->cell_phone = Input::post('cell_phone');
			$staff->profile_fields = Input::post('profile_fields');
			$staff->user = Input::post('user');

			if ($staff->save())
			{
				Session::set_flash('success', e('Updated staff #' . $id));

				Response::redirect('admin/staff');
			}

			else
			{
				Session::set_flash('error', e('Could not update staff #' . $id));
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$staff->first = $val->validated('first');
				$staff->last = $val->validated('last');
				$staff->email = $val->validated('email');
				$staff->personal_email = $val->validated('personal_email');
				$staff->phone = $val->validated('phone');
				$staff->cell_phone = $val->validated('cell_phone');
				$staff->profile_fields = $val->validated('profile_fields');
				$staff->user = $val->validated('user');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('staff', $staff, false);
		}

		$this->template->title = "Staffs";
		$this->template->subtitle = "Edit Staff";
		$this->template->content = View::forge('admin\staff/edit');

	}

	public function action_delete($id = null)
	{
		if ($staff = Model_Staff::find($id))
		{
			$staff->delete();

			Session::set_flash('success', e('Deleted staff #'.$id));
		}

		else
		{
			Session::set_flash('error', e('Could not delete staff #'.$id));
		}

		Response::redirect('admin/staff');

	}


}