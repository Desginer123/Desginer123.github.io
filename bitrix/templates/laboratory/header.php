<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?$APPLICATION->ShowHead();?>
		<title><?$APPLICATION->ShowTitle();?></title>
		<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" /> 	
  <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <link rel="stylesheet" href="css/style.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<header class="header" id="header">
   <div class="fixed__menu">
    <a href="/"><img src="<?php echo SITE_TEMPLATE_PATH ?>/images/logo.png" alt="Логотип" class="header__img"></a>
    <nav class="header__nav-wrapper">
        <div class="header__icons">
            <h1 class="header__title">Приморская межобластная ветеринарная лаборатория</h1>
            <ul class="header__icons-wrapper">
                <li class="header__icons-item"><div class="header__icons-img-wrapper"><i class="fa header__icons-fa fa-search" aria-hidden="true"></i>
                </div><span><input class="header__icons-input" type="text" placeholder="Поиск..."><button onclick="location.href='../news.html'" class="header__icons-search-btn"></button></span></li>
                <li class="header__icons-item"><div class="header__icons-img-wrapper"><i class="fa header__icons-fa fa-map-marker" aria-hidden="true"></i>
                </div><span id="adress">Приморский край г. Уссурийск, ул. Белинского д. 3</span></li>
                <li class="header__icons-item"><div class="header__icons-img-wrapper"><i class="fa header__icons-fa fa-phone" aria-hidden="true"></i></div><span><a href="tel:+7 (4234) 35-63-90">+7 (4234) 35-63-90</a></span></li>
                <li class="header__icons-item"><div class="header__icons-img-wrapper"><i class="fa header__icons-fa fa-paper-plane-o" aria-hidden="true"></i>
                </div><span><a href="mailto:pmvl1@yandex.ru">pmvl1@yandex.ru</a></span></li>
            </ul>
        </div>
        <div class="header__links">
            <ul class="header__links-wrapper">
                <div class="dropdown">
                    <button class="header__links-item"> <a href="../about.php">О лаборатории</a>
                    </button>
                    <div class="dropdown-content">
                      <a href="#history">История</a>
                      <a href="#mission">Миссия</a>
                      <a href="#goal">Главные цели в области качества</a>
                      <a href="#structure">Структура</a>
                    </div>
                  </div> 
                  <div class="dropdown">
                    <button class="header__links-item"> <a href="../documents.php">Документы</a>
                    </button>
                    <div class="dropdown-content">
                      <a href="#">История</a>
                      <a href="#">Миссия</a>
                      <a href="#">Главные цели в области качества</a>
                      <a href="">Структура</a>
                    </div>
                  </div> 
                  <div class="dropdown">
                    <button class="header__links-item"> <a href="../service.php">Услуги</a>
                    </button>
                    <div class="dropdown-content">
                      <a href="#">История</a>
                      <a href="#">Миссия</a>
                      <a href="#">Главные цели в области качества</a>
                      <a href="">Структура</a>
                    </div>
                  </div> 
                  <div class="dropdown">
                    <button class="header__links-item"> <a href="../price.php">Прейскурант</a>
                    </button>
                    <div class="dropdown-content">
                      <a href="#">История</a>
                      <a href="#">Миссия</a>
                      <a href="#">Главные цели в области качества</a>
                      <a href="">Структура</a>
                    </div>
                  </div> 
                  <div class="dropdown">
                    <button class="header__links-item"> <a href="../buildings.php">Наше строительство</a>
                    </button>
                    <div class="dropdown-content">
                      <a href="#">История</a>
                      <a href="#">Миссия</a>
                      <a href="#">Главные цели в области качества</a>
                      <a href="">Структура</a>
                    </div>
                  </div> 
                  <div class="dropdown">
                    <button class="header__links-item"> <a href="../foremployers.php">Для заказчиков</a>
                    </button>
                    <div class="dropdown-content">
                      <a href="#">История</a>
                      <a href="#">Миссия</a>
                      <a href="#">Главные цели в области качества</a>
                      <a href="">Структура</a>
                    </div>
                  </div> 
                  <div class="dropdown">
                    <button class="header__links-item"> <a href="../news.php">Новости</a>
                    </button>
                    <div class="dropdown-content">
                      <a href="#">История</a>
                      <a href="#">Миссия</a>
                      <a href="#">Главные цели в области качества</a>
                      <a href="">Структура</a>
                    </div>
                  </div> 
                  <div class="dropdown">
                    <button class="header__links-item"> <a href="../contacts.php">Контакты</a>
                    </button>
                    <div class="dropdown-content">
                      <a href="#">История</a>
                      <a href="#">Миссия</a>
                      <a href="#">Главные цели в области качества</a>
                      <a href="">Структура</a>
                    </div>
                  </div>    
            </ul>
        </div>
    </nav>
   </div>
   <div id="panel">
			<?$APPLICATION->ShowPanel();?>
		</div>
</header>
		
	
						