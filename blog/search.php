<?php get_header(); ?>

<div class="container mt-4">
    <h1 class="mb-4">Artigos</h1>
    <div class="mb-4"><?php get_search_form(); ?></div>
    <h4 class="mb-4">Resultados da pesquisa: <?php echo get_search_query(); ?></h4>

    <?php if ( have_posts() ) : ?>
        <div class="row">
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="col-md-6 mb-4">
                    <div class="card h-100">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail( 'blog-thumb', ['class' => 'card-img-top img-fluid'] ); ?>
                            </a>
                        <?php endif; ?>
                        <div class="card-body">
                            <h2 class="card-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                            <p class="card-text"><?php the_excerpt(); ?></p>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>

        <nav class="pagination mt-4">
            <?php the_posts_pagination(); ?>
        </nav>
    <?php else : ?>
        <p>Nenhum resultado encontrado.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
