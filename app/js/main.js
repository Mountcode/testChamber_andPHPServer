$(function(){
    $('.send').on('click',function(){
        
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
                $('.loader').removeClass('show');
                $('.send').removeAttr('disabled');
                console.log(data.errors);
                for (var key in data.errors) {
                    $('span[class*="error_'+key+'"]').text(data.errors[key]);
                }
            }
            
        },'json'); 
    });
})