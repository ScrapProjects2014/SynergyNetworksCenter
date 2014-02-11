<?php
class Controller_Admin_Admin extends Controller_Admin{

	public function action_index()
	{
		$data['admins'] = Model_Admin::find('all');
		$this->template->title = "Admins";
		$this->template->content = View::forge('admin\admin/index', $data);

	}

	public function action_view($id = null)
	{
		$data['admin'] = Model_Admin::find($id);

		$this->template->title = "Admin";
		$this->template->content = View::forge('admin\admin/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Admin::validate('create');

			if ($val->run())
			{
				$admin = Model_Admin::forge(array(
				));

				if ($admin and $admin->save())
				{
					Session::set_flash('success', e('Added admin #'.$admin->id.'.'));

					Response::redirect('admin/admin');
				}

				else
				{
					Session::set_flash('error', e('Could not save admin.'));
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Admins";
		$this->template->content = View::forge('admin\admin/create');

	}

	public function action_edit($id = null)
	{
		$admin = Model_Admin::find($id);
		$val = Model_Admin::validate('edit');

		if ($val->run())
		{

			if ($admin->save())
			{
				Session::set_flash('success', e('Updated admin #' . $id));

				Response::redirect('admin/admin');
			}

			else
			{
				Session::set_flash('error', e('Could not update admin #' . $id));
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('admin', $admin, false);
		}

		$this->template->title = "Admins";
		$this->template->content = View::forge('admin\admin/edit');

	}

	public function action_delete($id = null)
	{
		if ($admin = Model_Admin::find($id))
		{
			$admin->delete();

			Session::set_flash('success', e('Deleted admin #'.$id));
		}

		else
		{
			Session::set_flash('error', e('Could not delete admin #'.$id));
		}

		Response::redirect('admin/admin');

	}


}