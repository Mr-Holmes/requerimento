<!doctype html>
<html lang="en">
  <head>
    <title>Requerimento de Falta</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

    <div class="container">
        <form method="POST" action="">
          <fieldset>
            <legend>Requerimento - Aluno(a)</legend>
            <div class="form-group">
              <table class="table table-sm ">
                <thead >
                    <tr>
                      <th scope="col">Campus</th>
                      <th scope="col">Nome do(a) aluno(a)</th>
                      <th scope="col">Matrícula</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> <label> <input class="form-control" type="text" name="campus"> </label> </td> 
                        <td> <label> <input class="form-control" type="text" name="nome"> </label> </td>
                        <td> <label> <input class="form-control" type="text" name="matricula"> </label> </td>
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
                    <td> <label> <input class="form-control" type="text" name="fone"> </label> </td>
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
                    <td> <label> <input class="form-control" type="text" name="cpf" required> </label> </td>
                    <td><label> <input class="form-control" type="text" name="rg" required></label> </td>
                    <td> <label> <input class="form-control" type="text" name="email"></label> </td>
                  </tr>
                </tbody>
              </table>
              <br><br>
              <input type="submit" class="btn btn-primary btn-lg btn-block" value="Enviar">
            </div>
          </fieldset>
        </form>
      </div>

          </body>
</html>