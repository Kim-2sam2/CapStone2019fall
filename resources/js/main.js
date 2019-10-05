$(document).ready(function(){
    var currentPosition = parseInt($("#quickmenu").css("top"));
    $(window).scroll(function() {
        var position = $(window).scrollTop(); // 현재 스크롤바의 위치값을 반환합니다.
        $("#quickmenu").stop().animate({"top":position+currentPosition+"px"},300);
    });
});
