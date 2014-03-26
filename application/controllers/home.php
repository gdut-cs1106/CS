<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        // 要先执行父类的构造函数
        parent::__construct();
        // 加载 url 类
        $this->load->helper('url');
    }

    public function index() {
        $data['title'] = '首页';

        $this->load->view('header', $data);
        $this->load->view('home');
        $this->load->view('footer');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
