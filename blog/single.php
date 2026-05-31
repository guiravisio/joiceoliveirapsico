<?php get_header(); ?>

<div class="container mt-4">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article <?php post_class('mb-5'); ?>>
            <!-- Título -->
            <h1 class="mb-3"><?php the_title(); ?></h1>

            <!-- Metadados -->
            <div class="text-muted mb-3">
                Publicado em <?php echo get_the_date(); ?> 
                | Categorias: <?php the_category(', '); ?>
                | Tags: <?php the_tags('', ', '); ?>
            </div>

            <!-- Imagem destacada -->
            <?php if ( has_post_thumbnail() ) : ?>
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail( 'blog-thumb', ['class' => 'card-img-top img-fluid'] ); ?>
                </a>
            <?php endif; ?>

            <!-- Conteúdo -->
            <div class="post-content mb-4">
                <?php the_content(); ?>
            </div>

            <!-- Navegação entre posts -->
            <nav class="post-navigation d-flex justify-content-between mt-5">
                <div class="prev-post"><?php previous_post_link('%link', '← Artigo anterior'); ?></div>
                <div class="next-post"><?php next_post_link('%link', 'Próximo artigo →'); ?></div>
            </nav>
        </article>
    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>
