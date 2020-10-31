<?php 
    $pagina = " | Resumos";
    include '../_include/head.html'; 
    include '../_include/navPrincipal.html';
?>

<div id="divConteudo" >
<section id="sectionCurso" class="sectionBloco">

<h1>Resumos</h1>
<table id="tableMeusCursos">
    <tr class="categoria">
        <th class="nomeCategoria">Expecializações</th>
        <td>
            <figure class="figureCurso">
                <img src="../_images/fotoCapa.png" alt="Hipnose Clinica">
                <figurecaption>Hipnose Clinica</figurecaption>
            </figure> 
        </td>
        <td>
            <figure class="figureCurso">
                <img src="../_images/fotoCapa.png" alt="Armonização Facil">
                <figurecaption>Armonização Facil</figurecaption>
            </figure>
        </td>
        <td>
            <figure class="figureCurso">
                <img src="../_images/fotoCapa.png" alt="Buxectomia">
                <figurecaption>Buxectomia</figurecaption>
            </figure>
        </td>
    </tr>

    <tr class="categoria">
    <th class="nomeCategoria">Complemento Academico</th>
        <td>
            <figure class="figureCurso">
                <img src="../_images/fotoCapa.png" alt="Hipnose Clinica">
                <figurecaption>Anaminese</figurecaption>
            </figure> 
        </td>
        <td>
            <figure class="figureCurso">
                <img src="../_images/fotoCapa.png" alt="Armonização Facil">
                <figurecaption>Escultura de Dente</figurecaption>
            </figure>
        </td>
        <td>
            <figure class="figureCurso">
                <img src="../_images/fotoCapa.png" alt="Buxectomia">
                <figurecaption>Escultura de Dente 2</figurecaption>
            </figure>
        </td>
    </tr>
</table>

    <table id="tableMeusResumos">
        <h2>Meus Resumos</h2>
        <ul>
            <li></li>
        </ul>
    </table><!--id="tableMeusResumos"-->

    <table id="tableFavoritos">
        <h2>Favoritos</h2>
        <ul>
            <li></li>
        </ul>
    </table><!--id="tableFavoritos"-->

    <table id="tableUltimos">
        <h2>Últimos</h2>
        <ul>
            <li></li>
        </ul>
    </table><!--id="tableUltimos"-->

    <table id="tableResumosDeAmigos">
        <h2>Resumos de Amigos</h2>
        <ul>
            <li></li>
        </ul>
    </table><!--id="tableResumosDeAmigos"-->

    <table id="tableMateria">
        <h2>Matérias</h2>
        <ul>
            <li></li>
        </ul>
    </table><!--id="tableMateria"-->

</section>
</div>

<?php 
    include '../_include/footer.html';
?>