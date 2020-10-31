<?php 
    $pagina = " | Criar Conta";
    include '../_include/head.html'; 
?>

<div id="content">
    <section id="sectionCriarConta" class="moldura padding center feed">
        <h1>
            Criar Conta
        </h1>

        <form action="criar.php" method="post" id="formCriar">
            <fieldset id="criarDado">
                <div id="imputNome">
                    <input type="text" name="primeiroNome" id="criarPrimeiroNome" placeholder="Primeiro Nome" required>
                    <input type="text" name="ultimoNome" id="criarUltimoNome" placeholder="Ultimo Nome" required>
                </div><!--id="imputNome"-->

                <div id="imputDado">
                    <input type="email" name="email" id="criarEmail" placeholder="Email" required>
                    <input type="password" name="senha" id="criarSenha" placeholder="Senha" required>
                </div><!--id="imputDado"-->
            </fieldset><!--id="criarDado"-->
    
            <fieldset id="criarAniversario">
                <legend>
                    Aniversario
                </legend>

                <select name="dia" id="criarDia">
                    <?php 
                        for ($i = 1; $i <= 31; $i ++) {
                            echo "
                                <option value='$i'>
                                    $i
                                </option>
                            ";
                        }
                    ?>
                </select><!--id="criarDia"-->

                <select name="mes" id="criarMes">
                    <?php 
                        $mes = array ("Jan","Fev","Mar","Abr","Mai","Jun","Jul","Ago","Set","Out","Nov","Dez");
                        for ($i = 1; $i <= count($mes); $i ++) {
                            $mesEscrito = $mes[$i-1];
                            $mesNumero = $i;

                            echo "
                                <option value='$mesNumero'>
                                    $mesEscrito
                                </option>
                            ";
                        }
                    ?>
                </select><!--id="criarMes"-->
                
                <select name="ano" id="criarAno">
                    <?php 
                        for ($i = date("Y"); $i >= 1900; $i --) {
                            echo "
                                <option value='$i'>
                                    $i
                                </option>
                            ";
                        }
                    ?>
                </select><!--id="criarAno"-->
            </fieldset><!--id="criarAniversario"-->
    
            <fieldset id="criarGenero">
                <legend>
                    Genero&nbsp;
                </legend>

                <label for="criarMulher">
                    Mulher&nbsp;
                    <input type="radio" name="genero" value="mulher" id="criarMulher">
                </label><!--for="criarMulher"-->

                <label for="criarHomem">
                    Homem&nbsp;
                    <input type="radio" name="genero" value="homem" id="criarHomem">
                </label><!--for="criarHomem"-->

                <label for="criarNeutro">
                    Neutro&nbsp;
                    <input type="radio" name="genero" value="neutro" id="criarNeutro">
                </label><!--for="criarNeutro"-->
            </fieldset><!--id="criarGenero"-->

            <button type="submit" id="buttonCriarConta">
                Criar Conta
            </button><!--id="buttonCriarConta"-->
        </form><!--id="formCriar"-->
        <hr>
        <a href="../entrar/index.php">
            <button id="buttonJaTenhoConta">
                Já tenho uma conta
            </button><!--id="buttonJaTenhoConta"-->
        </a>
    </section><!--id="sectionCriarConta"-->
</div><!--id="content"-->

<?php 
    include '../_include/footer.html';
?>