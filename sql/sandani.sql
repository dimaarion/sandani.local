-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 14 2020 г., 03:30
-- Версия сервера: 5.7.25
-- Версия PHP: 7.3.9

SET SQL_MODE
= "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT
= 0;
START TRANSACTION;
SET time_zone
= "+00:00";


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

CREATE TABLE `store`
(
  `id` int
(11) NOT NULL,
  `menu` json NOT NULL,
  `articles` json NOT NULL,
  `connect_panel` json NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `store`
--

INSERT INTO `store` (`
id`,
`menu
`, `articles`, `connect_panel`) VALUES
(1, '[
{\"id\": 1, \"cild\": [], \"alias\": \"/\", \"names\": \"Главная\"}, 
{\"id\": 2, \"cild\": [{\"id\": 1, \"cild\": [{\"id\": 1, \"cild\": [],
 \"alias\": \"greenEvolution_76.html\", \"names\": \"greenEvolution 76\"}],
  \"alias\": \"GreenEvolution.html\", \"names\": \"Система GreenEvolution\"},
   {\"id\": 2, \"cild\": [{\"id\": 1, \"cild\": [], \"alias\": \"bluEvolution_82.html\",
    \"names\": \"bluEvolution 82\"}, {\"id\": 2, \"cild\": [], \"alias\": \"bluEvolution_73.html\", 
    \"names\": \"bluEvolution 73\"}, {\"id\": 3, \"cild\": [], \"alias\": \"bluEvolution_92.html\",
     \"names\": \"bluEvolution 92\"}], \"alias\": \"bluEvolution.html\", \"names\": \"Система bluEvolution\"},
      {\"id\": 3, \"cild\": [{\"id\": 1, \"cild\": [], \"alias\": \"Salamander_Streamline.html\",
       \"names\": \"Salamander Streamline\"}, {\"id\": 2, \"cild\": [], \"alias\": \"Salamander_3D.html\",
        \"names\": \"Salamander 3D\"}], \"alias\": \"drugie_okna.html\", \"names\": \"Другие окна\"}],
         \"alias\": \"window.html\", \"names\": \"Окна\"}, {\"id\": 3, \"cild\": [{\"id\": 2,
          \"cild\": [{\"id\": 1, \"cild\": [], \"alias\": \"bluEvolution_82.html\",
           \"names\": \"bluEvolution 82\"}, {\"id\": 2, \"cild\": [], \"alias\": \"bluEvolution_73.html\",
            \"names\": \"bluEvolution 73\"}, {\"id\": 3, \"cild\": [], \"alias\": \"bluEvolution_92.html\", 
            \"names\": \"bluEvolution 92\"}], \"alias\": \"bluEvolution_doors.html\", 
            \"names\": \"Система bluEvolution\"}, {\"id\": 3, \"cild\": [{\"id\": 1,
             \"cild\": [], \"alias\": \"Salamander_Streamline.html\", \"names\": \"Salamander Streamline\"}],
              \"alias\": \"drugie_ dveri.html\", \"names\": \"Другие двери\"}], \"alias\": \"doors.html\", 
              \"names\": \"Двери\"}, {\"id\": 4, \"cild\": [], \"alias\": \"doors-avtomatic.html\",
               \"names\": \"Раздвижная система\"}, {\"id\": 4, \"cild\": [], \"alias\": \"cliens.html\",
                \"names\": \"Клиентам\"}, {\"id\": 4, \"cild\": [], \"alias\": \"company.html\",
                 \"names\": \"О фирме\"}]', '[{\"home\": {\"id\": 1, \"img\": \"\", \"alias\": \"/\", 
                 \"names\": \"Главная\", \"title\": \"Главная\", \"content\": \"Главная\",
                  \"keyWord\": \"Главная\", \"description\": \"Главная\"}},
                   {\"Window\": {\"id\": 2, \"img\": \"\", \"alias\": \"window\",
                    \"names\": \"Окна\", \"title\": \"Окна\", \"content\": \"Окна\",
                     \"keyWord\": \"Окна\", \"description\": \"Окна\",
                      \"bluEvolution\": {\"id\": 2, \"img\": \"\", \"alias\": \"bluEvolution\", 
                      \"names\": \"Система bluEvolution\", \"title\": \"Система bluEvolution\", 
                      \"content\": \"Окна bluEvolution\", \"keyWord\": \"bluEvolution\", 
                      \"description\": \"bluEvolution\", \"bluEvolution_73\": {\"id\": 2,
                       \"img\": \"\", \"alias\": \"bluEvolution_73\", \"names\": \"bluEvolution 73\", 
                       \"title\": \"bluEvolution 73\", \"content\": \"Окна bluEvolution 73\",
                        \"keyWord\": \"bluEvolution 73\", \"description\": \"bluEvolution 73\"}, 
                        \"bluEvolution_82\": {\"id\": 1, \"img\": \"\", \"alias\": \"bluEvolution_82\",
                         \"names\": \"bluEvolution 82\", \"title\": \"bluEvolution 82\",
                          \"content\": \"Окна bluEvolution 82\", \"keyWord\": \"bluEvolution 82\",
                           \"description\": \"bluEvolution 82\"}, \"bluEvolution_92\": {\"id\": 3, 
                           \"img\": \"\", \"alias\": \"bluEvolution_92\", \"names\": \"bluEvolution 92\",
                            \"title\": \"bluEvolution 92\", \"content\": \"Окна bluEvolution 92\",
                             \"keyWord\": \"bluEvolution 92\", \"description\": \"bluEvolution 92\"}},
                              \"GreenEvolution\": {\"id\": 1, \"img\": \"\", \"alias\": \"GreenEvolution\",
                               \"names\": \"Система GreenEvolution\", \"title\": \"GreenEvolution\",
                                \"content\": \"Окна GreenEvolution\", \"keyWord\": \"GreenEvolution\",
                                 \"description\": \"GreenEvolution\", \"greenEvolution_76\": {\"id\": 1,
                                  \"img\": \"\", \"alias\": \"greenEvolution_76\", \"names\": \"greenEvolution 76\",
                                   \"title\": \"greenEvolution 76\", \"content\": \"Окна greenEvolution 76\",
                                    \"keyWord\": \"greenEvolution 76\", \"description\": \"greenEvolution 76\"}}}},
                                     {\"drugie_okna\": {\"id\": 3, \"img\": \"\", \"alias\": \"drugie_okna\", 
                                     \"names\": \"Другие окна\", \"title\": \"Другие окна\", \"content\": \"Окна Другие окна\", 
                                     \"keyWord\": \"Другие окна\",
                                      \"description\": \"Другие окна\",
                                       \"Salamander_3D\": {\"id\": 2,
                                        \"img\": \"\", \"alias\": \"Salamander_3D.html\", 
                                        \"names\": \"Salamander 3D\", \"title\": \"Salamander 3D\",
                                         \"content\": \"Salamander 3D\", \"keyWord\": \"Salamander 3D\",
                                          \"description\": \"Salamander 3D\"}, 
                                          \"Salamander_Streamline\": {\"id\": 1,
                                           \"img\": \"\", \"alias\": \"Salamander_Streamline\",
                                            \"names\": \"Salamander Streamline\",
                                             \"title\": \"Salamander Streamline\", 
                                             \"content\": \"Salamander Streamline\", 
                                             \"keyWord\": \"Salamander Streamline\", 
                                             \"description\": \"Salamander Streamline\"}}},
                                              {\"doors\": {\"id\": 4, \"img\": \"\",
                                               \"alias\": \"doors.html\", \"names\": \"Двери\", 
                                               \"title\": \"Двери\", \"content\": \"Двери\", 
                                               \"keyWord\": \"Двери\", \"description\": \"Двери\",
                                                \"bluEvolution_doors\": {\"id\": 1, \"img\": \"\",
                                                 \"alias\": \"bluEvolution_doors.html\", 
                                                 \"names\": \"Система bluEvolution\", \"title\": \"Система bluEvolution\",
                                                  \"content\": \"Двери bluEvolution\", \"keyWord\": \"bluEvolution\",
                                                   \"description\": \"bluEvolution\"}}}]', '[{\"id\": 1, \"img\": \"calculator.png\", \"alias\": \"calculator.html\", \"names\": \"Калькулятор расчета окон\"}, {\"id\": 2, \"img\": \"email.png\", \"alias\": \"email.html\", \"names\": \"Отправка почты\"}, {\"id\": 3, \"img\": \"android_mobile_phone.png\", \"alias\": \"phone.html\", \"names\": \"0 (552) 2-46-49, 0(777)2-94-10\"}]');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `store`
--
ALTER TABLE `store`
ADD PRIMARY KEY
(`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `store`
--
ALTER TABLE `store`
  MODIFY `id` int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
