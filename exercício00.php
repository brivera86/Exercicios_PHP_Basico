<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title> Exercício 00 </title>
        <meta charset="utf-8">
    </head>
    <body>
    
    <h3> Questão 1 </h3>  
    <fieldset>
      <legend> Calculo de valores </legend>
      <form action ="#" method="post">
        <div class="form-group">
          <label> Informe o valor do produto:</label>
          <input type="number" step="1" name="a1" class="form-control">
        </div>
        <button type="submit" class="btn btn-dark"> Verificar </button>
      </form>
    </fieldset>  
  </div>

    <?php
     $a1 = isset($_POST['a1']) ? ($_POST['a1']) : "";
     if($a1 != 0){
       echo "O valor original do é: {$a1} <br>";
       echo "Valor do produto com 9% de desconto é: " . $a1 * 0.91;
     }else {};

     echo "<br><hr><br>"
    ?>



<h3> Questão 2 </h3>  
    <fieldset>
      <legend> Calculo de valores </legend>
      <form action ="#" method="post">
        <div class="form-group">
          <label> Informe a distânica percorrida em KM:</label>
          <input type="number" step="1" name="dist" class="form-control">
        </div>
        <div class="form-group">
          <label> Informe em litros o combustível consumido:</label>
          <input type="number" step="1" name="gas" class="form-control">
        </div>
        <button type="submit" class="btn btn-dark"> Verificar </button>
      </form>
    </fieldset>  
  </div>

    <?php
     $dist = isset($_POST['dist']) ? ($_POST['dist']) : "";
     $gas = isset($_POST['gas']) ? ($_POST['gas']) : "";
     
     if($dist != 0 && $gas != 0){
       echo "O consumo médio é: " . $dist/$gas . " km/l";
    }else {};

     echo "<br><hr><br>"
    ?>



<h3> Questão 3 </h3>  
    <fieldset>
      <legend> Calculo de valores </legend>
      <form action ="#" method="post">
        <div class="form-group">
          <label> Informe a distância percorrida em KM:</label>
          <input type="number" step="1" name="dist" class="form-control">
        </div>
        <div class="form-group">
          <label> Informe em litros o combustível consumido:</label>
          <input type="number" step="1" name="gas" class="form-control">
        </div>
        <div class="form-group">
          <label> Informe preço do combustível em reais:</label>
          <input type="number" step="1" name="vlr" class="form-control">
        </div>
        <button type="submit" class="btn btn-dark"> Verificar </button>
      </form>
    </fieldset>  
  </div>

    <?php
     $dist = isset($_POST['dist']) ? ($_POST['dist']) : "";
     $gas = isset($_POST['gas']) ? ($_POST['gas']) : "";
     $vlr = isset($_POST['vlr']) ? ($_POST['vlr']) : "";
     
     if($dist != 0 && $gas != 0 && $vlr != 0){
       echo "O custo é: " . ($dist/($gas*$vlr)) . " reais/km";
    }else {};

     echo "<br><hr><br>"
    ?>



<h3> Questão 4 </h3>  
    <fieldset>
      <legend> Calculo de valores </legend>
      <form action ="#" method="post">
        <div class="form-group">
          <label> Informe a quantidade de carros vendidos:</label>
          <input type="number" step="1" name="vend" class="form-control">
        </div>
        <button type="submit" class="btn btn-dark"> Verificar </button>
     </form>
    </fieldset>  
  </div>

    <?php
     $vend = isset($_POST['vend']) ? ($_POST['vend']) : "";
     
     if($vend != 0 ){
       echo "O salário total é: " . (($vend*300)+800) . " reais";
    }else {};

     echo "<br><hr><br>"
    ?>

<h3> Questão 5 </h3>  
    <fieldset>
      <legend> Calculo de valores </legend>
      <form action ="#" method="post">
        <div class="form-group">
          <label> Informe o total de votos:</label>
          <input type="number" step="1" name="tot" class="form-control">
        </div>
        <div class="form-group">
          <label> Informe o número de votos brancos:</label>
          <input type="number" step="1" name="bra" class="form-control">
        </div>
        <div class="form-group">
          <label> Informe o número de votos nulos:</label>
          <input type="number" step="1" name="nul" class="form-control">
        </div>
        <div class="form-group">
          <label> Informe o número de votos válidos:</label>
          <input type="number" step="1" name="val" class="form-control">
        </div>
        <button type="submit" class="btn btn-dark"> Verificar </button>
      </form>
    </fieldset>  
  </div>

    <?php
     $tot = isset($_POST['tot']) ? ($_POST['tot']) : "";
     $bra = isset($_POST['bra']) ? ($_POST['bra']) : "";
     $nul = isset($_POST['nul']) ? ($_POST['nul']) : "";
     $val = isset($_POST['val']) ? ($_POST['val']) : "";
     
     if($tot != 0 && $bra != 0 && $nul != 0 && $val != 0){
       echo "Percentual de votos brancos: " . (($bra/$tot)*100) . " %<br>";
       echo "Percentual de votos nulos: " . (($nul/$tot)*100) . " %<br>";
       echo "Percentual de votos válidos: " . (($val/$tot)*100) . " %<br>";

    }else {};

     echo "<br><hr><br>"
    ?>


    </body>
</html>