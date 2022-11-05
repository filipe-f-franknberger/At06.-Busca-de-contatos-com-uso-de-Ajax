<?php
    include "action.php";

?>

<!doctype html>
<html lang="pt-br">
  <head .backg >
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastrar-se</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CSS.css">

    <script src="script.js"></script>

            <meta charset="utf-8"> 
            <title>Cadastrar-se</title>     
         </head>
    <body>

      <div class="container">

         <div class="header">

          <label for="botao">
            <a href="DEVWEB_ATIVIDADE1.php"><button type="button" class="btn btn-dark">ㅤㅤVoltarㅤㅤ</button></a>
          </label>

               <h2 id="titulo" class="titulo">Formulário de Cadastro:</h2>
        </div>
        
        <form method="post" onsubmit="inserir()" > 

         <div class="inputbox">
                                <label class="col-sm-2 col-form-label" for="nome">id:</label>
                                <input readonly class="form-control-plaintext" type="text" id="id" name="id"  value=<?=isset($contato)?$contato['id']:''?> >
                        </div>

              <div name="userdiv" id="userdiv" class="form-control">
                <label for="username">Nome e sobrenome do Contato :</label>
                <input type="text" id="username" class="form-control" name="username" value=<?=isset($username)?$username['id']:''?>>
                <h7 class="text-danger" id="sem_nome"></h7>

                <small>Informe um nome de contato válido!</small>
              </div>

                 <div class="form-control">
                    <label for="sexo">Informe seu sexo:</label>
                  </div>
    
                      <div class="form-check">
                          <input class="form-check-input" type="radio" name="sexo" id="masculino">
                          <label class="form-check-label" for="masculino"> <h6>Masculino</h6></label>
                      </div>

                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="sexo" id="feminino" checked>
                        <label class="form-check-label" for="feminino"><h6>Feminino</h6></label>

                </div>
             <br>

              <div class="form-control">
                     <label for="nascimento">Data de nascimento</label>
                     <input type="date" id="nascimento" name="nascimento" value=<?=isset($nascimento)?$contato['nascimento']:''?>>
                     <h7 class="text-danger" id="sem_data"></h7>

                     <small>Informe uma data!</small>
                 </div> 

                </li>
                <li>
                  <div class="form-control">
                  <label for="idade">Idade:</label>
                  <input type="number" name="idade" id="idade" value=<?=isset($idade)?$idade['idade']:''?>>

                  <small>Informe uma idade válida!</small>
                
              </div> 
            </li>
                 <br>
             <li>
              <div class="form-control">
                  <label for="email" class="form-label">Email:</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="@ex.com" value=<?=isset($email)?$email['email']:''?>>
                  <h7 class="text-danger" id="sem_email"></h7>

                    <small>Informe um email válido!</small>
                  </div>
             </li>
             <li>
              <div class="form-control">
                  <label for="insta">Instagram : <br></label>
                   <span class="input-group-text" id="basic-addon1">@</span>
                   <input type="text" id="insta" name="insta" class="form-control" placeholder="@seu_instagram" aria-label="Insta" aria-describedby="basic-addon1" value=<?=isset($insta)?$insta['insta']:''?>>

                   <small>Informe um instagram válido!</small>
                 </div>  
             </li>
             <li>
                      <div class="form-control">
                        <label for="number" >Número do Telefone :</label>
                        <input type="number" id="number" name="number" class="form-control" placeholder="(99) 99999-9999" value=<?=isset($number)?$number['number']:''?>>
                        <h7 class="text-danger" id="sem_number"></h7>
                      </label>
                        <small>Informe um número válido!</small>
                      </div>

                      <div class="form-check">
                          <input class="form-check-input" type="radio" name="flexRadioDefault2" id="comercial">
                          <label class="form-check-label" for="comercial"> <h6>Comercial</h6></label>
                      </div>

                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault2" id="pessoal" checked>
                        <label class="form-check-label" for="pessoal"><h6>Pessoal</h6></label>
                      </div>
             </li>
             <li>
              <div class="form-control">
                    <label for="image" class="form-label">Envie sua foto</label>
                    <input class="form-control" type="file" id="image" name="image">

                    <small>Envie uma imagem!</small>
                  </div>
             </li>
             <li>
                <div class="form-control">
                  <label for="recado" >Escreva um recado:</label>
                    <span class="input-group-text" id="ex_recado">Ex : Só de boa! :)</span>
                    <input type="text" class="form-control" id="recado" name="recado" value=<?=isset($recado)?$recado['recado']:''?>>
                    <h7 class="text-danger" id="sem_recado"></h7>

                    <small>Informe um recado válido!</small>
                  </div>
             </li>
             <li>
              <div class="form-control">
                <label for="contato">Selecione a origem do contato:</label>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="contato" id="contato">
                    <option selected>Origem do contato:</option>
                    <option value="1">Trabalho</option>
                    <option value="2">Faculdade</option>
                    <option value="3">Virtual</option>
                    <option value="1">Festa</option>
                    <option value="2">Família</option>
                    <option value="3">Outro</option>
                    <h7 class="text-danger" id="sem_contato"></h7>
                  </select>
                  <small>Selecione uma opção!</small>
                </div>
             </li>
             <br>
             </select>
             <li> 

              <div class="form-control">
             <label for="parente">Selecione se é parente ou não:</label>
             </div>
             <div class="form-check">
                  <input class="form-check-input" type="radio" name="parente" id="parente">
                  <label class="form-check-label" for="parente">
                  <h6>Sim</h6>
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="parente" id="parente" checked>
                <label class="form-check-label" for="parente">
                  <h6>Não</h6>
                </label>
              </li>
            </ul>
           <button class="btn btn-dark" type="submit" id="enviar" name="acao" value="salvar" >Enviar</button>
         </form>
      </div>
     </body>
 </html>