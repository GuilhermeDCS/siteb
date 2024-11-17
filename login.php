<?php
include('conexão.php'); 

if(isset($_POST['email']) || isset($_POST['senha'])) { 
  
   if(strlen($_POST['email']) == 0) { 
       echo "Preencha seu nome";
    } else if (strlen($_POST['senha']) == 0) {
       echo "Preencha sua senha";
    } else {
          
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);
        

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

         $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }
            
            $_SESSION['id_usuario'] = $usuario['id_usuario'];
            $_SESSION['email'] = $usuario['email'];

            header("Location: painel1.php");

        } else {
            echo "Falha ao logar! nome ou senha incorretos";

        }

     }
  }
?>


<!DOCTYPE html>
	<html>
	<head>
		<meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="login.css">
		<title></title>

	
	
	</head>
	<body class="body_full" bgcolor="white">
		<header>
			<div id="div1">
				<img src="./img/logo.png" alt="" style="max-width: 200px;" height="133px">

			</div>

		</header>
		<div class="form" >
                      
			<form action="" method="POST">
				<h1 class="title"> Login</h1>
				 
      		<br>
      		<br>
      		<label style="font-weight: bold;" >E-mail</label>
      		<br>
      		<input class="txt" type="text" name="email" placeholder="abcdefgh@gmail.com">
      		<br>
      		<br>
      		<label style="font-weight: bold;">Senha</label>
      		<br>
      		<input class="txt" type="password" name="senha" placeholder="Senha">
      		<br> <br>
      		<button style="height: 50px; color: black; background-color: red; font-weight: bold; ">ENTRAR</button> 
             <a href="index.php"><input style="height: 50px; color: black; background-color: red; font-weight: bold; " type="button" name="" value="Voltar"></a> <br><br>
			<a class="btnop1" href="cadastro.php" action="login.php">Fazer Cadastro</a> <br> <br>
            <a class="btnop2" href="loginadm.php" action="loginamd.php">Fazer login como ADM</a><br><br>
      </form>
      </div>
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
	</body>
</html>