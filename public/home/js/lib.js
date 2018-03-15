$(document).ready(function($) {
    // 头部select
    $(".m-lang dt").click(function(event) {
        $(this).siblings('dd').fadeToggle(0);
        return false;
    });
    // 头部so
    $('.hdr a i').click(function(event) {
        $('.so').fadeToggle(0);
        return false;
    });
    // 底部select
    $(".m-select dt").click(function(event) {
        $(this).siblings('dd').fadeToggle(0);
        return false;
    });
    $(document).click(function(event) {
        $(".m-lang dd").fadeOut(0);
        $(".m-select dd").fadeOut(0);
    });


    // 选项卡 鼠标点击
    $(".TAB_CLICK li").click(function() {
        var tab = $(this).parent(".TAB_CLICK");
        var con = tab.attr("id");
        var on = tab.find("li").index(this);
        $(this).addClass('on').siblings(tab.find("li")).removeClass('on');
        $(con).eq(on).show().siblings(con).hide();
    });

    $('.TAB_CLICK').each(function(index, el) {
        $(this).find("li").filter(':first').trigger('click');
    });

    // 选项卡 鼠标点击
    $(".TAB_HOVER li").mousemove(function() {
        var tab = $(this).parent(".TAB_HOVER");
        var con = tab.attr("id");
        var on = tab.find("li").index(this);
        $(this).addClass('on').siblings(tab.find("li")).removeClass('on');
        $(con).eq(on).show().siblings(con).hide();
    });

    $('.TAB_HOVER').each(function(index, el) {
        $(this).find("li").filter(':first').trigger('mousemove');
    });

    // 返回顶部
    $('.toTop').click(function() {
        $('body,html').animate({
            'scrollTop': 0
        }, 500);
    });
    $(window).scroll(function() {
        var _top = $(window).scrollTop();
        if (_top < 300) {
            $('.toTop').removeClass('show');
        } else {
            $('.toTop').addClass('show');
        }
    });
});