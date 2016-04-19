$(document).ready(function(){
    $(document).on('click','.calculator', function(){
        
        //alert(123);
    });

    $(document).on('click','.plan', function(){
        $('.value').html('<input type="text" name="valuePlan" placeholder="Значение"/>')
    });

});
