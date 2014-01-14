// JavaScript Document
$("#onlineOpen").mouseover(function () {
    var onService_panel = $("#onService_panel");
    onService_panel.animate({right: 0}, function () {
    });
    $(this).hide();
});
$("#onlineClose").click(function () {
    var onService_panel = $("#onService_panel");
    onService_panel.animate({right: -102});
    onService_panel.find(".online_tab").fadeOut(100);
    $("#onlineOpen").show();

});
$(".online_icon").click(function () {
    $(".online_tab").fadeOut(100);
    var onclickId = $(this).attr("id");
    var findparent_tab;
    switch (onclickId) {
        case "online_tel_icon":
            findparent_tab = $("#onlineTelTab");
            break;
        case "online_qq_icon":
            findparent_tab = $("#onlineQQTab");
            break;
        case "online_message_icon":
            findparent_tab = $("#onlineMessageTab");
            break;
    }
    findparent_tab.fadeIn(100);
});

$("#onService_panel .tab_close").click(function () {
    $(this).parents(".online_tab").hide();
});

function checkLen(obj, maxs) {
    var maxChars = maxs;//����ַ��� 
    if (obj.value.length > maxChars) {
        obj.value = obj.value.substring(0, maxChars);
    }
    var curr = maxChars - obj.value.length;
    $(obj).parents("dl").find(".text_length b").text(curr.toString());
}

$(".submitBut").click(function(){
    var content = $("#content2").val();
    var name = $("#name").val();
    var e_mail = $("#e_mail").val();
    var tel = $("#tel").val();

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
                        document.msg_form.reset();
                        $(".tab_close").click();
//
//
//                        $("#content2").val("");
//                        $("#name").val("");
//                        $("#name").val("");
//                        $("#e_mail").val("");
//                        document.form1.reset();
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