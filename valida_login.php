<link rel="sortcut icon" href="img/logo.png" type="	icon" />

<? 	
	session_start();

?>

<?php

// variavel que identifica se a autenticacão foi realizada
$usuario_autenticado = false;

$usuarios_app = array(

    array('id' => 1,"e-mail" => "adm@teste.com.br","senha" => "1234"),
    array('id' => 2,"e-mail" => "user@teste.com.br","senha" => "1234"),
    array('id' => 3,"e-mail" => "jose@teste.com.br","senha" => "1234"),
    array('id' => 4,"e-mail" => "maria@teste.com.br","senha" => "1234"),
    


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
       $usuario_id = $user ['id'];      
    } 

}
   if ($usuario_autenticado ) {
        echo "usuario autenticado";
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $usuario_id;
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