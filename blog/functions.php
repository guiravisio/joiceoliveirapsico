<?php
function joice_enqueue_styles() {
    wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/static/bootstrap/css/bootstrap.css' );
    wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/static/style.css' );
    wp_enqueue_style( 'bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css' );
}
add_action( 'wp_enqueue_scripts', 'joice_enqueue_styles' );

// Habilita suporte a imagens destacadas
add_theme_support('post-thumbnails');

// Define um tamanho padrão para imagens destacadas
add_image_size('blog-thumb', 600, 400, true); // largura 600px, altura 400px, corte central


add_action('rest_api_init', function () {
    register_rest_route('joice/v1', '/latest-two', [
        'methods' => 'GET',
        'callback' => 'joice_render_latest_two',
        'permission_callback' => '__return_true',
    ]);
});

function joice_render_latest_two() {
    header('Content-Type: text/html; charset=UTF-8');

    $recent_posts = get_posts([
        'numberposts' => 2,
        'post_status' => 'publish'
    ]);

    if (empty($recent_posts)) {
        echo '<p>Nenhum artigo encontrado.</p>';
        exit;
    }

    echo '<div class="row">';
    foreach ($recent_posts as $post) {
        $title   = esc_html(get_the_title($post->ID));
        $excerpt = esc_html(wp_trim_words(get_the_excerpt($post->ID), 40));
        $link    = esc_url(get_permalink($post->ID));
        $thumb = get_the_post_thumbnail($post->ID, 'blog-thumb', ['class' => 'card-img-top img-fluid']);

        echo '<div class="col-md-6 mb-4">';
        echo '<div class="card h-100">';
        if ($thumb) {
            echo '<a href="' . $link . '">' . $thumb . '</a>';
        }
        echo '<div class="card-body">';
        echo '<h3 class="card-title">' . $title . '</h3>';
        echo '<p class="card-text">' . $excerpt . '</p>';
        echo '<a href="' . $link . '" class="btn btn-primary">Ver mais</a>';
        echo '</div></div></div>';
    }
    echo '</div>';

    echo '<div class="text-center mt-4">';
    echo '<a href="/blog" class="btn btn-secondary">Ver todos os artigos</a>';
    echo '</div>';

    exit;
}
