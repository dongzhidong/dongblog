<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 后台用户管理模型
 */
class Admin_model extends CI_Model{

    /**
     * 登录
     * @param $username
     */

    public function check($username)
    {
       $data= $this->db->where(array('username' => $username))->get('admin')->result_array();
       return $data;
        // $this->db->get_where('admin',array('username'=>$username))->result_array();
    }

    /**
     * 修改密码
     */

    public function change($uid,$data){
        $this->db->update('admin',$data,array('uid'=>$uid));
    }


}