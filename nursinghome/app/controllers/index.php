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
        $this->load->model('info_model','news_model');
        $this->load->library('common_class');
    }

    /**
     * 首页
     */
    public function index(){
        $data['news_list'] = $this->news_model->get_news_list($this->offset, $this->per_page);
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

}

/* End of file index.php */
/* Location: ./app/controllers/index.php */