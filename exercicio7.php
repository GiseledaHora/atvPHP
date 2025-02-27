<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Exercicio07/07</title>
</head>
<body>

    <h1>Escreva o Total de Votos</h1>
    <?php include 'funcoes.php'; ?>
    <button class="btn btn-primary" class="btn btn-primary"><a style="color: #000;text-decoration: none;" href="menu.php">Voltar</a></button><br><br>
        <form  method ="POST">
        <div class="form-control">
                 <label for="exampleFormControlInput1" class="form-label">Eleitores</label>
                 <input type="text" class="form-control" id="exampleFormControlInput1" name="totalEleitores" placeholder="totalEleitores">
            </div>
        
        <div class="form-control">
               <label for="exampleFormControlInput1" class="form-label">Votos Válidos: </label>
               <input type="text" class="form-control" id="exampleFormControlInput1" name="totalValidos" placeholder="totalValidos">
           </div>

           <div class="form-control">
               <label for="exampleFormControlInput1" class="form-label">Votos Brancos:</label>
               <input type="text" class="form-control" id="exampleFormControlInput1" name="totalBrancos" placeholder="totalBrancos">
            </div>
            
            <div class="form-control">
                 <label for="exampleFormControlInput1" class="form-label">Votos nulos</label>
                 <input type="text" class="form-control" id="exampleFormControlInput1" name="totalNulos" placeholder="totalNulos">
            </div>

            <br><br>
        <button type="submit" class="btn btn-primary">Calcular
            <?php
        if(isset($_POST['eleitores']) && isset ($_POST['brancos']) && isset ($_POST['nulos']) && isset ($_POST['validos']))
        {
            $eleitores = $_POST["totalEleitores"];
            $brancos = $_POST["totalBrancos"];
            $nulo = $_POST["totalNulos"];
            $validos = $_POST["totalValidos"];
        }
         ?>
        </button<>
        </form>
       <br><br>
       <?php
            echo Exercicio07($brnacos, $validos, $nulos, $eleitores);
       ?>
        
</body>
</html>