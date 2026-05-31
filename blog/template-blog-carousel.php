<?php
/*
Template Name: Blog Carousel Clean
*/
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/static/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/static/slick/slick/slick.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/static/slick/slick/slick-theme.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/static/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <?php wp_head(); ?>
</head>
<body style="background: transparent;">

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

<script src="<?php echo get_stylesheet_directory_uri(); ?>/static/jquery/jquery-3.7.1.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/static/slick/slick/slick.min.js"></script>
<script>
jQuery(document).ready(function($){
    $('.slider-responsive').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            { breakpoint: 992, settings: { slidesToShow: 2 } },
            { breakpoint: 768, settings: { slidesToShow: 1 } }
        ]
    });
});
</script>

<?php wp_footer(); ?>
</body>
</html>
