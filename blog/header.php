<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <a class="skip-link" href="#main">Pular para o conteúdo principal</a>

    <button type="button" class="menu-mobile" id="menu-toggle" aria-controls="header" aria-expanded="false" aria-label="Abrir ou fechar o menu de navegação">
        <i class="bi bi-list" aria-hidden="true"></i>
    </button>

    <aside id="header" aria-label="Apresentação e navegação">
        <section class="profile" aria-labelledby="nome-perfil">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/static/img/profile.jpg" alt="Retrato de Joice Oliveira, psicóloga clínica">
            <h1 id="nome-perfil">Joice Oliveira</h1>
            <div class="social-links mt-4 text-center">
                <a href="https://www.linkedin.com/in/joice-sousa-b98249180/" target="_blank" rel="noopener noreferrer"><i class="bi bi-linkedin"></i></a>
                <a href="https://www.instagram.com/conversaepsicologia/" target="_blank" rel="noopener noreferrer"><i class="bi bi-instagram"></i></a>
            </div>
        </section>

        <nav id="navbar" class="nav-menu" aria-label="Menu principal">
            <ul class="nav flex-column">
                <li class="nav-item"><a class="nav-link" href="/#inicio"><i class="bi bi-house"></i> Início</a></li>
                <li class="nav-item"><a class="nav-link" href="/#sobre"><i class="bi bi-file-person"></i> Sobre</a></li>
                <li class="nav-item"><a class="nav-link" href="/#servicos"><i class="bi bi-suitcase-lg"></i> Serviços</a></li>
                <li class="nav-item"><a class="nav-link" href="/#atuacao"><i class="bi bi-chat-dots"></i> Atuação</a></li>
                <li class="nav-item"><a class="nav-link" href="/blog"><i class="bi bi-substack" aria-hidden="true"></i> Blog</a></li>
                <li class="nav-item"><a class="nav-link" href="/#contato"><i class="bi bi-envelope"></i> Contato</a></li>
            </ul>
        </nav>
    </aside>

    <main id="main">
