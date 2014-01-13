<!--底部==============================-->
<div style=" background:#E4E2E4; padding:10px 0; margin-top:10px">
    <div class="container">
        <div class="row">
            <div class="col-sm-9" style=" color:#666">
                <p>Copyright (C) 2013 贵阳市清镇市老年公寓 All Rights Reserved.</p>
                <p>联系人：王院长　 联系电话：13885103148，13984076226</p>
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
<!--回到顶部js======-->
<!--<div class="actGotop hidden-sm hidden-xs"><a href="javascript:;" title="Top"></a></div>
<script type="text/javascript">
$(function(){
	$(window).scroll(function() {
		if($(window).scrollTop() >= 100){
			$('.actGotop').fadeIn(300);
		}else{
			$('.actGotop').fadeOut(300);
		}
	});
	$('.actGotop').click(function(){$('html,body').animate({scrollTop: '0px'}, 800);});
});
</script> -->
<!--回到顶部jsend======-->
<!--左侧浮动联系方式=============================================================================-->
<div class="main hidden-sm hidden-xs">
    <div class="main_c">
        <div id="onService_panel">
            <div class="onService_panel_s">
                <div class="online_boxs">
                    <div class="boxs_t"><span class="boxs_t_l"></span><span class="boxs_t_m"></span><span class="boxs_t_r"></span></div>
                    <div class="boxs_m_l">
                        <div class="boxs_m_r">
                            <div class="box_m_m">
                                <div id="onlineList"> <em class="online_close" id="onlineClose" title="关闭"></em>
                                    <div class="online_open  " id="onlineOpen"></div>
                                    <div id="online_tel_icon" class="online_icon"> <span class="pic"><img src="res/resources/img/online_tel.png" /></span> <span class="name">&#30005;&#35805;&#30452;&#21628;</span> </div>
                                    <div id="online_qq_icon" class="online_icon"> <span class="pic"><img src="res/resources/img/online_qq.png" /></span> <span class="name">&#22312;&#32447;&#23458;&#26381;</span> </div>
                                    <div id="online_message_icon" class="online_icon"> <span class="pic"><img src="res/resources/img/online_message.png" /></span> <span class="name">&#22312;&#32447;&#30041;&#35328;</span> </div>
                                    <div id="online_email_icon" class="online_icon"> <span class="pic"><a href="mailto:1234567@qq.com"><img src="res/resources/img/online_email.png" /></a></span> <span class="name">&#21457;&#36865;&#37038;&#20214;</span> </div>
                                    <div id="online_address_icon" class="online_icon"> <span class="pic"><a href=""><img src="res/resources/img/online_address.png" /></a></span> <span class="name">&#20225;&#19994;&#22320;&#26631;</span> </div>
                                    <div id="onlineTelTab" class="online_tab">
                                        <div class="online_boxs">
                                            <div class="boxs_t"><span class="boxs_t_l"></span><span class="boxs_t_m"></span><span class="boxs_t_r"></span></div>
                                            <div class="boxs_m_l">
                                                <div class="boxs_m_r">
                                                    <div class="box_m_m">
                                                        <div id="onlineTel" class="online_tab_c"> <small class="sanjiao"></small><small class="tab_close"></small>
                                                            <dl>
                                                                <dt><strong>&#32852;&#31995;&#25105;&#20204;：</strong></dt>
                                                                <dd><strong>&#32852;&#31995;&#20154;：</strong><span>王宝强</span></dd>
                                                                <dd><strong>&#30005;&#35805;：</strong><span>13000130005</span></dd>
                                                            </dl>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="boxs_b"><span class="boxs_b_l"></span><span class="boxs_b_m"></span><span class="boxs_b_r"></span></div>
                                        </div>
                                    </div>
                                    <div id="onlineQQTab" class="online_tab">
                                        <div class="online_boxs">
                                            <div class="boxs_t"><span class="boxs_t_l"></span><span class="boxs_t_m"></span><span class="boxs_t_r"></span></div>
                                            <div class="boxs_m_l">
                                                <div class="boxs_m_r">
                                                    <div class="box_m_m">
                                                        <div id="onlineQQ" class="online_tab_c"> <small class="sanjiao"></small><small class="tab_close"></small>
                                                            <dl>
                                                                <dt>经理 </dt>
                                                                <dd> <a target="_blank" href="#"><img border="0" src="http://wpa.qq.com/pa?p=2:1234567:51" alt="点击这里给我发消息" title="点击这里给我发消息"/></a> </dd>
                                                                <dt>销售 </dt>
                                                                <dd> <a target="_blank" href="#"><img border="0" src="http://wpa.qq.com/pa?p=2:1234567:51" alt="点击这里给我发消息" title="点击这里给我发消息"/></a> </dd>
                                                            </dl>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="boxs_b"><span class="boxs_b_l"></span><span class="boxs_b_m"></span><span class="boxs_b_r"></span></div>
                                        </div>
                                    </div>
                                    <div id="onlineMessageTab" class="online_tab">
                                        <div class="online_boxs">
                                            <div class="boxs_t"><span class="boxs_t_l"></span><span class="boxs_t_m"></span><span class="boxs_t_r"></span></div>
                                            <div class="boxs_m_l">
                                                <div class="boxs_m_r">
                                                    <div class="box_m_m">
                                                        <div id="onlineMessage" class="online_tab_c"> <small class="sanjiao"></small><small class="tab_close"></small>
                                                            <dl>
                                                                <dt>
                                                                    <textarea onfocus="h_con()" onblur="s_con()" name="content2" id="content2" onkeyup="checkLen(this,200)"></textarea>
                                                                </dt>
                                                                <dd class="text_length">还可输入字符<b>200</b>（限制字符200）</dd>
                                                                <dd>
                                                                    <label>您的姓名：</label>
                                                                    <input type="text" class="text_input" name="name" id="name"  maxlength="20"/>
                                                                </dd>
                                                                <dd>
                                                                    <label>您的邮箱：</label>
                                                                    <input type="text" class="text_input" name="e_mail" id="e_mail" maxlength="50"/>
                                                                </dd>
                                                                <dd>
                                                                    <label>您的电话：</label>
                                                                    <input type="text" class="text_input" name="tel" id="tel" maxlength="30"/>
                                                                    <input type="button" class="submitBut" value="提交" onclick="sub_check(446632)" />
                                                                </dd>
                                                            </dl>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="boxs_b"><span class="boxs_b_l"></span><span class="boxs_b_m"></span><span class="boxs_b_r"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="boxs_b"><span class="boxs_b_l"></span><span class="boxs_b_m"></span><span class="boxs_b_r"></span></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="res/resources/js/online.js"></script>
<!--左侧浮动联系方式=============================================================================-->
<!--左侧弹出QQ======================================================================================-->
<div id="messageBoardContainer" class="hidden-sm hidden-xs">
    <div id="messageBoard">
        <div class="wrap">
            <div class="content"> <a href="javascript:if(g_fnQuirkyPopupClose){g_fnQuirkyPopupClose()};" title="关闭" class="cose" rel="nofollow"> </a> <a href="http://sighttp.qq.com/authd?IDKEY=1234567" title="点击联系客服 QQ:1234567" class="qq " rel="nofollow"> </a></div>
        </div>
    </div>
    <a href="javascript:;" id="quirkyPopupShowBtn" rel="nofollow"></a></div>
<script src="res/resources/js/qqfudong.js" type="text/javascript"></script>
<!--左侧弹出QQ======================================================================================-->
</body>
<!-- InstanceEnd --></html>
