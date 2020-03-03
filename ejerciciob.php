<html>
    <head>
        <title>Ingresando valor</title>
    </head>
    <body>
        <form method="post">
         Ingrese el valor del numero:
        <input type="text" name="numero" >
        <br>
        <input type="submit" value="confirmar">
        </form>

      <?php
      if($_POST['numero'] <= 0){
        echo "el numero es nulo";
    }elseif($_POST['numero'] % 2 == 0){
          echo "el numero es par";
      }else{
          echo "el numero es impar";
      }
        
      ?>
</body>
</html>
