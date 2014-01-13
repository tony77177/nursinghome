// JavaScript Document
$(function(){

		
    var fl = $("#floatLoginLayer");
	setCookie("floatLoginLayer", 0, 60);
	setCookie("16jiaju_user_id", 0, 60);
    $(window).scroll(function(){
        if(parseInt($(window).scrollTop()) >= 700){
            if(getCookie("floatLoginLayer")==1){
                fl.hide();
                return;
            }else
			{	fl.show();
				}
            if(getCookie("16jiaju_user_id")==0){
                fl.show();
            }
        }
    });
    if(getCookie("floatLoginLayer")==1){
         fl.hide();
    }
    $(fl.find(".close")).click(function(){
        fl.fadeOut();
        setCookie("floatLoginLayer", 1, 60);
    });

    $(".sina_weibo_login").click(function(){
        var x = (window.screen.width - 750) / 2, y = (window.screen.height - 630) / 2;
        var w = window.open("http://www.afangti.com/api/weibo/deal.asp?apiType=weibo", "newwindow", "width=765, height=630, innerHeight=630, depended=no, scrollbars=no, resizable=no" + ", screenX=" + x + ", screenY=" + y);
        var timer = window.setInterval(function(){
             var userId = getCookie("16jiaju_user_id");
             if(userId==1){
                w.close();
                w.opener.location.reload();
                clearInterval(timer);
             }
             
        }, 200);
    });
    $(".qq_login").click(function(){ 
        var x = (window.screen.width - 520) / 2, y = (window.screen.height - 455) / 2;
        var w = window.open("http://www.afangti.com/api/qqapi/redirect.asp", "newwindow", "width=520, height=455, depended=no, scrollbars=no" + ", screenX=" + x + ", screenY=" + y);
        var timer = window.setInterval(function(){
            var userId = getCookie("16jiaju_user_id");
            if(userId==1){
                w.close();
                w.opener.location.reload();
                clearInterval(timer);
            }
             
        }, 200);
    });
    if ($.browser.msie && ($.browser.version == "6.0") && !$.support.style) {
        $(document).scroll(function(){
            var timer = null;
            fl.css("position", "absolute");
            if(!timer){
                timer = setTimeout(function(){
                    fl.animate({"top": $(window).height() + $(window).scrollTop() - 79}, 100);
                    
                },100)
            }
        })
    }
})


function setCookie(objName,objValue,objHours){//娣诲姞cookie  
var str = objName + "=" + escape(objValue);  
if(objHours > 0){//涓�0鏃朵笉璁惧畾杩囨湡鏃堕棿锛屾祻瑙堝櫒鍏抽棴鏃禼ookie鑷姩娑堝け  
var date = new Date();  
var ms = objHours*3600*1000;  
date.setTime(date.getTime() + ms);  
str += "; expires=" + date.toGMTString();  
}  
document.cookie = str;  
//alert(str);  
}  
  
function getCookie(objName){//鑾峰彇鎸囧畾鍚嶇О鐨刢ookie鐨勫€�  
var arrStr = document.cookie.split("; ");  
for(var i = 0;i < arrStr.length;i ++){  
var temp = arrStr[i].split("=");  
if(temp[0] == objName) return unescape(temp[1]);  
}   
}  
  
function delCookie(name){//涓轰簡鍒犻櫎鎸囧畾鍚嶇О鐨刢ookie锛屽彲浠ュ皢鍏惰繃鏈熸椂闂磋瀹氫负涓€涓繃鍘荤殑鏃堕棿  
var date = new Date();  
date.setTime(date.getTime() - 10000);  
document.cookie = name + "=a; expires=" + date.toGMTString();  
}  
  
function allCookie(){//璇诲彇鎵€鏈変繚瀛樼殑cookie瀛楃涓�  
var str = document.cookie;  
if(str == ""){  
str = "娌℃湁淇濆瓨浠讳綍cookie";  
}  
alert(str);  
}  
  