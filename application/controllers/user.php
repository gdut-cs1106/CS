<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    /**
     * @synopsis  用户登录，完成后跳转到之前请求的页面
     *
     * @returns   登录成功的用户对象 
     */
    public function login() {
    }


    /**
     * @synopsis 用户登出，完成后跳转到之前请求的页面 
     *
     * @returns  null 
     */
    public function logout() {
    }

    /**
     * @synopsis  根据用户 id 获取个人信息
     *
     * @param $id 用户 id
     *
     * @returns  渲染用户个人信息页面 
     */
    public function people($id) {
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/user.php */
