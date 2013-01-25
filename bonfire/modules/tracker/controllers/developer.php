<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class developer extends Admin_Controller {

    //--------------------------------------------------------------------


    public function __construct()
    {
        parent::__construct();

        $this->auth->restrict('Navigation.Developer.View');
        $this->load->model('navigation_model', null, true);
        $this->lang->load('navigation');

        Template::set_block('sub_nav', 'developer/_sub_nav');
    }

}
/***
 * File: developer.php
 */