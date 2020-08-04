<?php
   


 function get_endereco($cep){

  // formatar o cep removendo caracteres nao numericos
  $cep = preg_replace("/[^0-9]/", "", $cep);
  $url = "http://viacep.com.br/ws/$cep/xml/";

  $xml = simplexml_load_file($url);
  return $xml;
}

$cep = $_GET['a'];  
$endereco =  get_endereco($cep);


 $rua = $endereco->logradouro;
 $bairro = $endereco->bairro;
 $cidade = $endereco->localidade;
 $uf = $endereco->uf ;
 $ibge = $endereco->ibge ;


 $conexao=mysqli_connect("localhost", "root", "", "buscar") or die ( ' Erro na conexÃ£o ' );
$query = "SELECT * FROM endereco WHERE cep_id='$cep'"; 
$result_query = mysqli_query($conexao, $query) or die(' Erro na query:' . $query . ' ' . mysqli_error($conexao)); 
$linha = mysqli_fetch_assoc($result_query);
$total = mysqli_num_rows($result_query);


if ($_GET['a'] == $linha['cep_id']){
if ($total > 0 ) {
  
  echo "existe";

     header("Location:http://localhost/PHPtest/public/index1.php?mg1=d");

} }else {


   $result_usuario = "INSERT INTO endereco (cep_id, rua, bairro, cidade,uf, ibge) VALUES ('$cep', '$rua', '$bairro', '$cidade', '$uf', '$ibge')"  or die(' Erro no envio:' .  $result_usuario . ' ' . mysql_error() );
    $resultado=mysqli_query($conexao, $result_usuario);
   
    header("Location:http://localhost/PHPtest/public/index1.php?mg=d");

}
	
?>