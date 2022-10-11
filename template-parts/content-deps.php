<?php
    $deps = get_post_meta(get_id_by_template_name('page-home.php'), 'depoimentos_home', true );
  
    
?>
<div class="owl-carousel client_slide d-flex" id="client_slide">
    <?php
        foreach($deps as $dep):
    ?>
    <article class="client_card">
        <div class="client_card_img">
            <img src="<?= $dep['dep_img'] ?>" alt="">
        </div>
        <div class="client_card_info">
            <h3><?= $dep['dep_nome'] ?></h3>
            <p><?= $dep['dep_text'] ?></p>
            <!-- 
            <small>Ler mais...</small>
             -->
        </div>
    </article>

    <?php endforeach; ?>

</div>