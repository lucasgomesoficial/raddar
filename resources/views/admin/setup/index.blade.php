@extends('adminlte::page')

@section('title', 'Perfil')



@section('content_header')
  <!-- Content Header (Page header) -->
  <div class="content-header">
      <div class="container-fluid">
          <div class="row mb-2">
              <div class="col-sm-6">
                  <h1 class="m-0 text-dark">Área Adiministrativa</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="\principal">Principal</a></li>
                      <li class="breadcrumb-item active">Admin</li>
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
    <div class="container-fluid">
      <div class="row">
          
        <div class="col-md-3">
          <!-- Profile Image -->
          <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              <div class="text-center">
                <img class="profile-user-img img-fluid img-circle" src="{{ url('public/storage/users/'.auth()->user()->image) }}" alt="">
              </div>
              <br>
                <h3 class="profile-username text-center">{{ auth()->user()->name }}</h3>
                <p class="text-muted text-center">
                  {{ auth()->user()->cargo }}
                  <br>
                  {{ auth()->user()->cidade }}, {{ auth()->user()->estado }}
                </p>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
        
        <div class="col-md-9">
          <div class="card">
            <div class="card-header p-2">
              <ul class="nav nav-pills">
                <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Informações do Contrato</a></li>
                <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Meu perfil</a></li>
                <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Editar Perfil</a></li>
              </ul>
            </div><!-- /.card-header -->
            
            <div class="card-body">
              <div class="tab-content">
                
                <div class="active tab-pane" id="activity">

                    <table class="table table-hover">
                        <thead class="thead-light">
                            <tr>
                              <th scope="col">Produtos Assinados (Dia do Faturamento: XX)</th>
                              <th scope="col">Data de Início</th>
                              <th scope="col">Data de Termino</th>
                              <th scope="col">Valor</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                              <td>Planos de Ação</td>
                              <td>XX/XX/XXXX</td>
                              <td>XX/XX/XXXX</td>
                              <td>R$ xxx,xx <span>/Mês</span></td>
                            </tr>
                            <tr>
                              <td>Gerencial do Grupo</td>
                              <td>XX/XX/XXXX</td>
                              <td>XX/XX/XXXX</td>
                              <td>R$ xxx,xx <span>/Mês</span></td>
                            </tr>
                            <tr>
                              <td>Meta x Realizado</td>
                              <td>XX/XX/XXXX</td>
                              <td>XX/XX/XXXX</td>
                              <td>R$ xxx,xx <span>/Mês</span></td>
                            </tr>
                            <tr>
                              <td>Indicadores Comerciais</td>
                              <td>XX/XX/XXXX</td>
                              <td>XX/XX/XXXX</td>
                              <td>R$ xxx,xx <span>/Mês</span></td>
                            </tr>
                            <tr>
                              <td>Indicadores VD</td>
                              <td>XX/XX/XXXX</td>
                              <td>XX/XX/XXXX</td>
                              <td>R$ xxx,xx <span>/Mês</span></td>
                            </tr>
                            <tr>
                              <td>Mapa do Estoque</td>
                              <td>XX/XX/XXXX</td>
                              <td>XX/XX/XXXX</td>
                              <td>R$ xxx,xx <span>/Mês</span></td>
                            </tr>
                            <tr>
                              <td>Análise trimestral</td>
                              <td>XX/XX/XXXX</td>
                              <td>XX/XX/XXXX</td>
                              <td>R$ xxx,xx <span>/Anual</span></td>
                            </tr>
                            <tr>
                              <td>Desdobramento de Receita</td>
                              <td>XX/XX/XXXX</td>
                              <td>XX/XX/XXXX</td>
                              <td>R$ xxx,xx <span>/Projeto</span></td>
                            </tr>
                        </tbody>
                    </table>
                    
                    <div class="card card-primary">
                        <div class="card-header">
                          <h3 class="card-title">Documentos</h3>
            
                          <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                              <i class="fas fa-minus"></i></button>
                          </div>
                        </div>
                        <div class="card-body p-0">
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Nome do Arquivo</th>
                                <th> </th>
                                <th></th>
                              </tr>
                            </thead>
                            <tbody>
            
                              <tr>
                                <td>Functional-requirements.docx</td>
                                <td> </td>
                                <td class="text-right py-0 align-middle">
                                  <div class="btn-group btn-group-sm">
                                    <a href="#" class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                  </div>
                                </td>
                              <tr>
                                <td>UAT.pdf</td>
                                <td> </td>
                                <td class="text-right py-0 align-middle">
                                  <div class="btn-group btn-group-sm">
                                    <a href="#" class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                  </div>
                                </td>
                              <tr>
                                <td>Email-from-flatbal.mln</td>
                                <td> </td>
                                <td class="text-right py-0 align-middle">
                                  <div class="btn-group btn-group-sm">
                                    <a href="#" class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                  </div>
                                </td>
                              <tr>
                                <td>Logo.png</td>
                                <td> </td>
                                <td class="text-right py-0 align-middle">
                                  <div class="btn-group btn-group-sm">
                                    <a href="#" class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                  </div>
                                </td>
                              <tr>
                                <td>Contract-10_12_2014.docx</td>
                                <td> </td>
                                <td class="text-right py-0 align-middle">
                                  <div class="btn-group btn-group-sm">
                                    <a href="#" class="btn btn-info"><i class="fas fa-file-download"></i></a>
                                  </div>
                                </td>
            
                            </tbody>
                          </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                </div>
                
                <div class="tab-pane" id="timeline">
                    
                    <div class="card-body">
                        <strong><i class="fas fa-envelope-open-text"></i> Email</strong>
                        <p class="text-muted">{{ auth()->user()->email }}</p>
                        
                        <hr>
                        
                        <strong><i class="fas fa-building"></i> Número Corporativo</strong>
                        <p class="text-muted">{{ auth()->user()->corp }}</p>
                        
                        <hr>
                        
                        <strong><i class="fas fa-user-alt"></i> Número Pessoal</strong>
                        <p class="text-muted">{{ auth()->user()->pessoal }}</p>
                        
                        <hr>
                        
                        <strong><i class="fas fa-users"></i> Grupo</strong>
                        <p class="text-muted">{{ auth()->user()->grupo }}</p>
                    </div>
                    <!-- /.card-body -->
                    
                </div>

                <div class="tab-pane" id="settings">
                  <form class="form-horizontal" action="{{ route('admin.perfilup') }}" method="PUT" enctype="multipart/form-data">
              
                    {!! csrf_field() !!}
                    <div class="form-group row">
                      <label for="name" class="col-sm-2 col-form-label">Nome</label>
                      <div class="col-sm-10">
                        <input type="text" value="{{ auth()->user()->name }}" class="form-control" name="name" placeholder="Nome">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="email" class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-10">
                        <input type="email" value="{{ auth()->user()->email }}" class="form-control" name="email" placeholder="Email">
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
                        <input type="text" value="{{ auth()->user()->cargo }}" class="form-control" name="cargo" placeholder="Profissão">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="grupo" class="col-sm-2 col-form-label">Nome do Grupo</label>
                      <div class="col-sm-10">
                        <input type="text" value="{{ auth()->user()->grupo }}" class="form-control" name="grupo" placeholder="Nome do Grupo">
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
                        <input type="text" value="{{ auth()->user()->cidade }}" class="form-control" name="cidade" placeholder="Cidade">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="estado" class="col-sm-2 col-form-label">Estado</label>
                      <div class="col-sm-10">
                        <input type="text" value="{{ auth()->user()->estado }}" class="form-control" name="estado" placeholder="Estado">
                      </div>
                    </div>                    
                    <div class="form-group row">
                      <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-danger">Atualizar Perfil</button>
                      </div>
                    </div>
                  </form>
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
        
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
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