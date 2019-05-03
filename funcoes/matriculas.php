<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Matricule-se</title>
	<link rel="icon"  href="imagens/logo.png">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" media="screen" href="menu.css" />
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">


</head>
<body>


	<div class="container ">

		<div class="row ">
			<div class="col-12 text-center my-2">
				<h1 style="font-weight: 330;"><i class="fa fa-file-pdf text-primary mr-3" aria-hidden="true"></i>Matricule-se aqui!</h1>
			</div>
			<div class="col-sm-12">
				<form>
					<div class="form-row ">
						<div class="form-group col-md-9">
							<label for="nomeResp">Nome do responsável</label>
							<input type="text" class="form-control" id="nomeResp" placeholder="">
						</div>
						<div class="form-group col-md-3">
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


	</body>
	</html>