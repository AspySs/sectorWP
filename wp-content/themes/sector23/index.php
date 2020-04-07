<?php get_header(); ?>

    <div class="content">
        <div class="row">
        <div id="topAn">
        </div>
            <div class="owl-carousel owl-theme carousel gallery">
                <div class="item"><img src="<?php echo get_template_directory_uri()."/assets/images/img1.jpg"; ?>"></div>
                <div class="item"><img src="<?php echo get_template_directory_uri()."/assets/images/img2.jpg"; ?>"></div>
                <div class="item"><img src="<?php echo get_template_directory_uri()."/assets/images/img3.jpg"; ?>"></div>
                <div class="item"><img src="<?php echo get_template_directory_uri()."/assets/images/img4.jpg"; ?>"></div>
            </div>
        </div>
    <a name="ceni"></a>
        <div class="row">
                        <h3><r>7</r> Причин, чтобы выбрать Сектор 23</h3>
            <?php
             $posts = get_posts( array(
    'numberposts' => 7,
    'category'    => get_cat_ID('about'),
    'orderby'     => 'date',
    'meta_key'    => '',
    'order'       => 'ASC',
    'meta_value'  =>'',
    'post_type'   => 'post',
    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

foreach( $posts as $post ){
    setup_postdata($post); ?>
            <article>
            <h4><span><?php the_title(); ?></span></h4>
            <?php the_post_thumbnail(); ?>
            <p><?php the_content(); ?></p>
        </article>

<?php

}

wp_reset_postdata(); // сброс 
?>

        </div>

        

        <div class="row" id="about">
            <a name="about"></a>
            <center><span>О нас</span></center>
            <div class="half">
                <h3>Где нас найти</h3>
                <div id="map">
                
                </div>
            </div>
            <div class="half">
                <h3>Связаться с нами</h3>
                <p>
                    Телефон: <br>
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
<a class="tel" href="tel:<?php the_title(); ?>"><?php the_title(); ?> </a>

<?php

}

wp_reset_postdata(); // сброс 
?>
                    <?php
             $posts = get_posts( array(
    'category'    => get_cat_ID('social'),
    'orderby'     => 'date',
    'meta_key'    => '',
    'order'       => 'ASC',
    'meta_value'  =>'',
    'post_type'   => 'post',
    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

foreach( $posts as $post ){
    setup_postdata($post); ?>
<a class="icon" href="<?php the_title(); ?>"><?php the_post_thumbnail(); ?></a>

<?php

}

wp_reset_postdata(); // сброс 
?>
                    <?php
             $posts = get_posts( array(
    'category'    => get_cat_ID('mail'),
    'orderby'     => 'date',
    'meta_key'    => '',
    'order'       => 'ASC',
    'meta_value'  =>'',
    'post_type'   => 'post',
    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

foreach( $posts as $post ){
    setup_postdata($post); ?>
 <a href="mailto:<?php the_title(); ?>" class="icon"><?php the_post_thumbnail(); ?></a>

<?php

}

wp_reset_postdata(); // сброс 
?> 
                </p>
            </div>
        </div>
        
        <div class="row">
                <center><h2>Подробнее о ценах</h2></center>

            <div id="price">
                <img src="<?php echo get_template_directory_uri()."/assets/images/money.svg"; ?>">
                           <?php
             $posts = get_posts( array(
    'numberposts' => 2,
    'category'    => get_cat_ID('type'),
    'orderby'     => 'date',
    'meta_key'    => '',
    'order'       => 'ASC',
    'meta_value'  =>'',
    'post_type'   => 'post',
    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

foreach( $posts as $post ){
    setup_postdata($post); ?>
                <div>
                    <h3><?php the_title(); ?></h3>
                    <p>
<?php the_content(); ?>
                    </p>
                </div>

<?php

}

wp_reset_postdata(); // сброс 
?>
            </div>
        </div>

        <center><span>Отзывы</span></center>
        <div class="owl-carousel owl-theme carousel comments">

                    <?php
$date = time();
$ip = getIP();
$ipp = str_replace(".", "", $ip);
include "assets/includes/bd.php";
$new = $bd -> query("INSERT INTO `users` (`id`, `ip`, `time`, `ipp`) VALUES (NULL, '".$ip."', '".time()."', '".$ipp."');");;
if($new==false){$bd -> query("UPDATE `users` SET `time` = '".time()."' WHERE `users`.`ipp` = ".$ipp.";");}
$ALL = $bd -> query("SELECT * FROM `comments`");
$ALLids = $bd -> query("SELECT `id` FROM `comments`");
$bd->close();
$all = vivALL($ALL);
$colvo = vivCOL($ALLids);

function vivALL($result_set){
$o = 0;
$peopleK = array(array());
    while(($row = $result_set->fetch_assoc()) != false){
        $peopleK[$o][0] = $row["id"];
        $peopleK[$o][1] = $row["nickname"];
        $peopleK[$o][2] = $row["text"];
        $peopleK[$o][3] = $row["time"];
        $peopleK[$o][4] = $row["checked"];
        $peopleK[$o][5] = $row["picname"];
        $o +=1;     
        
    } 
    unset($o);
    return $peopleK;
}
function vivCOL($result_set){

    while(($row = $result_set->fetch_assoc()) != false){        
    }
        $numb = $result_set->num_rows;
        return $numb;
}
for($i=0;$i<$colvo;$i++){if($all[$i][4]=='true')
                echo"
                    <div div class=\"item\">
                        <img class = 'comm' src=\"".get_template_directory_uri()."/assets/images/comm/".$all[$i][5]."\" alt=\"\">
                        <h3>".$all[$i][1]."</h3>
                        <p>".$all[$i][2]."</p>
                    </div>
                    ";
}

function getIP()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = @$_SERVER['REMOTE_ADDR'];
 
    if(filter_var($client, FILTER_VALIDATE_IP)) $ip = $client;
    elseif(filter_var($forward, FILTER_VALIDATE_IP)) $ip = $forward;
    else $ip = $remote;
 
        return $ip;
}
                    ?>
        </div>
        <br>
        <center><h2>Оставить отзыв</h2></center>
        <?php
if(@$_GET['send']=='succes'){echo"Ваш комментарий доставлен на обработку";}
elseif (@$_GET['send']=='fail'){@$error = $_GET['error']; echo"<strong>".$error."</strong>";}
include_once("assets/includes/functions.php");
?>
    <form id="comment" action="comments.php" method="post" enctype="multipart/form-data">
    <div id="cube"></div>
        <textarea id="" cols="25" rows="1" maxlength="60" type="text" placeholder="ФИО или ник" name="nickname"></textarea> <br>
        <input type="file" id="files" name="files" value="Выбрать фото" /> <br>
        <output id="list"></output>
        <textarea name="text" id="" cols="40" rows="10" maxlength="500" placeholder="Текст отзыва"></textarea> <br>
        <input id="comSubmit" type="submit" name="done" value="Отправить отзыв">
    <div id="cube2"></div>
    </form>

<script type="text/javascript">
function handleFileSelect(evt) {
    var files = evt.target.files; // FileList object

    // Loop through the FileList and render image files as thumbnails.
    for (var i = 0, f; f = files[i]; i++) {

      // Only process image files.
      if (!f.type.match('image.*')) {
        continue;
      }

      var reader = new FileReader();

      // Closure to capture the file information.
      reader.onload = (function(theFile) {
        return function(e) {
          // Render thumbnail.
          var span = document.createElement('span');
          span.innerHTML = ['<img class="thumb" src="', e.target.result,
                            '" title="', theFile.name, '"/>'].join('');
          document.getElementById('list').insertBefore(span, null);
        };
      })(f);

      // Read in the image file as a data URL.
      reader.readAsDataURL(f);
    }
  }

document.getElementById('files').addEventListener('change', handleFileSelect, false);
</script>

    </div>




<?php get_footer(); ?>