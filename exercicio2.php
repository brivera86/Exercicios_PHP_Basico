<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Exercício 2</title>
    <meta charset="utf-8">
  </head>
  <body>
    <h3> Questão 1 </h3>  
    <fieldset>
      <legend> Calculo de valores </legend>
      <form action ="#" method="post">
        <div class="form-group">
          <label> Informe o valor </label>
          <input type="number" step="1" name="a1" class="form-control">
        </div>
        <button type="submit" class="btn btn-dark"> Verificar </button>
      </form>
    </fieldset>  
  </div>

    <?php
     $a1 = isset($_POST['a1']) ? ($_POST['a1']) : 0;
     if($a1 < 0){
       echo "O modulo do é: " .($a1 * -1);
     }else {
       echo "O modulo do {$a1} é: ". $a1;
     };
     echo "<hr>"
    ?>
  
    <h3> Questão 2 </h3>
    <fieldset>
      <legend> Calculo de valores </legend>
      <form action ="#" method="post">
        <div class="form-group">
          <label> Informe o valor </label>
          <input type="number" step="1" name="a2" class="form-control">
        </div>
        <button type="submit" class="btn btn-dark"> Verificar </button>
      </form>
    </fieldset>

     <?php
          $a2 = isset($_POST['a2']) ? ($_POST['a2']) : 0;
          if($a2 % 2 == 0){
            echo "o numero {$a2} é par ";
          }else {
            echo "O numero {$a2} é impar"; 
          };
          echo "<hr>";
        ?>

    <h3> Questão 3 </h3>
    <fieldset>
      <legend> Calculo de valores </legend>
      <form action ="#" method="post">
        <div class="form-group">
          <label> Informe o valor </label>
          <input type="number" step="1" name="a3" class="form-control">
        </div>
        <div class="form-group">
          <label> Informe o valor </label>
          <input type="number" step="1" name="a4" class="form-control">
        </div>
        <button type="submit" class="btn btn-dark"> Verificar </button>
      </form>
    </fieldset>

    <?php
        if($a3 = isset($_POST['a3']) && ($_POST['a3'] != 0) && isset($_POST['a4'])) {
          $a3 = ($_POST['a3']);
          $a4 = ($_POST['a4']);
          echo "O primeiro numero é {$a3} e o segundo é {$a4} <br>";
          if($a3 % $a4 == 0){
              echo "O {$a3} é multiplo do {$a4}";
          }else{
              echo "O {$a3} não é multiplo do {$a4}";
          };
          echo "<hr>";
        }
    ?>

    <h3> Questão 4 </h3>
    <fieldset>
      <legend> Calculo de valores </legend>
      <form action ="#" method="post">
        <div class="form-group">
          <label> Informe o valor </label>
          <input type="number" step="1" name="a5" class="form-control">
        </div>
        <button type="submit" class="btn btn-dark"> Verificar </button>
      </form>
    </fieldset>

    <?php
        $a5 = isset($_POST['a5']) ? ($_POST['a5']) : "";
        if($a5 < 0 ){
            echo "O número é negativo.";
        }elseif($a5 > 0){
            echo "O número é positivo.";
        }else{
            echo "O número é zero.";
        };
    ?>
<hr>
    <h3> Questão 5 </h3>
    <fieldset>
      <legend> Calculo de valores </legend>
      <form action ="#" method="post">
        <div class="form-group">
          <label> Informe o valor </label>
          <input type="number" step="1" name="a6" class="form-control">
        </div>
        <button type="submit" class="btn btn-dark"> Verificar </button>
      </form>
    </fieldset>

    <?php
        $a6 = isset($_POST['a6']) ? ($_POST['a6']) : 0;
        if($a6 >= 5 && $a6 <= 20){
            echo "O número {$a6} está entre 5 e 20";
        }else{
            echo "O número {$a6} não está entre 5 e 20";
        };
    ?>
