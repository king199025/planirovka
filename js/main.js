$(document).ready(function(){

    jQuery("a.lb").lightBox();


    $(".navbar").on("click","a", function (event) {
        //отменяем стандартную обработку нажатия по ссылке
        event.preventDefault();

        //забираем идентификатор бока с атрибута href
        var id  = $(this).attr('href'),

        //узнаем высоту от начала страницы до блока на который ссылается якорь
            top = $(id).offset().top;

        //анимируем переход на расстояние - top за 1500 мс
        $('body,html').animate({scrollTop: top}, 1500);
    });



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

    $(document).on('click', '.send_request', function(){
        event.preventDefault();
        $('#myModal').modal('show');
    });

    $(document).on('click', '.sendMail', function(){
        event.preventDefault();
        var flag;
        $('.formInput').each(function(){
            if($(this).val() == ''){
                 flag = 0;
                return false;
            }
            else{
                flag = 1;
            }
        });

        if(flag == 0){
            alert('введены не все поля')
        }else{
            var name = $('#name').val();
            var phone = $('#phone').val();
            var email = $('#email').val();
            $('#sendname').val(name);
            $('#sendphone').val(phone);
            $('#sendemail').val(email);


            $('#myModal').modal('hide');
        }

        $('#sendForm').submit();
        //return false;
    });

    $(window).scroll(function () {
        if (window.pageYOffset > 157) {
            $(".navigation").addClass("navigation--onScroll");
            //$(".header--onScroll").removeClass(".header");       
        } else {
            // $(".header--onScroll").addClass("header");
            $(".navigation").removeClass("navigation--onScroll");
        }
    });



});

 jQuery('.main-carousel').slick({
    dots: true,
    infinite: true,
    autoplay: true,
    focusOnSelect: false,
    speed: 3000,
    arrows: false,        
    slidesToShow: 1,
    slidesToScroll: 1,
    draggable: 1
});


ymaps.ready(init);

function init() {
    var myMap = new ymaps.Map('map', {
        center: [55.795962, 38.450751],
        zoom: 16,
        controls: [],

    }) ;
    myGeoObject = new ymaps.GeoObject({
// Описание геометрии.
        geometry: {
            type: "Point",
            coordinates: [55.795862, 38.444955]
        },
// Свойства.
        properties: {
// Контент метки.
            preset: 'islands#icon',
            iconColor: '#0095b6'
        }
    });

    myMap.behaviors.disable('scrollZoom');

    myMap.geoObjects
        .add(myGeoObject);
}

