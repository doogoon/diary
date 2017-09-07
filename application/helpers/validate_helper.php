<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('headerCheck'))
{
    function headerCheck()
    {
        $CI =& get_instance();
        $result = array(
            'code' => 1,
            'msg' => 'ok'
        );

        if(empty($CI->input->server('HTTP_TOKEN'))) {
            $result['code'] = 2;
            $result['msg'] = '토큰이 없습니다.';
        }
        else {
            $CI->load->model('member_model');
            $member = $CI->member_model->getMemberByToken($CI->input->server('HTTP_TOKEN'));
            if(empty($member)) {
                $result['code'] = 2;
                $result['msg'] = '유효한 토큰이 아닙니다.';
            }
        }

        if(empty($CI->input->server('HTTP_SITECODE'))) {
            $result['code'] = 2;
            $result['msg'] = '사이트코드가 없습니다.';
        }
        else {
            $CI->load->model('site_model');
            $site = $CI->site_model->getSiteByCode($CI->input->server('HTTP_SITECODE'));
            if(empty($site)) {
                $result['code'] = 2;
                $result['msg'] = '유효한 사이트가 아닙니다.';
            }
        }

        return $result;
    }
}


if ( ! function_exists('XOREncode'))
{
    function XOREncode($buf)
    {
        $ret = "";
        $Key = '!)~@#^&^#@~(!';
        $arr = "";
        $nSize = strlen($buf);
        $keySize = strlen($Key);

        for($i = 0; $i < $nSize; $i++)
            $ret .= chr(ord(substr($buf,$i,$i+1)) ^ ord(substr($Key,$i%$keySize,$i+1)));

        $ret = base64_encode($ret);
        return $ret;
    }
}

if ( ! function_exists('XORDecode'))
{
    function XORDecode($buf)
    {
        $ret = base64_decode($buf);
        $Key = '!)~@#^&^#@~(!';
        $arr = "";
        $nSize = strlen($ret);
        $keySize = strlen($Key);

        for($i = 0; $i < $nSize; $i++)
            $ret .= chr(ord(substr($ret,$i,$i+1)) ^ ord(substr($Key,$i%$keySize,$i+1)));

        $ret = substr($ret,$nSize);
        return $ret;
    }
}