и &&
или ||

Выборка набора разнотипных элементов
$('img[width=123], a[href*=jju]').fadeOut(); выбор нескольких разнотипных
$('#tyty').append('<tr><td>'+ peremennaya + '</td></tr>'); Когда надо и код, и переменную, пишем через +
$('img[alt]').fadeOut(); выбор просто по наличию атрибута
alert($('textarea').val()); вывела в виде сообщения содержимое текстовой области textarea
$('input').css('border','3px solid #cecece'); ко всем инпутам применила стиль серая рамка 3 пикселя
alert($('input').length); вывести количество инпутов
$(':text').css('background','#ccc'); применили фон к текстовому элементу инпута
alert($(':checked').length);  вывести количество чекнутых любого вида
alert($(':disabled').length);  вывести количество заблокированных инпутов

Выбор эл-тов
$(window); элемент - все окно, пишется без кавычек
$(document); элемент - документ, пишется без кавычек
$('#tyty + p'); выбрать р, который следует сразу за классом id="tyty"
$('#tyty > p'); выбрать дочерние р у объекта с id="tyty"
$('img[width=200]'); выбрать все картинки с шириной 200px
$('a[href^=http]'); выбрать все ссылки, у которых стрибут хттп начинается с http
$('img[scr$=.jpg]'); выбрать все имг, у которых разрешение заканчивается на .jpg
$('img[src*=moto]'); выбрать все имг, у которых в любом месте стрибута src присутствует moto

фильтрация
$('#moto-table tr:even'); выбрать все ЧЕТНЫЕ строки таблицы с id=moto-table
$('#moto-table tr:odd'); выбрать все НЕЧЕТНЫЕ строки таблицы с id=moto-table
$('img:not(#div-fort img)'); выбрать все картинки на странице, КРОМЕ тех, которые внутри дива с id=div-fort
$('div:has(select)'); выбор дивов, которые СОДЕРЖАТ внутри себя тег select
$('p:contains(мотоцикл)'); выбрать абзацы, которые СОДЕРЖАТ в себе слово "мотоцикл"
$('#for-img img:first'); выбрать ПЕРВУЮ картинку из блока с id=for-img
$('#for-img img:last'); выбрать ПОСЛЕДНЮЮ картинку из блока с id=for-img
$('div:hidden'); выбрать все дивы, которые СКРЫТЫ
$('div:visibility'); выбрать все дивы, которые ВИДИМЫЕ

Текст, показать, скрыть
var texth1 = $('#main-h1').text(); вводим переменную, в которой текст из элемента с id="main-h1"
alert(texth1); выводим значение введенной переменной в сообщении
var texth1 = $('#main-h1').text(Труляля); вводим переменную, в которой текст из элемента с id="main-h1", причем текст заменяется на "Труляля"
$('img[src*=.logo.jpg]').nide(3000); выбрать все картинки с определенным src и исчезнуть ее за 3 секунды
$('img[src*=.logo.jpg]').show(3000); выбрать все картинки с определенным src она появляется за 3 секунды

Циклы
$('#tyty img').hide(3000); выбрать все картинки внутри дива #tyty и исчезнуть их за 3 сек

Ширина и высота
var shirinka = $('#int').width(); задаем переменную для ширины и выводим ее в окне
alert (shirinka);
var shirinka = $('#int').width(130).height(300); изменить ширину и высоту

Изменение html-кода
$('#moto').html(); выбрать html код элемента с id moto
alert($('#moto').html()); вывести в сообщении код элемента с id moto
$('#moto').html('<h3><a href="#">Honda DN-01 (19000$)</a></h3>');заменить код внутренностей элемента с id moto на ссылку

Появление и исчезновение объекта
$('#gogo img').fadeOut(4000); исчезновение-растворение картинки
$('#gogo img').fadeIn(4000); появление через проявление картинки

Изменение прозрачности элемента
$('img[src*=logo]').fadeTo(5000,0.5); элемент должен поменять прозрачность за 5 сек

Эффект уезжания при исчезновении элемента
$('img[src*=logo]').slideUp(4000); элемент исчезает уходом вверх за 4 сек
$('img[src*=logo]').slideDown(4000); элемент появляется сверху вниз за 4 сек

Работа с атрибутами объектов
var fufu = $('#logo img').attr('height'); вернуть значение высоты картинки и задание переменной fufu этому значению
$('#logo img').attr('height',50); изменить атрибут высоты на 50
$('#logo img').removeAttr('alt'); удалить атрибут alt у картинки

