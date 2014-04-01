<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_model {

    /**
     * @synopsis  构造函数，加载数据库
     *
     * @returns   null 
     */
    public function __construct() {
        $this->load->database();
    }
    

    /**
     * @synopsis 获取所有用户 
     *
     * @returns  返回一个 Array 包含所有用户的 stu_id
     */
    public function get_all_users() {
		$users = $this->db->order_by('uid')
			->get('users')
			->result_array();
			
		return $users;
		
    }


    /**
     * @synopsis 获取所有男生
     *
     * @returns  返回一个 Array 包含所有男生
     */
    public function get_boys() {
    }

    /**
     * @synopsis 获取所有女生
     *
     * @returns  返回一个 Array 包含所有女生
     */
    public function get_girls() {
    }


    /**
     * @synopsis  根据 uid 返回一个用户
     *
     * @param $uid  用户 uid
     *
     * @returns  一个用户对象 
     */
    public function get_user_by_uid($uid) {
		
		$user = $this->db->get_where('users',array('uid' => $uid))
			->result_array();
			
		return $user;
    }

    /**
     * @synopsis  根据学号返回一个用户
     *
     * @param $id  学号
     *
     * @returns  一个用户对象 
     */
    public function get_user_by_stu_id($stu_id) {
		
		$user = $this->db->get_where('users',array('stu_id' => $stu_id))
			->result_array();
			
		return $user;
    }

    /**
     * @synopsis 添加一个用户
     *
     * @param $user 要添加的用户对象
     *
     * @returns  添加的用户在数据库中的 id
     */
    public function add_user($user) {
    }

    /**
     * @synopsis  根据 id 删除一个用户
     *
     * @param $id 要删除的用户的 id
     *
     * @returns  删除成功返回 true ，否则返回 false 
     */
    public function remove_user_by_id($id) {
    }

    /**
     * @synopsis  更新一个用户的信息
     *
     * @param $user 要更新的用户对象
     *
     * @returns  更新成功返回 true ，否则返回 false 
     */
    public function update_user($user) {
		
		
		$data = array('name' => $user->name,'sex' => $user->sex,'birthday' => $user->birthday ,'email' => $user->email);
		$where = "uid == '.$uid.'";
		$this->db->update('users',$data,$where);
		
		return ($this->db->affected_rows('users') > 0) ? TRUE : FALSE;
		
    }

	 /**
     * @synopsis  根据 uid 修改密码
     *
     * @param  $password
     *
     * @returns  成功就返回一个用户id 错误返回false
     */
	 
	 public function update_user_password($uid){
		
		return $this->db->update('users', array('password' => sha1($password)), array('uid' => $uid));
	 
	 
	 
	}
	 
	 
	 /**
     * @synopsis  根据 学号和密码 获得用户id
     *
     * @param $stu_id $password
     *
     * @returns  成功就返回一个用户id 错误返回false
     */
    public function get_uid($stu_id,$password) {
	
		$query = $this->db->get_where('users',array('stu_id' => $stu_id,'password' => sha1($password)));
		
		if ($query->num_rows == 1 )  {
			$user = $this->db->get_where('users',array('stu_id' => $stu_id))->row();
			return $user->uid;
		} else
			return false;
	}
}
/* End of file welcom.php */
/* Location: ./application/models/user_model.php */
