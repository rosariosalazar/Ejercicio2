<?php
 
if($_POST) {
    $numero_uno = 0;
    $numero_dos = 0;
    $resultado = 0;
    $residuo = 0;
     
    if(isset($_POST['numero1'])) {
      $numero_uno = $_POST['numero1'];
    }
    
     
    if(isset($_POST['numero2'])) {
        $numero_dos = $_POST['numero2'];
    }
     
    $resultado = $numero_uno / $numero_dos;
    $residuo = $numero_uno % $numero_dos;
             
    if($residuo = 0) {
        echo "<p>El numero $numero_uno si es divisible entre el numero $numero_dos</p>";
    } else {
        echo "El numero $numero_uno NO es divisible entre el numero $numero_dos</p>";
    }
     
} else {
    echo '<p>Algo salio mal</p>';
}
 
?>