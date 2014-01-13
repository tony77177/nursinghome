<?php $this->load->view('common/header'); ?>

<?php $this->load->view('common/navbar'); ?>

<div class="container zw_left" style=" margin-top:10px;">
    <div class="row">

        <?php $this->load->view('common/left_nav'); ?>

        <div class="col-sm-9">
            <div class="zw_conten">
                <h1><?php echo $news_info['title'];?></h1>

                <p class="pull-right"><?php echo $news_info['create_dt'];?></p>
                <span class="clearfix"></span>
                <hr style="margin-top:0">

                <div id="content">
                    <?php echo $news_info['content'];?>
                </div>



                <ul class="pager">

                    <li class="previous <?php if (!$prev_id) {
                        echo 'disabled';
                    } ?>">
                        <a href="<?php if (!$prev_id) {
                            echo 'javascript;';
                        } else {
                            echo site_url('news/read') . '/' . $prev_id;
                        } ?>">
                            &larr;上一篇
                        </a>
                    </li>

                    <li class="next <?php if (!$next_id) {
                        echo 'disabled';
                    } ?>">
                        <a href="<?php if (!$next_id) {
                            echo 'javascript;';
                        } else {
                            echo site_url('news/read') . '/' . $next_id;
                        } ?>">
                           下一篇 &rarr;
                        </a>
                    </li>

                </ul>

                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('common/footer'); ?>

<script>
    $(document).ready(function () {
        $("#news").attr('class', 'active');
        $("#content img").addClass("img-responsive");
    });
</script>