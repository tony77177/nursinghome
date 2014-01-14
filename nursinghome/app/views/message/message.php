<?php $this->load->view('common/header'); ?>

<?php $this->load->view('common/navbar'); ?>

<div class="container zw_left" style=" margin-top:10px;">
    <div class="row">

        <?php $this->load->view('common/left_nav'); ?>

        <div class="col-sm-9">
            <div class="zw_conten">
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">您的姓名</label>

                        <div class="col-sm-10">
                            <input class="form-control" placeholder="姓名" type="text" id="msg_name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">您的联系电话</label>

                        <div class="col-sm-10">
                            <input class="form-control" placeholder="电话号码或者手机号码" type="number" id="msg_tel">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">您的邮箱</label>

                        <div class="col-sm-10">
                            <input class="form-control" placeholder="邮箱地址" type="email" id="msg_email">
                        </div>
                    </div>
<!--                    <div class="form-group">-->
<!--                        <label class="col-sm-2 control-label">您的地址</label>-->
<!---->
<!--                        <div class="col-sm-10">-->
<!--                            <input class="form-control" placeholder="清镇市....." type="text">-->
<!--                        </div>-->
<!--                    </div>-->
                    <div class="form-group">
                        <label class="col-sm-2 control-label">留言内容</label>

                        <div class="col-sm-10">
                            <textarea class="form-control" rows="3" style="resize:none;" id="msg_content"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <button type="button" class="btn btn-default" id="btn_msg">确定提交</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('common/footer'); ?>

<script>
    $(document).ready(function () {
        $("#message").attr('class', 'active');
        $("#left_message").addClass("active");
        $("#btn_msg").click(function () {
            var content = $("#msg_content").val();
            var name = $("#msg_name").val();
            var e_mail = $("#msg_email").val();
            var tel = $("#msg_tel").val();

            var email_reg = /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
            var tel_reg = /(^[0-9]{3,4}\-[0-9]{7,8}\-[0-9]{3,4}$)|(^[0-9]{3,4}\-[0-9]{7,8}$)|(^[0-9]{7,8}\-[0-9]{3,4}$)|(^[0-9]{7,15}$)/;

            if (content == '' || name == '' || e_mail == '' || tel == '') {
                art.dialog({
                    title: '提示',
                    content: '相关信息不能为空',
                    icon: 'error',
                    time: 1
                });
            } else {
                if (!tel_reg.test(tel)) {
                    art.dialog({
                        title: '提示',
                        content: '请输入正确的联系电话',
                        icon: 'error',
                        time: 1
                    });
                } else if (!email_reg.test(e_mail)) {
                    art.dialog({
                        title: '提示',
                        content: '请输入有效的Email地址',
                        icon: 'error',
                        time: 1
                    });
                } else {
                    art.dialog({
                        id: 'send_mail',
                        cancel: false,
                        drag: false,
                        resize: false
                    });
                    art.dialog.get('send_mail').title('提交中...').lock();
                    $.ajax({
                        url: "index.php/index/leave_msg",
                        type: "POST",
                        data: {content: content, name: name, e_mail: e_mail, tel: tel},
                        success: function (msg) {
                            art.dialog.get('send_mail').close();
                            if (msg == 'fail') {
                                art.dialog({
                                    id: 'warning',
                                    title: '提示',
                                    content: '提交失败，请稍后再试',
                                    icon: 'error',
                                    time: 1,
                                    drag: false,
                                    resize: false
                                });
                            } else {
                                art.dialog({
                                    id: 'succeed',
                                    title: '提示',
                                    content: '留言成功，我们会尽快和您联系',
                                    icon: 'succeed',
                                    time: 2,
                                    drag: false,
                                    resize: false
                                });
                                $("#msg_content").val("");
                                $("#msg_name").val("");
                                $("#msg_email").val("");
                                $("#msg_tel").val("");
                            }
                        },
                        error: function () {
                            art.dialog.get('send_mail').close();
                            art.dialog({
                                id: 'warning',
                                title: '提示',
                                content: '服务器连接出错，请稍后再试',
                                icon: 'error',
                                time: 2,
                                drag: false,
                                resize: false
                            });
                        }
                    });
                }
            }
        });
    });
</script>