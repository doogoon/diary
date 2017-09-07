<?php
/**
 * Created by IntelliJ IDEA.
 * User: siwonschool
 * Date: 2017-08-22
 * Time: 오후 11:29
 */
class Mileage_model extends CI_Model {

    private $mileageDb;

    private $sno;
    private $member;
    private $site;
    private $mileage;
    private $cumulative_mileage;
    private $type;
    private $type_ref1;
    private $type_ref2;
    private $exdate;
    private $regdate;

    function __construct()
    {
        $this->mileageDb = $this->load->database('edutech', true);
        //$this->load->database();

        $this->sno = 0;
        $this->member = 0;
        $this->site = '';
        $this->mileage = 0;
        $this->cumulative_mileage = 0;
        $this->type = '';
        $this->type_ref1 = '';
        $this->type_ref2 = '';
        $this->exdate = '';
        $this->regdate = null;
    }

    public function setMemberMileage($mileage) {
        $this->mileageDb->insert(MILEAGE, $mileage);
        if($this->mileageDb->affected_row() > 0) {
            return TRUE;
        }
        else {
            return FALSE;
        }
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
     * @return int
     */
    public function getMember()
    {
        return $this->member;
    }

    /**
     * @param int $member
     */
    public function setMember($member)
    {
        $this->member = $member;
    }

    /**
     * @return string
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * @param string $site
     */
    public function setSite($site)
    {
        $this->site = $site;
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
     * @return int
     */
    public function getCumulativeMileage()
    {
        return $this->cumulative_mileage;
    }

    /**
     * @param int $cumulative_mileage
     */
    public function setCumulativeMileage($cumulative_mileage)
    {
        $this->cumulative_mileage = $cumulative_mileage;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getTypeRef1()
    {
        return $this->type_ref1;
    }

    /**
     * @param string $type_ref1
     */
    public function setTypeRef1($type_ref1)
    {
        $this->type_ref1 = $type_ref1;
    }

    /**
     * @return string
     */
    public function getTypeRef2()
    {
        return $this->type_ref2;
    }

    /**
     * @param string $type_ref2
     */
    public function setTypeRef2($type_ref2)
    {
        $this->type_ref2 = $type_ref2;
    }

    /**
     * @return string
     */
    public function getExdate()
    {
        return $this->exdate;
    }

    /**
     * @param string $exdate
     */
    public function setExdate($exdate)
    {
        $this->exdate = $exdate;
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
