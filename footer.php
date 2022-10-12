<footer class="footer">

<div class="container content_footer d-flex">
    <div class="f-25 col_footer">
        <a href="" class="link_footer">
            <img src="<?= get_template_directory_uri() ?>/assets/img/logo_mrd.png" alt="">
        </a>
    </div>

    <div class="f-25 col_footer">
        <h3>Atendimento</h3>
        <p>Segunda a sexta-feira,
            das 08:30 às 18:30</p>
    </div>

    <div class="f-25 col_footer">
        <h3>Menu</h3>

        <?php
            wp_nav_menu([
                'menu' => 'Menu Rodapé',
                'menu_class' => 'lista_menu',
                'theme_location' => 'menu-rodape',
                'container' => false
            ])
        ?>

    </div>

    <div class="f-25 col_footer">
        <h3>Contato</h3>

        <p><i class="bi bi-geo-alt"></i> Rua do Ouro, 558, Serra, Belo Horizonte/MG</p>
        
        <p>
            <a href=""><i class="bi bi-telephone"></i> (31) 3267-7665</a>
        </p>
        <p>
            <a href=""><i class="bi bi-whatsapp"></i> (31) 9 8268-8311</a>
        </p>
    </div>
</div>

<div class="footer_bottom">
    <div class="content_bottom d-flex container">
        <p>© 2022 MRD. Todos os direitos reservados. Design by MRD</p>

        <ul class="d-flex links_social">
            <li>
                <a href="https://www.facebook.com/marcosrdiasadv/"><i class="bi bi-facebook"></i></a>
            </li>
            <li>
                <a href="https://www.instagram.com/marcosrdiasadv/"><i class="bi bi-instagram"></i></a>
            </li>
            <li>
                <a href="https://www.linkedin.com/company/marcos-roberto-dias"><i class="bi bi-linkedin"></i></a>
            </li>
        </ul>
    </div>
</div>

</footer>


<!-- 
<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/jquery.mask.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/script.js"></script>
<script src="assets/js/script-office2.js"></script>
<script src="assets/js/map-script.js"></script>
-->

<script>let url_site = '<?= get_template_directory_uri() ?>'; </script>

<?php wp_footer() ?>
</body>
</html>