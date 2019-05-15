<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Matricule-se</title>
	<link rel="icon"  href="../imagens/logo.png">
	 <!-- Bootstrap -->
    <link href="../public/css/estilo.css" rel="stylesheet">
    <!-- font awesomes - icones -->
    <link href="../public/css/all.min.css" rel="stylesheet">
    <link href="../public/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
	<nav class="navbar fixed-top navbar-inverse navbar-transparente  navbar-dark navbar-expand-lg">
      <a href="index.php" class="navbar-brand">
        <img src="../imagens/logo.png" alt="some text" width=60 height=40>
      </a>         
     <!--Botão toggle-->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" style="margin-right: 15px">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!--navbar-->
      <div class="collapse navbar-collapse" id="collapsibleNavbar">

        <ul class="navbar-nav ml-md-auto">
          <li class="nav-item active">
            <a href="" class="nav-link">Quem Somos</a>
          </li>  
          <li class="nav-item">
            <a href="#" class="nav-link">Missão</a>
          </li>

          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" id="formularioMenu" data-toggle="dropdown" area-haspopup="true" area-expanded="false">Formulários</a>
            <div class="dropdown-menu ">
              <a href="#" class="dropdown-item text-dark">Matrícula</a>
              <a href="#" class="dropdown-item text-dark">Rematrícula</a>
              <a href="#" class="dropdown-item text-dark">Lista</a>
            </div>
          </li>
        </ul>          
      </div>
    </nav> <!--nav-->
    <div class="container" style="margin-top: 58px; margin-bottom: 50px">

			<div class="row ">
				<div class="col-12 text-center my-2">
					<h1 style="font-weight: 330;"><i class="fa fa-file-pdf text-primary mr-3" aria-hidden="true"></i>Matricule-se aqui!</h1>
				</div>
				<div class="container">
					<form>
						<div class="form-row ">
							<div class="form-group col-md-9 col-6">
								<label for="nomeResp">Nome do responsável</label>
								<input type="text" class="form-control" id="nomeResp" placeholder="">
							</div>
							<div class="form-group col-md-3 col-6">
								<label for="cpfResp">CPF</label>
								<input type="text" class="form-control" id="cpfResp" placeholder="">
							</div>
						</div>

						<div class= "form-row">
							<div class="form-group col-md-6">
								<label for="parentesco">Grau de parentesco</label>
								<input type="text" class="form-control" id="parentesco" placeholder="">
							</div>
							<div class="form-group col-md-3">
								<label for="estadoCivil">Estado civil</label>
								<input type="text" class="form-control" id="estadoCivil" placeholder="">
							</div>
							<div class="form-group col-md-3">
								<label for="inputRg">RG</label>
								<input type="text" class="form-control" id="inputRg">
							</div>

						</div>
						<div class = "form-row">
							<div class="form-group col-md-4">
								<label for="inputTelefone">Telefone Residencial</label>
								<input type="tel" class="form-control" id="inputTelefone">
							</div>
							<div class="form-group col-md-4">
								<label for="inputCelular">Celular</label>
								<input type="tel" class="form-control" id="inputCelular">
							</div>
							<div class="form-group col-md-4">
								<label for="inputCelular2">Celular</label>
								<input type="tel" class="form-control" id="inputCelular2">
							</div>
						</div>
						<div class ="form-row">
							<div class="form-group col-md-9">
								<label for = "inputEndereco">Endereço</label>
								<input type="text" class="form-control" id="inputEndereco" placeholder="Rua/Avenida">
							</div>
							<div class="form-group col-md-3">
								<label for="inputNumero">N°</label>
								<input type="text" class="form-control" id="inputNumero">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-3">
								<label for="inputCidade">Cidade</label>
								<input type="text" class="form-control" id="inputCidade">
							</div>
							<div class="form-group col-md-2">
								<label for="inputUf">UF</label>
								<input type="text" class="form-control" id="inputUf" placeholder="Estado">
							</div>
							<div class="form-group col-md-7">
								<label for="inputEmail">Email</label>
								<input type="Email" class="form-control" id="inputEmail">
							</div>
						</div>

						<div class="form-row">

							<div class="form-group col-md-9">
								<label for="inputPai">Nome do pai</label>
								<input type="text" class="form-control" id=inputPai>
							</div>
							<div class="form-group col-md-3">
								<label for=inputCpfPai>CPF</label>
								<input type="text" class="form-control" id="inputCpfPai">
							</div>

						</div>

						<div class="form-row">

							<div class="form-group col-md-9">
								<label for="inputPai">Nome da mãe</label>
								<input type="text" class="form-control" id=inputMae>
							</div>
							<div class="form-group col-md-3">
								<label for=inputCpfMae>CPF</label>
								<input type="text" class="form-control" id="inputCpfMae">
							</div>

						</div>
						<div class="form-row">
							<div class="form-group col-md-9">
								<label for="inputAluno">Aluno(a)</label>
								<input type="text" class="form-control" id = "inputAluno">
							</div>
							<div class="form-group col-md-3">
								<label for="inputDataNascimento">Data de nascimento</label>
								<input type="text" class="form-control" id = "inputDataNascimento">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-4">
								<label for="inputAluno">N° Matrícula</label>
								<input type="text" class="form-control" id = "inputAluno">
							</div>

							<div class="form-group col-md-2">
								<label for="inputAluno">Sexo</label><br>
								<div class="custom-control custom-radio custom-control-inline">
									<input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
									<label class="custom-control-label" for="customRadioInline1">M</label>
								</div>

								<div class="custom-control col-md-2 custom-radio custom-control-inline">
									<input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
									<label class="custom-control-label" for="customRadioInline2">F</label>
								</div>
							</div>
							<div class="form-group col-md-6">
								<label for="inputDataNascimento">Curso em 2019</label>
								<input type="text" class="form-control" id = "inputDataNascimento">
							</div>
						</div>
						<div class="form-row my-2">
							<div class="col-sm-12">

								<input  class = "btn btn-primary" type="button" value="Cadastrar" id="cadastro" style="float: right;" /> 
								<a class="btn btn-danger text-white" id="voltar">Cancelar</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<?php include 'footer.php'; ?>
		</body>
		</html>