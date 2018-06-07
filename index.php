<?
$land = htmlspecialchars($_GET['land']);
$land = $land > 3 ? 1 : $land;
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
  <title>Разработка продающих Landing Page2</title>
  <link href="https://code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css" rel="stylesheet" >
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/animate.css" rel="stylesheet">
  <link href="css/clients_slider.css" rel="stylesheet">
  <link href="css/ion.rangeSlider.css" rel="stylesheet">
  <link href="css/ion.rangeSlider.skinHTML5.css" rel="stylesheet">
  <link href="css/media.css" rel="stylesheet">
  <meta name="viewport" content="width=1000">
</head>
<body>
<header>
  <nav class="menu-top navbar-fixed-top" role="navigation">
    <div class="container container-fix">
      <a href="#"><div class="logo"></div></a>
      <div class="menu">
        <ul>
          <li><a href="#section2">ПРОЦЕСС</a></li>
          <li><a href="#section4">РЕЗУЛЬТАТ</a></li>
          <li><a href="#section5">ПОРТФОЛИО</a></li>
          <li><a href="#calc">КАЛЬКУЛЯТОР</a></li>
          <li><a href="#section6">СТОИМОСТЬ</a></li>
          <li><a href="#section7">ОТЗЫВЫ</a></li>
          <li><a href="#map">КОНТАКТЫ</a></li>
        </ul>
      </div>
      <div class="contacts">
        <p class="text">Есть вопросы? Звоните</p>
        <p class="phone"><a href="tel:+77272513535">+7 (727) 251-35-35</a> <br><a href="tel:+77770086666">+7 (777) 008-66-66</a></p>
        <!-- <p class="phone">+7 (777) 008-66-66</p> -->
      </div>
    </div>
    <div class="right-box">
      <a href="#" id="top-btn"><img src="img/btn_up2.png"></a>
      <a href="#banner"><div class="dots check" id="bannerd"></div></a>
      <a href="#section2"><div class="dots" id="section2d"></div></a>
      <a href="#section3"><div class="dots" id="section3d"></div></a>
      <a href="#section4"><div class="dots" id="section4d"></div></a>
      <a href="#section5"><div class="dots" id="section5d"></div></a>
      <a href="#calc"><div class="dots" id="calcd"></div></a>
      <a href="#section6"><div class="dots" id="section6d"></div></a>
      <a href="#section7"><div class="dots" id="section7d"></div></a>
      <a href="#map"><div class="dots" id="mapd"></div></a>
    </div>
  </nav>
</header>
<div class="wrap--sc">
<div id="openModal" class="modalDialog">
  <div class="modalDialog-pismo" id="modalDialog1">
    <a href="#close" title="Закрыть" class="closed"></a>
    <p class="title-pismo">Оставьте заявку на просчет вашего проекта</p>
    <form role="form" action="mail.php" class="submit-form-one" method="post">
      <div class="form-group pad30">
        <input type="hidden" name="packet" id="packet">
        <input type="text" name="name" class="form-control modal-input" placeholder="Введите ваше имя">
      </div>
      <div class="form-group pad30">
        <input type="text" name="phone" class="form-control modal-input" placeholder="Введите ваш телефон">
      </div>
      <div class="form-group pad30">
        <input type="submit" class="btn modal-btn" value="ОТПРАВИТЬ">
      </div>
    </form>
  </div>

  <div class="modalDialog-pismo" id="modalDialog2">
    <a href="#close" title="Закрыть" class="closed"></a>
    <p class="title-pismo">Спасибо за обращение.</p>
    <p class="text-pismo"><br>В течение часа с вами свяжется наш менеджер для уточнение деталей.</p>
  </div>
</div>

<div id="openModal2" class="modalDialog">

</div>

