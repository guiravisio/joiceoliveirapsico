<?php
/*
Template Name: Blog Carousel
*/
get_header(); ?>

<div class="container mt-4">
    <h2 class="text-center pt-3">Últimos Artigos</h2>
    <div class="row slider-responsive text-center" role="region" aria-label="Últimos artigos do blog">
        <?php
        $recent_posts = new WP_Query([
            'posts_per_page' => 3,
            'post_status'    => 'publish'
        ]);

        if ( $recent_posts->have_posts() ) :
            while ( $recent_posts->have_posts() ) : $recent_posts->the_post(); ?>
                <div class="card mx-2">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('medium', ['class' => 'card-img-top']); ?>
                        </a>
                    <?php endif; ?>
                    <div class="card-body">
                        <h5 class="card-title"><?php the_title(); ?></h5>
                        <p class="card-text"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Ver mais</a>
                    </div>
                </div>
            <?php endwhile;
            wp_reset_postdata();
        else :
            echo '<p>Nenhum artigo encontrado.</p>';
        endif;
        ?>
    </div>
</div>

<?php get_footer(); ?>
