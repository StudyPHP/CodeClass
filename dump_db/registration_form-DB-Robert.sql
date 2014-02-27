-- phpMyAdmin SQL Dump
-- version 4.0.5
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 27 2014 г., 22:23
-- Версия сервера: 5.1.71-community-log
-- Версия PHP: 5.2.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `school_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `registration_form`
--

CREATE TABLE IF NOT EXISTS `registration_form` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `placeholder` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `required` varchar(50) NOT NULL,
  `pattern` varchar(50) NOT NULL,
  `coment` varchar(50) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Дамп данных таблицы `registration_form`
--

INSERT INTO `registration_form` (`id`, `name`, `placeholder`, `type`, `required`, `pattern`, `coment`) VALUES
(2, 'login', 'Dr.Watson', 'text', 'required', '', 'Your username'),
(3, 'pass', '********', 'password', 'required', '[\\W\\S]{8,20}', 'Enter password (>7 symbol)'),
(4, 'name', 'Ivan', 'text', 'required', '', 'Your name'),
(5, 'surname', 'Ivanov', 'text', 'required', '', 'Your last name'),
(6, 'country', 'Ukraine', 'text', '', '', 'Country'),
(7, 'phone', '+380 99 100-00-00', 'tel', '', '', 'Contact phone'),
(8, 'email', 'mail@mail.net', 'email', 'required', '', 'Contact e-mail'),
(9, 'adress', 'Polya str. 525', 'text', '', '', 'Post adress'),
(10, 'password_check', '********', 'password', 'required', '[\\W\\S]{8,20}', 'Enter password again');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