<div class="banner" id="banner">
  <div class="banner-bg">
    <div id="carousel-banner" class="carousel slide banner-slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <?for ($i=0; $i < 3; $i++) { ?>
          <li data-target="#carousel-banner" data-slide-to="<?=$i?>" class="<?=!$land && !$i || $land == $i+1 ? 'active' : '';?>"></li>
        <?}?>        
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item <?=!$land || $land == 1 ? 'active' : '';?>" id="item1">
          <div class="pict-phone"></div>
          <div class="container container-fix pad50">
            <div class="box-banner">
              <p class="zag">Разрабатываем <span>Landing Page</span> приносящие деньги</p>
              <p class="zag2">Посадочные страницы, которые увеличивают Ваши продажи!</p>
              <div class="box-timmer">
                <p class="number" id="page11">0</p>
                <p class="text-timmer">ВЫПОЛНЕННЫХ<br>ПРОЕКТОВ</p>
              </div>
              <div class="box-timmer">
                <p class="number" id="page12">0</p>
                <p class="text-timmer">ГОДА УСПЕШНОЙ<br>РАБОТЫ</p>
              </div>
              <div class="box-timmer">
                <p class="number" id="page13">0</p>
                <p class="text-timmer">СПЕЦИАЛИСТОВ<br>УЧАСТВУЕТ В РАБОТЕ</p>
              </div>
              <div class="box-timmer">
                <p class="number" id="page14">0</p>
                <p class="text-timmer">МИЛЛИОНОВ ТЕНГЕ<br>ЗАРАБОТАНО НАШИМИ<br>КЛИЕНТАМИ ЗА 2017 ГОД</p>
              </div>
              <a href="#openModal" class="openmodal--sc"><button type="submit" class="btn banner-btn">УВЕЛИЧИТЬ ПРОДАЖИ</button></a>
            </div>
          </div>
        </div>
        <div class="item <?=$land == 2 ? 'active' : '';?>" id="item2">
          <div class="pict-imac"></div>
          <div class="container container-fix pad50">
            <div class="box-banner">
              <p class="zag"><span>МУЛЬТИ ЛЕНДИНГИ</span> НАШ КОНЁК,<br>Клиент найдет то, что ищет</p>
              <p class="zag2">Один запрос — одна страница.</p>
              <div><img src="img/banner/poisk.png"></div>
              <a href="#openModal"><button type="submit" class="btn banner-btn">УЗНАТЬ ПОДРОБНЕЕ</button></a>
            </div>
          </div>
        </div>
        <div class="item <?=$land == 3 ? 'active' : '';?>" id="item3">
          <div class="pict-mac"></div>
          <div class="container container-fix pad50">
            <div class="box-banner">
              <p class="zag">ГАРАНТИРОВАННО УВЕЛИЧИМ<br><span>КОНВЕРСИЮ</span> на 5%</p>
              <p class="zag2">Гарантия конверсии в договоре!</p>
              <div class="box-timmer">
                <p class="number" id="page31">0</p>
                <p class="text-timmer">ВЫПОЛНЕННЫХ<br>ПРОЕКТОВ</p>
              </div>
              <div class="box-timmer">
                <p class="number" id="page32">0</p><p class="number">%</p>
                <p class="text-timmer">СРЕДНЯЯ<br>КОНВЕРСИЯ</p>
              </div>
              <div class="box-timmer">
                <p class="number" id="page33">0</p>
                <p class="text-timmer">ДНЕЙ НА<br>РЕЗУЛЬТАТ</p>
              </div>
              <a href="#openModal"><button type="submit" class="btn banner-btn">ПОВЫСИТЬ КОНВЕРСИЮ</button></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

<div id="section2" class="section2">
  <div class="container container-fix">
    <p class="title">Сначала мы</p>
    <div class="row">
      <div class="col-xs-4 text-center">
        <img src="img/section2/1.png" class="wow flip">
        <p class="text">Проанализируем спрос в вашей тематике</p>
      </div>
      <div class="col-xs-4 text-center">
        <img src="img/section2/2.png" class="wow flip" data-wow-delay="0.3s">
        <p class="text">Сделаем прогноз клиентов на основе нашего опыта</p>
      </div>
      <div class="col-xs-4 text-center">
        <img src="img/section2/3.png" class="wow flip" data-wow-delay="0.6s">
        <p class="text">Изучим ваш бесценный опыт в нише</p>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-4 text-center">
        <img src="img/section2/4.png" class="wow flip" data-wow-delay="0.9s">
        <p class="text">Предложим маркетинговое решение с учетом индивидуальных аспектов</p>
      </div>
      <div class="col-xs-4 text-center">
        <img src="img/section2/5.png" class="wow flip" data-wow-delay="1.2s">
        <p class="text">Мы гарантируем конверсию от 3-6% и выше.</p>
      </div>
      <div class="col-xs-4 text-center">
        <img src="img/section2/6.png" class="wow flip" data-wow-delay="1.5s">
        <p class="text">Разработка высококонверсионного лендинга всего от 5 дней! </p>
      </div>
    </div>
  </div>
</div>

<div id="section3" class="section3">
  <div class="minimal">
    <div class="left"></div>
    <div class="right"></div>
    <div class="container container-fix">
      <p class="title2">ПРОЦЕСС РАБОТЫ</p>
      <div class="line"><img src="img/line.png"></div>
      <p class="title-text">Процесс работы</p>

      <div class="timeline">
        <div class="box-inner box1 wow zoomIn">
          <img src="img/section3/1.png">
          <p class="text">1. Прототипирование + разработка поведенческих сценариев</p>
        </div>
        <div class="box-inner box2 wow zoomIn" data-wow-delay="0.3s">
          <img src="img/section3/2.png">
          <p class="text">2. Разработка уникального дизайна для лендинга</p>
        </div>
        <div class="box-inner box3 wow zoomIn" data-wow-delay="0.6s">
          <img src="img/section3/3.png">
          <p class="text">3. HTML-вёрстка</p>
        </div>
        <div class="box-inner box4 wow zoomIn" data-wow-delay="0.9s">
          <img src="img/section3/4.png">
          <p class="text">4. Программирование + интеграция с CRM</p>
        </div>
        <div class="box-inner box5 wow zoomIn" data-wow-delay="1.2s">
          <img src="img/section3/5.png">
          <p class="text">5. Наполнение — продающий копирайтинг</p>
        </div>
        <div class="box-inner box6 wow zoomIn" data-wow-delay="1.5s">
          <img src="img/section3/6.png">
          <p class="text">6. Тестирование лендинга</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="section4" class="section4">
  <div class="container container-fix">
    <p class="title2">ЧТО ВЫ ПОЛУЧИТЕ?</p>
    <div class="line"><img src="img/line.png"></div>
