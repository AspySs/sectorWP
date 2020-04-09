<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php do_action('my_action'); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri()."/assets/css/js/script/script.js"; ?>"></script>
    <title>Sector23 blog</title>
</head>
<body>
    
    <header>
        Sector23.blog
    </header>

    <div id="content">
        <h2>Добро пожаловать в блог</h2>
            <?php

            if(have_posts()){
               while(have_posts()){
                  the_post('blog'); ?>
        <article>
            <h3><a href="<?php the_permalink(); ?>" title=""><?php the_title(); ?></a></h3>
            <time class="date" datetime="2014-01-14T11:24"><?php the_time('F jS, Y'); ?></time>
            <a href="<?php the_permalink(); ?>" title=""><?php the_post_thumbnail('post_thumb'); ?></a>
            <p><?php the_excerpt(); ?></p>
        </article> <!-- post end -->
              <?php } ?>
              <?php the_posts_pagination(); ?>
           <?php  } ?>

    </div>
<?php get_footer(); ?>