<?php
namespace Template;

class Hello extends \Controller{

	public function action_index()
	{
		$data['hellos'] = Model_Hello::find('all');
		$this->template->title = "Hellos";
		$this->template->content = View::forge('hello/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('hello');

		if ( ! $data['hello'] = Model_Hello::find($id))
		{
			Session::set_flash('error', 'Could not find hello #'.$id);
			Response::redirect('hello');
		}

		$this->template->title = "Hello";
		$this->template->content = View::forge('hello/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Hello::validate('create');
			
			if ($val->run())
			{
				$hello = Model_Hello::forge(array(
					'name' => Input::post('name'),
					'description' => Input::post('description'),
				));

				if ($hello and $hello->save())
				{
					Session::set_flash('success', 'Added hello #'.$hello->id.'.');

					Response::redirect('hello');
				}

				else
				{
					Session::set_flash('error', 'Could not save hello.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Hellos";
		$this->template->content = View::forge('hello/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('hello');

		if ( ! $hello = Model_Hello::find($id))
		{
			Session::set_flash('error', 'Could not find hello #'.$id);
			Response::redirect('hello');
		}

		$val = Model_Hello::validate('edit');

		if ($val->run())
		{
			$hello->name = Input::post('name');
			$hello->description = Input::post('description');

			if ($hello->save())
			{
				Session::set_flash('success', 'Updated hello #' . $id);

				Response::redirect('hello');
			}

			else
			{
				Session::set_flash('error', 'Could not update hello #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$hello->name = $val->validated('name');
				$hello->description = $val->validated('description');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('hello', $hello, false);
		}

		$this->template->title = "Hellos";
		$this->template->content = View::forge('hello/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('hello');

		if ($hello = Model_Hello::find($id))
		{
			$hello->delete();

			Session::set_flash('success', 'Deleted hello #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete hello #'.$id);
		}

		Response::redirect('hello');

	}


}
