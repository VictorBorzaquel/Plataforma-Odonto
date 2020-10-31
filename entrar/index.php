<?php 
    $pagina = "";
    include '../_include/head.html'; 
?>
<div id="content">
    <section id="section" class="moldura feed center">
        <div id="divLogo" class="padding">
            <img src="../_img/Logo.png" alt="Plataforma Odonto" class="imgLogoLarge">

            <h2 class="descricaoMedium">
                Bem Vindo a primeira plataforma feita para você, 
                <br>estudante de Odontologia.
            </h2>

            <hr>
        </div><!--id="divLogo"-->
        
        <div id="divLogIn">
            <form class="padding" action="../feed/index.php" method="POST" id="formlogIn">
                <input type="email" name="email" id="logInEmail" placeholder="Email">
                <input type="password" name="senha" id="logInSenha" placeholder="Senha">

                <button type="submit">
                    Entrar
                </button> 
            </form><!--id="formlogIn"-->
            <hr>
            <a href="../criar/index.php">
                <button>
                    Criar Conta
                </button>
            </a>
        </div><!--id="divLogIn"-->
    </section>
</div>
<?php 
    include '../_include/footer.html';
?>