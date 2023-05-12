<div class="Calculadora">
	
    <h1>Calculadora</h1>
        
    <form method="post">
        
        <input type="number" name="Num1" placeholder="Numero 1" />
        <input type="number" name="Num2" placeholder="Numero 2"/>
        <button type="submit" class="btn zoom-shadow">Somar</button>
        
    </form>
</div>
<div class="resposta_calc">
<?php
    if(isset($_POST["Num1"])){

        $num1 = (integer)$_POST["Num1"];
        $num2 = (integer)$_POST["Num2"];

        $resp = $num1 + $num2;

        echo "$resp";

}
?>
</div>