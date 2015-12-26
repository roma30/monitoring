-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 22 2015 г., 17:03
-- Версия сервера: 5.5.45
-- Версия PHP: 5.4.44

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `monitoring`
--

-- --------------------------------------------------------

--
-- Структура таблицы `maintexts`
--

CREATE TABLE IF NOT EXISTS `maintexts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext NOT NULL,
  `body` text NOT NULL,
  `url` tinytext NOT NULL,
  `showhide` enum('show','hide') NOT NULL DEFAULT 'show',
  `lang` enum('ru','en') NOT NULL DEFAULT 'ru',
  `putdate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Дамп данных таблицы `maintexts`
--

INSERT INTO `maintexts` (`id`, `name`, `body`, `url`, `showhide`, `lang`, `putdate`) VALUES
(1, '<h2>Последние новости</h2>\r\n<hr>\r\n<div>Фестиваль хлеба-2015</div>', '<p>11-я международная специализированная выставка «Хлебное и кондитерское дело-2015» успешно прошла в Минске с 8 по 11 сентября, продемонстрировав большое количество новинок сырья и ингредиентов, оборудования и инструментов, упаковки и упаковочных материалов, хлебобулочных и кондитерских изделий, результатов научных исследований, а также порадовав обширной программой деловых, образовательных и зрелищных мероприятий. В выставке приняли участие более 60 компаний из 10 стран мира. Традиционно выставка прошла с отраслевым форумом «Упаковка и склад».</p>', 'index', 'show', 'ru', '2015-12-04 00:00:00'),
(2, '<h2>Контактная информация</h2>\r\n<div><big>РЕКВИЗИТЫ И АДРЕС НАШЕЙ ОРГАНИЗАЦИИ</big></div>\r\n<br>', '<p>Почтовый адрес: Республика Беларусь,  220002, г.Минск,  ул.Кропоткина, 44</p>\r\n<br>\r\n<br>\r\n<br>\r\n<div align="center"><big>Телефоны ответственных лиц</big></div>\r\n<br>\r\n<ul>\r\n		<li>Иванов Иван Иванович - экономист, тел. 123-45-67</li>\r\n		<br>\r\n		<li>Петров Петр Петрович - программист, тел. 765-43-21</li>\r\n</ul>\r\n<br>', 'contact', 'show', 'ru', '2015-12-04 00:00:00'),
(4, '<h2>Республика Беларусь</h2>\r\n<hr>\r\n<div>Сельское хозяйство</div>\r\n<hr>', '<p>Сельское хозяйство — исторически важная отрасль местной экономики, давая более 7 % национального ВВП, обеспечивает занятость более 9 % населения.\r\n\r\nОсновной сельскохозяйственной отраслью является земледелие и молочное животноводство.\r\n\r\nОсновные пищевые культуры: картофель (6,9 млн т), сахарная свёкла (4,8 млн т), пшеница (2,5 млн т).\r\n\r\nВ прошлом традиционная для республики лесная отрасль играет незначительную роль во внешней торговле - вывезено лесопродукции и услуг в 2013 году на 144,8 млн долларов (0,39 % экспорта страны).\r\n\r\nВ республике на 1 января 2010 года было 8,8 млн га сельскохозяйственных угодий, в том числе 5,5 млн га пашни (ее балл плодородия - 31,2).</p>', 'respbel', 'show', 'ru', '2015-12-21 00:00:00'),
(5, '<h2>Российская Федерация</h2>\r\n<hr>\r\n<div>Сельское хозяйство</div>\r\n<hr>', '<p>Объём валовой добавленной стоимости в сельском хозяйстве, охоте и лесном хозяйстве России — 1,53 трлн руб (2009 г.). По данным Росстата, в 2007 году общий валовой продукт сельского хозяйства России составил 2099,6 млрд руб., из которых на растениеводство (земледелие) приходилось 1174,9 млрд руб. (55,96 %), а на животноводство — 924,7 млрд руб. (44,04 %). По категориям производителей больше всего продукции дали личные подсобные хозяйства (48,75 % или на сумму 1023,6 млрд руб.); на втором месте—с/х организации (колхозы, совхозы и т. д.), давшие 43,76 % или 918,7 млрд руб.; меньше всего произвели фермерские хозяйства — 7,49 % или на сумму 157,3 млрд руб.\r\n\r\nС 1999 по 2008 год индекс производства продукции сельского хозяйства России вырос на 55 %.\r\n\r\nВ России находится 10 % всех пахотных земель мира. Свыше 4/5 пашни в России приходится на Центральное Поволжье, Северный Кавказ, Урал и Западную Сибирь. Основные сельскохозяйственные культуры: зерновые, сахарная свёкла, подсолнечник, картофель, лён. В 2008 году в России было собрано 108 млн тонн зерновых культур, это крупнейший урожай с 1990 года. В 2008 году в России было произведено 29,1 млн тонн сахарной свёклы, 28,9 млн тонн картофеля, 13,0 млн тонн овощей, 7,3 млн тонн подсолнечника.\r\n\r\nВ 2011 году в России был собран рекордный урожай сахарной свёклы (46,2 млн тонн), благодаря которому страна перешла к экспорту свекловичного сахара в значительных объёмах (более 200 тысяч тонн за год). Были также собраны рекордные урожаи рапса (1,1 млн тонн), сои (1,6 млн тонн), подсолнечника (9,6 млн тонн). Урожай картофеля превысил 32 млн тонн, урожай зерновых — 93 млн тонн (в чистом весе), овощей — 14 млн тонн, гречихи — 800 тыс. тонн. По итогам года Россия стала третьей в мире страной по объёму экспорта пшеницы. Круг потребителей российской пшеницы увеличился до 84 стран Европы, Азии, Африки и Южной Америки.\r\n\r\nВ России развито мясо-молочное и мясо-шёрстное животноводство. В 2000—2008 годах в России наблюдался постоянный рост ежегодных объёмов производства мяса. В 2008 году его было произведено 2,9 млн тонн, что в 2,6 раза больше показателя 1999 года. С 2002 по 2008 годы производство курятины в России утроилось, достигнув 2 млн тонн в год.</p>', 'rosfeder', 'show', 'ru', '2015-12-09 00:00:00'),
(6, '<h2>Казахстан</h2>\r\n<hr>\r\n<div>Сельское хозяйство</div>', '<p>Посевы зерновых, в том числе твёрдых сортов пшеницы. Выращиваются также кормовые и технические культуры: подсолнечник, хлопчатник, лён-кудряш. Существует также плодоводство, бахчеводство, коноплеводство.</p>\r\n<br>\r\n<p>Животноводство представлено мясошерстяным овцеводством, мясным и мясомолочным скотоводством. Разводят также верблюдов и лошадей.</p>', 'kazah', 'show', 'ru', '2015-12-17 00:00:00'),
(7, '<h2>Украина</h2>\r\n<div>Сельское хозяйство</div>', '<p>После распада СССР в сельском хозяйстве наступил системный кризис, который негативно отразился на производственных показателях отрасли. К середине 2000-х годов показатели растениеводства по основным видам продукции вышли на уровень 1990-го года или даже превзошли его. В то же время животноводческая отрасль до сих пор не смогла восстановить прежние объёмы.\r\n<br>\r\n<br>Показатели сельского хозяйства в 2011-м году по данным Госкомстата:\r\n<br>\r\n<br>Растениеводство:\r\n<br>\r\n<br>производство зерна — ▲ 56,7 млн тонн (51 млн тонн в 1990-м году)\r\n<br>производство сахарной свеклы — ▼ 18,7 млн тонн (44,2 млн тонн в 1990 г.)\r\n<br>производство подсолнечника — ▲ 8,6 млн тонн (2,5 млн тонн в 1990 г.)\r\n<br>производство картофеля — ▲ 24,2 млн тонн (16,7 млн тонн в 1990 г.)\r\n<br>производство овощей — ▲ 9,8 млн тонн (6,6 млн тонн в 1990 г.)\r\n<br>\r\n<br>Животноводство:\r\n<br>\r\n<br>производство мяса (в живом весе) — ▼ 2,1 млн тонн (4,3 млн тонн в 1990 г.)\r\n<br>производство молока — ▼ 11 млн тонн (24,5 млн тонн в 1990 г.)\r\n<br>производство яиц — ▲ 18,6 млрд шт (16,2 млрд шт в 1990 г.)\r\n<br>производство овечьей шерсти — ▼ 3,8 тыс. тонн (29,8 тыс. тонн в 1990 г)</p>', 'ykraina', 'show', 'ru', '2015-12-08 00:00:00'),
(8, '<h2>Польша</h2>\r\n<div>Сельское хозяйство</div>', '<p>В Польше высокоразвитое сельское хозяйство. В сельском хозяйстве преобладает растениеводство. Главные зерновые культуры — рожь, пшеница, ячмень, овёс.\r\n<br>\r\n<br>Польша — крупный производитель сахарной свёклы (свыше 14 млн тонн в год), картофеля, капусты. Важное значение имеет экспорт яблок, клубники, малины, смородины, чеснока, лука.\r\n<br>\r\n<br>Ведущая отрасль животноводства — свиноводство; молочно-мясное скотоводство, птицеводство (Польша — один из крупнейших в Европе поставщиков яиц); пчеловодство. Морское рыболовство и оленеводство (маралы и благородные олени в Люблинском воеводстве).</p>', 'polsha', 'show', 'ru', '2015-12-10 00:00:00'),
(9, '<h2>Литва</h2>\r\n<div>Сельское хозяйство</div>', '<p>По данным на конец 2010 г. сельское хозяйство составляет около 6 % ВВП страны. В этой отрасли занято 8 % активного населения. Из общей площади земельного фонда 61 % составляют сельскохозяйственные угодья. Объем прямых накопленных иностранных инвестиций в сельское хозяйство Литвы по состоянию на октябрь 2010 г. составил 89 600 000 € (0,9 % всех прямых накопленных иностранных инвестиций в экономику Литвы). В 2010 г. общая стоимость продукции сельского хозяйства Литвы составила 1,79 млрд евро и по сравнению с 2009 г. увеличилась на 8 %.\r\n<br>\r\n<br>Основным импортёром литовской сельхозпродукции является Россия, которая импортирует из Литвы сыр, творог, живых свиней.</p>', 'litva', 'show', 'ru', '2015-12-08 00:00:00'),
(10, '<h2>Закупочные цены</h2>', '<p>Закупочные цены  - цены, по которым сельскохозяйственные производители реализуют сельскохозяйственную продукцию крупными объемами государству и предприятиям.</p>', 'zakyp', 'show', 'ru', '2015-12-01 00:00:00'),
(11, '<h2>Оптовые цены</h2>', '<p>Оптовые цены  - цены, по которым промышленные предприятия или их посредники реализуют свою продукцию в больших объемах (оптом), не прибегая к услугам торговых розничных организаций.</p>', 'optov', 'show', 'ru', '2015-12-05 00:00:00'),
(12, '<h2>Розничные цены</h2>', '<p>Розничные цены  — цены, по которым товары реализуются конечному потребителю — населению, так как данные товары являются в основном продукцией потребительского назначения.</p>', 'rozn', 'show', 'ru', '2015-12-08 00:00:00'),
(13, '<h2>Спасибо</h2>', '', 'thankyoupage', 'show', 'ru', '2015-12-04 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;