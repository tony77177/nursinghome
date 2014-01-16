<?php $this->load->view('common/header'); ?>

<?php $this->load->view('common/navbar'); ?>

<!--主体 start==============================-->

<!--轮播==============================-->

<div class="container">
    <div id="myCarousel" class="carousel slide hidden-xs" style=" margin-top:10px;" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class=""></li>
            <li class="" data-target="#myCarousel" data-slide-to="1"></li>
            <li class="active" data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" style="border-radius:4px">
            <div class="item"><img style=" width:100%; height:350px; border-radius:4px" src="res/images/1.jpg"></div>
            <div class="item"><img style=" width:100%; height:350px; border-radius:4px" src="res/images/2.jpg"></div>
            <div class="item active"><img style=" width:100%; height:350px; border-radius:4px" src="res/images/3.jpg"></div>
        </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span
                class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control"
                                                                        href="#myCarousel" data-slide="next"><span
                class="glyphicon glyphicon-chevron-right"></span></a></div>
</div>

<!--轮播end==============================-->

<!--一楼====-->

<div id="zw_main01" class="container">
    <div class="row">
        <div class="col-sm-8">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="panel-title">清镇市老年公寓简介</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-7"><img alt="清镇市养老院" class="img-thumbnail" src="res/images/sd.jpg"></div>
                        <div class="col-sm-5" style="font-size:16px">
                            <P style=" text-indent:25px">
                                清镇市老年公寓是由清镇市民政局创办的社会福利机构，是实施“老有所养”计划的重要项目。2010年建成投入使用，公寓占地总面积17.2亩，建筑面积
                                5300平方米，设床位230张，公寓房间均配有独立卫生间、淋浴、坐式马桶、电视、电炉、衣柜等生活设施。是为老年人服务的非营利性老年社会福利机构。</P>

                            <p class="hidden-sm hidden-xs" style=" text-indent:25px"> 公寓地址：贵州省贵阳市清镇市地质路（115地质队旁）</p>
                            </P>
                            <a href="<?php echo site_url('index/about');?>" class="btn btn-success btn-sm pull-right"><span
                                    class="glyphicon glyphicon-share-alt">&nbsp;</span>详情...</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">在线咨询</h3>
                </div>
                <div class="panel-body zw-panel-body">
                    <p><span class="glyphicon glyphicon-earphone">&nbsp;</span>热线电话：<b>13885103148</b></p>

                    <p>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<b>13984076226</b>
                    </p>

                    <p><span class="glyphicon glyphicon-envelope">&nbsp;</span>联系邮箱：<b>642160001@qq.com</b></p>

                    <p><span class="glyphicon glyphicon-user">&nbsp;</span>联系 QQ：<a class="btn btn-success btn-sm"
                                                                                    href="http://wpa.qq.com/msgrd?V=1&Uin=642160001&Site=www.baiduo&Menu=yes">642160001</a>
                    </p>

                    <p><img class="img-responsive" src="res/resources/img/erweima.jpg"/></p>
                </div>
            </div>
        </div>
    </div>
</div>

<!--二楼====-->

<!--三楼====-->
<div id="zw_main03" class="container">
    <div class="row">
        <div class="col-sm-5">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">新闻动态<a class="pull-right" style=" font-size:12px; color:#C33"
                                                   href="<?php echo site_url('news');?>">更多新闻</a></h3>
                </div>
                <div class="panel-body" style=" padding:0;">
                    <table class="table" style="margin-bottom:14px">
                        <tbody>

                        <?php
                            for ($i = 0; $i < count($news_list); $i++) {
                        ?>

                            <tr>

                                <td title="<?=$news_list[$i]["title"];?>">
                                    <a href="<?php echo site_url('news/read') . '/' . $news_list[$i]["id"]; ?>" target="_blank">
                                        <?php echo $this->common_class->SubContents($news_list[$i]["title"]);?>
                                    </a>
                                </td>

                                <td title="<?=$news_list[$i]['create_dt'];?>">
                                    <?php echo date("Y-m-d", strtotime($news_list[$i]['create_dt'])); ?>
                                </td>
                            </tr>

                        <?php
                            }
                        ?>
                        </tbody>

                        <?php
                            if (count($news_list) == 0) {
                                echo "<p align=\"center\" style=\"color:red\">没有数据！</p>";
                            }
                        ?>

                    </table>
                </div>
            </div>
        </div>

        <div class="col-sm-7">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">图片展示<a class="pull-right" style=" font-size:12px; color:#C33"
                                                   href="<?php echo site_url('index/environment');?>">更多图片</a></h3>
                </div>
                <div class="panel-body" style=" padding:10px; padding-bottom:0;">
                    <div class="row" style=" margin-bottom:0">
                        <div class="col-sm-4">
                            <div class="thumbnail"><a href="<?php echo site_url('index/environment');?>"><img src="res/images/01/002.jpg" alt="老年公寓内景">
                                    <h5>老年公寓内景</h5>
                                </a></div>
                        </div>
                        <div class="col-sm-4">
                            <div class="thumbnail"><a href="<?php echo site_url('index/environment');?>"><img src="res/images/02/009.jpg" alt="老年公寓室外">
                                    <h5>老年公寓室外</h5>
                                </a></div>
                        </div>
                        <div class="col-sm-4">
                            <div class="thumbnail"><a href="<?php echo site_url('index/environment');?>"><img src="res/images/03/001.jpg" alt="老年生活设施">
                                    <h5>老年生活设施</h5>
                                </a></div>
                        </div>
                        <div class="col-sm-4">
                            <div class="thumbnail"><a href="<?php echo site_url('index/environment');?>"><img src="res/images/04/007.jpg" alt="老年娱乐设施">
                                    <h5>老年娱乐设施</h5>
                                </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!--主体end==============================-->

<?php $this->load->view('common/footer'); ?>

<script>
    $(document).ready(function () {
        $("#index").attr('class', 'active');
    });
</script>