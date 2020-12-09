@extends('adminlte::page')

@section('content_header')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Principal</h1>
          </div><!-- /.col -->
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
          Acesso Rápido
        </h3>
      </div>
      <div class="card-body">
        <div class="col-12">
          <!-- <h5>Theme Colors</h5> -->
          <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
            
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-primary">
                  <div class="inner">
                    <h3 class="homeh3">Planos</h3>
                    <p class="homep">de Ação</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-map"></i>
                  </div>
                  <a href="planos/planos-de-acao" class="small-box-footer">Saber mais <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->

              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-primary">
                  <div class="inner">
                    <h3 class="homeh3">Resultados</h3>
                    <p class="homep">Gerencial do Grupo</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                  </div>
                  <a href="resultados/gerencial-grupo" class="small-box-footer">Saber mais <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->

              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-primary">
                  <div class="inner">
                    <h3 class="homeh3">Varejo</h3>
                    <p class="homep">Meta x Realizado</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                  </div>
                  <a href="comercial-varejo/meta-realizado" class="small-box-footer">Saber mais <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->

              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-primary">
                  <div class="inner">
                    <h3 class="homeh3">Varejo</h3>
                    <p class="homep">Indicadores Comerciais</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                  </div>
                  <a href="resultados/gerencial-grupo" class="small-box-footer">Saber mais <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->

              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-primary">
                  <div class="inner">
                    <h3 class="homeh3">Comercial VD</h3>
                    <p class="homep">Indicadores VD</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-briefcase"></i>
                  </div>
                  <a href="comercial-vd/indicadores-vd" class="small-box-footer">Saber mais <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-primary">
                  <div class="inner">
                    <h3 class="homeh3">Estoque</h3>
                    <p class="homep">Mapa do Estoque</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-cube"></i>
                  </div>
                  <a href="estoque/mapa-estoque" class="small-box-footer">Saber mais <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->

            </div>
            <!-- /.row -->
          </div>
        </div>
        <!-- /.row -->
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
    <!-- Theme style -->
    <link rel="stylesheet" href="../../../public/vendor/adminlte/dist/css/adminlte.min.css">
    
    <!-- Theme style -->
    <link rel="stylesheet" href="../../../public/vendor/adminlte/dist/css/adminlte.css">

    <!-- Alterações -->
    <link rel="stylesheet" href="../../../public/vendor/adminlte/dist/css/alteracoes.css">
@stop