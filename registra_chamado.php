<?

echo '<pre>';
print_r($_POST);
echo '</pre>';

//fopen("arquivo.txt","a");

$titulo = str_replace('#', '-', $_POST['titulo']);
$categoria = str_replace('#', '-', $_POST['categoria']);
$descricao = str_replace('#', '-', $_POST['descrição']);

$texto = $titulo . '#' . $categoria . '#' . $descricao;
echo $texto;

?>