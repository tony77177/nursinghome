<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**]
 * 首页信息获取模型
 * Created by PhpStorm.
 * User: zhaoyu
 * Date: 14-1-2
 * Time: 下午2:47
 */

class Info_model extends CI_Model{

    function __construct() {
        parent::__construct();
        $this->load->model('common_model');
    }

    /**
     * 获取新闻列表总数
     * @return mixed    新闻总条数
     */
    function get_news_total_num(){
        $sql = "SELECT COUNT(*) AS num FROM t_news";
        $count = $this->common_model->getTotalNum($sql, 'default');
        return $count;
    }

    /**
     * 获取新闻列表
     * @param int $offset       偏移量
     * @param int $page_size    显示条数
     * @param string $where     条件查询
     * @return mixed            结果集
     */
    function get_news_list($offset = NULL, $page_size = NULL, $where = NULL)
    {
        $list_sql = "SELECT * FROM t_news $where ORDER BY create_dt DESC LIMIT $offset,$page_size";
        $result = $this->common_model->getDataList($list_sql, 'default');
        return $result;
    }


    /**
     * 获取新闻详情
     * @param   string $_id     新闻 ID
     * @return mixed            结果集
     */
    function get_news_details($_id){
        $info_sql = "SELECT * FROM t_news WHERE id='" . $_id . "'";
        $result = $this->common_model->getDataList($info_sql, 'default');
        if (empty($result)) {
            return FALSE;
        } else {
            return $result[0];
        }
    }


    /**
     * 获取相邻新闻列表
     * @param   $_curr_dt 当前时间
     * @param   $flag       标志位，默认取上一篇新闻ID
     * @return mixed            结果集
     */
    function get_neighbor_news_info($_curr_dt, $flag = TRUE){

        if ($flag) {
            $info_sql = "SELECT id FROM t_news WHERE create_dt>'" . $_curr_dt . "' ORDER BY create_dt ASC LIMIT 1";
        } else {
            $info_sql = "SELECT id FROM t_news WHERE create_dt<'" . $_curr_dt . "' ORDER BY create_dt DESC LIMIT 1";
        }

        $result = $this->common_model->getDataList($info_sql, 'default');

        if (empty($result)) {
            return FALSE;
        } else {
            return $result[0];
        }
    }

    /**
     * 添加留言信息
     * @param   $_name  姓名
     * @param   $_tel       电话
     * @param   $_email     邮件
     * @param   $_content   内容
     * @param   $create_dt  时间
     * @return bool TRUE OR FALSE
     */
    function add_message($_name, $_tel, $_email, $_content, $create_dt){
        $insert_sql = "INSERT INTO t_message(name,phone_number,email,content,create_dt) VALUES('" . $_name . "','" . $_tel . "','" . $_email . "','" . $_content . "','" . $create_dt . "')";
        $result = $this->common_model->execQuery($insert_sql, 'default', TRUE);
        return $result;
    }

}

/* End of file info_model.php */
/* Location: ./app/models/info_model.php */