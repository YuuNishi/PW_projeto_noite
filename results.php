<?php
    $title="Resultado";
    include("header.php");
    $IdQ =array_keys($_POST) ;
?>

    <form>
        <h1>Resultados</h1>
        <?php
            include("connect.php");
            $count = 0;
            $score = 0;
            while($count < count($IdQ)){
            $query = "SELECT * FROM tb_questoes WHERE Id=".$IdQ[$count];
            $resultado = mysqli_query($connection, $query) or die($connection);
            while($row = mysqli_fetch_array($resultado)){
        ?>
    
    <div class="card">
        <div class="card-header">
            <?php echo $count+1;?>
        </div>
        
        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <h1><?php echo $row["pergunta"];?></h1>
                <?php if($row["correta"]==$_POST[$IdQ[$count]]){
                    $score++;
                    echo"<p>Acertou!!!</p>";
                    }else{
                    echo" <p>A alternativa correta era: ".$row["correta"]."</p>";
                        
            }?>
            </blockquote>
        </div>
        </div>
        <br>
        <?php
        $count++;
        }
    }?>
    <div class="card">
        <div class="card-header">
            Pontuação
        </div>
        <div class="card-body">
            <h1><?php echo $score." Acerto(s)"?></h1>
        </div>
    </div>
    
    </form>
