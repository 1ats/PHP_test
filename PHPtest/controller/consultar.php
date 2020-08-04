<?php 
                
                $cep = $_POST['cep'];  



$conexao=mysqli_connect("localhost", "root", "", "buscar") or die ( ' Erro na conexÃ£o ' ); 
$query = "SELECT * FROM endereco WHERE cep_id='$cep'"; 
$result_query = mysqli_query($conexao, $query) or die(' Erro na query:' . $query . ' ' . mysqli_error($conexao)); 
$linha = mysqli_fetch_assoc($result_query);
$total = mysqli_num_rows($result_query);



if ($_POST['cep'] == $linha['cep_id']){
if ($total > 0 ) {
  
 echo "<pre>";
 print_r("cep:"." ".$linha['cep_id']."\n "."rua:"." ".$linha['rua']."\n "."bairro:"." ".$linha['bairro']."\n "."cidade:"." ".$linha['cidade']."\n "."uf:"." ".$linha['uf']."\n "."ibge:"." ".$linha['ibge']);

 $cep = $linha['cep_id'];
 $rua = $linha['rua'];
 $bairro = $linha['bairro'];
 $cidade = $linha['cidade'];
 $uf = $linha['uf'];
 $ibge = $linha['ibge']; 
    

header("Location://localhost/PHPtest/public/index.php?cep=$cep&rua=$rua&bairro=$bairro'&cidade=$cidade&uf=$uf&ibge=$ibge");
   

} }else {
 
 $a=1;
     header("Location://localhost/PHPtest/public/index.php?a=$a");
   
}
	
?>