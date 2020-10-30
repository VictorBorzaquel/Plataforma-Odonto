<?php 
    $pagina = "";
    include '../_include/head.html'; 
?>

    <section class="sectionBloco">
        <h1>Criar Conta</h1>

        <form action="criar.php" method="post" id="formCriar">
            <fieldset id="criarDado">
                <div id="imputNome">
                    <input type="text" name="primeiroNome" id="criarPrimeiroNome" placeholder="Primeiro Nome" required>
                    <input type="text" name="ultimoNome" id="criarUltimoNome" placeholder="Ultimo Nome" required>
                </div>
                <div id="imputDado">
                    <input type="email" name="email" id="criarEmail" placeholder="Email" required>
                    <input type="password" name="senha" id="criarSenha" placeholder="Senha" required>
                </div>
            </fieldset><!--id="criarDado"-->
    
            <fieldset id="criarAniversario">
                <legend>Aniversario</legend>
                <select name="dia" id="criarDia">
                    <?php 
                        for ($i = 1; $i <= 31; $i ++) {
                            echo "<option value='$i'>$i</option>";
                        }
                    ?>
                </select>
                <select name="mes" id="criarMes">
                    <?php 
                        $mes = array ("Jan","Fev","Mar","Abr","Mai","Jun","Jul","Ago","Set","Out","Nov","Dez");
                        for ($i = 1; $i <= count($mes); $i ++) {
                            $mesEscrito = $mes[$i-1];
                            $mesNumero = $i;
                            echo "<option value='$mesNumero'>$mesEscrito</option>";
                        }
                    ?>
                </select>
                <select name="ano" id="criarAno">
                    <?php 
                        for ($i = date("Y"); $i >= 1900; $i --) {
                            echo "<option value='$i'>$i</option>";
                        }
                    ?>
                </select>
            </fieldset><!--id="criarAniversario"-->
    
            <fieldset id="criarGenero">
                <legend>Genero</legend>
                <label for="criarMulher">Mulher <input type="radio" name="genero" value="mulher" id="criarMulher"></label>
                <label for="criarHomem">Homem  <input type="radio" name="genero" value="homem" id="criarHomem"></label>
                <label for="criarNeutro">Neutro  <input type="radio" name="genero" value="neutro" id="criarNeutro"></label>
            </fieldset><!--id="criarGenero"-->
    
            <button type="submit">Criar Conta</button>
            <button id="buttonJaTenhoConta">Já tenho uma conta</button>
        </form><!--id="formCriar"-->
    </section>

<?php 
    include '../_include/footer.html';
?>