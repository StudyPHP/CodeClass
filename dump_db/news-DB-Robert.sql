-- phpMyAdmin SQL Dump
-- version 4.0.5
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 27 2014 г., 22:22
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
-- Структура таблицы `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `time` datetime NOT NULL,
  `media` varchar(50) NOT NULL,
  `category` varchar(30) NOT NULL,
  `content` text NOT NULL,
  `tags` varchar(50) NOT NULL,
  `original_resurse` varchar(50) NOT NULL,
  `original_logo` varchar(20) NOT NULL,
  `original_url` varchar(100) NOT NULL,
  `original_autor` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `time`, `media`, `category`, `content`, `tags`, `original_resurse`, `original_logo`, `original_url`, `original_autor`) VALUES
(1, 'Ukraine amnesty comes into force after protesters retreat', '2014-01-19 09:23:35', 'image', 'Ukraine', 'An amnesty for anti-government protesters in Ukraine has come into force after protesters ended their occupation of government buildings.\r\nThe prosecutor''s website said criminal charges would be dropped after the opposition left Kiev city hall and other locations.\r\nProtesters had held some of the buildings for more than two months.\r\nBut a sprawling tent city remains in a central square, where some denounced the decision to end the occupations.\r\nA group of radical protesters are reported to have blocked the entrance to the City Hall building, shortly after other opposition supporters vacated it.', 'Ukraine, revolution', 'BBC News', 'bbc_news', 'http://www.bbc.co.uk/news/world-europe-26220905', ''),
(2, 'Intel expects to reduce workforce by 5 percent this year', '2014-01-19 12:18:00', 'image', 'Tehnology', 'Intel expects that its workforce will decline by 5 percent as it heads into a year in which revenue is likely to be flat.\r\nIntel announced its expectations for a decline in its workforce in the wake of its fourth quarter earnings report. The world''s largest chip maker said Thursday that it saw signs that the PC market is stabilizing, and announced that fourth quarter profit was up 6 percent year over year, to US$2.6 billion, while revenue increased 3 percent to $13.8 billion.\r\nThe company said it had higher PC Client Group revenue, but that sales were hurt by slower growth in the Data Center Group.\r\nThe slump in the PC market was a drag on the company last year. Annual revenue declined 1 percent to $52.7 billion, while net income dropped 13 percent to $9.6 billion.\r\nIntel forecast 2014 revenue and gross margins to be flat.\r\nOn Friday, the company said it expects to reduce its workforce by 5 percent in 2014.', '', 'IT News', 'it_news', 'http://www.itnews.com/layoffs/73421/intel-expects-reduce-workforce-5-percent-year', 'Marc Ferranti'),
(3, 'Virtuoso''s ''Best of the Best'' hotels, excursions in Mexico', '2014-02-03 05:19:06', 'image', 'Travel', 'A total of 31 hotels and resorts in Mexico are included in Virtuoso''s recently unveiled directory listing 2014''s Best of the Best properties. \r\nThe portfolio spans 100 countries and features 980 hotels, resorts, spas, lodges, camps, villas and private islands and includes tips on how to experience each property to its fullest.\r\nVirtuoso''s Hotels & Resorts program is the cornerstone of the directory, now in its 22nd year.\r\nThe program, designed to benefit leisure travelers, offers hotel amenities valued at up to $450 per stay and available only when booked through a Virtuoso-affiliated travel adviser. \r\nThese include room upgrades, daily breakfast for two, early check-in/late checkout and extras such as spa treatments, airport transfers and rounds of golf.\r\nNew this year are 32 experiences/excursions paired with the Virtuoso hotels in various destinations around the world.\r\n', '', 'Travel Weekly', 'travel_weekly', 'http://www.travelweekly.com/Mexico-Travel/Virtuosos-Best-of-the-Best-hotels-excursions/', 'Gay Nagle Myers'),
(4, 'Are Americans as polarized as their politicians?', '2014-02-17 12:15:19', 'none', 'Politic', 'For much of February, Americans will unite around the 2014 Winter Olympics in Sochi. When the two weeks of international competition wraps up, they’ll have an opportunity to get back to fighting about the best way to ensure a future for the country they just cheered for, with the midterm elections coming up this fall.\r\nBut while division in Washington has been par for the course during President Obama’s second term, how true is that for the rest of the country? Jim DeMint, a former conservative senator from South Carolina and current president of the Heritage Foundation, said on CBS News’ “Face the Nation” Sunday that the deepest divides are in Washington.\r\n“Frankly people are less interested in the label of Republican and Democrat and they''re tired of that, but they will unite around some principles that will give us a stronger economy, a strong society, a strong America. And those are the things we want to talk about,” DeMint said of the work his organization is doing. “America''s not nearly as divided as it looks like they are in Washington.”\r\nOf course, DeMint was one of the Senate’s most conservative lawmakers and now runs a think tank that has taken a distinctly rightward turn under his leadership. Before talking about how Democrats and Republicans eschew labels, he said, “A lot of us as conservatives don’t feel like we are well represented in Washington right now. And I think a lot of Americans, regardless of political labels, feel the same way.” ', '', 'CBS News', 'cbs_news', 'http://www.cbsnews.com/news/are-americans-as-polarized-as-their-politicians/', 'REBECCA KAPLAN'),
(5, '''Letter bombs'' sent to British military recruiters', '2014-02-17 04:14:40', 'image', 'War and Terror', 'The British government held an emergency meeting Thursday after a string of crude but potentially viable explosive devices were mailed to armed forces recruitment offices.\r\nThe devices, sent to seven offices in southeast England, bore the hallmarks of Northern Irish terror attacks, Downing Street said.\r\nCounter-terrorism police are investigating and army bomb disposal crews were sent to assist. Sources said they could have caused injury.\r\nPrime Minister David Cameron chaired a meeting of the government''s COBRA emergencies committee to discuss the situation.\r\n"Seven suspect packages have been identified as containing small, crude, but potentially viable devices bearing the hallmarks of Northern Ireland-related terrorism," a Downing Street spokeswoman said afterwards.\r\n"These have now been safely dealt with by the police and bomb disposal units.\r\n"Guidance has been issued to staff at all military establishments and Royal Mail asking them to be extra vigilant and to look out for any suspect packages and the screening procedures for mail to armed forces careers offices is being reviewed."', '', 'SpaceWar.com', 'space_war', 'http://www.spacewar.com/reports/Letter_bombs_sent_to_British_military_recruiters_999.html', 'Staff Writers');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
