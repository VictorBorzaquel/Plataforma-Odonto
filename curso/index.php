<?php 
    $pagina = " | Cursos";
    include '../_include/head.html'; 
    include '../_include/navPrincipal.html';
?>

<div id="divConteudo">
<section class="sectionBloco" id="sectionCurso">
<h1>Cursos</h1>
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

</div>
</section>



<?php 
    include '../_include/footer.html';
?>