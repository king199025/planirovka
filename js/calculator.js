function isright(obj, max, min)
{
    var maxInt = parseInt(max,10);
    var minInt = parseInt(min,10);
    var value= +obj.value.replace(/\D/g,'')||0;
    if (value>maxInt) value=maxInt;
    if (value<minInt) value=minInt;
    obj.value = value;
}

function endSum(){
    var sum = 0;
    //получаем значение
    setTimeout(function(){
        var planZnachenie = parseFloat($('.planZnachenie').val());
        var plan = parseFloat($('input[name="plan"]:checked').val());
        var square = planZnachenie*plan;
        //console.log(plan);
       // console.log(planZnachenie);
       // console.log(square);
        //проверяю какие чекбоксы нажаты и получаю их кооффициет
        sum += square;
        $('.kooff').each(function(){
            if($(this).prop('checked')){
                //alert(123);
                var kooff = parseFloat($(this).attr('data-kooff'));
                //console.log(kooff);
                sum += square*kooff;
            }
        });

        $('.plus').each(function(){
            if($(this).prop('checked')){
                var plus = parseFloat($(this).attr('data-plus'));
                sum += plus;
            }
        });

        $('.sumValue').html(sum);

    },1);
    //Получение значения планировки

    //alert(plan);
    //alert(123);
}

$(document).ready(function(){





    $(document).on('click','.calculator', function(){

        endSum();

    });

    $(document).on('click','.plan', function(){
        //получаем выбранный план

        var plan = $(this).attr('data-type');
        var max;
        var min;
        if(plan == 1){
            max = 20;
            min = 10;
            $('.value').html('<input type="text" class="planZnachenie" name="valuePlan" value="' + min + '" placeholder="Значение" onblur="isright(this,' + max + ',' + min + ' );"/> ');
        }

        if(plan == 2){
            max = 55;
            min = 21;
            $('.value').html('<input type="text" class="planZnachenie" name="valuePlan" value="' + min + '" placeholder="Значение" onblur="isright(this,' + max + ',' + min + ' );"/> ');
        }

        if(plan == 3){
            max = 120;
            min = 56;
            $('.value').html('<input type="text" class="planZnachenie" name="valuePlan" value="' + min + '" placeholder="Значение" onblur="isright(this,' + max + ',' + min + ' );"/> ');
        }

        if(plan == 4){
            max = 9999;
            min = 120;
            $('.value').html('<input type="text" class="planZnachenie" name="valuePlan" value="' + min + '" placeholder="Значение" onblur="isright(this,' + max + ',' + min + ' );"/> ');
        }
       //alert(plan);


        //$('.value').html('<input type="number" name="valuePlan" min="60" max="100" value="60" />');
    });

});
