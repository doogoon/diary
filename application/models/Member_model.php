<?php
/**
 * Created by IntelliJ IDEA.
 * User: siwonschool
 * Date: 2017-08-22
 * Time: 오후 11:29
 */
class Member_model extends CI_Model {

    private $memberDb;
    private $sno;
    private $id;
    private $mileage;
    private $regdate;

    function __construct()
    {
        $this->memberDb = $this->load->database('edutech', true);

        $this->sno = 0;
        $this->id = '';
        $this->mileage = 0;
        $this->regdate = '';
    }

    public function getMemberByToken($token) {
        $query = $this->memberDb->get_where(MILEAGE_DB.'.'.MEMBER, array('token' => $token));
        return $this->getResult($query);
    }

    function getResult($query) {
        $result = array();
        if($query->num_rows() == 1) {
            $result = $query->row_array();
        }
        else {
            foreach ($query->result_array() as $row)
            {
                array_push($result, $row);
            }
        }

        return $result;
    }

    /**
     * @return int
     */
    public function getSno()
    {
        return $this->sno;
    }

    /**
     * @param int $sno
     */
    public function setSno($sno)
    {
        $this->sno = $sno;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getMileage()
    {
        return $this->mileage;
    }

    /**
     * @param int $mileage
     */
    public function setMileage($mileage)
    {
        $this->mileage = $mileage;
    }

    /**
     * @return string
     */
    public function getRegdate()
    {
        return $this->regdate;
    }

    /**
     * @param string $regdate
     */
    public function setRegdate($regdate)
    {
        $this->regdate = $regdate;
    }


}
?>