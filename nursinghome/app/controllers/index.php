<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 首页及相关静态页面模型
 * Created by PhpStorm.
 * User: zhaoyu
 * Date: 14-1-13
 * Time: 下午2:23
 */

class Index extends CI_Controller{

    private $offset = 0; //偏移量
    private $per_page = 10; //显示数据条数

    function __construct(){
        parent::__construct();
    }

    /**
     * 首页
     */
    public function index(){

        $where = "WHERE type=0";

        $this->load->model('info_model', 'news_model');
        $this->load->library('common_class');
        $data['news_list'] = $this->news_model->get_news_list($this->offset, $this->per_page, $where);
        $this->load->view('index/index', $data);
    }

    /**
     * 简介
     */
    public function about(){
        $this->load->view('about/about');
    }

    /**
     * 收费标准
     */
    public function charge(){
        $this->load->view('charge/charge');
    }

    /**
     * 环境设施
     */
    public function environment(){
        $this->load->view('environment/environment');
    }

    /**
     * 入院流程
     */
    public function process(){
        $this->load->view('process/process');
    }

    /**
     * 在线留言
     */
    public function message(){
        $this->load->view('message/message');
    }

    /**
     * 联系我们
     */
    public function contact(){
        $this->load->view('contact/contact');
    }

    /**
     * 留言处理
     *  说明：操作流程，先写库，确保写库成功后调用发邮件接口进行邮件发送，为了防止恶意调用，加入相应的验证 TOKEN
     */
    public function leave_msg(){

        if ($this->input->post('content') && $this->input->post('name') && $this->input->post('e_mail') && $this->input->post('tel')) {

            $content = trim($this->input->post('content'));
            $name = trim($this->input->post('name'));
            $email = trim($this->input->post('e_mail'));
            $tel = trim($this->input->post('tel'));
            $create_dt = date("Y-m-d H:i:s");//为了方便发邮件接口使用时间，所以此处直接写出为了重用

            $this->load->model('info_model','news_model');

            $add_result = $this->news_model->add_message($name, $tel, $email, $content, $create_dt);

            if ($add_result) {
                $this->load->library('common_class');
                $data['email_config_info'] = $this->common_class->getUserConfInfo('email_config_info');
                $send_result = $this->_send_email($name, $tel, $email, $content, $create_dt, $data['email_config_info']['token']);
                if ($send_result) {
                    echo 'ok';
                } else {
                    echo 'fail';
                }
            } else {
                echo 'fail';
            }
        }

    }

    /**
     * 发送邮件接口
     *  说明： 为了防止恶意调用，所以加入验证TOKEN
     * @param null $_name       姓名
     * @param null $_tel            电话
     * @param null $_email          邮件
     * @param null $_content        内容
     * @param null $_create_dt         时间
     * @param null $_token          验证TOKEN
     * @return bool TRUE OR FALSE
     */
    private function _send_email($_name = NULL, $_tel = NULL, $_email = NULL, $_content = NULL, $_create_dt = NULL, $_token = NULL){

        if (empty($_token)) {
            return FALSE;
        }

        $this->load->library(array('common_class', 'email'));
        //获取EMIAL相关配置信息
        $data['email_config_info'] = $this->common_class->getUserConfInfo('email_config_info');

        //验证TOKEN是否一致
        if ($data['email_config_info']['token'] != $_token) {
            return FALSE;
        }

        $host = $data['email_config_info']['smtp_host'];

        $user = $data['email_config_info']['smtp_user'];

        $pass = $data['email_config_info']['smtp_pass'];

        $email_addr = $data['email_config_info']['email_addr'];

        $email_title = $data['email_config_info']['email_title'];

        $send_to = $data['email_config_info']['send_to'];

        $config = $this->common_class->getEmailConfigInfo($host, $user, $pass);

        $this->email->initialize($config);

        $this->email->from($email_addr, $email_title);

        $this->email->to($send_to); //收件人
        $this->email->subject($email_title);
        $content = "<h3>姓名：" . $_name . "</h3>";
        $content .= "<h3>内容：" . $_content . "</h3>";
        $content .= "<h3>电话：" . $_tel . "</h3>";
        $content .= "<h3>邮箱：" . $_email . "</h3>";
        $content .= "<h3>时间：" . $_create_dt . "</h3>";
        $content .= "邮件来自<a href=\"http://www.freedomdream.cn\" target=\"_blank\">畅想</a>";
        $this->email->message($content);

        if (!$this->email->send()) {
            return FALSE;
        } else {
            return TRUE;
        }
    }
}

/* End of file index.php */
/* Location: ./app/controllers/index.php */