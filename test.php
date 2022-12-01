<?php 
    $title = "Simulado";
    include("header.php");
?>

<form action="./results.php" method = "post">
<?php
    include("connect.php");
    $query = "SELECT * FROM tb_questoes WHERE CHAR_LENGTH(PERGUNTA)>0 ORDER BY RAND() DESC LIMIT 4";
    $resultado = mysqli_query($connection, $query);
    $i = 1;
    while($row = mysqli_fetch_array($resultado)){
        ?>

<div class="card col-sm-6 mx-auto">
  <div class="card-header">
    <?php echo "Questão ".$i;?>
  </div>
    <div class="card-body">
        <blockquote class="blockquote mb-0">
          <fieldset id= "<?php echo "resp".$i?>">
            <h2><?php echo $row["pergunta"];?></h2>
            <input class = "form-check-input" type="radio" name = "<?php echo $row["id"]?>" value = "A">
            <label class="form-check-label" for="<?php echo $row["id"]?>" >A) <?php echo $row["a"];?></label>
            <input class = "form-check-input" type="radio" name = "<?php echo $row["id"]?>" value = "B">
            <label class="form-check-label" for="<?php echo $row["id"]?>">B) <?php echo $row["b"];?></label>
            <input class = "form-check-input" type="radio" name = "<?php echo $row["id"]?>" value = "C">
            <label class="form-check-label" for="<?php echo $row["id"]?>">C)<?php echo $row["c"];?></label>
            <input class = "form-check-input" type="radio" name = "<?php echo $row["id"]?>" value = "D">
            <label class="form-check-label" for="<?php echo $row["id"]?>">D)<?php echo $row["d"];?></label>
            <input class = "form-check-input" type="radio" name = "<?php echo $row["id"]?>" value = "E">
            <label class="form-check-label" for="<?php echo $row["id"]?>">E)<?php echo $row["e"];?></label>
          </fieldset>
        </blockquote>
    </div>
  </div>
    <br>
    <?php
    $i++;
    }
    ?>
    <div class="btn-text-right">
      <button type="submit" id="btn_resp" href="results.php" class="btn btn-primary">Encerrar</button>
      
    </div>
</form>


<?php 
    include("footer.php");
?>