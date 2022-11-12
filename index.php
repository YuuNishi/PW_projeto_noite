<?php
    include "connect.php";
    if(isset ($_POST) && !empty($_POST)){
        $pergunta = $_POST["pergunta"];
        $a = $_POST["A"];
        $a = $_POST["B"];
        $a = $_POST["C"];
        $a = $_POST["D"];
        $a = $_POST["E"];
        $correta = $_POST["correta"];
        
        $query = "insert into tb_questoes";
        $query += "values('$pergunta','$a','$b','$c', '$d','$e', '$correta')";
        $resultado = mysqli_query($connection, $query);
        }
?>
<form action = "./index.php" method = "post">
    <label for="">Pergunta</label>
    <textarea name = "pergunta"></textarea>

    <label for="">A)</label>
    <input type="radio" name = "correta" value = "A">
    <input type="text" name = "A">
    <br>
    <label for="">B)</label>
    <input type="radio" name = "correta" value = "B">
    <input type="text" name = "A">
    <br>
    <label for="">C)</label>
    <input type="radio" name = "correta" value = "C">
    <input type="text" name = "C">
    <br>
    <label for="">D)</label>
    <input type="radio" name = "correta" value = "D">
    <input type="text" name = "D">
    <br>
    <label for="">E)</label>
    <input type="radio" name = "correta" value = "E">
    <input type="text" name = "E">
    <button type = "submit">Salvar</button>
</form>
<?php
    $query = "select * from tb_questoes orderby id desc";
    $resultado = mysqli_query($connection, $query);
    while($row = mysqli_fetch_array($resultado)){
        ?>
        <div>
            <h1><?php echo $row["pergunta"];?></h1>
            <h3><?php echo $row["a"];?></h3>
            <h3><?php echo $row["b"];?></h3>
            <h3><?php echo $row["c"];?></h3>
            <h3><?php echo $row["d"];?></h3>
            <h3><?php echo $row["e"];?></h3>
        </div>
        <?php
    }
?>