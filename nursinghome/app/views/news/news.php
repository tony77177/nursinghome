<?php $this->load->view('common/header'); ?>

<?php $this->load->view('common/navbar'); ?>


<div class="container zw_left" style=" margin-top:10px;">
    <div class="row">

        <?php $this->load->view('common/left_nav'); ?>

        <div class="col-sm-9">
            <div class="zw_conten">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>新闻标题</th>
                            <th>时间</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            for ($i = 0; $i < count($news_list); $i++) {
                        ?>

                            <tr>
                                <td><?=$i+1;?></td>
                                <td title="<?=$news_list[$i]["title"];?>">
                                    <a href="<?php echo site_url('news/read') . '/' . $news_list[$i]["id"]; ?>" target="_blank">
                                        <?php echo $this->common_class->SubContents($news_list[$i]["title"], 30); ?>
                                    </a>
                                </td>
                                <td><?=$news_list[$i]['create_dt'];?></td>
                            </tr>

                        <?php
                            }
                        ?>
                    </tbody>

                </table>

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
        $("#news").attr('class', 'active');
    });
</script>