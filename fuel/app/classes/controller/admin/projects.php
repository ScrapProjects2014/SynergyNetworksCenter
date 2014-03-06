<?php
class Controller_Admin_Projects extends Controller_Admin{

	public function action_index()
	{
		$data['projects'] = Model_Project::find('all');
		$this->template->title = "Projects";
		$this->template->subtitle = "All Projects";
		$this->template->content = View::forge('admin\projects/index', $data);

	}

	public function action_view($id = null)
	{
		$data['project'] = Model_Project::find($id);

		$this->template->title = "Project";
		$this->template->subtitle = "Overview Project";
		$this->template->content = View::forge('admin\projects/view', $data);

	}

	public function action_create()
	{
		
		$view = View::forge('admin/projects/create');
	
		if (Input::method() == 'POST')
		{
			$val = Model_Project::validate('create');

			if ($val->run())
			{
				$project = Model_Project::forge(array(
					'title' => Input::post('title'),
					'job_type' => Input::post('job_type'),
					'client' => Input::post('client'),
					'status' => Input::post('status'),
					'progress' => Input::post('progress'),
					'live' => Input::post('live'),
					'testing' => Input::post('testing'),
					'notes' => Input::post('notes'),
					'developer' => Input::post('developer'),
				));

				if ($project and $project->save())
				{
					Session::set_flash('success', e('Added project #'.$project->id.'.'));

					Response::redirect('admin/projects');
				}

				else
				{
					Session::set_flash('error', e('Could not save project.'));
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}
		
		// Set some data
		$view->set_global('clients', Arr::assoc_to_keyval(Model_Client::find('all'), 'id', 'company'));

		$this->template->title = "Projects";
		$this->template->subtitle = "Create A New Project";
		$this->template->content = $view;

	}

	public function action_edit($id = null)
	{
	
		$view = View::forge('admin/projects/edit');
	
		$project = Model_Project::find($id);
		$val = Model_Project::validate('edit');

		if ($val->run())
		{
			$project->title = Input::post('title');
			$project->job_type = Input::post('job_type');
			$project->client = Input::post('client');
			$project->status = Input::post('status');
			$project->progress = Input::post('progress');
			$project->live = Input::post('live');
			$project->testing = Input::post('testing');
			$project->notes = Input::post('notes');
			$project->developer = Input::post('developer');

			if ($project->save())
			{
				Session::set_flash('success', e('Updated project #' . $id));

				Response::redirect('admin/projects');
			}

			else
			{
				Session::set_flash('error', e('Could not update project #' . $id));
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$project->title = $val->validated('title');
				$project->job_type = $val->validated('job_type');
				$project->client = $val->validated('client');
				$project->status = $val->validated('status');
				$project->progress = $val->validated('progress');
				$project->live = $val->validated('live');
				$project->testing = $val->validated('testing');
				$project->notes = $val->validated('notes');
				$project->developer = $val->validated('developer');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('project', $project, false);
		}
		
		// Set some data
		$view->set_global('clients', Arr::assoc_to_keyval(Model_Client::find('all'), 'id', 'company'));

		$this->template->title = "Projects";
		$this->template->subtitle = "Editing Project";
		$this->template->content = $view;

	}

	public function action_delete($id = null)
	{
		if ($project = Model_Project::find($id))
		{
			$project->delete();

			Session::set_flash('success', e('Deleted project #'.$id));
		}

		else
		{
			Session::set_flash('error', e('Could not delete project #'.$id));
		}

		Response::redirect('admin/projects');

	}


}