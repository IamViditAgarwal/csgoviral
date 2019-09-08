-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Апр 27 2016 г., 15:13
-- Версия сервера: 5.5.47-0ubuntu0.14.04.1
-- Версия PHP: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `sql`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cases`
--

CREATE TABLE IF NOT EXISTS `cases` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `picture` varchar(225) NOT NULL,
  `items` text NOT NULL,
  `price` int(11) NOT NULL,
  `visible` int(11) NOT NULL DEFAULT '0',
  `lim` int(15) NOT NULL,
  `red_stock` int(15) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=103 ;

--
-- Дамп данных таблицы `cases`
--

INSERT INTO `cases` (`id`, `class`, `name`, `title`, `picture`, `items`, `price`, `visible`, `lim`, `red_stock`) VALUES
(19, 'casee', 'case1', 'Shadow Case', 'case6-1981.png', '435,436,437,438,439,440,441,442,443,444,445,446,447,448,449,364,365,366,367,368,369', 99, 1, 5, 0),
(77, 'rarity', '1', 'Случайное армейское', '1-7796.png', '71,2,3,4,5,409,6,7,8,9,10,11,12,13,14,15,16,17,18,410,411,19,20,21,412,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,415,43,44,45,46,47,48,49,50,417,51,416,52,419,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,1,70,71,72,73,74,75,76,77,78,79,80,420,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,421,97,98,422,99,100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126,127,128,129,130,131,132,133,134,135,136,137,138,139', 29, 1, 100, 0),
(78, 'rarity', '2', 'Случайное запрещенное', '2-7884.png', '141,142,143,144,145,146,147,148,149,150,151,152,153,154,155,156,157,159,160,161,162,163,164,165,166,167,168,169,170,171,172,173,174,175,176,177,178,179,180,181,182,183,184,185,186,187,188,189,190,191,192,193,194,195,196,197,198,199,200,201,202,203,204,205,206,207,208,209,210,211,212,213,214,215,216,217,218,219,220,221,222,223,224,225,226,227,228,229,230,231', 149, 1, 100, 0),
(79, 'rarity', '3', 'Случайное засекреченное', '3-7963.png', '240,239,242,243,241,252,264,280,237,238,249,251,269,255,257,235,236,244,245,246,247,248,250,277,253,254,256,232,258,259,260,261,262,265,266,197,268,270,271,272,273,274,275,276,278,279,281,282', 299, 1, 100, 0),
(80, 'rarity', '4', 'Случайное тайное', '4-8090.png', '289,283,284,286,285,287,291,288,296,297,298,307,308,311,299,300,301,302,303,304,306,309,310,379,283,312,305,290,292,293,294,295,313', 499, 1, 100, 0),
(81, 'rarity', '5', 'Случайный нож', '5-8183.png', '314,315,316,317,318,319,320,321,322,323,324,325,326,327,328,329,330,331,332,333,334,335,336,337,338,339,340,341,342,343,344,345,346,347,348,349,350,351,352,353,354,355,356,357,358,359,360,361,362,363,364,365,366,367,368,369', 5999, 0, 100, 0),
(82, 'random', '6', 'Случайный Desert Eagle', '6-8223.png', '370,371,372,374,246,247,248,297,152,153,154,155,156,157,158,151', 79, 1, 100, 0),
(83, 'random', '7', 'Случайный M4A4', '7-8314.png', '375,376,377,378,47,48,140,187,188,189,190,302,379,303,304,306,305', 149, 1, 100, 0),
(84, 'random', '8', 'Случайный M4A1-S', '8-8469.png', '380,46,45,184,181,185,182,232,258,256,259,260,300,301,299', 299, 1, 100, 0),
(85, 'random', '9', 'Случайный AK-47', '9-8512.png', '381,383,382,2,70,142,141,186,385,233,234,235,257,384,236,237,284,285,298,286,287', 299, 1, 100, 0),
(86, 'random', '10', 'Случайный AWP', '10-8628.png', '387,386,7,146,145,144,239,240,241,242,243,290,292,293,294,295,313', 299, 1, 100, 0),
(87, 'casee', 'case2', 'Falchion Case', 'case2-8720.png', '133,34,39,128,90,78,202,165,187,207,201,245,279,284,292	,330,331', 99, 1, 5, 0),
(88, 'casee', 'case3', 'Chroma Case 2', 'case3-8847.png', '88,70,59,14,114,73,148,196,226,146,252,253,250,307,301,355,425,360', 99, 1, 5, 0),
(89, 'casee', 'case4', 'Chroma Case', 'case4-8936.png', '41,44,66,100,136,164,155,193,222,262,294,283,322,337,356', 99, 1, 5, 0),
(90, 'casee', 'case5', 'Кейс операции Феникс', 'case5-9091.png', '124,74,119,56,192,219,167,228,237,275,264,290,289,340,428,354', 99, 1, 5, 0),
(91, 'casee', 'case6', 'Кейс операции Прорыв', 'case6-9150.png', '62,72,81,105,126,216,149,204,211,247,251,255,309,299,341,424,430,358', 99, 1, 5, 0),
(92, 'casee', 'case7', 'Кейс операции Авангард', 'case7-9255.png', '30,54,65,27,125,179,181,188,220,233,276,282,287,335,330,337,333', 99, 1, 5, 0),
(93, 'casee', 'case8', 'Кейс операции Браво', 'case7-9332.png', '104,18,79,36,123,29,229,190,191,182,274,267,242,298,297,431,432,355', 129, 1, 5, 0),
(94, 'casee', 'case9', 'Оружейный кейс', 'case9-9463.png', '61,6,103,177,227,183,257,248,293,324,433,434', 129, 1, 5, 0),
(95, 'casee', 'case10', 'Кейс Winter Offensive', 'case10-9583.png', '401,23,43,95,166,163,200,205,232,270,243,302,291,342,340,354', 99, 1, 5, 0),
(96, 'casee', 'case11', 'Охотничий оружейный кейс', 'case11-9623.png', '117,109,402,13,92,82,143,214,231,256,277,280,286,304,348,350,356', 99, 1, 5, 0),
(97, 'casee', 'case12', 'Оружейный кейс: Тираж №2', 'case12-9781.png', '115,45,21,85,99,170,199,203,162,273,281,311,320,328,338', 99, 1, 5, 0),
(98, 'casee', 'case13', 'Оружейный кейс: Тираж №3', 'case13-9871.png', '8,83,19,132,38,150,225,154,171,244,272,296,343,350,354', 99, 1, 5, 0),
(99, 'casee', 'case14', 'Кейс Esports 2013', 'case14-9968.png', '47,57,20,175,221,210,236,239,310,315,314,352', 129, 1, 5, 0),
(100, 'casee', 'case15', 'Зимний кейс Esports 2013', 'case14-10020.png', '32,24,98,76,28,87,141,212,249,241,246,306,344,348,360', 99, 1, 5, 0),
(101, 'casee', 'case16', 'Летний кейс Esports 2014', 'case15-10170.png', '107,52,129,10,71,138,215,213,197,87,152,238,265,240,266,303,285,323,336,359', 99, 1, 5, 0),
(102, 'casee', 'case17', 'Revolver Case', 'case16-10280.png', '409,404,452,422,453,454,455,456,457,458,459,460,461,462,463', 99, 1, 5, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `drops`
--

CREATE TABLE IF NOT EXISTS `drops` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `inventoryid` int(11) NOT NULL,
  `weaponid` bigint(20) NOT NULL,
  `casename` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `user` bigint(20) NOT NULL,
  `time` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `itemid` int(11) NOT NULL,
  `message` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=838 ;

--
-- Дамп данных таблицы `drops`
--

INSERT INTO `drops` (`id`, `inventoryid`, `weaponid`, `casename`, `price`, `user`, `time`, `status`, `itemid`, `message`) VALUES
(824, 1011934321, 5652674339, '1', 13, 76561198048274620, 1459723482, 4, 90, 'Ошибка! Не корректная ссылка обмена.'),
(836, 310776642, 5390511383, '8', 21, 76561198048274620, 1459724744, 2, 380, ''),
(837, 1011935277, 5183287041, '1', 23, 76561198282405322, 1460014771, 2, 133, '');

-- --------------------------------------------------------

--
-- Структура таблицы `faq`
--

CREATE TABLE IF NOT EXISTS `faq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `decrition` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Дамп данных таблицы `faq`
--

INSERT INTO `faq` (`id`, `title`, `decrition`) VALUES
(18, 'У меня не открываются кейсы, пишет это: "К сожалению в данном кейсе нет вещей."', 'Значит нужно немного подождать, бот попросту не успевает закупать вещи.'),
(14, 'Я открыл кейс, но вещь не пришла, что делать?', 'Перейдите в свой профиль и нажмите на картинку "Вывести" на интересующем Вас предмете.'),
(22, 'Пишет ошибку при отправке выигрыша, что делать?', 'Если испытываете проблемы с отправкой выигрышного предмета, нужно написать в техническую поддержку: (clashcs.ru@gmail.com)'),
(21, 'У меня есть деньги в STEAM, но сайт их не видит. Почему?', 'Деньги на сайт нужно пополнять отдельно. Чтобы пополнить баланс нужно пройти Авторизацию, далее нажмите на "Баланс" в правом верхнем углу сайта, введите сумму и нажмите на плюсик.');

-- --------------------------------------------------------

--
-- Структура таблицы `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `weapon` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` text NOT NULL,
  `type` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=464 ;

--
-- Дамп данных таблицы `items`
--