<!--     <p class="title-text">Примеры Landing Page разработанных нами</p> -->
    <div class="box">
      <p class="title3">С точки зрения маркетинга</p>
      <div class="box-list wow fadeInDown" data-wow-delay="0s" id="1_1"><span>1</span><p class="list">Мощный инструмент для продаж</p></div>
      <div class="box-list wow fadeInDown" data-wow-delay="0.2s" id="1_2"><span>2</span><p class="list">Ориентацию на аудиторию конечного покупателя</p></div>
      <div class="box-list wow fadeInDown" data-wow-delay="0.4s" id="1_3"><span>3</span><p class="list">Эффективное предоставление продукта с упором на его выгоды</p></div>
      <div class="box-list wow fadeInDown" data-wow-delay="0.6s" id="1_4"><span>4</span><p class="list">Максимальное предоставление информации для принятия решения</p></div>
      <div class="box-list wow fadeInDown" data-wow-delay="0.8s" id="1_5"><span>5</span><p class="list">Индивидуальную разработку под ваш продукт</p></div>
      <div class="box-list wow fadeInDown" data-wow-delay="1s" id="1_6"><span>6</span><p class="list">Оптимальную конверсию</p></div>
      <div class="box-list wow fadeInDown" data-wow-delay="1.2s" id="1_7"><span>7</span><p class="list">Увеличение продаж</p></div>
    </div>
    <div class="box-line">
      <img src="img/section4/box-line.png">
    </div>
    <div class="box green">
      <p class="title3">С технической точки зрения</p>
      <div class="box-list wow fadeInDown" data-wow-delay="0s" id="2_1"><span>1</span><p class="list">Удобная панель администрирования</p></div>
      <div class="box-list wow fadeInDown" data-wow-delay="0.2s" id="2_2"><span>2</span><p class="list">Редактирование текста за 30 секунд</p></div>
      <div class="box-list wow fadeInDown" data-wow-delay="0.4s" id="2_3"><span>3</span><p class="list">Корректное отображение во всех браузерах и ОС</p></div>
      <div class="box-list wow fadeInDown" data-wow-delay="0.6s" id="2_4"><span>4</span><p class="list">Интеграция с CRM</p></div>
      <div class="box-list wow fadeInDown" data-wow-delay="0.8s" id="2_5"><span>5</span><p class="list">Настройка рекламной кампании</p></div>
      <div class="box-list wow fadeInDown" data-wow-delay="1s" id="2_6"><span>6</span><p class="list">Продающие текста от профессиональных копирайтеров</p></div>
      <div class="box-list wow fadeInDown" data-wow-delay="1.2s" id="2_7"><span>7</span><p class="list">Применение динамических заголовков</p></div>
    </div>
  </div>
</div>

<div id="SectionModal1" class="modalDialog">
  <div class="SectionModalInner">
    <a href="#close" title="Закрыть" class="closed"></a>
    <div class="SectionModalInner-pict">
      <img />
    </div>
    <div class="SectionModalInner-down">
      <div class="box" style="width: 227px;">
        <p class="text">Количество посетителей</p>
        <p class="bigtext">1700 чел./сутки</p>
      </div>
      <div class="box" style="width: 227px;">
        <p class="text">Стоимость услуги</p>
        <p class="bigtext">10 000 тг.</p>
      </div>
      <div class="box" style="width: 191px;">
        <p class="text">Конверсия</p>
        <p class="bigtext">11%</p>
      </div>
    </div>
  </div>
</div>
<div id="SectionModal2" class="modalDialog">
  <div class="SectionModalInner">
    <a href="#close" title="Закрыть" class="closed"></a>
    <div class="SectionModalInner-pict">
      <img />
    </div>
    <div class="SectionModalInner-down">
      <div class="box" style="width: 227px;">
        <p class="text">Количество посетителей</p>
        <p class="bigtext">2100 чел./сутки</p>
      </div>
      <div class="box" style="width: 227px;">
        <p class="text">Стоимость услуги</p>
        <p class="bigtext">2 990 тг.</p>
      </div>
      <div class="box" style="width: 191px;">
        <p class="text">Конверсия</p>
        <p class="bigtext">9%</p>
      </div>
    </div>
  </div>
