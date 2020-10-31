<?php 
    $pagina = " | Perfil";
    include '../_include/head.html'; 
    include '../_include/header.html';
?>

<div id="content">
    <section id="sectionPerfil" class="moldura">
        <img class="imgCapaLarge" src="../_img/fotoCapa.png" alt="Capa do Perfil">

        <div id="divImgPerfil" >
            <img class="imgPerfilLarge" src="../_img/fotoPerfil.png" alt="Foto de Perfil">
        </div>
        
        <hgroup id="dadoPerfilLarge">

            <h1 class="nomePerfil">
                Seu Nome
            </h1><!--class="nomePerfil"-->

            <p class="descricaoPerfil">
                Descrição Perfil
            </p><!--class="descricaoPerfil"-->
            
            <h2 class="editarPerfil">
                <a href="../editar/index.php">
                    Editar
                </a>
            </h2><!--class="editarPerfil"-->
        </hgroup><!--id="dadoPerfil"-->
        
    </section><!--id="sectionPerfil"-->

    <aside class="moldura">
        <h1>
            Sobre:
        </h1>
        <p>
            Faculdade: Estácio
            <br>Periodo: 6
            <br>Projeto Cientifico: 
        </p>
    </aside>

    <section id="sectionFeed" class="float">
        <?php 
            for ($i =1; $i <=5; $i ++) {
                include '../_include/resumo.html';
            }
        ?>
    </section><!--id="sectionFeed"-->
</div><!--id="content"-->
    
<?php 
    include '../_include/footer.html';
?>