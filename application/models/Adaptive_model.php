<?php
/**
 * Created by IntelliJ IDEA.
 * User: siwonschool
 * Date: 2017-08-22
 * Time: 오후 11:29
 */
class Adaptive_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_data($tcode = FALSE)
    {
        if ($tcode === FALSE)
        {
            $query = $this->db->get('cms_trade_info');
            return $query->result_array(); // 여러 row
        }

        $query = $this->db->get_where('cms_trade_info', array('tcode' => $tcode));
        //return $query->row_array(); // 단일 row
        return $query->result_array(); // 여러 row
    }
}
?>