<hr>
<h3> Questão 6 </h3>
    <fieldset>
      <legend> Calculo de valores </legend>
      <form action ="#" method="post">
        <div class="form-group">
          <label> Informe o valor </label>
          <input type="number" step="1" name="s1" class="form-control">
        </div>
        <div class="form-group">
          <label> Informe o valor </label>
          <input type="number" step="1" name="s2" class="form-control">
        </div>
        <button type="submit" class="btn btn-dark"> Verificar </button>
      </form>
    </fieldset>

    <?php
       $s1 = isset($_POST['s1']) ? ($_POST['s1']) : 0;
       $s2 = isset($_POST['s2']) ? ($_POST['s2']) : 0; 
       if($s1 > $s2){
           echo "{$s1} > {$s2}, então a adição deles é: " .($s1 + $s2);
        }elseif($s1 < $s2){
            echo "{$s2} > {$s1}, então a multiplicação deles é: " .($s1 * $s2);
        }else
            echo "";
    ?>
<hr>
<h3> Questão 7 </h3>
    <fieldset>
      <legend> Calculo de valores </legend>
      <form action ="#" method="post">
        <div class="form-group">
          <label> Informe o primeiro número </label>
          <input type="number" step="1" name="s3" class="form-control">
        </div>
        <div class="form-group">
          <label> Informe o segundo número </label>
          <input type="number" step="1" name="s4" class="form-control">
        </div>
        <button type="submit" class="btn btn-dark"> Verificar </button>
      </form>
    </fieldset>

    <?php
         $s3 = isset($_POST['s3']) ? ($_POST['s3']) : "";
         $s4 = isset($_POST['s4']) ? ($_POST['s4']) : "";
         
         if($s3 > $s4){
             echo "O número {$s3} é maior que o número {$s4}.";
         }elseif($s3 < $s4){
             echo "O número {$s4} é maior que o número {$s3}.";
         }else{
            echo "Os números são iguais.";
         };
    ?>
<hr>
<h3> Questão 8 </h3>
    <fieldset>
      <legend> Calculo de valores </legend>
      <form action ="#" method="post">
        <div class="form-group">
          <label> Informe um ano diferente de zero </label>
          <input type="number" step="1" name="ano" class="form-control">
        </div>
        <button type="submit" class="btn btn-dark"> Verificar </button>
      </form>
    </fieldset>

    <?php
        $ano = isset($_POST['ano']) ? ($_POST['ano']) : 0;

        if ($ano%400 == 0) {
          echo "O ano {$ano} é bissexto";
          }
          elseif (($ano%4 == 0) && ($ano%100 == 0)){
          echo "O ano {$ano} não é bissexto";
          }
          elseif (($ano%4 == 0) && ($ano%100 != 0)){
          echo "O ano {$ano} é bissexto";
          }
     ?>

<h3> Questão 9 </h3>
    <fieldset>
      <legend> Calculo de valores </legend>
      <form action ="#" method="post">
        <div class="form-group">
          <label> Informe o valor do numerador</label>
          <input type="number" step="1" name="numerador" class="form-control">
        </div>
        <div class="form-group">
          <label> Informe o valor do denominador</label>
          <input type="number" step="1" name="denominador" class="form-control">
        </div>
        <button type="submit" class="btn btn-dark"> Verificar </button>
      </form>
    </fieldset>

    <?php
         $numerador = isset($_POST['numerador']) ? ($_POST['numerador']) : 0;
         $denominador = isset($_POST['denominador']) ? ($_POST['denominador']) : 0;
         
         if($denominador == 0){
             echo "O denominador deve ser diferente de zero.";
         } else {
             echo "A divisão de {$numerador} por {$denominador} resulta em: ". $numerador/$denominador;
         };
    ?>
<hr>

<h3> Questão 10 </h3>
    <fieldset>
      <legend> Calculo de valores </legend>
      <form action ="#" method="post">
        <div class="form-group">
          <label> Informe o valor do salário</label>
          <input type="number" step="1" name="sal" class="form-control">
        </div>
        <div class="form-group">
          <label> Informe o valor da prestação</label>
          <input type="number" step="1" name="prest" class="form-control">
        </div>
        <button type="submit" class="btn btn-dark"> Verificar </button>
      </form>
    </fieldset>

    <?php
         $sal = isset($_POST['sal']) ? ($_POST['sal']) : 0;
         $prest = isset($_POST['prest']) ? ($_POST['prest']) : 0;
         
         if($prest > ($sal * 0.2)){
             echo "Empréstimo não pode ser concedido.";
         } elseif($prest == ($sal * 0.2)) {
             echo "Empréstimo em analise";
         } elseif($prest < ($sal * 0.2)) {
          echo "Empréstimo pode ser concedido";
         }
    ?>
<hr>





  </body>
</html>