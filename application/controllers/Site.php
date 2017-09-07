<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

    private $result;

    public function __construct()
    {
        parent::__construct();

        $this->result = array();
    }

    // get user mileage
    public function index()
    {
        //$this->result = array('haha1'=>'hoho');
        $this->echoResult();
    }

    // set user mileage
    public function save() {

    }

    // get user mileage history
    public function history() {

    }

    public function echoResult() {
        echo json_encode($this->result);
    }
}