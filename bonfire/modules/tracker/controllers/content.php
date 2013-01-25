<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Content extends Admin_Controller {

        public function __construct()
        {
            parent::__construct();

            Template::set('toolbar_title', 'Manage Tracker');
        }

        //--------------------------------------------------------------------

        public function index()
        {
            Template::render();
        }

        //--------------------------------------------------------------------

    }
/***
 * End of File:content.php
 */