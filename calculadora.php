<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculadora</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
    crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <div class="container text-center">
    <div class="row">
      <div class="col">
        <h1>Calculadora</h1>
        <form name="calculadora" method="POST" action="">
          <div class="container text-center">
            <div class="card gap-2 col-4 mx-auto mb-3">
              <div class="card-body">
                <input class="card-body" type="hidden" name="input" value="" />
              </div>
            </div>
            <div class="gap-2 col-4 mx-auto">
              <div class="row mb-3">
                <div class="col">
                  <button type="submit" class="btn btn-info col-6" name="*" value="*">C</button>
                  <button type="submit" class="btn btn-light col-2" name="/" value="/">÷</button>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col">
                  <button type="submit" class="btn btn-outline-dark col-2" name="7" value="7">7</button>
                  <button type="submit" class="btn btn-outline-dark col-2" name="8" value="8">8</button>
                  <button type="submit" class="btn btn-outline-dark col-2" name="9" value="9">9</button>
                  <button type="submit" class="btn btn-light col-2" name="*" value="*">x</button>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col">
                  <button type="submit" class="btn btn-outline-dark col-2" name="4" value="4">4</button>
                  <button type="submit" class="btn btn-outline-dark col-2" name="5" value="5">5</button>
                  <button type="submit" class="btn btn-outline-dark col-2" name="4" value="4">4</button>
                  <button type="submit" class="btn btn-light col-2" name="-" value="-">-</button>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col">
                  <button type="submit" class="btn btn-outline-dark col-2" name="3" value="3">3</button>
                  <button type="submit" class="btn btn-outline-dark col-2" name="2" value="2">2</button>
                  <button type="submit" class="btn btn-outline-dark col-2" name="1" value="1">1</button>
                  <button type="submit" class="btn btn-light col-2" name="+" value="+">+</button>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col">
                  <button type="submit" class="btn btn-outline-dark col-4" name="0" value="0">0</button>
                  <button type="submit" class="btn btn-success col-4" name="=" value="=">=</button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

</body>

</html>

<?php



?>