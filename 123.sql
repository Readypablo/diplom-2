-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 26 2024 г., 22:57
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `nikilshikdb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `matches`
--

CREATE TABLE `matches` (
  `id` int NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `first_team` varchar(999) NOT NULL,
  `last_team` varchar(999) NOT NULL,
  `score` varchar(999) NOT NULL,
  `city_first` varchar(999) NOT NULL,
  `city_last` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `matches`
--

INSERT INTO `matches` (`id`, `date`, `time`, `first_team`, `last_team`, `score`, `city_first`, `city_last`) VALUES
(1, '2024-05-15', '19:00:00', 'Никельщик', 'Трактор', '2 : 3', 'Верхний Уфалей', 'Челябинск'),
(2, '2024-05-23', '18:00:00', 'Никельщик', 'Салават Юлаев', '4:1', 'Верхний Уфалей', 'Челябинск'),
(3, '2024-05-23', '17:00:00', 'Никельщик', 'Динамо М', '...', 'Верхний Уфалей', 'Москва'),
(4, '2024-05-31', '17:00:00', 'Никельщик', '\r\nЛокомотив', '...', 'Верхний Уфалей\r\n\r\n', 'Ярославль'),
(5, '2024-05-30', '18:00:00', 'Никельщик', '\rАк Барс', '...', 'Верхний Уфалей\r\n\r\n', 'Казань'),
(6, '2024-05-29', '16:00:00', 'Никельщик', '\rАмур', '...', 'Верхний Уфалей\r\n\r\n', 'Хабаровск');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int NOT NULL,
  `name` text NOT NULL,
  `text` text NOT NULL,
  `img` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `name`, `text`, `img`) VALUES
(3, 'Итоги областного фестиваля комплекса ГТО', '3 мая 2024 г. На стадионе «Никельщик» прошёл муниципальный этап областных соревнований обучающихся «Школа безопасности» с целью формирования у школьников ответственного отношения к личной и общественной безопасности и получения практических навыков поведения в экстремальных ситуациях.\r\n\r\nОрганизаторами соревнований выступили МБУДО «Центр дополнительного образования детей», Управление образования, 42 ПСЧ МЧС России по Челябинской области и СОЦ «Никельщик».\r\n\r\nВ соревнованиях приняли участие команды пяти школ: МБОУ «СОШ №1», МБОУ «СОШ №2», МБОУ «СОШ №4», МБОУ «Гимназия №7 «Ступени» и МБУДО «ДЮСШ» (участвовали школьники 13–14 лет).', '1.jpeg'),
(4, 'Чемпионате и Первенствах Саткинского Муниципального', '16-18 июня 2023г. в Челябинске проходило Первенство области по баскетболу 3×3. Всего участвовало более 100 команд в 5 возрастных группах. Наш город представляла команда ,, Никельщик” (мальчики 2009-2010 г.р). В нашем возрасте всего было 19 команд. Мы успешно отыграли групповой этап, победив соперников из Миасса и Златоуста. На стадии 1/4 обыграли сильную команду из Магнитогорска. В полуфинале проиграли будущим Чемпионам, команде ,, Олимп”(Школа Олимпийского резерва г. Челябинск). Затем в игре за 3-е место вновь проиграли и тоже команде из Челябинска (Школа Олимпийского резерва N-8). В итоге наша команда заняла 4 место из 19 команд. Выше только три команды из Челябинска из Школ Олимпийского резерва. Это неплохой результат на данном этапе.', '2.jpg'),
(8, 'Подвёл итоги турнира «Большой тур Сборной 2024»', ' Хороший турнир. На очень высоком уровне. Рад, что получилось сыграть солидно. Во всех пяти матчах взяли уверенные победы. Где-то вратарь нам помогал, а где-то мы помогали ему. Это командная победа и здорово, что мы выиграли все матчи. И сделали это уверенно и солидно.\r\n<br>\r\nВы единственный игрок из челябинского клуба в составе сборной, которая играла в этом турнире. Приятно было получить вызов? Трудно было ли влиться в сам коллектив?\r\nКаждый раз, когда вызывают в сборную, то это приятно. Это говорит о том, что тебя отметили, твою игру. Вливаться в коллектив вообще было несложно, потому что с кем-то уже знаком был по лиге, с кем-то в прошлом году уже приезжал на такой же майский турнир. Процентов восемьдесят команды я знал, и для меня не было каким-то сюрпризом. Мне влиться в коллектив было достаточно просто.', '3.png'),
(9, 'РОССИЯ 25 6:2 БЕЛОРУССИЯ I КРУПНАЯ ПОБЕДА В ТУЛЕ', 'Команда «России 25» продолжает «Большой тур Сборной 2024». В Туле коллектив Романа Ротенберга крупно обыграл сборную Белоруссии — 6:2. Шайбы на свой счёт записали Максим Джиошвили, Василий Глотов, Иван Выдренков, Максим Соркин, Сергей Толчинский и Прохор Полтапов. Защитник «Трактора» Илья Карпухин отметился голевой передачей.\r\n<br>\r\nСледующий поединок российская сборная проведёт 11 мая в Минске.', '4.jpeg'),
(10, 'Никельщик на вершине хоккейного Олимпа', 'команда \"Никельщик\" одержала победу в решающем матче чемпионата и поднялась на вершину хоккейного Олимпа! Нашим героям удалось победить сильнейших соперников и завоевать заслуженное первое место.\n<br>\nПуть к победе был долог и труден, но наша команда смогла преодолеть все трудности и показать свое лучшее лицо в решающий момент. Фанаты были в восторге от игры своих любимцев и без ума от радости!\n<br>\nПоздравляем команду \"Никельщик\" с победой и желаем им новых ярких побед и триумфов на хоккейном льду! Вы достойны этого звания и надеемся, что ваша победная серия продолжится еще долго. ¡Bravo, \"Никельщик\"!', '5.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `mobile`, `password`) VALUES
(26, '1', '1', '1', '1'),
(27, '3', '3', '3', '3'),
(28, 'admin', 'admin', '999', 'admin'),
(29, '5', '5', '5', '5'),
(30, 'Владимир', 'Привалов', '79123456789', '13123'),
(31, 'алексей', 'новал', '888', '888'),
(32, 'Артур', 'хайрул', '777', '777');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `matches`
--
ALTER TABLE `matches`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;