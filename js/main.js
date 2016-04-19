$(document).ready(function(){
    $('.load_more').on('click', function(){
        var step = $(this).attr('data-step');
        $.ajax({
            url: myajax.act, //url, к которому обращаемся
            type: "POST",
            data: "action=load_work&step=" + step,
            success: function (data) {
                $('.load_more').attr('data-step', parseInt(step, 10) + 1);
                $('.load_more').before(data);
                console.log(data);
            }
        });
    });
});

 jQuery('.main-carousel').slick({
    dots: true,
    infinite: true,
    autoplay: true,
    focusOnSelect: false,
    speed: 300,
    arrows: false,        
    slidesToShow: 1,
    slidesToScroll: 1
});