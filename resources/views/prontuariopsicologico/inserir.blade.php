<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>cadastrarFuncionarios</title>
    <link rel="icon" href="../img/ico.png" type="image/gif">
    <link rel="stylesheet" href="./bundle/css.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #339966; color:white;">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color:white; font-size: 20px; font-family: Times New Roman;">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#" style="color:white; font-size: 20px; font-family: Times New Roman; ">Funcionário</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#"style="color:white; font-size: 20px; font-family: Times New Roman;">Paciente</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <a class="btn btn-danger btn-lg active" role="button" aria-pressed="true"href="#">Sair</a>
            </form>
        </div>
    </nav>
</header>

<br>

<div class="container-fluid">

    <h3 class="page-header" style="font-size: 20px; font-family: Arial;">Novo Prontuário</h3>
</br>
<div id="msg"></div>


<form method="POST" action="{{route('prontuariopsicologico.store')}}" id="form">
  <!-- area de campos do form -->
  @csrf
  <div class="row">
   <div class="form-group col-md-4">
     <label for="campo1">Encaminhamento</label>
     <input type="text" class="form-control" id="encaminhamento" name="encaminhamento" placeholder="">
 </div>

 <div class="form-group col-md-4">
     <label for="campo2">Situação Escolar</label>
     <input type="text" class="form-control" id="situacao_escolar" name="situacao_escolar" placeholder="">
 </div>

 <div class="form-group col-md-4">
     <label for="campo3">Atividade Profissional</label>
     <input type="text" class="form-control" id="atividade_profissional" name="atividade_profissional" placeholder="">
 </div>
</div>

<div class="row">
   <div class="form-group col-md-4">
     <label for="campo1">Motivo da Consulta</label>
     <input type="text" class="form-control" id="motivo_consulta" name="motivo_consulta" placeholder="">
 </div>

<hr />
<div id="actions" class="row">
    <div class="col-md-12">
      <button id='btn-cadastrar-prontuario' type="submit" class="btn btn-success mr-sm-2">Salvar</button>
      <!--<a href="index.html" class="btn btn-default">Cancelar</a>-->
      <br>
      <br>
  </div>
</div>
</form>

    <!--<div id="listagem">
        <button id='btn-exibir-formulario' type="button" class="btn btn-success">Cadastrar</button>
        <br>
        <br>
        <div id="funcionarios"></div>
    </div>-->

   <!-- <div id="formulario">
        <div class="row">
            <div class="col-sm">
                <form method="POST" action="{{route('funcionario.store')}}" id="form">
                  
                    <div class="form-group">
                        <label for="siape">Siape</label>
                        <input type="text" class="form-control" id="siape" name="siape" placeholder="" />
                    </div>
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="" />
                    </div>

                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="" />
                    </div>
                    <div class="form-group">
                        <label for="telefone">Telefone</label>
                        <input type="text" class="form-control" id="telefone" name="telefone"/>
                    </div>

                    <div class="form-group">
                        <label for="tipo">Tipo</label>
                        <input type="text" class="form-control" id="tipo" name="tipo"/>
                    </div>

                    <div class="form-group">
                        <label for="senha">Senha</label>
                        <input type="password" class="form-control" id="senha" name="senha"/>
                    </div>

                    <div class="form-inline">
                        <button id='btn-cadastrar-funcionario' type="submit" class="btn btn-success mr-sm-2">Salvar</button>
                     
                    </div>
                </form>
            </div>
        </div>
    </div>-->


    <br>

</div>

<footer style="background-color: #339966;">

</footer>

<script src="../../bundle/babelpolyfill.bundle.js"></script>
<script src="../../bundle/index.bundle.js"></script>
<script src="../../bundle/FuncionarioController.bundle.js"></script>

</body>

</html>