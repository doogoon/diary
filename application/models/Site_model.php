<?php
/**
 * Created by IntelliJ IDEA.
 * User: siwonschool
 * Date: 2017-08-22
 * Time: 오후 11:29
 */
class Site_model extends CI_Model {

    private $siteDb;
    private $sno;
    private $code;
    private $name;
    private $regdate;

    public function __construct()
    {
        $this->siteDb = $this->load->database('edutech', true);

        $this->sno = 0;
        $this->code = '';
        $this->name = '';
        $this->regdate = null;
    }

    public function getSiteByCode($siteCode) {
        $this->siteDb->where('code', $siteCode);
        $query = $this->siteDb->get(MILEAGE_DB.'.'.SITE);

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
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return null
     */
    public function getRegdate()
    {
        return $this->regdate;
    }

    /**
     * @param null $regdate
     */
    public function setRegdate($regdate)
    {
        $this->regdate = $regdate;
    }

}
?>