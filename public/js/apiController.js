$(document).ready(function(){

    $('#cepForm').submit(function(e){
        e.preventDefault();
        var cep = $('#cep').val();
        carregarEmpresas('/api/consultar-cep/' + cep);
    });

    $('.clear').on('click', function(){
        $('#cep').val();
        carregarEmpresas('/api/listar-empresas');
    })

    function carregarEmpresas(url) {
        $.getJSON(url, function(response){
            $('#empresasList').empty();
            $.each(response.data, function(i, empresa){
                if(empresa.number == null){
                    empresa.number = '*';
                }
                $('#empresasList').append('<tr><td>'
                + empresa.name
                + '</td><td>'
                + empresa.cep
                + '</td><td>'
                + empresa.street +', '+ empresa.number +' , '+ empresa.district +' - '+ empresa.city
                +'</td></tr>');
            });
        });
    }

    carregarEmpresas('/api/listar-empresas');
});