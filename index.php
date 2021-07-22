




<!DOCTYPE html>

<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<link rel="sortcut icon" href="img/logo.png" type="	icon" />

	<style>
		body{
			
			background:url(imagen2.jpg);}

		   .centralizar{
			font-family: Trebuchet MS, Helvetica, sans-serif;
		    margin-top: 60px ;
		    border:  solid 3px ;
		    text-align: center;
		    border-radius: 20px;
		    padding: 20px 0 0 0 ;
		    display: inline block;
		    font-size: 1.5em;
		   	width: 400px;
		    height: 260px;
			margin-left: 420px ;
			justify-content: center;
			align-items: center;
			opacity: 0.9;
			
			
			
			
	 }

		 /*.container{
			 border: 1px solid red;
			 width: 100vw;
				height: 100vh;
				background: #6C7A89;
				display: flex;
				flex-direction: row;
				justify-content: center;
				align-items: center;
				}*/


		    #circilo{
		 	margin: 0px;
		 	padding: 0px;
		 	}	

		 	.barra {

		 		font-family: Trebuchet MS, sans-serif;
		 		text-align:auto;
		 		font-size: 4em;
		 		width: 100%;
		 		background:#00001a;
		 		color: #ffffff;
				
				

		 	}
			 

		 	.autenticar :hover{ 
		 		background: white;
		 		cursor: pointer;
		 		

		 	}

			 .transbox{
				margin: 5%;
  				font-weight: bold;
  				color: #000000;
			 }

			 .erro {
				color: red;
				font-size: 15px;
				margin-top:-40px;
				margin-bottom:-7px;
			 }

	</style>

</head>
<body>

<nav >
	<div>
		<img src="logo.png" alt="Central de Ajuda" width="320" height="320" style="float:left;">
	</div>

	<div class="barra"> &nbsp &nbsp &nbsp &nbsp Help Desk</div>
	
</nav>

<div >  

<div class="centralizar" >
	

<div style="font-size: 1.5em; color: #ffffff; text-transform: uppercase; " >
Login
</div>

<br/>

<div >
	<form action="valida_login.php" method="post"> 
		
		<label style="color: #ffffff;" > </label>
		<input style=" border-radius: 5px; font-size: 1em" type="email" name="e-mail" placeholder=" E-mail...">

		<br/><br/>

		<label style="color: #ffffff;" ></label>
		<input style=" border-radius: 5px; font-size: 1em" type="password" name="senha" placeholder=" Senha...">

		<br/><br/>	

		<?php
		if(isset($_GET['login']) && $_GET['login'] == 'erro') {
			?>

			 
			<div class=erro> 
				<p>Usuário ou senha inválido (s) !</P>
			</div>

			
			<?php } ?>


			<?php
		if(isset($_GET['login']) && $_GET['login'] == 'erro2') {
			?>

			 
			<div class=erro> 
				<p>Autentique-se antes de acessar as paginas restritas!</P>
			</div>

			
			<?php } ?>

		

		<div class="autenticar">
			<input style=" border-radius: 20px; font-size: 0.8em; "  type="submit" name="" value="Autenticar">
		</div>

	</form>
</div>
</div>
</div>
<section>
	<div style="text-align: center; margin: 50px 10px; border-radius: 50px; font-size: 1em; color: #ffffff;"> Todos os direitos reservados &copy; NN- Nathan Nascimento Ltda</div>
</section>

</body>
</html>