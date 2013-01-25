<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class content extends Admin_Controller {

	//--------------------------------------------------------------------


	public function __construct()
	{
		parent::__construct();

		$this->auth->restrict('Tracker.Content.View');
		$this->lang->load('tracker');
		
		Template::set_block('sub_nav', 'content/_sub_nav');
	}

	//--------------------------------------------------------------------



	/*
		Method: index()

		Displays a list of form data.
	*/
	public function index()
	{

		Template::set('toolbar_title', 'Manage Tracker');
		Template::render();
	}

	//--------------------------------------------------------------------



	/*
		Method: create()

		Creates a Tracker object.
	*/
	public function create()
	{
		$this->auth->restrict('Tracker.Content.Create');

		Assets::add_module_js('tracker', 'tracker.js');

		Template::set('toolbar_title', lang('tracker_create') . ' Tracker');
		Template::render();
	}

	//--------------------------------------------------------------------



	/*
		Method: edit()

		Allows editing of Tracker data.
	*/
	public function edit()
	{
		$id = $this->uri->segment(5);

		if (empty($id))
		{
			Template::set_message(lang('tracker_invalid_id'), 'error');
			redirect(SITE_AREA .'/content/tracker');
		}

		Assets::add_module_js('tracker', 'tracker.js');

		Template::set('toolbar_title', lang('tracker_edit') . ' Tracker');
		Template::render();
	}

	//--------------------------------------------------------------------




}