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
    
        <div class="row">
            <h3><r>7</r> Причин, чтобы выбрать Сектор 23</h3>
        <article>
            <h4><span>Комфорт и безопасность</span></h4>
            <img src="<?php echo get_template_directory_uri()."/assets/images/shield.svg"; ?>">
            <p>Мы предоставляем закрытый и оборудованный полигон в центре Лазаревского, играть на котором комфортно и безопасно</p>
        </article>
        <article>
            <h4><span>Зона отдыха</span></h4>
            <img src="<?php echo get_template_directory_uri()."/assets/images/bbq.svg"; ?>">
            <p>Помимо игры вы можете воспользоваться зоной отдыха с мангалом и печкой-буржуйкой</p>
        </article>
        <article>
            <h4><span>Разнообразие оборудования</span></h4>
            <img src="<?php echo get_template_directory_uri()."/assets/images/helmet.svg"; ?>">
            <p>У нас вы можете сыграть не только в пейнтбол, но и в лазертаг или страйкбол</p>
        </article>
        <article>
            <h4><span>Турниры</h4>
            <img src="<?php echo get_template_directory_uri()."/assets/images/award.svg"; ?>">
            <p>Есть возможность организовать турнир для компаний, классов и студенческих групп</p>
        </article>
        <article>
            <h4><span>Интересно всем</span></h4>
            <img src="<?php echo get_template_directory_uri()."/assets/images/family.svg"; ?>">
            <p>Активный отдых заинтересует как детей, так и взрослых</p>
        </article>
        <article>
            <h4><span>Организация мероприятий</span></h4>
            <img src="<?php echo get_template_directory_uri()."/assets/images/event.svg"; ?>">
            <p>Возможность провести лазертаг на выезде (при наличии подходящих условий)</p>
        </article>
        <article>
            <h4><span>Доступные цены</span></h4>
            <img src="<?php echo get_template_directory_uri()."/assets/images/offer.svg"; ?>">
            <p>Стоимость игры от 400 руб (с человека). Для компаний от 10 человек - скидки</p>
        </article>
        </div>

        

        <div class="row" id="about">
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
                    <a class="tel" href="tel:+79884013219">+7-988-401-32-19</a>
                    <a class="tel" href="tel:+7918405 7844">+7-918-405-78-44</a>
                    <a class="icon" href="https://vk.com/23sectorclub"><img src="<?php echo get_template_directory_uri()."/assets/images/vk.svg"; ?>"></a>
                    <a href="mailto:sector23@inbox.ru" class="icon"><img src="<?php echo get_template_directory_uri()."/assets/images/mail.svg"; ?>"></a>
                    <a class="icon" href="https://www.instagram.com/sector23club/"><img src="<?php echo get_template_directory_uri()."/assets/images/instagram.svg"; ?>"></a>    
                </p>
            </div>
        </div>
        
        <div class="row">
                <center><h2>Подробнее о ценах</h2></center>

            <div id="price">
                <img src="<?php echo get_template_directory_uri()."/assets/images/money.svg"; ?>">
                <div>
                    <h3>Пейнтбол</h3>
                    <p>
                        500 руб. - экипировка<br>
                        2 руб. - шарик с краской
                    </p>
                </div>
                <div>
                    <h3>Лазертаг</h3>
                    <p>
                        400 руб. / час
                    </p>
                </div>
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
                        <img src=\"./assets/images/comm/".$all[$i][5]."\" alt=\"\">
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