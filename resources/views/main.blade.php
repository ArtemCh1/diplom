<!-- Сообщаем браузеру как стоит обрабатывать эту страницу -->
<!DOCTYPE html>
<!-- Оболочка документа, указываем язык содержимого -->
<html lang="ru">
	<!-- Заголовок страницы, контейнер для других важных данных (не отображается) -->
	<head>
		<!-- Заголовок страницы в браузере -->
		<title>CSS. Часть №8 (позиционирование)</title>
		<!-- Подключаем CSS -->
		<link rel="stylesheet" href="css/style_main.css" />
		<!-- Кодировка страницы -->
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
	</head>
	<!-- Отображаемое тело страницы -->
	<body>
		<header class="header">
			<h1>Финансовый калькулятор</h1>
		</header>
		<div class="block_1">
            <div class="block_2"> Сумма: <input placeholder="Введите сумму" tabindex="1" name="number" type="number"/> Период: <input placeholder="Укажите дату" tabindex="2" name="date" type="date"/> Акция: <input placeholder="Выберите акцию" tabindex="3" name="tokens" type="text"/> <button tabindex="4" type="submit">Отправить</button><div class="indoor_unit">Информация:  В ней осущесвляется сбор и визуализация показателей. Осущесвления идет при помощи парсинга, который автоматически запишет данные наших показателей, далее зафиксирует в наш калькулятор и сделает прогноз и оценку.</div><br> Оценка надежности:<input type="text" class="textinput" />Прогноз:<input type="text" class="textinput" /> <br> Ориентировочная прибыль: <input type="text" class="textinput" /> </div>
            <div class="block_3"> Иформация: В ней будет шкала оценки Анализ Рекомендации Направления</div>
        </div>
	</body>
</html>