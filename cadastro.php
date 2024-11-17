<?php
include('conexão.php'); 
$usuario = 'root';
 $senha ='';
 $database = 'loja';
 $host ='localhost';

$con = mysqli_connect ($host, $usuario, $senha, $database) or die ("Erro de conexão");
if(isset($_POST['cadastrar'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $query = mysqli_query($con, "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')");
    if($query){
         echo 'Cadastro realizado com sucesso';

} else{
    echo 'Nao foi possivel realizar cadastro';
}

}

?>
<!DOCTYPE html>
	<html>
	<head>
		<meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="cadastro.css">
		<title></title>
	</head>
	<body class="body_full" bgcolor="white">
		<header>
			<div id="div1">
				<img src="./img/logo.png" alt="" style="max-width: 200px;" height="133px">

			</div>

		</header>
		<div class="form">
      <form method="post">
		<h1 class="title"> Cadastro </h1>
		  <p class="pagtlt" style="height: 0px;">Faça o seu login ou crie uma conta</p>
      		<br>
      		<br>
      		<label style="font-weight: bold;" >Usúario</label>
      		<br>
      		<input class="txt" type="text" name="nome" placeholder="Nome do Usúario">
      		<br>
      		<br>
          <label style="font-weight: bold;"  >E-mail</label>
          <br>
          <input class="txt" type="text" name="email" placeholder="abcdefgh@gmail.com">
          <br>
          <br>
      		<label style="font-weight: bold;" >Senha</label>
      		<br>
      		<input class="txt" type="password" name="senha" placeholder="Senha">
      		<br><br>
      		<input style="height: 50px; color: black; background-color: red; font-weight: bold; " type="submit" name="cadastrar" value="Cadastrar">
          <a href="index.php"><input style="height: 50px; color: black; background-color: red; font-weight: bold; " type="button" name="" value="Voltar"></a> <br><br>
		  <a class="btnop2" href="login.php" action="login.php">Fazer login</a><br><br>
		</form> 
      
      </div>
	</body>
	<footer class="div_full">
        <div class="div_rdp">
           <img src="./img/logo.png" alt="" style="max-width: 150px;" height="133px">
           Blaze Store
        </div>
        <div class="div_rdp1">
            Atendimento: (21) 968809708
            blazestoresupport@gmail.com
<br> <br>
            Horário de atendimento <br>
Seg a Sex de 08h às 00hs <br>
Sáb a Dom de 10h às 23hs
        </div>
        <div class="div_rdp2">
            GUILHERME DE OLIVEIRA 43408816867 | <br> CNPJ: 29.135.352/0001-36 |  <br> RUA MARCOS CALHEIRO, 543 AP- CIDADE BANGU - RJ CEP 08583-360
        </div>
        <div class="div_rdp3">
            <!-- <div style="background-color: red; align-self: center;">
            <a href="www.google.com">
            <img src="./img/logo.png" alt="" style="max-width: 150px;" height="133px">
            </a> -->
        
    </div>
   
</div>

</footer>

	</html>