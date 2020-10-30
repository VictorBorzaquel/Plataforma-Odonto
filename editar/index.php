<?php 
    $pagina = " | Perfil";
    include '../_include/head.html'; 
    include '../_include/navPrincipal.html';
?>

    <section class="sectionBloco">
        <h1>Mudar Dados do Perfil</h1>
        <hr>
        <form action="editar.php" method="post">
            <fieldset id="fieldsetImgPerfil">
                <legend>Foto Perfil</legend>
                <label for="inputFotoPerfil">
                    <img class="imgPerfil" src="../_images/fotoPerfil.png" alt="Foto de Perfil">
                    <input type="file" name="fotoPerfil" id="inputFotoPerfil">
                </label>
            </fieldset>
            
            <fieldset id="fieldsetImgCapa">
                <legend>Capa Perfil</legend>
                <label for="inputFotoCapa">
                    <img class="imgCapa" src="../_images/fotoCapa.png" alt="Capa do Perfil">
                    <input type="file" name="fotoCapa" id="inputFotoCapa">
                </label>
            </fieldset>
    
            <fieldset id="fieldsetIdPerfil">
                <legend>Seu @</legend>
                <label for="inputIdPerfil">
                    <input type="text" name="idPerfil" id="inputIdPerfil" placeholder="@doperfil">
                </label>
            </fieldset>

            <button>Voltar</button>
            <button type="submit">Salvar</button>
        </form>
    </section>
    
<?php 
    include '../_include/footer.html';
?>