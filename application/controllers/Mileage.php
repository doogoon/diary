<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mileage extends CI_Controller {

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
        $this->load->helper(array('form', 'url', 'validate'));

        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('', '');

        if ($this->form_validation->run('save_mileage') == FALSE)
        {
            // 에러를 Array로 반환
            $errors = $this->form_validation->error_array();

            // 반환한 에러의 첫번째 값 출력
            $this->result = array(
                'code' => 2,
                'msg'=>reset($errors)
            );
        }
        else
        {
            // header parameters check
            headerCheck();

            // Set Mileage
            $member = $this->member_model->getMemberByToken($this->input->server('HTTP_TOKEN'));
            $site = $this->site_model->getSiteByCode($this->input->server('HTTP_SITECODE'));

            $mileage = array(
                'uno' => $member['sno'],
                'site_code' => $site['code'],
                'mileage' => $this->input->post('mileage'),
                'cumulative_mileage' => $this->input->post('mileage') + $member['mileage'],
                'type' => $this->input->post('type'),
                'exdate' => $this->input->post('exdate'),
                'regdate' => date('Y-m-d H:i:s')
            );

            if($this->mileage_model->setMemberMileage($mileage)) {
                $this->result = array(
                    'code' => 1,
                    'msg' => 'ok'
                );
            }
            else {
                $this->result = array(
                    'code' => 2,
                    'msg' => '마일리지 적립 실패하였습니다. 관리자에게 문의바랍니다.'
                );
            }
        }

        $this->echoResult();
    }

    // get user mileage history
    public function history() {

    }

    public function echoResult() {
        echo json_encode($this->result, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    }
}