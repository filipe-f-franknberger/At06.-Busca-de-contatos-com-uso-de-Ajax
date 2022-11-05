
<?php

define('JSON_CTTS','https://63544585e64783fa8282641e.mockapi.io/Contatos');
define('JSON','cadastros.json');

$destino = '';

function carregaDadosFormParaVetor(){
    $destino = '';
    if (isset($_FILES['foto'])){
        $destino = 'imagens/'.$_FILES['foto']['name'];
        move_uploaded_file($_FILES['foto']['tmp_name'],$destino);
    }

    $dados = array( 
    'id' => isset($_POST['id'])?$_POST['id']:'', 
    'nome' => isset($_POST['username'])?$_POST['username']:'',
    'dtnasc' => isset($_POST['nascimento'])?$_POST['nascimento']:'',
    'email' => isset($_POST['email'])?$_POST['email']:'',
    'telefone' => isset($_POST['number'])?$_POST['number']:'',
    'sexo' => isset($_POST['sexo'])?$_POST['sexo']:'',
    'parente' => isset($_POST['parente'])?$_POST['parente']:'',
    'origem' => isset($_POST['contato'])?$_POST['contato']:'',
    'recado' => isset($_POST['recado'])?$_POST['recado']:'',
    'foto'=>$destino
    
); 
print_r($dados);
}

function geraID ($dados){
    $id = intval($dados[count($dados)-1]->id);
    return(++$id);
}

$dados = array( 
    'id' => isset($_POST['id'])?$_POST['id']:'', 
    'nome' => isset($_POST['username'])?$_POST['username']:'',
    'dtnasc' => isset($_POST['nascimento'])?$_POST['nascimento']:'',
    'email' => isset($_POST['email'])?$_POST['email']:'',
    'telefone' => isset($_POST['number'])?$_POST['number']:'',
    'sexo' => isset($_POST['sexo'])?$_POST['sexo']:'',
    'parente' => isset($_POST['parente'])?$_POST['parente']:'',
    'origem' => isset($_POST['contato'])?$_POST['contato']:'',
    'recado' => isset($_POST['recado'])?$_POST['recado']:'',
    'foto'=>$destino);

    $arquivo = fopen('cadastros.json','w+');
    fwrite($arquivo,json_encode($dados));
    fclose($arquivo);

function inserir($dados){
    $arquivo = fopen('cadastros.json','w+');
    fwrite($arquivo,json_encode($dados));
    fclose($arquivo);
}

function salvaContexto($id, $nome, $sobrenome, $email, $senha, $datanasc, $parente, $sexo){

     $novosdados = array('id'=>$id,
                         'username'=>$nome,
                         'email'=>$email,
                         'datanasc'=>$datanasc,
                         'recado'=> $recado,
                         'parente'=>$parente,
                         'sexo'=>$sexo);
    return $novosdados;
 }


function ApresentaDadosVetor(){
    if (file_exists(JSON)){
        $conteudo = file_get_contents(JSON);
        $contatos = json_decode($conteudo,true);
    if(file_exists(JSON_CTTS))
            $conteudo = file_get_contents(JSON_CTTS);
            $contatos = json_decode($conteudo,true);

        return $contatos;
    }
    return null;
}

function salvaDadosNoArquivo($dados){
    file_put_contents(JSON,json_encode($dados));    
}

function nextID($dados){
    $id = 0;
    if ($dados)
        $id = intval($dados[count($dados)-1]['id']);
    return ++$id;
}

function carregaDoArquivoParaVetor(){
    if (file_exists(JSON)){
        $conteudo = file_get_contents(JSON);
        $contatos = json_decode($conteudo,true);
        return $contatos;
    }
    return null;

}

function validaDados($dados){

    foreach($dados as $campo){  
        if ($campo == '')
            return false;
    }
    return true;
}

function excluir($id){
    $dados = carregaDoArquivoParaVetor();
    $i = 0;
    foreach($dados as $contato){
        if ($contato['id'] == $id)
            break;
        else
        $i++;
    }
    array_splice($dados,$i,1);
    salvaDadosNoArquivo($dados);
}

function buscaContato($id){
    $dados = carregaDoArquivoParaVetor();
    foreach($dados as $contato){

        if ($contato['id'] == $id)
            return $contato;
    }
}

function alterar($alterado){
    $dados = carregaDoArquivoParaVetor();
    $i = 0;
    foreach($dados as $contato){
        if ($contato['id'] == $alterado['id'])
            break;
        else
        $i++;
    }
    array_splice($dados,$i,1,array($alterado));
    inserir($dados);  
}

$dados = array();
$novosdados = array();

$acao = isset($_POST['enviar'])?$_POST['enviar']:"";
if($acao == "salvar"){
        $contato = carregaDadosFormParaVetor();
        if ($contato['Id'] == 0){
            if (inserir($contato))
                header('location: Tabela.php');
        }else{    
            alterar($contato);
            header('location: Tabela.php');
    
        }
}


if(!empty($_GET['id'])){
    
    $id = $_GET['id'];
    $result = "a"; 

}


  