<?php 
    $title = "Home";
    include("header.php");
?>
<?php
    include ("connect.php");
    if(isset ($_POST) && !empty($_POST)){
        $pergunta = $_POST["pergunta"];
        $a = $_POST["A"];
        $b = $_POST["B"];
        $c = $_POST["C"];
        $d = $_POST["D"];
        $e = $_POST["E"];
        $correta = $_POST["correta"];
        
        $query = "insert into tb_questoes(pergunta, a,b,c,d,e,correta) values('$pergunta','$a','$b','$c', '$d','$e', '$correta');";
        $resultado = mysqli_query($connection, $query);
        echo  "<script>alert('Pergunta cadastrada com Sucesso!');</script>";
        }
?>
    <form action = "./index.php" method = "post">
        <div class = "card  col-sm-6 mx-auto">
            <div class= "card-header">
                Cadastre uma pergunta
            </div>
            <div id = "card-form">
                <label for="">Pergunta</label>
                <br>
                <textarea rows="4" cols="50" name = "pergunta"></textarea>
            
                <div class="form-group">
                    <label for="">A)</label>
                    <input type="radio" name = "correta" value = "A">
                    <input type="text" id = "A"name = "A"required>
                </div>
                <br>
                <div class="form-group">
                    <label for="">B)</label>
                    <input type="radio" name = "correta" value = "B">
                    <input type="text" id="B" name = "B" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="">C)</label>
                    <input type="radio" name = "correta" value = "C">
                    <input type="text" id = "C" name = "C" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="">D)</label>
                    <input type="radio" name = "correta" value = "D">
                    <input type="text" id = "D" name = "D" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="">E)</label>
                    <input type="radio" name = "correta" value = "E">
                    <input type="text" id = "E" name = "E" required>
                <br>
                <div class = "btn-text-right">
                    <button type = "submit" id="btn_add" class = "btn btn-primary">Salvar</button>
                </div>
                
            </div>
        </div>
    </form>