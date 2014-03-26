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
     * @returns  返回一个 Array 包含所有用户
     */
    public function get_all_users() {
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
     * @synopsis  根据 id 返回一个用户
     *
     * @param $id  用户 id
     *
     * @returns  一个用户对象 
     */
    public function get_user_by_id($id) {
    }

    /**
     * @synopsis  根据学号返回一个用户
     *
     * @param $id  学号
     *
     * @returns  一个用户对象 
     */
    public function get_user_by_stu_id($stu_id) {
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
    }
}

/* End of file welcom.php */
/* Location: ./application/models/user_model.php */
