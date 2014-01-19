<?php $this->load->view('common/header'); ?>

<?php $this->load->view('common/navbar'); ?>

<link href="res/resources/css/prettyPhoto.css" rel="stylesheet" type="text/css" />

<div class="container zw_left" style=" margin-top:10px;">
    <div class="row">

        <?php $this->load->view('common/left_nav'); ?>

        <div class="col-sm-9">
            <div class="zw_conten">

                <ul class="portfolio-categ filter btn-group">
                    <li>选择分类:</li>
                    <li class="all active"><a class="btn btn-primary btn-xs" role="button" href="#">所有分类</a></li>
                    <li class="cat-item-1"><a class="btn btn-primary btn-xs" href="#" title="Category 1">老年公寓内景</a></li>
                    <li class="cat-item-2"><a class="btn btn-primary btn-xs" href="#" title="Category 2">老年公寓室外</a></li>
                    <li class="cat-item-3"><a class="btn btn-primary btn-xs" href="#" title="Category 3">老年生活设施</a></li>
                    <li class="cat-item-4"><a class="btn btn-primary btn-xs" href="#" title="Category 4">老年娱乐设施</a></li>
<!--                    <li class="cat-item-5"><a class="btn btn-primary btn-xs" href="#" title="Category 5">其他</a></li>-->
                </ul>
                <ul class="portfolio-area row">
                    <li class=" col-sm-4 portfolio-item2" data-id="id-0" data-type="cat-item-1">
                        <div><span class="image-block"> <a class="image-zoom" href="res/images/01/01.jpg"
                                                           rel="prettyPhoto[gallery]" title="房间1"><img
                                        class="img-responsive" src="res/images/01/001.jpg" alt="房间1" title="房间1"/>
                                </a> </span></div>
                    </li>
                    <li class=" col-sm-4 portfolio-item2" data-id="id-1" data-type="cat-item-2">
                        <div><span class="image-block"> <a class="image-zoom" href="res/images/02/01.jpg"
                                                           rel="prettyPhoto[gallery]" title="善延楼"><img
                                        class="img-responsive" src="res/images/02/001.jpg" alt="善延楼" title="善延楼"/>
                                </a> </span></div>
                    </li>
                    <li class=" col-sm-4 portfolio-item2" data-id="id-2" data-type="cat-item-3">
                        <div><span class="image-block"> <a class="image-zoom" href="res/images/03/01.jpg"
                                                           rel="prettyPhoto[gallery]" title="餐厅"><img
                                        class="img-responsive" src="res/images/03/001.jpg" alt="餐厅" title="餐厅"/>
                                </a> </span></div>
                    </li>
                    <li class=" col-sm-4 portfolio-item2" data-id="id-3" data-type="cat-item-4">
                        <div><span class="image-block"> <a class="image-zoom" href="res/images/04/01.jpg"
                                                           rel="prettyPhoto[gallery]" title="健身房"><img
                                        class="img-responsive" src="res/images/04/001.jpg" alt="健身房" title="健身房"/>
                                </a> </span></div>
                    </li>
                    <li class=" col-sm-4 portfolio-item2" data-id="id-4" data-type="cat-item-1">
                        <div><span class="image-block"> <a class="image-zoom" href="res/images/01/02.jpg"
                                                           rel="prettyPhoto[gallery]" title="房间2"><img
                                        class="img-responsive" src="res/images/01/002.jpg" alt="房间2" title="房间2"/>
                                </a> </span></div>
                    </li>
                    <li class=" col-sm-4 portfolio-item2" data-id="id-5" data-type="cat-item-2">
                        <div><span class="image-block"> <a class="image-zoom" href="res/images/02/02.jpg"
                                                           rel="prettyPhoto[gallery]" title="咸祉楼"><img
                                        class="img-responsive" src="res/images/02/002.jpg" alt="咸祉楼" title="咸祉楼"/>
                                </a> </span></div>
                    </li>
                    <li class=" col-sm-4 portfolio-item2" data-id="id-6" data-type="cat-item-3">
                        <div><span class="image-block"> <a class="image-zoom" href="res/images/03/02.jpg"
                                                           rel="prettyPhoto[gallery]" title="公寓内走廊"><img
                                        class="img-responsive" src="res/images/03/002.jpg" alt="公寓内走廊" title="公寓内走廊"/> </a> </span>
                        </div>
                    </li>
                    <li class=" col-sm-4 portfolio-item2" data-id="id-7" data-type="cat-item-4">
                        <div><span class="image-block"> <a class="image-zoom" href="res/images/04/02.jpg"
                                                           rel="prettyPhoto[gallery]" title="健身房1"><img
                                        class="img-responsive" src="res/images/04/002.jpg" alt="健身房1" title="健身房1"/>
                                </a> </span></div>
                    </li>
                    <li class=" col-sm-4 portfolio-item2" data-id="id-8" data-type="cat-item-1">
                        <div><span class="image-block"> <a class="image-zoom" href="res/images/01/03.jpg"
                                                           rel="prettyPhoto[gallery]" title="善延楼大厅"><img
                                        class="img-responsive" src="res/images/01/003.jpg" alt="善延楼大厅" title="善延楼大厅"/> </a> </span>
                        </div>
                    </li>
                    <li class=" col-sm-4 portfolio-item2" data-id="id-9" data-type="cat-item-2">
                        <div><span class="image-block"> <a class="image-zoom" href="res/images/02/03.jpg"
                                                           rel="prettyPhoto[gallery]" title="公寓风貌"><img
                                        class="img-responsive" src="res/images/02/003.jpg" alt="公寓风貌" title="公寓风貌"/>
                                </a> </span></div>
                    </li>
                    <li class=" col-sm-4 portfolio-item2" data-id="id-10" data-type="cat-item-3">
                        <div><span class="image-block"> <a class="image-zoom" href="res/images/03/03.jpg"
                                                           rel="prettyPhoto[gallery]" title="洗衣房"><img
                                        class="img-responsive" src="res/images/03/003.jpg" alt="洗衣房" title="洗衣房"/>
                                </a> </span></div>
                    </li>
                    <li class=" col-sm-4 portfolio-item2" data-id="id-11" data-type="cat-item-4">
                        <div><span class="image-block"> <a class="image-zoom" href="res/images/04/03.jpg"
                                                           rel="prettyPhoto[gallery]" title="健身房2"><img
                                        class="img-responsive" src="res/images/04/003.jpg" alt="健身房2" title="健身房2"/>
                                </a> </span></div>
                    </li>


                    <li class=" col-sm-4 portfolio-item2" data-id="id-16" data-type="cat-item-1">
                        <div><span class="image-block"> <a class="image-zoom" href="res/images/01/04.jpg"
                                                           rel="prettyPhoto[gallery]" title="洗手间1"><img
                                        class="img-responsive" src="res/images/01/004.jpg" alt="洗手间1" title="洗手间1"/>
                                </a> </span></div>
                    </li>
                    <li class=" col-sm-4 portfolio-item2" data-id="id-17" data-type="cat-item-2">
                        <div><span class="image-block"> <a class="image-zoom" href="res/images/02/04.jpg"
                                                           rel="prettyPhoto[gallery]" title="公寓一角 (2)"><img
                                        class="img-responsive" src="res/images/02/004.jpg" alt="公寓一角 (2)" title="公寓一角 (2)"/>
                                </a> </span></div>
                    </li>
                    <li class=" col-sm-4 portfolio-item2" data-id="id-18" data-type="cat-item-3">
                        <div><span class="image-block"> <a class="image-zoom" href="res/images/03/04.jpg"
                                                           rel="prettyPhoto[gallery]" title="衣帽间"><img
                                        class="img-responsive" src="res/images/03/004.jpg" alt="衣帽间" title="衣帽间"/>
                                </a> </span></div>
                    </li>
                    <li class=" col-sm-4 portfolio-item2" data-id="id-19" data-type="cat-item-4">
                        <div><span class="image-block"> <a class="image-zoom" href="res/images/04/04.jpg"
                                                           rel="prettyPhoto[gallery]" title="老年娱乐室"><img
                                        class="img-responsive" src="res/images/04/004.jpg" alt="老年娱乐室" title="老年娱乐室"/> </a> </span>
                        </div>
                    </li>


                    <li class=" col-sm-4 portfolio-item2" data-id="id-20" data-type="cat-item-1">
                        <div><span class="image-block"> <a class="image-zoom" href="res/images/01/05.jpg"
                                                           rel="prettyPhoto[gallery]" title="洗手间2"><img
                                        class="img-responsive" src="res/images/01/005.jpg" alt="洗手间2" title="洗手间2"/>
                                </a> </span></div>
                    </li>
                    <li class=" col-sm-4 portfolio-item2" data-id="id-21" data-type="cat-item-2">
                        <div><span class="image-block"> <a class="image-zoom" href="res/images/02/05.jpg"
                                                           rel="prettyPhoto[gallery]" title="公寓一角 (3)"><img
                                        class="img-responsive" src="res/images/02/005.jpg" alt="公寓一角 (3)" title="公寓一角 (3)"/>
                                </a> </span></div>
                    </li>
                    <li class=" col-sm-4 portfolio-item2" data-id="id-22" data-type="cat-item-3">
                        <div><span class="image-block"> <a class="image-zoom" href="res/images/03/05.jpg"
                                                           rel="prettyPhoto[gallery]" title="洗衣房"><img
                                        class="img-responsive" src="res/images/03/005.jpg" alt="洗衣房" title="洗衣房"/>
                                </a> </span></div>
                    </li>
                    <li class=" col-sm-4 portfolio-item2" data-id="id-23" data-type="cat-item-4">
                        <div><span class="image-block"> <a class="image-zoom" href="res/images/04/05.jpg"
                                                           rel="prettyPhoto[gallery]" title="老年娱乐室1"><img
                                        class="img-responsive" src="res/images/04/005.jpg" alt="老年娱乐室1" title="老年娱乐室1"/>
                                </a> </span></div>
                    </li>


                    <li class=" col-sm-4 portfolio-item2" data-id="id-24" data-type="cat-item-1">
                        <div><span class="image-block"> <a class="image-zoom" href="res/images/01/06.jpg"
                                                           rel="prettyPhoto[gallery]" title="洗手间4"><img
                                        class="img-responsive" src="res/images/01/006.jpg" alt="洗手间4" title="洗手间4"/>
                                </a> </span></div>
                    </li>
                    <li class=" col-sm-4 portfolio-item2" data-id="id-25" data-type="cat-item-2">
                        <div><span class="image-block"> <a class="image-zoom" href="res/images/02/06.jpg"
                                                           rel="prettyPhoto[gallery]" title="公寓一角 (4)"><img
                                        class="img-responsive" src="res/images/02/006.jpg" alt="公寓一角 (4)" title="公寓一角 (4)"/>
                                </a> </span></div>
                    </li>
                    <li class=" col-sm-4 portfolio-item2" data-id="id-26" data-type="cat-item-3">
                        <div><span class="image-block"> <a class="image-zoom" href="res/images/03/06.jpg"
                                                           rel="prettyPhoto[gallery]" title="医疗设备室"><img
                                        class="img-responsive" src="res/images/03/006.jpg" alt="医疗设备室" title="医疗设备室"/> </a> </span>
                        </div>
                    </li>
                    <li class=" col-sm-4 portfolio-item2" data-id="id-27" data-type="cat-item-4">
                        <div><span class="image-block"> <a class="image-zoom" href="res/images/04/06.jpg"
                                                           rel="prettyPhoto[gallery]" title="娱乐室2"><img
                                        class="img-responsive" src="res/images/04/006.jpg" alt="娱乐室2" title="娱乐室2"/>
                                </a> </span></div>
                    </li>


                    <li class=" col-sm-4 portfolio-item2" data-id="id-28" data-type="cat-item-2">
                        <div><span class="image-block"> <a class="image-zoom" href="res/images/02/09.jpg"
                                                           rel="prettyPhoto[gallery]" title="老年公寓大门"><img
                                        class="img-responsive" src="res/images/02/009.jpg" alt="老年公寓大门" title="老年公寓大门"/>
                                </a> </span></div>
                    </li>
                    <li class=" col-sm-4 portfolio-item2" data-id="id-29" data-type="cat-item-2">
                        <div><span class="image-block"> <a class="res/image-zoom" href="res/images/02/07.jpg"
                                                           rel="prettyPhoto[gallery]" title="公寓一角（4）"><img
                                        class="img-responsive" src="res/images/02/007.jpg" alt="公寓一角（4）" title="公寓一角（4）"/>
                                </a> </span></div>
                    </li>
                    <li class=" col-sm-4 portfolio-item2" data-id="id-30" data-type="cat-item-3">
                        <div><span class="image-block"> <a class="res/image-zoom" href="res/images/03/07.jpg"
                                                           rel="prettyPhoto[gallery]" title="医疗室设备室"><img
                                        class="img-responsive" src="res/images/03/007.jpg" alt="医疗室设备室" title="医疗室设备室"/>
                                </a> </span></div>
                    </li>
                    <li class=" col-sm-4 portfolio-item2" data-id="id-31" data-type="cat-item-4">
                        <div><span class="image-block"> <a class="res/image-zoom" href="res/images/04/07.jpg"
                                                           rel="prettyPhoto[gallery]" title="阅览室"><img
                                        class="img-responsive" src="res/images/04/007.jpg" alt="阅览室" title="阅览室"/>
                                </a> </span></div>
                    </li>


                    <li class=" col-sm-4 portfolio-item2" data-id="id-32" data-type="cat-item-2">
                        <div><span class="image-block"> <a class="res/image-zoom" href="res/images/02/10.jpg"
                                                           rel="prettyPhoto[gallery]" title="综合楼2"><img
                                        class="img-responsive" src="res/images/02/010.jpg" alt="综合楼2" title="综合楼2"/>
                                </a> </span></div>
                    </li>
                    <li class=" col-sm-4 portfolio-item2" data-id="id-33" data-type="cat-item-2">
                        <div><span class="image-block"> <a class="res/image-zoom" href="res/images/02/08.jpg"
                                                           rel="prettyPhoto[gallery]" title="公寓一角"><img
                                        class="img-responsive" src="res/images/02/008.jpg" alt="公寓一角" title="公寓一角"/>
                                </a> </span></div>
                    </li>
                    <li class=" col-sm-4 portfolio-item2" data-id="id-34" data-type="cat-item-2">
                        <div><span class="image-block"> <a class="res/image-zoom" href="res/images/02/11.jpg"
                                                           rel="prettyPhoto[gallery]" title="综合楼外景"><img
                                        class="img-responsive" src="res/images/02/011.jpg" alt="综合楼外景" title="综合楼外景"/> </a> </span>
                        </div>
                    </li>
					<li class=" col-sm-4 portfolio-item2" data-id="id-36" data-type="cat-item-2">
                        <div><span class="image-block"> <a class="res/image-zoom" href="res/images/02/12.jpg"
                                                           rel="prettyPhoto[gallery]" title="综合楼外景2"><img
                                        class="img-responsive" src="res/images/02/012.jpg" alt="综合楼外景2" title="综合楼外景2"/> </a> </span>
                        </div>
                    </li>
                    <li class=" col-sm-4 portfolio-item2" data-id="id-35" data-type="cat-item-4">
                        <div><span class="image-block"> <a class="res/image-zoom" href="res/images/04/08.jpg"
                                                           rel="prettyPhoto[gallery]" title="阅览室1"><img
                                        class="img-responsive" src="res/images/04/008.jpg" alt="阅览室1" title="阅览室1"/>
                                </a> </span></div>
                    </li>
                </ul>
                <!--end portfolio-area -->


            </div>
        </div>
    </div>
