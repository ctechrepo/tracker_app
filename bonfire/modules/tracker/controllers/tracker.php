<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Tracker extends Front_Controller {

    public function __construct(){
        parent::__construct();
        Template::set('toolbar_title', 'My Tracker');
    }

    public function index()
    {
        $this->load->helper('typography');

        //Template::set('posts', $this->post_model->order_by('created_on', 'asc')->limit(5)->find_all());

        Template::render();
    }

    public function addTrainingEvent(){

    }

    public function removeTrainingEvent(){

    }

    public function TrainingEvents(){

    }





}
/***
 * End of File:Tracker.php
 */