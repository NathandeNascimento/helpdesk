<link rel="sortcut icon" href="img/logo.png" type="	icon" />

<? 	
	session_start();

?>

<?php

// variavel que identifica se a autenticacão foi realizada
$usuario_autenticado = false;

$usuarios_app = array(

    array("e-mail" => "adm@teste.com.br","senha" => "12.ab3456"),
    array("e-mail" => "user@teste.com.br","senha" => "abcd"),
    array("e-mail" => "saiery@nanana.com","senha" => "789789"),
    


);

/*echo '<pre>';
print_r($usuarios_app);
echo '</pre>';
*/

foreach($usuarios_app as $user){
 /* echo 'Usuário app:' . $user['e-mail'] . '/' . $user['senha'];
  echo '<br/>';
  echo 'Usuário Form:' . $_POST{'e-mail'} . ' / ' . $_POST{'senha'};
  echo '<hr>';*/
  
  
    /* print_r($user);
    echo '<hr>';*/


    if ($user['e-mail'] == $_POST{'e-mail'} && $user['senha'] == $_POST{'senha'}

    ){ $usuario_autenticado = true;
      
    } 

}
   if ($usuario_autenticado ) {
        echo "usuario autenticado";
        $_SESSION['autenticado'] = 'SIM';
        header('location: home.php');
            }
    else {
        $_SESSION['autenticado'] = 'NÃO';
     header('location: index.php?login=erro');
            
    }
  
    
     /*print_r($_POST);

    echo '<br/>';

    echo $_POST{'e-mail'};
    echo '<br/>';
    
    echo $_POST{'senha'};*/
    ?>