</div>
<div id="SectionModal3" class="modalDialog">
  <div class="SectionModalInner">
    <a href="#close" title="Закрыть" class="closed"></a>
    <div class="SectionModalInner-pict">
      <img />
    </div>
    <div class="SectionModalInner-down">
      <div class="box" style="width: 227px;">
        <p class="text">Количество посетителей</p>
        <p class="bigtext">350 чел./сутки</p>
      </div>
      <div class="box" style="width: 227px;">
        <p class="text">Стоимость услуги</p>
        <p class="bigtext">20 000 тг.</p>
      </div>
      <div class="box" style="width: 191px;">
        <p class="text">Конверсия</p>
        <p class="bigtext">8%</p>
      </div>
    </div>
  </div>
</div>
<div id="SectionModal4" class="modalDialog">
  <div class="SectionModalInner">
    <a href="#close" title="Закрыть" class="closed"></a>
    <div class="SectionModalInner-pict">
      <img />
    </div>
    <div class="SectionModalInner-down">
      <div class="box" style="width: 227px;">
        <p class="text">Количество посетителей</p>
        <p class="bigtext">200 чел./сутки</p>
      </div>
      <div class="box" style="width: 227px;">
        <p class="text">Стоимость услуги</p>
        <p class="bigtext">30 000 тг.</p>
      </div>
      <div class="box" style="width: 191px;">
        <p class="text">Конверсия</p>
        <p class="bigtext">7%</p>
      </div>
    </div>
  </div>
</div>
<div id="SectionModal5" class="modalDialog">
  <div class="SectionModalInner">
    <a href="#close" title="Закрыть" class="closed"></a>
    <div class="SectionModalInner-pict">
      <img />
    </div>
    <div class="SectionModalInner-down">
      <div class="box" style="width: 227px;">
        <p class="text">Количество посетителей</p>
        <p class="bigtext">400 чел./сутки</p>
      </div>
      <div class="box" style="width: 227px;">
        <p class="text">Стоимость услуги</p>
        <p class="bigtext">4 500 тг.</p>
      </div>
      <div class="box" style="width: 191px;">
        <p class="text">Конверсия</p>
        <p class="bigtext">8%</p>
      </div>
    </div>
  </div>
</div>
<div id="SectionModal6" class="modalDialog">
  <div class="SectionModalInner">
    <a href="#close" title="Закрыть" class="closed"></a>
    <div class="SectionModalInner-pict">
      <img />
    </div>
    <div class="SectionModalInner-down">
      <div class="box" style="width: 227px;">
        <p class="text">Количество посетителей</p>
        <p class="bigtext">780 чел./сутки</p>
      </div>
      <div class="box" style="width: 227px;">
        <p class="text">Стоимость услуги</p>
        <p class="bigtext">50 000 тг.</p>
      </div>
      <div class="box" style="width: 191px;">
        <p class="text">Конверсия</p>
        <p class="bigtext">12%</p>
      </div>
    </div>
  </div>
</div>
<div id="SectionModal7" class="modalDialog">
  <div class="SectionModalInner">
    <a href="#close" title="Закрыть" class="closed"></a>
    <div class="SectionModalInner-pict">
      <img />
    </div>
    <div class="SectionModalInner-down">
      <div class="box" style="width: 227px;">
        <p class="text">Количество посетителей</p>
        <p class="bigtext">900 чел./сутки</p>
      </div>
      <div class="box" style="width: 227px;">
        <p class="text">Стоимость услуги</p>
        <p class="bigtext">50 000 тг.</p>
      </div>
      <div class="box" style="width: 191px;">
        <p class="text">Конверсия</p>
        <p class="bigtext">11%</p>
      </div>
    </div>
  </div>
</div>
<div id="SectionModal8" class="modalDialog">
  <div class="SectionModalInner">
    <a href="#close" title="Закрыть" class="closed"></a>
    <div class="SectionModalInner-pict">
      <img />
    </div>
    <div class="SectionModalInner-down">
      <div class="box" style="width: 227px;">
        <p class="text">Количество посетителей</p>
        <p class="bigtext">520 чел./сутки</p>
      </div>
      <div class="box" style="width: 227px;">
        <p class="text">Стоимость услуги</p>
        <p class="bigtext">250 тг.</p>
      </div>
      <div class="box" style="width: 191px;">
        <p class="text">Конверсия</p>
        <p class="bigtext">9%</p>
      </div>
    </div>
  </div>
</div>
<div id="SectionModal9" class="modalDialog">
  <div class="SectionModalInner">
    <a href="#close" title="Закрыть" class="closed"></a>
    <div class="SectionModalInner-pict">
      <img />
    </div>
    <div class="SectionModalInner-down">
      <div class="box" style="width: 227px;">
        <p class="text">Количество посетителей</p>
        <p class="bigtext">1400 чел./сутки</p>
      </div>
      <div class="box" style="width: 227px;">
        <p class="text">Стоимость услуги</p>
        <p class="bigtext">95 000 тг.</p>
      </div>
      <div class="box" style="width: 191px;">
        <p class="text">Конверсия</p>
        <p class="bigtext">13%</p>
      </div>
    </div>
  </div>
