<?php 
    $pagina = "";
    include '../_include/head.html'; 
    include '../_include/navPrincipal.html';
?>

<div id="divConteudo">
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