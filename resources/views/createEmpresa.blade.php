<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nova Empresa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/homestyle.css')}}">
    <style>

    </style>
</head>
<body>
    <div class="container">
        <h1>Cadastro de Empresa</h1>
        <div class="row">
            <div class="col-sm-12">
                <div class="card" style="width: 100%">
                    <div class="card-body">
                        <form  id="create_company" action="{{route('store')}}" method="POST">
                            @csrf
                            <div class="form-group col-md-12">
                            <label for="name">Nome da Empresa<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="form-group col-md-12">
                            <label for="cep">CEP <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" id="cep" name="cep" maxlength="8" onkeyup="handleZipCode(event)" required>
                            </div>
                            <div class="form-group col-md-12">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="descricao">Número do Endereço</label>
                                        <input type="text" class="form-control" id="number" maxlength="5" name="number">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="descricao">Bairro do Endereço <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="district" name="district" readonly required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="descricao">Logradouro do Endereço <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="street" name="street" readonly required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="descricao">Cidade do Endereço <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="city" name="city" readonly required>
                                    </div>
                                </div>
                            </div>
                            <div class="col text-center">
                                <button type="submit" class="btn btn-primary text-center">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="{{asset('js/mask.js')}}"></script>
    <script src="{{asset('js/createEmpresa.js')}}"></script>
</body>
</html>