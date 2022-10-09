<?php get_header() ?>
<?php if(have_posts()): while(have_posts()): the_post() ?>
    <main>

        <section>

        </section>

    </main>
<?php endwhile; endif; ?>
<?php get_footer() ?>