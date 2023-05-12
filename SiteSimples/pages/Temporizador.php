<div class="Temporizador">
	
    <h1>Temporizador</h1>
        
    <form method="post">
        
        <input type="number" name="Seg" placeholder="Segundos" />
        <button type="submit" class="btn zoom-shadow">Play</button>
        
    </form>
</div>
<div class="Temp">
<?php
    if(isset($_POST["Seg"])){
        $temp = (integer)$_POST["Seg"];
        while($temp > 0){
            echo $temp-- .' '; 
        }
}
?>
</div>