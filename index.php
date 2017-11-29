<?php 
  session_start();
 ?>
 
<!doctype html>
<html lang="en">
  <head>
    <title>Requerimento de Falta</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="formulario.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script type="text/javascript" src="jquery-3.2.1.min.js"></script>


  </head>
    <body>
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
      
      <!--cabeçalho  -->
      <div id="hearder">
         <div class="barra">
              <div class="large-12 medium-12 small-12">
                  <div class="large-2 medium-2 small-2 columns">
                    <div id="logo-reitoria">
                      <a class="acesso-reitoria" href="/inscricao/"> <img src="logo-reitoria.png "></a>
                    </div>
                  </div>
                <!--LOGO DA CRADT 
                  <div class="large-2 medium-2 small-2 columns">
                    <div id="logo-pronatec"><a class="logo-pronatec"><img src=" AQUI" ></a></div>
                  </div>  -->                                      
              </div>              
         </div>
    </div>
      <div class="container">
          <form method="POST" action="envio.php">
            <fieldset>
              <legend style="text-align: left;font-size: 30px"> Requerimento - Aluno(a) </legend>
              <div class="form-group">
                <table class="table table-sm ">
                      <thead >
                          <tr >
                            <th scope="col">Campus</th>
                            <th scope="col">Nome do(a) aluno(a)</th>
                            <th scope="col">Matrícula</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td> <label> <input class="form-control" type="text" name="campus"> </label> </td> 
                              <td> <label> <input class="form-control" type="text" name="nome"> </label> </td>
                              <td> <label> <input class="form-control" type="text" name="matricula" required> </label> </td>
                          </tr>
                      </tbody>
                          <!-- -------------------- ---------------------- ------------------------ -->
                      <thead>
                          <tr>
                            <th scope="col">Periodo</th>
                            <th scope="col">Curso</th>
                            <th scope="col">Turno</th>
                            <th scope="col">Telefone</th>
                          </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td> <label> <input class="form-control" type="number" min="1" max="4" name="periodo"> </label> </td>
                          <td> <label> <select class="form-control" name="curso"> 
                              <option disabled selected> -- </option> 
                              <option value="ipi"> Informatica para Internet</option>
                              <option value="log"> Logistica</option>
                            </select></label>
                          </td>
                          <td> <label> <select  class="form-control" name="turno">
                               <option disabled selected>----</option> 
                               <option value="Manha">Manhã</option> 
                               <option value="tarde">Tarde</option>
                              </select></label>
                          </td>
                          <td> <label> <input class="form-control" id="tel" type="text" name="fone"> </label> </td>
                        </tr>
                      </tbody>
                      <!-- ----------------- ---------------------- ---------------- ------------------ -->
                      <thead> 
                        <tr>
                          <th scope="col">CPF</th>
                          <th scope="col">Identidade</th>
                          <th scope="col">Email</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>

                          <td> <label> <input  class="form-control" type="text" name="cpf" id="cpf" required> </label> </td>
                          <td><label> <input  class="form-control" type="text" name="rg" id="rg" required></label> </td>
                          <td> <label> <input  class="form-control" type="text" name="email"></label> </td>
                        </tr>
                      </tbody>
                      <!-- ------------------- ---------------------- ------------------------ ------------------ -->
                      <thead>
                        <tr>
                          <th scope="col">Itens</th>
                          <th scope="col"> Outros</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                         <td> <label> <select  class="form-control" name="itens">
                               <option disabled selected>----</option> 
                               <option value="cancelamento">Cancelamento de Matrícula</option> 
                               <option value="declaracao">Declaração de Matrícula ou Vinculo</option>
                               <option value="diploma">Diploma</option>
                               <option value="historico">Histórico Escolar</option>
                               <option value="falta">Justificativa de Falta</option>
                               <option value="reabertura">Reabertura de Matrícula</option>
                               <option value="trancamento">trancamento de Matrícula</option>
                              </select></label>
                          </td>
                          <td>
                            <label> <textarea class="form-control" rows="3" name="outros"></textarea></label>
                          </td>
                           </td>
                        </tr>
                      </tbody>
                      <!-- ------------------------ ----------------------- ----------------- --------------------- -->
                      <thead>
                          <tr>
                            <th scope="col">Observações</th>
                            <th scope=""> Anexo de arquivos</th>
                          </tr> 
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                           <label> <textarea class="form-control" rows="5" name="obs"></textarea> </label></td>
                          <td> <label> <input type="file" class="form-control-file" name="file"></label></td>
                        </tr>
                      </tbody>
                </table>
                <br><br>
                <input type="submit" class="btn btn-lg btn-block" value="Enviar">
              </div>
            </fieldset>
          </form>
        </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script type="text/javascript" src="jquery.mask.min.js"></script>
    
    <script type="text/javascript">
      $(document).ready(function (){
        var $Tel = $('#tel');
        $Tel.mask('(00) 0000-0000');
      });
    </script>
      </body>
</html>