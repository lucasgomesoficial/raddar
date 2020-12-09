@extends('adminlte::page')

@section('title', 'Perfil')

@section('content_header')
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark"><img src="{{ url('public/storage/users/'.$users->image) }}" alt="" class="col-2 img-thumbnail"> {{ $users->name }}</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <a href="{{ route('admin.setup') }}" class="btn btn-sm btn-info">
              <i class="fas fa-chevron-circle-left"></i>&nbsp;&nbsp;Voltar
            </a>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
@stop

@section('content')
  @if (session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
  @endif
  
  @if (session('error'))
    <div class="alert alert-danger">
      {{ session('error') }}
    </div>
  @endif

  <!-- Main content -->
  <section class="content">

    <div class="col-md-12">
      <div class="card">
        <div class="card-header p-2">
          <ul class="nav nav-pills">
            <li class="nav-item"><a class="nav-link" href="#activity" data-toggle="tab">Editar Usuário</a></li>
            <li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab">Editar Serviços</a></li>
          </ul>
        </div><!-- /.card-header -->
        
        <div class="card-body">
          <div class="tab-content">
            
            <div class="tab-pane" id="activity">

              <form class="form-horizontal" action="{{ route('admin.perfilup') }}" method="post" enctype="multipart/form-data">

                @method('PUT')
                @csrf
                <div class="form-group row">
                  <label for="name" class="col-sm-2 col-form-label">Nome</label>
                  <div class="col-sm-10">
                    <input type="text" value="{{ $users->name }}" class="form-control" name="name" placeholder="Nome">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="email" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" value="{{ $users->email }}" class="form-control" name="email" placeholder="Email">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="password" class="col-sm-2 col-form-label">Senha</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" name="password" placeholder="Senha">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="image" class="col-sm-2 col-form-label">Imagem</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" name="image">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="corp" class="col-sm-2 col-form-label">Número Corporativo</label>
                  <div class="col-sm-10">
                    <input type="tel" value="" class="form-control" id="corp" name="corp" placeholder="(00) 00000-0000" pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$" />
                  </div>
                </div>
                <div class="form-group row">
                  <label for="pessoal" class="col-sm-2 col-form-label">Número Pessoal</label>
                  <div class="col-sm-10">
                    <input type="tel" value="" class="form-control" id="pessoal" name="pessoal"  placeholder="(00) 00000-0000" pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$" />
                  </div>
                </div>
                <div class="form-group row">
                  <label for="cargo" class="col-sm-2 col-form-label">Profissão</label>
                  <div class="col-sm-10">
                    <input type="text" value="{{ $users->cargo }}" class="form-control" name="cargo" placeholder="Profissão">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="grupo" class="col-sm-2 col-form-label">Nome do Grupo</label>
                  <div class="col-sm-10">
                    <input type="text" value="{{ $users->grupo }}" class="form-control" name="grupo" placeholder="Nome do Grupo">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="imgcorp" class="col-sm-2 col-form-label">Imagem do Grupo</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" name="imgcorp">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="cidade" class="col-sm-2 col-form-label">Cidade</label>
                  <div class="col-sm-10">
                    <input type="text" value="{{ $users->cidade }}" class="form-control" name="cidade" placeholder="Cidade">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="estado" class="col-sm-2 col-form-label">Estado</label>
                  <div class="col-sm-10">
                    <input type="text" value="{{ $users->estado }}" class="form-control" name="estado" placeholder="Estado">
                  </div>
                </div>                    
                <div class="form-group row">
                  <div class="offset-sm-2 col-sm-10">
                    <button type="submit" class="btn btn-success">Atualizar Usuário</button>
                  </div>
                </div>
              </form>
              

            </div>

            <div class="active tab-pane" id="settings">

              <!-- Client box -->
              <div class="row d-flex align-items-stretch">
                
                <div class="form-group">
                  <label>Permissões:</label>
                  <select class="select2bs4" multiple="multiple" data-placeholder="Selecione as permissões" style="width: 100%;">
                    <option>Alabama</option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select>
                </div>
                <!-- /.form-group -->

              </div>
              
              <div class="row d-flex align-items-stretch">
              sdadsa
              </div>

            </div>
            <!-- /.tab-pane -->

          </div>
          <!-- /.tab-content -->
        </div>
        <!-- /.card-body -->
        
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->

  </section>
  <!-- /.content -->
  

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

@section('js')

    <script>
    
        const validos = /(\.jpg|\.png|\.gif|\.svg|\.jpeg)$/i;
        
        $('image', 'imgcorp').change(function() {
        
          const fileInput = $(this);
          const nome = fileInput.get(0).files["0"].name;
          if (validos.test(nome)) {
            alert('Extensão "' + validos + '" não permitida!');
          } else {
            alert('Ok!');
          }
        });
    
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
    <script type="text/javascript">$("#cel-corp, #cel-pessoal").mask("(00) 00000-0000");</script>
@stop