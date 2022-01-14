<?php include("algoritmo.php");?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Encriptación</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/cover/">

    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/cover.css" rel="stylesheet">

  </head>
  <body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="masthead mb-auto">
    <div class="inner">
      <h3 class="masthead-brand">Proyecto de Encriptación</h3>
      <nav class="nav nav-masthead justify-content-center">
        <a class="nav-link" href="/encriptacion">Encriptar</a>
        <a class="nav-link active" href="desencriptar.php">Desencriptar</a>
      </nav>
    </div>
  </header>

  <main role="main" class="inner cover">

      <h1 class="cover-heading">Datos Para Desencriptar</h1><br><br>
 
        <form class="needs-validation" action="desencriptar.php" method="post">
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="firstName">Mensage</label>
              <input type="text" class="form-control" id="firstName" placeholder="Introduce El Mensage" name='mensage' required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="lastName">Clave</label>
              <input type="password" class="form-control" id="lastName" placeholder="Introduce La Contraseña" name="clave" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label for="username">Solución</label>
            <div class="input-group">

              <textarea name="solucion" rows="4" class="form-control" placeholder="Se Mostrara El mensage Desemcriptado......"><?php $solucion -> solucion($_POST['desencriptar'], $mensage, $clave);?></textarea>
              
            </div>
          </div>

          

          <hr class="mb-4">
          <button class="btn btn-primary btn-lg btn-block" type="submit" name="desencriptar" value="desencriptar">Desencriptar</button>
        </form>


  </main>

  <footer class="mastfoot mt-auto">
    <div class="inner">
      <p>Cover template for <a href="https://getbootstrap.com/">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
    </div>
  </footer>
</div>
</body>
</html>