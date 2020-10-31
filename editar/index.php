<?php 
    $pagina = " | Perfil";
    include '../_include/head.html'; 
    include '../_include/header.html';
?>

<div id="content">
    <section class="moldura padding center feed" id="sectionEditar">
        <h1>
            Mudar Dados do Perfil
        </h1>

        <hr>

        <form id="formEditar" action="index.php" method="post">
            <fieldset id="fieldsetImgPerfil">
                <legend>
                    Foto Perfil
                </legend>

                <label id="labelFotoPerfil" for="inputFotoPerfil">
                    <img class="imgPerfilSmall" src="../_img/fotoPerfil.png" alt="Foto de Perfil">
                    <input type="file" name="fotoPerfil" id="inputFotoPerfil">
                </label><!--id="labelFotoPerfil"-->
            </fieldset><!--id="fieldsetImgPerfil"-->
            
            <fieldset id="fieldsetImgCapa">
                <legend>
                    Capa Perfil
                </legend>

                <label id="labelFotoCapa" for="inputFotoCapa">
                    <img class="imgCapaSmall" src="../_img/fotoCapa.png" alt="Capa do Perfil">
                    <input type="file" name="fotoCapa" id="inputFotoCapa">
                </label><!--id="labelFotoCapa"-->
            </fieldset><!--id="fieldsetImgPerfil"-->
    
            <fieldset id="fieldsetIdPerfil">
                <legend>
                    Seu @
                </legend>

                <label id="labelIdPerfil" for="inputIdPerfil">
                    <input type="text" name="idPerfil" id="inputIdPerfil" placeholder="@doperfil">
                </label><!--id="labelIdPerfil"-->
            </fieldset><!--id="fieldsetIdPerfil"-->

            <fieldset id="fieldsetDescricaoPerfil">
                <legend>
                    Sua Descrição
                </legend>

                <label id="labelDescricaoPerfil" for="inputDescricaoPerfil">
                    <input type="text" name="descricaoPerfil" id="inputDescricaoPerfil" placeholder="Descrição do Perfil">
                </label><!--id="labelDescricaoPerfil"-->
            </fieldset><!--id="fieldsetDescricaoPerfil"-->

            <button type="submit">
                Salvar
            </button>
        </form><!--id="formEditar"-->
        <hr>
        
        <a href="../perfil/index.php">
            <button>
                Voltar
            </button>
        </a>
    </section><!--id="sectionEditar"-->
</div><!--id="content"-->

<?php 
    include '../_include/footer.html';
?>