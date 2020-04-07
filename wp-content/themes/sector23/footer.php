   <!-- footer
   ================================================== -->
    <footer>
        <div class="row">
        <p>
        <span>Дизайн и вёрстка сайта <a href="https://vk.com/maks_v0">Максим Возбранюк</a></span>
        <span>Админ-панель (back-end) <a href="https://vk.com/aspys">Александр Осипов</a></span>
        </p>
        </div>
        <div class="row">
        <p>
            <span>Sector23</span>
            <span>
                                <?php
             $posts = get_posts( array(
    'category'    => get_cat_ID('fone'),
    'orderby'     => 'date',
    'meta_key'    => '',
    'order'       => 'ASC',
    'meta_value'  =>'',
    'post_type'   => 'post',
    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

foreach( $posts as $post ){
    setup_postdata($post); ?>
<?php the_content(); ?><br>

<?php

}

wp_reset_postdata(); // сброс 
?>
</span>
        </p>
        </div>

    </footer>
    
    <?php wp_footer(); ?>
    
</body>
</html>