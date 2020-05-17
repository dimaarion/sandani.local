-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 17 2020 г., 06:31
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
-- Структура таблицы `store`
--

CREATE TABLE `store` (
  `id` int(11) NOT NULL,
  `menu` json NOT NULL,
  `articles` json NOT NULL,
  `connect_panel` json NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `store`
--

INSERT INTO `store` (`id`, `menu`, `articles`, `connect_panel`) VALUES
(1, '[{\"id\": 1, \"cild\": [], \"alias\": \"/\", \"names\": \"Главная\"}, {\"id\": 2, \"cild\": [{\"id\": 1, \"cild\": [{\"id\": 1, \"cild\": [], \"alias\": \"greenEvolution_76.html\", \"names\": \"greenEvolution 76\"}], \"alias\": \"GreenEvolution.html\", \"names\": \"Система GreenEvolution\"}, {\"id\": 2, \"cild\": [{\"id\": 1, \"cild\": [], \"alias\": \"bluEvolution_82.html\", \"names\": \"bluEvolution 82\"}, {\"id\": 2, \"cild\": [], \"alias\": \"bluEvolution_73.html\", \"names\": \"bluEvolution 73\"}, {\"id\": 3, \"cild\": [], \"alias\": \"bluEvolution_92.html\", \"names\": \"bluEvolution 92\"}], \"alias\": \"bluEvolution.html\", \"names\": \"Система bluEvolution\"}, {\"id\": 3, \"cild\": [{\"id\": 1, \"cild\": [], \"alias\": \"Salamander_Streamline.html\", \"names\": \"Salamander Streamline\"}, {\"id\": 2, \"cild\": [], \"alias\": \"Salamander_3D.html\", \"names\": \"Salamander 3D\"}], \"alias\": \"drugie_okna.html\", \"names\": \"Другие окна\"}], \"alias\": \"window.html\", \"names\": \"Окна\"}, {\"id\": 3, \"cild\": [{\"id\": 2, \"cild\": [{\"id\": 1, \"cild\": [], \"alias\": \"bluEvolution_82.html\", \"names\": \"bluEvolution 82\"}, {\"id\": 2, \"cild\": [], \"alias\": \"bluEvolution_73.html\", \"names\": \"bluEvolution 73\"}, {\"id\": 3, \"cild\": [], \"alias\": \"bluEvolution_92.html\", \"names\": \"bluEvolution 92\"}], \"alias\": \"bluEvolution_doors.html\", \"names\": \"Система bluEvolution\"}, {\"id\": 3, \"cild\": [{\"id\": 1, \"cild\": [], \"alias\": \"Salamander_Streamline.html\", \"names\": \"Salamander Streamline\"}], \"alias\": \"drugie_ dveri.html\", \"names\": \"Другие двери\"}], \"alias\": \"doors.html\", \"names\": \"Двери\"}, {\"id\": 4, \"cild\": [], \"alias\": \"doors-avtomatic.html\", \"names\": \"Раздвижная система\"}, {\"id\": 4, \"cild\": [], \"alias\": \"clients.html\", \"names\": \"Клиентам\"}, {\"id\": 4, \"cild\": [], \"alias\": \"company.html\", \"names\": \"О фирме\"}]', '[{\"id\": 1, \"home\": [{\"id\": 1, \"img\": \"\", \"alias\": \"/\", \"names\": \"Главная\", \"title\": \"Главная\", \"content\": \"Главная\", \"keyWord\": \"Главная\", \"description\": \"Главная\"}], \"names\": \"home\", \"contact\": \"ddddddddddddddd\"}, {\"id\": 2, \"names\": \"window\", \"window\": [{\"id\": 1, \"img\": \"slidingdoors_web.jpg\", \"alias\": \"window.html\", \"names\": \"Оконные системы Salamander\", \"title\": \"Окна\", \"content\": \"\\r\\n\\r\\nСегодня окно в доме – это не только окно во внешний мир, это – типовой элемент интерьера Вашего дома: индивидуальный дизайн  окон в значительной степени определяет общий облик всего здания. Поэтому окна, как элемент фасада,  должны не просто отвечать самым высоким требованиям качества и безопасности  - сегодня заказчик уделяет большое внимание цвету, форме и функциональности.  \\r\\n\\r\\nПознакомьтесь более подробно с разработанными компанией Саламандер системами  bluEvolution и Salamander Streamline и Вы увидите, что эти профильные системы доступны практически во всех технических комбинациях и вариантах конструкций.\\r\\n    \", \"keyWord\": \"Окна\", \"description\": \"Окна\"}, {\"id\": 2, \"img\": \"grenBV.jpg\", \"alias\": \"GreenEvolution\", \"names\": \"Система GreenEvolution\", \"title\": \"GreenEvolution\", \"content\": \"Окна GreenEvolution\", \"keyWord\": \"GreenEvolution\", \"description\": \"GreenEvolution\", \"GreenEvolution\": [{\"id\": 1, \"img\": \"\", \"alias\": \"greenEvolution_76\", \"names\": \"greenEvolution 76\", \"title\": \"greenEvolution 76\", \"content\": \"Окна greenEvolution 76\", \"keyWord\": \"greenEvolution 76\", \"description\": \"greenEvolution 76\"}]}, {\"id\": 3, \"img\": \"salamander_bluevolution_92.jpg\", \"alias\": \"bluEvolution\", \"names\": \"Система bluEvolution\", \"title\": \"Система bluEvolution\", \"content\": \"Окна bluEvolution\", \"keyWord\": \"bluEvolution\", \"description\": \"bluEvolution\", \"bluEvolution\": [{\"id\": 1, \"img\": \"\", \"alias\": \"bluEvolution_82\", \"names\": \"bluEvolution 82\", \"title\": \"bluEvolution 82\", \"content\": \"Окна bluEvolution 82\", \"keyWord\": \"bluEvolution 82\", \"description\": \"bluEvolution 82\"}, {\"id\": 2, \"img\": \"\", \"alias\": \"bluEvolution_73\", \"names\": \"bluEvolution 73\", \"title\": \"bluEvolution 73\", \"content\": \"Окна bluEvolution 73\", \"keyWord\": \"bluEvolution 73\", \"description\": \"bluEvolution 73\"}, {\"id\": 3, \"img\": \"\", \"alias\": \"bluEvolution_92\", \"names\": \"bluEvolution 92\", \"title\": \"bluEvolution 92\", \"content\": \"Окна bluEvolution 92\", \"keyWord\": \"bluEvolution 92\", \"description\": \"bluEvolution 92\"}]}, {\"id\": 4, \"img\": \"news2.jpg\", \"alias\": \"drugie_okna\", \"names\": \"Окна других производителей\", \"title\": \"Другие окна\", \"content\": \"Окна Другие окна\", \"keyWord\": \"Другие окна\", \"description\": \"Другие окна\", \"drugie_okna\": [{\"id\": 1, \"img\": \"\", \"alias\": \"Salamander_Streamline\", \"names\": \"Salamander Streamline\", \"title\": \"Salamander Streamline\", \"content\": \"Salamander Streamline\", \"keyWord\": \"Salamander Streamline\", \"description\": \"Salamander Streamline\"}, {\"id\": 2, \"img\": \"\", \"alias\": \"Salamander_3D.html\", \"names\": \"Salamander 3D\", \"title\": \"Salamander 3D\", \"content\": \"Salamander 3D\", \"keyWord\": \"Salamander 3D\", \"description\": \"Salamander 3D\"}]}]}, {\"id\": 3, \"doors\": [{\"id\": 1, \"img\": \"doors-home.jpg\", \"alias\": \"doors.html\", \"names\": \"Автоматические дверные системы\", \"title\": \"Двери\", \"content\": \"\\r\\n\\r\\nДверь всегда создает для нас атмосферу безопасности и защищенности.  Потому что расслабиться и ощущать себя комфортно можно только, если Вы чувствуете себя защищенным. Поэтому для компании Саламандер очень важно претворить в жизнь все Ваши ожидания в отношении индивидуального дизайна, удобства в уходе, а также высочайшего уровня качества и безопасности.  Вот почему, надежность – обязательное условие для  всех дверных систем Саламандер!\\r\\n\\r\\nПознакомьтесь с разработанными компанией Саламандер дверными системами  bluEvolution Salamander, а также с раздвижными дверными системами и Вы убедитесь: эти профильные системы доступны практически во всех технических решениях и вариантах дизайна.\\r\\n\", \"keyWord\": \"Двери\", \"description\": \"Двери\"}, {\"id\": 2, \"img\": \"ECdrive_Zentrum.jpg\", \"alias\": \"bluEvolution_doors.html\", \"names\": \"Система bluEvolution\", \"title\": \"Система bluEvolution\", \"content\": \"\\r\\n\\r\\nДверь всегда создает для нас атмосферу безопасности и защищенности. Потому что расслабиться и ощущать себя комфортно можно только, если Вы чувствуете себя защищенным. Поэтому для компании Саламандер очень важно претворить в жизнь все Ваши ожидания в отношении индивидуального дизайна, удобства в уходе, а также высочайшего уровня качества и безопасности.  Вот почему, надежность – обязательное условие для  всех дверных систем Саламандер!\\r\\n\\r\\nПознакомьтесь с разработанными компанией Саламандер дверными системами  bluEvolution Salamander, а также с раздвижными дверными системами и Вы убедитесь: эти профильные системы доступны практически во всех технических решениях и вариантах дизайна.\\r\\n\", \"keyWord\": \"bluEvolution\", \"description\": \"bluEvolution\"}], \"names\": \"doors\"}, {\"id\": 4, \"names\": \"clients\", \"clients\": [{\"id\": 1, \"img\": \"clients.jpg\", \"alias\": \"clients.html\", \"names\": \"Клиентам\", \"title\": \"Клиентам\", \"content\": \"Саламандер – специалист в области  инновационных высококачественных профильных систем и надежный партнер для производителей окон и дверей.  Высокое качество, широкий ассортимент продукции, компетентный сервис и сопровождение поставок позволяютудовлетворить самые требовательные запросы клиентов.Откройте для себя наши возможности и получите выгоду!\", \"keyWord\": \"Клиентам\", \"description\": \"Клиентам\"}]}, {\"id\": 5, \"names\": \"company\", \"company\": [{\"id\": 1, \"img\": \"company.jpg\", \"alias\": \"company.html\", \"names\": \"О фмрме\", \"title\": \"О фмрме\", \"content\": \"О фмрме\", \"keyWord\": \"О фмрме\", \"description\": \"О фмрме\"}]}]', '[{\"id\": 1, \"img\": \"calculator.png\", \"alias\": \"calculator.html\", \"names\": \"Калькулятор расчета окон\"}, {\"id\": 2, \"img\": \"email.png\", \"alias\": \"email.html\", \"names\": \"Отправка почты\"}, {\"id\": 3, \"img\": \"android_mobile_phone.png\", \"alias\": \"phone.html\", \"names\": \"0 (552) 2-46-49, 0(777)2-94-10\"}]');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `store`
--
ALTER TABLE `store`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
