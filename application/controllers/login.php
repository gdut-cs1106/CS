<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->model('user_model');
    }

    /**
     * @synopsis  用户登录，完成后跳转到之前请求的页面
     *
     * @returns   登录成功的用户对象 
     */
    public function login() {
        //验证 过滤表单
        $this->form_validation->set_rules('email','Email','required|valid_email');
        $this->form_validation->set_rules('password','Password','required');
        if($this->form_validation->run() == FALSE){
            //表单验证失败，提示用户名或密码不正确
        }else{
            //$this->user_model->get_uid()判断是否存在该用户
            $email = $_POST['email'];
            $password = $_POST['password'];
            $uid = $this->user_model->get_uid($email,$password);
            if($uid == 0){
                //不存在该用户，提示用户名或密码不正确
            }else{
                //验证成功 保存session 跳转redirect()  是否还需要is_logined
                $this->session->set_userdate(array("uid"=>$uid));
                redirect('home');
            }
        }
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
