<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Exercicio4</title>
</head>
<body>
<button class="btn btn-primary" class="btn btn-primary"><a style="color: #000;text-decoration: none;" href="menu.php">Voltar</a></button><br><br>
    <form  method ="POST">
        <div class="form-control">
                <label for="exampleFormControlInput1" class="form-label">Primeira nota:</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="primeiraNota" placeholder="Primeira Nota">
            </div>
        
            <div class="form-control">
                <label for="exampleFormControlInput1" class="form-label">Segunda nota:</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="segundaNota" placeholder="Segunda Nota">
            </div>
            
            <div class="form-control">
                <label for="exampleFormControlInput1" class="form-label">Terceira nota:</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="terceiraNota" placeholder="Terceira Nota">
            </div>
    
            <button type="submit" class="btn btn-primary">Calcular

            <?php
                if($_POST['primeiraNota'] != "" || $_POST['segundaNota'] != "" || $_POST['terceiraNota'] != ""){
                    echo exercicio4($num1,$num2,$num3);
                }
            ?>
    </button>
    <br><br>
    </form>
</body>
</html>