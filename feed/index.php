<?php 
    $pagina = "";
    include '../_include/head.html'; 
    include '../_include/header.html';
?>

<div id="content" >
    <section id="sectionFeed">
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