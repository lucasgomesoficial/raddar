@extends('adminlte::page')

@section('title', 'Planos de Ação')

@section('content_header')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Trello</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="\principal">Principal</a></li>
                        <!-- <li class="breadcrumb-item active">Comercial Varejo</li> -->
                    </ol>
                </div> <!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@stop

@section('content')
    <div class="container-fluid">
        <!-- COLOR PALETTE -->
        <div class="card card-default color-palette-box">
            <div class="card-header">
                <h3 class="card-title">
                    Projetos
                </h3>
            </div>
            <div class="card-body">

                <iframe src="{{ auth()->user()->adress }}" frameborder="0" allowFullScreen="false"></iframe>

            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
@stop

@section('footer')
    <div class="float-right d-none d-sm-block">
        <!-- <b>Verção</b> 3.0.5 -->
    </div>
    <strong>Copyright &copy; 2020 <a href="https://www.linkedin.com/in/lucasgomesoficial/">DevJá</a>.</strong> Todos os direitos reservados.
@stop

@section('css')
    <style>
    iframe {
        border: none;
        width: 100%;
        height: 40vw;
        margin: 0 auto;
    }
    </style>
    
    <!-- Theme style -->
    <link rel="stylesheet" href="../../../public/vendor/adminlte/dist/css/adminlte.min.css">
    
    <!-- Theme style -->
    <link rel="stylesheet" href="../../../public/vendor/adminlte/dist/css/adminlte.css">

    <!-- Alterações -->
    <link rel="stylesheet" href="../../../public/vendor/adminlte/dist/css/alteracoes.css">
@stop

@section('js')
<script src="https://p.trellocdn.com/embed.min.js">
    window.TrelloBoards.load(document, { allAnchors: false });
</script>
@stop