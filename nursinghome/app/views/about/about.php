<?php $this->load->view('common/header'); ?>

<?php $this->load->view('common/navbar'); ?>

<div class="container zw_left" style=" margin-top:10px;">
    <div class="row">

        <?php $this->load->view('common/left_nav');?>

        <div class="col-sm-9">
            <div class="zw_conten">
                <h1>清镇市老年公寓院简介</h1>

                <p>
                    清镇市老年公寓是由清镇市民政局创办的社会福利机构，是实施“老有所养”计划的重要项目。公寓坐落于美丽的清镇市北门，与著名的巢凤寺隔河相望，环境幽静，空气清新。2010年建成投入使用，公寓占地总面积17.2亩，建筑面积
                    5300平方米，设床位230张，公寓房间均配有独立卫生间、淋浴、坐式马桶、电视、电炉、衣柜等生活设施；食堂、娱乐室、健身房1100平方米，其中食堂550平方米、健身娱乐550平方米，院内设施齐全，是为老年人服务的非营利性老年社会福利机构。</p>

                <p>清镇市老年公寓是老人托养、寄养、自费服务的理想居所。职工将以饱满的服务热情，良好的服务姿态投入到社会养老服务工作中去,树立“建管并重”
                    、“管理至上”的工作理念，提升规范化管理水平，增强人性化，便民化服务能力，向“管理制度化、院务规范化、服务人性化”的模式前行。</p>
                <img class="img-responsive" src="res/images/qz05.gif"></div>
        </div>
    </div>
</div>

<?php $this->load->view('common/footer'); ?>

<script>
    $(document).ready(function () {
        $("#about").attr('class', 'active');
        $("#left_about").addClass("active");
    });
</script>