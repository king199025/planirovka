jQuery(document).ready(function ($) {

    //jQuery("a.lb").lightBox();

    $("#owl-demo").owlCarousel({

        navigation : false, // Show next and prev buttons
        slideSpeed : 300,
        paginationSpeed : 400,

        singleItem:true,
        touchDrag: true,
        autoPlay: true,
        stopOnHover: true,
        navigationText : false,

// "singleItem:true" is a shortcut for:
// items : 1,
 itemsDesktop : true,
 itemsDesktopSmall : true,
// itemsTablet: false,
// itemsMobile : false

    });

    $(".navbar").on("click", "a", function (event) {
        //отменяем стандартную обработку нажатия по ссылке
        event.preventDefault();

        //забираем идентификатор бока с атрибута href
        var id = $(this).attr('href'),

        //узнаем высоту от начала страницы до блока на который ссылается якорь
            top = $(id).offset().top;

        //анимируем переход на расстояние - top за 1500 мс
        $('body,html').animate({scrollTop: top}, 1500);
    });


    $('.load_more').on('click', function () {
        /*var step = $(this).attr('data-step');
        if (step == '2') {
            $(this).children('img').attr('src', myajax.dir + '/img/load_more2.png');
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
        }
        else {
            $(this).children('img').attr('src', myajax.dir + '/img/load_more.png');
            var i = 1;
            $('.p0').each(function () {
                if (i > 6) {
                    $(this).remove();
                }
                i++;
            });
            $('.load_more').attr('data-step', parseInt(step, 10) - 1);
        }*/
        var step = $(this).attr('data-step');
        if (step == '2') {
            $(this).children('img').attr('src', myajax.dir + '/img/load_more2.png');
            $('.load_more').attr('data-step', parseInt(step, 10) + 1);
            $('.allWork').css('display','block');
        }else{
            $(this).children('img').attr('src', myajax.dir + '/img/load_more.png');
            $('.load_more').attr('data-step', parseInt(step, 10) - 1);
            $('.allWork').css('display','none');
        }
    });

    $(document).on('click', '.send_request', function () {
        event.preventDefault();

        if($(".planZnachenie").length) {
            $('#myModal').modal('show');
        }else{
            alert('Вы не выбрали планировку');
        }




    });

    $(document).on('click', '.sendMail', function () {
        event.preventDefault();
        var flag;
        $('.formInput').each(function () {
            if ($(this).val() == '') {
                flag = 0;
                return false;
            }
            else {
                flag = 1;
            }
        });

        if (flag == 0) {
            alert('введены не все поля')
        } else {
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


    $('.custom_file_input_box_input').blur(function () {
        //var file = $('.custom_file_input_box_input').val();
        var file = document.getElementById('custom_file').files;


        var l = file.length;

        if(file.length == 0){
            $('.selected_file').html('Файл не выбран');
        }
        else {
            if(file.length >5){
                $('.selected_file').html('Максимальное колличество файлов 5. Файлы не прекреплены');
            }else{
                var name = '';
                for(var i=0; i<l; i++){
                    name = name + file[i].name + ', ';
                }
                $('.selected_file').html('Файлы: ' + name.slice(0, -1));
            }
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

    });
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