</div>

<div id="section5" class="section5">
  <div class="container container-fix">
    <p class="title">НАШИ ПОСЛЕДНИЕ РАБОТЫ</p>
    <div class="line"><img src="img/line.png"></div>
    <p class="title-text">Примеры Landing Page наших клиентов</p>
    <div class="box">
      <div class="box-pict box21"><div class="text">Эксперт качества</div><img src="img/section5/1.jpg">
        <div class="modal-box">
          <p class="name">Эксперт качества</p>
          <!-- <p class="site">razorpit.ru</p> -->
          <p class="easy">Сертификаты и декларации соответствия</p>
          <div class="conv">Конверсия 11%</div>
          <a href="#SectionModal1" class="link">Посмотреть работу</a>
        </div>
      </div>
      <div class="box-pict box22"><div class="text">Razorpit</div><img src="img/section5/2.jpg">
        <div class="modal-box">
          <p class="name">Razorpit</p>
          <!-- <p class="site">razorpit.ru</p> -->
          <p class="easy">Лаконичная посадочная страница новейшего устройства для очистки ваших бритв.</p>
          <div class="conv">Конверсия 9%</div>
          <a href="#SectionModal2" class="link">Посмотреть работу</a>
        </div>
      </div>
      <div class="box-pict box23"><div class="text">BrandPack</div><img src="img/section5/3.jpg">
        <div class="modal-box">
          <p class="name">BrandPack</p>
          <!-- <p class="site">razorpit.ru</p> -->
          <p class="easy">Мешки из крафт бумаги</p>
          <div class="conv">Конверсия 8%</div>
          <a href="#SectionModal3" class="link">Посмотреть работу</a>
        </div>
      </div>
      <div class="box-pict box24"><div class="text">Studio SH</div><img src="img/section5/4.jpg">
        <div class="modal-box">
          <p class="name">Studio SH</p>
          <!-- <p class="site">razorpit.ru</p> -->
          <p class="easy">Студия дизайна интерьеров</p>
          <div class="conv">Конверсия 7%</div>
          <a href="#SectionModal4" class="link">Посмотреть работу</a>
        </div>
      </div>
      <div class="box-pict box25"><div class="text">Happy Flowers</div><img src="img/section5/5.jpg">
        <div class="modal-box">
          <p class="name">Happy Flowers</p>
          <!-- <p class="site">razorpit.ru</p> -->
          <p class="easy">Магазин цветов и элитных подарков</p>
          <div class="conv">Конверсия 8%</div>
          <a href="#SectionModal5" class="link">Посмотреть работу</a>
        </div>
      </div>
      <div class="box-pict box26"><div class="text">Москар</div><img src="img/section5/6.jpg">
        <div class="modal-box">
          <p class="name">Москар</p>
         <!--  <p class="site">razorpit.ru</p> -->
          <p class="easy">Кредитная страница автосалона Москар</p>
          <div class="conv">Конверсия 12%</div>
          <a href="#SectionModal6" class="link">Посмотреть работу</a>
        </div>
      </div>
      
      <div class="box-pict box27"><div class="text">Автокредит</div><img src="img/section5/7.jpg" height="230px">
        <div class="modal-box">
          <p class="name">Автокредит</p>
          <!-- <p class="site">razorpit.ru</p> -->
          <p class="easy">Промо страница кредитной организации</p>
          <div class="conv">Конверсия 11%</div>
          <a href="#SectionModal7" class="link">Посмотреть работу</a>
        </div>
      </div>
      <div class="box-pict box28"><div class="text">Passthepipe</div><img src="img/section5/8.jpg">
        <div class="modal-box">
          <p class="name">Pass The Pipe</p>
         <!--  <p class="site">passthepipe.ru</p> -->
          <p class="easy">Пасзепайп Кальянная</p>
          <div class="conv">Конверсия 9%</div>
          <a href="#SectionModal8" class="link">Посмотреть работу</a>
        </div>
      </div>
      <div class="box-pict box29"><div class="text">Сберкредит</div><img src="img/section5/9.jpg">
        <div class="modal-box">
          <p class="name">Сберкредит</p>
         <!--  <p class="site">razorpit.ru</p> -->
          <p class="easy">Промо страница кредитной организации</p>
          <div class="conv">Конверсия 13%</div>
          <a href="#SectionModal9" class="link">Посмотреть работу</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="section-clients">
  <div class="container container-fix">
    <ul id="flexiselDemo3">
      <li><img src="img/clients/1.png" /></li>
      <li><img src="img/clients/2.png" /></li>
      <li><img src="img/clients/3.png" /></li>
      <li><img src="img/clients/4.png" /></li>
      <li><img src="img/clients/6.png" /></li>
      <li><img src="img/clients/7.png" /></li>
      <li><img src="img/clients/8.png" /></li>
      <li><img src="img/clients/9.png" /></li>
    </ul>
  </div>
</div>

