-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 21 2020 г., 06:51
-- Версия сервера: 8.0.15
-- Версия PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `sandani`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `art_id` int(11) NOT NULL,
  `art_img` varchar(255) NOT NULL,
  `art_name` varchar(255) NOT NULL,
  `art_title` varchar(255) NOT NULL,
  `art_alias` varchar(255) NOT NULL,
  `art_keyword` varchar(255) NOT NULL,
  `art_descript` varchar(255) NOT NULL,
  `art_subcontent` text NOT NULL,
  `art_content` text NOT NULL,
  `params` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`art_id`, `art_img`, `art_name`, `art_title`, `art_alias`, `art_keyword`, `art_descript`, `art_subcontent`, `art_content`, `params`) VALUES
(1, 'grenBV.jpg', 'Оконные системы Salamander', 'Оконные системы Salamander', 'window.html', 'Оконные системы Salamander', 'Оконные системы Salamander', 'Сегодня окно в доме – это не только окно во внешний мир, это – типовой элемент интерьера Вашего дома: индивидуальный дизайн  окон в значительной степени определяет общий облик всего здания. Поэтому окна, как элемент фасада,  должны не просто отвечать самым высоким требованиям качества и безопасности  - сегодня заказчик уделяет большое внимание цвету, форме и функциональности.  ', '\r\n\r\nСегодня окно в доме – это не только окно во внешний мир, это – типовой элемент интерьера Вашего дома: индивидуальный дизайн  окон в значительной степени определяет общий облик всего здания. Поэтому окна, как элемент фасада,  должны не просто отвечать самым высоким требованиям качества и безопасности  - сегодня заказчик уделяет большое внимание цвету, форме и функциональности.  \r\n\r\nПознакомьтесь более подробно с разработанными компанией Саламандер системами  bluEvolution и Salamander Streamline и Вы увидите, что эти профильные системы доступны практически во всех технических комбинациях и вариантах конструкций.\r\n', 1),
(2, 'salamander_bluevolution_92.jpg', 'Система bluEvolution', 'Система bluEvolution', 'bluEvolution.html', 'Система bluEvolution', 'Система bluEvolution', 'Система bluEvolution', 'Система bluEvolution', 0),
(3, 'news2.jpg', 'Система GreenEvolution', 'Система GreenEvolution', 'GreenEvolution.html', 'Система GreenEvolution', 'Система GreenEvolution', 'Система GreenEvolution', 'Система GreenEvolution', 0),
(4, 'grenBV.jpg', 'Окна других производителей', 'Окна других производителей', 'drugieokna.html', 'Окна других производителей', 'Окна других производителей', 'Окна других производителей', 'Окна других производителей', 0),
(5, 'ECdrive_Zentrum.jpg', 'Двери Salamander', 'Двери Salamander', 'doors.html', 'Двери Salamander', 'Двери Salamander', 'Двери Salamander', 'Двери Salamander', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `contact_panel`
--

CREATE TABLE `contact_panel` (
  `id` int(11) NOT NULL,
  `names` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `contact_panel`
--

INSERT INTO `contact_panel` (`id`, `names`, `img`, `alias`) VALUES
(1, 'Калькулятор расчета окон', 'calculator.png', 'calculator.html'),
(2, 'Отправка почты', 'email.png', 'Отправка почты'),
(3, '0 (552) 2-46-49, 0(777)2-94-10', 'android_mobile_phone.png', '0 (552) 2-46-49, 0(777)2-94-10');

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `menu_name` varchar(255) NOT NULL,
  `menu_alias` varchar(255) NOT NULL,
  `menu_title` varchar(255) NOT NULL,
  `menu_keyword` varchar(255) NOT NULL,
  `menu_descript` varchar(255) NOT NULL,
  `menu_content` text NOT NULL,
  `menu_img` varchar(255) NOT NULL,
  `parent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_name`, `menu_alias`, `menu_title`, `menu_keyword`, `menu_descript`, `menu_content`, `menu_img`, `parent`) VALUES
(1, 'Главная', '/', 'Главная', 'Главная', 'Главная', 'Главная', '', 0),
(2, 'Окна', 'window.html', 'Окна', 'Окна', 'Окна', 'Сегодня окно в доме – это не только окно во внешний мир, это – типовой элемент интерьера Вашего дома: индивидуальный дизайн  окон в значительной степени определяет общий облик всего здания. Поэтому окна, как элемент фасада,  должны не просто отвечать самым высоким требованиям качества и безопасности  - сегодня заказчик уделяет большое внимание цвету, форме и функциональности.  \\r\\n\\r\\nПознакомьтесь более подробно с разработанными компанией Саламандер системами  bluEvolution и Salamander Streamline и Вы увидите, что эти профильные системы доступны практически во всех технических комбинациях и вариантах конструкций.\\r\\n    \",\r\n                ', 'slidingdoors_web.jpg', 0),
(3, 'Двери', 'doors.html', 'Двери', 'Двери', 'Двери', 'Двери', 'doors-home.jpg', 0),
(4, 'Автоматические дверные системы', 'doorsavtomatic.html', 'Автоматические дверные системы', 'Автоматические дверные системы', 'Автоматические дверные системы', 'Саламандер – специалист в области  инновационных высококачественных профильных систем и надежный партнер для производителей окон и дверей.  Высокое качество, широкий ассортимент продукции, компетентный сервис и сопровождение поставок позволяютудовлетворить самые требовательные запросы клиентов.Откройте для себя наши возможности и получите выгоду!\",\r\n                ', 'clients.jpg', 0),
(5, 'Клиентам', 'clients.html', 'Клиентам', 'Клиентам', 'Клиентам', 'Саламандер – специалист в области  инновационных высококачественных профильных систем и надежный партнер для производителей окон и дверей.  Высокое качество, широкий ассортимент продукции, компетентный сервис и сопровождение поставок позволяютудовлетворить самые требовательные запросы клиентов.Откройте для себя наши возможности и получите выгоду!\",\r\n                ', 'clients.jpg', 0),
(6, 'О фмрме', 'company.html', 'О фмрме', 'О фмрме', 'О фмрме', 'О фмрме', 'company.jpg', 0),
(7, 'Система GreenEvolution', 'GreenEvolution.html', 'Система GreenEvolution', 'Система GreenEvolution', 'Система GreenEvolution', 'greenEvolution — больше, чем система профилей. Эта совместимая и гибкая платформа предлагает множество вариантов для индивидуальных решений. Товары массового производства остались в прошлом: сегодня на смену пришла индивидуальность. Наша совместимая платформа предлагает на выбор шесть различных ассортиментных групп при сохранении полной гибкости. Будь то AD или MD, оба варианта изоляции можно встраивать в одну и ту же систему профилей. greenEvolution подкупает своими инновационными технологиями и оптимальными показателями изоляции. Однако впечатляют не только внутренние параметры: разнообразные возможности дизайна и выбора материала создают визуальные эффекты, и здесь не последнюю роль играют поверхности из натурального материала.\r\n                ', 'grenBV.jpg', 2),
(8, 'Система bluEvolution', 'bluEvolution.html', 'Система bluEvolution', 'Система bluEvolution', 'Система bluEvolution', 'Система bluEvolution', 'salamander_bluevolution_92.jpg', 2),
(9, 'Окна других производителей', 'drugieokna.html', 'Окна других производителей', 'Окна других производителей', 'Окна других производителей', 'Окна других производителей', 'news2.jpg', 2),
(10, 'greenEvolution 76', 'greenEvolution76.html', 'greenEvolution 76', 'greenEvolution 76', 'greenEvolution 76', 'greenEvolution 76', 'grenBV.jpg', 7),
(11, 'bluEvolution 82', 'bluEvolution82.html', 'bluEvolution 82', 'bluEvolution 82', 'bluEvolution 82', 'bluEvolution 82', 'bluEvolution82.jpg', 8),
(12, 'bluEvolution 73', 'bluEvolution73.html', 'bluEvolution 73', 'bluEvolution 73', 'bluEvolution 73', 'bluEvolution 73', 'bluEvolution73.jpg', 8),
(13, 'bluEvolution 92', 'bluEvolution92.html', 'bluEvolution 92', 'bluEvolution 92', 'bluEvolution 92', 'bluEvolution 92', 'BluEvolution92.png', 8),
(14, 'Salamander Streamline', 'streamline.html', 'Salamander Streamline', 'Salamander Streamline', 'Salamander Streamline', 'Salamander Streamline', 'streamline.jpg', 9),
(15, 'Salamander 3D', 'Salamander3D.html', 'Salamander 3D', 'Salamander 3D', 'Salamander 3D', 'Salamander 3D', 'advantages.jpg', 9),
(16, 'Система bluEvolution', 'bluEvolutiondoors.html', 'Система bluEvolution', 'Система bluEvolution', 'Система bluEvolution', 'Дверь всегда создает для нас атмосферу безопасности и защищенности. Потому что расслабиться и ощущать себя комфортно можно только, если Вы чувствуете себя защищенным. Поэтому для компании Саламандер очень важно претворить в жизнь все Ваши ожидания в отношении индивидуального дизайна, удобства в уходе, а также высочайшего уровня качества и безопасности.  Вот почему, надежность – обязательное условие для  всех дверных систем Саламандер!\\r\\n\\r\\nПознакомьтесь с разработанными компанией Саламандер дверными системами  bluEvolution Salamander, а также с раздвижными дверными системами и Вы убедитесь: эти профильные системы доступны практически во всех технических решениях и вариантах дизайна.\\r\\n\",\r\n                        ', 'ECdrive_Zentrum.jpg', 3),
(17, 'Автоматические дверные системы', 'doorsavtomatic.html', 'Автоматические дверные системы', 'Автоматические дверные системы', 'Автоматические дверные системы', 'Автоматические дверные системы', 'clients.jpg', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `menu_articles`
--

CREATE TABLE `menu_articles` (
  `menu_art_id` int(11) NOT NULL,
  `menu` int(11) NOT NULL,
  `articles` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `menu_articles`
--

INSERT INTO `menu_articles` (`menu_art_id`, `menu`, `articles`) VALUES
(1, 1, 1),
(4, 1, 2),
(5, 1, 3),
(6, 1, 4),
(7, 2, 1),
(8, 3, 5),
(9, 1, 5),
(10, 7, 3),
(11, 8, 2),
(12, 9, 4),
(13, 2, 2),
(14, 2, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `store`
--

CREATE TABLE `store` (
  `id` int(11) NOT NULL,
  `menu` json NOT NULL,
  `articles` json NOT NULL,
  `connect_panel` json NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `store`
--

INSERT INTO `store` (`id`, `menu`, `articles`, `connect_panel`) VALUES
(1, '[{\"id\": 1, \"cild\": [], \"alias\": \"/\", \"names\": \"Главная\"}, {\"id\": 2, \"cild\": [{\"id\": 1, \"cild\": [{\"id\": 1, \"cild\": [], \"alias\": \"greenEvolution_76.html\", \"names\": \"greenEvolution 76\"}], \"alias\": \"GreenEvolution.html\", \"names\": \"Система GreenEvolution\"}, {\"id\": 2, \"cild\": [{\"id\": 1, \"cild\": [], \"alias\": \"bluEvolution_82.html\", \"names\": \"bluEvolution 82\"}, {\"id\": 2, \"cild\": [], \"alias\": \"bluEvolution_73.html\", \"names\": \"bluEvolution 73\"}, {\"id\": 3, \"cild\": [], \"alias\": \"bluEvolution_92.html\", \"names\": \"bluEvolution 92\"}], \"alias\": \"bluEvolution.html\", \"names\": \"Система bluEvolution\"}, {\"id\": 3, \"cild\": [{\"id\": 1, \"cild\": [], \"alias\": \"Salamander_Streamline.html\", \"names\": \"Salamander Streamline\"}, {\"id\": 2, \"cild\": [], \"alias\": \"Salamander_3D.html\", \"names\": \"Salamander 3D\"}], \"alias\": \"drugie_okna.html\", \"names\": \"Другие окна\"}], \"alias\": \"window.html\", \"names\": \"Окна\"}, {\"id\": 3, \"cild\": [{\"id\": 2, \"cild\": [{\"id\": 1, \"cild\": [], \"alias\": \"bluEvolution_82.html\", \"names\": \"bluEvolution 82\"}, {\"id\": 2, \"cild\": [], \"alias\": \"bluEvolution_73.html\", \"names\": \"bluEvolution 73\"}, {\"id\": 3, \"cild\": [], \"alias\": \"bluEvolution_92.html\", \"names\": \"bluEvolution 92\"}], \"alias\": \"bluEvolution_doors.html\", \"names\": \"Система bluEvolution\"}, {\"id\": 3, \"cild\": [{\"id\": 1, \"cild\": [], \"alias\": \"Salamander_Streamline.html\", \"names\": \"Salamander Streamline\"}], \"alias\": \"drugie_ dveri.html\", \"names\": \"Другие двери\"}], \"alias\": \"doors.html\", \"names\": \"Двери\"}, {\"id\": 4, \"cild\": [], \"alias\": \"doors-avtomatic.html\", \"names\": \"Раздвижная система\"}, {\"id\": 4, \"cild\": [], \"alias\": \"clients.html\", \"names\": \"Клиентам\"}, {\"id\": 4, \"cild\": [], \"alias\": \"company.html\", \"names\": \"О фирме\"}]', '[{\"id\": 1, \"home\": [{\"id\": 1, \"img\": \"\", \"alias\": \"/\", \"names\": \"Главная\", \"title\": \"Главная\", \"content\": \"Главная\", \"keyWord\": \"Главная\", \"description\": \"Главная\"}], \"names\": \"home\", \"contact\": \"ddddddddddddddd\"}, {\"id\": 2, \"names\": \"window\", \"window\": [{\"id\": 1, \"img\": \"slidingdoors_web.jpg\", \"alias\": \"window.html\", \"names\": \"Оконные системы Salamander\", \"title\": \"Окна\", \"content\": \"\\r\\n\\r\\nСегодня окно в доме – это не только окно во внешний мир, это – типовой элемент интерьера Вашего дома: индивидуальный дизайн  окон в значительной степени определяет общий облик всего здания. Поэтому окна, как элемент фасада,  должны не просто отвечать самым высоким требованиям качества и безопасности  - сегодня заказчик уделяет большое внимание цвету, форме и функциональности.  \\r\\n\\r\\nПознакомьтесь более подробно с разработанными компанией Саламандер системами  bluEvolution и Salamander Streamline и Вы увидите, что эти профильные системы доступны практически во всех технических комбинациях и вариантах конструкций.\\r\\n    \", \"keyWord\": \"Окна\", \"description\": \"Окна\"}, {\"id\": 2, \"img\": \"grenBV.jpg\", \"alias\": \"GreenEvolution\", \"names\": \"Система GreenEvolution\", \"title\": \"GreenEvolution\", \"content\": \"Окна GreenEvolution\", \"keyWord\": \"GreenEvolution\", \"description\": \"GreenEvolution\", \"GreenEvolution\": [{\"id\": 1, \"img\": \"\", \"alias\": \"greenEvolution_76\", \"names\": \"greenEvolution 76\", \"title\": \"greenEvolution 76\", \"content\": \"Окна greenEvolution 76\", \"keyWord\": \"greenEvolution 76\", \"description\": \"greenEvolution 76\"}]}, {\"id\": 3, \"img\": \"salamander_bluevolution_92.jpg\", \"alias\": \"bluEvolution\", \"names\": \"Система bluEvolution\", \"title\": \"Система bluEvolution\", \"content\": \"Окна bluEvolution\", \"keyWord\": \"bluEvolution\", \"description\": \"bluEvolution\", \"bluEvolution\": [{\"id\": 1, \"img\": \"\", \"alias\": \"bluEvolution_82\", \"names\": \"bluEvolution 82\", \"title\": \"bluEvolution 82\", \"content\": \"Окна bluEvolution 82\", \"keyWord\": \"bluEvolution 82\", \"description\": \"bluEvolution 82\"}, {\"id\": 2, \"img\": \"\", \"alias\": \"bluEvolution_73\", \"names\": \"bluEvolution 73\", \"title\": \"bluEvolution 73\", \"content\": \"Окна bluEvolution 73\", \"keyWord\": \"bluEvolution 73\", \"description\": \"bluEvolution 73\"}, {\"id\": 3, \"img\": \"\", \"alias\": \"bluEvolution_92\", \"names\": \"bluEvolution 92\", \"title\": \"bluEvolution 92\", \"content\": \"Окна bluEvolution 92\", \"keyWord\": \"bluEvolution 92\", \"description\": \"bluEvolution 92\"}]}, {\"id\": 4, \"img\": \"news2.jpg\", \"alias\": \"drugie_okna\", \"names\": \"Окна других производителей\", \"title\": \"Другие окна\", \"content\": \"Окна Другие окна\", \"keyWord\": \"Другие окна\", \"description\": \"Другие окна\", \"drugie_okna\": [{\"id\": 1, \"img\": \"\", \"alias\": \"Salamander_Streamline\", \"names\": \"Salamander Streamline\", \"title\": \"Salamander Streamline\", \"content\": \"Salamander Streamline\", \"keyWord\": \"Salamander Streamline\", \"description\": \"Salamander Streamline\"}, {\"id\": 2, \"img\": \"\", \"alias\": \"Salamander_3D.html\", \"names\": \"Salamander 3D\", \"title\": \"Salamander 3D\", \"content\": \"Salamander 3D\", \"keyWord\": \"Salamander 3D\", \"description\": \"Salamander 3D\"}]}]}, {\"id\": 3, \"doors\": [{\"id\": 1, \"img\": \"doors-home.jpg\", \"alias\": \"doors.html\", \"names\": \"Автоматические дверные системы\", \"title\": \"Двери\", \"content\": \"\\r\\n\\r\\nДверь всегда создает для нас атмосферу безопасности и защищенности.  Потому что расслабиться и ощущать себя комфортно можно только, если Вы чувствуете себя защищенным. Поэтому для компании Саламандер очень важно претворить в жизнь все Ваши ожидания в отношении индивидуального дизайна, удобства в уходе, а также высочайшего уровня качества и безопасности.  Вот почему, надежность – обязательное условие для  всех дверных систем Саламандер!\\r\\n\\r\\nПознакомьтесь с разработанными компанией Саламандер дверными системами  bluEvolution Salamander, а также с раздвижными дверными системами и Вы убедитесь: эти профильные системы доступны практически во всех технических решениях и вариантах дизайна.\\r\\n\", \"keyWord\": \"Двери\", \"description\": \"Двери\"}, {\"id\": 2, \"img\": \"ECdrive_Zentrum.jpg\", \"alias\": \"bluEvolution_doors.html\", \"names\": \"Система bluEvolution\", \"title\": \"Система bluEvolution\", \"content\": \"\\r\\n\\r\\nДверь всегда создает для нас атмосферу безопасности и защищенности. Потому что расслабиться и ощущать себя комфортно можно только, если Вы чувствуете себя защищенным. Поэтому для компании Саламандер очень важно претворить в жизнь все Ваши ожидания в отношении индивидуального дизайна, удобства в уходе, а также высочайшего уровня качества и безопасности.  Вот почему, надежность – обязательное условие для  всех дверных систем Саламандер!\\r\\n\\r\\nПознакомьтесь с разработанными компанией Саламандер дверными системами  bluEvolution Salamander, а также с раздвижными дверными системами и Вы убедитесь: эти профильные системы доступны практически во всех технических решениях и вариантах дизайна.\\r\\n\", \"keyWord\": \"bluEvolution\", \"description\": \"bluEvolution\"}], \"names\": \"doors\"}, {\"id\": 4, \"names\": \"clients\", \"clients\": [{\"id\": 1, \"img\": \"clients.jpg\", \"alias\": \"clients.html\", \"names\": \"Клиентам\", \"title\": \"Клиентам\", \"content\": \"Саламандер – специалист в области  инновационных высококачественных профильных систем и надежный партнер для производителей окон и дверей.  Высокое качество, широкий ассортимент продукции, компетентный сервис и сопровождение поставок позволяютудовлетворить самые требовательные запросы клиентов.Откройте для себя наши возможности и получите выгоду!\", \"keyWord\": \"Клиентам\", \"description\": \"Клиентам\"}]}, {\"id\": 5, \"names\": \"company\", \"company\": [{\"id\": 1, \"img\": \"company.jpg\", \"alias\": \"company.html\", \"names\": \"О фмрме\", \"title\": \"О фмрме\", \"content\": \"О фмрме\", \"keyWord\": \"О фмрме\", \"description\": \"О фмрме\"}]}]', '[{\"id\": 1, \"img\": \"calculator.png\", \"alias\": \"calculator.html\", \"names\": \"Калькулятор расчета окон\"}, {\"id\": 2, \"img\": \"email.png\", \"alias\": \"email.html\", \"names\": \"Отправка почты\"}, {\"id\": 3, \"img\": \"android_mobile_phone.png\", \"alias\": \"phone.html\", \"names\": \"0 (552) 2-46-49, 0(777)2-94-10\"}]');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`art_id`);

--
-- Индексы таблицы `contact_panel`
--
ALTER TABLE `contact_panel`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Индексы таблицы `menu_articles`
--
ALTER TABLE `menu_articles`
  ADD PRIMARY KEY (`menu_art_id`);

--
-- Индексы таблицы `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `art_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `contact_panel`
--
ALTER TABLE `contact_panel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `menu_articles`
--
ALTER TABLE `menu_articles`
  MODIFY `menu_art_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `store`
--
ALTER TABLE `store`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
