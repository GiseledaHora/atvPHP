<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Página Incial</title>
</head>
<body>
     <?php include('funcoes.php')?>
    
    <button class="btn btn-primary" class="btn btn-primary"><a style="color: #000;text-decoration: none;" href="menu.php">Voltar</a></button><br><br>
    <form  method ="POST">
        <div class="form-control">
                <label for="exampleFormControlInput1" class="form-label">Primeiro Número:</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="primeiroNumero" placeholder="Primeiro Numero">
            </div>
        
            <div class="form-control">
                <label for="exampleFormControlInput1" class="form-label">Segundo Número:</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="segundoNumero" placeholder="Segundo Numero">
            </div>
    

        <br><br>
        <button type="submit" class="btn btn-primary">Calcular

        <?php
            $num1 = $_POST['primeiroNumero'];
            $num2 = $_POST['segundoNumero'];
        ?>
        </button>
    <br><br>
    </form>

    <div class="form-control">
            <label for="exampleFormControlTextarea1" class="form-label">Resultado:</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" readonly>
            <?php
                 if($_POST['primeiroNumero'] != "" || $_POST['segundoNumero'] != ""){
                    echo "\nA soma é: ".somar($num1,$num2).
                        "\nA subtração é: ".subtrair($num1,$num2).
                        "\nA divisão é: ".dividir($num1,$num2).
                        "\nA multiplicação é: ".multiplicar($num1,$num2);
                }else{
                    echo "Preencha os campos!";
                }


            ?>
        </textarea>
      
    </div>

    
    </body>
</html>