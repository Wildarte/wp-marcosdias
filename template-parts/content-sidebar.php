<div class="sidebar_category">
    <h3 class="subtitle-default">Categorias</h3>
    <ul class="list_category">
        <?php
            if(is_category()) $current_cat = get_the_category(); //pega a categoria da página atual

            $terms = get_terms([
                'taxonomy' => 'category',
                'hide_empty' => false,
                'orderby' => 'term_id'
            ]);

            foreach($terms as $term):
        ?>
        <li>
            <a class="<?= $current_cat[0]->name == $term->name ? 'category_selected' : '' ?>" href="<?= get_category_link($term->term_id) ?>"><i class="bi bi-arrow-right-circle"></i> <?= $term->name ?></a>
        </li>
        <?php endforeach; ?>

    </ul>
</div>

<div class="cta_sidebar">
    <h4 class="subtitle-default color-white">Busque agora seus direitos</h4>
    <p class="desc-default color-white">Entre em contato com a Marcos Roberto Dias Sociedade de Advogados</p>
    <a class="btn-blue bg-gray-5" href="">Converse com um advogado</a>
</div>
            