<?php 
include 'config.php';
$oldprice = round(($price)/(1-($skidka/100)));
$econom = $oldprice - $price;
?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <title>Huawei Mate 20 Pro</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link rel="stylesheet" href="files/bootstrapb2a76.css"/>
  <link href="files/slick0d209.css" rel="stylesheet">
  <link href="files/slick-theme21c55.css" rel="stylesheet">
  <link rel="stylesheet" href="files/style4ee27.css"/>
  <link rel="stylesheet" href="files/media97d26.css"/>
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Philosopher:400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Anonymous+Pro|EB+Garamond:400,700" rel="stylesheet">
  <link rel="stylesheet" href="files/animate.css">



<?php 
  if (strlen($pixel) > 1)
  {
    echo "<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s){
    if(f.fbq)return;
    n=f.fbq=function(){n.callMethod? n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n; n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window, document,'script','https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '$pixel'); // Insert your pixel ID here.
  fbq('track', 'PageView');
</script>
<noscript><img height='1' width='1' style='display:none' src='https://www.facebook.com/tr?id=$pixel&ev=PageView&noscript=1'/></noscript>
<!-- End Facebook Pixel Code -->";
  }

  if (strlen($gtag) > 1)
  {
    echo "<!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src='https://www.googletagmanager.com/gtag/js?id=$gtag'></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', '$gtag');
  </script>";
  }

  if (strlen($gtm) > 1)
  {
    echo "<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','$gtm');</script>
<!-- End Google Tag Manager -->";
  }
?>

</head>
<body>
  
<?php 
  if (strlen($gtm) > 1)
  {
    echo "<!-- Google Tag Manager (noscript) -->
<noscript><iframe src='https://www.googletagmanager.com/ns.html?id=$gtm'
height='0' width='0' style='display:none;visibility:hidden'></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->";
  }
 ?>



  <img class="text_huawei1 text_huawei animated bounceInRight" src="files/scroll.png" alt=""/>
  <img class="text_huawei2 text_huawei animated bounceInLeft" src="files/scroll.png" alt=""/>
  <img class="text_huawei3 text_huawei animated bounceInRight" src="files/scroll.png" alt=""/>
  <img class="text_huawei4 text_huawei animated bounceInLeft" src="files/scroll.png" alt=""/>
  <img class="text_huawei5 text_huawei animated bounceInRight" src="files/scroll.png" alt=""/>
  <section class="sect1">
    <div class="container">
      <div class="row">
        <div class="col-md-5 col-sm-4">
          <img class="logo animated bounceInDown" src="files/logo2e530.png" alt=""/>
        </div>
        <div class="col-md-7 col-sm-8">
          <ul class="top_menu animated bounceInDown">
            <li>
              <a href="#video">Видео обзор</a>
            </li>
            <li>
              <a href="#vid">Внешний вид</a>
            </li>
            <li>
              <a href="#haract">Характеристики</a>
            </li>
            <li>
              <a href="#otz">Отзывы</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container cont2_sect1">
      <div class="row">
        <div class="col-md-6 col-sm-6 pos_rel">
          <p class="text1 animated bounceInLeft">Huawei Mate 20 Pro</p>
          <p class="text2 animated bounceInLeft">Мощный и технологичный смартфон премиального класса. Премиальное качество и стильный деловой дизайн. </p>
          <div class="block_akciya">
            Скидка<br/>
            <span>-<?=$skidka?>%</span>
          </div>
          <div class="block_price">
            <p class="new_price">
              <?=$price?><span>грн.</span>
            </p>
            <p class="old_price"><?=$oldprice?>грн.</p>
          </div>
          <div class="block_form animated bounceInUp">
            <p class="t1_form">АКЦИЯ ТОЛЬКО СЕГОДНЯ:</p>
            <script src="files/c35a847ba0c42f6ee3bc4d3b7555e70ecce59.js"></script>
            <form action="send.php" method="post" class="form1">
              <div class="row">
                <div class="col-md-12">
                  <input name="name"  class="color" required="" placeholder="Имя" type="text"/>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <input name="phone" required="" placeholder="Телефон" type="text"/>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 col-sm-12 but_box">
                  <button type="submit" class="btn btn-danger ">УСПЕЙТЕ ЗАКАЗАТЬ </button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <img class="product animated bounceInRight" src="files/bg_tel1.png" alt=""/>
        </div>
      </div>
    </div>
  </section>
  <section class="sect2" id="video">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <img class="logo2" src="files/logo_2.png" alt=""/>
          <p class="t1_sect2">Посмотреть видео</p>
          <iframe width="100%" height="660" src="https://www.youtube.com/embed/B85coKSzFdg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </section>
  <section class="sect3 " id="vid">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p class="t1_sect3">Внешний вид и эргономика</p>
          <img class="figure" src="files/figure61c17.png" alt=""/>
        </div>
      </div>
    </div>
    <div class="container animated pulse">
      <div class="row">
        <div class="col-md-6 col-sm-6 pos_rel">
          <p class="t2_sect3">Huawei Mate 20 Pro воспринимается нейтрально. Грани закруглены, переход между стеклом и металлом постарались сделать максимально плавным. Клавиши включения и регулировки громкости находятся справа, слот для двух NanoSIM — слева, а разъем Type-C — снизу. </p>
          <p class="t_sk">
            Только сегодня!<br/>
            <span>Скидка -<?=$skidka?>%</span>
          </p>
          <p class="t3_sect3">Заказать Huawei Mate 20 Pro</p>
          <a href="#form" class="btn btn-danger btn_zakaz">УСПЕЙТЕ ЗАКАЗАТЬ</a>
          <div class="block_akciya">
            Скидка<br/>
            <span>-<?=$skidka?>%</span>
          </div>
          <div class="block_price">
            <p class="new_price">
              <?=$price?><span>грн.</span>
            </p>
            <p class="old_price"><?=$oldprice?>грн.</p>
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <img class="product product_2" src="files/bg_tel1.png" alt=""/>
        </div>
      </div>
    </div>
  </section>
  <section class="sect4">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <img class="logo2" src="files/logo_2.png" alt=""/>
        </div>
      </div>
    </div>
    <div class="container cont2_sect4">
      <div class="row">
        <div class="col-md-5 col-sm-6 text-center">
          <img class="product2_1 animated jackInTheBox" src="files/tel.png" alt=""/>
        </div>
        <div class="col-md-7 col-sm-6">
          <div class="box_ic">
            <p class="title_ic">
              <img src="files/ic1a0b5f.png" alt=""/>Дисплей
            </p>
            <p class="t_ic animated bounceInRight">В Huawei Mate 20 Pro располагается 6-дюймовый экран Super AMOLED с разрешением 2220 на 1080 точек. Такой вытянутый дисплей имеет соотношение сторон 18:9. Благодаря этому помещается больше информации, а также есть возможность сделать аппарат более удобным в использовании. Поддерживается функция Always On Display, когда на выключенном экране отображается время и другие полезные сведения.</p>
            <p id="r0" class="">
              <a href="javascript:change_visibility ('r0', 'r1')" class="more_link">
                Читать далее <img class="more" src="files/more58d19.png" alt=""/>
              </a>
            </p>
            <div id="r1" style="display:none">
              <p class="t_ica animated bounceInRight">Цветовая гамма настроена идеально, поэтому картинка выглядит реалистично и ярко. Отличная детализация дополняется очень широкими углами обзора. При этом датчик освещения работает максимально четко и правильно. Запаса яркости хватает, чтобы комфортно пользоваться устройством даже в дневное время на улице.</p>
              <p class="link_more">
                <a class="more_link" onClick="change_visibility ('r1', 'r0')">Скрыть</a>
              </p>
            </div>
          </div>
          <div class="box_ic">
            <p class="title_ic">
              <img src="files/ic25aa67.png" alt=""/>Железо и производительность
            </p>
            <p class="t_ic animated bounceInRight">Обеспечивает высокую скорость работы Huawei Mate 20 Pro восьмиядерный процессор  Exynos 7885 с максимальной тактовой частотой 2200 МГц. Данная версия чипа имеет поддержку искусственного интеллекта и нейронных сетей в лице технологии NPU. Здесь установлен 3D-ускоритель Mali-G72 MP12. В смартфоне нет отдельного слота для карты памяти, но 64 Гб встроенного хранилища должно хватить для создания большой библиотеки файлов. </p>
            <p id="r2" class="">
              <a href="javascript:change_visibility ('r2', 'r3')" class="more_link">
                Читать далее <img class="more" src="files/more58d19.png" alt=""/>
              </a>
            </p>
            <div id="r3" style="display:none">
              <p class="t_ic animated bounceInRight">Количество оперативной памяти — 4 Гб.
              Присутствует операционная система Android 7.1 Nougat. В новых версиях AnTuTu аппарат уверенно набирает более 116000 баллов.</p>
              <p class="link_more">
                <a class="more_link" onClick="change_visibility ('r3', 'r2')">Скрыть</a>
              </p>
            </div>
          </div>
          <div class="box_ic">
            <p class="title_ic">
              <img src="files/ic33b1c8.png" alt=""/>Связь и звук
            </p>
            <p class="t_ic animated bounceInRight">Смартфон Huawei Mate 20 Pro оборудован сразу двумя стереодинамиками, которые звучат не только громко, но и очень чисто. Имеется поддержка продвинутой технологии Dolby Atmos. А благодаря функции подавления шумов вы сможете отчетливо слышать своего собеседника в самых разных ситуациях. Гаджет поддерживает сети LTE, а также позволяет установить сразу две Nano-SIM. </p>
          </div>
          <div class="box_ic">
            <p class="title_ic">
              <img src="files/ic33b1c8.png" alt=""/>Камера
            </p>
            <p class="t_ic animated bounceInRight">Главной изюминкой Huawei Mate 20 Pro представляется от Sony. Основной 16-мегапиксельный сенсор заполучил светосилу 1,8 и оптическую стабилизацию. При этом размер каждого пикселя по-настоящему огромен — около 2 мкм.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="sect5" id="haract">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <img class="logo3" src="files/logo3c11e0.png" alt=""/>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-7 col-sm-6">
          <p class="t1_tech">Технические характеристики</p>
          <ul class="list_tech">
            <li>
              <span>Экран:</span>
              6,0", Super AMOLED, 2220x1080, 408 ppi
            </li>
            <li>
              <span>Процессор:</span>
              восьмиядерный Huawei Mate 20 Pro Exynos 7885, до 2,2 ГГц
            </li>
            <li>
              <span>Графический ускоритель:</span>
              Mali-G71
            </li>
            <li>
              <span>Операционная система:</span>
              ОС Android 7.1 Nougat
            </li>
            <li>
              <span>Оперативная память:</span>
              4 ГБ
            </li>
            <li>
              <span>Встроенная память:</span>
              64 ГБ
            </li>
            <li>
              <span>Поддержка карт памяти:</span>
              нет
            </li>
            <li>
              <span>Связь:</span>
              GSM 850/900/1800/1900 МГц || UMTS 850/900/1900/2100 МГц || LTE 1-9, 12, 17-20, 26, 28, 34, 38, 39, 40, 41
            </li>
            <li>
              <span>SIM:</span>
              nano-SIM + nano-SIM
            </li>
            <li>
              <span>Интерфейсы:</span>
              Wi-Fi 802.11 a/b/g/n/ac, 2,4 / 5 ГГц, Bluetooth 4.2 BLE, NFC, USB Type-C
            </li>
            <li>
              <span>Навигация:</span>
              GPS, ГЛОНАСС, Beidou
            </li>
            <li>
              <span>Камеры:</span>
              основная — 20 Мп (f/1.8) + 12 Мп (f/1.6) + 8 Мп (f/2.4), 27-83 мм, 3х оптический и 5х гибридный зум, вспышка, автофокусировка (лазерная, фазовая, контрастная, глубокий фокус); фронтальная — 24 Мп, f/2.0, 26 мм
            </li>
            <li>
              <span>Датчики:</span>
              освещённости, приближения, акселерометр, компас, микрогироскоп, дактилоскоп, ИК-передатчик
            </li>
            <li>
              <span>Аккумулятор:</span>
              4000 мАч, несъёмный
            </li>
            <li>
              <span>Габариты:</span>
              155x73,9x7,8 мм
            </li>
            <li>
              <span>Вес:</span>
              180 граммов
            </li>
          </ul>
        </div>
        <div class="col-md-5 col-sm-6 text-center">
          <img class="product2" src="files/tel.png" alt=""/>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <p class="t2_sect5">ОСТАЛИСЬ ВОПРОСЫ? ЗАДАЙТЕ ИХ СПЕЦИАЛИСТУ! </p>
          <p class="t3_sect5">ОСТАВЬТЕ ЗАЯВКУ И МЫ СВЯЖЕМСЯ С ВАМИ В ТЕЧЕНИИ 10-15 МИНУТ!</p>
          <a href="#form" class="btn btn-danger btn_zakaz2">оставить заявку</a>
        </div>
      </div>
    </div>
  </section>
  <section class="sect6" id="otz">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <img class="logo2" src="files/logo_2.png" alt=""/>
          <p class="t1_sect2">Отзывы</p>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="trusted-slider">
            <div class="slides">
              <div class="block_otz">
                <img class="otz_img" src="files/otz1226b4.png" alt=""/>
                <div class="media-body">
                  <p class="name_otz">
                    Максим Березовский<br/>(г. Киев)
                  </p>
                </div>
                <div class="clearfix"></div>
                <p class="text_otz">Получил на днях долгожданный Huawei Mate 20 Pro! Смартфон, без сомнения, достойный, все летает и порхает на высшем уровне. Теперь буду хвастаться в своем коллективе, самым мощными и крутым смартом. </p>
              </div>
              <div class="block_otz">
                <img class="otz_img" src="files/otz2ec222.png" alt=""/>
                <div class="media-body">
                  <p class="name_otz">
                    Алина Калужная<br/>(г. Днепр)
                  </p>
                </div>
                <div class="clearfix"></div>
                <p class="text_otz">Всем привет. Решила оставить и я свой отзыв. Посылка пришла ну очень быстро, за 1 день. Работа магазина устроила полностью на все 100%. Три дня тестила и телефон показал себя отлично, нареканий к нему нет. Супер!</p>
              </div>
              <div class="block_otz">
                <img class="otz_img" src="files/otz3938ca.png" alt=""/>
                <div class="media-body">
                  <p class="name_otz">
                    Александр Воронец<br/>(г. Херсон)
                  </p>
                </div>
                <div class="clearfix"></div>
                <p class="text_otz">Сомневался конечно, брать или нет, но все таки решился, заказал и не пожалел. Батарея держит долго, даже если активно использовать телефон, с легкостью хватает на целый день. Камера это просто бомба! Самый лучший смартфон, которым я пользовался.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="sect7">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6">
          <p class="t1_dost">
            ДОСТАВКА В ЛЮБОЙ ГОРОД<br/>
            <span>УКРАИНЫ</span>
          </p>
          <img class="figure" src="files/figure61c17.png" alt="" style="display: block; margin: 0 0 10px 0;"/>
          <p class="t3_dost">
            <img src="files/ic1_dost36e8f.png" alt=""/>Доставка "Новой Почтой". 
          </p>
          <p class="t3_dost">
            <img src="files/ic2_dost7aab1.png" alt=""/>Вы оплачиваете заказ при получении 
          </p>
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="block_dost">
            <img src="files/novaposhtaf5c1e.png" alt="">
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </section>
  <section class="sect1" id="form">
    <div class="container">
      <div class="row">
        <div class="col-md-5 col-sm-4">
          <img class="logo" src="files/logo3c11e0.png" alt=""/>
        </div>
        <div class="col-md-7 col-sm-8">
          <ul class="top_menu">
            <li>
              <a href="#video">Видео обзор</a>
            </li>
            <li>
              <a href="#vid">Внешний вид</a>
            </li>
            <li>
              <a href="#haract">Характеристики</a>
            </li>
            <li>
              <a href="#otz">Отзывы</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container cont2_sect1">
      <div class="row">
        <div class="col-md-6 col-sm-6 pos_rel">
          <p class="text1 animated pulse">Huawei Mate 20 Pro </p>
          <p class="text2 animated bounceInRight">Мощный и технологичный смартфон премиального класса. Он заполучил первую в мире тройную камеру, а также безрамочный дизайн. </p>
          <div class="block_akciya">
            Скидка<br/>
            <span>-<?=$skidka?>%</span>
          </div>
          <div class="block_price">
            <p class="new_price">
              <?=$price?><span>грн.</span>
            </p>
            <p class="old_price"><?=$oldprice?>грн.</p>
          </div>
          <div class="block_form">
            <p class="t1_form">АКЦИЯ ТОЛЬКО СЕГОДНЯ:</p>
            <script src="files/c35a847ba0c42f6ee3bc4d3b7555e70ecce59.js"></script>
            <form action="send.php" method="post" class="form1">
              <div class="row">
                <div class="col-md-12">
                  <input name="name" required="" сlass="name" placeholder="Имя" type="text"/>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <input name="phone" required="" placeholder="Телефон" type="text"/>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 col-sm-12 but_box">
                  <button type="submit" class="btn btn-danger ">УСПЕЙТЕ ЗАКАЗАТЬ </button>
                </div>
              </div>

            </form>
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <img class="product" src="files/bg_tel1.png" alt=""/>
        </div>
      </div>
    </div>
  </section>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 text-center">
          <?=$footer_info?> <br>
          <a href="politics.html" target="_blank">Политика конфиденциальности</a>
        </div>
      </div>
    </div>
  </footer>
  <script src="files/jquery-2.2.2.min22666.js"></script>
  <script src="files/bootstrap799d2.js"></script>
  <script src="files/slick.min09746.js"></script>
  <script>
    function change_visibility(block_4_close, block_4_open) {
      $(document).ready(function() {
        $('#' + block_4_close).css('display', 'none');
        $('#' + block_4_open).css('display', '');
        return false;
      });
    }
  </script>
  <script>
    $(document).ready(function() {
      $('a.btn, .top_menu a').on('click', function(event) {
        event.preventDefault();
        var link = $(this).attr('href');
        $('html, body').animate({
          scrollTop: $(link).offset().top
        }, 600);
      });
    });
  </script>
  <script type="text/javascript" src="files/maskedinputdc540.js"></script>
  <script>
    $(document).ready(function() {

      $('input[name="phone"]').inputmask("38(999)999-99-99", {
        "clearIncomplete": true
      }).attr('type', 'tel');
    });
  </script>
  

</body>
</html>
