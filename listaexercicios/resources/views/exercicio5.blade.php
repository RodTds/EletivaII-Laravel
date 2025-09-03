<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Calcular Média</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container py-3">
<h1>Calcular Média</h1>
<form method="post" action="/resposta5">
  @csrf <!-- CSRF  -NAO ESQUECER SENAO PAGINA EXPIRADA-->
<div class="mb-3">
              <label for="valor1" class="form-label">Nota 1</label>
              <input type="number" id="valor1" name="valor1" class="form-control" required="">
            </div><div class="mb-3">
              <label for="valor2" class="form-label">Nota 2</label>
              <input type="number" id="valor2" name="valor2" class="form-control" required="">
            </div><div class="mb-3">
              <label for="valor3" class="form-label">Nota 3</label>
              <input type="number" id="valor3" name="valor3" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>