Работа с классами
$('#tyty p').addClass('new'); Применить новый созданный класс к объекту
$('#tyty p').removeClass('new'); Удалить класс у элемента
$('#mail h1').css('font-size'); возвращает значение свойства элемента сss для h1. Писать надо полное свойство, не margin, а конкретный - нижний, верхний и т.п.
$('#mail h1').css('color','red'); задание свойства цвета
$('#mail h1').css({
	'color':'red',
'border':'1px solid #cc0000',
	'font-size':'12px'
}); литерал объекта, задание нескольких свойств

Динамическое изменение свойств
$('#div-for-img').animate({'width':'540px'}, 4000,function(){
alert('Готово!');
}); Изменить свойство ширины за 4 секунды и потом вывести сообщение, что готово. Заводится анонимная функция (или же дается имя функции без скобок и выполняется)
$('#div-for-img').animate({'paddingTop':'6px'}, 5000); Записи параметров, которые пишутся обычно через дефис, в Анимэйт надо писать через большую букву.

Добавление чего-то до, после, внутрь элемента
$('#img-hy').before('<p>Труляля</p>'); Вставить код ДО элемента
$('#img-hy').after('<p>Труляля</p>'); Вставить код ПОСЛЕ элемента
$('#img-hy').prepend('<p>Труляля</p>'); Вставить код внутрь элемента ПЕРЕД всеми дочерними
$('#img-hy').append('<p>Труляля</p>'); Вставить код внутрь элемента ПОСЛЕ всех дочерних эл-тов

Прохождение по КАЖДОМУ элементу выборки
$('img').each(function(){ 
	if ($(this).width() > 400) {
		$(this).fadeOut(3000);
	};
}); Выбрать все картинки, проверить ширину и скрыть все картинки, ширина которых больше 400

Количество элементов
$('div').size(); Кол-во дивов на странице вернет
$('div').get(0); возвращает код первого элемента из массива (или не первого)

Клонирование и удаление элементов
var myClone = $('#drty').clone(); Клонировать элемент и внести его в переменную
$('#foto').after(myClone);Вставить клон элемента после блока с id=foto
var myremoveForm = $('.form').remove(); удалить элемент с классом form и записывание ее в переменную на всякий случай (из переменной ее можно вернуть потом)

СОБЫТИЯ
.mouseover() - наведение мыши на элемент
.mouseout() - увод курсора с элемента
.click() - клик по элементу
.dblclick() - двойной клик
.mousemove() - движения мышкой
.mousedown() - нажимается мышь, но еще не отпустили
.mouseup() - сам момент отпускания кнопки мыши

.submit() - событие сабмит происходит при нажатии кнопки сабмит
.focus() - когда щелкнули по строке или эл. фокус
.blur() - уводится фокус с поля
.change() - изменение поля
.reset() - сброс
.keypress() - нажатие кнопки мыши
.keyup() - отпустили кнопку после нажатия
.keydown() - нажали и еще не отпустили

.load() - после загрузки всего происходит это событие
.resize() - изменение размера, когда тянем за стрелки
.scroll() - прокрутка страницы
.unload() - выгрузка, уход с данной страницы


$('img[src^=logo]').click(function(){ При клике выводить сообщение
	alert('Клик по шапке');
});
$(window).scroll(function(){ При прокрутке выводить сообщение
	alert('Прокруточка');
});

.hover() - объединенные mousover & mousup
$('#sortable li').hover(function(){ 
	$(this).css({
		'color':'white',
		'background':'#cc0000'
	})}, function(){
	$(this).css({
		'color':'',
		'background':''
	});
}); Две функции пишутся через зпт, это значит, что при наведении одна функция, при уводе - второе

.toggle() - аналогично, объединенные два щелчка мышью
$('#tyty a').toggle(function(){
	$('#formred').fadeOut(2000);
	$(this).text('Развернуть');
}, function(){
	$('#formred').fadeIn(2000);
	$(this).text('Свернуть');
});  Две функции пишутся через зпт, при первом клике - первая срабатывает, при втором клике - вторая


$('.open_modal').hover(function(e){
	var showntext = $(this).attr('showntext');
	$('#helps').text(showntext).css('top', e.pageY + 10).css('left', e.pageX - 100).show();
}, function(){
	$('#helps').hide();
});
