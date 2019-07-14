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
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="{{URL::asset('css/style.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('css/lightbox.css')}}" rel="stylesheet" type="text/css" />

    <!-- JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="{{URL::asset('js/ajax.js')}}"></script>
    <script src="{{URL::asset('js/lightbox.js')}}"></script>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
</nav>
@if (session('message'))
    <div class="alert alert-success alert-dismissible">
        <a href="#" class="close"
           data-dismiss="alert"
           aria-label="close">&times;</a>
        {{ session('message') }}
    </div>
@endif
<div id="line-one">
    <div class="container">
        <div class="row">
            <div class="col-md-12" id="center">
                <h1><b>Estados</b></h1>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li class="active">Estados</li>
                </ol>
                <br>
                <a href="{{route('state.create')}}"
                   class="btn btn-default btn-sm pull-right">
                    <span class="glyphicon glyphicon-plus"></span> Adicionar</a>
                <div id="pesquisa" class="pull-right">
                    <form class="form-group" method="get"
                          action="{{route('state.index')}}">
                        <input type="text" name="pesquisar"
                               class="form-control input-sm pull-left"
                               placeholder="Pesquisar por estado (Nome Extenso)...">
                        <button class="btn btn-default btn-sm pull-right"
                                id="color">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <br />
                <h4 id="center"><b>ESTADOS CADASTRADOS ({{$total}})</b></h4>
                <br>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th id="center">Código</th>
                            <th>Sigla</th>
                            <th>Nome Extenso</th>
                            <th>Região</th>
                            <th >Capital</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($estados as $estado)
                            <tr>
                                <td id="center">{{$estado->id}}</td>
                                <td title="Sigla">{{$estado->sigla}}</td>
                                <td title="Nome Extenso">{{$estado->nome_extenso}}</td>
                                <td title="Região">{{$estado->regiao}}</td>
                                <td title="Capital">{{$estado->capital}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <img src="{{URL::asset('img/subir.png')}}"
         id="up"
         style="display: none;"
         alt="Ícone Subir ao Topo"
         title="Subir ao topo?">
</body>
</html>