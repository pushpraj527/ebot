$(function(){
    $(".login-container").css({
        "margin-top" : 60
    });
    $(".carousel-inner > .item > img, .carousel-inner > .item > a > img").css({
        "height" : $(window).height()
    });
    $("#tripFormHome").css({
        "margin-top" : -($("#tripFormHome").height())
    });
    $("#tripFormHome").draggable({
        containment: 'window'
    });
    $("#item").draggable({
        containment: 'window'
    });
    $("body").css({
        "margin-bottom": $(".footerSection").height() + $(".footer").height()
    });
    $("#botBox").css({
        "min-height" : $(window).height() - $("nav").height() - 64
    });
    $("#checkinDate").datepicker({
        numberOfMonths: 2,
        minDate : 0
    }).attr('readonly', 'readonly');
    $("#checkoutDate").datepicker({
        numberOfMonths: 2,
        minDate : $("#checkinDate").datepicker("getDate")
    }).attr('readonly', 'readonly');
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip(); 
    });
    $("#response").change(function(){
        $('#response').scrollTop('30px');    
    });
    var textarea = document.getElementById('response');
    setInterval(function(){
        textarea.scrollTop = textarea.scrollHeight - 20;
    }, 0.01);
    $('div[style="text-align: right;position: fixed;z-index:9999999;bottom: 0; width: 100%;cursor: pointer;line-height: 0;"]').addClass('hidden');
});