</div>

<!---->
<!--<div class="container zw_left" style=" margin-top:10px;">-->
<!--    <div class="row">-->
<!---->
<!--        --><?php //$this->load->view('common/left_nav'); ?>
<!---->
<!--        <div class="col-sm-9">-->
<!--            <div class="zw_conten">-->
<!--                <div class="row">-->
<!--                    <div class="col-sm-3" style=" margin-bottom:10px"><a href=""><img-->
<!--                                class="img-thumbnail img-responsive" src="res/images/qz03.gif">-->
<!--                            <h4>清镇市老年公寓</h4>-->
<!--                        </a></div>-->
<!--                    <div class="col-sm-3" style=" margin-bottom:10px"><a href=""><img-->
<!--                                class="img-thumbnail img-responsive" src="res/images/qz05.gif">-->
<!--                            <h4>清镇市老年公寓</h4>-->
<!--                        </a></div>-->
<!--                    <div class="col-sm-3" style=" margin-bottom:10px"><a href=""><img-->
<!--                                class="img-thumbnail img-responsive" src="res/images/qz06.gif">-->
<!--                            <h4>清镇市老年公寓</h4>-->
<!--                        </a></div>-->
<!--                    <div class="col-sm-3" style=" margin-bottom:10px"><a href=""><img-->
<!--                                class="img-thumbnail img-responsive" src="res/images/qz04.gif">-->
<!--                            <h4>清镇市老年公寓</h4>-->
<!--                        </a></div>-->
<!--                    <div class="col-sm-3" style=" margin-bottom:10px"><a href=""><img-->
<!--                                class="img-thumbnail img-responsive" src="res/images/qz05.gif">-->
<!--                            <h4>清镇市老年公寓</h4>-->
<!--                        </a></div>-->
<!--                    <div class="col-sm-3" style=" margin-bottom:10px"><a href=""><img-->
<!--                                class="img-thumbnail img-responsive" src="res/images/qz06.gif">-->
<!--                            <h4>清镇市老年公寓</h4>-->
<!--                        </a></div>-->
<!--                    <div class="col-sm-3" style=" margin-bottom:10px"><a href=""><img-->
<!--                                class="img-thumbnail img-responsive" src="res/images/qz07.gif">-->
<!--                            <h4>清镇市老年公寓</h4>-->
<!--                        </a></div>-->
<!--                    <div class="col-sm-3" style=" margin-bottom:10px"><a href=""><img-->
<!--                                class="img-thumbnail img-responsive" src="res/images/qz06.gif">-->
<!--                            <h4>清镇市老年公寓</h4>-->
<!--                        </a></div>-->
<!--                    <div class="col-sm-3" style=" margin-bottom:10px"><a href=""><img-->
<!--                                class="img-thumbnail img-responsive" src="res/images/qz03.gif">-->
<!--                            <h4>清镇市老年公寓</h4>-->
<!--                        </a></div>-->
<!--                    <div class="col-sm-3" style=" margin-bottom:10px"><a href=""><img-->
<!--                                class="img-thumbnail img-responsive" src="res/images/qz04.gif">-->
<!--                            <h4>清镇市老年公寓</h4>-->
<!--                        </a></div>-->
<!--                    <div class="col-sm-3" style=" margin-bottom:10px"><a href=""><img-->
<!--                                class="img-thumbnail img-responsive" src="res/images/qz05.gif">-->
<!--                            <h4>清镇市老年公寓</h4>-->
<!--                        </a></div>-->
<!--                    <div class="col-sm-3" style=" margin-bottom:10px"><a href=""><img-->
<!--                                class="img-thumbnail img-responsive" src="res/images/qz06.gif">-->
<!--                            <h4>清镇市老年公寓</h4>-->
<!--                        </a></div>-->
<!--                    <div class="col-sm-3" style=" margin-bottom:10px"><a href=""><img-->
<!--                                class="img-thumbnail img-responsive" src="res/images/qz03.gif">-->
<!--                            <h4>清镇市老年公寓</h4>-->
<!--                        </a></div>-->
<!--                    <div class="col-sm-3" style=" margin-bottom:10px"><a href=""><img-->
<!--                                class="img-thumbnail img-responsive" src="res/images/qz03.gif">-->
<!--                            <h4>清镇市老年公寓</h4>-->
<!--                        </a></div>-->
<!--                    <div class="col-sm-3" style=" margin-bottom:10px"><a href=""><img-->
<!--                                class="img-thumbnail img-responsive" src="res/images/qz07.gif">-->
<!--                            <h4>清镇市老年公寓</h4>-->
<!--                        </a></div>-->
<!--                    <div class="col-sm-3" style=" margin-bottom:10px"><a href=""><img-->
<!--                                class="img-thumbnail img-responsive" src="res/images/qz04.gif">-->
<!--                            <h4>清镇市老年公寓</h4>-->
<!--                        </a></div>-->
<!--                    <div class="col-sm-3" style=" margin-bottom:10px"><a href=""><img-->
<!--                                class="img-thumbnail img-responsive" src="res/images/qz04.gif">-->
<!--                            <h4>清镇市老年公寓</h4>-->
<!--                        </a></div>-->
<!--                    <div class="col-sm-3" style=" margin-bottom:10px"><a href=""><img-->
<!--                                class="img-thumbnail img-responsive" src="res/images/qz05.gif">-->
<!--                            <h4>清镇市老年公寓</h4>-->
<!--                        </a></div>-->
<!--                    <div class="col-sm-3" style=" margin-bottom:10px"><a href=""><img-->
<!--                                class="img-thumbnail img-responsive" src="res/images/qz06.gif">-->
<!--                            <h4>清镇市老年公寓</h4>-->
<!--                        </a></div>-->
<!--                    <div class="col-sm-3" style=" margin-bottom:10px"><a href=""><img-->
<!--                                class="img-thumbnail img-responsive" src="res/images/qz07.gif">-->
<!--                            <h4>清镇市老年公寓</h4>-->
<!--                        </a></div>-->
<!--                    <div class="col-sm-3" style=" margin-bottom:10px"><a href=""><img-->
<!--                                class="img-thumbnail img-responsive" src="res/images/qz06.gif">-->
<!--                            <h4>清镇市老年公寓</h4>-->
<!--                        </a></div>-->
<!--                    <div class="col-sm-3" style=" margin-bottom:10px"><a href=""><img-->
<!--                                class="img-thumbnail img-responsive" src="res/images/qz03.gif">-->
<!--                            <h4>清镇市老年公寓</h4>-->
<!--                        </a></div>-->
<!--                    <div class="col-sm-3" style=" margin-bottom:10px"><a href=""><img-->
<!--                                class="img-thumbnail img-responsive" src="res/images/qz04.gif">-->
<!--                            <h4>清镇市老年公寓</h4>-->
<!--                        </a></div>-->
<!--                    <div class="col-sm-3" style=" margin-bottom:10px"><a href=""><img-->
<!--                                class="img-thumbnail img-responsive" src="res/images/qz05.gif">-->
<!--                            <h4>清镇市老年公寓</h4>-->
<!--                        </a></div>-->
<!--                    <div class="col-sm-3" style=" margin-bottom:10px"><a href=""><img-->
<!--                                class="img-thumbnail img-responsive" src="res/images/qz06.gif">-->
<!--                            <h4>清镇市老年公寓</h4>-->
<!--                        </a></div>-->
<!--                    <div class="col-sm-3" style=" margin-bottom:10px"><a href=""><img-->
<!--                                class="img-thumbnail img-responsive" src="res/images/qz03.gif">-->
<!--                            <h4>清镇市老年公寓</h4>-->
<!--                        </a></div>-->
<!--                </div>-->
<!--                <ul class="pagination pull-right">-->
<!--                    <li class="disabled"><a href="#">«</a></li>-->
<!--                    <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>-->
<!--                    <li><a href="#">2</a></li>-->
<!--                    <li><a href="#">3</a></li>-->
<!--                    <li><a href="#">4</a></li>-->
<!--                    <li><a href="#">5</a></li>-->
<!--                    <li><a href="#">»</a></li>-->
<!--                </ul>-->
<!--                <div class="clearfix"></div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<?php $this->load->view('common/footer'); ?>

<script src="res/resources/js/jquery.min.js" type="text/javascript"></script>
<script src="res/resources/js/jquery.quicksand.js" type="text/javascript"></script>
<script src="res/resources/js/jquery.easing.js" type="text/javascript"></script>
<script src="res/resources/js/script.js" type="text/javascript"></script>
<script src="res/resources/js/jquery.prettyPhoto.js" type="text/javascript"></script>

<script>
    $(document).ready(function () {
        $("#environment").attr('class', 'active');
    });
</script>