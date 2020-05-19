$(function(){
    $('.send').on('click',function(){
        let serverResponceSucess = 0;
        let form = $('.fomrd');
        let res = $('.result');
        $('.loader').addClass('show');
        $('.send').attr('disabled','disabled');
        $.post('php/scripts.php',form.serialize(), function(data){
            $('span[class*="error_"]').text('');
            if(data.res){
                res.html("Заявка отправлена");
            }
            else{
                $('.send').removeAttr('disabled');
                console.log(data.errors);
                for (var key in data.errors) {
                    $('span[class*="error_'+key+'"]').text(data.errors[key]);
                }
            }
        },'json').always(function(){
            $('.loader').removeClass('show');
        }); 
    });
})