INSERT INTO `items` (`id`, `weapon`, `name`, `image`, `type`) VALUES
(1, 'Negev', 'Анодированная синева', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpouL-iLhFf0v33fzxU9eO6nYeDg7mhN7rXlTgDuMQi3-vCpdjw2Ae2qRZsMG2mINSUIAQ3YlvZ8gW_k7q-m9bi60E-BDow/110fx82f', 'milspec'),
(2, 'AK-47', 'Черный глянец', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpot7HxfDhoyszJemkV4N27q4KcqPrxN7LEmyUDsJIh27-YpYmmiVDm_UFuZ2vzJYPDJlRsYw2C8lC5w-fu0Je_6ZrB1zI97TOUU9Z0/110fx82f', 'milspec'),
(3, 'AUG', 'Анодированная синева', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpot6-iFAZu7P3JZyR97s63go-0m_7zO6-fzjsEv5Yp0uuQ8dui3wTt_RBsYG-lJdSXJg5sMFGDr1C7wO7sg5G06IOJlyVTQYQwXg/110fx82f', 'milspec'),
(4, 'AUG', 'Медянка', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpot6-iFA957PDHYS1H_tSzlYS0m_7zO6-fxz0H7sEk37zDpdyi3VKxqUVla277J4-ce1I3YV6D_lS8yLrt0ZC_vYOJlyXik3twsg/110fx82f', 'milspec'),
(5, 'AUG', 'Хот-род', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpot6-iFAZu7OHNdQJO5du-gM7SlvP2a-KFkDsD6cN33b6Z84rz0QXs8xJuZzymdYfDclU2M17W_Fm7366x0jzU3_8y/110fx82f', 'milspec'),
(6, 'AUG', 'Крылья', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz56IeSKOC5YdAHDFahbTuYF9R3rNis77893GtLno-pfKwnt5YGSZ-QoYo0YGsPSUqCCZQGou05s1fBdKMeJ8nvt2SX3ejBdNGsYVYA/110fx82f', 'milspec'),
(7, 'AWP', 'Змеиная кожа', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpot621FBRw7ODGcDZH09GzkImemrmsY-PUxmgAv5Up2rnFrdmijlXgqUA_ZjzzIIKQcQA7Y1uE_Fbtlefum9bi68KPYhsE/110fx82f', 'milspec'),
(8, 'CZ75-Auto', 'Кровавая паутина', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz54LrTgMQhvazvVBKJNY_g_8AH5BGlj7p8yBIGwr-8Eelm6toLDZ-J9MNFETsDXUvTXYg_8u05qhvAML8bdvmqxikWkcSVq/110fx82f', 'milspec'),
(9, 'CZ75-Auto', 'Изумруд', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpotaDyfgZf0v33dDBH_t26kL-HnvD8J_WElT8Gu5Eg27iVotv00Azg80ZtMDimIo-ceg45YAuCrFbtyenv1sW6ot2Xntd6B4y4/110fx82f', 'milspec'),
(10, 'CZ75-Auto', 'Гексан', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz54LrTgMQhvazvADbVbVPAiywXpDS4n5YllBYbipe0HLw_m5oCVMrMuOYseS8XYCP6PZAGu409uiKRdKJKI9Sjuw223bZyfXPm3/110fx82f', 'milspec'),
(11, 'CZ75-Auto', 'Нитро', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpotaDyfgZfwPz3fi9D4tuzq4GIlPL6J6iDqWZU7Mxkh6eSo9Wm0FW3_hJrajinJtXDcg82MgnY-lS3leq8gJS56ZXOnCRh6yN2-z-DyFmfHqmu/110fx82f', 'milspec'),
(12, 'CZ75-Auto', 'Смокинг', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpotaDyfgZfwPz3fi9B7eO6nYeDg7msZ-KBzj0E7cdw2b_CpdX2i1Dj_hJlMWilLYWRdgNoN1qF8we8k-a5m9bi6-1tbAt1/110fx82f', 'milspec'),
(13, 'CZ75-Auto', 'Спираль', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz54LrTgMQhmfzvFGLJfSPAF-Q3oADI_psQ0V4_n8-xWfVrv5YHDOuV_MYsfHJWCDPTTZ1ir709uhqAOLpCAoinxnXO-uOr7WwI/110fx82f', 'milspec'),
(14, 'Desert Eagle', 'Бронзовая декорация', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5_MeKyPDJYcwn9A7JRUu8_yxv8CDU55MJcWdKy_q4LZw7os4LCMLcsMdAYTJbSUqWDZQr040hr06NaKZTdoHi83SzoPmwDCBf1ujVTJL13O6g/110fx82f', 'milspec'),
(15, 'Desert Eagle', 'Метеорит', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgposr-kLAtl7PLFTj5Q9c-ilYyHnu3xN4TVl3la18l4jeHVu97x31Dj_kA9a2DwcdWWJAZvZV_Qqwe3x-fv1Me6uMmanCE3vSEm4ynD30vgrmdJqGM/110fx82f', 'milspec'),
(16, 'Desert Eagle', 'Городской щебень', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgposr-kLAtl7PvRTitD_tW1lY2EqOLmMbrfqWZU7Mxkh6eUo4j2i1G1_EdoYDrxJ4PHelU3ZVGBrgC9xufvjJG8vpjMzXpgvyZ0-z-DyDrrCVR0/110fx82f', 'milspec'),
(17, 'Dual Berettas', 'Анодированная синева', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpos7asPwJf0v33fzxU9eO6nYeDg7msZOKIz2hS7ZEki7mS89Tw0Ae3-Us4MWD7LIGRegc-MF2D81i-ku_vm9bi644LgQp9/110fx82f', 'milspec'),
(18, 'Dual Berettas', 'Черная лимба', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5-OOqhNQhkZzvRBKFNU_sF8QTlHSIh18VxVcG5yLYDLVWq6ZyUZrItNtkYHsXTCPTVYVj740Jp1vVfeZOMpyK-iCrgP2cOWRDs-TgNhqbZ7VuDunxe/110fx82f', 'milspec'),
(19, 'Dual Berettas', 'Пантера', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5-OOqhNQh0fTvSAK5KVPAoywXpDS4n5YliBtazruNQfgrssNfPN-IqYtkdSpTZU_OCYAir70luiaAPfZOIqHznw223bZvDH3kW/110fx82f', 'milspec'),
(20, 'FAMAS', 'Смертенок', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz59Ne60IwhvazvGDq9TV_wu4BHTBCI24dJuGoLhpOgHewnutdGUYuQpNt5MSpKFX6OGZg7_4x1p1aBZL5bdoSPn2iX3ejBdT4JNcno/110fx82f', 'milspec'),
(21, 'FAMAS', 'Гексан', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz59Ne60IwhvazvADbVbVPAiywXpDS4n5YkxDI_hoeoEfQzq54TCOuEvM4xFF5bWWPCFYQj-60w4hfVUfJaMpH7ow223bU8aEp6L/110fx82f', 'milspec'),
(22, 'FAMAS', 'Демонтаж', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgposLuoKhRfwOP3fDhR5OO-m5S0lvnwDLjemm9u5Mx2gv2P9tWmiQPk-xE-YDqlINKUdgQ6YAzTqVm9xuvpjMS5u5zPwXcxunIg7GGdwUK4xWYQ4w/110fx82f', 'milspec'),
(23, 'Five-SeveN', 'Ками', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz59PfWwIzJxdwr9CblhV_Q3_TfhDCM7_cotDY_koOwCKwS-4oLEN7F4Mo1FTpWDCP-OYV_07khrifJcLZGB8ynm2jOpZDkegjxWog/110fx82f', 'milspec'),
(24, 'Five-SeveN', 'Паслен', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz59PfWwIzJxdwr9CblhWvk14w3-Ghg_7cNqQdr49LlUL17t54PGZeUuZdBIGcPXD_CCMF__7hlthfJeLpfcoXm-jC66aXBKBURLD0JxwQ/110fx82f', 'milspec'),
(25, 'Five-SeveN', 'Нитро', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgposLOzLhRlxfbGTi5N09OklY6Mksj1MLjUmH9C1810i__Yu9um2w22qkJkZ2-hctCWJ1I2NQ2E81G8x7q505G9vczAznRjuSQn4C3D30vgF3v-5zk/110fx82f', 'milspec'),
(26, 'Five-SeveN', 'Серебряный кварц', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgposLOzLhRlxfbGTjxP09-kjZOflvv4OqHUklRC4clnj_v--YXygED6-hBpNmuldoPEcQM6YF3S-Qe_l7js1JS06pnIyno3siN3sCvezhOw1wYMMLJHgOIdFw/110fx82f', 'milspec'),
(27, 'Five-SeveN', 'Городская опасность', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz59PfWwIzJxdwr9ArVhWvws8RvpHyI819JxVta4yLMHM12t4O2bZuR1dYVSScnYXaWBZ1_1vEpt0vVUfMPd8yLu2SXgPzhfXxvt-GINkO-O7LdphHFWHSZb54FIQQ/110fx82f', 'milspec'),
(28, 'G3SG1', 'Лазурная зебра', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz58Z_CyYQh0YjvYBKJMXfY7-TfuBTI318pmUN6j-vVXLAvu4tGTZ7h-NNsaTcLXWKSBbl2o6h861PAOJpzYqCjojH7sa24DRVO1recBjp_I/110fx82f', 'milspec'),
(29, 'G3SG1', 'Витраж', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz58Z_CyYQhvazvADbVbTPo27Q_jBxgw-sZ1W-i78r8PPFHx4NDHO-IlMtBFGMTWCfLSMwyr6Ehr1qBYKJOI9HjoiC69OmkOWkLs_HVExrGy_c776A/110fx82f', 'milspec'),
(30, 'G3SG1', 'Мрак', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz58Z_CyYQhmfzvFUrNZDco34RrnEBg_7cNqQdr49blecVrn4tCXN-EtZI5JHpHUDP-AZQ35vx9s06FbfpGJ9nu8iyjraHBKBURjthrGIA/110fx82f', 'milspec'),
(31, 'Galil AR', 'Водная терраса', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgposbupIgthwczJfAJF6dO7kZSZnvTLIK_Uhnhu4MBwnPCPoI_2iVK1_RVrMGz2IYKRdVdrMF6E_wW_w-bqhZbpu5rIz3Ni6Cgms2GdwUJTK7A28Q/110fx82f', 'milspec'),
(32, 'Galil AR', 'Синий титан', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz58Ne-8PDZ1TQXMPrRXSPQ0_R3hWnck18tqU9-iue9Ufwi6vNeVMuN5ZIpPTZOFWffXbgCu40g806deL8fdpSy72SXpaW8UG028Qrrckr0/110fx82f', 'milspec'),
(33, 'Galil AR', 'Ками', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz58Ne-8PDZ1TQzbPqdfUPw2ywPtBC4N5cJnXcK7ubhRKl67s9fGMLh4ZYlKHsnYX_-BMA_9608wiahfK5KLoHzq23u8bGgUG028KBH0d08/110fx82f', 'milspec'),
(34, 'Galil AR', 'Леденец', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz58Ne-8PDZ1TQfXPqdfUPw29RrTGSYg_M5gWNKlyLYDLVWq6ZyUZeN4N45IF8jSW6CPMwGsv0xrg_NbKZLd9Snm3y_vPTgKD0e-q25QhqbZ7daZ7b9X/110fx82f', 'milspec'),
(35, 'Galil AR', 'Песчаная буря', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz58Ne-8PDZ1TQfXPrNfUvEp4Af-BBg_7cNqQdr4oeJeeAW6tdPAMbQtZdgfTpHYDvOHZFj9v0s91aJZe5fa8Xnrjyi7OHBKBURcjVoNTA/110fx82f', 'milspec'),
(36, 'Galil AR', 'Осколки', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz58Ne-8PDZ1TQzbPqNMSfgq-A3TCzUz_shcWdKy_q4LZw3tsoWUM-EkONFMG5WDC_WENQyvvkxu0qEIeZeK8inn2yjtOWkKXhX1ujVTjkT5DC0/110fx82f', 'milspec'),
(37, 'Galil AR', 'Смокинг', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgposbupIgthwczbfgJN_t-3q4yCkP_gfe7VlDwJv5Up3r-V8Nym2Vfi80U9NmumI4WVJw83Zg3Q-1S8x7_o0Mei_MOe7tXEvoo/110fx82f', 'milspec'),
(38, 'Glock-18', 'Синяя трещина', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz58OOy2OwhvazvBE6FPSfA24RrpNio37M52WZni9e5WflnvtNHDOrAvM9BKG5bSU6CHZVr460I91aEMfZaNqS653SrsJC5UDM_8leUW/110fx82f', 'milspec'),
(39, 'Glock-18', 'Горелка Бунзена', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz58OOy2OwhmYzvFDa9dV6Riyw7gCCo3-_hhWMKzyLYDLVWq6ZzGN7B6ZN1KTMTXD6LXNwz56hhs1aFYKcOI8ni-jC_hOm0MCUHjqWMFhqbZ7Ul85kyx/110fx82f', 'milspec'),
(40, 'Glock-18', 'Карамельное яблоко', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgposbaqKAxfwPz3YzhG09C_k4if2aajMeqJlzgF6ZF10r2RrNyg3Qzjrkptazj7IYaVdwE4NFHRqFHtk-fxxcjr1j3fJ1k/110fx82f', 'milspec'),
(41, 'Glock-18', 'Захоронение', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz58OOy2OwhkZzvFDa9dV8o-8Qn4ATM95MtcWdKy_q4LZw7r5YLBO-J5MtAZHsfRWvCFZgv97Rpq1fRdKsDbqS7o3C-8PWhYWUL1ujVTUehMDk4/110fx82f', 'milspec'),
(42, 'Glock-18', 'Реактор', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgposbaqKAxf0v73fyhB4Nm3hr-bluPgNqnfx1RW5MpygdbJ8I3jkRrm_xA4a2v6d4LGc1M2YQqFrgO5lea5hJW4uM7LyHtl6CchtHzVyRWxn1gSOQY07qpC/110fx82f', 'milspec'),
(43, 'M249', 'Магма', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz52ZrfsDzZ2TQvAEqlaVfQ0ywXpDS4n5YlhDYPn8uoDcQzu4deXOuYvZNtJTcLZW6WHZlv_vx87g_VYeZXcpyLow223bQPPKCbp/110fx82f', 'milspec'),
(44, 'M249', 'Блокировка', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz52ZrfsDzRyTQmQVflhT_Ax4Af-Nio37M52WZnvpbgDfVrtttHPYuV9Yd8dS5TZXfSPMF306Ew-hPBcfpLa8X_qiX_vJC5UDLG-MWCi/110fx82f', 'milspec'),
(45, 'M4A1-S', 'Кровавый тигр', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz52YOLkDyRufgHMAqVMY_0jyxrpDTM778Jxa9qz87ITJBLq5dbCYrctM9wfSsOBCaLSYQ3-vE5p1qFbKZeKpSLujnm4PmZeWRri5CtazyA3u5I_/110fx82f', 'milspec'),
(46, 'M4A1-S', 'Смешанный камуфляж', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpou-6kejhz2v_Nfz5H_uO-jb-dluX9MLrcmVRd4cJ5nqeWrNit2AewqhY_Yj31cIDGJgRtZV-E8gS2xOzv0Z_qucvJm3M16SFw-z-DyBeWkcOk/110fx82f', 'milspec'),
(47, 'M4A4', 'Тусклые полосы', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz52YOLkDyR3TR7HA7JfX_Q3ywr7Nio37M52WZnioO4DfF_qvIvHOrArYdoZF5GGUvGAYwCuvEw_haIOfJPc9im5jCjtJC5UDOMEsaUh/110fx82f', 'milspec'),
(48, 'M4A4', 'Радиационная опасность', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpou-6kejhzw8zGZDZH_8iknZCOqPjmMrXWk1Rc7cF4n-SP9o6h2gfjrhY-Z2-lcYWde1NsNAmC-APok-zm0Z-_vMvBz3tq7yEmsWGdwUJ6nxi7Dw/110fx82f', 'milspec'),
(49, 'MAC-10', 'Янтарный градиент', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpou7umeldf0vL3dzxG6eO7kZSKm_v9MITdn2xZ_It13rzC9Nqj21DsqEs6ZWyiLI7AcVdsMl3W_1W7kr3vhJHotZzLnXFgpGB8sjEeQG_x/110fx82f', 'milspec'),
(50, 'MAC-10', 'Градиент', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpou7umeldf0vL3dzxG6eO6nYeDg7miZbqDxj8B7Z0n2-3E94mjjQTirRI9MTjyIIWQeg84Y1DS_lm3wOfom9bi6-g13CfU/110fx82f', 'milspec'),
(51, 'MAC-10', 'Ядерный сад', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpou7umeldf0v73fyhB4Nm3hr-YnOL4P6iCqWZQ65QhteTE8YXghRrn_xBvZj-gdYaXIAM9ZA2Bq1G9krq7hpa4uZ7Bn3ExvyEnsH7alhXhn1gSOXsb08Wt/110fx82f', 'milspec'),
(52, 'MAC-10', 'Ультрафиолет', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz52NeDkYAh0fTvSFLJOUPAF-Q3oADI_ppA1AIHmp-8CfljmttPHNeMkM94dG8aCW_fXN1j1uBpqiPVVepTY9S3xnXO-QDw0ayE/110fx82f', 'milspec'),
(53, 'MAG-7', 'Антитерраса', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpou7uifDhoyszPdDJP6ciknYO0hOPxI6jukXlU7ctOguzA45W72Q3k_hdpYm-iIYSddQc-YVyD-lK7l-3v1p-56MiYz3RquCV2sHvfzQv330-hLT2elw/110fx82f', 'milspec'),
(54, 'MAG-7', 'Поджигатель', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz52NeTiDyR3TQnDBvdhWvwo8QrlHTM35vhuUdO_4rZIeV3r4dbPM-YtYt4fHcGBCPODMA_4ux9shfVfKcDa837rjirrbm5eXQ2rpDxXSu86JQ/110fx82f', 'milspec'),
(55, 'MAG-7', 'Желто-черные полосы', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpou7uifDhzw8zAcCdD_tiJlpKKgfjLP7LWnn8fvZR30r2SpY3wiQDiqks6amqmIYaRJFQ3NAnZ_1Htlenoh5-_vMnPnWwj5HeouX7iBw/110fx82f', 'milspec'),
(56, 'MAG-7', 'Райский страж', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz52NeTiDzRyTQnDBvdhVPA74g3iNio37M52WZnho-tRcAnr4deUMbF_NN9ITMWGWvWOZlqs6ENr0qMIfpOPoH_r3HzqJC5UDA1d_hMd/110fx82f', 'milspec'),
(57, 'MAG-7', 'Объемные шестиугольники', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz52NeTiDz9-TQ3BDrNfVPA-5gfiNio37M52WZm18-1efl3o4YbFNuQoMd0fFpPTXveBNQ77u0luh6ZfLsSN8S_t2C_hJC5UDBo0wd3v/110fx82f', 'milspec'),
(58, 'MP7', 'Анодированная синева', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpou6ryFAZu7P3JZyR94NWxnJTFwPWjY-6CxT1Su8B03r6T8Y6s2wft-EJpam6lJNfHcw8_Y1nXqFLqkvCv28FJ8mUtyA/110fx82f', 'milspec'),
(59, 'MP7', 'Броня', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz52JLSKMSZYfxSVPrVSSOc7-QfoDDU818pmUN6j-vVQew-75dDBZuIlNNBLF8fUDPaAMgv-vEswiaIOesDb83-93H66OGteRVO1rYplVZEc/110fx82f', 'milspec'),
(60, 'MP7', 'Полная остановка', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpou6ryFA957OXJYzRB7dG5q5KOk8j8NrrHjyVXupIg2biQptSt3gPlrUZlNmmhcNWSIFI5M1rT_ATtybjmhce06pqb1zI97QxO8B3s/110fx82f', 'milspec'),
(61, 'MP7', 'Черепа', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz52JLSKOC5YYQ_XDaxNY_g_8AH5BGkzuZUzVtThpO5fLFi75YqUOrkuM41PG8LWCPGDblz6uB4-iKkILsSPvmqxiih17oj8/110fx82f', 'milspec'),
(62, 'MP7', 'Городская опасность', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz52JLSKMyJYfxSVTKNRUfg7-gzpGxg_7cNqQdr4prlSflnq59bBM-QlNYoeScOBXfLQZwr66ElphKZaK5yKon_vi3nrOnBKBURfsg7lXw/110fx82f', 'milspec'),
(63, 'MP7', 'Снежная мгла', 'http://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpou6ryFBRv7OTAeClH48miq4yCkP_gDLfQhGxUppR32L6Tot_22QztqEJlMW3xIYCSIFJqZVyGrAK9lOu90JG86czKmHZ9-n51-XhiT_o/110fx82f', 'milspec'),
(64, 'MP9', 'Темный век', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpou6r8FAZt7P7NZTxO09W4mIGSqPv9NLPF2GoFsZMp2-_Dpo2m0Vaw-ERkY2zycNKXcFBoaA7Z8lnolebshMK4vcvXiSw0RlUWR70/110fx82f', 'milspec'),
(65, 'MP9', 'Дротик', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz52JLqKMyJYfxSbPqNWWeMo-wbTBCI24dJuGoLl8roAeQvvvIfGM7MrNtpFGMDSWaCDY1_5uU061PddfcOP8iy5jij3ejBdfohEiJw/110fx82f', 'milspec'),
(66, 'MP9', 'Смертельный яд', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz52JLqKMyJYfxSbPqRbXfE27Tf8Bi4h58lcWdKy_q4LZwW64ILPNuYlMNlJGpGDXaWGNVz1uB4xgqZeesbdpX7riSruM20NXRD1ujVTojjdwSw/110fx82f', 'milspec'),
(67, 'MP9', 'Хот-род', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpou6r8FAZu7OHNdQJO5du-gM7bwqb2MeuClTsCv8Ek2LiZ9t2giwa28hVlZGD0doSUIANqYV_U_gC2366x0j0WoURS/110fx82f', 'milspec'),
(68, 'MP9', 'Ящик Пандоры', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpou6r8FAZh7OPJfzlN_t2JmYWPnuL5fevTlz0F7pIgieqUrYitiQWy-hdrNWumddfAcVU_NF3Zr1jvxbvu1sWi_MOepgbcjQQ/110fx82f', 'milspec'),
(69, 'MP9', 'Закат', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpou6r8FA957P3dcjFH7c6JhIGfg_LmPenum3sI18h0juDU-MKljAbi-UM4MDrycNTAdFRoNQzZ-1a9yOy60JK96pnIwHZnuiNw5X_bgVXp1qKBy7Rx/110fx82f', 'milspec'),
(70, 'AK-47', 'Элитное снаряжение', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz56P7fiDzRyTQXJVfdhUfQp4A3-EBg_7cNqQdr48-9fLQrnsIXCNLkuYYxLGMbVD_SOMl_54kw8iaQMKsTY8yzq3y3oPXBKBUT7Bt81Vg/110fx82f', 'milspec'),
(71, 'Negev', 'Тра-та-та', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz51MeSwJghkZzvAE6FKXeE74DfiDCA3_vhuUdO_4rZIfFnotteSMLN_N4tFHMHUXaKFYw2ou004gfIPKsbYp3vsiS_qb2ZYCQ2rpDyjN8Rd0w/110fx82f', 'milspec'),
(72, 'Negev', 'Пустынная атака', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz51MeSwJghkZzvMBKdbSsou_RztBzQm59Vua9qz87ITJBLottSSNOIkY9EfFsXYDvKBNQz57Uo-iKFYepOIpC3s2yXtOWZfWRfo5CtazzOzaZfr/110fx82f', 'milspec'),
(73, 'Negev', 'Боец', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz51MeSwJghmfzvMBKdbSso9-Af-EBg_7cNqQdr4oupecA_mvYbENLR_YtFJTcXYXPLTYgyovxk4gqlYLJeK8n-833i4P3BKBUTnQEPFkQ/110fx82f', 'milspec'),
(74, 'Negev', 'Почва', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz51MeSwJgh0YjvMBKdbSsou4Rr9NjM3-tViXdmJ-r4CIEmyqoOVMbQlZYkeHsbZWvTXZwCvuEM6iPALJpyAp3no33-7MzpYUhDr-2Ia2LjQEoGtsFM/110fx82f', 'milspec'),
(75, 'Nova', 'Оранжевое пламя', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpouLWzKjhoyszAZDNW6c6JloyKjfLLPKnQmGxU18h0juDU-MKk3ADirhdlMWzwcdXBIQM4aQ7Tq1fsxOy7jcK86Z3JyidnuSUj5XjVgVXp1tLbIK_-/110fx82f', 'milspec'),
(76, 'Nova', 'Призрачный камуфляж', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz51O_W0DyR3TQfDDK9hS_o18DfuBTI318pmUN6j-vUHKw_ot4DAZ7V-YY1EHMWEWvOOZg_14kswg6JYJ8bb9CLsiCzoaTheRVO1reogNdNi/110fx82f', 'milspec'),
(77, 'Nova', 'Современный охотник', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpouLWzKjhoyszAZDNW6c6JmY-PkuX6DLPUl31IpsEkiOqUo9yl2ADjqkJvMTr7d9PGJFI7M1nSq1K5l7jt1sLt6cjJmnt9-n51t-PXeVU/110fx82f', 'milspec'),
(78, 'Nova', 'Лесничий', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz51O_W0DzRyTQrNF6FhTvQ08w3-Nio37M52WZm3o-1Tel3mvdHEO7coYolOTMeGXfKFZQ_44kg_iacOL5WIpCrm2ym_JC5UDHUVB3qN/110fx82f', 'milspec'),
(79, 'Nova', 'Буря', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz51O_W0Dz9-TRfHALNXWPAF9hrtHygN5cJnXcK7ue8FL1m54oGVYOQlYtEYGsfRXPTQMgGs70M5gKZbJpKKqS-9jy-7OmwUG028bf9lHZw/110fx82f', 'milspec'),
(80, 'P2000', 'Кольчуга', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovrG1eVcwg8zJfAJB5N2_mo2KnvvLP7LWnn8fupN00u2U8NykigK1rUs4MGH2dtOWdlVoYF7Y-VHrl-jtjZa9upufnWwj5HdqMVWH_w/110fx82f', 'milspec'),
(81, 'P2000', 'Слоновая кость', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5zP_PnYGc3TQfXPrAMDKVqywH6BjUr18pmUN6j-vUCKAzvtIrANuZ_NdwdTpTRWveBYQn1vExpgKBffsaLqS-61SzqOT8NRVO1rasOQLUq/110fx82f', 'milspec'),
(82, 'P2000', 'Пульс', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5zP_PnYGc3TQfXPrAMDKVqyxj5BTQ318pmUN6j-vUCcQXvtoLPZ-UuMY4fGJWGW_eOb1yo60hqhPdZKMCAoSPmjyXpP2YJRVO1rVbjdAVC/110fx82f', 'milspec'),
(83, 'P2000', 'Красные фрагменты', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5zP_PnYGc3TQzbPrBRUOwF9wnhBhg_7cNqQdr4p-5TcATvstCVNbUpOIpKSZXYWfOGMlv9vEIw1PMJLZ2N8SLviSXpbHBKBURSpl0FWw/110fx82f', 'milspec'),
(84, 'P2000', 'Серебро', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovrG1eVcwg8zJfwJR5dCgkZK0m_7zO6-fzj9T7sEjjLnD8Y-iiVbi-kc4ajqnI4eVcVQ5NVjX-1e-x-_ujZe6uoOJlyU5sT_JRA/110fx82f', 'milspec'),
(85, 'P250', 'Улей', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5rZrblDz9-TRbHBahbRMo38QzlHCp8vcRhUoKyo7hWfA-5sdHAYrkpN9pETsfYUvXTZVv_6xhs1vNaKZLcoTSvg3pCiqtZ3A/110fx82f', 'milspec'),
(86, 'P250', 'Современный охотник', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpopujwezhoyszAZDNW6c6JmY-PkuX6DLbUkmJE5Ysh3-yXoNvx0FfsqBVtMm76JtOddQI6Y12GrAC_kOi81J-7uZyazndrpGB8ssdk9hMS/110fx82f', 'milspec'),
(87, 'P250', 'Ржавая сталь', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5rZrblDzZqTQDGEaFKWPA05w3TGi4-_sJxa9qz87ITJBLu5oDCYbItZt8eTMbVXvWANFivu0lthKdUfZyIqCrnjCXob25eWxG55Ctaz0FAzs2n/110fx82f', 'milspec'),
(88, 'P250', 'Валентность', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5rZrblDzZ2TRSQVPBhX_o04Af5Gxg_7cNqQdr4r74DKwTn4oTDNbQvMotPTMnRUqKEMA797hhpg_VdJ5eK9irq3H_uMnBKBUShKRvMGg/110fx82f', 'milspec'),
(89, 'P250', 'Снежная мгла', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpopujwezhz3MzfeTRW6dOjgL-DkvbiKvWElTII6ZIhj--Sp433jgXj-UduMGr2JIbBJ1dsaQ6DrwC8xL_n0Jbuot2XnjwhZrR8/110fx82f', 'milspec'),
(90, 'P90', 'Элитное снаряжение', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5rbbOKMyJYYl2SPq1fT-E_5hHTBCI24dJuGtPup70DLQ7p54GVYbB4YdxNGcTUDvPUZVr14ktrh6NVfcaPqHy92Hj3ejBdvdlUfSo/110fx82f', 'milspec'),
(91, 'P90', 'Арктическая сетка', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpopuP1FBRw7P7NYjV969C3l4mOhcj5Nr_Yg2Yfv5Fy37uRpdit3Vbi_Ec5Zm3yIdCVcQA8NV3Y-1i-kubq0Me9u8nInGwj5HcORVNQGg/110fx82f', 'milspec'),
(92, 'P90', 'Модуль', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5rbbOKMTlYYAvbAKxcUPA_8DfhDCM7_cotBNawoL5fKl664dfBNbcrZYoZG8nQCKKENwD97hkx0qNYeZaKpXvoiDOpZDkZSZ5WrA/110fx82f', 'milspec'),
(93, 'P90', 'Демонтаж', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpopuP1FBRw7P7NYjV95NOiq4GFk8j3PLfVqWZU7Mxkh6eTrNmnigzlqEBqZz-hJYCQIAE8YFuEqFK-xO65gZK6uMjBm3Rm6CUi-z-DyF0b-FUY/110fx82f', 'milspec'),
(94, 'ПП-19 Бизон', 'Латунь', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpotLO_JAlf0uL3cy9D_8-JnIWKge66YrrQwGpTsZ0m27rF8NqjjVCwqUA4NziiIYHBJAQ_ZwyC_VDtw7-6h4j84sq1nvST4w/110fx82f', 'milspec'),
(95, 'ПП-19 Бизон', 'Синие полутона', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz55Pfm6PghmfzvWFLJPU_wp8TfkCCs0_MhtUei78r8PPFHxsoTHZeUpZN5IGpGCU_GCZQGovk4wgaZaecDbpijr2CzqOjgKWhq9q3VExrEWZCjBQQ/110fx82f', 'milspec'),
(96, 'ПП-19 Бизон', 'Современный охотник', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpotLO_JAlf2-r3eShM-Nmkq42Ek_LmPYTck29Y_cg_iLiX9NXx31Dl-xI9amjzcdWTIFA8MAvW_AW-xOy6gZDu75-bm3c26z5iuyjIrvyRmA/110fx82f', 'milspec'),
(97, 'ПП-19 Бизон', 'Пыльник', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpotLO_JAlf0uL3YilH6dCJlpKKgfjLP7LWnn8f6cZ037uY8ImjjASxrhU5amj2LdPEJAY6YQrT_FXvlebqhsXv6pXAymwj5HcaiWp-nA/110fx82f', 'milspec'),
(98, 'ПП-19 Бизон', 'Знак воды', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz55Pfm6PghvazvVALRbTso55g3_HRg_7cNqQdr4o7gAeAnu5YOXMuF4ZI5NG5HVU_GOMl_1vx1pg6VcLsCB8yvrjijga3BKBURhAfg3aQ/110fx82f', 'milspec'),
(99, 'SCAR-20', 'Кровавая паутина', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5oN-KnYmdYeh39FqVcT8o-9RrnDDUN5cJnXcK7ubpXfwjs4tTBM-N6MI5KG5OCWaOOYF-v6x9qg_MPK8GM8SvsjyXvb24UG028Gn5RfL0/110fx82f', 'milspec'),
(100, 'SCAR-20', 'Грот', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5oN-KnYmdYcxX9EqNfTqdqywTpCCwN5cJnXcK7ub9QfgzntovBM-IlMY5OH5XRC_KGYFj6v01qg6VYLpLcp37njyXhaG8UG028mpvdaus/110fx82f', 'milspec'),
(101, 'SG 553', 'Анодированная синева', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpopb3wflFf0v33fzxU9eO6nYeDg7mhMO-ElTpSu5Yg2rmXrNjziwTl-xJvajuiLYTAcVdoMArRrlbtxLvom9bi65LEnjT7/110fx82f', 'milspec'),
(102, 'SG 553', 'Дамасская сталь', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpopb3wflFf0uL3dTxP7c-1gZO0hPChZujummJW4NE_372Sptmg3gzjrUNvam-icIeVJ1I8N1rX-lTskuzrh8XpucudnyAwvz5iuygR9uL9aQ/110fx82f', 'milspec'),
(103, 'SG 553', 'Ультрафиолет', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5oM7bgZgh0fTvSFLJOUPAF-Q3oADI_ppQ7BYS1r-lSe17vsdfONbUsMtxEGpPRWvLSMFz9vkwx1KJYKseNpnjxnXO-LevKDKA/110fx82f', 'milspec'),
(104, 'SG 553', 'Брызги волны', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5oM7bgZgh0YjvREbJfRcot9R7pGhgw-sZ1W-i78r8PPFHx54PAM7QuOdtJTZKFCaKPMw_540kw1aNdJ5yMonvpiym7bGsOD0K4-3VExrGfBSee5g/110fx82f', 'milspec'),
(105, 'SSG 08', 'Пучина', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5oJ-TlaAhmYzvOBLZXXeEy9QbTBCI24dJuGtGwoL9WeFnqstGUN7IrNd4eS8PQC_aOYA71u0g_hqILLsSJ8S6-iSX3ejBdMsZAA7k/110fx82f', 'milspec'),
(106, 'SSG 08', 'Кислотный градиент', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpopamie19f0vL3dzxG6eOxhoGYhPv1Pb_ummJW4NE_0ruYoNz0jgflqEJrZD3yII-dcQA4ZFzV8wXqlLvogsC6v57OwCRn7j5iuyiZeoRmBw/110fx82f', 'milspec'),
(107, 'SSG 08', 'Темная вода', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5oJ-TlaAhmfzvYBKJMXco-9RrnNio37M52WZnu9e8EfQW5sNDEMOF5ONlPHsjYWqPTNF_76h9q06YPLJSJpn7q2yS8JC5UDERrScot/110fx82f', 'milspec'),
(108, 'SSG 08', 'Объезд', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpopamie19f2-r3Yi5FvISJmYGZnPLmDLbUkmJE5Ysm37-Vpoj32wXs-EJrNmumLNDAclI6Z1zX_Vjqxb29hcO878nPmyRlpGB8sq1srR54/110fx82f', 'milspec'),
(109, 'SSG 08', 'Когти', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5oJ-TlaAhkZzvREqcOBMoz-QXjGzMz5PhuUdO_4rZIcVm64dPDZuV6ZI1OF8iEXKfVNF2r704_0fMOJsaK8S3r2n_pOmZeCQ2rpDxk_ln28Q/110fx82f', 'milspec'),
(110, 'Sawed-Off', 'Янтарный градиент', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpopbuyLgNv1fX3cDx96t2ykb-GkuP1P7fYlVRd4cJ5nqfA9Nuh2Qzm-0VlZmqmcILHdQE-ZgyEqAK2xOe915fp7pqbn3Qws3Fw-z-DyIWEAXkH/110fx82f', 'milspec'),
(111, 'Sawed-Off', 'Медь', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpopbuyLgNv1fX3cCx979OmhIWZqPrxN7LEmyUJ6ZBz07CUoYjz2lCx-kFpazr6JoaTe1U8Yl_V_gLtyOntgJe975qa1zI97eqxrstO/110fx82f', 'milspec'),
(112, 'Sawed-Off', 'Первый класс', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpopbuyLgNv1fX3cih9686zkY60m_L1J7PUhFRC6dJ0jubH87P4jVC9vh5yNWyhdYLEIFc6aFiGrwC2yLi6gsK-6M7KyHIwuyJwsXbVnhW0hxpFaPsv26Ju1DZk9g/110fx82f', 'milspec'),
(113, 'Sawed-Off', 'Полная остановка', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpopbuyLgNv1fX3eSR9-t2knYOKmvjLIb7VqWdY781lxLHF99il0Ffg-EJrNmj6dtDBJA5vNQvWqVK_ye3sh5G0upvNy3FnviU8pSGKve7IyHk/110fx82f', 'milspec'),
(114, 'Sawed-Off', 'Оригами', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5oNfSwNDhhdDvBFJ9NXeI_8AfqDxg9-s5kVdq_yLYDLVWq6ZzPOuR5M4oZH8KBWfGPNwyouEI50qRdL5KK8Xzpjinsb2xZX0Xj-z5ShqbZ7Rh0ERld/110fx82f', 'milspec'),
(115, 'Tec-9', 'Синий титан', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5vMeDsDzZpTRDLFaFQVeA3p1j6Nis77893GoDgp-xeeQrqtoHDYrklNowaF8HYXqSAbg3870Js1vQIKMDf837q3i33ejBdY11STUA/110fx82f', 'milspec'),
(116, 'Tec-9', 'Латунь', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpoor-mcjhhwszKYzxR_-O7kYSCgvq6ZLnXlThXu8QhiLuR89-hiwex_EA-MG_wcIfGdlQ3ZwrWqwK3kOy914j84spCpFtqYA/110fx82f', 'milspec'),
(117, 'Tec-9', 'Айзек', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5vMeDsDzRyTRDHAvlhXeYz_QXjHxg_7cNqQdr4o-xTKgm7tobOYrUrZt4aHJHYU6TQZVj0vxg_ifBULMGN9ivqiH-9OHBKBUQ9rY3UNg/110fx82f', 'milspec'),
(118, 'Tec-9', 'Окостеневший', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpoor-mcjhh3szHYi5L6sWJmImMn-O6YeLTx24FuMByiLyWrd3wjQKy_0Q-Z2_zcIWWdQRsZAvW_FG_lenpjYj84srtx4T2zA/110fx82f', 'milspec'),
(119, 'Tec-9', 'Песчаная буря', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5vMeDsDzRyTRDHAvlhT_Q08Bv4BjU_18pmUN6j-vVVcVrsstbFMrZ6MIxJF8CGDKODZg34vxo8hqhce5yNoyq71CTqaT1bRVO1rS5Tnr7s/110fx82f', 'milspec'),
(120, 'Tec-9', 'Терраса', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpoor-mcjhoyszPdDJP6ciknYO0hOPxI6juj25d5MpmteTE8YXghRq2rhE6NzyiI4adIFU_ZFmCq1Dqle_thce0upjBz3IxuSIrsXaOnhHin1gSOam774aE/110fx82f', 'milspec'),
(121, 'Tec-9', 'Токсичность', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpoor-mcjhoyszGZD5O6d2kq5OAgvv4IO7ugm5Ssfp9g-7J4cLx0Aew_Bc5ZzryJNLHIQNoMA3Z-FTvxb29gJW978zOmHo373V05ivcgVXp1mJNZYNi/110fx82f', 'milspec'),
(122, 'UMP-45', 'Пламя', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpoo7e1f1Jf0vL3dzFD4dmlq4yCkP_gfeuCxTMG7pFw2uiV9I-jjlHi-0dvZDygLY-dJw89NQ3QqFK3lOe9jcSi_MOeUg1XNk4/110fx82f', 'milspec'),
(123, 'UMP-45', 'Груда костей', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5uOfPhZQh0YjvRCrVSUMo-_QnrGyY_18VxVcG5yLYDLVWq6ZzCZrklY9pKTsmEDP6FYgCo6x84iPILepKApSjq3X_gMm0KDULp_mJQhqbZ7du2QWlm/110fx82f', 'milspec'),
(124, 'UMP-45', 'Капрал', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5uOfPhZQhkZzvXDLBhX_oo5Af-CCsN5cJnXcK7uelXKwq85dDFNOUuNtseHcWGWPCOYQmsuRhrhvcIe8eJ8ny91CvhaGcUG028PIklS1Q/110fx82f', 'milspec'),
(125, 'UMP-45', 'Заблуждение', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5uOfPhZQh0YjvXDLAKCco-uR7lGi495tRcWdKy_q4LZ167s9eQNuMtZdpJG8DWW6PTNAz-7U841vVYJsDYpCu-jHvtO2YPUxX1ujVT46Q6Aqs/110fx82f', 'milspec'),
(126, 'UMP-45', 'Лабиринт', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5uOfPhZQhvazvOCK5bT8o15gniDiIN5cJnXcK7ue5Xf1nusYbONeQpNYpIFsPYWf7SZF30409pgqALfZHb9Cnoi3m8O2wUG028C02LLjw/110fx82f', 'milspec'),
(127, 'UMP-45', 'Лабиринт минотавра', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpoo7e1f1Jf0Ob3fTxA9c6_mpSDqPrxN7LEmyVU7p0o3-iU8Y-k3QS2qEU9ZT_6d9Sdew46MgqE_QO7lLrog8C47ZuY1zI97d-e9afQ/110fx82f', 'milspec'),
(128, 'UMP-45', 'Бунт', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5uOfPhZQhkZzvXDLAKCcov5BrjCDUN5cJnXcK7ue9RLw--vdfGO7IvON9ETpGCDKeEYgmrvEppgvRcfZSJpi263S-8OmwUG02867JdrUw/110fx82f', 'milspec'),
(129, 'USP-S', 'Кровавый тигр', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5uJ_OKIz5rdwrBBLJhVOwF5g3oHS417dVcWdKy_q4LZwvnt9GXMbAkYdtFTsDSDqSEbwn67kM-gqdUJsPc9Hnu3H66Mm8IUkH1ujVTCd6Qdhg/110fx82f', 'milspec'),
(130, 'USP-S', 'Бизнес-класс', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpoo6m1FBRp3_bGcjhQ09-jq4yekPD1NL7ug3hBpdZOhuDG_Zi721WwqBJvMGH2coPEJwRsYVDT_lm3kO_vgJ_pvZ_MzXZivXZ04nyOlwv330_YPZS7Gw/110fx82f', 'milspec'),
(131, 'USP-S', 'Ночные операции', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpoo6m1FBRp3_bGcjhQ09Svq5aKhf73MrbeqWVY781lteXI8oThxlCy-hA9MGqlJoHAIw4_Y1vXqwLskue7gJC9v5qfzCdg7nR05XjfyxCpwUYbxcylpaA/110fx82f', 'milspec'),
(132, 'USP-S', 'Нержавейка', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5uJ_OKIz5rdwrBBLJhXeQF4Rv8NjQm6c5tWNKl5IQLLFi28d_YYbgsOY1ITJXRXqSFZlj7vxlph6heL8Pc9Xy8iS3uPj0IDkLo8jkCzfjH5OVrFrrFFw/110fx82f', 'milspec'),
(133, 'USP-S', 'Закрученный', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5uJ_OKIz5rdwrBBLJhX-AF4Rv8Njcg58BxUcSl_q05JFm77cebLbd_OdlPH8CFW_GEZwmu7x9phfMJLMTfpi--jnjvb24CCULvq2MEzrWZ-uw8ZTeUj80/110fx82f', 'milspec'),
(134, 'XM1014', 'Оранжевое пламя', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgporrf0e1Y07PvRTjVX4sizhr-Jm_buNoTehGpf78BOh-zF_Jn4xgzi8kE4NmCmI4HGelNoN1rX-Qe_yO_m0MC7u57Bzntk7nFwtnfbyRepwUYb0WYGVSE/110fx82f', 'milspec'),
(135, 'XM1014', 'Костемолка', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgporrf0e1Y07PLFTjNX79CzlZK0hPzhP7fCx1RJ5ZQh273--YXygED6_EJqNmHxLYDGcgFqYg3WrlTtyLjq05S8up3Mmntluihwty3al0bmgAYMMLKwoJ4rnA/110fx82f', 'milspec'),
(136, 'XM1014', 'Ртуть', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5jObLlYWNYcxX9Ga0PDKRuyxvlDisz18pmUN6j-vUHLF26tYHHZbV6Yo5OG8jXWvTTMFv67k5t1aYOfpXco3zsjCu4bmsLRVO1raEbYWX1/110fx82f', 'milspec'),
(137, 'XM1014', 'Красная кожа', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgporrf0e1Y07PDdTjFH7ci-kZK0j_qlY-qFqWdY781lxL3Dp4qjjgOwrUQ4Y2qlJNTDIAQ5YAzRrlG4kufrjcTutM6dmiBj6SA8pSGKXAbUj-c/110fx82f', 'milspec'),
(138, 'XM1014', 'Красный питон', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5jObLlYWNYeh39Eq5fV_Ap_wHiNjU37PhuUdO_4rZILw-9t4OUM-MuZotFGpOFDPLXYw3_7UprgakILMSBqCnn2n-7b20JXw2rpDwV-u7dEw/110fx82f', 'milspec'),
(139, 'XM1014', 'Смешанный синий камуфляж', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgporrf0e1Y07PvRTitD_tW1lY2EqPX4Jr7um25V4dB8xOyXoI7w2gayrUZoYj32IdPAdgY7ZAvV-ljvwevtgJe_6pScyicx7CM8pSGKFSQfI94/110fx82f', 'milspec'),
(140, 'M4A4', 'Рассвет', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpou-6kejhh3szDeDBN4tOJh5WFhf7nNoTZk2pH8Ysii7uYo4r221DkqkdvZm37LYecdlQ8YgrSrgK3kOzu05C-u53AyXI1pGB8suJlCAfZ/110fx82f', 'restricted'),
(141, 'AK-47', 'Синий ламинат', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz56P7fiDz9-TQXJVfdSXfgF9gT5DBg_7cNqQdr4oL5WLAnm5YbBN7B5MthISZPZCaTUbwys6khqiKFdKpWB9iLm2iu9MnBKBUT3mim8qA/110fx82f', 'restricted'),
(142, 'AK-47', 'Первый класс', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpot7HxfDhjxszPYzhH4uO6kYGfn_LmDLrawjxu5cB1g_zMu9rw0Fbl-kJuY2r3cI-RIVI-MlzTr1foxOe6hcC-6ZvPnCFquChz5XjD30vgHKsTYF0/110fx82f', 'restricted'),
(143, 'AUG', 'Закрученный', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz56IeSKMyJYcxHFPrBMU_Io8Rv_ADEN5cJnXcK7ue9VcArs4dTOZ7YkM95JHZbRCfWPZQz86x1pgvBbKMDcpyPm1HntOjsUG028T6WSk1Y/110fx82f', 'restricted'),
(144, 'AWP', 'Пиксельный камуфляж «Розовый»', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpot621FA957PfMYTxW08y_mou0mvLwOq7c2DxUscQkiO2S8I-h2gTm-hA4NTyhdoDDcVU3MwzV_1G4xb_uhpPo6Z7XiSw03MaHlHE/110fx82f', 'restricted'),
(145, 'AWP', 'Гадюка', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpot621FA957ODGcDZH_9e_mr-DkvbiKvWFxDhTvMMi3ryWrNyj0Qbi8kQ4Nz3xI9CWJgQ8Nw3Vr1i_wem5hJ-9ot2XnjzZQCBr/110fx82f', 'restricted'),
(146, 'AWP', 'Бог червей', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz56I_OKMSZYcxPSPrRJVfs_ywXpDS4n5YkxUoDv8esAegu8ttSTYLMlZI4dH5TXDPCGNFz-uE8_hvddJpbb9Czrw223bfuxyJYu/110fx82f', 'restricted'),
(147, 'CZ75-Auto', 'Чаша', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpotaDyfgZf0v73YzJb7dCJmImMn-O6NeLXwWlVsMAk2buQ842l3QPmqhc_YTv0I4aQcgA-aQ3V_1a-krq-04j84sqdvOTuGQ/110fx82f', 'restricted'),
(148, 'CZ75-Auto', 'Поул-позиция', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz54LrTgMQhkZzvBG_cLY-Uo8QvlGi495vhuUdO_4rZILQTps9bCZ7AsM4saS8CGWqeDMg70u0MxiPMIK5zYpC7niC28PW8MDw2rpDzmY5IM_g/110fx82f', 'restricted'),
(149, 'CZ75-Auto', 'Тигр', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz54LrTgMQhkZzvBVvVfEeEz8w3-Nio37M52WZmw8-kFfAXu5ovEM7l-NI1FGcWDCPeOYQH5vE441aZYeZTcpSvt2im4JC5UDEMd6wFp/110fx82f', 'restricted'),
(150, 'CZ75-Auto', 'Листовая сталь', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz54LrTgMQhmfzvGCKFTU_s-yxjgCDM318pmUN6j-vVVKlrvsoGUZrEkYYpMGsGBXaOAMg_570NsgakOLsOKqS3ojn7rOWkLRVO1rZiDXZcX/110fx82f', 'restricted'),
(151, 'Desert Eagle', 'Пламя', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgposr-kLAtl7PLJTjtO7dGzh7-HnvD8J_XVkjoFuMYiiLqUrI-k3le3r0s5amj7d9eTI1I-M1rW-Fm_xO-50Jfvot2XnhS4_w8U/110fx82f', 'restricted'),
(152, 'Desert Eagle', 'Кровавая паутина', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5_MeKyPDJYeh39FqVcT8o-9RrnDDUN5cJnXcK7ubhVewvvvITBNbUoYd5IHsDXXfSEYV34ux9piKlbLJSN9H691Cm9PGcUG028NgBr9io/110fx82f', 'restricted'),
(153, 'Desert Eagle', 'Пищаль', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgposr-kLAtl7PLZTjVD4ti1lY6FmPnLPr7Vn35cpsR33bmW9I2niQLj_kA9MG2mcNLGdlU7ZQ2F_FG8levohJa96J_Kz3J9-n51SNwWmb4/110fx82f', 'restricted'),
(154, 'Desert Eagle', 'Наследие', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5_MeKyPDJYcxX9BK5ZTvQs8QzTDSIz78tma9qz87ITJBLss4WVNLctOdBNTMmFUqKDYg2r7x5p1KcJKJ2JpirqjCnvb2lbXke_5Ctaz-I-vJK7/110fx82f', 'restricted'),
(155, 'Desert Eagle', 'Нага', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5_MeKyPDJYcxX9BaVfW_k_ywbtDiYN5cJnXcK7ueNXeQnrsITOO7IrN9oeTMmDWvKDYV30609r1KVfLZ3d8iu6iyTpPzwUG028QhzObxo/110fx82f', 'restricted'),
(156, 'Desert Eagle', 'Пилот', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgposr-kLAtl7PLZTi1L4NOiq4SOlvD4NoTck29Y_cg_3bzHptWg2AK1qEs4NmqhcYeWelc6ZFiD-1G6wejmh8K9u5nIz3Zhvj5iuyh1BFVufw/110fx82f', 'restricted'),
(157, 'Desert Eagle', 'Буря на закате 壱', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgposr-kLAtl7PLFTi5H7c-im5KGqPX4PLTVqWZU7Mxkh6eYoNug0Qzn80Y9ZTyncNPAJlJvMF2EqFi6wOa-gpC47pmYz3Zk6XF2-z-DyOzAiWG4/110fx82f', 'restricted'),
(158, 'Desert Eagle', 'Буря на закате 弐', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgposr-kLAtl7PLFTi5H7c-im5KGqOT8PLHeqWNU6dNoxLHEoY6n2VXiqEdpazulddOWIAdtZFGF8lnol7_uh5K_upybnHs3vCc8pSGKn-HkWew/110fx82f', 'restricted');
INSERT INTO `items` (`id`, `weapon`, `name`, `image`, `type`) VALUES
(159, 'Dual Berettas', 'Синий кварц', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpos7asPwJf0v73ci9b_8i3mIyCjfLwDLndg25u5cB1g_zMu9qjjVDlrRBqamzzdYOXc1Q-NVHX_QDokOq6jcO5tZ7JzSEwsnFw4nzD30vgZ_ZT_P4/110fx82f', 'restricted'),
(160, 'Dual Berettas', 'Подрыв', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpos7asPwJfwPz3ZTxM69mknY6OqP_xMq3I2DkG65Vy0rqQ9Imi2A3kqhE5ZG36doPGclQ8M1_V_wLql-q-gZe7uMvXiSw0fugahP8/110fx82f', 'restricted'),
(161, 'Dual Berettas', 'Дуэлист', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpos7asPwJf1OD3fDJW5Nmkq4-NqOfxMqndqW5d4dF0teTE8YXghRq1-UM5Nj_yIYKQewFrY1rR_1i-x-u61MXouMmdzHc37yEmsH7ayRO3n1gSOdhIizzL/110fx82f', 'restricted'),
(162, 'Dual Berettas', 'Гемоглобин', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5-OOqhNQhmfzvNErNXWuwF5g3oNio37M52WZm0p-sFKw_otYXCYuZ9NdgdFpSDDKfQNFuv4ks40qdfL5SLoii91HzrJC5UDP3XCmZI/110fx82f', 'restricted'),
(163, 'Dual Berettas', 'Причал', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5-OOqhNQhvazvPALJXUvQF5x3iGy4h7fhuUdO_4rZIeQ7u5oWVYLl6N45IH8LRCaOAYVj66EM7hakIK5LcpXjt2yrgPDoKDg2rpDxV1ZKEFw/110fx82f', 'restricted'),
(164, 'Dual Berettas', 'Городской шок', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5-OOqhNQhkZzvHDalKWeYF4RruCCkh_MhxWei78r8PPFHxt4GUYbR-OdlJGcSEW_KEZQH97Bk91aFfLpaL8S672i7vPm4LWEK__HVExrF4_jmUEw/110fx82f', 'restricted'),
(165, 'FAMAS', 'Нейронная сеть', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz59Ne60IwhmfzvEAK1fT8o--xz_Nio37M52WZm0pL1TfV_rt4vBM-QqM9AdG5TUUv7TMwr07xgx1KRdKcPboCnq2Cm4JC5UDCYRP3AS/110fx82f', 'restricted'),
(166, 'FAMAS', 'Пульс', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz59Ne60IwhkZzvEAK1fT8oq4QT_DBg_7cNqQdr4oe9RcA_rtoOSZrgpOdFJScLZD6WCYQ35uUNs06RbLMTbo3jpji28OnBKBUTGBg33zQ/110fx82f', 'restricted'),
(167, 'FAMAS', 'Сержант', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz59Ne60IwhmfDvEAK1fT8op8xzTBCI24dJuGo-3prgHLAi6tofPYrMrM95KHsnSXaKOYQurvkw_g6NYeZ3dqCnq3n73ejBdWdGQEdI/110fx82f', 'restricted'),
(168, 'FAMAS', 'Истребитель Spitfire', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgposLuoKhRfwOP3Yi1L-Nq_hoW0kfb5MqjulHlQ_spOguzA45W73wTnqkpqNm3wJYeccFU2YVmG8lfrkO3mg5K5uJTAmiNgvSZ2sHrczAv330-a2RqTWQ/110fx82f', 'restricted'),
(169, 'FAMAS', 'Стикс', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgposLuoKhRf0v73fyhB4Nm3hr-YnOL4P6iDqW1Q5cRiteHE9JrsxgWx-ERkZ2r0cdDHd1M_MF_R-FS6l7-81MK0vZzLyyRi7HMjsyrUyxCpwUYbBN7dJDM/110fx82f', 'restricted'),
(170, 'Five-SeveN', 'Поверхностная закалка', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz59PfWwIzJxdwr9ALFhU_w28QzTBCI24dJuGoXhpbhQe1jmvNaSZ7AlOI5KGZTZXaOBZACp401q0_IJLJGNoS_m23z3ejBdcR0OBt0/110fx82f', 'restricted'),
(171, 'Five-SeveN', 'Медная галактика', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz59PfWwIzJxdwr9AK1hX_oq5A3-NiE-7cRoR-i78r8PPFHx4IeTN-F5Y9hPS5TWX_DQNQz46x9q1qJaesOPqCLm2Sy_aDoNWBa-_XVExrHOIgi-bw/110fx82f', 'restricted'),
(172, 'Five-SeveN', 'Неоновое кимоно', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgposLOzLhRlxfbGTjVb09e_mY-FmMjwOrrcmWVV-_p8j-3I4IG70AHk-xZqMm2iItWQcgc-MwzT_Fm3xubqjJe87p7KzydmvyMg4H3ayQv3309niA2tcQ/110fx82f', 'restricted'),
(173, 'G3SG1', 'Хронос', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgposem2LFZf0Ob3cjVQ49K5h7-MxOTzYoTck29Y_cg_3-3A8Nqj2VLl_Bc4YT32IIWRcQJsaV_Y-1Lskr2-15G4up6bm3Ayuz5iuyjiZUxvZw/110fx82f', 'restricted'),
(174, 'Galil AR', 'Цербер', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgposbupIgthwczLZAJB6c60hpWYqPD1P7LdqWNU6dNoxLGWoI2liwG18hZsZW2hcY6cIFNvMAvS_Ffrye-6h8e4uJqbwHpnsyA8pSGK_cSp9dA/110fx82f', 'restricted'),
(175, 'Galil AR', 'Пиксельный камуфляж «Ржавчина»', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz58Ne-8PDZ1TQzbPqRaTPQuywf-CCk17fhuUdO_4rZIKFm-sdTBOrIkNtEYF5HZWKCDNQ-v6k0_hPRcK5eB9iLu2X_oODpcXw2rpDwDkZbPgw/110fx82f', 'restricted'),
(176, 'Glock-18', 'Латунь', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgposbaqKAxf0uL3cy9D_8-JnIWKge66YOLTlT8IvJcgibjEoYn331Cx-kI4N2CgJdKXIQJvYV2Eq1S3k-281oj84sq0SysHHg/110fx82f', 'restricted'),
(177, 'Glock-18', 'Татуировка дракона', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz58OOy2OwhmfzvGE6FZU_sF8wTjCiwN5M5kXMP48u9UKAvt5YPPYrIuM9EfFsnSX_GFNAH160wxiKhafsOKp3noiyXtM3BKBUQTQ9jo2g/110fx82f', 'restricted'),
(178, 'Glock-18', 'Градиент', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgposbaqKAxf0vL3dzxG6eO6nYeDg7miYr7VlWgHscN32LyT8dmm31XgrxdtZzvzJYDGIFM2Y16D-FfvlOu9m9bi66Oq9HyE/110fx82f', 'restricted'),
(179, 'Glock-18', 'Жернов', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz58OOy2OwhmYzvFDa9dV8o5-wHgDCMN5cJnXcK7ue1Rfwi7s9DGMuQkNt5JH8eCC_WPMwr07ExpgKJbe8CMoCLt3Su_MmkUG028jFNPF2s/110fx82f', 'restricted'),
(180, 'Glock-18', 'Ржавая сталь', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz58OOy2OwhmfzvGBbBfSPE_-hvpNjQ75NFmRui78r8PPFHx4ouUMOMoOd8fG5HTC6eGZVyr6E9r1aYLeZKN83i9iyvoOW8LChK--nVExrEch3NJCQ/110fx82f', 'restricted'),
(181, 'M4A1-S', 'Василиск', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz52YOLkDyRufgHMAqVMY_QrywW4CHYh18ViR966_qgNFlG64NuDbq4pMIsZS8LRDPfXZw2p6kJqgqUMJ8GN9Xzq3CnqOjgLWRDiqDoBkeSCpPI11RIKMHez/110fx82f', 'restricted'),
(182, 'M4A1-S', 'Чистая вода', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz52YOLkDyRufgHMAqVMY_0jywfvDCY818VxVcG5yLYDLVWq6ZyTO7l5YtFJTsGDW_KEbgj-6R0x06RfLsGKo37niCm6OG8JXEDs_zkEhqbZ7bA1w3g4/110fx82f', 'restricted'),
(183, 'M4A1-S', 'Темная вода', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz52YOLkDyRufgHMAqVMY_Q3yxLpCzUz18NiRtyJ-r4CIEmyqobAZbEqOIpITsjTX_-AYVyo7hppiKVeepaMoy2-jCToPTwIWBDu-2ga2LjQk56IhGg/110fx82f', 'restricted'),
(184, 'M4A1-S', 'Падение Икара', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpou-6kejhz2v_Nfz5H_uO-jb-ClPbmJqjummJW4NE_3ujHpY2sigXl-UFoZGj7JYCXdgQ4YVnQ-1Lqxenn1MLpuszJz3tk6D5iuyjCqdNpmA/110fx82f', 'restricted'),
(185, 'M4A1-S', 'Нитро', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpou-6kejhz2v_Nfz5H_uOlm7-Ehfb6NL7ul2hS7ctlmdbJ8I3jkRriqktuMD_0IoDDegNsMlmCrFm3wO_t08K4tZ_PzHY27HYr4HrUnEewn1gSObfcx9Ky/110fx82f', 'restricted'),
(186, 'AK-47', 'Изумрудные завитки', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpot7HxfDhjxszYeDNR-M6_hIW0lvygZITZk2pH8Yt33byV8N-ii1Dn8kVqMWv0IYGQIQ47YQvS_FG4k-i6h8Tq6pjBznBqpGB8snmEYrAC/110fx82f', 'restricted'),
(187, 'M4A4', 'Злобный дайме', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz52YOLkDzRyTQmWAPRhWeMz-DfoCC4_8chcWdKy_q4LZ1jqtYDPN7coY4oaTsXZCfeCMgiv7h0-h_VfKJOMpyvv3SrpPG9cCBb1ujVTu8qYAl4/110fx82f', 'restricted'),
(188, 'M4A4', 'Грифон', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz52YOLkDzRyTQmWAPRhW-cz8g7lBxg_7cNqQdr4peoHLVnqt4vGNOYvYdkYTsGBU_CEMAqr70w_haRcJpOIoS7siS26bHBKBUTk3x72PQ/110fx82f', 'restricted'),
(189, 'M4A4', 'Современный охотник', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpou-6kejhoyszAZDNW6c6JmY-PkuX6DLbUkmJE5Ysh3O_H94_wiwSxrxZpMDjzdtWVIwU6NwzUqAW7wOnpgJG_vM-fwCFgpGB8sg8KZlD2/110fx82f', 'restricted'),
(190, 'M4A4', 'Зірка', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz52YOLkDyR3TRfWALJhXuc74gfTBCI24dJuGoWz9OwHf165vdTEMbd4Y9hMGsHYX6DTNFypvks7hKhULJCPqSq83373ejBd8PX-PnY/110fx82f', 'restricted'),
(191, 'MAC-10', 'Гравировка', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz52NeDkYAhmYzvHFaNWWfEF-QnvWHcN6tViQtiJ-r4CIEmyqobBZ7AsYtxEHpLXUvXUMlqv40hsgKBVKpaJp37s1SXqOW9fUxvvqz4a2LjQFTyyP9g/110fx82f', 'restricted'),
(192, 'MAC-10', 'Жар', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz52NeDkYAhkZzvPAKMPDMoo8QzkBjMN5cJnXcK7ue0DKg7p4NHAMLh9OYoaF8SEUqCHNQ_-60tph_JVLZCOoCu-iCXpOzgUG028bvFxRZc/110fx82f', 'restricted'),
(193, 'MAC-10', 'Малахит', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz52NeDkYAhmfzvPAKMPDMo39QTtCi87_MJcWdKy_q4LZw_otYDAO7J6MN5JS5LZC_ePNwj1vkg9iaNbfJXfpn6-i3noaDoDU0D1ujVTAllEXO4/110fx82f', 'restricted'),
(194, 'MAC-10', 'Обгорание', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz52NeDkYAhkZzvJDrJLTOEF-Q3oADI_psJiBIPl8-NefV-7vIDCN7B_No1FGsSDXqPTZwn5u0hrg6RaecSN9ijxnXO--rrcKhM/110fx82f', 'restricted'),
(195, 'MAG-7', 'Бульдозер', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpou7uifDhz3MzRdDFO48uJnIWKge66ZeuHzjMEu8Yk3LyUo4mijgDn_RVrZzumddPGcVJoZAzQr1jsw-65hoj84sp82E9QXw/110fx82f', 'restricted'),
(196, 'MAG-7', 'Жар', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz52NeTiDzRyTQnDBvdhTvA-_Af4Nio37M52WZnhrulQLF7qsNHPNLN-NNseGcTVCPaAM1ipuUg-iaUOfpXY9Hy-1S7hJC5UDBPIkqli/110fx82f', 'restricted'),
(197, 'MP7', 'Океанская пена', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz52JLSKMTpYfRfRCKZHY_c24Q3TBS414NMtVoW1p-xRKFq8toGSZ-IoONtEHsbSU_eDYw786UM5hvUPeZWA9njn2TOpZDn0cNqwCg/110fx82f', 'restricted'),
(198, 'MP9', 'Бульдозер', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpou6r8FBRv7OrNfTFN--O-kYGdjrmnNb7Qkm4G7cZ3i7nH8I-n3gXl-0duZDqiJdfDelVqZVzW_1Xowe_om9bi66Howf2G/110fx82f', 'restricted'),
(199, 'MP9', 'Гипнотический', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz52JLqKMTZYZAHQFalZU8o2_Q_kHWlmucY0BY7j8usHf16-sIaVMeZ_NtwYGcSCD6OGYAr47k880qEOKpOAvmqxipekreSh/110fx82f', 'restricted'),
(200, 'MP9', 'Железная роза', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz52JLqKMTpYZgzNE65HY-c15w3TBDdr18pmUN6j-vVTKFm-sdDHYrl4YYxLHJPSU_HUYV-ouEg5haBdfcOJoHjt3yXgbm1fRVO1rYQPbXM8/110fx82f', 'restricted'),
(201, 'MP9', 'Рубиновый ядовитый дротик', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz52JLqKMTpYfxSbPq5XSOc18w3iNio37M52WZni9upfKAnvtISUMLl-ZoweGJHRUqDQYl307h4_gfJUKZGAoCPsjyrvJC5UDGRwp09x/110fx82f', 'restricted'),
(202, 'Negev', 'Болтун', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz51MeSwJghkZzvMBKdbSso7-gblAS4-6dNsRui78r8PPFHx4YvCZrQuY45MS8eFXqCBb1v06E0x1KNUKJzapn_siynsOz8JCRvorHVExrHkFCv-Qg/110fx82f', 'restricted'),
(203, 'Nova', 'Графит', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz51O_W0DzZqTQfQFK1OUPAF-AHrATN87ZM1Vta0p78FcVrn4tfHM-IkM4tNF5WEU6CPMgD07k47haNaJ5TY9jSvg3rep14R3g/110fx82f', 'restricted'),
(204, 'Nova', 'Карп кои', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz51O_W0DzRyTQrNF6FhV_ozywXpDS4n5YlnBY_gpe5eel674oqUMrQtNt5ITsDZDv-EY1-v40g-g_NfKpyOpCu8w223bZK48-bE/110fx82f', 'restricted'),
(205, 'Nova', 'Восходящий череп', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz51O_W0DzRyTRfJFKxSY_s14gnTBCI24dJuGoDgp75ULV_mt9PCNrYqZN8fHJLZCf6HZwr16R0w1qZZeseLpSjs1Cv3ejBd9k_1wRI/110fx82f', 'restricted'),
(206, 'P2000', 'Янтарный градиент', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovrG1eVcwg8zJcAJE7dizq42Og_b4P7LSqWZU7Mxkh6fErN_22VbkqRBrZmn3cIOTewdqZAqE8lm_xO7ngsW_vM6YzndjuSEm-z-DyNwC_Q0C/110fx82f', 'restricted'),
(207, 'P2000', 'Пистолет', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5zP_PnYGc3TQXTPrAMDKVqywrjBioN5cJnXcK7uetfeAjn4oPGOrUpYd9PGcDZWfSFMFj-4hltgvBYLsPdo3_o3i-4P24UG028RSnmXhk/110fx82f', 'restricted'),
(208, 'P2000', 'Скорпион', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovrG1eVcwg8zJfAJR79OkhImEmcjkYeuBxlRd4cJ5nqeZo9-m21Xh8kY-MG-gIoeWe1c6NFDU_VK6lOi6156078nKyiZg7yEm-z-DyIv3UiOT/110fx82f', 'restricted'),
(209, 'P250', 'Ядерная угроза', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpopujwezhzw8zGZDZH_8iknZCOqPDmNr7fqWNU6dNoxLmQrdX031DhrRY5YGmgLNDBIQU5NFDT_gS-ybi5gp_uu5iayyc2uyM8pSGKb7DLmmE/110fx82f', 'restricted'),
(210, 'P250', 'Пятно', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5rZrblDyR3TRfSDaFNVMoqpl28Nio37M52WZnnrusHLwXmt9TOZbJ6ZNgfGcHVXaKGMAD06E880qRYe8OBoiO9jCXtJC5UDMPL7CEh/110fx82f', 'restricted'),
(211, 'P250', 'Сверхновая', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5rZrblDzRyTQbLFbRbTuYt8Q34Nio37M52WZngo-oCcQ68sdeTZbMvZItIH8DVWaWBN1j_6Uw40fcOe5Hb9X662irvJC5UDGuCsqml/110fx82f', 'restricted'),
(212, 'P90', 'Слепое пятно', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5rbbOKOC5YfwvGErBRSOYF-Q3oADI_ppU0V9Hlob9fL1jv4oLBOuUpMoxEScmCDKPVYl377ho40_MPK53bqC7xnXO-KDeFai8/110fx82f', 'restricted'),
(213, 'P90', 'Вирус', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5rbbOKOC5YaAvPA6lbY_g_8AH5BGlnvpI7DNPvpb0FfATnvNfONbB9M9AdH8WFC_eCZA-ov0Jsh6MLKcGLvmqxikSIwJOz/110fx82f', 'restricted'),
(214, 'ПП-19 Бизон', 'Антиквариат', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz55Pfm6PghkZzvACLpRUso7-hzlGDI318pmUN6j-vUEcA-5stTEZrB-ZdhIScKDWKeObl37v0w-0qJVLZKApH7s3yi_a20KRVO1rYZMCV1z/110fx82f', 'restricted'),
(215, 'ПП-19 Бизон', 'Синяя струя', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz55Pfm6PghvazvREaxfSOE_5jfhDCM7_cotAtHj9LhXfl7st4HGM7AkN9tFHcDUWqfQYg717ko606ddLpKP9iK5jjOpZDl8T8K0ZQ/110fx82f', 'restricted'),
(216, 'ПП-19 Бизон', 'Осирис', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz55Pfm6PghkZzvACLpRUrg15wH-ADQN5cJnXcK7ub4CLAvs54LHZrMtONlOF8bTC6DSZQj67B5u0qgPfsGAoCPs2C68PWwUG028RBKyq3A/110fx82f', 'restricted'),
(217, 'SCAR-20', 'Изумруд', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpopbmkOVUw7PLGTjhP6c63mIS0leX1JbTummJW4NE_2-_F8Y322gKw_UFkZ232dtLGew47Zw3Q_gO7lOe8g5_quZ_PyHBj6D5iuyhXhSRN_w/110fx82f', 'restricted'),
(218, 'SG 553', 'Бульдозер', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpopb3wflFfwPz3aDhO4NOhq4iOluHtfbqClG0JvMQp2rmVod_z3w3n8hE5YGmncoSddgE9aV6ErFS3kufvgMCi_MOeujbJjuM/110fx82f', 'restricted'),
(219, 'SG 553', 'Пульс', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5oM7bgZghkZzvRBvULD8oq4QT_DBg_7cNqQdr4ou5Sf1jotNDENbcrYdlJGcnRUvKEYgj76Eoxg6ZVJ8GJ9iO92HjgbnBKBUT2KflBvA/110fx82f', 'restricted'),
(220, 'Sawed-Off', 'Разбойник', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5oNfSwNDhhdDvDEJ9NXeI_8AfqDxgw5MZgX9C5-785JFm77cebLbQqZo5FG5bYD_fSZw7-7h5t1PBUKsbYoHy62SnuPG5eCkW_q2kMn-WZ-uw8HSt3R4w/110fx82f', 'restricted'),
(221, 'Sawed-Off', 'Пиксельный камуфляж «Ржавчина»', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5oNfSwNDhhdDvKGJ9aWOU74DfjGyY878JcWdKy_q4LZwzntYfFMuIlZdpJGMKCU_aFNFysuUs_hvULJpGM837t1X_oPjoKDhH1ujVTjYnobTE/110fx82f', 'restricted'),
(222, 'Sawed-Off', 'Безмятежность', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5oNfSwNDhhdDvBFJ9NXeI_8AfqDxg27dFia9qz87ITJBK-vNfHMuIuMNxOTsbTXKLVYlz-60g5g6VVJ8OMoX7n2yq6PGdbCBvp5CtazwQ1yAdJ/110fx82f', 'restricted'),
(223, 'Tec-9', 'Ядерная угроза', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpoor-mcjhzw8zGZDZH_8iknZCOqPDmNr7fqX9U65xOguzA45W7ilfm_EVqYWvyIdSRJ1Q_YVzT8lC6wu3vjZW-uc-YwHUwvHZ05Hvaygv330_9fYlOZg/110fx82f', 'restricted'),
(224, 'Tec-9', 'Красный кварц', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpoor-mcjhh3szLYyRR-N26mImRkvPLPr7Vn35cpscl2OuZrI323ACyrxVrMmuhLdKQcFA3aF3Y-ge7kui608K4up3AnCF9-n51wa82sVI/110fx82f', 'restricted'),
(225, 'Tec-9', 'Частица титана', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5vMeDsDzZqTQLOFLRbWMou8Qu1Nio37M52WZmwrroAcA_p4IfGM-Z5M9pNFpLYXaSCZVj460JsifAML8GJ8S2623y6JC5UDGBUM9Rt/110fx82f', 'restricted'),
(226, 'UMP-45', 'Гран-при', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5uOfPhZQhmfzvXDLBhTvQ58RrTBCI24dJuGoWy9r8FcQTm4ofPN-MkZdtMFsmBC_DVb1v0uE8-0fNVKcTdpiLv33z3ejBdHbdz-Ek/110fx82f', 'restricted'),
(227, 'USP-S', 'Темная вода', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5uJ_OKIz5rdwrBBLJhXfgF7g3uGyYN7MZxX-i78r8PPFHx54KQNuQlZYxFHsjWWfSFYQ2pvEtsgKZfKsOKp3y6iCrsaz1cWRfj_XVExrFpTopKsQ/110fx82f', 'restricted'),
(228, 'USP-S', 'Страж', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5uJ_OKIz5rdwrBBLJhX-AF4Rv8NiI-7cBiWsOJ-r4CIEmyqtbDM-MpOY4ZTsaFW6DXZgr17kxtgKgIfpWLpn--i37gaGdbX0Du8joa2LjQyDAKNXM/110fx82f', 'restricted'),
(229, 'USP-S', 'Камуфляж', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5uJ_OKIz5rdwrBBLJhVOwF5wHpDiIN6tViQtiJ-r4CIEmyqoXGNeR6Zd9KGciDDKKCMg70vx1qh_RVe8CBpSPtiyXgbmgLXBK9qDga2LjQb-yOzwQ/110fx82f', 'restricted'),
(230, 'USP-S', 'Следы асфальта', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpoo6m1FBRp3_bGcjhQ09-jq5WYh8jnMrXVhmpB7dd0jtbJ8I3jkRrk-kA6amCgd9edcg9qaA7YrgLrxeu60JG87prMy3dquCB2tHaJzkHmn1gSOSGslERB/110fx82f', 'restricted'),
(231, 'XM1014', 'Райский страж', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5jObLlYWNYcRH9Ga0PDKRuywDpCDE35vhkQdak84QLLFi28d_YMrkqY4sfSZODDqOCNFv6vB1r0vcIJ5Ha8Xnu2SW4OD8PCkHsrGxSy_jH5OWXyQxUDA/110fx82f', 'restricted'),
(232, 'M4A1-S', 'Страж', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz52YOLkDyRufgHMAqVMY_YvywW4CHZ_-_hmWNKx9rUSFlG64NuDbq4qN4seF8jZWvXSYgqru0g-hKlfJpKNp3npiym6aDtZUxa_rmIMmeXWpPI11YiABWgk/110fx82f', 'classified'),
(233, 'AK-47', 'Картель', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz56P7fiDzZ2TQXJVfdhX_Qo4A3gNio37M52WZmz9e0ALAjttYKVN7QvZtxEG8nXCPXSYwD970huiKgLK8Daoim-ji7oJC5UDGS-VkfD/110fx82f', 'classified'),
(234, 'AK-47', 'Гидропоника', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpot7HxfDhh3szKcDBA49OJnpWFkPvxDLfYkWNFppwpie2Rp9_w0VDm-UNrMj30IoPHdAY-M1rY-1K7w7291pO8vJTJzHN9-n51xLwwH8g/110fx82f', 'classified'),
(235, 'AK-47', 'Путешественник', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpot7HxfDhjxszfdDFO08iklZaOm_LwDLrawjxu5Mx2gv2PotytiQHnqhBoZGqnI9XBcgQ-Yl_Y_Vfvyey9g8S4753JzSA1s3Eh5GGdwUIoc5a5cw/110fx82f', 'classified'),
(236, 'AK-47', 'Красный глянец', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz56P7fiDz9-TQXJVfdSXfgF-Q3oADI_ppdnDdK18e4CLQ_v5YeQMuYkMtEdHpLYWP7XMw6v60xpiKhfJpWBpCrxnXO-X5QNkco/110fx82f', 'classified'),
(237, 'AK-47', 'Красная линия', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz56P7fiDzRyTQXJVfdhX_o45gnTBCI24dJuGtay8-MEew_n4YCTNOMuNNhLF8GDU6KDNFipvEg-gfRfLp2PpXi82Hz3ejBdOj7r2Ww/110fx82f', 'classified'),
(238, 'AUG', 'Бенгальский тигр', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz56IeSKOC5YZg3FBLJhUfA-_R3hR3JisMMwVoXvpeNWKl-6tYvAYOQoMNwdSZbYDvCEb1-pu0850qVcep2X4HS4l-v7zTM/110fx82f', 'classified'),
(239, 'AWP', 'БАХ', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz56I_OKOC5YcAjDDJ9NVfgq-A3TBCI24dJuGoPlo-JUeQS84NGSMuQvOdBISpKBU6TUMwqruxo50fdcfcaAqHnpj3z3ejBdzQVSDJ4/110fx82f', 'classified'),
(240, 'AWP', 'Кортисейра', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz56I_OKMyJYdAXUBKxfY_Qt5DfhDCM7_cotA4Lhr7lSLQ_tt4GVYrl4MY1IGJOGX_fTYF-p6E1u0qJVL5GB8S-9jDOpZDknDIyvzQ/110fx82f', 'classified'),
(241, 'AWP', 'Электрический улей', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz56I_OKOC5Yeg3UBJ9TWfEz4QWiUXJl6cY2UNLl9e4HcVm-tobFOuIvMNBPF8TRDv6DZ1v84ks91aJae4vJ_n0-dvDrog/110fx82f', 'classified'),
(242, 'AWP', 'Графит', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz56I_OKMTpYcRbXDLBSWco45gn6Bhg-4cBrQJnj8e5fLVnttoWSMbgsZtsfHJLTU6DXMw6o7kJp06BZLJaKqHm-2H_rJC5UDIW53w6s/110fx82f', 'classified'),
(243, 'AWP', 'Красная линия', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz56I_OKMyJYcxPSPqNRXuc7ywXpDS4n5Yk1DIHv9OxRKg7psNeUNbQrNI5ETsjQC6OEZFqru0o61fBbJpDfqC7pw223bdl877LM/110fx82f', 'classified'),
(244, 'CZ75-Auto', 'Новая фуксия', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz54LrTgMQhmfzvEFLNdVPw7ywXpDS4n5YlhUICw9uJee1rr54TAMLd6YtBLG8bVX_CEZlz46B09gqdaJ5TcoSrpw223bRV4bK-f/110fx82f', 'classified'),
(245, 'CZ75-Auto', 'Желтый жакет', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz54LrTgMQhkZzvBG_cLXco5_An_HS4o7dVcWdKy_q4LZw69vdTBYLAkZopJHJSDCPGGZw2puxk9ifIJLJbfpSO61Hm_PTtfChb1ujVTRKDBiB4/110fx82f', 'classified'),
(246, 'Desert Eagle', 'Ржавый кобальт', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5_MeKyPDJYcwn9BaROXeE-8Qb_DBgi7cZgW9S9yLYDLVWq6ZyVNbklN9hETsOCDPDSbw_46Bo_hKAJKZDbpn-61C_gP2wNXxru-G0MhqbZ7X5MJO8p/110fx82f', 'classified'),
(247, 'Desert Eagle', 'Заговор', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5_MeKyPDJYcRH9BaVfW_k_ywn5GyIn-_huUdO_4rZIfQ69sYOQZbR-Mt4aFsHRUv-DMFiu6Ug9h_JceZOP8X683HzvPm1eDw2rpDxuwu_X-w/110fx82f', 'classified'),
(248, 'Desert Eagle', 'Гипнотический', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5_MeKyPDJYcwX9F6VMSPw9-zfgACA6_Ik7Adbnob5SK1q9vNDHYOMqM9FPTJHVDvbVYF3-u0pthvRbL5eKoyjsw223bbzVMlL4/110fx82f', 'classified'),
(249, 'FAMAS', 'Остаточное изображение', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz59Ne60IwhkZzvAE69VWfsF5An4ARg06cpiR-i78r8PPFHx5obGYLMkMNpESZGGXf7TZF-p7UNrh_BVfpDfqS_njivqMzsNXRS4-nVExrHa0gpYAg/110fx82f', 'classified'),
(250, 'FAMAS', 'Джинн', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz59Ne60IwhmYzvEAK1fT8ow_QbiNio37M52WZnmo71ScQXrtNfEYuIrNY0ZS8TWXKeEZ1qo70k60aQLKZSLpiK53STvJC5UDDELs8ER/110fx82f', 'classified'),
(251, 'Five-SeveN', 'Птичьи игры', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz59PfWwIzJxdwr9ALFhCaIF8g3tHS83-tRcWdKy_q4LZ168tIqVN-QpYdEYGsGEX_LVZV_8vho51qJUL5SK83_tiHnvOG4IW0D1ujVToCw2k7Y/110fx82f', 'classified'),
(252, 'Five-SeveN', 'Обезьянье дело', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz59PfWwIzJxdwr9ArVhWvws8RvpHyI818ViWta49oQLLFi28d_YYbB-N9tJHpGBXvKAYV-p7koxh_RUepyBqH662CS7bj1cWEHjrD1WmvjH5OXENuHjvw/110fx82f', 'classified'),
(253, 'Galil AR', 'Эко', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz58Ne-8PDZ1TQfXPqdfUPw2yw3vBhg_7cNqQdr4or4EeA_q4ICXZrd4Mo4fGJXXCKKGMFv07kMxgvJVL5WIpi3q3y3qb3BKBUS1IsSPCQ/110fx82f', 'classified'),
(254, 'Glock-18', 'Сумеречная галактика', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgposbaqKAxf0v73cCxX7eOwmIWInOTLP7LWnn8f7ZJ13rjC8NjxilLkqBduaj_ycdSWJldvZAuF-gPsxuvs1MTovZTJymwj5Hd3abH-_Q/110fx82f', 'classified'),
(255, 'Glock-18', 'Водяной', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz58OOy2OwhkZzvFDa9dV7g2_Rn5DDQx7cl3a9qz87ITJBLmsoHEYbAtMNEeF8iBU_CFNVqrv09sgqJfKsTbqCu5iyrob2deCBC65Ctazz387ae9/110fx82f', 'classified'),
(256, 'M4A1-S', 'Атомный сплав', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz52YOLkDyRufgHMAqVMY_Q3ywW4CHZ_-_hiWNu57oQJO12x49epbuV4aZ0RAcLWX6OGZA2puB1pgqUMLpWBoC671XngOD1ZCEG_rmMAkbDWvORp1mcIAy_njWgGDWs/110fx82f', 'classified'),
(257, 'AK-47', 'Поверхностная закалка', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz56P7fiDzZ2TQvLDaVaY_g_8AH5BGljvJI2BI7noOlSKAW9vYGVNuUpNIlJTMnRXaLXYw6s40w6iaJfKsTYvmqxirPZAJU6/110fx82f', 'classified'),
(258, 'M4A1-S', 'Хот-род', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpou-6kejhz2v_Nfz5H_uO3mr-ZkvPLPu_Qx3hu5Mx2gv2P8I-g0VHtqUNlNmimLdCRdFdoYFCErwC4xLu6jJbpuc-dnydq73Jw5GGdwULhEbgmIQ/110fx82f', 'classified'),
(259, 'M4A1-S', 'Рыцарь', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpou-6kejhz2v_Nfz5H_uO3mb-GkuP1P6jummJW4NE_2-zHpN2g3Vfj-kFvZ2ChJtfEJ1M2YF_Sq1LqkOm515fpup-cyHFluD5iuyj8q1fJzg/110fx82f', 'classified'),
(260, 'M4A1-S', 'Шедевр', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpou-6kejhz2v_Nfz5H_uO1gb-Gw_alfqjuhWJd7ctyj9bM8Ij8nVn6_ERkNT_0IoXHIQI9M1CE_1G3ku6605K-us7InyNhvnQnt37VnkOx1QYMMLJOVeO32Q/110fx82f', 'classified'),
(261, 'M4A4', 'Посейдон', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpou-6kejhjxszYfi5H5di5mr-GkvP9JrafwDtV7cAl2uiYpoqt3Q3n-kNkZWCmINTHe1I_YgrV-wS8xb-91p_vuoOJlyUlgXdlZw/110fx82f', 'classified'),
(262, 'M4A4', '龍王 (Король драконов)', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz52YOLkDzRyTQmWAPRhXfs58Rv4GyY-18pmUN6j-vUAelnp4oqQMOZ5MN9IHJbXWvDUblys7k0x1KRULJCO9n68iy3gOzheRVO1rWyhmNc8/110fx82f', 'classified'),
(263, 'MP7', 'Враг', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpou6ryFBRv7OTAeClH48miq4iOluHtfeOCxToIupAgj7qUrd-kigXl_UU_ZW77do6UdAY8YluDqAe9wee-jJWi_MOexHMtiag/110fx82f', 'classified'),
(264, 'Nova', 'Антиквариат', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz51O_W0DzRyTQrNF6FhXfsu_Rn5DBg_7cNqQdr4rupWfFq6t9bFNeZ4ZNlIHMSEXfLXZV2v7U1t0aFeLpLYoH-53iy9OHBKBURi3EYcOg/110fx82f', 'classified'),
(265, 'Nova', 'Расцветающая ветка', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz51O_W0DzRyTRfSE6lQW8o0-x7tNio37M52WZnvoOlSKwm9soTANeF_YtBOGZGGDqSCZgv8uBow1aIIfJGJqXju2X64JC5UDB-VqG4m/110fx82f', 'classified'),
(266, 'P2000', 'Кортисейра', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5zP_PnYGc3TQfXPqZfSvA29Tf8W3diuPhuUdO_4rZIKw3o54fBYLcoYt8YHJGFWfWAMgz1u0o_gvVaepeP9njo3y_hPmhfUw2rpDzTyaClDQ/110fx82f', 'classified'),
(267, 'P2000', 'Океанская пена', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5zP_PnYGc3TQXPPq9NT_w87TfuBTI319cxBIfmyLkUKEqw296fZOhoLtFNScLSX_CFY1_6v09pialbfZCI9Srmj3-4O24MCELtq29WzuHT6OB1wjFB2Nmb0Uc/110fx82f', 'classified'),
(268, 'P250', 'Картель', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5rZrblDzZ2TRSQVPBhX_Qo4A3gNio37M52WZmzpOpRe1rttNeTOuEkMdwdHcbXCfbXZAuv6x87ifJYJsGJpSLri37hJC5UDK03rOoN/110fx82f', 'classified'),
(269, 'P250', 'Франклин', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpopujwezhjxszFfjNH9eO7kYSCgvq6Z-mHwjIFu8Yl3-3Hotr03QC28ktkYmGnIoXAdARoZVzZ_VW7yeu7jIj84sqiLuLNUw/110fx82f', 'classified'),
(270, 'P250', 'Роспись', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5rZrblDzRyTRSQVPBhTvA8_QbpDRg_7cNqQdr4o-lQLQTsvILFO7EoNY5ITsbRDveGMAj460Jsgqlce53bqSnp2369bHBKBURYOo6ZcQ/110fx82f', 'classified'),
(271, 'P250', 'Покойник', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5rZrblDzRyTRSQVPBhUfQ08AngCBg_7cNqQdr48ukHLA3m4IaQMLYvNdxEG8ODDPLSYAj6vk0606QJepaIoCK92CztPnBKBUTWIFz05A/110fx82f', 'classified'),
(272, 'P250', 'Цвета прибоя', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5rZrblDzZqTRSQVPBhXvA78A3oNjcz4cl3a9qz87ITJBK84NfOZ7AqNNlPGsSEDqOGZwH-7EtrhqUOepOB8yy-i368bGwOWBDo5Ctaz3OtRfn1/110fx82f', 'classified'),
(273, 'P90', 'Хладнокровный', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5rbbOKMTpYYQjLFahbTsoqrVjTBS414NMtAY_l9uJWKgrpvIfOYOYsY4tOH8LVWaKEMA2s6hltgaBbJ8DY9Hi8jDOpZDlvRxYzBw/110fx82f', 'classified'),
(274, 'P90', 'Изумрудный дракон', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5rbbOKMyJYdhbDBq9QY-VjpDfuGyYk5_huUdO_4rZIeQ7q5oSTZrAsOY5OF8mCWaXVMgv_7k1ph6JUKMPY8Xzq2S-7PmlbWQ2rpDxpHIWlgA/110fx82f', 'classified'),
(275, 'P90', 'Треугольник', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5rbbOKMyJYYl2SPrRMVfI1-jfhDCM7_cotB4LjpewCcQ3m5tGTMbh9NY0aSsODC_7TZA_-uE9rh6Fee5KPoyzo1TOpZDk0vhNJlA/110fx82f', 'classified'),
(276, 'SCAR-20', 'Кардио', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5oN-KnYmdYcRH9EqNfTqdqywHiHSIg_sJtQN65-YQLLFi28d_YYON_YdtOGcLSWP6EZQn9v0ts0_JZKJaAoy7p237vOTwMDke5q2tWy_jH5OW3G4_IIA/110fx82f', 'classified'),
(277, 'SCAR-20', 'Сайрекс', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5oN-KnYmdYcRH9EqNfTso57RrpERg_7cNqQdr49ONUfV274IDDMuQrYY1JScnVW6WPY1-r6k9uiaJfesSApy7o2C3tPHBKBUQTeosiOQ/110fx82f', 'classified'),
(278, 'SCAR-20', 'Пятна от краски', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpopbmkOVUw7PvRTjVX4sizhr-Jm_buNoTBn2Va1810i__Yu96miVe180NtMDiid9eRIVM2Nw3S8wK8lOfsgMe5tcydz3NmvnMhtH7D30vgioRUu2k/110fx82f', 'classified'),
(279, 'SG 553', 'Сайрекс', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5oM7bgZghkZzvRBvULD8o57RrpERg_7cNqQdr4o-xQKAi954eSYLUsNthIHMLXX_DXYAv-7Rk5g6ELfJ2Ip3y73368MnBKBUTfd5LARA/110fx82f', 'classified'),
(280, 'USP-S', 'Кайман', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5uJ_OKIz5rdwrBBLJhX-AF_wnlBCY818pmUN6j-vVWcV7otIDGNOR6NoxJS8GDUqfSMg7160pr1qJdLMSJqSnn2y7gPGdeRVO1rT_447Kf/110fx82f', 'classified'),
(281, 'USP-S', 'Сыворотка', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5uJ_OKIz5rdwrBBLJhXfgF8QTpCjMg4cRcRtKyyLYDLVWq6ZyTM-YpON1PFpOCW_KHNQyp4xg_0vQOKJPbqHjvjnnrOThbXhfrqD0MhqbZ7Q-uebBQ/110fx82f', 'classified'),
(282, 'XM1014', 'Спокойствие', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5jObLlYWNYcRH9Ga0PDKRuywvtGy4m6dRcWdKy_q4LZ128tYbCNbIuMotJHMCEWKOEZQ6u6k1r1KBZK5fYoyu91HjsPG9ZDhP1ujVThKnnncc/110fx82f', 'classified'),
(283, 'Galil AR', 'Щелкунчик', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz58Ne-8PDZ1TQfXPqdfUPw2ywnuGyYh4chta9qz87ITJBLrs9TEO7d6MoxKGpaDU6CCMFyovhk81qdafpCJpSi9jyvhPGsCCUHi5CtazzBY6R44/110fx82f', 'covert'),
(284, 'AK-47', 'Аквамариновая месть', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz56P7fiDzRyTQXJVfdhX_ov5gnrDBgz5NNcWdKy_q4LZwm5toDOYrAuYdgYTcSEU_XQYAD84khqh6kLKsCAoy7r2nnoaGgLWhf1ujVTz27JTVE/110fx82f', 'covert'),
(285, 'AK-47', 'Ягуар', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz56P7fiDzRyTRTDD7RWWecF9QO4Xhg_7cNqQdr49esEKA7us9bHO7J-MdBLTJTSWfKGZAypuUs-iPNaKJSM8Xm7i3jqaHBKBUSMHsVe9Q/110fx82f', 'covert'),
(286, 'AK-47', 'Вулкан', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz56P7fiDzRyTQXJVfdhTuA49g3-Nio37M52WZnjpepeeQrm5YDBYOUlOIlJSsXQXv6FMA_4uEpriKFcfZ3a9irr2SjhJC5UDBM24vTE/110fx82f', 'covert'),
(287, 'AK-47', 'Пустынный повстанец', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz56P7fiDzRyTRDQCKJLSPAF9QO4Xhg_7cNqQdr4ou8Ffw-7s4GUM7IlYdAdH8bRUqSCblyv6Rg6hKcOKJSKqSq-1SrsPHBKBUSRoheuWQ/110fx82f', 'covert'),
(288, 'AUG', 'Акихабара', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpot6-iFAR17PLGeDBH092jk7-HnvD8J_XXxj8IuJIkib-VoNSi2VGx_UQ-Yzv3I4SQcVA7aAvS_FC6wru51pK1ot2XnmtK7ev7/110fx82f', 'covert'),
(289, 'AUG', 'Хамелеон', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz56IeSKMyJYcxHFPqNWXfg_-A3jByY7-sJcWdKy_q4LZwq9t4KTZ-UtZIwfHsiEWPOOM1ur705q0vMLe8OI8Svs1XvsOD8NDxD1ujVTA4wQYEk/110fx82f', 'covert'),
(290, 'AWP', 'Азимов', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz56I_OKMyJYcxPSPqFNVfg14jfhDCM7_cotUNTkp-gAKF3otIfBOuUoNdBIHMCDX_SCZF_9uR8w0fJUfpyPpC7n3jOpZDl_eS2fcg/110fx82f', 'covert'),
(291, 'Sawed-Off', 'Кракен', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5oNfSwNDhhdDvBFJ9NXeI_8AfqDxg969NsRMK754QLLFi28d_YYLQkMYxJHseDU6LVYg-u6k9u0qcMfZKPpny92yntaGcIX0bp_2lXnPjH5OVxmQ2QIw/110fx82f', 'covert'),
(292, 'AWP', 'Скоростной зверь', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz56I_OKMyJYcxPSPqhHTPAoywrpCDQm18pmUN6j-vUDeFi-4IbHNrcoNolIGMXRUvXVNwz_4khpgadefZzc9Hjmjny8bzxeRVO1rf9MwH3s/110fx82f', 'covert'),
(293, 'AWP', 'Удар молнии', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz56I_OKMTpYfg3FCbRQVfs9ywn7GRg-4cBrQJnloO1XcQXrtYLFZuUsZo0fFsCBDPKDbwD_4k07haheLMfYoi263iu9JC5UDNIZmW0F/110fx82f', 'covert'),
(294, 'AWP', 'Боец', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz56I_OKMTpYcxPSPqdSU-cjywXpDS4n5Yk0AIfvr-pVcQ2-toCUZrApY9pJTpHWCKDQMgD070o71aFcLJaA8S_nw223bVCT4Jfk/110fx82f', 'covert'),
(295, 'AWP', 'Медуза', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpot621FAR17P7NdShR7eO3g5C0mvLwOq7c2DkAvJQg27iT9NWm2VK3rkU6YmmiI4SVJAQ9MljUr1O5ku7ug8K1usnXiSw07gvX0uU/110fx82f', 'covert'),
(296, 'CZ75-Auto', 'Виктория', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz54LrTgMQhmYzvHFaNWWfEF9xK7XBg_7cNqQdr4oOhXL17us9eTMOItONEZSZaCUvHVYQ_67Eox0aYIKpeKpS7tji3sa3BKBUTzBPd8Hg/110fx82f', 'covert'),
(297, 'Desert Eagle', 'Золотой карп', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5_MeKyPDJYcwn9EqNfUPApywr-CDE918tqU9-iue0FK13rsoTPNuUrNIlETZWFU_WEM1j06hht0aNZepSNpnm9iHvsb2kUG028EEUdd1E/110fx82f', 'covert'),
(298, 'AK-47', 'Огненный змей', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz56P7fiDzRyTQLLE6VNWecq8Qb4NiY5vJBcVsW34bQ5JFm77cebLbB-Zt4fGsDVW_DUZV31uR9sh_AJfsbcoXjpiy24OWZZX0C_-WkAyrWZ-uw81vin62w/110fx82f', 'covert'),
(299, 'M4A1-S', 'Сайрекс', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz52YOLkDyRufgHMAqVMY_YvywW4CHYh18R6RtKuyLYDLVWq6ZzFZrUqMItNHpbRUqCOYg-rvEMx1qdcLseIpy253Cy4Mz9fUxDi-ToHhqbZ7WBrCDQm/110fx82f', 'covert'),
(300, 'M4A1-S', 'Золотая спираль', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpou-6kejhz2v_Nfz5H_uOxh7-Gw_alIITCmGpa7cd4nuz-8oP5jGu5rhc1JjTtLIfEdVQ-YA6G-FbqwOzs05Tp6smdzHdiuCUi5y7YnRG1gB9OOLE50OveFwutvS5J8A/110fx82f', 'covert'),
(301, 'M4A1-S', 'Скоростной зверь', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz52YOLkDyRufgHMAqVMY_YvywW4CHYN4N5zUcWJ9b4HOkiA6deSavVxLt0aG5GCCKDQMgn-4kMxgaVYJ5CA9iO-3y-9OT8JDUXirD4GneXT6LJ1wjFBrFMBOCI/110fx82f', 'covert'),
(302, 'M4A4', 'Азимов', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz52YOLkDzRyTQmWPqFNVfg14jfhDCM7_cotVtLn87oCewy8ttHBZ7J6ZIsaGMHWDPKFM1_940k60vRdfZTcpCi8iTOpZDkfJ7O9Pw/110fx82f', 'covert'),
(303, 'M4A4', 'Дождь из пуль', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz52YOLkDzRyTQbXDaxbSMoo9QHiNipm6ZZcWdKy_q4LZ13mt4LBNOYvMtlOHpWDXvePNVuv4ks6gfBcKJfco3zt2yy_OT8CDRH1ujVTbUp_gdk/110fx82f', 'covert'),
(304, 'M4A4', 'Пустынная атака', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz52YOLkDzRyTRDLFaFQT-E15gXTBCI24dJuGoSzp71UcF-6vYSTYbYtY4saH5TRD6WFZQz46kpshfddKcCLoyLn3i73ejBdZpZKYDI/110fx82f', 'covert'),
(305, 'M4A4', 'Вой', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpou-6kejhjxszFJTwT09S5g4yCmfDLPr7Vn35cppYo0riZp4-t3Q2x_UVpYGr6LIXHJABrYVGB_QS5k72905S_75ycm3t9-n51e4WtYjg/110fx82f', 'covert'),
(306, 'M4A4', 'Рентген', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz52YOLkDzRyTRzQALlhUaEF-Q3oADI_psIyAY7h9e9feFnq4oWTO-Z_MNwaHseCC_DQM1v9vkw90aBaKZ3Y8yzxnXO-NzqpKk8/110fx82f', 'covert'),
(307, 'MAC-10', 'Неоновый гонщик', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz52NeDkYAhkZzvPAKMPDMo08QfiGy427dVcWdKy_q4LZ1rotNfGMrgqZoxKH8LXXv-EZQmouUk7iKVYLZeKoSPsjH7sbGpYXEH1ujVTXmYdmCw/110fx82f', 'covert'),
(308, 'P2000', 'Огненный элементаль', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5zP_PnYGc3TQfXPrAMDKVqyw7lGyIN7ctmWdK447oKFlG64NuDbq4lN9EaTJbVX_GGNAH7uBhu1KFcL8CApHjn1S7sa20PCUK-_mkFzrXTpPI11Xdf2Mhv/110fx82f', 'covert'),
(309, 'P90', 'Азимов', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5rbbOKMyJYYl2STKFNVfw3-x7TBCI24dJuGoOy8-0EKgrv5YaVMbgkOIpJTcbSU_OFYwuo7UIxg_JafJCMqXvqjn_3ejBdkE3axU4/110fx82f', 'covert'),
(310, 'P90', 'Смертоносные кошечки', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5rbbOKMyJYcQXWEqtLUPkpyxi1WRg_7cNqQdr4o-wEKA3msoaSM7EoNdxIHZTSW_KCYwD7uB5rgaNffpDdo3ztjC69P3BKBUScTnBrdA/110fx82f', 'covert'),
(311, 'SSG 08', 'Кровь в воде', '//steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5oJ-TlaAhkZzvRCaFMV8o38QzlHCp8usY6UNHip-1QeQm65YCQZeMvOdoYTsPWCaWDZV__vx5thaMLKpOKqDSvg3pKHSnaBw/110fx82f', 'covert'),
(312, 'USP-S', 'Убийство подтверждено', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpoo6m1FBRp3_bGcjhQ09-jq5WYh8j_OrfdqWhe5sN4mOTE8bP4jVC9vh5yYGr7IoWVdABrYQ3Y-1m8xezp0ZTtvpjNmHpguCAhtnndzRW10x9KOvsv26KUE4Zjjg/110fx82f', 'covert'),
(313, 'AWP', 'История о драконе', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpot621FAR17P7NdTRH-t26q4SZlvD7PYTQgXtu5cB1g_zMu9zw3g2yrkVtZ2r6IoSVdAU-ZVrY_lS6lb_ogsDqu57NmCQ27iJx53nD30vgUTXWscs/110fx82f', 'covert'),
(314, '★ Нож с лезвием-крюком', 'Африканская сетка', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovbSsLQJf1ObcTi5S09Gzh4i0g_b6DLfYkWNFppB337HFotuijAPi-kdkMTjzJ4fHdw45Nw6G-wO-k-3rg5Povs7NzXN9-n51K08e2bo/110fx82f', 'rare'),
(315, '★ Штык-нож', 'Вороненая сталь', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpotLu8JAllx8zJYAJA4MmzkL-HnvD8J_WFxjIBvZIi3OqSo4j3jFbtr0NkY270cNLEJ1RsYV6DqAO8wum5gJ6_ot2Xnpnfakz6/110fx82f', 'rare');
INSERT INTO `items` (`id`, `weapon`, `name`, `image`, `type`) VALUES
(316, '★ Штык-нож', 'Волны', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpotLu8JAllx8zJfAJG48ymmIWZqOf8MqjUxVRd4cJ5nqeXpdzx0FHgqhFqZmn6IY_DI1U8aFuB_FLql-nt1pe7tMybzHFmvCUj-z-DyAETkzcY/110fx82f', 'rare'),
(317, '★ Штык-нож', 'Мраморный градиент', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpotLu8JAllx8zJfAJP7c60mIW0kfbwNoTdn2xZ_ItwjuqTrdrz2w238ks9am_wJICXclc3ZlDT-wLvw7vqhZO8vp_AnSQ1pGB8slyqDZmn/110fx82f', 'rare'),
(318, '★ Штык-нож', 'Ожоги', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpotLu8JAllx8zbYQJG7cymmIW0m_7zO6-fw2gHsZMjjr6Y99qgjVbm-0ZvZG7zdY6ddVBvMgmF8lnswuju08Xq6YOJlyV-LJXiZQ/110fx82f', 'rare'),
(319, '★ Штык-нож', 'Зуб тигра', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpotLu8JAllx8zJfwJW5duzhr-Ehfb6NL7ummJW4NE_3bGR84qmiQHsr0NtMm7wcILBdVI5ZF2BrgPqkr_rg5K0v8nIyiQy7D5iuyj6nUSP2A/110fx82f', 'rare'),
(320, '★ Штык-нож', 'Городская маскировка', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpotLu8JAllx8zbYQJW7cyzq5WZlfb6DLfYkWNFpp0gib3Fp42l3lfmr0s_YW7ydYTHdFJrZQqD_lbowb29hcK_6p7Lmyd9-n51-7QDk8Q/110fx82f', 'rare'),
(321, '★ Штык-нож', '', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXU5A1PIYQh5hlcX0nvUOGsx8DdQBJjIAVHubSaKQZ53P3NZXMXvYmykdLSxqWkZ7-HkjMIvpIj3u2Y84733gzh_RU_MG_zIYLEdQ45fxiOrdJh0ExF/110fx82f', 'rare'),
(322, '★ Нож-бабочка', 'Северный лес', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovbSsLQJf0ebcZThQ6tCvq4iSqPH7Ib7CglRT59d0i-X--YXygED6rUttZG37J9KUJwM9M17Z81C3kOa-hJe_uJSbyXVm6SIlsXfVnRzlgAYMMLLm2Aclzg/110fx82f', 'rare'),
(323, '★ Нож-бабочка', 'Градиент', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovbSsLQJf0ebcZThQ6tCvq4GKqPH1N77ummJW4NE_iLjA99nzigexr0NkYmH2dYSTdAU9ZQrW_lm2kO3pgcTuv8vLy3I1sj5iuyin5z3u1g/110fx82f', 'rare'),
(324, '★ Нож-бабочка', 'Африканская сетка', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovbSsLQJf0ebcZThQ6tCvq5ObqPrxILPugmpf18l4jeHVu9X22wSxqBZpMTyhJ46WdwBoZVjWr1TtxLi-gJDpu8vNyXdl7CAl4HjD30vgubepWfc/110fx82f', 'rare'),
(325, '★ Нож-бабочка', 'Ожоги', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovbSsLQJf0ebcZThQ6tCvq5ObqPP1I6vdk1Rd4cJ5nqeXpN2liQ3lrUtsajr6LYCTewBoMFDXrli-k-m61J606Z3KznU3unR0-z-DyP9UQqaZ/110fx82f', 'rare'),
(326, '★ Нож-бабочка', 'Убийство', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovbSsLQJf0ebcZThQ6tCvq4GGqO3xManQqWdY781lxLHHoIin0FLsqUtqY26nLIWVdw9tZQyG_FC2k-3mjMO-6szMzHMx6CQ8pSGK0p08J-U/110fx82f', 'rare'),
(327, '★ Нож-бабочка', '', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXU5A1PIYQh5hlcX0nvUOGsx8DdQBJjIAVHubSaIAlp1fb3cyhW-NmkkoyS2aCtZ-qFwW4JvMQlj7CVp9qn2Aaw_0ZtZ2z6JYbGIFQ-YV_X81btlOvxxcjrQyWGkSc/110fx82f', 'rare'),
(328, '★ Фальшион', 'Северный лес', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovbSsLQJf1fLEcjVL49KJnJm0kfjmNqjFqWle-sBwhtbN_Iv9nBrtqRVoMjunI4XBJ1NrYQmF8lPtlO6-jZC7vMjIyXdl7iNz4HvbnhWwn1gSOdWpLqAg/110fx82f', 'rare'),
(329, '★ Фальшион', 'Пиксельный камуфляж «Лес»', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovbSsLQJf1fLEcjVL49KJnJm0k_PkMq_ummJW4NE_2euTrdmiig3tqRFuMjjydoeWcQE8ZVCE8gC_kLvtgcft6Zybn3Zmuj5iuyg5_iWUVg/110fx82f', 'rare'),
(330, '★ Фальшион', 'Убийство', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovbSsLQJf1fLEcjVL49KJlY20jfL2IbrummJW4NE_2erD9omn2Q3lr0E9YWmhLI7AdAc-NVDR8lHtw7jr1J_p6Z3Jz3Qw6z5iuyiEmxanZA/110fx82f', 'rare'),
(331, '★ Фальшион', 'Патина', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovbSsLQJf1fLEcjVL49KJlZG0kfjmML7VqWdY781lxLrDrNSjjFK3-EppNm_1JIHBc1A-ZA6DrlDowrvp157vvs7LmnM1vyk8pSGKY26DeJ0/110fx82f', 'rare'),
(332, '★ Фальшион', 'Городская маскировка', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovbSsLQJf1fLEcjVL49KJh5C0g_bkNoTEhGlQ5vp5j-jX7ML23wWx-xU_amjyLIWdcVM8aQqCqFC5wu7r1pTtvZnIz3A3s3Z3437cgVXp1jTYwrIE/110fx82f', 'rare'),
(333, '★ Складной нож', 'Градиент', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovbSsLQJf1f_BYQJD7eOwlYSOqPv9NLPF2DMAucMpj7HA897w2ATi_EY_Y230dY_Gc1M3N1jUqAPrxL-80J6_7pzXiSw05jfk9VU/110fx82f', 'rare'),
(334, '★ Складной нож', 'Пиксельный камуфляж «Лес»', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovbSsLQJf1f_BYQJK9eOykJCKg8j4OrzZgiUJsJd127iTpYmijQHh80pqamjxJY-VcFI4YFCEq1m-k-bnhJa5756Y1zI97T5VKbj6/110fx82f', 'rare'),
(335, '★ Складной нож', 'Мраморный градиент', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovbSsLQJf1f_BYQJD4eO7lZKJm_LLNbrVk1Rd4cJ5nqeUoo2s0Qe1qUVqYGuhddSSdgRqMlHWr1nrk7u705-0uJrKnyNm6CQq-z-DyE8NXPC5/110fx82f', 'rare'),
(336, '★ Складной нож', 'Убийство', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovbSsLQJf1f_BYQJD4eOskYKZlsj4OrzZgiUEvZEn3e_Do9mh3wGw80E_Z2zxdtWcdAc2YQzR-lDol7ro0JG6vZTL1zI97axy5arG/110fx82f', 'rare'),
(337, '★ Складной нож', 'Патина', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovbSsLQJf1f_BYQJD_eOwm5KIkvPLP7LWnn8f7Zxw3LyWo42s2gy1-kI6MGr0I4fHcQY8N1qC_Fe7wue715S17pjJymwj5HeawwaPVQ/110fx82f', 'rare'),
(338, '★ Складной нож', 'Зуб тигра', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovbSsLQJf1f_BYQJD4uOinYeOhcj7IbrfkW5u5Mx2gv2PodikiwSw-RA6Z2v0cI-VJFQ-ZlGF8lPvl-67hZG475ybnyM3uyN34WGdwUJKXIPvLQ/110fx82f', 'rare'),
(339, '★ Нож с лезвием-крюком', 'Вороненая сталь', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovbSsLQJf1ObcTjxT0966gYWPqPv9NLPF2DtUvJVziLnEpon33VCx-Bc5Yjv6JoOddwVrYg3UrwK5xOu5jMS6uczXiSw0dJL_lKg/110fx82f', 'rare'),
(340, '★ Нож с лезвием-крюком', 'Поверхностная закалка', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovbSsLQJf1ObcTjxT09O_mIWPqPrxN7LEmyUEsJV00-qVptn0jADt_UFoMTryJIGUIA82MF7T_FC3xubm1pTutJmc1zI97Q6TU3mw/110fx82f', 'rare'),
(341, '★ Нож с лезвием-крюком', 'Волны', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovbSsLQJf1ObcTjxP09i5hJCHkuXLI7PQhW4A18l4jeHVu9703Azs-hA_MTuncNWWIVU-aF7Z_1a7k-bo0cW_v8_OyXVqvyAqsy3D30vgdDGy9vw/110fx82f', 'rare'),
(342, '★ Штык-нож', 'Поверхностная закалка', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpotLu8JAllx8zJYAJN5dCzkL-GkvP9JrafkzJUv8QjjuyQoNzw3FLi_BZtMjigJtORdw5sMF3R-wO5wbzm0ZO06YOJlyXalsNg1w/110fx82f', 'rare'),
(343, '★ Нож с лезвием-крюком', 'Убийство', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovbSsLQJf1ObcTjxP08azlpKKqPv9NLPF2GgCv5F30uyWpIqm2ASx_0BpYjv1LIbHdAQ6ZwyB_FW7le270Me8vcnXiSw0qhbstGE/110fx82f', 'rare'),
(344, '★ Нож с лезвием-крюком', 'Зуб тигра', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovbSsLQJf1ObcTjxM08i_k4WZqPjmMrXWk1Rd4cJ5nqeVoNWljAe18kVqZWigIdOQdldoYlrY_wLsw-3ohZG76s7PyiZnsiZw-z-DyMIysFMK/110fx82f', 'rare'),
(345, '★ Охотничий нож', 'Северный лес', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovbSsLQJfx_LLZTRB7dCJnJm0kfjmNqjFqWle-sBwhtbN_Iv9nBq2_UQ4YD3yLYeVJgM5Y13SrFO5xurm1JPpvprMyndn6ycm4XiIl0G0n1gSOfhWuc1t/110fx82f', 'rare'),
(346, '★ Охотничий нож', 'Поверхностная закалка', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovbSsLQJfx_LLZTRB7dCJlZG0mP74Nr_um25V4dB8xOyV8Nmk2gLnrRA5ZjjzJNCce1NsZ1_T_le9yO7qhJG96pzLynZlvig8pSGK0BpTrQ0/110fx82f', 'rare'),
(347, '★ Охотничий нож', 'Кровавая паутина', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovbSsLQJfx_LLZTRB7dCJnJm0gPL2IITck29Y_cg_37yQ8dX2jVbt_0dkajz6JYfEeg49Y1_S-Vi4wL--hZC1u8zNm3Nlvj5iuyjNGssg9w/110fx82f', 'rare'),
(348, '★ Охотничий нож', 'Ночь', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovbSsLQJfx_LLZTRB7dCJh4-0mf7zO6_ummJW4NE_iLnHpN2t2wzk_BU_MWjzd4WQewQ8YViE_1e3lb28gp-8u56dyHdivz5iuyj7Qd4jng/110fx82f', 'rare'),
(349, '★ Охотничий нож', 'Ожоги', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovbSsLQJfx_LLZTRB7dCJh5C0k_bkI7fUqWdY781lxO-Q8N732QDj80FlamD1J9PHJlA3MlDS-APokui608Tt7s7InCFi6Sg8pSGKfDMAG6E/110fx82f', 'rare'),
(350, '★ Охотничий нож', 'Убийство', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovbSsLQJfx_LLZTRB7dCJlY20jfL2IbrummJW4NE_27uYo4ii3lDn_xVtNmz0J46QcAJtaVjYrFK4xOvngce_tMyYn3Qx7D5iuyi6YsDq_w/110fx82f', 'rare'),
(351, '★ Охотничий нож', 'Городская маскировка', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovbSsLQJfx_LLZTRB7dCJh5C0g_bkNoTEhGlQ5vp8j-3I4IG70QC1_kBtMmH6cICcd1doNVrSqAW-xrq90Z-7tZTMz3BjsiIl5CyLlgv330-HeU8VYw/110fx82f', 'rare'),
(352, '★ Керамбит', 'Вороненая сталь', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovbSsLQJf2PLacDBA5ciJlZG0lfvhNr_ummJW4NE_273ErN6ti1CxrxZlYjjzIdeRdQA7ZwqD-wC6xu680ZO9uc_AnXVgvz5iuyhtDBWPCg/110fx82f', 'rare'),
(353, '★ Керамбит', 'Северный лес', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovbSsLQJf2PLacDBA5ciJnJm0kfjmNqjFqWle-sBwhtbN_Iv9nBrsqRZlajv6doOWcAE7ZV7TrwLvku7m0Za0vJ7MwCM1uSUg4yzZyh22n1gSOZoaRwNN/110fx82f', 'rare'),
(354, '★ Керамбит', 'Поверхностная закалка', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovbSsLQJf2PLacDBA5ciJlZG0mP74Nr_um25V4dB8xOqRoNr03ge3-BI_Nmv6IoWdc1U2YFHXqFW3xObv157u75TBnyBgvHQ8pSGKBqmzBPg/110fx82f', 'rare'),
(355, '★ Керамбит', 'Дамасская сталь', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovbSsLQJf2PLacDBA5ciJlZG0k_b5MqjSg3hu5Mx2gv2Podv03wKy_EtqMGjzcNXBelM-MgmCqAe5le6508fp75TKnCNqsyYitGGdwUJqhGR_eA/110fx82f', 'rare'),
(356, '★ Керамбит', 'Африканская сетка', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovbSsLQJf2PLacDBA5ciJh5C0mvLnO4TFl2Vu5Mx2gv2P9N7x3Fe3rUplZm2hLYOSIQ4_aAmEr1a8kO-818Ptu86YySRj63Qjs2GdwULDIt1IWg/110fx82f', 'rare'),
(357, '★ Керамбит', 'Убийство', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovbSsLQJf2PLacDBA5ciJlY20jfL2IbrummJW4NE_0rGVoNvzilG3qkduNmCnd4eSdAE3aVuD_Ve8wOe7hpLuuJuYmyRivj5iuyi_zJQcBA/110fx82f', 'rare'),
(358, '★ Керамбит', 'Патина', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovbSsLQJf2PLacDBA5ciJlZG0kfjmML7VqWdY781lxLyVrYqk2VLs8xA4MmCnI9LBcA8_ZAqE_1LqwOm6hpe16J_BmHRj73Q8pSGKRAQrg_M/110fx82f', 'rare'),
(359, '★ Керамбит', 'Ультрафиолет', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovbSsLQJf2PLacDBA5ciJh4-0h-LmI7fUqWdY781lxOqSpYijiwLlrko5MGumLIadIA46ZAzV81Xvx-_q0JK6vp6dzHQ27yU8pSGKE0PchDM/110fx82f', 'rare'),
(360, '★ Штык-нож M9', 'Вороненая сталь', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovbSsLQJf3qr3czxb49KzgL-Khsj2P67UklRd4cJ5nqfC893wiVHhqUM4Z2ugJNWXdANrNF_XqwXqkrruh5a76c-YziNr6yRw-z-DyPIgs_3X/110fx82f', 'rare'),
(361, '★ Штык-нож M9', 'Кровавая паутина', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovbSsLQJf3qr3czxb49KzgL-DjsjjNrnCqWZU7Mxkh6fF8Yqmiw3l_BdrZ2vzIo-QdQBsaA2B-lC3yb_v0JW_uc_JmHQ16yYh-z-DyKLv5rKC/110fx82f', 'rare'),
(362, '★ Штык-нож M9', 'Градиент', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovbSsLQJf3qr3czxb49KzgL-KlsjyMr_UqWdY781lxL-Xpd6ijge1_EVvMmGhJNedew43ZA7TqAXqxOvrjZPovpydwSYw7nE8pSGKgyjY_DU/110fx82f', 'rare'),
(363, '★ Штык-нож M9', 'Африканская сетка', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovbSsLQJf3qr3czxb49KzgL-Yh8j5NqjZqX9Q5vp9g-7J4cKk2Azt_RBrMGrzJo6SdQ9sZ17Y8lm7kOztjMO57szOznFluSdw43aOgVXp1oG2cQbD/110fx82f', 'rare'),
(364, '★ Shadow Daggers', 'Вороненая сталь', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovbSsLQJfw-bbeQJD_eO0mJWOk8j4OrzZgiVUuMcjj-rF8In221K2-ENqZTqmd9fDd1Q8NVHT81Psl7vr0cTvuprN1zI97fJ4ylzC/110fx82f', 'rare'),
(365, '★ Shadow Daggers', 'Поверхностная закалка', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovbSsLQJfw-bbeQJD_eO5nYyOk8j4OrzZgiVS6sZz3bzAp9-hjALi-EFpMWz1J4edI1RtN1mE-wLtybu90JHutJTK1zI97R80JPy8/110fx82f', 'rare'),
(366, '★ Shadow Daggers', 'Градиент', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovbSsLQJfw-bbeQJD7eOwlYSOqPv9NLPF2G0Gu8Eo2bDApt-g0FXl-UU6NTuhI9SccVU3N1DXqFjsxua-g8W7tMvXiSw0K6R8VrQ/110fx82f', 'rare'),
(367, '★ Shadow Daggers', 'Африканская сетка', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovbSsLQJfw-bbeQJR_OO7kZODqOP1PYTdn2xZ_Itz3OuSrNz22wLh-RBuMTryd4aSdlVqY1uC-QLvyOzu18C1tJrJm3YxpGB8sjaSYMPt/110fx82f', 'rare'),
(368, '★ Shadow Daggers', 'Убийство', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovbSsLQJfw-bbeQJD4eOskYKZlsj4OrzZgiVQuJxw3OrHptitigXk-RVkYzz7I4SXdFVtZlmE-lK7xeq6gJa-u53K1zI97VbkI_gt/110fx82f', 'rare'),
(369, '★ Shadow Daggers', 'Патина', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovbSsLQJfw-bbeQJD_eOwm5KIkvPLP7LWnn8fusZ0i-_E992l3FWyrhFoYz_6dteRIQFvZguD_gW7yO691pW6756dnWwj5He74Aez4A/110fx82f', 'rare'),
(370, 'Desert Eagle', 'Пиксельный камуфляж «Город»', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgposr-kLAtl7PvRTjlG_N2iq5WZlcj5Nr_Yg2YfscQo3r3H9Nuki1HsrkdlMGuncoCcJAc9ZF_Q_1Dqk-zrhJDqvZ7Jymwj5HeAXIDD2Q/110fx82f', 'uncommon'),
(371, 'Desert Eagle', 'Ночь', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgposr-kLAtl7ODHTjNL69Siq4iOluHtfeqIk29XvMcn2LmTrN-sjVW280E-Ym3yIo-WI1I-ZwqC_lK5l728hZei_MOe7MNzwV8/110fx82f', 'uncommon'),
(372, 'Desert Eagle', 'Осадок', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgposr-kLAtl7PvRTjBN-Mi6kYS0hPb6N4Tck29Y_cg_2biYotvz3ALi8kQ9Nm6hcIXDcQ86ZQ2F_gPqw-bqgpDp6s_Imns2uj5iuyhknboYCw/110fx82f', 'uncommon'),
(373, 'Desert Eagle', 'Ночная буря', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgposr-kLAtl7PLFTi5H7c-im5KGqP_xMq3I2DID7pZw2b6UpY6hjQTj_0ZkNz_xcdOXdgA2aV_S8gXqk7jqg5G-v53XiSw0vau75Eg/110fx82f', 'uncommon'),
(374, 'Desert Eagle', 'Corinthian', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgposr-kLAtl7PLZTjlH7du6kb-ImOX9Pa_Zn2pf18h0juDU-MKm2ley-kE6MGGnJIOXclA2ZQ7Vr1Lrlem8gpfvuMzOySBjsyd3s3vUgVXp1hBYWgPe/110fx82f', 'milspec'),
(375, 'M4A4', 'Тигр в джунглях', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpou-6kejhoyszeTilL69mkq4yCkP_gfbjVkDhXsMAl2b3E9N-j0ADmrRJpYWmgddTAIQ4_Yw2BqAC9l-y51JOi_MOeuFGxnXQ/110fx82f', 'uncommon'),
(376, 'M4A4', 'Песчаная буря', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpou-6kejhoyszMdC5H_siJmImMn-O6YOvVx24C7MZy2rrD9I_00FDgqkA6YWvxdoXHegM_MAzR-AK5xunmjIj84sqcbwbCfw/110fx82f', 'uncommon'),
(377, 'M4A4', 'Смерч', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpou-6kejhz3Mzcfi9M7di5q42Ok_7hPvXTlG5X6cYh3-3E89Sk0AfnrkBkY2mhJIfEcwM4M1CDqVfsyem5gsW4ot2Xnj287ZlO/110fx82f', 'uncommon'),
(378, 'M4A4', 'Пиксельный камуфляж «Город»', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpou-6kejhoyszMdS1D-OOjhoK0n_L1JaKfz21T7pdy3uyY89mljAHk_EpoYGv1co6Seg87Zg3Q_lC8xea905-5v4OJlyVMJ5kvtw/110fx82f', 'uncommon'),
(379, 'M4A4', 'Royal Paladin', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpou-6kejhnwMzFJTwW0865jYGHqOTlJrLDk1Rc7cF4n-SP8dSm2gHk-UtoZGv7I9DBcVM5ZV_XqFe_lervhsS76sjIyCBhviYg52GdwUI8s6PzHQ/110fx82f', 'covert'),
(380, 'M4A1-S', 'Северный лес', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpou-6kejhz2v_Nfz5H_uO-jb-NmOXxIK_ulGRD7cR9teHE9JrsxlGy_EdvMGGmI9LAewNvaFrY-VG5wLy9jcXov8nOmHMx6ygl4XePlxGpwUYbs3f5UC8/360fx360f', 'uncommon'),
(381, 'AK-47', 'Африканская сетка', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpot7HxfDhzw8zFdC5K08i3mr-HnvD8J_WBxTwD6ZB12b7Hodumig23rUY5YTymJ4TBcFA7NVvW-FW5l-zr1JXtot2XnkNBBWuK/110fx82f', 'uncommon'),
(382, 'AK-47', 'Хищник', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpot7HxfDhzw8zSdD9Q7d-3mb-HnvD8J_WEkDoE65x03rjDrI322QfhqUtrMD2icNSRcgFtaFDX-AS9wL3u05S1ot2Xnn9ZGujG/110fx82f', 'uncommon'),
(383, 'AK-47', 'Цвет джунглей', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpot7HxfDhzw8zbYS9D9eO8gY6Mm_LLP7LWnn8f6cMk2L3E9NqkilHm8hI-a2inctSWcAc8Zl-C81nvw-_uhpW06MjKzmwj5Hd9a9y0Zw/110fx82f', 'uncommon'),
(384, 'AK-47', 'Снежная буря', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXU5A1PIYQh5hlcX0nvUOGsx8DdQBJjIAVHubSaKgw0hL3JIm8S6o3lkoWKw_GmYr-Ak2kC6pEn3L6Z8dr32Qax8kQ_MT3yJIOXbEZgNjyC1Cwf/110fx82f', 'classified'),
(385, 'AK-47', 'Point Disarray', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpot7HxfDhjxszJemkV08y5nY6fqPP9ILrDhGpI18h0juDU-MLx2gKy8xFqMDr2IIORcAU6MlnS_Vjtxu7rhcK-u5-cyXZqsiEg7HnUgVXp1kpd_x09/110fx82f', 'classified'),
(386, 'AWP', 'Солнце в знаке Льва', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpot621FA957OnHdTRD746JnIWKge66ZezUkjNX7Jwp2rnCpo2t2Qfk8xJpMTqld47DdlI_ZgqCqQLsxbvmgIj84sqMMdFayA/110fx82f', 'uncommon'),
(387, 'AWP', 'Африканская сетка', '//steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpot621FBRw7P7NYjV9-N24q4iOluHtfemJxzkCv5V3ibCToN33igXj_hdqZTv6IIWWdwZoNQzT-1O7xO3tgJai_MOeifog2Vk/110fx82f', 'uncommon'),
(388, 'Sawed-Off', 'Пиксельный камуфляж «Лес»', 'https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpopbuyLgNv1fX3eSR96NimlZS0mvLwOq7cqWdQ-sJ0xL_Dp4ig0Q3g-BJtNTihJNeSIVA_YAvT_1Tvx7_sgJG0vpibzHYxvHE8pSGKMdBlGCQ/330x192', 'uncommon'),
(389, 'P250', 'Северный лес', 'https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpopujwezhoyszOfi9H_8iJlo-Zkvb4DLbUkmJE5fp9i_vG8MLxilHtqEdoZTrzdtfAIQY9MwnXr1O5w-68hJHo7p3NwSFkuHUisX3fgVXp1taHNTzj/330x192', 'uncommon'),
(400, 'Dual Berettas', 'Колония', 'https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpos7asPwJfwPz3Yi1D79mJmYGZnvnxDLfYkWNF18lwmO7Eu92l2VfiqUFlYGj2cIWSJlQ-ZFiB_gK5ye_o1JLvvZzMyHUx63Ej43jD30vggGsWnGI/330x192', 'uncommon'),
(401, 'Galil AR', 'Песчаная буря', 'https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgposbupIgthwczLZAJR7dKyh5SEhfrLPr7Vn35c18lwmO7Eu9qs0AXtrkI9ZWv3JdOVIVdvaQzV-1PvwbvvgMO_uMnLmiMwvnInt33D30vgH7ufOHU/330x192', 'milspec'),
(402, 'Galil AR', 'Ками', 'https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgposbupIgthwczAaAJF7dC_mL-Alvr9DLbUkmJE5fp9i_vG8ML231e2r0Q5Y2r7cNPEdAc3aV3Z_Qe4we_rjZ-1vpnOy3I1vyZ0sCnbgVXp1tUzHqtY/330x192', 'milspec'),
(403, 'Desert Eagle', 'Городской щебень', 'https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgposr-kLAtl7PvRTitD_tW1lY2EqOLmMbrfqWdY781lteXA54vwxlXt_EptN2nzIICXcgBoaVDQ8lTow7rvjZO86c7MznUwvHYn5nqMmxKpwUYbYpGsfXk/330x192', 'milspec'),
(404, 'P2000', 'Защитник империи', 'https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovrG1eVcwg8zJfAJSvozmxL-CmufxIbLQmlRD7cFOhuDG_ZjKhFWmrBZyMG30cYSVdQU-Zl_S_wTqwLjm0J7v6pudyHZksnRwsyvemhe00h8dafsv26IzdkiNew/330x192', 'milspec'),
(405, 'Tec-9', 'Пиксельный камуфляж «Город»', 'https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpoor-mcjhoyszMdS1D-OOjhoK0mvLwOq7cqWdQ-sJ0xLyR99WmjgXi-EFlZT3zcYeWdQBsaVCB8wS7we-9jcS875rNwXZqsig8pSGKg7HJkhk/330x192', 'uncommon'),
(406, 'AUG', 'Осужденный', 'https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpot6-iFBRw7P7NYjV96tOkkZOfqPH9Ib7ummJW4NFOhujT8om7jVW2rUQ-ZWCgdYeRdgFsNA3V81ftlby-05S97pnBmiZkvyMlsS2Oygv330_iVc0pMQ/330x192', 'uncommon'),
(407, 'Glock-18', 'Горелка Бунзена', 'https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgposbaqKAxf0uL3djFN79fnzL-Nm_b5NqjulGdE7fp5j-jX7LP5iUazrl1uYjigJoTGclBtY1HX-VfrwLvqjJ64u8iYyiA2vnVz7X7ZyhewiE1NcKUx0tGyAusX/330x192', 'milspec'),
(408, 'Glock-18', 'Гремучая смерть', 'http://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgposbaqKAxf2-r3fzhQ49i_lb-HnvD8J4Tdl3lW7Ysk3rmRo9vz3wTnqRVrMWnxJNKdJFNqNwuD_FK8w-vthsfuuJnAnXRrpGB8sgDE6mLi/330x192', 'uncommon'),
(409, 'AUG', 'Рикошет', 'http://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpot6-iFAZt7PLddgJI-dG0mIW0m_7zO6_ummpD78A_jrGXrNykiQDmrUFvaj2nd4WcIVI4ZV2E-AC_xuznhJ60vcucynU3vz5iuyiL80cXxw/110fx82f', 'milspec'),
(410, 'Dual Berettas', 'Картель', 'http://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpos7asPwJf0uL3dShD4N6zhoWfg_bnDLjQhH9U5Pp9g-7J4bP5iUazrl1pYTynJoKUcwBqM1CB_VO7xb_sg5Dp7ZSfzSRns3IhtiqLyRzi1ExPcKUx0nMKTIzL/110fx82f', 'milspec'),
(411, 'Dual Berettas', 'Драконий дуэт', 'http://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpos7asPwJf0Ob3dShD4N6zhpKOg-P1DL_Dl2xe5tZOhuDG_ZjKhFWmrBZyYW73JoCSdlVsN1rT_QW_k7_q08S66cnAn3I3syB35X-MnxayhhgaZ_sv26LRA9KePQ/110fx82f', 'milspec'),
(412, 'FAMAS', 'Выживший', 'http://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgposLuoKhRf0Ob3dzxP7c-JmIWFg_bLP7LWnn9u5MRjjeyPoo333QTsqkdsZDz2ItfHdwI_NQmF-1O5lLjq08W6uMvJwCRl63Ui7WGdwUJj4iqdBQ/110fx82f', 'milspec'),
(415, 'Glock-18', 'Призраки', 'http://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgposbaqKAxf1OD3djFN79fnzL-chfbgO6LCqWdY781lteXA54vwxgy3rUc9MTjxJNKUewVvYF7U_AO9xua-hsK8uMzPnyc2uXYk43jfm0apwUYbzF_ISHM/110fx82f', 'milspec'),
(416, 'MAC-10', 'Хроматика', 'http://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpou7umeldf0Ob3fDxBvYyJlYyOnP_tMoTVg2Ru5Mx2gv3--Y3nj1H680Q4MWn7LICQI1BqZ1yCqFfqxem5g5-56svOzyNi6CIj53_UnBe11wYMMLJXi8Kg2Q/110fx82f', 'milspec'),
(417, 'MAC-10', 'Лазурный хищник', 'http://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpou7umeldf0v73fDxBvYyJkYyOlOPmOrjYgnJu5Mx2gv3--Y3nj1H6rxE_YzulcNOcdABqMFqDqAO8xu2-gZK-7Z6an3thunQm4i2MnhSw0gYMMLLP0Tav9w/360fx360f110fx82f', 'milspec'),
(418, 'Five-SeveN', 'Дань прошлому', 'http://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgposLOzLhRlxfbGTj5X09q_goWYkuHxPYTDk39D58dknuDO-7P5gVO8vywwMiukcZiSJ1A6M1rQqFntyL-60ZLoupnPyHplu3MrsXbezR22hxtMOOM-1vKfVxzAUJ_E9vfb/110fx82f', 'restricted'),
(419, 'MAG-7', 'Ядро кобальта', 'http://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpou7uifDhjxszFcDoV09GvhoOOmfLLP7LWnn9u5MRjjeyPoo_x2FGw80o4MW6id9XGdgJqYlrY8we3l-_qh5_pvMzOzCRnvCQhsGGdwUIwsOIRxA/110fx82f', 'milspec'),
(420, 'P2000', 'Защитник империи', 'http://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovrG1eVcwg8zJfAJSvozmxL-CmufxIbLQmlRD7cFOhuDG_ZjKhFWmrBZyMG30cYSVdQU-Zl_S_wTqwLjm0J7v6pudyHZksnRwsyvemhe00h8dafsv26IzdkiNew/110fx82f', 'milspec'),
(421, ' ПП-19 Бизон', 'Океанская глубина', 'http://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpotLO_JAlf0Ob3czRY49KJl4mfnu3xPYTdn2xZ_Pp9i_vG8ML22we18ko6Nm71JdDGdwQ7Yl3S-FXrxu27h8fqtZybwHAy6Scl43zagVXp1pQaPStA/110fx82f', 'milspec'),
(422, ' Револьвер R8', 'Кровавая паутина', 'http://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpopL-zJAt21uH3eSR9-9m0h7-HnvD8J4Tdl3lW7Ysji7nD94703ADn80tpY2vzIobEewc-M12B-1noxLzpgcS57sjJm3E3pGB8skcPRHFe/110fx82f', 'milspec'),
(423, 'AWP ', 'Змеиная кожа', 'https://cdn.csgo.com/item_310782187_0.png', 'uncommon'),
(424, 'Штык-нож M9', 'Ультрафиолет', 'http://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovbSsLQJf3qr3czxb49KzgL-YmMjkJqnBmm5u5Mx2gv3--Y3nj1H6_hA9a2rwddSQc1Q5MFHX-AW3k-u915G7tZ-awXpqvydz43aOm0ez0gYMMLJr8B7KPw/110fx82f', 'rare'),
(425, 'Штык-нож M9', 'Волны', 'http://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovbSsLQJf3qr3czxb49KzgL-KmsjwPKvBmm5D19V5i_rEobP5gVO8v11kZTr6cdDAIVA5ZA2GqVW3x7281sftvZ_AzXZmv3Mm5H2LlxWw1RhIcKUx0uHVWO7n/110fx82f', 'rare'),
(426, 'Штык-нож', 'Убийство', 'http://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpotLu8JAllx8zJfAJY6d6klb-HnvD8J4Tdl3lW7Ysj2LqVpdqh2wLm-UNoNmH0cdeQIVM9N1HZ_QXtx-fu0Z64uMnAyHRrpGB8stNTCQHv/110fx82f', 'rare'),
(428, 'Штык-нож', 'Патина', 'http://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpotLu8JAllx8zJYAJE4861kYS0m_7zO6_ummpD78A_3r-RrNWti1Dl8kc6ammlIoPEJ1U_YQuDqwTvyejrgcS4vpnKySQwuj5iuyhwZ4qAMQ/110fx82f', 'rare'),
(430, 'Складной нож', 'Патина', 'http://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovbSsLQJf1f_BYQJD_eOwm5KIkvPLP7LWnn9u5MRjjeyP8NX03gHj_RJlYWGiJYfDIQU5ZlmC-VG8l-y9g5C5v5Sdm3Bq6CUi5mGdwUJLmy-O2g/110fx82f', 'rare'),
(431, 'Нож-бабочка', 'Сажа', 'http://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovbSsLQJf0ebcZThQ6tCvq5ObqPP1I6vdk1Rd4cJ5ntbN9J7yjRri-kJsMmDyco6Ve1U3aF7W81fokObo0Z-87pqcmHpr7yAh4niJn0Hhn1gSOTpeEaNS/110fx82f', 'rare'),
(432, 'Штык-нож', 'Африканская сетка', 'http://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpotLu8JAllx8zbYQJP6c--q5SKmcj4OrzZglRd6dd2j6fHpY-kigPlrRduYmmhI4LHdgRqMw7X8lO7wuvqg8O77szAmHtq7iEn-z-DyIB9jWZF/110fx82f', 'rare'),
(433, 'Нож с лезвием-крюком', 'Городская маскировка', 'http://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovbSsLQJf1ObcTi5S08i3hIW0guX2MrXum25V4dB8teXA54vwxgPgrkQ6ZmH6d9WRcQQ4ZFrU-Vi2x-e9h8fv6Z3PziAysiFz5XrblxSpwUYbNI9lScA/110fx82f', 'rare'),
(434, 'Керамбит', 'Ночь', 'http://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovbSsLQJf2PLacDBA5ciJh4-0mf7zO6_ummJW4NFOhujT8om73Abj_0toMWHxIo6SIA9rM1rUr1K2wOzq05Pp7ZScwHpgsiQls3nVyQv3309jjRKblA/110fx82f', 'rare'),
(435, 'XM1014', 'Скумбрия', 'http://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgporrf0e1Y07PLZTiVPvYznwL-YlOL5ManYl1Rd4cJ5ntbN9J7yjRq28xZrajvwd4KWewc5aVzR_1Dqxubm0MLo6Z7PySYx63F3s3iLyxThn1gSOSLdB7yD/110fx82f', 'milspec'),
(436, 'SCAR-20', 'Зеленый морпех', 'http://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpopbmkOVUw7PTbTi5B7c7kxL-bkvb3NrbQnW5DuJZOhuDG_ZjKhFWmrBZyY2_yco_EIQRoN1iB-lW-l-i51sW-tZuazXdi6SArsyrfyhS-iU5Ebfsv26Is65f-Ng/110fx82f', 'milspec'),
(437, 'Glock-18', 'Призраки', 'http://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgposbaqKAxf1OD3djFN79fnzL-chfbgO6LCqWdY781lteXA54vwxgy3rUc9MTjxJNKUewVvYF7U_AO9xua-hsK8uMzPnyc2uXYk43jfm0apwUYbzF_ISHM/110fx82f', 'milspec'),
(438, 'MAG-7', 'Ядро кобальта', 'http://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpou7uifDhjxszFcDoV09GvhoOOmfLLP7LWnn9u5MRjjeyPoo_x2FGw80o4MW6id9XGdgJqYlrY8we3l-_qh5_pvMzOzCRnvCQhsGGdwUIwsOIRxA/110fx82f', 'milspec'),
(439, 'FAMAS', 'Выживший', 'http://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgposLuoKhRf0Ob3dzxP7c-JmIWFg_bLPr7Vn35c18lwmO7Eu46ljQ3nrUQ9Ymvwd4eddFQ7YV3Yrle5x-_nhMW578iazXIxuCh0sSnD30vgLU3AIEE/110fx82f', 'milspec'),
(440, 'MAC-10', 'Хроматика', 'http://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpou7umeldf0Ob3fDxBvYyJlYyOnP_tMoTVg2Ru5Mx2gv3--Y3nj1H680Q4MWn7LICQI1BqZ1yCqFfqxem5g5-56svOzyNi6CIj53_UnBe11wYMMLJXi8Kg2Q/110fx82f', 'milspec'),
(441, 'M249', 'Космический воитель', 'http://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpou-jxcjhnwMzFI2kb09KzlpWHlsj3Ia7Cl29U-vp9g-7J4bP5iUazrl1qYz_1JNWcJw48YVvV_VTrwrvs05O5u5mdm3diuyMgsH2PnUPihktLcKUx0suZwC4C/110fx82f', 'restricted'),
(442, 'MP7', 'Особая доставка', 'http://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpou6ryFAR17P7YJgJB4N2lh4mNnvLwDLbUkmJE5fp9i_vG8ML20Azs-kI5N2_wIoSWdAU9Z1DUq1DvyOrn1pbpvpidyXIwvnYk53fdgVXp1talAHHJ/110fx82f', 'restricted'),
(443, 'Galil AR', 'Невозмутимость', 'http://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgposbupIgthwczPYgJF7dC_mL-FnvD8J6zYmGxu5cB1g_zMyoD0mlOx5UBrMGyhLNTAcg84MwmG-AO8wunvjZ66us6fm3sw7yN2s3vVmxC-iRhSLrs4iVANjQc/110fx82f', 'restricted'),
(444, ' P250', 'Охотник', 'http://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpopujwezhoyszYI2gS09-klYOAhP_7J4Tck29Y_chOhujT8om73VHi80dqZz3xIY_GJg5sYVrTr1Hvkui6hJG7u53AzSQ16yAj4Xreygv330_04Ep5UQ/110fx82f', 'restricted'),
(445, 'G3SG1', 'Поток', 'http://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgposem2LFZf1OD3dm5R642Jkoyej8jkJqnBmm5u5cB1g_zMyoD0mlOx5RVuajv6cYSTcgI7Y1jVrFe-k7y-1sXtv5vAzno363UktC2OmBfigxtSLrs4S60vcjM/110fx82f', 'classified'),
(446, 'AK-47', 'Снежный вихрь', 'http://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpot7HxfDhjxszJemkV08u_mpSOhcjnI7TDglRc7cF4n-T--Y3nj1H6-hBrMW_3LIOWdlU_MlGDqwO6wrvq15C6vp-bnHY36SAm4XbYl0SwhgYMMLJqUag1Og/110fx82f', 'classified'),
(447, 'SSG 08', 'Большая пушка', 'http://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpopamie19f0Ob3Yi5FvISJgIWIn_n9MLrdn39I18h0juDU-LP5iUazrl1lNTumcYSSewNsM16ErwC_xe_vhJa-vs_AyXNnvSIn5X7cmRK00B8YcKUx0lA7Fj8Y/110fx82f', 'classified'),
(448, 'USP-S', 'Подтвержденное убийство', 'http://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpoo6m1FBRp3_bGcjhQ09-jq5WYh8j_OrfdqWhe5sN4mOTE8bP4jVC9vh4DPzixc9OLcQU2Z1vQ_FfrwbvnhJ6-uJ_PnXAyuCUmtHfenRW00h5MPOVt1_KYHULeWfL4W83H_Q/110fx82f', 'covert'),
(449, 'M4A1-S', 'Золотая спираль', 'http://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpou-6kejhz2v_Nfz5H_uOxh7-Gw_alIITCmGpa7cd4nuz-8oP5jGu5rhc1JjSceNfXJVMgaVmB_QO-wLi5h5HovZ_Kn3A27HR24HrcnRC3g0lJbOFthPKcHwjIUrsJQvfN77TKZw/110fx82f', 'covert'),
(450, 'SCAR-20', 'Эпидемия', 'http://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpopbmkOVUw7PvRTi5B7c7kxL-BgvnzP77DqWZU7Mxkh9bN9J7yjRq2-BJpN2D2IoHEIARvMljXrwPokuu5jJDo6JWayXc17CJ0tn7amRXjn1gSOcw3AJfj/110fx82f', 'milspec'),
(451, 'Sawed-Off', 'Йорик', 'http://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpopbuyLgNv1fX3di59_92hkYSEkfHLPb7ShGRc6ctyj_v--InxgUG5lB89IT6mOoLGIwI5aAnRqAe5kru5gpa6vZzLnXox6Skm4HrVnxXi0xtNa-xn1veACQLJ7lPR_J4/110fx82f', 'milspec'),
(452, 'Desert Eagle', 'Послание коринфянам', 'http://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgposr-kLAtl7PLZTjlH7du6kb-ImOX9Pa_Zn2pf18h0juDU-LP5iUazrl1vYTqlJYTDIQ5qYV3S-ge2xbjq0JXp6JqaznMwvnEl5S3dlhLi1xxFcKUx0pGPPW4p/110fx82f', 'milspec'),
(453, ' ПП-19 Бизон', 'Топливный стержень', 'http://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpotLO_JAlf0Ob3czRY49KJmo-TnvjhIITck29Y_chOhujT8om72AW1-xA-MW3xdobEJAY6ZVvZ-AK9kuy8hsfp6subySdnunRx4y2Mzgv330-abR6Akw/110fx82f', 'restricted'),
(454, 'Tec-9', 'Лавина', 'http://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpoor-mcjhjxszcdD4b092glYyKmfT8NoTck29Y_chOhujT8om73lKyrhU-N2yicdeScQA5aFHRrFS7kOq-0Ze7vM_JmCRr6yh25y2LnAv3309M4w2JUg/110fx82f', 'restricted'),
(455, 'Negev', 'Погрузчик', 'http://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpouL-iLhFf0Ob3fzhF6cqJnY2blvTgDLbUkmJE5fp9i_vG8MKm2AXsrURpYTz1I9CUIVVvNF_Y-lDtyO_mg5fq75nOyCNguiUm5yvegVXp1n_es2BB/110fx82f', 'restricted'),
(456, 'XM1014', 'Горелка Теклу', 'http://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgporrf0e1Y07PLZTiVPvYznwL-DmOPLIbTVqWZU7Mxkh9bN9J7yjRrg_EQ5YDumIITHdlM8NAuD-QK3wOzt1MS67pjKnXYx63Jxtnbcnxbln1gSOTrAUncj/110fx82f', 'restricted'),
(457, 'SG 553', 'Дикая моль', 'http://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpopb3wflFf1OD3YjoXuY-JgImMkuXLPrTFnlRc7cF4n-T--Y3nj1H6rkFtZGv2IdOdJ1JraV3SrFPqxuy50JHptM_JnCMyviMksyyIzRPj1QYMMLKzPL2QVA/110fx82f', 'restricted'),
(458, 'G3SG1', 'Палач', 'http://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgposem2LFZf0Ob3dm5R642JkZiOlOLgOrTfk3lu5cB1g_zMyoD0mlOx5UdsMD-nIYPAcFVqM1HXr1C4x-q5gcC06M6dy3RguiEi5S3VmRay0h5SLrs4zKQqmCI/110fx82f', 'classified'),
(459, 'AK-47', 'Буйство красок', 'http://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpot7HxfDhjxszJemkV08y5nY6fqPP9ILrDhGpI18h0juDU-LP5iUazrl04YW-lLNSTIVU7ZV3U-FK6ku_tgp_vu53NySZhvSJ35XvUlxS1iB5FcKUx0hzV6cx4/110fx82f', 'classified'),
(460, 'P90', 'Резной приклад', 'http://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpopuP1FAR17OORIQJR5N2mkZeEmPPLPr7Vn35c18lwmO7Eu9mkiQDjqUdpN2ugctSVJw8-aV_Qr1foxern1JW-vsjLyXpkuCgjtHbD30vgac23PnE/110fx82f', 'classified'),
(461, 'Револьвер R8', 'Янтарный градиент', 'http://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpopL-zJAt21uH3cDx96t2ykb-GkuP1P7fYlVRD7dN-hv_E57P4jVC9vh4DPzixc9OLJ1draVqE-gS7x-3sh8K67Z3PnyRr7CQl5n3elhGxiU1Eb7E-gKafTULeWfJokQQsWQ/110fx82f', 'classified'),
(462, 'Револьвер R8', 'Градиент', 'http://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpopL-zJAt21uH3cDx96t2ykb-ZkuH7P63UhFRc7cF4n-T--Y3nj1H6qhBvNWz2d9fEIQY_Y1DVqwDqw7rt1pDvv87JyXAy7iV3tCqJzRO1hQYMMLI2sKHgfg/110fx82f', 'covert'),
(463, ' M4A4', 'Преданный паладин', 'http://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpou-6kejhnwMzFJTwW0865jYGHqOTlJrLDk1Rc7cF4n-T--Y3nj1H6r0tvYWzzJo6RdQQ2Zg6E-QS5xeno15C96JnJyiBk7HUj5C3fmxO1gwYMMLJ1i-HMUA/110fx82f', 'covert');

-- --------------------------------------------------------

--
-- Структура таблицы `main_drop`
--

CREATE TABLE IF NOT EXISTS `main_drop` (
  `title_index` varchar(255) NOT NULL,
  `decr_index` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `main_drop`
--

INSERT INTO `main_drop` (`title_index`, `decr_index`) VALUES
('dfgdfg', 'dfgdfgdfgcc');

-- --------------------------------------------------------

--
-- Структура таблицы `online`
--

CREATE TABLE IF NOT EXISTS `online` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ip` varchar(20) NOT NULL DEFAULT '0',
  `unix` varchar(60) NOT NULL DEFAULT '',
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `amount` int(11) NOT NULL,
  `user` bigint(20) NOT NULL,
  `time` int(11) NOT NULL,
  `status` int(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=269 ;

--
-- Дамп данных таблицы `payments`
--

INSERT INTO `payments` (`id`, `amount`, `user`, `time`, `status`) VALUES
(167, 1, 76561197993875383, 1457622355, 0),
(168, 1, 76561197993875383, 1457622448, 0),
(169, 1, 76561197993875383, 1457622509, 0),
(170, 1, 76561197993875383, 1457622560, 0),
(171, 1, 76561197993875383, 1457622741, 0),
(172, 1, 76561197993875383, 1457622944, 0),
(173, 1, 76561197993875383, 1457623031, 0),
(174, 1, 76561197993875383, 1457623091, 0),
(175, 1, 76561197993875383, 1457623098, 0),
(176, 1, 76561197993875383, 1457623119, 0),
(177, 333, 76561197993875383, 1457626712, 1),
(178, 1, 76561197993875383, 1457626733, 1),
(179, 2, 76561197993875383, 1457627336, 0),
(180, 1, 76561197993875383, 1457634615, 0),
(181, 1, 76561197993875383, 1457634660, 0),
(182, 1, 76561198105976261, 1457634685, 0),
(183, 99, 76561198105976261, 1457636947, 0),
(184, 99, 76561198105976261, 1457636947, 0),
(185, 99, 76561198105976261, 1457636952, 0),
(186, 99, 76561198105976261, 1457636960, 0),
(187, 99, 76561198105976261, 1457636966, 0),
(188, 99, 76561197993875383, 1457637483, 0),
(189, 2, 76561197993875383, 1457637491, 0),
(190, 99, 76561197993875383, 1457637498, 0),
(191, 1, 76561197993875383, 1457652327, 0),
(192, 1, 76561198105976261, 1457690295, 0),
(193, 1, 76561197993875383, 1457690903, 0),
(194, 131, 76561198105976261, 1457691277, 0),
(195, 1, 76561197993875383, 1457691541, 0),
(196, 1, 76561197993875383, 1457691620, 0),
(197, 1, 76561197993875383, 1457691924, 0),
(198, 1, 76561197993875383, 1457692531, 0),
(199, 22, 76561197993875383, 1457692793, 0),
(200, 12, 76561197993875383, 1457702079, 0),
(201, 12, 76561197993875383, 1457702150, 0),
(202, 1, 76561198122477719, 1457703298, 0),
(203, 900, 76561198192409550, 1457703314, 0),
(204, 10, 76561198122477719, 1457703861, 0),
(205, 10, 76561198122477719, 1457704048, 0),
(206, 1, 76561197993875383, 1457704053, 0),
(207, 10, 76561198122477719, 1457704368, 0),
(208, 20, 76561198122477719, 1457704480, 0),
(209, 20, 76561198122477719, 1457704530, 0),
(210, 100, 76561198122477719, 1457705681, 0),
(211, 1, 76561197993875383, 1457705827, 0),
(212, 10, 76561198122477719, 1457706173, 0),
(213, 10, 76561198122477719, 1457707041, 0),
(214, 100, 76561198122477719, 1457707075, 0),
(215, 10, 76561198122477719, 1457707219, 0),
(216, 10, 76561198122477719, 1457707271, 0),
(217, 99, 76561198122477719, 1457707319, 0),
(218, 100, 76561198122477719, 1457707324, 0),
(219, 1, 76561197993875383, 1457707789, 0),
(220, 1, 76561197993875383, 1457707885, 0),
(221, 100, 76561198122477719, 1457708336, 0),
(222, 100, 76561198122477719, 1457708731, 0),
(223, 50, 76561198122477719, 1457708827, 0),
(224, 50, 76561198122477719, 1457708889, 0),
(225, 100, 76561198122477719, 1457709209, 0),
(226, 1, 76561197993875383, 1457709280, 0),
(227, 100, 76561198122477719, 1457709369, 0),
(228, 100, 76561198122477719, 1457709443, 0),
(229, 100, 76561198122477719, 1457709529, 0),
(230, 100, 76561198122477719, 1457709656, 0),
(231, 100, 76561198122477719, 1457709722, 0),
(232, 100, 76561198122477719, 1457709776, 0),
(233, 1, 76561198105976261, 1457710394, 0),
(234, 1, 76561197993875383, 1457710859, 0),
(235, 1, 76561197993875383, 1457710871, 0),
(236, 99, 76561198122477719, 1457711022, 0),
(237, 100, 76561198122477719, 1457711310, 1),
(238, 100, 76561198122477719, 1457711335, 1),
(239, 1, 76561197993875383, 1457711399, 0),
(240, 1, 76561197993875383, 1457711447, 0),
(241, 1, 76561197993875383, 1457711533, 0),
(242, 2, 76561197993875383, 1457711586, 0),
(243, 1, 76561197993875383, 1457711675, 0),
(244, 1, 76561197993875383, 1457711693, 0),
(245, 100, 76561198122477719, 1457711843, 0),
(246, 1, 76561197993875383, 1457712117, 0),
(247, 99, 76561198105976261, 1457712192, 0),
(248, 99, 76561198105976261, 1457712197, 0),
(249, 100, 76561198122477719, 1457712219, 0),
(250, 2, 76561197993875383, 1457712243, 0),
(251, 7, 76561198122477719, 1457712265, 0),
(252, 6, 76561198122477719, 1457712349, 1),
(253, 1, 76561197993875383, 1457712444, 1),
(254, 1, 76561197993875383, 1457712630, 0),
(255, 1, 76561198122477719, 1457712967, 0),
(256, 1, 76561198122477719, 1457713144, 0),
(257, 1, 76561197993875383, 1457713398, 0),
(258, 1, 76561197993875383, 1457713467, 0),
(259, 1, 76561198122477719, 1457713663, 0),
(260, 1, 76561198105976261, 1457713931, 0),
(261, 1, 76561198105976261, 1457714115, 0),
(262, 1, 76561198122477719, 1457714136, 0),
(263, 1, 76561197993875383, 1457714179, 0),
(264, 2, 76561197993875383, 1457714277, 0),
(265, 1, 76561197993875383, 1457714639, 0),
(266, 200, 76561198048274620, 1459533753, 0),
(267, 2147483647, 76561198277770866, 1459559300, 0),
(268, 2, 76561198282405322, 1459701181, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `reg_admin`
--

CREATE TABLE IF NOT EXISTS `reg_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `reg_admin`
--

INSERT INTO `reg_admin` (`id`, `login`, `pass`) VALUES
(1, 'andreyzaykin', 'md103fq198b42a8df294441cd0550731c29278aam9iuwa');

-- --------------------------------------------------------

--
-- Структура таблицы `testu`
--

CREATE TABLE IF NOT EXISTS `testu` (
  `idnull` int(11) NOT NULL AUTO_INCREMENT,
  `asd` varchar(225) NOT NULL,
  `dsa` varchar(255) NOT NULL,
  PRIMARY KEY (`idnull`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `steamid` bigint(20) NOT NULL,
  `name` varchar(500) NOT NULL,
  `money` float NOT NULL,
  `avatar` varchar(500) NOT NULL,
  `tradelink` varchar(100) NOT NULL,
  `created` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `profit` bigint(20) NOT NULL DEFAULT '0',
  `cases_open` text NOT NULL,
  PRIMARY KEY (`steamid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`steamid`, `name`, `money`, `avatar`, `tradelink`, `created`, `status`, `profit`, `cases_open`) VALUES
(76561197988529028, 'BOT#1[TRANECSGO.RU]', 0, 'https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/9d/9d69cba8c9614cf1199b0a15c4a85e3fc8845140_full.jpg', '', 1460300672, 1, 0, ''),
(76561198048274620, 'Qip', 9991630, 'https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/43/43f7849ce382b910ccc3e391c9612081653cc32f_full.jpg', '', 1459533724, 1, 915, '{"1":[1459722799,2],"case2":[1459546518,2],"8":[1459724744,1]}'),
(76561198146062881, 'Гейб я тебя люлю д', 0, 'https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/e4/e4b1941def97536add897d406d6ae19c11dfd058_full.jpg', '', 1459599338, 1, 0, ''),
(76561198277770866, 'PASTOR', 100500, 'https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/50/50021e5bddee268358055d8e0cea52fc57e444d8_full.jpg', '', 1459559285, 1, 0, ''),
(76561198282405322, 'МАСТЕР ДИНЬ', 23, 'https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/3e/3ecba1cdb38bfd59db0f2f6effe9d4fb3f055683_full.jpg', 'https://steamcommunity.com/tradeoffer/new/?partner=322139594&token=njFGpBaQ', 1459701151, 1, 112, '{"1":[1460014770,1],"8":[1459702231,1]}'),
(76561198284423872, 'Tranecsgo.ru', 0, 'https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/69/69e7939d98474177cee8c22bc32c795a10c7c8e8_full.jpg', '', 1460014800, 1, 0, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
