<?php 
    $pagina = " | Perfil";
    include '../_include/head.html'; 
    include '../_include/navPrincipal.html';
?>

    <div id="divConteudo">

    <section id="sectionPerfil" class="sectionBloco">
        
        <img class="imgCapa" src="../_images/fotoCapa.png" alt="Capa do Perfil">
        <div id="figurePerfil">
            <img class="imgPerfil" src="../_images/fotoPerfil.png" alt="Foto de Perfil">
        </div>
        <div id="dadoPerfil">
            <h1 class="nomePerfil"><figcaption>Seu Nome</figcaption></h1>
            <p class="descricaoPerfil">Descrição Perfil</p>
            <h2 class="editarPerfil"><a href="../editar/index.php">Editar</a></h2>
        </div>
        
    </section>
    <section  class="sectionFeed">
        <?php 
            for ($i =1; $i <=5; $i ++) {
                include '../_include/post.html';
            }
        ?>
    </section>
    </div>
    
<?php 
    include '../_include/footer.html';
?>