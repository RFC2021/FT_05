<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href = "https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel = "stylesheet" Integrity = "sha384- + 0n0xVW2eSR5OomGNYDnhzAbDsvyOXxcvSNDbiglp7VM crossTorxcvSNDbiglTB2VBYBYZCX + 0n0xVW2eSR5OomGNYDnhzAbDsvyOXxcvSNDbigb1ZCVM crossTorbiZCV + BNGlTB2VBYBYB1 + ZVMTBYTB2VBYTBYTB2VBYBiZCx + ZVMTBigb2VBBYBiZCi + ZVMTBigbi2CVM cross-TYBGlZCM + ZVMTBigb2VM "anônimo">
  <script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" Integrity = "sha384-gtEjrD / SeCtmISkJkNUaaKMoLD0 // ElJ19smozuHV6Big3Ielx" cross0x4big3Ielx "UHV6Blx3Ieb" = "anônimo"> </script>
  <title>Fórum Temático 05</title>
    <style>    
      label{
			display: block;
		}
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        Fórum Temático 05 - ADS
      </a>
    </nav>

    <div class="container">    
      <div class="row">
          <div class="card">
            <div class="card-body">
                <div class="form-group">
                <form action="valida.php" method="post">
		            	<label for="nome">Nome:</label>
		            	<input type="text" name="nome" id="nome" required> <br>
			
			            <label for="idade">Idade:</label>
		            	<input type="number" name="idade" id="idade" required> <br>
			
		            	<label for="site">Site: </label>
		            	<input type="url" name="site" id="site" required> <br>
			
			            <label for="email">Email: </label>
			            <input type="email" name="email" id="email" required> <br>
			
		            	<label for="mensagem">Mensagem: </label>
			            <textarea name="mensagem" id="mensagem" required></textarea> <br>
			
			            <input type="submit" value="Enviar">             
             </form>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>