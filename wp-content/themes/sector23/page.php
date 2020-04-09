<?php $path = "http://".$_SERVER['HTTP_HOST']."/sectorWP/category/blog"; header("Location: $path ");  ?>
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
        <h2>Скоро вы будете перенаправлены в БЛОГ</h2>


    </div>
<?php get_footer(); ?>