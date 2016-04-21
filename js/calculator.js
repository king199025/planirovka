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
        var planZnachenie = parseFloat(jQuery('.planZnachenie').val());
        var plan = parseFloat(jQuery('input[name="plan"]:checked').val());
        var square = planZnachenie*plan;

        //проверяю какие чекбоксы нажаты и получаю их кооффициет
        sum += square;
        jQuery('.kooff').each(function(){
            if(jQuery(this).prop('checked')){
                //alert(123);
                var kooff = parseFloat(jQuery(this).attr('data-kooff'));
                //console.log(kooff);
                sum += square*kooff;
            }
        });

        jQuery('.plus').each(function(){
            if(jQuery(this).prop('checked')){
                var plus = parseFloat(jQuery(this).attr('data-plus'));
                sum += plus;
            }
        });

        jQuery('.sumValue').html(Math.round(sum));
        jQuery('#summa').val(Math.round(sum));

    },1);

}

jQuery(document).ready(function($){
    $(document).on('click','.calculator', function(){
        endSum();
    });
    $(document).on('change', '.planZnachenie', function(){
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
