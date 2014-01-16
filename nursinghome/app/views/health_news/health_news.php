<?php $this->load->view('common/header'); ?>

<?php $this->load->view('common/navbar'); ?>


<div class="container zw_left" style=" margin-top:10px;">
    <div class="row">

        <?php $this->load->view('common/left_nav'); ?>

        <div class="col-sm-9">
            <div class="zw_conten">

                <?php
                    for ($i = 0; $i < count($news_list); $i++) {
                ?>

                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <a title="点击详情查看" href="<?php echo site_url('health_news/read') . '/' . $news_list[$i]["id"]; ?>" target="_blank">
                                <h3 class="panel-title"><?=$news_list[$i]["title"];?></h3>
                            </a>
                        </div>
                        <div class="panel-body">
                            <a title="点击详情查看" href="<?php echo site_url('health_news/read') . '/' . $news_list[$i]["id"]; ?>" target="_blank">
                                <?php echo $this->common_class->SubContents($news_list[$i]["content"], 400); ?>
                            </a>
                        </div>
                    </div>

                <?php
                    }
                ?>

                <?php
                if (count($news_list) == 0) {
                    echo "<p align=\"center\" style=\"color:red\">没有数据！</p>";
                }
                ?>


                <?php echo $pagination;?>


                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('common/footer'); ?>

<script>
    $(document).ready(function () {
        $("#health_news").attr('class', 'active');
    });
</script>