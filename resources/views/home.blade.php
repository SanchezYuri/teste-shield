<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integração API Laravel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/homestyle.css')}}">
</head>
<body>
    <div class="container">
        <h1>Gerenciamento de Empresas</h1>
        <form id="cepForm">
            <div class="form-group col-md-12">
                <label for="cep">CEP:</label>
                <input type="text" class="form-control" id="cep" name="cep" maxlength="8" onkeyup="handleZipCode(event)">
            </div>
            <button type="submit" class="btn btn-primary">Consultar</button>
            <input type="button" class="btn btn-secondary clear" value="Limpar">
            <a href="{{route('create')}}" class="btn btn-success pull-right">+ Nova</a>
        </form>
        <div id="endereco"></div>
        <h2>Listagem de Empresas</h2>
        <div class="limitable">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>CEP</th>
                        <th>Endereço</th>
                    </tr>
                </thead>
                <tbody id="empresasList"></tbody>
            </table>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="{{asset('js/mask.js')}}"></script>
    <script src="{{asset('js/apiController.js')}}"></script>
</body>
</html>
