<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
    crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Calculadora</title>
</head>
<body>
    <div class="container">
        <h1>Calculadora</h1>
        <form action="resultado.php" method="get">
            <div class="form-group">
                <label for="numero1">Número 1:</label>
                <input type="number" class="form-control" name="numero1" id="numero1">
            </div>
            <div class="form-group">
                <label for="numero2">Número 2:</label>
                <input type="number" class="form-control" name="numero2" id="numero2">
            </div>
            <div class="form-group">
                <label for="operacao">Operação:</label>
                <select class="form-control" name="operacao" id="operacao" required>
                    <option value="soma">Soma</option>
                    <option value="subtracao">Subtração</option>
                    <option value="multiplicacao">Multiplicação</option>
                    <option value="divisao">Divisão</option>
                </select>
            </div><br>
            <button type="submit" class="btn btn-primary">Calcular</button>
        </form>
    </div>
</body>
</html>