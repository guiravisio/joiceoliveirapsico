<?php get_header(); ?>

<div class="container mt-4">
    <h1 class="mb-4">Artigos</h1>

    <!-- Barra de pesquisa -->
    <div class="mb-4">
        <?php get_search_form(); ?>
    </div>

    <div class="row">
        <?php if ( have_posts() ) : ?>
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
                        <div class="card-footer text-muted">
                            Publicado em <?php echo get_the_date(); ?>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else : ?>
            <p>Nenhum artigo encontrado.</p>
        <?php endif; ?>
    </div>

    <nav class="pagination mt-4">
        <?php the_posts_pagination(); ?>
    </nav>
</div>

<?php get_footer(); ?>
