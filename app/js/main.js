$(function(){
    $('.send').on('click',function(){
        
        let form = $('.fomrd');
        let res = $('.result');
        
        $.post('php/scripts.php',form.serialize(), function(data){
            console.log(data);
            if(data == '1'){
                res.html("Заявка отправлена");
            }
            else{
                res.html(data);
            }
        });
    });
})