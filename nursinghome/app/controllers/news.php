<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 新闻控制器
 * Created by PhpStorm.
 * User: zhaoyu
 * Date: 14-1-13
 * Time: 下午3:06
 */

class News extends CI_Controller{

    private $per_page = 20; //每页显示数据条数
    private $uri_segment = 2; //分页方法自动测定你 URI 的哪个部分包含页数

    function __construct(){
        parent::__construct();
        $this->load->library(array('common_class', 'pagination'));
        $this->load->model('info_model','news_model');
    }

    /**
     * 新闻列表
     */
    public function index(){

        $offset = 0; //偏移量

        if ($this->input->get('per_page')) {
            $offset = ((int)$this->input->get('per_page') - 1) * $this->per_page;//计算偏移量
        }

        $count = $this->news_model->get_news_total_num(); //总条数

        //初始化分页数据
        $config = $this->common_class->getPageConfigInfo('/news/?', $count, $this->per_page, $this->uri_segment);
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();

        $data['news_list'] = $this->news_model->get_news_list($offset, $this->per_page);
        $this->load->view('news/news', $data);
    }

    /**
     * 读取新闻
     * @param string $_id  新闻 ID
     */
    public function read($_id = NULL){
        if (!isset($_id)) {
            redirect('index');
        } else {
            $data['news_info'] = $this->news_model->get_news_details($_id);
            if (!$data['news_info']) {
                redirect('index');
            } else {

                $_prev_id = $this->news_model->get_neighbor_news_info($data['news_info']['create_dt']); //上一篇ID
                $data['prev_id'] = $_prev_id['id'];

                $_next_id = $this->news_model->get_neighbor_news_info($data['news_info']['create_dt'], FALSE); //下一篇ID
                $data['next_id'] = $_next_id['id'];

                $this->load->view('news/read', $data);
            }
        }
    }

}

/* End of file news.php */
/* Location: ./app/controllers/news.php */