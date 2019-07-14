<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Comercial Laravel</title>

    <!-- Favicon -->
    <link href="{{URL::asset('img/favicon.ico')}}" rel="shortcut icon">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="{{URL::asset('css/style.css')}}" rel="stylesheet" type="text/css" />

    <!-- JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="{{URL::asset('js/ajax.js')}}"></script>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
</nav>
<div id="line-one">
    <div class="container">
        <div class="row">
            <div class="col-md-12" id="center">
                <h1><b>Estado</b></h1>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li><a href="{{route('state.index')}}">Estados</a></li>
                    <li class="active">Cadastro</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <br>
            <h4 id="center"><b>CADASTRO DOS DADOS DO ESTADO</b></h4>
            <br>
            <form method="post"
                  action="{{route('state.store')}}"
                  enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="sigla">Sigla</label>
                        <input type="text" name="sigla" maxlength="2"
                               class="form-control"
                               required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="regiao">Região</label>
                        <input type="text" name="regiao"
                               class="form-control"
                               required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nome_extenso">Nome Extenso</label>
                        <input type="text" name="nome_extenso"
                               class="form-control"
                               required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="capital"> Capital </label>
                        <input type="text" name="capital"
                               class="form-control">
                    </div>
                </div>
                <div class="col-md-12">
                    <button type="reset" class="btn btn-default">
                        Limpar
                    </button>
                    <button type="submit"
                            class="btn btn-warning" id="black">
                        Cadastrar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>