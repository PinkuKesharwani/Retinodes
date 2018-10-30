$(document).ready(function () {
    $('[data-toggle="tooltip"]').tooltip()
});
function ScrollTop() {
    $("html, body").animate({ scrollTop: 0 }, 1000);
    $('#bottom_scroll_btn').removeClass('animate_bottom');
}
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
    if (document.body.scrollTop > 180 || document.documentElement.scrollTop > 20) {
        //$('#top_navigation_bar').addClass('fixed_navigation');
        $('#bottom_scroll_btn').addClass('animate_bottom');
    } else {
       // $('#top_navigation_bar').removeClass('fixed_navigation');
        $('#bottom_scroll_btn').removeClass('animate_bottom');
    }
}
window.onload = function (e) {
    setTimeout(function () {
        $('#loading_page').fadeOut();
    }, 2000);
}
function Sharebtnclick(dis) {
    var get_class=$('#social_card_box').attr('class');
    if(get_class == "social-reveal")
    {
        $('#social_card_box').addClass('social-reveal-active');
        $(dis).addClass('share-expanded');
    }else {
        $('#social_card_box').removeClass('social-reveal-active');
        $(dis).removeClass('share-expanded');
    }
}
function GlobalPageShare(socialshare_type) {
    var share_url = $.trim($('#glo_share_url').val());
    var share_image = $.trim($('#glo_share_image').val());
    var title = $.trim($('#glo_share_title').val());
    var description = $.trim($('#glo_share_detail').val());
    var twitterdesc = description;
    twitterdesc = twitterdesc.length > 75 ? twitterdesc.substring(0, 75) : twitterdesc;
    twitterdesc = (twitterdesc + "... ");
    var myTest = "";
    if (socialshare_type == "facebook") {
        var FB_url = "http://www.facebook.com/sharer/sharer.php?u=" + encodeURIComponent(share_url);
        myTest = window.open(FB_url, "targetWindow", "toolbar=no,location=no,screenX=400,screenY=100,status=no,menubar=no,scrollbars=yes,resizable=yes,width=626,height=436");
        if (!myTest) {
            Message({"Msg": "Please disable your pop-up blocker and click again to share.", "Type": msg_Info});
            //alert('Please disable your pop-up blocker and click again to share.');// A popup blocker was detected.
        } else {
            myTest;
        }
    }
    else if (socialshare_type == "twitter") {
        var TW_url = "https://twitter.com/intent/tweet?text=" + title + "&url=" + share_url;
        myTest = window.open(TW_url, "targetWindow", "toolbar=no,location=no,screenX=400,screenY=100,status=no,menubar=no,scrollbars=yes,resizable=yes,width=626,height=436");
        if (!myTest) {
            Message({"Msg": "Please disable your pop-up blocker and click again to share.", "Type": msg_Info});
            //alert('Please disable your pop-up blocker and click again to share.');// A popup blocker was detected.
        } else {
            myTest;
        }
    }
    else if (socialshare_type == "linkedin") {
        var LK_url = "http://www.linkedin.com/shareArticle?mini=true&url=" + encodeURIComponent(share_url) + "&title=" + (title) + "&source=" + encodeURIComponent(share_url);
        myTest = window.open(LK_url, "targetWindow", "toolbar=no,location=no,screenX=400,screenY=100,status=no,menubar=no,scrollbars=yes,resizable=yes,width=626,height=436");
        if (!myTest) {
            Message({"Msg": "Please disable your pop-up blocker and click again to share.", "Type": msg_Info});
            //alert('Please disable your pop-up blocker and click again to share.');// A popup blocker was detected.
        } else {
            myTest;
        }
    }
    else if (socialshare_type == "google") {
        var GP_url = "https://plus.google.com/share?url=" + encodeURIComponent(share_url);
        myTest = window.open(GP_url, "targetWindow", "toolbar=no,location=no,screenX=400,screenY=100,status=no,menubar=no,scrollbars=yes,resizable=yes,width=626,height=436");
        if (!myTest) {
            Message({"Msg": "Please disable your pop-up blocker and click again to share.", "Type": msg_Info});
            //alert('Please disable your pop-up blocker and click again to share.');// A popup blocker was detected.
        } else {
            myTest;
        }
    }
    else if (socialshare_type == "whatsapp") {
        if (/Android|webOS|iPhone|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
            var sUrl = window.location.href;
            //var sMsg = encodeURIComponent(sText) + " - " + encodeURIComponent(sUrl);
            var whatsapp_url = "whatsapp://send?text=" + sUrl;
            window.open(whatsapp_url, "_blank");
        }
        else {
            var sUrl = window.location.href;
            var whatsapp_url = "https://web.whatsapp.com/send?text=" + sUrl;
            window.open(whatsapp_url, "_blank");
        }
    }else
    {
        //Initialize Js
    }
}