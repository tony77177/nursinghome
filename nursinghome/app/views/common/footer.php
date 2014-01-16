<!--底部==============================-->
<div style=" background:#E4E2E4; padding:10px 0; margin-top:10px">
    <div class="container">
        <div class="row">
            <div class="col-sm-9" style=" color:#666">
                <p>Copyright (C) 2013 贵阳市清镇市老年公寓 All Rights Reserved.</p>
                <p>联系人：王院长 13885103148 &emsp; 王主任 13984076226</p>
                <p>公寓地址：贵州省贵阳市清镇市地质路（115地质队旁）</p>
            </div>
            <div class="col-sm-3 hidden-xs hidden-sm"><img src="res/resources/img/top3.png"></div>
        </div>
    </div>
</div>
<!--底部end==============================-->

<!--连接js===================================================================================-->
<script src="res/resources/js/jquery.js"></script>
<script src="res/bootstrap/js/bootstrap.js"></script>
<!--连接js end===============================================================================-->

<!--导航停留顶部js======-->
<script src="res/resources/js/stickUp.min.js"></script>
<script type="text/javascript">
    //initiating jQuery
    jQuery(function($) {
        $(document).ready( function() {
            //enabling stickUp on the '.navbar-wrapper' class
            $('.navbar').stickUp({ //enabling marginTop with the 'auto' setting
                marginTop: 'auto'
            });
        });
    });
</script>
<!--导航停留顶部jsEND======-->

<?php $this->load->view('common/contact_box'); ?>

<!--左侧弹出QQ======================================================================================-->
<div id="messageBoardContainer" class="hidden-sm hidden-xs">
    <div id="messageBoard">
        <div class="wrap">
            <div class="content"><a href="javascript:if(g_fnQuirkyPopupClose){g_fnQuirkyPopupClose()};" title="关闭"
                                    class="cose" rel="nofollow"> </a> <a
                    href="http://wpa.qq.com/msgrd?V=1&Uin=642160001&Site=www.baiduo&Menu=yes"
                    title="点击联系客服 QQ:642160001" class="qq " rel="nofollow"> </a></div>
        </div>
    </div>
    <a href="javascript:;" id="quirkyPopupShowBtn" rel="nofollow"></a></div>
<script src="res/resources/js/qqfudong.js" type="text/javascript"></script>
<!--左侧弹出QQ======================================================================================-->
</body>
</html>