<div id="calc" class="calc">
  <div class="minimal">
    <div class="left wow fadeInLeft" data-wow-duration="1s"></div>
  </div>
  <div class="container container-fix">
    <p class="title2">КАЛЬКУЛЯТОР</p>
    <div class="box-calc">
      <div class="row-box">
        <div class="box-title">Кол-во посетителей</div>
        <input type="text" class="count" id="storlek_testet" value="1000"/>
        <div class="box-text">чел./сутки</div>
        <div class="box-slider"><div id="storlekslider"></div></div>
        <div class="lineika">
          <div class="box-min" id="box-min1"></div>
          5000
          <div class="box-max" id="box-max1"></div>
        </div>
      </div>
      <div class="row-box">
        <div class="box-title">Стоимость услуги</div>
        <input type="text" class="count" id="storlek_testet2" value="8000"/>
        <div class="box-text">тг.</div>
        <div class="box-slider"><div id="storlekslider2"></div></div>
        <div class="lineika">
          <div class="box-min" id="box-min2"></div>
          12000
          <div class="box-max" id="box-max2"></div>
        </div>
      </div>
      <div class="row-box">
        <div class="box-title">Конверсия</div>
        <input type="text" class="count" id="storlek_testet3" value="1"/>
        <div class="box-text">%</div>
        <div class="box-slider"><div id="storlekslider3"></div></div>
        <div class="lineika">
          <div class="box-min" id="box-min3"></div>
          50
          <div class="box-max" id="box-max3"></div>
        </div>
      </div>
    </div>
    <div class="border">
      <div class="top-title">При данной конверсии</div>
      <div class="points">
        <div class="point">
          <img src="img/calc/point1.png">
          <p class="easytext">Оборот в день</p>
          <div class="counttext" id="counttext1">Оборот в день</div>
        </div>
        <div class="point">
          <img src="img/calc/point2.png">
          <p class="easytext">Оборот в месяц</p>
          <div class="counttext" id="counttext2">Оборот в день</div>
        </div>
        <div class="point">
          <img src="img/calc/point2.png">
          <p class="easytext">Оборот в год</p>
          <div class="counttext" id="counttext3">Оборот в день</div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="section-subscribe">
  <div class="container container-fix">
    <div class="row">
      <form role="form" action="mail.php" method="post" class="submit-form-two">
        <div class="col-xs-12">
          <div class="form-group">
            <input type="text" class="form-control sub-input" name="name" placeholder="ВАШЕ ИМЯ">
            <input type="text" class="form-control sub-input" name="phone" placeholder="ТЕЛЕФОН">
            <input type="submit" class="btn sub-btn" value="ХОЧУ ЗАКАЗАТЬ">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<div id="section6" class="section6">
  <div class="container container-fix">
    <p class="title">стоимость нашей работы</p>
    <div class="table-box">
      <div class="row table-row">
        <div class="col-xs-4"></div>
        <div class="col-xs-8">
          <div class="row">
            <div class="col-xs-4"><p class="header1">от 75 000</p></div>
            <div class="col-xs-4"><p class="header1">от 110 000</p></div>
            <div class="col-xs-4"><p class="header1">от 180 000</p></div>
          </div>
        </div>
      </div>
      
      <div class="row table-row">
        <div class="col-xs-4"><p class="punct">Создание продающего дизайна</p></div>
        <div class="col-xs-8">
          <div class="row">
            <div class="col-xs-4"><div class="plus"></div> </div>
            <div class="col-xs-4"><div class="plus"></div> </div>
            <div class="col-xs-4"><div class="plus"></div> </div>
          </div>
        </div>
      </div>
      <div class="row table-row">
        <div class="col-xs-4"><p class="punct">Продающий текст</p></div>
        <div class="col-xs-8">
          <div class="row">
            <div class="col-xs-4"><div class="plus"></div> </div>
            <div class="col-xs-4"><div class="plus"></div> </div>
            <div class="col-xs-4"><div class="plus"></div> </div>
          </div>
        </div>
      </div>
      <div class="row table-row">
        <div class="col-xs-4"><p class="punct">Отзывы клиентов</p></div>
        <div class="col-xs-8">
          <div class="row">
            <div class="col-xs-4"><div class="plus"></div> </div>
            <div class="col-xs-4"><div class="plus"></div> </div>
            <div class="col-xs-4"><div class="plus"></div> </div>
          </div>
        </div>
      </div>
      <div class="row table-row">
        <div class="col-xs-4"><p class="punct">Кроссбраузерная верстка - под все современные браузеры</p></div>
        <div class="col-xs-8">
          <div class="row">
            <div class="col-xs-4"><div class="plus"></div> </div>
            <div class="col-xs-4"><div class="plus"></div> </div>
            <div class="col-xs-4"><div class="plus"></div> </div>
          </div>
        </div>
      </div>
      
      <div class="row table-row">
        <div class="col-xs-4"><p class="punct">Подбор и покупка домена</p></div>
        <div class="col-xs-8">
          <div class="row">
            <div class="col-xs-4"><div class="plus"></div> </div>
            <div class="col-xs-4"><div class="plus"></div> </div>
            <div class="col-xs-4"><div class="plus"></div> </div>
          </div>
        </div>
      </div>
      <div class="row table-row">
        <div class="col-xs-4"><p class="punct">Установка на хостинг</p></div>
        <div class="col-xs-8">
          <div class="row">
            <div class="col-xs-4"><div class="plus"></div> </div>
            <div class="col-xs-4"><div class="plus"></div> </div>
            <div class="col-xs-4"><div class="plus"></div> </div>
          </div>
        </div>
      </div>
      <div class="row table-row">
        <div class="col-xs-4"><p class="punct">Почта вида имя@ваш_домен.ru</p></div>
        <div class="col-xs-8">
          <div class="row">
            <div class="col-xs-4"><div class="plus"></div> </div>
            <div class="col-xs-4"><div class="plus"></div> </div>
            <div class="col-xs-4"><div class="plus"></div> </div>
          </div>
        </div>
      </div>
      
      <div class="row table-row">
        <div class="col-xs-4"><p class="punct">Отправка заявок на e-mail</p></div>
        <div class="col-xs-8">
          <div class="row">
            <div class="col-xs-4"><div class="plus"></div> </div>
            <div class="col-xs-4"><div class="plus"></div> </div>
            <div class="col-xs-4"><div class="plus"></div> </div>
          </div>
        </div>
      </div>
      <div class="row table-row">
        <div class="col-xs-4"><p class="punct">Установка онлайн-консультанта</p></div>
        <div class="col-xs-8">
          <div class="row">
            <div class="col-xs-4"><div class="plus"></div> </div>
            <div class="col-xs-4"><div class="plus"></div> </div>
            <div class="col-xs-4"><div class="plus"></div> </div>
          </div>
        </div>
      </div>
      <div class="row table-row">
        <div class="col-xs-4"><p class="punct">Технология увеличения звонков</p></div>
        <div class="col-xs-8">
          <div class="row">
            <div class="col-xs-4"><div class="plus"></div> </div>
            <div class="col-xs-4"><div class="plus"></div> </div>
            <div class="col-xs-4"><div class="plus"></div> </div>
          </div>
        </div>
      </div>
      <div class="row table-row">
        <div class="col-xs-4"><p class="punct">Продающий копирайтинг</p></div>
        <div class="col-xs-8">
          <div class="row">
            <div class="col-xs-4"><div class="minus"></div> </div>
            <div class="col-xs-4"><div class="plus"></div> </div>
            <div class="col-xs-4"><div class="plus"></div> </div>
          </div>
        </div>
      </div>
      <div class="row table-row">
        <div class="col-xs-4"><p class="punct">Маркетинговое исследование</p></div>
        <div class="col-xs-8">
          <div class="row">
            <div class="col-xs-4"><div class="minus"></div> </div>
            <div class="col-xs-4"><div class="plus"></div> </div>
            <div class="col-xs-4"><div class="plus"></div> </div>
          </div>
        </div>
      </div>
      <div class="row table-row">
        <div class="col-xs-4"><p class="punct">Настройка рекламы (Google и Yandex)</p></div>
        <div class="col-xs-8">
          <div class="row">
            <div class="col-xs-4"><div class="minus"></div> </div>
            <div class="col-xs-4"><div class="plus"></div> </div>
            <div class="col-xs-4"><div class="plus"></div> </div>
          </div>
        </div>
      </div>
      <div class="row table-row">
        <div class="col-xs-4"><p class="punct">Интеграция платежных систем</p></div>
        <div class="col-xs-8">
          <div class="row">
            <div class="col-xs-4"><div class="minus"></div> </div>
            <div class="col-xs-4"><div class="minus"></div> </div>
            <div class="col-xs-4"><div class="plus"></div> </div>
          </div>
        </div>
      </div>
      <div class="row table-row">
        <div class="col-xs-4"><p class="punct">Мультиязычность</p></div>
        <div class="col-xs-8">
          <div class="row">
            <div class="col-xs-4"><div class="minus"></div> </div>
            <div class="col-xs-4"><div class="minus"></div> </div>
            <div class="col-xs-4"><div class="plus"></div> </div>
          </div>
        </div>
      </div>
      <div class="row table-row">
        <div class="col-xs-4"><p class="punct">А/В тестирование</p></div>
        <div class="col-xs-8">
          <div class="row">
            <div class="col-xs-4"><div class="minus"></div> </div>
            <div class="col-xs-4"><div class="minus"></div> </div>
            <div class="col-xs-4"><div class="plus"></div> </div>
          </div>
        </div>
      </div>
      <div class="row table-row2">
        <div class="col-xs-4"></div>
        <div class="col-xs-8">
          <div class="row">
            <div class="col-xs-4 text-center"><a href="#openModal" data-packet="Пакет 1" class="byu">Купить</a> </div>
            <div class="col-xs-4"><a href="#openModal" data-packet="Пакет 2" class="byu">Купить</a> </div>
            <div class="col-xs-4"><a href="#openModal" data-packet="Пакет 3" class="byu">Купить</a> </div>
          </div>
        </div>
      </div>
      <div class="obvodka">
        <div class="colum" id="colum1"></div>
        <div class="colum" id="colum2"></div>
        <div class="colum" id="colum3"></div>
      </div>
      <div class="obvodka">
        <div class="columhover" id="colum12"></div>
        <div class="columhover active" id="colum22"></div>
        <div class="columhover" id="colum32"></div>
      </div>
    </div>
  </div>
