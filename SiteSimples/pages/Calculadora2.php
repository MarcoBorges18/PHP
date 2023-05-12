<div class="Calculadora2">
	
    <h1>Calculadora</h1>
        
    <form method="post">
        
        <input type="number" name="Num1" placeholder="Numero 1" />
        <input type="number" name="Num2" placeholder="Numero 2"/>
        <button type="submit" class="btn zoom-shadow">Dividir</button>
        
    </form>
</div>
<div class="resposta_calc2">
<?php
    if(isset($_POST["Num1"])){
        $num1 = (float)$_POST["Num1"];
        $num2 = (float)$_POST["Num2"];

        if($num2 > 0){
            $resp = $num1 / $num2;

            echo "$resp";
        }else{
        ?>
        <div class="erro">
        <?php
            echo "Impossivel dividir por 0";
        ?>
        </div>
        <?php
        }
        
        

}
?>
</div>