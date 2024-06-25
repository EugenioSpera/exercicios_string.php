<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>

  <h1>Repetição de frase:</h1>

  <!-- //Sempre criar um formulario para usar no JS ou PHP -->

  <form action="string.php" method="POST">

    <div class="select_area">
      <label for="frase">Digite uma frase a ser repetida:</label>
      <input type = "text" name="frase" id="frase"></input>
      <label for="qtd">Digite a quantidade de repetições:</label>
      <input type="number" name="qtd" id="qtd"></input>
      <button class="button-area" type="submit">Enviar</button>
    </div>

  </form>


  <form action="string.php" method="POST">

    <div class="select_area">
      <label for="frase1">Digite uma frase:</label>
      <input type = "text" name="frase1" id="frase1"></input>
      <label for="frase_subst">Digite a palavra para substituir:</label>
      <input type="text" name="frase_subst" id="frase_subst"></input>
      <button class="button-area" type="submit">Enviar</button>
    </div>

  </form>




  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./style.css">
</body>

</html>''