</div>

<div id="section7" class="section7">
  <div class="minimal">
    <div class="right"></div>
  </div>
  <div class="container container-fix ">
    <p class="title">О НАС ГОВОРЯТ</p>
    <div class="line"><img src="img/line.png"></div>
    <p class="title-text">Отзывы наших клиентов говорят сами за себя</p>
    <div class="row pad50">
      <div class="col-xs-12">
        <div class="box" >
          <div class="photo3"><div class="maska"></div></div>
          <p class="name">Слиняков Альберт</p>
          <p class="office">ПРЕДПРИНИМАТЕЛЬ</p>
          <p class="text">В «SITEBUILD» работают генераторы идей, которые знают, как «подкрутить» продажи! Я весьма впечатлен энтузиазмом разработчиков. Никаких шаблонов, только оригинальные решения в процессе проектирования. Вашими усилиями landing-page заменил мне целый сайт. Спасибо за увеличенный спрос на услуги моей компании! </p>
        </div>
        
        <div class="box">
          <div class="photo2"><div class="maska"></div></div>
          <p class="name">Мария Лебедева</p>
          <p class="office">МАРКЕТОЛОГ</p>
          <p class="text">Компания «SITEBUILD» разработала для нашей автомобильной сети уже не одну целевую страницу, которая окупила наши вложения и начали моментально приносить доход! Больше всего удивили оперативные сроки проектирования landing-page и индивидуальный подход!</p>
        </div>
        <div class="boxlast">
          <div class="photo1"><div class="maska"></div></div>
          <p class="name">НИКОЛАЙ КУЗНЕЦОВ</p>
          <p class="office">Pr-manager</p>
          <p class="text">Большое спасибо компании «SITEBUILD» за эффективный landing-page! Конверсия в самые короткие сроки стала увеличиваться на глазах - за один только месяц пришло более 50-ти заявок, и это в той сфере, где 10 заявок в месяц уже за счастье! Приятно иметь дело с профессионалами! </p>
        </div>
      </div>
    </div>
  </div>

