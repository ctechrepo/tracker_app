<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class reports extends Admin_Controller {

	//--------------------------------------------------------------------


	public function __construct()
	{
		parent::__construct();

		$this->auth->restrict('Vimeo.Reports.View');
		$this->lang->load('vimeo');
		
		Template::set_block('sub_nav', 'reports/_sub_nav');
	}

	//--------------------------------------------------------------------



	/*
		Method: index()

		Displays a list of form data.
	*/
	public function index()
	{

		Template::set('toolbar_title', 'Manage Vimeo');
		Template::render();
	}

	//--------------------------------------------------------------------



	/*
		Method: create()

		Creates a Vimeo object.
	*/
	public function create()
	{
		$this->auth->restrict('Vimeo.Reports.Create');

		Assets::add_module_js('vimeo', 'vimeo.js');

		Template::set('toolbar_title', lang('vimeo_create') . ' Vimeo');
		Template::render();
	}

	//--------------------------------------------------------------------



	/*
		Method: edit()

		Allows editing of Vimeo data.
	*/
	public function edit()
	{
		$id = $this->uri->segment(5);

		if (empty($id))
		{
			Template::set_message(lang('vimeo_invalid_id'), 'error');
			redirect(SITE_AREA .'/reports/vimeo');
		}

		Assets::add_module_js('vimeo', 'vimeo.js');

		Template::set('toolbar_title', lang('vimeo_edit') . ' Vimeo');
		Template::render();
	}

	//--------------------------------------------------------------------




}