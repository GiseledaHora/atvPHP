<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio08</title>
</head>
<body>
<?php include 'funcoes.php'; ?>
    <button class="btn btn-primary" class="btn btn-primary"><a style="color: #000;text-decoration: none;" href="menu.php">Voltar</a></button><br><br>
        <form  method ="POST">
        <div class="form-control">
                 <label for="exampleFormControlInput1" class="form-label">Coloque o valor do seu salário mensal:</label>
                 <input type="text" class="form-control" id="exampleFormControlInput1" name="salario" placeholder="salario">
            </div>
        
        <div class="form-control">
               <label for="exampleFormControlInput1" class="form-label">Quanto porcento você quer aumentar seu salário: </label>
               <input type="text" class="form-control" id="exampleFormControlInput1" name="porcento" placeholder="porcento">
           </div>

        <button type="submit" class="btn btn-primary">Calcular
        <?php
             if(isset($_POST['salario']) && ($_POST['porcento']))
             {
                $salario = $_POST["salario"];
                $porcento = $_POST["porcento"];
             }

         
         ?>
        
    </button<>
    </form>
    <?php
        echo exercicio8 ($salario, $porcento);
    ?>
</body>
</html>