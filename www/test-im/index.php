<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru" dir="ltr">
<title>FireTroop - О компании</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/anythingslider.css" />
<script src="js/jquery-1.9.1.js"></script>
<script src="js/jquery.anythingslider.js"></script>
<script>
$(function(){
	$('#slider').anythingSlider({
		buildStartStop: false,
		hashTags: false
	});
	$('.short-product').hover(
		function(){
			$(this).children('.bay').addClass('bay_hover');
		},
		function(){
			$('.bay').removeClass('bay_hover');
		}
	);
})
</script>
<body>
<div id="wrapper">
	<div class="top-menu clearfix">
		<div class="nav hover">
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
					<div class="hover email-contact"><a href="#">autotermo@mail.ru</a></div>
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
						<input type="text" name="q" value="Поиск по каталогу"/>
						<input type="image" src="img/search-button.png" />
					</form>
				</div>
			</div>
			<div class="sidebarL">
				<div class="navigation">
					<div class="catalog">Каталог</div>
					<ul>
						<li><a href="#">Подогреватели жидкостные</a></li>
						<li><a href="#">Рифрежераторы</a></li>
						<li><a href="#">Воздушные отопители</a></li>
						<li><a href="#">Тепловой аккумулятор</a></li>
						<li><a href="#">Спецпредложения</a></li>
						<li><a href="#">Новинки</a></li>
					</ul>
				</div>
				<div class="help-block hover">
					<div class="help">Помощь</div>
					<p class="help-sprite-1"><a href="#">Доставка</a></p>
					<p class="help-sprite-2"><a href="#">Способы оплаты</a></p>
					<p class="help-sprite-3"><a href="#">Сервис</a></p>
				</div>
				<div class="news-block hover">
					<div class="news">Новости</div>
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
			<div class="center">
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
							<div class="old-cena"><del>135 000 руб.</del></div>
							<div class="new-cena">120 000 руб.</div>
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
					<div class="short-product hover">
						<div class="white-product">
						<span><a href="#">Топливный насос . 1111111111111111111
						ssssssssssssssss
						ssssssssssssss
						ssssssssssssssss
						sssssssssssssssss
						ssssssssssssssss
						sssssssssssssss
						sssssssssssssssss
						sssssssssssssssssss
						sssssssssssssssssssss
						sssssssssssssssssssssssss
						sssssssssssssssssssssssss
						ssssssssssssssss</a></span>
							<a href="#"><img src="img/product.png" alt=""/></a>
						</div>
					<div class="bay"><span class="cena">220000руб.</span><a href="#">Купить</a></div>
					</div>
					<div class="short-product hover">
						<div class="white-product">
						<span><a href="#">Топливный насос . 1111111111111111111</a></span>
							<a href="#"><img src="img/product.png" alt=""/></a>
						</div>
					<div class="bay"><a href="#">Купить</a></div>
					</div>
					<div class="short-product hover">
						<div class="white-product">
						<span><a href="#">Топливный насос . 1111111111111111111nn
						nnnnnnnnnnnnnnnnnnnnnn
						nnnnnnnnnnnnnnnnnnnn
						nnnnnооооооооооо
						kkkkkkkkkkkk
						kkkkkkkkkkkkkk
						ddddddddddddddd
						ddddddddddddddddd
						ddddddddddddddddd
						dddddddddddddddd</a></span>
							<a href="#"><img src="img/product.png" alt=""/></a>
						</div>
					<div class="bay"><span class="cena">220000руб.</span><a href="#">Купить</a></div>
					</div>
					<div style="clear:both;"></div>
					<div class="new">Популярное</div>
					<div class="short-product hover">
						<div class="white-product">
						<span><a href="#">Топливный насос . 1111111111111111111nn
						nnnnnnnnnnnnnnnnnnnnnn
						nnnnnnnnnnnnnnnnnnnn
						nnnnnооооооооооо
						kkkkkkkkkkkk
						kkkkkkkkkkkkkk
						ddddddddddddddd
						ddddddddddddddddd
						ddddddddddddddddd
						dddddddddddddddd</a></span>
							<a href="#"><img src="img/product.png" alt=""/></a>
						</div>
					<div class="bay"><span class="cena">220000руб.</span><a href="#">Купить</a></div>
					</div>
					<div class="short-product hover">
						<div class="white-product">
						<span><a href="#">Топливный насос . 1111111111111111111</a></span>
							<a href="#"><img src="img/product.png" alt=""/></a>
						</div>
					<div class="bay"><span class="cena">220000руб.</span><a href="#">Купить</a></div>
					</div>
					<div class="short-product hover">
						<div class="white-product">
						<span><a href="#">Топливный насос . 1111111111111111111</a></span>
							<a href="#"><img src="img/product.png" alt=""/></a>
						</div>
					<div class="bay"><span class="cena">220000руб.</span><a href="#">Купить</a></div>
					</div>
				
				</div>
			</div>
		</div>
		<div class="footer">
			<div class="social">
				<p class="copy">&copy;2013 "АвтоТермо"<p>
				<div class="button-social">
					<a href="#"><img src="img/vk.png" alt=""/></a>
					<a href="#"><img src="img/fb.png" alt=""/></a>
				</div>
			</div>
			<div class="hover">
				<p>Санкт-Петербург</p>
				<p><a href="mailto:#">Autotermo@mail.ru</a></p>
			</div>
			<div>
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