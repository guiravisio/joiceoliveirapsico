<form role="search" method="get" class="search-form mb-4" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="input-group">
        <input type="search" class="form-control" placeholder="Buscar artigos..." value="<?php echo get_search_query(); ?>" name="s" />
        <button type="submit" class="btn btn-primary">
            <i class="bi bi-search"></i>
        </button>
    </div>
</form>