<div class="container container-fix ">    
  <div class="row pad50">
    <div class="col-xs-12">
      <div class="user-agreement">
        <a target="_blank" href="http://www.sitebuild.kz/upload/pers.pdf">Соглашение о персональных данных</a>
      </div>
    </div>
  </div>
</div>

</div>

<div class="section-subscribe">
  <div class="container container-fix">
    <div class="row">
      <form role="form"  action="mail.php" method="post" class="submit-form-three">
        <div class="col-xs-12">
          <div class="form-group">
            <input type="text" class="form-control sub-input" name="name" placeholder="ВАШЕ ИМЯ">
            <input type="text" class="form-control sub-input" name="phone" placeholder="ТЕЛЕФОН">
            <button type="submit" class="btn sub-btn">ХОЧУ ЗАКАЗАТЬ</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="map" id="map">
  <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A3e9d332f78e33bee2a1df59bbaf61ce074ae3432ccca2a77b0176a0f5d2139fc&amp;width=100%25&amp;height=720&amp;lang=ru_RU&amp;scroll=true"></script>
  
  <div class="container container-fix">
    <div class="box">
      <p class="bold">Телефон</p>
      <p class="easy"><a class="link" style="text-decoration: none; color:#5c5c5c;" href="tel:+77272513535">+7 (727) 251-35-35</a>,<br> <a href="tel:+77770086666" style="text-decoration: none; color:#5c5c5c;" class="link">+7 (777) 008-66-66</a></p>
      <br>
      <p class="bold">Адрес</p>
      <p class="easy">Алматы, ул. Толе би, д.286/2, БЦ "Каусар"</p>
      <br>
      <p class="bold">Электропочта</p>
      <a href="mailto:office@sitebuild.kz" style="text-decoration: none; color:#5c5c5c;">office@sitebuild.kz</a></p>
    </div>
  </div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.flexisel.js"></script>
<script src="js/countUp.js"></script>
<script src="js/ion.rangeSlider.js"></script>
<script src="js/wow.js"></script>
<script src="js/jquery.validate.js"></script>
<script src="js/accounting.js"></script>
<script src="js/ajaxform.js"></script>
<!-- <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>     -->
<script>
  new WOW().init();
</script>

<script src="js/scripts.js"></script>


</body>
</html>
