<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="text-center">
    <div class="container">
        <h1>Calculadora</h1>
        <form action="" method="post">
            <div class="form-group">
                <label for="num1">Número 1:</label>
                <input type="number" class="form-control" name="num1" id="num1" required>
            </div>
            <div class="form-group">
                <label for="num2">Número 2:</label>
                <input type="number" class="form-control" name="num2" id="num2" required>
            </div>
            <div class="form-group">
                <label for="operacao">Operação:</label>
                <select class="form-control" name="operacao" id="operacao" required>
                    <option value="soma">Adição (+)</option>
                    <option value="subtracao">Subtração (-)</option>
                    <option value="multiplicacao">Multiplicação (*)</option>
                    <option value="divisao">Divisão (/)</option>
                </select>
            </div><br>
            <button type="submit" class="btn btn-primary">Calcular</button>
        </form>
    </div>

    <?php
        if(isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operacao'])){
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operacao = $_POST['operacao'];

            switch ($operacao){
                case "soma":
                    $resultado = $num1 + $num2;
                    echo "<br><h5>Adição: $num1 + $num2 = $resultado</h5>";
                    break;
                case "subtracao":
                    $resultado = $num1 - $num2;
                    echo "<br><h5>Subtração: $num1 - $num2 = $resultado</h5>";
                    break;
                case "multiplicacao":
                    $resultado = $num1 * $num2;
                    echo "<br><h5>Multiplicação: $num1 * $num2 = $resultado</h5>";
                    break;
                case "divisao":
                    if($num2 == 0){
                        echo "<br><h5>ERRO: não foi possível realizar a divisão de $num1 por 0</h5>";
                    } else {
                        $resultado = $num1 / $num2;
                        echo "<br><h5>Divisão: $num1 / $num2 = $resultado</h5>";
                    }
                    break;
            }
        }
    ?>
</body>
</html>
