<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru" dir="ltr">
<head>
	<title>FireTroop - about company</title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<script src="js/jquery-1.9.1.js"></script>
	<script src="js/jquery.anythingslider.js"></script>
	<link rel="stylesheet" type="text/css" href="css/reset.css" />
	<link rel="stylesheet" type="text/less" href="css/style.less" />
	<script src="js/less.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="css/anythingslider.css" />
	<!--[if IE 9]> <link href="css/ie9.css" rel="stylesheet" type="text/css"/> <![endif]-->
	<script>
	$(function(){
		$('#slider').anythingSlider({
			buildStartStop: false,
			hashTags: false
		});
		$('#search')
		.focus(function(){if ($(this).val() == 'Поиск по каталогу') {$(this).val('');} })
		.blur(function(){if ($(this).val() == '') {$(this).val('Поиск по каталогу');} })
	})
	</script>
</head>
<body>
<div id="wrapper">
	<div class="top-menu clearfix">
		<div class="nav">
			<ul>
				<li><a href="#">Каталог</a></li>
				<li><a href="#">Гарантия</a></li>
				<li><a href="#">Спецпредложения</a></li>
				<li><a href="#">Контакты</a></li>
			</ul>
		</div>
		<div class="login-or-register">
		<ul>
			<li><span class="arrow"></span><a href="#">Регистрация</a></li>
			<li><span class="arrow"></span><a href="#">Вход</a></li>
		</ul>
		</div>
	</div>
	<div id="content">
		<div class="articles clearfix">
			<div class="header clearfix">
				<div class="logo">
					<a href="/"><img src="img/logo.png" alt=""/></a>
					<p>Интернет магазин климатического оборудования</p>
				</div>
				<div class="top-app">
					<div class="info"><span class="code-t">(812) </span>234 34 54</div>
					<div class="email-contact"><a href="#">Avtotermo@mail.ru</a></div>
					<div class="button-app"><a href="#"><img src="img/button-app.png" title="" alt=""/></a></div>
					<div class="basket">
						<div class="basket-img">
							<img src="img/basket.png" alt="" />
						</div>
						<div class="basket-info">
							<p class="products-number">Моя корзина <span class="number">2</span></p>
							<p class="sum">На сумму 12.000р</p>
						</div>
					</div>
				</div>
				<div class="search-form">
					<form action="" method="GET">
						<input type="text" id="search" name="q" value="Поиск по каталогу"/>
						<input type="image" src="img/search-button.png" />
					</form>
				</div>
			</div>
			<div class="center clearfix">
				<div class="sidebarL">
					<div class="navigation">
						<div class="catalog">Каталог</div>
						<ul>
							<li><a href="#">Подогреватели жидкостные</a></li>
							<li><a href="#">Рефрижераторы</a></li>
							<li><a href="#">Воздушные отопители</a></li>
							<li><a href="#">Тепловой аккумулятор</a></li>
							<li><a href="#">Спецпредложения</a></li>
							<li><a href="#">Новинки</a></li>
						</ul>
					</div>
					<div class="help-block">
						<div class="name_block">Помощь</div>
						<p class="help-sprite-1"><a href="#">Доставка</a></p>
						<p class="help-sprite-2"><a href="#">Способы оплаты</a></p>
						<p class="help-sprite-3"><a href="#">Сервис</a></p>
					</div>
					<div class="news-block">
						<div class="name_block">Новости</div>
							<dl>
								<dt>12.05.2013</dt>
								<dd><a href="#">Наша компания занимается техническим дифгностированием</a></dd>
								<dt>03.05.2013</dt>
								<dd><a href="#">Система кондиционирования в современном автомобиле уже да...</a></dd>
								<dt>03.05.2013</dt>
								<dd><a href="#">Система кондиционирования в современном автомобиле уже да...</a></dd>
							</dl>
					</div>
				</div>
				<div class="sidebarRight">
					<div class="slider">
						<ul id="slider">
							<li>
								<div class="info-slider">
								<h1>Webasto Termo Top E бензин</h1>
								<ul>
									<li>Тип топлива: Бензин</li>
									<li>Напряжение: 12 вольт</li>
									<li>Мощность: 4 kBt</li>
								</ul>
								<div class="old-price"><del>135 000р.</del></div>
								<div class="new-price">120 000р.</div>
								</div>
								<a href="#"><img class="bay-slider" src="img/bay-slider.png" /></a>
								<img src="slider/5.png" alt="" />
							</li>
							<li>
								<img src="slider/2.jpg" alt="" />
							</li>
							<li>
								<img src="slider/3.jpg" alt="">
							</li>
							<li><img src="slider/1.jpg" alt=""></li>
						</ul>
					</div>
					<div class="products clearfix">
					<div class="new">Новинки</div>
						<div class="short-product">
							<div class="white-product">
							<span><a href="#">Предпусковой жидкостный подогреватель Теплостар </a></span>
								<a href="#"><img src="img/product.png" alt=""/></a>
							</div>
						<div class="bay"><span class="price">220000руб.</span><a href="#">Купить</a></div>
						</div>
						<div class="short-product">
							<div class="white-product">
							<span><a href="#">Топливный нас 020.1106010</a></span>
								<a href="#"><img src="img/product.png" alt=""/></a>
							</div>
						<div class="bay"><a href="#">Купить</a></div>
						</div>
						<div class="short-product">
							<div class="white-product">
							<span><a href="">Бинар-5Б-компакт с монтажным комплектом и пультом-таймером 12B</a></span>
								<a href="#"><img src="img/product.png" alt=""/></a>
							</div>
						<div class="bay"><span class="price">220000руб.</span><a href="#">Купить</a></div>
						</div>
						<div style="clear:both;"></div>
						<div class="top">Популярное</div>
						<div class="short-product hover">
							<div class="white-product">
							<span><a href="#">Предпусковой жидкостный подогреватель Теплостар </a></span>
								<a href="#"><img src="img/product.png" alt=""/></a>
							</div>
						<div class="bay"><span class="price">220000руб.</span><a href="#">Купить</a></div>
						</div>
						<div class="short-product hover">
							<div class="white-product">
							<span><a href="#">Топливный нас 020.1106010</a></span>
								<a href="#"><img src="img/product.png" alt=""/></a>
							</div>
						<div class="bay"><a href="#">Купить</a></div>
						</div>
						<div class="short-product hover">
							<div class="white-product">
							<span><a href="">Бинар-5Б-компакт с монтажным комплектом и пультом-таймером 12B</a></span>
								<a href="#"><img src="img/product.png" alt=""/></a>
							</div>
						<div class="bay"><span class="price">220000руб.</span><a href="#">Купить</a></div>
						</div>
					
					</div>
				</div>
			</div>
		</div>
		<div class="footer clearfix">
			<div class="social">
				<p class="copy">&copy;2013 "АвтоТермо"<p>
				<div class="button-social">
					<a href="#"><img src="img/vk.png" alt=""/></a>
					<a href="#"><img src="img/fb.png" alt=""/></a>
				</div>
			</div>
			<div class="footer-contact">
				<p>Санкт-Петербург</p>
				<p><a href="mailto:#">Autotermo@mail.ru</a></p>
			</div>
			<div class="footer-contact-phone">
				<p>+7(812) 234 34 54</p>
				<p>+7(812) 234 34 54</p>
			</div>
			<div class="copy-studio">
				<p>Разработано в <a href="#">FireTroop</a></p>
			</div>
		</div>
	</div>
</div>
</body>
</html>