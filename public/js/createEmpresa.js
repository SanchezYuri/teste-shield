$(document).ready(function(){
    $('#cep').focusout(function(){
        $.get('https://viacep.com.br/ws/'+$(this).val()+'/json/', function(data){
            $('#street').val(data.logradouro);
            $('#district').val(data.bairro);
            $('#city').val(data.localidade);
        });
    });
});